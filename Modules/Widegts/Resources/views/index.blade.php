@extends('widegts::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('widegts.name') !!}
        <a href="{{route('aboutus.create')}}">create</a>
        <a href="{{route('aboutus.edit',['id'=>2])}}">edit</a>
        <a href="{{route('aboutus.destroy',['id'=>2])}}">destroy</a>

    </p>
@endsection
