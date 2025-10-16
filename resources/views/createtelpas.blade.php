@extends ('layouts.app')

@section('content')

<div class="text-center">
    <h1>Jauna Telpa</h1>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $kluda)
            <li>{{ $kluda }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ url('data/alldata_telpas/storetelpas') }}" method="post">
    @csrf
    <div class="container" style="max-width: 60%;">
        <div class="mb-3">
            <label for="Stavs" class="form-label">Stāvs</label>
            <input type="number" class="form-control" id="Stavs" name="Stavs" placeholder="Stāvs">
        </div>
        <div class="mb-3">
            <label for="Korpuss" class="form-label">Korpuss</label>
            <input type="text" class="form-control" id="Korpuss" name="Korpuss" maxlength="1" placeholder="Korpuss">
        </div>
        <div class="mb-3">
            <label for="Platiba" class="form-label">Platība (m²)</label>
            <input type="number" step="0.01" class="form-control" id="Platiba" name="Platiba" placeholder="Platība">
        </div>
        <div class="mb-3">
            <label for="Statuss" class="form-label">Statuss</label>
            <select class="form-control" id="Statuss" name="Statuss">
                <option value="Briva">Brīva</option>
                <option value="Aiznemta">Aizņemta</option>
                <option value="Remontdarbi">Remontdarbi</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Pievienot</button>
    </div>
</form>
@if(session('success_telpas'))
    <div class="alert alert-success mt-3">
        {{ session('success_telpas') }}
    </div>
@endif
@endsection
