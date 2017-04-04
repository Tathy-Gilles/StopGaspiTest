@extends('layouts.admin')


@section('content')

  <div class='panel panel-primary'>
    <div class="panel-heading">
      <h3 class="panel-title">Administration des Pages du Site</h3>
    </div>
    <div class="panel-body">

      <table class="table table-striped table-bordered table-hover">
        <th>id</th><th>Slug</th><th>Date d'ajout</th><th>Date de MAJ</th><th>Action</th>
        @foreach($pages as $page)
          <tr>
            <td>{{ $page->id }}</td>
            <td>{{ $page->slug }}</td>
            <td>{{ $page->created_at }}</td>
            <td>{{ $page->updated_at }}</td>
            <td>
              <a href='/admin/page/edit/{{ $page->id }}'><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>

@endsection
