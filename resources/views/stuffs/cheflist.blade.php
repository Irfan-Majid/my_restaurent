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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
											
                                            <tr>
											@foreach($chefarr as $chef)
											
                                                <input type="hidden" value="{{$chef->id}}" />
                                                <td>{{$chef->name}}</td>
                                                <td>{{$chef->email}}</td>
                                                <td>{{$chef->contact}}</td>
                                                <td>{{$chef->age}}</td>
                                                <td>{{$chef->created_at}}</td>
                                                <td>{{$chef->salary}}</td>
                                                <td>
												<a href="">Details</a> | <a href="chefedit/{{$chef->id}}">Edit</a> | <a href="chefdelete/{{$chef->id}}">Delete</a></td>
                                            </tr>
											@endforeach
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->
    

    
@endsection

