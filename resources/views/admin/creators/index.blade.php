<x-layout>
    {{-- Using the serach bar from the partials folder --}}
    @include('partials._search')
        <div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">

            {{-- If no projects found. return the p tag --}}
            @unless(count($creators) == 0)

                {{-- Looping through all the projects--}}
                @foreach($creators as $creator)
                    {{-- Using the project component --}}
                    <x-creator-card :creator="$creator"/>
                @endforeach

            @else
                <p>No creators found</p>
            @endunless

        </div>
</x-layout>