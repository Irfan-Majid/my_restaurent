@extends('layout.app')
@section('title','Dashboard')
@section('breadcrumb1','Dashboard')
@section('breadcrumb2','Stuffs')
@section('content')

 <div class="row">
                                <div class="col-md-12 row">
    
                                    <div class="card-box">
                                        <h4 class="header-title">Add a New Table</h4>
                                        
    
                                        <form class="parsley-examples" method="post" action="{{route('table.set')}}" enctype="multipart/form-data">
										@csrf
                                        <div class="col-12 row">
											<div class="form-group col-6">
                                                <label for="table_name">Table Name<span class="text-danger"></span></label>
                                                <input type="text" name="table_name" parsley-trigger="change"
                                                       placeholder="" class="form-control" id="table_name">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="table_capacity">Capacity<span class="text-danger">*</span></label>
                                                <input type="text" name="table_capacity" parsley-trigger="change" required
                                                       placeholder="Enter user name" class="form-control" id="table_capacity">
                                            </div>

                                            <div class="form-group col-6">
                                                <label class="col-form-label">Floor</label>
												<select onchange="" name="floor_select" class="form-control">
													<option value="">Ground Floor</option>
													<option value="">Second Floor</option>
													<option value="">VIP Floor</option>
													
												</select>
                                            </div>
											<div class="form-group col-6">
                                                <label for="userName">Icon<span class="text-danger">*</span></label>
                                                <div ><input type="file" class="mb-2" name="table_icon" parsley-trigger="change" required id="table_icon" /></div>
                                            </div>
    
                                            <div class="form-group text-right mb-0 col-12">
                                                <button class="btn btn-gradient waves-effect waves-light" type="submit">
                                                    Add Table
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

