@extends('user_template.layouts.template')

@section('main-content')

<h4>Add to cart page</h4>

@if (session()->has('message'))

<div class="alert alert-success">
    {{ session()->get('message') }}

</div>

@endif

@endsection