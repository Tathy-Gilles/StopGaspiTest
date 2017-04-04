<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function __construct() {
      $this->middleware('admin', ['except' => ['display_all']]);
    }

    public function display_all() {

      $videos = \DB::table('videos')->get();

      return view('video.display_all', compact('videos'));
    }

    public function index() {

      $videos = \DB::table('videos')->get();

      return view('administration.video.home', compact('videos'));
    }

    public function create() {

      $themes = \DB::table('themes')->get();

      return view('administration.video.create', compact('themes'));
    }

    public function store() {

      $this->validate(request(), [
        'theme_id' => 'required',
        'title' => 'required',
        'description' => 'required',
        'file' => 'required'
      ]);

      $path = request()->file('file')->store('public/videos');

      Video::create([
        'theme_id' => request('theme_id'),
        'title' => request('title'),
        'description' => request('description'),
        'file' => $path
      ]);

      return redirect('/admin/video');
    }

    public function edit($id) {

      $videos = Video::find($id);
      $themes = \App\Theme::all();

      return view('administration.video.edit', compact(['videos', 'themes']));
    }

    public function update($id) {

      // \DB::table('videos')->where('id', $id)->update(request());

      $video = Video::find($id);

      $video->title = request('title');
      $video->description = request('description');
      $video->theme_id = request('theme_id');

      if (request()->hasFile('file')) {
        $path = request()->file('file')->store('public/videos');
        $video->file = $path;
      }

      $video->save();

      return redirect('/admin/video');
    }

    public function delete($id) {

      \DB::table('videos')->where('id', $id)->delete();

      return redirect('/admin/video');
    }
}
