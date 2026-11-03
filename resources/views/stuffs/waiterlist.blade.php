@extends('layout.app')
@section('title','Dashboard')
@section('breadcrumb1','Dashboard')
@section('breadcrumb2','Stuffs')
@section('content')

 <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"><b>Waiter List</b></h4>
                                       
    
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
											@foreach($waiterarr as $waiter)
											
                                                <input type="hidden" value="{{$waiter->id}}" />
                                                <td>{{$waiter->name}}</td>
                                                <td>{{$waiter->email}}</td>
                                                <td>{{$waiter->contact}}</td>
                                                <td>{{$waiter->age}}</td>
                                                <td>{{$waiter->created_at}}</td>
                                                <td>{{$waiter->salary}}</td>
                                                <td>
												<a href="">Details</a> | <a href="waiteredit/{{$waiter->id}}">Edit</a> | <a href="waiterdelete/{{$waiter->id}}">Delete</a></td>
                                            </tr>
											@endforeach
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->
    

    
@endsection

