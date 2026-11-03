@extends('layout.app')
@section('title','Dashboard')
@section('breadcrumb1','Dashboard')
@section('breadcrumb2','Stuffs')
@section('content')

 <div class="row">
                                <div class="col-md-12 row">
    
                                    <div class="card-box">
                                        <h4 class="header-title">Add new Reservation</h4>
                                        
    
                                        <form class="parsley-examples" method="post" action="{{route('dish.set')}}">
										@csrf
                                        <div class="col-12 row">
                                            <div class="form-group col-6">
                                                <label for="userName">Number of People<span class="text-danger">*</span></label>
                                                <input type="text" name="dish_name" parsley-trigger="change" required
                                                       placeholder="Enter user name" class="form-control" id="userName">
                                            </div>
											
											<div class="form-group col-6">
                                                <label for="userName">Table No.<span class="text-danger">*</span></label>
                                                <input type="text" name="dish_name" parsley-trigger="change" required
                                                       placeholder="Enter user name" class="form-control" id="userName">
                                            </div>
											
											<div class="form-group col-6">
                                                <label for="userName">Start Time<span class="text-danger">*</span></label>
                                                <input type="text" name="dish_name" parsley-trigger="change" required
                                                       placeholder="Enter user name" class="form-control" id="userName">
                                            </div>
											
											<div class="form-group col-6">
                                                <label for="userName">End Time<span class="text-danger">*</span></label>
                                                <input type="text" name="dish_name" parsley-trigger="change" required
                                                       placeholder="Enter user name" class="form-control" id="userName">
                                            </div>
											
											<div class="form-group col-6">
                                                <label for="userName">Reserve Date<span class="text-danger">*</span></label>
                                                <input type="text" name="dish_name" parsley-trigger="change" required
                                                       placeholder="Enter user name" class="form-control" id="userName">
                                            </div>
											
											<div class="form-group col-6">
                                                <label for="userName">Name<span class="text-danger">*</span></label>
                                                <input type="text" name="dish_name" parsley-trigger="change" required
                                                       placeholder="Enter user name" class="form-control" id="userName">
                                            </div>
											
											<div class="form-group col-6">
                                                <label for="userName">Email<span class="text-danger">*</span></label>
                                                <input type="email" name="dish_name" parsley-trigger="change" required
                                                       placeholder="Enter Your Email" class="form-control" id="userName">
                                            </div>
											<div class="form-group col-6">
                                                <label for="userName">Mobile<span class="text-danger">*</span></label>
                                                <input type="email" name="dish_name" parsley-trigger="change" required
                                                       placeholder="Enter Your Email" class="form-control" id="userName">
                                            </div>
											<div class="form-group col-6">
                                                <label class="col-form-label">Status</label>
												<select onchange="" name="status" class="form-control">
													<option value="">Select Option</option>
													<option value="">Booked</option>
													<option value="">Relase</option>
													
												</select>
                                            </div>
											
                                            <div class="form-group col-6">
                                                <label for="dish_details">Note<span class="text-danger"></span></label>
                                                <input type="textarea" name="dish_details" placeholder="Details"
                                                       class="form-control">
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
                                        </div>
                                    </div> <!-- end card-box -->
                                </div>
                                <!-- end col -->
								</div>

    
@endsection

