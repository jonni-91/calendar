cd "$HOME"/Homestead
vagrant ssh

cd code/project/
# авто создание контроллера
php artisan make:controller SiteController

# ide helper
composer require --dev barryvdh/laravel-ide-helper
php artisan ide-helper:generate
