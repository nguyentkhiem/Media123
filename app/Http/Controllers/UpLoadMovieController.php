<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddMovieRequest;
use Auth;
use App\Models\Movie;

class UpLoadMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['cates'] = Movie::cates();
        return view('frontend.upMovie', $data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddMovieRequest $request)
    {
        $filename = $request->img->getClientOriginalName();
        $movie = new Movie;
        $movie->movie_user = Auth::id();
        $movie->movie_name = $request->name;
        $movie->movie_slug = str_slug($request->name);
        $movie->movie_logo = $filename;
        $movie->movie_status = 0;
        if($request->url){
            $movie->movie_video = $request->url;
        }else{
            $movie->movie_video = 'https://openload.co/f/z2Ohu4BdeAY';
        }
        $movie->movie_info = $request->details;
        $movie->movie_cate = $request->cate;
        $movie->votes = 0;
        $movie->save();
        $request->img->move('storage/avatar', $filename);
        flash('Mục đăng tải của bạn sẽ phải chờ để quản trị viên phê duyệt')->success();
        return redirect()->intended('listMovie');
       
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
