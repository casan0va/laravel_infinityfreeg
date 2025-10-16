@extends ('layouts.app')

@section('content')

<div class="text-center">
<h1> Telpas dati</h1> 
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Stāvs</th>
            <th>Korpuss</th>
            <th>Platība</th>
            <th>Statuss</th>
            <th>Darbības</th> <!-- Jauna kolonna pogai -->
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $data2->id }}</td>
            <td>{{ $data2->Stavs }}</td>
            <td>{{ $data2->Korpuss }}</td>
            <td>{{ $data2->Platiba }}</td>
            <td>{{ $data2->Statuss }}</td>
            <td>
                <a href="/data/sigma/{{$data2->id}}/delete" class="btn btn-danger btn-sm">Dzēst</a>
                <a href="{{ route('edittelpas', ['id' => $data2->id]) }}" class="btn btn-warning btn-sm">Rediģēt</a>
            </td>
        </tr>
    </tbody>
</table>




@endsection

