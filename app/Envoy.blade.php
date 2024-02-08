@servers(['web' => ['alexandre-bellet@13.39.150.46'], 'workers' => ['alexandre-bellet@13.39.150.46']])
 
@task('put-into-prod', ['on' => 'workers'])
    composer update
    npm install
    npm run build
    php artisan migrate
    composer install --optimize-autoloader --no-dev
    php artisan optimize:clear
    php artisan optimize
@endtask