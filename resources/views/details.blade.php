@extends ('layouts.app')

@section('content')

<h1> Datu bazes - visi dati </h1>
<br>


<div class="alert alert-danger">
    <h4> ID: {{$data1->id}} </h4> 
    <h4> E-pasts: {{$data1->email}} </h4>
    <h4> Tema: {{$data1->subject}} </h4>
    <p> Teksts: {{$data1->message}} </p>
    <a href="/data/all/{{$data1->id}}/delete" class="btn btn-danger btn-sm">Dzēst</a>
    
    <br>

</div>


@endsection

<!--bloks pazinojumi -->

<!-- @if(session('sucess'))

{{session('sucess') }}
 
@endif -->