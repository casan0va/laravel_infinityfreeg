@extends ('layouts.app')

@section('content')

<div class="text-center">
<h1> Kategorijas dati</h1> 
</div>
<div class="mb-3 text-end">
</div>
<div class="text-center mb-3">
    <!-- <a href="/data/alldata_telpas/createtelpas" class="btn btn-primary btn-lg">Izveidot</a> -->
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nosaukums</th>
            <th>Darbības</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kategorijas as $el)
        <tr>
            <td>{{ $el->Katnosaukums }}</td>
            <td>
              <a href="/data/alldata_kategorijas/sigma/{id}" class="btn btn-success btn-sm">Detalizeti</a> 
              </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $kategorijas->links() }}

@endsection

<!--bloks pazinojumi -->
@if(session('success'))
<div class="alert alert-danger">
{{ session ('success') }}
</div>
@endif
