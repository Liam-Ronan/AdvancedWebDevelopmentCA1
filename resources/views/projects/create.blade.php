<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-3">
                Upload A Project
            </h2>
        </header>

        <form method="POST" action="/projects">
            @csrf
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Project Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"/>
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">date created</label>
                <input type="date"class="border border-gray-200 rounded p-2 w-full" name="title" placeholder="Example: Senior Laravel Developer"/>
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"/>
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">Website/Application URL</label>
                <input  type="text"  class="border border-gray-200 rounded p-2 w-full"  name="website"/>
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
                <input  type="text"  class="border border-gray-200 rounded p-2 w-full"  name="tags"  placeholder="Example: Laravel, Backend, Postgres, etc"/>
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">Project Logo/Image</label>
                <input  type="file"  class="border border-gray-200 rounded p-2 w-full"  name="logo"/>
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Project Description/README</label>
                <textarea  class="border border-gray-200 rounded p-2 w-full"  name="description"  rows="10"  
                placeholder="Include tasks, requirements, purpose, etc"></textarea>
            </div>

            <div class="mb-6">
                <button class="bg-black opacity-90 text-white rounded py-2 px-4 hover:bg-black">Add Project</button>
                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>