@extends('layout')

    @section('content')
        @include('partials._search')
            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

                @unless(count($projects) == 0)

                @foreach($projects as $project)
                    <x-project-card :project="$project"/>
                @endforeach

                @else
                    <p>No Projects found</p>
                @endunless

            </div>

    @endsection