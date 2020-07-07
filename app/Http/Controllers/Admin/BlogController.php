<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\admin\blog;

class BlogController extends Controller
{


        public function __construct(){
            $this->middleware('auth:admin');
        }

    /**
     * Display a listing of the resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blog::all(); 
        return view('admin.home', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Htt p\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]);
        if ($request->hasFile('image')) {
            // return 'yes';
            // php artisan storage:link
            $blogImage=$request->image->store('blog-image', 'public');
            // Storage::disk('local')->put($blogImage, 'public');
        }
        $blog = new blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image = $blogImage;
        $blog-> save();

        return redirect(route('blog.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = blog::where('id',$id)->first();
        return view('admin.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]);
        $blog = blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image = $request->image;
        $blog-> save();

        return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        blog::where('id', $id)->delete();
        return redirect()->back();
    }
}
