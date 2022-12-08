{{-- Using the project component --}}
<x-layout>
    {{-- Using the search bar created in the partials folder --}}
    @include('partials._search')

    <a href="{{URL::previous()}}" class="inline-block bg-black text-white ml-4 mb-4 p-3 rounded-xl hover:opacity-80"><i class="fa-solid fa-arrow-left"></i> Back</a>

    <div class="mx-4">

    {{-- May Need to Use for back button! --}}
    {{-- {{ redirect()->getUrlGenerator()->previous() }} --}}

        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center p-10">

                <img class="h-96 mr-6 mb-6" src="{{$developer->image ? asset
                    ('storage/' . $developer->image) : asset('/images/user.png')}}" alt=""/>

                <h3 class="font-medium text-transparent text-4xl bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-blue-600 hover:to-cyan-500 p-5">{{$developer->name}}</h3>

            
                <div class="text-xl font-normal mb-3 mt-3"><h3><strong>Bio:</strong></h3>{{$developer->bio}}</div>

                <div class="text-xl font-normal mb-3 mt-3"><h3><strong>Address:</strong></h3>{{$developer->address}}</div>

            
                <div class="text-xl font-normal mb-3 mt-3 w-96"><h3><strong>Email:</strong></h3>{{$developer->email}}      

                        <a href="{{ route('admin.developers.edit', $developer) }}" class="block bg-black text-white mt-6 py-2 rounded-xl hover:opacity-80">
                            <i class="fa-solid fa-pencil p-1"></i>Update</a>

                        <form method="POST" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80" action="{{ route('admin.developers.destroy', $developer) }}">
                            {{-- Using csrf to prevent Cross-site request forgeries --}}
                            @csrf
                            {{-- Delete methods --}}
                            @method('DELETE')
                            <button><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                </div>
            </div>
        </x-card>
</x-layout>
