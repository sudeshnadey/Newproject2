@extends('layouts.master')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
<div id="main">
    <header class="mb-3">
        
    </header>
    
        {{-- message --}}
        {!! Toastr::message() !!}
        <section class="section">
            <div class="card">
                <div class="card-header">
                   Customer list
                </div>
                <div class="card-body">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Sex</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Salary</th>
                                <th class="text-center">Modify</th>
                            </tr>    
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td class="id">{{ ++$key }}</td>
                                    <td class="name">{{ $item->rec_id }}</td>
                                    <td class="name">{{ $item->full_name }}</td>
                                    <td class="name">{{ $item->sex }}</td>
                                    <td class="email">{{ $item->email_address }}</td>
                                    <td class="phone_number">{{ $item->phone_number }}</td>
                                    <td class="phone_number">{{ $item->position }}</td>
                                    <td class="phone_number">{{ $item->department }}</td>
                                    <td class="phone_number">{{ $item->salary }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('form/staff/new') }}">
                                            <button class="btn btn-primary">New</button>
                                        </a>
                                        <a href="{{ url('form/view/detail/'.$item->id) }}">
                                            <button class="btn btn-primary">Edit</button>
                                        </a>    
                                        <a href="{{ url('delete/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><button class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
   
</div>
@endsection
