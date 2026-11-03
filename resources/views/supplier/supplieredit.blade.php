@extends('layout.app')
@section('title','Dashboard')
@section('breadcrumb1','Dashboard')
@section('breadcrumb2','Stuffs')
@section('content')

 <div class="row">
                                <div class="col-lg-12">
    
                                    <div class="card-box">
                                        <h4 class="header-title">Basic Form</h4>
                                        <p class="sub-header">
                                            Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                        </p>
    
                                        <form class="parsley-examples" method="post" action="{{route('sup.update',[$suparr->id])}}">
										@csrf
                                        <div class="col-12 row">
                                            <div class="form-group col-6">
                                                <label for="userName">Name<span class="text-danger">*</span></label>
                                                <input type="text" name="name" value="{{$suparr->name}}" parsley-trigger="change" required
                                                       placeholder="Enter supplier name" class="form-control" id="userName">
                                            </div>
											<div class="form-group col-6">
                                                <label for="emailAddress">Email<span class="text-danger">*</span></label>
                                                <input type="email" name="email" value="{{$suparr->email}}" parsley-trigger="change" required
                                                       placeholder="Enter email" class="form-control" id="emailAddress">
                                            </div>
											<div class="form-group col-6">
                                                <label for="userName">Contact<span class="text-danger">*</span></label>
                                                <input type="text" name="contact" value="{{$suparr->contact}}" parsley-trigger="change" required
                                                       placeholder="Mobile Number" class="form-control" id="userName">
                                            </div>
											<div class="form-group col-6">
                                                <label for="balance">Initial Balance<span class="text-danger">*</span></label>
                                                <input type="number" name="balance" value="{{$suparr->balance}}" parsley-trigger="change" required
                                                       placeholder="Give an initial balance" class="form-control" id="balance">
                                            </div>
											<div class="form-group col-6">
                                                <label for="address">Address<span class="text-danger">*</span></label>
                                                <input type="text" name="address" value="{{$suparr->address}}" parsley-trigger="change" required
                                                       placeholder="Enter Supplier Address" class="form-control" id="address">
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








