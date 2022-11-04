<x-layout>
    @include('partials._search')

{{--     <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a> --}}
    <a href="/" class="bg-black opacity-90 text-white rounded py-2 px-4 hover:bg-gray-700 ml-4 mb-8"><i class="fa-solid fa-arrow-left"></i> Back </a>
    <div class="mx-4 mt-4">

        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                {{-- <img class="h-48 mr-6 mb-6" src="{{$project->image ? asset
                    ('storage/' . $project->image) : asset('/images/no-image.png')}}" alt=""/> --}}

                    <img class="h-48 mr-6 mb-6" src="{{asset($project->image)}}" alt=""/>

                <h3 class="text-2xl mb-2">{{$project->title}}</h3>
                <div class="text-xl font-bold mb-4"><h3>Project completion:</h3>{{$project->date_created}}</div>

                <x-project-tags :tagsCsv="$project->tags"/>

                <div class="text-lg my-4"></div>
                <div class="border border-gray-200 w-full mb-6"></div>

                <div>
                    <h3 class="text-3xl font-bold mb-4">Project Description</h3>
                    <div class="text-lg space-y-6">
                        
                    <p>{{$project->description}}</p>

                        <div class="flex gap-8 justify-center">
                            <a href="mailto:test@test.com" class="block bg-black text-white mt-6 py-4 px-4 rounded-xl hover:opacity-80">
                                <i class="fa-solid fa-envelope"></i> Contact developer: {{$project->email}}</a>

                            <a href="{{$project->website}}" target="_blank" class="block bg-black text-white mt-6 py-4 px-4 rounded-xl hover:opacity-80">
                                <i class="fa-solid fa-globe"></i> Visit Project Website</a>

                        <a href="/projects/{{$project->id}}/edit" class="block bg-black text-white mt-6 py-4 rounded-xl hover:opacity-80">
                            <i class="fa-solid fa-pencil p-1"></i>Update</a>

                        <form method="POST" action="/projects/{{$project->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="inline bg-black mt-6 py-4 rounded-xl hover:opacity-80 text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>
