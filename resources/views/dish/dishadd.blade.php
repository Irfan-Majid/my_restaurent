@extends('layout.app')
@section('title','Dashboard')
@section('breadcrumb1','Dashboard')
@section('breadcrumb2','Stuffs')
@section('content')

 <div class="row">
                                <div class="col-md-12 row">
    
                                    <div class="card-box">
                                        <h4 class="header-title">Add a New Dish</h4>
                                        
    
                                        <form class="parsley-examples" method="post" action="{{route('dish.set')}}">
										@csrf
                                        <div class="col-12 row">
											<div class="form-group col-6">
                                                <label for="dish_image">Dish Image<span class="text-danger"></span></label>
                                                <input type="file" name="dish_image" parsley-trigger="change"
                                                       placeholder="" class="form-control" id="dish_image">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="userName">Dish Name<span class="text-danger">*</span></label>
                                                <input type="text" name="dish_name" parsley-trigger="change" required
                                                       placeholder="Enter user name" class="form-control" id="userName">
                                            </div>
											<div class="form-group col-6">
                                                <label for="emailAddress">Dish Price<span class="text-danger">*</span></label>
                                                <input type="number" name="dish_price" parsley-trigger="change" required
                                                       placeholder="Enter Dish Price" class="form-control" id="emailAddress">
                                            </div>
											<div class="form-group col-6">
                                                <label for="userName">Recipe<span class="text-danger">*</span></label>
                                                <input type="text" name="dish_recipe" parsley-trigger="change" required
                                                       placeholder="Enter Recipe Details" class="form-control" id="userName">
                                            </div>
											<div class="form-group col-6">
                                                <label class="col-form-label">Category</label>
												<select onchange="" name="dish_category" class="form-control">
													<option value="">Breakfast</option>
													<option value="">Lunch</option>
													<option value="">Dinner</option>
													
												</select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="dish_details">Details<span class="text-danger"></span></label>
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

