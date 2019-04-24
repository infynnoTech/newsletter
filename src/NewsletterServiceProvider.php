<?php
/**
 *
 */

namespace Infynno\Newsletter;

use Illuminate\Support\ServiceProvider;


class NewsletterServiceProvider extends ServiceProvider
{

    public function boot() {
        try {

            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/views','newsletter');
            $this->loadMigrationsFrom(__DIR__.'/database/migrations');
            
        } catch (Exception $e) {

           Log::error($e);

           return response()->json(['status' => 0, 'message' => 'Something went wrong.'], 500);
        }

    }

    public function register() {

    }

}


 ?>
