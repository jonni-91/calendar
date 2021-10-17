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

php artisan config:cache
php artisan migrate:refresh

php artisan make:controller Person/IndexController

php artisan storage:link

php artisan make:request ContactRequest

php artisan make:middleware SetLanguage

php artisan ui vue --auth

composer require intervention/image

composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
