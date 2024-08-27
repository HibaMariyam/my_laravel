<div class="flex flex-row gap-10 m-10">
        <a href="{{ route('home') }}" class="{{
            request()->routeIs('home') ? 'text-slate-500' : 'text-gray-500'
        }}">Home</a>
            <a href="{{ route('about') }}" class="{{request()->routeIs('about') ? 'text-red-500' : 'text-green-500'}}"> About</a>
  
           
        </div>