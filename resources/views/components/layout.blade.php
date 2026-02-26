<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{config('app.name')}}</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-[#ffedd6]">
        <div class="min-h-screen flex flex-col">
            {{--header--}}
            <x-header/>

            <div class="flex-1 flex flex-col">
                {{$slot}}
            </div>

            {{--footer--}}
            <x-footer/>
        </div>
    </body>
</html>
