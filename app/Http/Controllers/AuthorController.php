<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;

class AuthorController extends Controller
{

    public function allAuthors()
    {
        return view("authors");
    }

    public function singleAuthor()
    {
        return view("author-detail");
    }
}
