{{-- styling for each gird item so it can be used again as a component--}}
<div {{$attributes->merge(['class' => 'bg-gray-300 border border-gray-200 rounded p-6'])}}>
    {{$slot}}
</div>