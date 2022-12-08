<x-layout>
    <a href="{{URL::previous()}}" class="inline-block bg-black text-white ml-4 mb-4 p-3 rounded-xl hover:opacity-80"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24 border-gray-500">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-3">
                Add A Developer
            </h2>
        </header>

        {{-- Form for creating a new developer --}}
        <form method="POST" action="{{ route('admin.developers.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">Developer Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" 
                {{-- Keeping the form data when the form gets validated --}}
                value="{{old('name')}}"/>

                {{-- Showing the error when the validation finds an inaccuracy --}}
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="bio" class="inline-block text-lg mb-2">Bio</label>
                <textarea  class="border border-gray-200 rounded p-2 w-full"  name="bio"  rows="10"  
                placeholder="About you, Experience etc">{{old('bio')}}</textarea>

                @error('bio')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="address" class="inline-block text-lg mb-2">Address</label>
                <input type="text"class="border border-gray-200 rounded p-2 w-full" name="address" placeholder="Example: 55 beachview Heights"
                value="{{old('address')}}"/>

                @error('address')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}"/>

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">Developer Profile Picture</label>
                <input type="file"  class="border border-gray-200 rounded p-2 w-full"  name="image"/>

                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-black text-white rounded py-2 px-4 hover:opacity-80">Add Developer</button>
                <a href="{{URL::previous()}}" class="text-black ml-4 hover:underline"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>