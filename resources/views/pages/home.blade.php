@extends('layouts.master')

@section('title')
    <title>Home | Yasin Tech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Yasin Tech - IT Solution - Web Development" name="yasin tech,jasa pembuatan website di medan, web developer di medan,mobile developer di medan, cctv di medan,it solution di medan,setting router di medan,mikrotik di medan, jasa setting jaringan warnet di medan, web developer, web hosting, jasa pembuatan website, mobile developer, android, IOS, mobile app,aplikasi android">
    <meta content="Yasin Tech - IT Solution - Web Development" name="jasa pemasangan cctv, cctv, it solution, network enginer, setting router, mikrotik, setting mikrotik warnet, switch, jasa setting jaringan,jasa setting jaringan warnet, setting jaringan di medan">
@endsection

@section('header')
    @include('components.home_header')
@endsection

@section('body')
<main id="main">
    @include('components.about')
    
    @include('components.client')
    
    @include('components.whyus')
        
    @include('components.call_action')
       
    @include('components.portofolio')
    
    @include('components.review')
    
    @include('components.contact')
    
    @include('components.widget')
</main>
@endsection

@section('footer')
    @include('components.footer')
@endsection