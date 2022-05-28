<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
// str limit
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get data from db

        return view('admin.post.index');
    }

    // get data for datatable
    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $posts = Post::with('tags')->latest()->get();
            return DataTables::of($posts)
                // addcolumn action and tag belongstomany
                ->addColumn('action', function ($post) {
                    return '<a href="' . route('admin.post.edit', $post->id) . '" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            <a href="' . route('admin.post.show', $post->id) . '" class="btn btn-xs btn-success"><i class="fa fa-eye"></i> Show</a>
                            <a href="' . route('admin.post.destroy', $post->id) . '" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>';
                })

                // add columns body str limit
                ->addColumn('content', function ($post) {
                    return Str::limit($post->content, 20);
                })
                ->addColumn('title', function ($post) {
                    return Str::limit($post->title, 20);
                })
                // data format date M d, Y
                ->addColumn('created_at', function ($post) {
                    return $post->created_at->format('M d, Y');
                })
                // if status is 1 then show publish else show unpublish
                ->addColumn('status', function ($post) {
                    if ($post->status == 1) {
                        return '<span class="badge badge-success">Publish</span>';
                    } else {
                        return '<span class="badge badge-danger">Unpublish</span>';
                    }
                })
                ->rawColumns(['action', 'body', 'title', 'created_at', 'status'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
