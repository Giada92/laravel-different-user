@extends('layouts.app')


@section('content')
<div class="container">
    Crea un nuovo ristorante
    <form method="POST" action="{{ route('admin.restaurants.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nome ristorante</label>
            <input type="text" id="name" class="form-control-deliveroo" placeholder="Inserisci il nome" name="name" value="{{ old('name') }}" maxlength="100" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <small class="form-text text-muted">Lorem ipsum dolor sit amet.</small>
        </div>
        <button type="submit" class="btn btn-deliveroo">Crea</button>
    </form>
</div>
 
@endsection