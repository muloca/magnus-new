@extends('layouts.app')

@section('title', 'Home')

@include('menu/menu')

<div class="container pt-0">
    @include('pages/home/components/home_slide')
</div>