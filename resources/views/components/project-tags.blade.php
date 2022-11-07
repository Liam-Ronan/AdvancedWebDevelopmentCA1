{{-- Passing the tags data to this component --}}
@props(['tagsCsv'])

{{-- Reformatting the tags to have commas between using the explode function --}}
@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    {{-- Looping through the tags --}}
    @foreach ($tags as $tag)
        
        <li class="flex items-center justify-center bg-black text-white uppercase hover:opacity-80 rounded-xl py-1 px-3 mr-2 text-xs mb-3 mt-3">
            {{-- when a tag is clicked the website will show other projects that have the same tags --}}
            <a href="/projects?tag={{$tag}}">{{$tag}}</a>
        </li>

    @endforeach
</ul>