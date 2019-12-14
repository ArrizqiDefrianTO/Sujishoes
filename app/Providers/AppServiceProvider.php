<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('shops.*', 'App\Http\View\CategoryComposer');
        // Penjeleasan: Parameter pertama berisi tujuan dimana data dari View Composer akan di-passing, kita masukkan ecommerce.* yang berarti semua file yang berada didalam folder resources/views/ecommerce. Parameter kedua adalah sumber datanya, maka dalam hal ini adalah CategoryComposer
    }
}
