@extends('layouts.site')

@section('content')

    @include('sections.sliders')
    @include('sections.about')
    @include('sections.services')
    @include('sections.projects')
    @include('sections.testimonials')
    {{-- @include('sections.prices') --}}
    @include('sections.contact')

@endsection
