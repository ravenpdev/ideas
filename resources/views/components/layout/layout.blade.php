<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }}</title>
        @vite('resources/css/app.css')
    </head>

    <body>
        <x-navbar />
        <div class="container mx-auto px-4 pt-24 lg:px-0">
            <div class="grid grid-cols-12 gap-4">
                <div class="hidden lg:col-span-3 lg:block">
                    Left side
                </div>
                <div class="col-span-12 lg:col-span-6">
                    {{ $slot }}
                </div>
                <div class="lg-col-span-3 hidden lg:block">
                    Right side
                </div>
            </div>
        </div>
    </body>

</html>
