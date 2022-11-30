{{-- Passing the project data to this component --}}
@props(['creator'])

{{-- Creating the project component --}}
<x-card class="flex">
        <img class="w-48" src="{{$creator->image ? asset
            ('storage/' . $creator->image) : asset('/images/user.png')}}" alt=""/>
        <div class="text-center mt-6">
            <h4 class="text-md font-semibold mb-3 mt-3"><a href="{{ route('admin.creators.show', $creator)}}"> <strong class="font-medium text-transparent text-2xl bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-blue-600 hover:to-cyan-500">{{$creator->name}}</strong></a></h4>
    
            <div class="text-lg font-light mb-3 mt-3">
                <h5>{{$creator->address}}<h5>
            </div>
        </div>
</x-card>
