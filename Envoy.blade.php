<?php

/**
 * envoy run mytask --ip=111.111.111.111 --password=mypass
 */

@servers(['production' => ["roberto@{{ $ip }}"]])

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

@task('git', ['on' => 'production'])
    git clone -b {{ $branch }} "{{ $repo }}" {{ $deployment }}
@endtask
    
@task('install', ['on' => 'production'])
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
    
@task('live', ['on' => 'production'])
    ln -nfs {{ $deployment }} {{ $serve }}
@endtask

