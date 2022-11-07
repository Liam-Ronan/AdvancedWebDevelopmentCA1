{{-- Passing the project data to this component --}}
@props(['project'])

{{-- Creating the project component --}}
<x-card>
    <div class="flex">
        {{-- Checks if an image is in the database -> else uses the default image --}}
        <img class="hidden w-48 mr-6 md:block" src="{{$project->image ? asset
        ('storage/' . $project->image) : asset('/images/andras-vas-Bd7gNnWJBkU-unsplash.jpg')}}" alt=""/>
        <div>
            <h3 class="text-2xl font-bold mb-3 mt-3">
                <a href="/projects/{{$project->uuid}}">{{$project->title}}</a>
            </h3>
            <div class="text-lg font-normal mb-3 mt-3">
                {{-- Reformatting the date to d/m/y --}}
                <h4>This project was uploaded on {{ \Carbon\Carbon::parse($project->date_created)->format('d/m/Y')}}</h4>
            </div>

            {{-- Using the tags component --}}
            <x-project-tags :tagsCsv="$project->tags"/>

            <div class="text-lg font-normal mb-3 mt-3 hover:underline">
                <a href="{{$project->website}}"><h4>Visit this projects website</h4></a>
            </div>
        </div>
    </div>
</x-card>