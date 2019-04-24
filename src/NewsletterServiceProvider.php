<?php
/**
 *
 */

namespace Infynno\Newsletter;

use Illuminate\Support\ServiceProvider;


class NewsletterServiceProvider extends ServiceProvider
{

    public function boot() {

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','newsletter');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
             __DIR__.'/config/newsletter.php', 'newsletter'
        );

    }

    public function register() {

    }

}


 ?>
