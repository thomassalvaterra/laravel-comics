@extends("layouts.app")

@section("content")
<ul>
    @foreach ($comics as $comic)
    <li>{{ $comic }}</li>
    @endforeach
</ul>
@endsection