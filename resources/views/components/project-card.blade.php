@props(['project'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$project->image ? asset
        ('storage/' . $project->image) : asset('/images/no-image.png')}}" alt=""/>
        <div>
            <h3 class="text-2xl">
                <a href="/projects/{{$project->id}}">{{$project->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">
                <h4>This project was created on {{$project->date_created}}</h4>
            </div>

            <x-project-tags :tagsCsv="$project->tags"/>
            <div class="text-xl font-bold mb-4">
                <h4>Visit this projects website</h4>
                <a href="">{{$project->website}}</a>
            </div>
        </div>
    </div>
</x-card>