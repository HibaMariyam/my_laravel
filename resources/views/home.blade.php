<x-layout>
<x-slot name="title"></x-slot>
<h1>Welcome to Homepage!</h1>
@php
$fruits=Array("apple","banana","orange")
@endphp

@foreach($fruits as $fruit
)
<x-fruit-card>{{$fruit}}</x-fruit-card>
@endforeach

@php
$nums=[1,2,3]
@endphp
@if(count($nums)>1)
<p>true</p>
@else
<p>no data</p>
@endif


</x-layout>


