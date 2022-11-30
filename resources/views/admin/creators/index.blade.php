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
        <div class="lg:grid lg:grid-cols-8 ml-2 mt-5 text-center">
            <a href="{{ route('admin.creators.create') }}" class="bg-black text-white rounded-xl hover:opacity-80 p-5">
                <i class="fa-solid fa-pencil p-1"></i>Add A Creator</a>
        </div>
</x-layout>