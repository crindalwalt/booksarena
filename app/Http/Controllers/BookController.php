<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        return view("homepage");
    }

    public function allBooks()
    {
        return view("books");
    }

    public function singleBook (){
        return view("book-detail");
    }

   

    public function checkout(){
        return view("checkout");
    }

    public function thankYou (){
        return view("thank-you");
    }


}
