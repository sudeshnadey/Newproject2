@extends('layouts.master')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
<div id="main">
  
    {{-- message --}}
    {!! Toastr::message() !!}

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Information</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form " action="{{ route('form/save') }}" method="POST">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Full Name</label><br>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group ">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('fullName') is-invalid @enderror" value="{{ old('fullName') }}"
                                                placeholder="Enter full name" id="first-name-icon" name="fullName"><br><br>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Sex</label><br>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex" value="Male" id="male">
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex" value="Female" id="male">
                                        <label class="form-check-label" for="male">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex" value="Other" id="male">
                                        <label class="form-check-label" for="male">Other</label><br><br>
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                    <label>Email Address</label><br>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group ">
                                        <div class="position-relative">
                                            <input type="email" class="form-control @error('emailAddress') is-invalid @enderror" value="{{ old('emailAddress') }}"
                                                placeholder="Enter email" id="first-name-icon" name="emailAddress"><br><br>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Mobile Number</label><br>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}"
                                                placeholder="Enter phone number" name="phone_number"><br><br>
                                           
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                    <label>Position</label><br>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}"
                                                placeholder="Enter position" name="position"><br><br>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Departement</label><br>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group ">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('department') is-invalid @enderror" value="{{ old('department') }}"
                                                placeholder="Enter departement" name="department"><br><br>
                                           
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                    <label>Salary</label><br>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('salary') is-invalid @enderror" value="{{ old('salary') }}"
                                                placeholder="Enter salary" name="salary"><br><br>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-3 mb-3">Save</button>
                                    <button type="reset" class="btn btn-light-secondary me-3 mb-3">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
       
    </footer>
</div>
@endsection