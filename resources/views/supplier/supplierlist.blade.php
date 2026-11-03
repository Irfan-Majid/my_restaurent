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
                                                <th>Balance</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
											
                                            <tr>
											@foreach($suparr as $sup)
											
                                                <input type="hidden" value="{{$sup->id}}" />
                                                <td>{{$sup->name}}</td>
                                                <td>{{$sup->email}}</td>
                                                <td>{{$sup->contact}}</td>
                                                <td>{{$sup->balance}}</td>
                                                <td>{{$sup->address}}</td>
                                                <td>
												<a href="">Details</a> | <a href="supedit/{{$sup->id}}">Edit</a> | <a href="supdelete/{{$sup->id}}">Delete</a></td>
                                            </tr>
											@endforeach
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->
    

    
@endsection

