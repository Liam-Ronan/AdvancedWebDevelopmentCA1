<x-layout>
        {{-- Using the serach bar from the partials folder --}}
        @include('partials._search')
            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

                {{-- If no projects found. return the p tag --}}
                @unless(count($projects) == 0)

                    {{-- Looping through all the projects--}}
                    @foreach($projects as $project)
                        {{-- Using the project component --}}
                        <x-project-card :project="$project"/>
                    @endforeach

                @else
                    <p>No Projects found</p>
                @endunless

            </div>

            <div class="mt-4 p-4">
                {{$projects->links()}}
            </div>
</x-layout>
