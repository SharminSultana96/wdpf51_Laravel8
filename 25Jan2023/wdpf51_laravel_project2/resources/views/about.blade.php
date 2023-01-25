@extends('layouts.app')
@section('title', 'About Us')
{{-- @section('title')
About Us --}}

@section('content')

<h1>Section Header</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, aperiam porro! Assumenda odit ad quaerat consequuntur doloremque minima, itaque dolorem. Porro quisquam vero praesentium recusandae, culpa impedit sed nobis eligendi.</p>
@show

@push('styles')
    <link rel="stylesheet" href="aboutstyle.css">

@endpush