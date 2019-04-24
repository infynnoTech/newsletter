#Newsletter Subscribe Package

##This package will store newsletter subscription to the database

Steps:

1)We need to install package via composer
<pre>
    composer require infynno/newsletter
</pre>
2) config/app.php
<pre>
        'providers' => [
            ....

            Infynno\Newsletter\NewsletterServiceProvider::class,
        ]
</pre>
3) run migration command for create table to database
<pre>
    php artisan migrate
</pre>
