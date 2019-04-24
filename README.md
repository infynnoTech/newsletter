#Newsletter Subscribe Package

##This package will store newsletter subscription to the database

Steps:

1) composer require infynno/newsletter
2) config/app.php
<pre>
        'providers' => [
            ....

            Infynno\Newsletter\NewsletterServiceProvider::class,
        ]
</pre>
3) php artisan migrate
