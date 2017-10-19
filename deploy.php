<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'easywechat');

// Project repository
set('repository', 'https://github.com/php1108/easywechat.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('php128.top')
    ->user('www-deploy')
    ->set('deploy_path', '~/{{application}}');    
    
// Tasks
task('pwd', function () {
    $result = run('pwd');
    writeln("Current dir: $result");
});
task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

//before('deploy:symlink', 'artisan:migrate');

