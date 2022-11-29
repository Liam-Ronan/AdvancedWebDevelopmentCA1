{{-- Passing the project data to this component --}}
@props(['creator'])

{{-- Creating the project component --}}
<x-card>
    <div class="flex">
        {{-- Checks if an image is in the database -> else uses the default image --}}
            <h3 class="text-2xl font-bold mb-3 mt-3">{{$creator->id}}</h3>

            <h4>This project was uploaded on {{$creator->name}}</h4>

            <div class="text-lg font-normal mb-3 mt-3">
                <h5>{{$creator->address}}</h5>
            </div>
        </div>
    </div>
</x-card>