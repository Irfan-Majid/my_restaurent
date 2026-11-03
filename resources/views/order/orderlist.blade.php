@extends('layout.app')
@section('title','Dashboard')
@section('breadcrumb1','Dashboard')
@section('breadcrumb2','Order')
@section('content')

 <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"><b>Order List</b></h4>
                                       
    
                                        <table id="datatable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Dish Name</th>
                                                <th>Order Type</th>
                                                <th>Waiter</th>
                                                <th>Table</th>
                                                <th>Payment Method</th>
                                                <th>Total Amount</th>
                                                <th>Status</th>
                                                <th>Payment Status</th>
                                                <th>Branch</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
											
                                            <tr>
											@foreach($orderarr as $order)
											
                                                <input type="hidden" value="{{$order->id}}" />
                                                <td>{{$order->order_id}}</td>
                                                <td>{{$order->dish_name}}</td>
                                                <td>{{$order->order_type}}</td>
                                                <td>{{$order->payment_method}}</td>
                                                <td>{{$order->payment_method}}</td>
                                                <td>{{$order->payment_method}}</td>
                                                <td>{{$order->total_amount}}</td>
                                                <td>{{$order->status}}</td>
                                                <td>{{$order->payment_status}}</td>
                                                <td>{{$order->branch}}</td>
                                                <td>
												<a href="">Details</a> | <a href="orderedit/{{$order->id}}">Edit</a> | <a href="orderdelete/{{$order->id}}">Delete</a></td>
                                            </tr>
											@endforeach
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->
    

    
@endsection

