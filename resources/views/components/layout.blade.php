<html>
    <head>
        <title>{{$title}}</title>
         @vite(['resources/css/app.css', 'resources/js/app.js']) 
    </head>
    <body>
        <x-header/>

        <div class="border-2 border-black m-10 rounded-lg p-4">
  {{$slot}}
</div>
    </body>
    </html>
