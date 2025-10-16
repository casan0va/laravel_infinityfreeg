@extends ('layouts.app')

@section('content')

<div class="text-center">
<h1> Telpas dati</h1> 
</div>
<div class="mb-3 text-end">
</div>
<div class="text-center mb-3">
    <a href="/data/alldata_telpas/createtelpas" class="btn btn-primary btn-lg">Izveidot</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Stāvs</th>
            <th>Korpuss</th>
            <th>Darbības</th> <!-- Jauna kolonna pogai -->
        </tr>
    </thead>
    <tbody>
        @foreach ($telpas as $el)
        <tr>
            <td>{{ $el->id }}</td>
            <td>{{ $el->Stavs }}</td>
            <td>{{ $el->Korpuss }}</td>
            <td>
               <a href="/data/sigma/{{ $el->id }}" class="btn btn-success btn-sm">Detalizeti</
              </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $telpas->links() }}

@endsection

<!--bloks pazinojumi -->
@if(session('success'))
<div class="alert alert-danger">
{{ session ('success') }}
</div>
@endif

 