@extends('frontend.main_master')
@section('main')


@section('title')
Home | Pattaya Legal Services
@endsection

@section('meta')
<meta property="og:title" content="Home | Pattaya Legal Services" />
<meta property="og:image" content="{{ asset('upload/frontend/home/vision/1801456583651859.jpg') }}" />
<meta property="og:description" content="PATTAYA LEGAL SERVICES" />
@endsection


@include('frontend.home.header')

@include('frontend.home.service')

@include('frontend.home.vision')

@include('frontend.home.message')

@include('frontend.home.blog')







@endsection