<?php $password = isset($password) ? $password : null; ?>
<?php $storage = isset($storage) ? $storage : null; ?>
<?php $env = isset($env) ? $env : null; ?>
<?php $serve = isset($serve) ? $serve : null; ?>
<?php $deployment = isset($deployment) ? $deployment : null; ?>
<?php $builds = isset($builds) ? $builds : null; ?>
<?php $date = isset($date) ? $date : null; ?>
<?php $branch = isset($branch) ? $branch : null; ?>
<?php $appDir = isset($appDir) ? $appDir : null; ?>
<?php $repo = isset($repo) ? $repo : null; ?>
<?php $ip = isset($ip) ? $ip : null; ?>


<?php $__container->servers(['production' => ["roberto{{ $ip }}"]]); ?>

<?php
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
?>

<?php $__container->startMacro('deploy'); ?>
    git
    install
    live
<?php $__container->endMacro(); ?>

<?php $__container->startTask('git', ['on' => 'production']); ?>
    git clone -b <?php echo $branch; ?> "<?php echo $repo; ?>" <?php echo $deployment; ?>

<?php $__container->endTask(); ?>
    
<?php $__container->startTask('install', ['on' => 'production']); ?>
    cd <?php echo $deployment; ?>

    rm -rf <?php echo $deployment; ?>/storage
    ln -nfs <?php echo $storage; ?> <?php echo $deployment; ?>/storage
    echo "<?php echo $password; ?>" | sudo -S chmod 777 -R <?php echo $deployment; ?>/storage/
    echo "<?php echo $password; ?>" | sudo -S chmod 777 -R <?php echo $deployment; ?>/bootstrap/cache
    echo "<?php echo $password; ?>" | sudo -S chown -R roberto:www-data <?php echo $appDir; ?>

    ln -nfs <?php echo $env; ?> <?php echo $deployment; ?>/.env
    composer install --prefer-dist --no-dev
    php artisan migrate --force
<?php $__container->endTask(); ?>
    
<?php $__container->startTask('live', ['on' => 'production']); ?>
    ln -nfs <?php echo $deployment; ?> <?php echo $serve; ?>

<?php $__container->endTask(); ?>

