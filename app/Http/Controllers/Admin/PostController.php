<?php
/**
 * Created by PhpStorm.
 * User: dangnv
 * Date: 10/28/17
 * Time: 3:08 PM
 */

namespace App\Http\Controllers\Admin;


use App\Post;
use Illuminate\Http\Request;

class PostController extends AdminController
{
    function aboutUs(Request $request)
    {
        $post = Post::where('post_type', 'about')->first();
        if ($request->isMethod("GET")) {
            return view('admin.post.about', ['post' => $post]);
        } else {
            $content = $request->get('content');
            if (!$post) {
                $post = new Post();
            }
            $post->title = "About";
            $post->post_type = "about";
            $post->thumbnail = '';
            $post->content = $content;
            $post->save();
            return back();
        }
    }

    function delivery(Request $request)
    {
        $post = Post::where('post_type', 'delivery')->first();
        if ($request->isMethod("GET")) {
            return view('admin.post.delivery', ['post' => $post]);
        } else {
            $content = $request->get('content');
            if (!$post) {
                $post = new Post();
            }
            $post->title = "Chính sách giao hàng";
            $post->post_type = "delivery";
            $post->thumbnail = '';
            $post->content = $content;
            $post->save();
            return back();
        }
    }

    function listPost(Request $request)
    {
        $posts = Post::where('post_type', 'news')->orderBy('updated_at', 'desc')->get();
        return view('admin.post.list', ['list' => $posts]);
    }

    function add(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('admin.post.add');
        } else {
            $post = new Post();
            $post->title = $request->get('title');
            $post->description = $request->get('description');
            $post->content = $request->get('content');
            $post->thumbnail = $request->get('thumbnail');
            $post->post_type = 'news';
            $post->save();
            dflash('Lưu bản tin thành công', 'success');
            return back();
        }
    }

    function delete(Request $request)
    {
        $post = Post::find($request->get('id'));
        $post->delete();
        return redirect()->route('admin.post.list');
    }

    function edit(Request $request)
    {
        $post = Post::find($request->get('id'));
        if ($request->isMethod('GET')) {
            return view('admin.post.edit', ['post' => $post]);
        } else {
            $post->title = $request->get('title');
            $post->description = $request->get('description');
            $post->content = $request->get('content');
            $post->thumbnail = $request->get('thumbnail');
            $post->post_type = 'news';
            $post->save();
            dflash('Lưu bản tin thành công', 'success');
            return back();
        }
    }
}