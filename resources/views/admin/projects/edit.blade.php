<x-layout>
    <a href="{{URL::previous()}}" class="inline-block bg-black text-white ml-4 mb-4 p-3 rounded-xl hover:opacity-80"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-3">Update Project</h2>
            <p class="font-bold uppercase mb-4">Edit: {{$project->title}}</p>
        </header>

        <form method="POST" action="{{ route('admin.projects.update', $project)}}" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Project Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{$project->title}}"/>

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="date_created" class="inline-block text-lg mb-2">Date Created</label>
                <input type="date"class="border border-gray-200 rounded p-2 w-full" name="date_created" placeholder="Example: Senior Laravel Developer"
                value="{{$project->date_created}}"/>

                @error('date_created')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{$project->email}}"/>

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">Website/Application URL</label>
                <input  type="text"  class="border border-gray-200 rounded p-2 w-full"  name="website" value="{{$project->website}}"/>

                @error('website')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
                <input  type="text"  class="border border-gray-200 rounded p-2 w-full"  name="tags"  placeholder="Example: Laravel, Backend, Postgres, etc"
                value="{{$project->tags}}"/>

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">Project Logo/Image</label>
                <input  type="file"  class="border border-gray-200 rounded p-2 w-full"  name="image"/>

                <img class="h-48 mr-6 mb-6" src="{{$project->image ? asset
                    ('storage/' . $project->image) : asset('/images/andras-vas-Bd7gNnWJBkU-unsplash.jpg')}}" alt=""/>

                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Project Description/README</label>
                <textarea  class="border border-gray-200 rounded p-2 w-full"  name="description"  rows="10"  
                placeholder="Include tasks, requirements, purpose, etc">{{$project->description}}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mb-6">
                <label for="creator"  class="inline-block text-lg mb-2">Creator:</label>
                <select name="creator_id">
                    @foreach ($creators as $creator)
                        <option value="{{$creator->id}}"
                             {{(old('creator_id') == $creator->id) ? "selected" : ""}}>
                            {{$creator->name}}
                        </option>
                    @endforeach
                
                    @error('creator')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </select>
            </div>

            <div class="mb-6">
                <button class="bg-black text-white rounded py-2 px-4 hover:opacity-80">Update Project</button>
                <a href="/home" class="text-black ml-4 hover:underline"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>