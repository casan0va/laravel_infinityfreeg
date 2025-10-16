@extends('layouts.app')

@section('content')
<div class="container my-4" style="max-width:600px;">
  <h1 class="text-center mb-4">Rediģēt telpu</h1>

<form method="POST" action="{{ url('data/alldata_telpas/update/' . $et->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label">Stāvs</label>
      <input type="number" name="Stavs" class="form-control"
             value="{{ old('Stavs', $et->Stavs) }}">
      @error('Stavs')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Korpuss</label>
      <input type="text" name="Korpuss" class="form-control"
             maxlength="1"
             value="{{ old('Korpuss', $et->Korpuss) }}">
      @error('Korpuss')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Platība (m²)</label>
      <input type="number" step="0.01" name="Platiba" class="form-control"
             value="{{ old('Platiba', $et->Platiba) }}">
      @error('Platiba')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Statuss</label>
      <select name="Statuss" class="form-control">
        <option value="Briva" {{ old('Statuss', $et->Statuss) == 'Briva' ? 'selected' : '' }}>Brīva</option>
        <option value="Aiznemta" {{ old('Statuss', $et->Statuss) == 'Aiznemta' ? 'selected' : '' }}>Aizņemta</option>
        <option value="Remontdarbi" {{ old('Statuss', $et->Statuss) == 'Remontdarbi' ? 'selected' : '' }}>Remontdarbi</option>
      </select>
      @error('Statuss')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    <div class="d-flex justify-content-center gap-2">
      <button class="btn btn-warning">Saglabāt izmaiņas</button>
      <a href="/data/alldata_telpas" class="btn btn-secondary">Atpakaļ</a>
    </div>
  </form>
</div>
@endsection
