@extends('layouts.master')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
<div id="main">

       
 <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dispay Information</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form " action="{{ route('form/view/update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data[0]->id }}">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>ID</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter user id" id="first-name-icon" name="rec_id" value="{{ $data[0]->rec_id }}" readonly>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <label>Full Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group ">
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter full name" id="first-name-icon" name="fullName" value="{{ $data[0]->full_name }}">
                                                
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-md-4">
                                        <label>Sex</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="sex" value="Male" {{ ($data[0]->sex=="Male")? "checked" : "" }} id="sex1">
                                            <label class="form-check-label" for="sex1">Male</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="sex" value="Female" {{ ($data[0]->sex=="Female")? "checked" : "" }} id="sex2">
                                            <label class="form-check-label" for="sex2">Female</label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="sex"  value="Other" {{ ($data[0]->sex=="Other")? "checked" : "" }} id="sex3">
                                            <label class="form-check-label" for="sex3">Other</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Email Address</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group ">
                                            <div class="position-relative">
                                                <input type="email" class="form-control"
                                                    placeholder="Enter email" id="first-name-icon" name="emailAddress" value="{{ $data[0]->email_address }}">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group ">
                                            <div class="position-relative">
                                                <input type="number" class="form-control"
                                                    placeholder="Enter phone number" name="phone_number" value="{{ $data[0]->phone_number }}">
                                                
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-4">
                                        <label>Posiion</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group ">
                                            <div class="position-relative">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter position" name="position" value="{{ $data[0]->position }}">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
    
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-3 mb-3">Save</button>
                                        <a href="{{ route('form/view/detail') }}" class="btn btn-light-secondary me-3 mb-3">Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection
