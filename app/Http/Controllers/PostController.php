<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return 'index';
    }

     public function store(){
        return response()->json(
            [
                 'id'=>1,
            'title'=>'Games',
            'body'=>'Lets go'
            ]
            )->setStatusCode(201);
    }

    public function show(string $id){
        return [
            'id'=>1,
            'title'=>'Games',
            'body'=>'Lets go'
        ];
    }
}
