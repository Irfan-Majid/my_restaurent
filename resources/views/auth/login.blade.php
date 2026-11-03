
@extends('layout.auth_master')
@section('title','Admin Login')
@section('auth')


            <div class="account-pages mt-5 pt-5 mb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-pattern">
    
                                <div class="card-body p-4">
                                    
                                    <div class="text-center w-75 m-auto">
                                        <a href="index.html">
                                            <span><img src="assets/images/myrestaurant-dark.svg" alt="" height=""></span>
                                        </a>
                                        <h5 class="text-uppercase text-center font-bold mt-4">Sign In</h5>
										@if(Session::has('response'))
					<div class="alert alert-{{Session::get('response')['class']}}">
					{{Session::get('response')['message']}}
					</div>
				@endif

                                    </div>
    
                                    <form method="post" action="{{route('signin.varify')}}">
    @csrf
                                        <div class="form-group mb-3">
										<label for="emailaddress" class="@if($errors->has('username')) has-error @endif">Email address</label>
                                            
                                            <input class="form-control" id="emailaddress" required="" type="text" name="username" class="form-control" value="{{old('username')}}" placeholder="Username"">
											
											@if ($errors->has('username'))
								<span class="text-danger">{{ $errors->first('username') }}</span>
							@endif
                                        </div>
    
                                        <div class="form-group mb-3">
                                            <a href="pages-recoverpw.html" class="text-muted float-right"><small>Forgot your password?</small></a>

                                            <label for="password" class="@if($errors->has('password')) has-error @endif">Password</label>
                                            <input class="form-control" type="password" name="password" class="form-control" placeholder="Enter your password">
											
											@if ($errors->has('password'))
								<span class="text-danger">{{ $errors->first('password') }}</span>
							@endif
                                        </div>
    
                                        <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                            </div>
                                        </div>
    
                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-gradient btn-block" type="submit"> Log In </button>
                                        </div>
    
                                    </form>
    
                                    <div class="row mt-4">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted mb-0">Don't have an account? <a href="{{route('signup')}}" class="text-dark ml-1"><b>Sign Up</b></a></p>
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


        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        
    </body>
</html>
