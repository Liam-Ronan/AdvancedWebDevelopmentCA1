{{-- Display message to user after uploading project --}}
@if(session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed top-0 left-1/2 transform
    -translate-x-1/2 {{-- Using colour variable --}}bg-laravel text-white px-28 py-4">
        <p>{{session('message')}}</p>
    </div>
@endif