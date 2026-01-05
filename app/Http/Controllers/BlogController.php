<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    // public function index()
    // {
    //     return view('itr_blog');
    // }
    public function index(){
        $posts = Post::where('featured', false)
                    ->with('user', 'categories')
                    ->get();
        $featured = Post::featured()->take(3)->get();
        return view('itr_blog', [
            'posts' => $posts,
            'featured' => $featured
        ]);
    }

    public function posts(){
        return view('blog.posts.index');
    }
    
    public function showPost(Post $post){
        $post = $post->load('user','categories');
        return view('blog.posts.show', compact('post'));
    }

    public function showCategory(Category $category){
        $posts = $category->posts()->get();
        return view('blog.front.categories.show', compact('category', 'posts'));
    }
}
