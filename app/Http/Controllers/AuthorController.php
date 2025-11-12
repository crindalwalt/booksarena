<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;

class AuthorController extends Controller
{

    public function allAuthors()
    {
        $authors = Author::all();
        return view("authors",[
            'authors' => $authors,
        ]);
    }

    public function singleAuthor()
    {
        return view("author-detail");
    }
}
