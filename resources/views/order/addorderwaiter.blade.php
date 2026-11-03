@extends('layout.userapp')
@section('title','Dashboard')
@section('breadcrumb1','Dashboard')
@section('breadcrumb2','Order')
@section('content')

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box mt-2">
                    <div class="page-title-right">
						<a class="btn btn-primary" href="#">
							
						</a>
                    </div>
                    <h4 class="page-title"></h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
		
		<!-- Form row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <?php if($this->session->flashdata('fail')){ ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('fail') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php } ?>
                    <?= form_open('sales/create_sal') ?>
                    <div class="row">
						<div class="col-12 row">
							<div class="form-group col-md-6">
								<label class="col-form-label">ক্রেতা নির্বাচন করুন </label>
								<select name="cus_id" class="form-control">
									<option> ক্রেতা নির্বাচন করুন </option>
									<?php 
									if (is_array($sup) || is_object($sup)) {
										foreach ($sup as $r) {
										?>
									<option value="<?= $r->id ?>"><?= $r->name ?></option>
									  <?php  }
									  } ?>
								</select>
							</div>
							
							<div class="form-group col-md-6">
								<label class="col-form-label">তারিখ দিন </label>
								<input type="text" name="sal_date" value="<?= date('d-m-Y'); ?>" class="form-control datepicker">
							</div>
							<div class="form-group col-md-12">
								<label class="col-form-label">পণ্য নির্বাচন করুন </label>
								<select class="form-control" onchange="add_p(this.value)">
									<option> পণ্য নির্বাচন করুন </option>
									<?php 
									if (is_array($rows) || is_object($rows)) {
										foreach ($rows as $row) {
										?>
									<option value="<?= $row->id ?>^<?= $row->qty ?>^<?= $row->name ?>"><?= $row->name ?></option>
									  <?php  }
									  } ?>
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
											<th>#নং</th>
											<th>পণ্যের বর্ণনা</th>
											<th>পরিমাণ</th>
											<th>দাম</th>
											<th>উপ মোট</th>
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
                            <div class="float-right">
                                <input type="hidden" name="total_amount" class="total_amount_inp" value="0">
                                <h3 class="mt-2 total_amount">মোট: 0 টাকা</h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
						
                        <div class="col-12">
                            <div class="clearfix row pt-2">
								<div class="form-group col-md-3">
								    <label class="col-form-label">লেনদেন মাধ্যম </label>
									<select onchange="hide_bank(this)" name="pay_type" class="form-control pay_type">
									    <option value="">লেনদেন মাধ্যম নির্বাচন করুন </option>
										<?php if($pay_type){
										        foreach($pay_type as $pt){?>
										        <option value="<?= $pt->id ?>" data-iscash="<?= $pt->is_cash ?>"><?= $pt->type_name ?> </option>
									    <?php } } ?>
									</select>
								</div>
								
								<div class="form-group col-md-2">
									<label for="inputAddress" class="col-form-label">পরিশোধিত টাকার পরিমাণ  </label>
									<input type="number" name="pay_amount" class="form-control pay_amount" value="">
								</div>
								
								<div class="form-group col-md-3 bank_info">
								    <label for="inputAddress" class="col-form-label">চেক নম্বর </label>
									<input type="text" name="cheque_no" class="form-control">
								</div>
								
								<div class="form-group col-md-2 bank_info">
									<label for="inputAddress" class="col-form-label">চেক প্রদানের তারিখ </label>
									<input type="text" name="cheque_created_at" value="<?= date('d-m-Y'); ?>" class="form-control datepicker" >
								</div>
								
								<div class="form-group col-md-2 bank_info">
									<label for="inputAddress" class="col-form-label">চেকের টাকা গ্রহনের তারিখ  </label>
									<input type="text" name="cheque_issue_date" value="<?= date('d-m-Y'); ?>" class="form-control datepicker" >
								</div>
                            </div>
                        </div>
						
						<div class="col-12">
							<label class="col-form-label">নোট </label>
							<textarea name="pur_note" class="form-control" value="" placeholder="চেকের নাম্বার লিখুন "> </textarea>
                        </div>
                    </div>

                    <div class="hidden-print mt-2 mb-4">
                        <div class="text-right d-print-none">
                            <button type="submit"class="btn btn-info waves-effect waves-light">এখানে সংরক্ষন করুন </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
		</div><!-- end row -->
    </div>
</div>
 <script src="<?= base_url('assets/js/vendor.min.js'); ?>"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.datepicker').datepicker({
        format: 'dd-mm-yyyy'
    });
    var total_d=new Array();
    function add_p(v){
        var dt=v.split('^');
        if(total_d.indexOf(dt[0])<0){
            $("#data").append('<tr>\
                    <td>1</td>\
                    <td><b>'+dt[2]+' - বর্তমান মজুদ ('+dt[1]+')</b><input type="hidden" name="product_id[]" value="'+dt[0]+'"/></td>\
                    <td><input type="number" name="qty[]" class="form-control sm-form-control qty" min="0" max="'+dt[1]+'" onkeyup="cal_val(this,'+dt[1]+')" onchange="cal_val(this,'+dt[1]+')" value=""/>\
                    <input type="hidden" name="oldqty[]" value="'+dt[1]+'"/></td>\
                    <td><input type="number" name="price[]" class="form-control sm-form-control price" onkeyup="cal_val(this,'+dt[1]+')" onchange="cal_val(this,'+dt[1]+')" value="" /></td>\
                    <td><input type="number" name="subt[]" class="form-control sm-form-control subt" value="0" disabled /></td>\
                    <td class="text-right"><a href="javascript:void()" onclick="removet(this)"><i class="fa fa-trash"></i></a></td>\
                </tr>\
            ');
        }
        total_d.push(dt[0]);
    }
    function cal_val(e,q){
        qty=$(e).parents('tr').find('.qty').val();
        if(qty>q){
            $(e).parents('tr').find('.qty').val(q);
            qty=q;
        }
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

