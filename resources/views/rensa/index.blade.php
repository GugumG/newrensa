@extends('rensa.layout')

@section('title', 'Rensa new website')

@section('content')
    @include('rensa.sections.hero')
    @include('rensa.sections.about')
    @include('rensa.sections.why-us')
    @include('rensa.sections.services')
    @include('rensa.sections.cta')
    @include('rensa.sections.katalog')
    @include('rensa.sections.store')
    @include('rensa.sections.testimoni')
    @include('rensa.sections.faq')
    @include('rensa.sections.contact')
@endsection 