@extends('layouts.app')

@section('title', 'Home')

@include('menu/menu')

<div class="container pt-0">
    @include('pages/home/components/home_slide')
    @include('pages/home/components/meet_magnus')
    @include('pages/home/components/learn_magnus')
    @include('pages/home/components/partners')
    @include('pages/home/components/footer')
</div>