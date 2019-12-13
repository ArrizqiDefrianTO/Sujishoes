<?php

namespace App\Http\View;

use Illuminate\View\View;
use App\Category;

class CategoryComposer
{
    public function compose(View $view)
    {
        $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();
        //Query diatas digunakan untuk mengambil semua data kategori beserta turunannya untuk ditampilkan pada sidebar di halaman product.
        //KEMUDIAN PASSING DATA TERSEBUT DENGAN NAMA VARIABLE CATEGORIES
        $view->with('categories', $categories);
        // Query yang sama akan digunakan pada method selanjutnya, sehingga perlu kita kelompokkan agar tidak dituliskan secara berulang kali. Berhubung hasil dari query tersebut hanya akan digunakan pada view, maka pengelompokannya menggunakan View Composers.

        // View Composer memungkinkan kita membuat sebuah fungsi yang dapat di-passing ke semua view yang diinginkan, sehingga view tersebut dapat menggunakan data yang diberikan oleh View Composer.
        // inilah yang menjadi alesan kenapa didalem controller disisipkan folder view dengan isi file category composer
        // Agar View Composer diatas bisa digunakan, maka kita perlu untuk meneruskan data tersebut ke View dengan menggunakan bantuan Providers. Buka file AppServiceProvider.php dan masukkan code berikut didalam method boot()
    }
}
