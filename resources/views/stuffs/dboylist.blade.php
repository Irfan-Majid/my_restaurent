@extends('layout.app')
@section('title','Dashboard')
@section('breadcrumb1','Dashboard')
@section('breadcrumb2','Stuffs')
@section('content')

 <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"><b>Demivery Boys List</b></h4>
                                       
    
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
											@foreach($dboyarr as $dboy)
											
                                                <input type="hidden" value="{{$dboy->id}}" />
                                                <td>{{$dboy->name}}</td>
                                                <td>{{$dboy->email}}</td>
                                                <td>{{$dboy->contact}}</td>
                                                <td>{{$dboy->age}}</td>
                                                <td>{{$dboy->created_at}}</td>
                                                <td>{{$dboy->salary}}</td>
                                                <td>
												<a href="">Details</a> | <a href="dboyedit/{{$dboy->id}}">Edit</a> | <a href="dboydelete/{{$dboy->id}}">Delete</a></td>
                                            </tr>
											@endforeach
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->
    

    
@endsection

