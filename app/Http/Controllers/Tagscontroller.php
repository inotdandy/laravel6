<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tag;

class Tagscontroller extends Controller
{
    public function show(Tag $tag){

        dd($tag);
    }
}
