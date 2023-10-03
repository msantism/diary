@extends('layout')

@section('content')
<div class="container w-50 border p-4 mt-4">
    <form>
        <div class="mb-3">
            <label for="title" class="form-label">Título de la anotación</label>
            <input type="text" name="tittle" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Nueva anotación</button>
    </form>
</div>

@endsection