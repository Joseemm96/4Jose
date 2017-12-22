<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;


//Simplemente por si quiero usar queries

class PostsController extends Controller
{   
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['index','show']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //eloquent, me gusta más
        // $posts = Post::all();
        
        //por si quiero hacerlo por queries
        // $posts = DB::select('SELECT * FROM posts');
        //paginacion
        $posts = Post::orderBy('created_at','desc')->paginate(10);



        // $posts = Post::orderBy('title','desc')->get();
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
                'title' => 'required',
                'body' => 'required',
                'cover_image' => 'image|nullable|max:1999'
            ]);
        //Subida de archivos
        if($request->hasFile('cover_image')){
            //Obtener archivo con su extensión
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Obtener solo el nombre de archivo

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Obtener extensión

            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //Storage

            $fileNameToStore = $filename. ''.time().'.'.$extension;

            //subir

            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);


        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        //Crear post

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();


        return redirect('/posts')->with('success', 'Post creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        //Checkear usuarios

        if(auth()->user()->id !==$post->user_id) {

            return redirect('/posts.edit')->with('error', 'No autorizado');

        }
        return view('posts.edit')->with('post', $post);

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
                $this -> validate($request, [
                'title' => 'required',
                'body' => 'required'
            ]);

                //Subida de archivos
        if($request->hasFile('cover_image')){
            //Obtener archivo con su extensión
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Obtener solo el nombre de archivo

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Obtener extensión

            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //Storage

            $fileNameToStore = $filename. ''.time().'.'.$extension;

            //subir

            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);


        } 

        //Crear post

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        // $post->user_id = auth()->user()->id;
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post editado!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);


        //Checkear el usuario correcto

        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error','No autorizado');
        }

        if($post->cover_image != 'noimage.jpg'){
            //Borrar
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        



        $post->delete();
        return redirect('/posts')->with('success', 'Post Eliminado!');
    }
}
