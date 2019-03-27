<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    function index(){
        $post = \App\Post::all(); //trouver le post avec l’id 1
        //echo $post->author->name; //affiche le nom de l’auteur
   //     dd($post);
        
   //     var_dump($post->author->name);
        return view('articles');
    }

}
