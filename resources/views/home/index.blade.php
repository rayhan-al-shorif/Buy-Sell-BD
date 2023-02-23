@extends('layouts.web')


@section('head')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>




{{-- Slider pro --}}
<link rel="stylesheet" href="{{asset('web/assets/css/dark-mode.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.6.2/css/slider-pro.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.6.2/js/jquery.sliderPro.min.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>

{{-- <link rel="stylesheet" type="text/css" href="{{asset('web/assets/slider-pro/examples.css')}}" media="screen" /> --}}
{{-- <script type="text/javascript" src="{{asset('web/assets/slider-pro/jquery.sliderPro.min.js')}}"></script> --}}
@endsection

@section('content')
@include('home._partials.banner')
{{-- @include('home._partials.bannerWithServices') --}}
@include('home._partials.about_us')
@include('home._partials.what-we-do')
@include('home._partials.about_ceo')
@include('home._partials.service')
@include('home._partials.contact')
@endsection
@push('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endpush
