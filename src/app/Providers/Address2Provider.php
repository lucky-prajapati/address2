<?php

namespace Lucky\Address2\Providers;


use Illuminate\Support\ServiceProvider;

class Address2Provider extends ServiceProvider
{
    public function boot()
    {
        $this->publishesMigrations([
            __Dir__ .'/../../database/migrations'=>database_path('migrations'),
        ]);
    }
}
