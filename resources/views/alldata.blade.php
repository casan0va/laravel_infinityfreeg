@extends ('layouts.app')

@section('content')

<h1> Datu bazes - visi dati </h1>
<br>
@foreach ($data as $el)

<div class="alert alert-danger">
    <h4> ID: {{$el->id}} </h4> 
    <h4> E-pasts: {{$el->email}} </h4>
<br>
       <a href="/data/all/{{$el->id}}" class="btn btn-success btn-sm">Detalizeti</a>

</div>

@endforeach

@endsection

<!--bloks pazinojumi -->
@if(session('sucess'))

{{session('sucess') }}
 
@endif