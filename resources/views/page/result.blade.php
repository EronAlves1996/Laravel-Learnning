@extends('page.index')

@section('results')
    @foreach ($filtered as $item)
        <p>{{ $item }}</p>
    @endforeach

    <h3>Resultados em Base64</h3>
    @foreach ($filtered as $item)
        <p>@toBase64($item)</p>
    @endforeach
@endsection
