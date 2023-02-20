@extends('layouts.web')


@section('head')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')
@include('home._partials.banner')
@include('home._partials.bannerWithServices')
@include('home._partials.about_us')
@endsection
@push('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endpush
