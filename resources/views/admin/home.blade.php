@extends('layouts.app')


@section('content')
<div class="container">
    {{-- @dd($newRestaurant) --}}
    @if (!$newRestaurant->isEmpty())
        @foreach ($newRestaurant as $item)
            <p>{{ $item->name }}</p>
        @endforeach
    @else
        <p>Nesun Ristorante associato</p>
    @endif
    
    <a href="{{ route('admin.restaurants.create') }}" class="btn btn-info">Crea</a>
</div>
 
@endsection