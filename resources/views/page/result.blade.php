@extends('page.index')

@section('results')
    @foreach ($filtered as $item)
        <p>{{ $item }}</p>
    @endforeach
@endsection
