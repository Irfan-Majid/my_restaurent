@extends('layout.userapp')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        
		
		<!-- Form row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                   
                    <form>
					<div class="row">
						<div class="col-6">
							<div class="form-group col-md-12">
								<label class="col-form-label">Select Dish </label>
								<select class="form-control" onchange="add_p(this.value)">
									<option> Dishes </option>
									
									@foreach ($disharr as $row) 
									<option value="{{ $row->id }}^{{ $row->dish_qty }}^{{ $row->dish_name }}">{{ $row->dish_name }}</option>
									@endforeach
									
								</select>
								
							</div>
						</div>
						
						<div class="col-6">
							<div class="row">
							
							
						<div class="col-12 row">
							<div class="form-group col-md-6">
								<label class="col-form-label">Select Table</label>
								<select name="table_id" class="form-control">
									<option> Tables </option>
									
										@foreach ($disharr as $r)
										
									<option value="{{ $r->id }}">{{ $r->name }}</option>
									  @endforeach
								</select>
							</div>
							
							<div class="form-group col-md-6">
								<label class="col-form-label">Order Type</label>
								<select name="table_id" class="form-control">
									<option> Choose </option>
									
										@foreach ($disharr as $r)
										
									<option value="{{ $r->id }}">{{ $r->name }}</option>
									  @endforeach
								</select>
							</div>
							
						</div> <!-- end col -->
					</div>
				

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead class="bg-light">
										<tr>
											<th>Order No.</th>
											<th>Dish Name</th>
											<th>Quantity</th>
											<th>Price</th>
											<th>Sub Total</th>
											<th></th>
										</tr>
									</thead>
                                    <tbody id="data">
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
					
						<div class="col-12">
						<hr/>
                            <div class="float-right">
                                <input type="hidden" name="total_amount" class="total_amount_inp" value="0">
                                
								<h4 class="mt-2 total_amount">Total: 0 Taka</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
						
                        <div class="col-12">
                            <div class="clearfix row pt-2">
								<div class="form-group col-md-6">
								    <label class="col-form-label">Payment Method</label>
									<select onchange="hide_bank(this)" name="pay_type" class="form-control pay_type">
									    <option value="">Methods </option>
									    <option value=""> Cash </option>
									    <option value=""> Card </option>
										
									</select>
								</div>
									
								<div class="form-group col-md-6">
									<label class="col-form-label">Amount</label>
									<input type="text" name="amount" class="form-control" value=""/>
								</div>
								
                            </div>
                        </div>
						
						<div class="col-12">
							<label class="col-form-label">Note</label>
							<textarea name="pur_note" class="form-control" value="" placeholder="চেকের নাম্বার লিখুন "> </textarea>
                        </div>
                    </div>

                    <div class="hidden-print mt-2 mb-4">
                        <div class="text-right d-print-none">
                            <button type="submit"class="btn btn-info waves-effect waves-light">Place Order</button>
                        </div>
                    </div>
						</div>
					</div>
					
					
                    
                    </form>
                </div>
            </div>
		</div><!-- end row -->
    </div>
</div>
  <script src="{{asset('/assets/js/vendor.min.js')}}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 

<script>
   
    var total_d=new Array();
    function add_p(v){
        var dt=v.split('^');
        if(total_d.indexOf(dt[0])<0){
            $("#data").append('<tr>\
                    <td>1</td>\
                    <td><b>'+dt[2]+'</b><input type="hidden" name="id[]" value="'+dt[0]+'"/></td>\
                    <td><input type="number" name="qty[]" class="form-control sm-form-control qty" min="1" onkeyup="cal_val(this,'+dt[1]+')" onclick="cal_val(this,'+dt[1]+')" value=""/>\
                    <input type="hidden" name="oldqty[]" value="'+dt[1]+'"/></td>\
                    <td><input type="number" name="price[]" class="form-control sm-form-control price" onkeyup="cal_val(this,'+dt[1]+')" onclick="cal_val(this,'+dt[1]+')" value= ""/></td>\
                    <td><input type="number" name="subt[]" class="form-control sm-form-control subt" value="0" disabled /></td>\
                    <td class="text-right"><a href="javascript:void()" onclick="removet(this)"><i class="fa fa-trash"></i></a></td>\
                </tr>\
            ');
        }
        total_d.push(dt[0]);
    }
    function cal_val(e,q){
        qty=$(e).parents('tr').find('.qty').val();
        price=$(e).parents('tr').find('.price').val();
        $(e).parents('tr').find('.subt').val(qty*price);
        total_cal();
    }
    function removet(e){
        $(e).parents('tr').remove();
    }
    
    function total_cal(){
        var total=0;
        $('.subt').each(function(){
            total+=parseFloat($(this).val());
        })
        $('.total_amount').html("মোট: "+total+" টাকা")
        $('.total_amount_inp').val(total);
    }
    function hide_bank(e){
        if($(e).children('option:selected').data('iscash')==1){
            $(".bank_info").hide()
        }else{
            $(".bank_info").show()
        }
    }
    
</script>
@endsection
