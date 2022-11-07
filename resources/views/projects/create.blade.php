<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-3">
                Upload A Project
            </h2>
        </header>

        {{-- Form for creating a new project --}}
        <form method="POST" action="/projects" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Project Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" 
                {{-- Keeping the form data when the form gets validated --}}
                value="{{old('title')}}"/>

                {{-- Showing the error when the validation finds an inaccuracy --}}
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="date_created" class="inline-block text-lg mb-2">Date Created</label>
                <input type="date"class="border border-gray-200 rounded p-2 w-full" name="date_created" placeholder="Example: Senior Laravel Developer"
                value="{{old('date_created')}}"/>

                @error('date_created')
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
                <label for="website" class="inline-block text-lg mb-2">Website/Application URL</label>
                <input  type="text"  class="border border-gray-200 rounded p-2 w-full"  name="website" value="{{old('website')}}"/>

                @error('website')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
                <input  type="text"  class="border border-gray-200 rounded p-2 w-full"  name="tags"  placeholder="Example: Laravel, Backend, Postgres, etc"
                value="{{old('tags')}}"/>

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">Project Logo/Image</label>
                <input type="file"  class="border border-gray-200 rounded p-2 w-full"  name="image"/>

                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Project Description/README</label>
                <textarea  class="border border-gray-200 rounded p-2 w-full"  name="description"  rows="10"  
                placeholder="Include tasks, requirements, purpose, etc">{{old('description')}}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-black text-white rounded py-2 px-4 hover:opacity-80">Add Project</button>
                <a href="/projects" class="text-black ml-4 hover:underline"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>