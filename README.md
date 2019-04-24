#Newsletter Subscribe Package

##This package will store newsletter subscription to the database

Steps:

1) composer require infynno/newsletter
2) config/app.php
        'providers' => [
            ....
            Infynno\Newsletter\NewsletterServiceProvider::class,
        ]
3) php artisan migrate
