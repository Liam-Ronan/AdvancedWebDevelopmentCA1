@extends('layout')

@section('content')
@include('partials._search')

<h2>
    {{$project['title']}}
</h2>
<p>
    {{$project['description']}}
</p>

@endsection