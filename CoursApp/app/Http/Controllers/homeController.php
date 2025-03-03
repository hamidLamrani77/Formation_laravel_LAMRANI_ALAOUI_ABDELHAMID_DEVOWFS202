<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function article($id){
        $posts = [
            1 => ['title' =>'Laravel'],
            2 => ['title' =>'ReactJS']
        ];
        return view('posts.show', [
            'title' => $posts[$id]['title'] ?? 'Unknown Post'
        ]);
    }

    public function home(){
        return view('home');
    }
}
