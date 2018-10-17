@extends('master')
@section('title','Home')
@section('content')
<div class="container">            
    <div class='slider'>
        @include('slider.slider',array('slides'=>DB::table('galeryImages')->orderBy('priority','asc')->get()))
    </div>
</div>
@endsection