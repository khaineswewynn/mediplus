@extends('layout.master')

@section('main')
<section>
@php
    $num=98;
@endphp

@if ($num%2==0)
    {{"Even"}}
@else
    {{"Odd"}}
@endif

@switch(true)
    @case($num%2==0)
        {{"num is even"}}
        @break
          
    @default
        {{"num is odd"}}
        @break
        
@endswitch



</section>    
@endsection