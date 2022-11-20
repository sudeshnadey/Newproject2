@extends('layouts.master')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
<div id="main">
    
    <div class="page-heading">
        <h3>User Dashboard</h3>
    </div>
    {{-- message --}}
    {!! Toastr::message() !!}

@endsection