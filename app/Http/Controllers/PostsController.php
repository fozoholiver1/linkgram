<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function create(){

        return view('post.create');
    }

    public function store(){

        $data= request()->validate([//validation
            'caption'=>'required',
            'image'=>['image','required'],
        ]);

        $imagepath=request('image')->store('uploads','public'); //this will create an uploads link an directory in our
        //public directory

        //auth()->user()->posts()->create($data); // we are saving data through the user-post relationship

      auth()->user()->posts()->create([ //saving  the uploads link and caption to db
            'caption'=>$data['caption'],
            'image'=>$imagepath,
        ]); 

        //Post::create($data);
       //dd( request()->all());

       return redirect( '/profiles/'. auth()->user()->id);
    }
}
