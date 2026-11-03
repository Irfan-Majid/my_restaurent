@extends('layout.app')
@section('title','Dashboard')
@section('breadcrumb1','Dashboard')
@section('breadcrumb2','Stuffs')
@section('content')

 <div class="row">
                                <div class="col-lg-12 row">
    
                                    <div class="card-box">
                                        <h4 class="header-title">Basic Form</h4>
                                        <p class="sub-header">
                                            Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                        </p>
    
                                        <form class="parsley-examples" method="post" action="chefset">
										@csrf
                                        <div class="col-12 row">
                                            <div class="form-group col-6">
                                                <label for="userName">Name<span class="text-danger">*</span></label>
                                                <input type="text" name="name" parsley-trigger="change" required
                                                       placeholder="Enter user name" class="form-control" id="userName">
                                            </div>
											<div class="form-group col-6">
                                                <label for="emailAddress">Email<span class="text-danger">*</span></label>
                                                <input type="email" name="email" parsley-trigger="change" required
                                                       placeholder="Enter email" class="form-control" id="emailAddress">
                                            </div>
											<div class="form-group col-6">
                                                <label for="userName">Contact<span class="text-danger">*</span></label>
                                                <input type="text" name="contact" parsley-trigger="change" required
                                                       placeholder="Enter user name" class="form-control" id="userName">
                                            </div>
											<div class="form-group col-6">
                                                <label for="age">Age<span class="text-danger">*</span></label>
                                                <input type="text" name="age" parsley-trigger="change" required
                                                       placeholder="Age" class="form-control" id="age">
                                            </div>
											<div class="form-group col-6">
                                                <label for="salary">Salary<span class="text-danger">*</span></label>
                                                <input type="text" name="salary" parsley-trigger="change" required
                                                       placeholder="Salary Amount" class="form-control" id="salary">
                                            </div>
                                            
                                            <div class="form-group col-6">
                                                <label for="pass1">Password<span class="text-danger">*</span></label>
                                                <input id="pass1" type="password" placeholder="Password" required
                                                       class="form-control">
                                            </div>
                                            <div class="form-group col-6">
                                                <div class="checkbox checkbox-purple">
                                                    <input id="checkbox6a" type="checkbox">
                                                    <label for="checkbox6a">
                                                        Remember me
                                                    </label>
                                                </div>
    
                                            </div>
    
                                            <div class="form-group text-right mb-0 col-6">
                                                <button class="btn btn-gradient waves-effect waves-light" type="submit">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-light waves-effect ml-1">
                                                    Cancel
                                                </button>
                                            </div>
    
                                        </form>
                                    </div> <!-- end card-box -->
                                </div>
                                <!-- end col -->
								</div>

    
@endsection

