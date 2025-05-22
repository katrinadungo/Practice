@extends('layouts.app')

@section('content')
@extends('layouts.app')

@section('content')
    
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">STUDENT INFO</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>

                <div class="card-body">
                  <div class="form-group">
                    <label for="stud_no">Student Number</label>
                    <input type="text" class="form-control" id="stud_no" placeholder="STUDENT NUMBER">
                  </div>

            
              
                <div class="row">

                  <div class="col-3">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" placeholder="Full name">
                  </div>

                  <div class="col-3">
                    <label for="mname">Middle Name</label>
                    <input type="text" class="form-control" id="mname" placeholder="Middle name">
                  </div>

                  <div class="col-3">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" placeholder="Last name">
                  </div>
                
             
                </div>


                  <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" class="form-control" id="address" placeholder="Address">
                  </div>

                  <div class="form-group">
                    <label for="stud_dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob">
                  </div>

                  

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection