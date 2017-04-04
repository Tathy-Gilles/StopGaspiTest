<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function __construct() {
      $this->middleware('admin', ['only' => ['index', 'edit', 'update']]);
    }

    public function display($page) {

    }

    public function conseils() {
      return view('pages/conseils');
    }

    // Admin Actions

    public function index() {
      $pages = Page::all();

      return view('administration.page.home', compact('pages'));
    }

    public function edit($id) {
      $pages = Page::find($id);

      return view('administration.page.edit', compact('pages'));
    }

    public function update($id) {
      $page = Page::find($id);

      $page->content = request('content');
      $page->save();

      return redirect('/admin/page');
    }

}
