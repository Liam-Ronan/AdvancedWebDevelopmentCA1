<x-layout>
    @include('partials._search')

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <div class="mx-4">

        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-48 mr-6 mb-6" src="{{$project->image ? asset
                    ('storage/' . $project->image) : asset('/images/no-image.png')}}" alt=""/>

                <h3 class="text-2xl mb-2">{{$project->title}}</h3>
                <div class="text-xl font-bold mb-4"><h3>Project completion:</h3>{{$project->date_created}}</div>

                <x-project-tags :tagsCsv="$project->tags"/>

                <div class="text-lg my-4"></div>
                <div class="border border-gray-200 w-full mb-6"></div>

                <div>
                    <h3 class="text-3xl font-bold mb-4">Project Description</h3>
                    <div class="text-lg space-y-6">
                        
                        {{$project->description}}

                        <a href="mailto:test@test.com" class="block bg-black text-white mt-6 py-4 rounded-xl hover:opacity-80">
                            <i class="fa-solid fa-envelope"></i> Contact developer: {{$project->email}}</a>

                        <a href="https://test.com" target="_blank" class="block bg-black text-white mt-6 py-4 rounded-xl hover:opacity-80">
                            <i class="fa-solid fa-globe"></i> Visit Project Website: {{$project->website}}</a>

                        <a href="/projects/{{$project->id}}/update" class="block bg-black text-white mt-6 py-4 rounded-xl hover:opacity-80">
                            <i class="fa-solid fa-pencil p-1"></i>Update</a>
                    </div>
                </div>
            </div>
        </x-card>

    {{--     <x-card class="mt-4 p-4 flex space-x-8">
            <a href="/projects/{{$project->id}}/update" >
                <i class="fa-solid fa-pencil p-2"></i>Update</a>
        </x-card> --}}
    </div>
</x-layout>
