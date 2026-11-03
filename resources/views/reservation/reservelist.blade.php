@extends('layout.app')
@section('title','Dashboard')
@section('breadcrumb1','Dashboard')
@section('breadcrumb2','Stuffs')
@section('content')

 <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"><b>Reservations</b></h4>
                                       
    
                                        <table id="datatable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
												<th>SL</th>
                                                <th>Customer Name</th>
                                                <th>Table No</th>
                                                <th>No. of Person</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Reserve Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
											
                                            <tr>
											@foreach($resharr as $rs)
											
                                                <input type="hidden" value="{{$rs->id}}" />
                                                <td>{{$rs->dish_image}}</td>
                                                <td>{{$rs->dish_name}}</td>
                                                <td>{{$rs->dish_price}}</td>
                                                <td>{{$rs->dish_recipe}}</td>
                                                <td>{{$rs->dish_category}}</td>
                                                <td>{{$rs->dish_rating}}</td>
                                                <td>{{$rs->dish_details}}</td>
                                                <td>
												<a href="">Details</a> | <a href="dishedit/{{$rs->id}}">Edit</a> | <a href="dishdelete/{{$rs->id}}">Delete</a></td>
                                            </tr>
											@endforeach
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->
    

    
@endsection