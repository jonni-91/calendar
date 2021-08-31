cd "$HOME"/Homestead
vagrant ssh

composer update

cd code/project/
# создание контроллера
php artisan make:controller SiteController

# ide helper
composer require --dev barryvdh/laravel-ide-helper
php artisan ide-helper:generate

php artisan make:auth

php artisan migrate

php artisan make:controller Person/IndexController

php artisan storage:link

php artisan make:request ContactRequest
