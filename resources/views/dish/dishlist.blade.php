@extends('layout.app')
@section('title','Dashboard')
@section('breadcrumb1','Dashboard')
@section('breadcrumb2','Stuffs')
@section('content')

 <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"><b>Chef List</b></h4>
                                       
    
                                        <table id="datatable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
												<th>Image</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Recipe</th>
                                                <th>Category</th>
                                                <th>Rating</th>
                                                <th>Details</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
											
                                            <tr>
											@foreach($disharr as $dish)
											
                                                <input type="hidden" value="{{$dish->id}}" />
                                                <td>{{$dish->dish_image}}</td>
                                                <td>{{$dish->dish_name}}</td>
                                                <td>{{$dish->dish_price}}</td>
                                                <td>{{$dish->dish_recipe}}</td>
                                                <td>{{$dish->dish_category}}</td>
                                                <td>{{$dish->dish_rating}}</td>
                                                <td>{{$dish->dish_details}}</td>
                                                <td>
												<a href="">Details</a> | <a href="dishedit/{{$dish->id}}">Edit</a> | <a href="dishdelete/{{$dish->id}}">Delete</a></td>
                                            </tr>
											@endforeach
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->
    

    
@endsection

