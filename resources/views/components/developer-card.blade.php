{{-- Passing the project data to this component --}}
@props(['developer'])

{{-- Creating the project component --}}
<x-card class="flex">
            <img class="w-48 mr-6 md:block" src="{{$developer->image ? asset
                ('storage/' . $developer->image) : asset('/images/user.png')}}" alt=""/>
            <div class="text-center mt-6">
                <h4 class="text-md font-semibold mb-3 mt-3"><a href="{{ route('admin.developers.show', $developer)}}"> <strong class="font-medium text-transparent text-2xl bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-blue-600 hover:to-cyan-500">{{$developer->name}}</strong></a></h4>
        
                <div class="text-lg font-light mb-3 mt-3">
                    <h4><strong>bio: </strong></h4><h5>{{$developer->bio}}<h5>
                </div>

                <div class="text-lg font-light mb-3 mt-3">
                    <h4><strong>address: </strong></h4><h5>{{$developer->address}}<h5>
                </div>

                <div class="text-lg font-light mb-3 mt-3">
                    <h4><strong>email: </strong></h4><h5>{{$developer->email}}<h5>
                </div>
            </div>
</x-card>
