@extends ('layouts.app')

@section('content')

<div class="text-center">
<h1> Kategorijas dati</h1> 
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nosaukums</th>
            <th>Darbības</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $data3->id }}</td>
            <td>{{ $data3->Katnosaukums }}</td>
               <td>

            </td>
        </tr>
    </tbody>
</table>




@endsection

