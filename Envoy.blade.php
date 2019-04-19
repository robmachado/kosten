
@servers(['prod' => ['roberto@104.248.48.247']])

@setup
    $repo = 'git@github.com:robmachado/kosten.git';
    $appDir = '/var/kosten';
    $branch = 'master';
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('YmdHis');
    
    $builds = $appDir . '/builds';
    $deployment = $builds . '/' . $date;
    $serve = $appDir . '/source';
    $env = $appDir . '/.env';
    $storage = $appDir . '/storage';
@endsetup

@story('deploy')
    git
    install
    live
@endstory

@task('git', ['on' => 'prod'])
    git clone -b {{ $branch }} "{{ $repo }}" {{ $deployment }}
@endtask
    
@task('install', ['on' => 'prod'])
    cd {{ $deployment }}
    rm -rf {{ $deployment }}/storage
    ln -nfs {{ $storage }} {{ $deployment }}/storage
    echo "{{ $password }}" | sudo -S chmod 777 -R {{ $deployment }}/storage/
    echo "{{ $password }}" | sudo -S chmod 777 -R {{ $deployment }}/bootstrap/cache
    echo "{{ $password }}" | sudo -S chown -R roberto:www-data {{ $appDir }}
    ln -nfs {{ $env }} {{ $deployment}}/.env
    composer install --prefer-dist --no-dev
    php artisan migrate --force
@endtask
    
@task('live', ['on' => 'prod'])
    ln -nfs {{ $deployment }} {{ $serve }}
@endtask

