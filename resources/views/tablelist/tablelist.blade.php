@extends('layout.app')
@section('title','Dashboard')
@section('breadcrumb1','Dashboard')
@section('breadcrumb2','Stuffs')
@section('content')

 <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"><b>Table List</b></h4>
                                       
    
                                        <table id="datatable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>#SL</th>
                                                <th>Table Name</th>
                                                <th>Capacity</th>
                                                <th>Floor</th>
                                                <th>Icon</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
											<?php $i = 1; ?>
                                            <tr>
											@foreach($tblarr as $table)
											
                                                <input type="hidden" value="{{$table->id}}" />
                                                
                                                
                                                <td><?= $i; ?></td>
                                                <td>{{$table->tbl_name}}</td>
                                                <td>{{$table->capacity}}</td>
                                                <td>{{$table->floor->name}}</td>
                                                <td>{{$table->tbl_img}}</td>
                                                <td>
												<a href="">Details</a> | <a href="tbledit/{{$table->id}}">Edit</a> | <a href="tbldelete/{{$table->id}}">Delete</a></td>
                                            </tr>
                                            <?php $i++; ?>
											@endforeach
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->
    

    
@endsection

