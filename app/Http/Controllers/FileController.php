<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
  public function __construct() {
    $this->middleware('admin');
  }

  public function display_all() {

    $files = \DB::table('files')->get();

    return view('file.display_all', compact('files'));
  }

  public function index() {

    $files = \DB::table('files')->get();

    return view('administration.file.home', compact('files'));
  }

  public function create() {

    $themes = \DB::table('themes')->get();

    return view('administration.file.create', compact('themes'));
  }

  public function store() {

      $this->validate(request(), [
        'theme_id' => 'required',
        'title' => 'required',
        'description' => 'required',
        'file' => 'required'
      ]);

      $path = request()->file('file')->store('public/files');

      File::create([
        'theme_id' => request('theme_id'),
        'title' => request('title'),
        'description' => request('description'),
        'file' => $path
      ]);

      return redirect('/admin/file');
  }

  public function edit($id) {

    $files = File::find($id);
    $themes = \App\Theme::all();

    return view('administration.file.edit', compact(['files', 'themes']));
  }

  public function update($id) {

    $file = File::find($id);

    $file->title = request('title');
    $file->description = request('description');
    if(request('theme_id')) {
      $file->theme_id = request('theme_id');
    }
    if (request()->hasFile('file')) {
      $path = request()->file('file')->store('public/files');
      $file->file = $path;
    }

    $file->save();

    return redirect('/admin/file');
  }

  public function delete($id) {

    \DB::table('files')->where('id', $id)->delete();

    return redirect('/admin/file');
  }

}
