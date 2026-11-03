
@extends('layout.auth_master')
@section('title','Admin Register')
@section('auth')

 <div class="account-pages pt-5 mt-5 mb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-pattern">
    
                                <div class="card-body p-4">
                                    
                                    <div class="text-center w-75 m-auto">
                                        <a href="index.html">
                                            <span><img src="assets/images/myrestaurant-dark.svg" alt="" height=""></span>
                                        </a>
                                        <h5 class="text-uppercase text-center font-bold mt-4">Register</h5>
										@if(Session::has('response'))
											<div class="alert alert-{{Session::get('response')['class']}}">
											{{Session::get('response')['message']}}
											</div>
										@endif
                                    </div>
    
                                    <form method="post" action="{{route('signUpStore')}}">
									@csrf
    
                                        <div class="form-group">
                                            <label for="fullname" class="@if($errors->has('name')) has-error @endif">Full Name</label>
                                            <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Full Name" >
											
											@if ($errors->has('name'))
											<span class="text-danger">{{ $errors->first('name') }}</span>
											@endif
                                        </div>
                                        <div class="form-group">
                                            <label for="emailaddress" class="@if($errors->has('email')) has-error @endif">Email address</label>
                                            <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Email">
											
											@if ($errors->has('email'))
											<span class="text-danger">{{ $errors->first('email') }}</span>
											@endif
                                        </div>
										
										<div class="form-group">
                                            <label for="fullname" class="@if($errors->has('contact')) has-error @endif">Contact</label>
                                            <input type="text" name="contact" class="form-control" value="{{old('contact')}}" placeholder="Contact Number" />
											
											@if ($errors->has('contact'))
											<span class="text-danger">{{ $errors->first('contact') }}</span>
											@endif
                                        </div>
										
										<div class="form-group">
                                            <label for="fullname" class="@if($errors->has('username')) has-error @endif">Username</label>
                                            <input type="text" name="username" class="form-control" value="{{old('username')}}" placeholder="Username" />
											
											@if ($errors->has('username'))
											<span class="text-danger">{{ $errors->first('username') }}</span>
											@endif
                                        </div>
                                        
										<div class="form-group">
                                            <label for="password" class="@if($errors->has('password')) has-error @endif">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" />
											
											@if ($errors->has('password'))
											<span class="text-danger">{{ $errors->first('password') }}</span>
											@endif
                                        </div>
										
										<div class="form-group">
                                            <label for="password" class="@if($errors->has('password')) has-error @endif">Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat password" />
                                        </div>
										
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                                <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-gradient btn-block" type="submit"> Sign Up Free </button>
                                        </div>
    
                                    </form>
    
                                    <div class="row mt-4">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted mb-0">Already have an account? <a href="{{route('login')}}" class="text-dark ml-1"><b>Sign In</b></a></p>
                                        </div>
                                    </div>
    
                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
    
                     
    
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end page -->
			
			
		@endsection