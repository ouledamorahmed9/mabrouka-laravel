<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Admin</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">

        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
          // Custom Tailwind theme to add our fonts
          tailwind.config = {
            theme: {
              extend: {
                fontFamily: {
                  'sans': ['Poppins', 'sans-serif'],
                }
              }
            }
          }
        </script>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        {{-- MODIFICATION: Changed background to match your site's theme --}}
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black">
            <div>
                <a href="/">
                    {{-- MODIFICATION: Used your logo component and adjusted size --}}
                    <img src="{{ asset('images/logo.png') }}" alt="Mabrouka Fashion Logo" class="w-40 h-auto">
                </a>
            </div>

            {{-- MODIFICATION: Styled the form card for a dark theme --}}
            <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-gray-900 border border-gray-700 shadow-lg overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
