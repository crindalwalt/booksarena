<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;



Route::get("/",[BookController::class,'index'])->name("home");

Route::prefix("/books")->group(function (){
    Route::get("/",[BookController::class, 'allBooks'])->name("books.index");

    Route::get("/1",[BookController::class, "singleBook"])->name("books.show");

    Route::get('/1/buy',[BookController::class , "checkout"])->name("books.checkout");

    Route::get("/1/thankyou", [BookController::class , "thankYou"])->name("books.thankyou");


});


Route::prefix("authors")->group(function (){

    Route::get("/",[AuthorController::class, "allAuthors"])->name("authors.index");

    Route::get("/shahzad-farooq",[AuthorController::class , "singleAuthor"])->name("authors.show");


});
