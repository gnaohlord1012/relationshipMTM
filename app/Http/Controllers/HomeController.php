<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {
        $all = Author::with('book')->get();
        foreach($all as $item){
            echo $item->name. '<br>';
            foreach($item->book as $item2)
            {
                echo $item2->title. '<br>';
            }
            echo '<br>';
        }
    }
}
