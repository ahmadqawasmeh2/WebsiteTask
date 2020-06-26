<?php

namespace App\Http\Controllers\pagescontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\User;
use Auth;
use App\Http\Requests\pagescontroller\CreateRequest;

class HomeController extends Controller
{
	public function __construct()
    {
     $this->middleware('auth',['except'=>['index']]);
    }

     public function Addpost()
    {
    	return view('posts.Addpost');
    }

	 public function index()
    {
    	$posts=post::orderBy('created_at','desc')->get();

     return view('home.index')->with('posts',$posts);
    	
    }

     public function createpost(CreateRequest $request)
    {
    	$data = $request->all();
    	$data["user_id"] = Auth::user()->id;
    	 $post= post::create($data);
         return redirect()->route("Pages.pages.show")->with('success','Done successfully');
    }

    public function Show()
    {
    $posts=post::where("user_id" , Auth::user()->id)->orderBy('created_at','desc')->get();

     return view('posts.show')->with('posts',$posts);
    }

     public function Editpost(Post $post)
    {

    	if (auth()->user()->id !== $post->user_id)
        {
         return  redirect('/')->with('error','Do not have post');
        }

        return view('posts.edit')->with('post',$post);
    }

    public function delete(Post $post)
    {
    	$post->delete();
    	return redirect()->route("Pages.pages.show");
    }   
}
