{{-- The main layout for most pages, containing the nav bar and footer --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        {{-- Linking alpine js for the flash message and Tailwind CSS --}}
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        {{-- Creating a colour variable that may be used throughout the project --}}
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Projects | View Projects</title>
    </head>
    <body class="mb-48">
            <nav class="flex justify-between items-center mb-6 p-4 bg-black">
                <a href="{{ route('home.index') }}"><img class="w-24" src="{{asset('images/ales-nesetril-Im7lZjxeLhg-unsplash.jpg')}}" alt="" class="logo"/></a>
                <ul class="flex space-x-4 mr-4 text-lg">
                    <li>
                        <a href="{{ route('home.index') }}" class="hover:opacity-50 text-white"><i class="fa-solid fa-code p-2"></i>Projects</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.projects.create') }}" class="hover:opacity-50 text-white"><i class="fa-solid fa-upload p-2"></i>Upload Project</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.creators.index')}}" class="hover:opacity-50 text-white"><i class="fa-sharp fa-solid fa-users p-2"></i>Creators</a>
                    </li>
                    <li>
                        <a href="/" class="hover:opacity-50 text-white"><i class="fa-solid fa-arrow-right-to-bracket p-2"></i>Log Out</a>
                    </li>
                </ul>
            </nav>
        <main>
            {{$slot}}
        </main>
        <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-black text-white h-24 mt-24 md:justify-center">
            <a href="{{ route('admin.projects.create') }}" class="absolute center-1/3 center-5 text-white py-2 px-5 hover:opacity-50"><i class="fa-solid fa-upload p-2"></i>Upload Project</a>
        </footer>

        {{-- When user creates, updates or deletes a project, a message will be shown on the index page --}}
        <x-flash-message/>
    </body>
</html>