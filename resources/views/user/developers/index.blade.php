<x-layout>
    {{-- Using the serach bar from the partials folder --}}
    @include('partials._search')
        <div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">

            {{-- If no projects found. return the p tag --}}
            @unless(count($developers) == 0)

                {{-- Looping through all the projects--}}
                @foreach($developers as $developer)
                    {{-- Using the project component --}}
                    <x-developer-card :developer="$developer"/>
                @endforeach

            @else
                <p>No developer found</p>
            @endunless
        </div>
        <div class="lg:grid lg:grid-cols-8 ml-2 mt-5 text-center">
            <a href="{{ route('admin.developers.create') }}" class="bg-black text-white rounded-xl hover:opacity-80 p-5">
                <i class="fa-solid fa-pencil p-1"></i>Add A developer</a>
        </div>
</x-layout>