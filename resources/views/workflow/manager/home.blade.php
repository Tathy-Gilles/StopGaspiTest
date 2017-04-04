@extends('layouts.manager')


@section('content')

  <div class='panel panel-primary'>
    <div class="panel-heading">
      <h3 class="panel-title">Partenaire du programme StopGaspi</h3>
    </div>
    <div class="panel-body">
      @foreach($users as $user)
        <div onclick="returnCompany('{{ $user->siret }}')">
          {{ $user->company }}
        </div>
      @endforeach

    </div>
  </div>
{{ $users->links() }}

@endsection

@section('scripts')
  <script src='/js/scripts.js'></script>
@endsection
