@extends('master')
@section('content')
		@include('pages.homepage.section1') <!-- Main slider -->
		@include('pages.homepage.section2') <!-- Slider news -->
		@include('pages.homepage.section3') <!-- Featured Products -->
		@include('pages.homepage.section4') <!-- About -->
		@include('pages.homepage.section5') <!-- Recent News -->
		@include('pages.homepage.section6') <!-- Official Partner -->
@endsection
@push('scripts')
@endpush