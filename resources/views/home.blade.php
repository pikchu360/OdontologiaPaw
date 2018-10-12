@extends('master')
@section('title','Home')
@section('content')
    <div class='slider'>
        @include('slider.slider',array('slides'=>DB::table('galeryImages')->orderBy('priority','asc')->get()))
    </div>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
@endsection