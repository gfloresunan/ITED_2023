@extends('layout.master')


@section('content')

<!--Page content -->
	
<section class="py-50">
    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="box box-body">
                    <div class="content-top-agile pb-0 pt-20">
                        <h2 class="text-primary">Let's Get Started</h2>
                        <p class="mb-0">Sign in to continue to EduAdmin.</p>							
                    </div>
                    <div class="p-40">
                        <form method="post" action="/login">
                           @csrf
                            <div class="form-group">
                                <div class="input-group mb-15">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" name="username"  class="form-control pl-15 bg-transparent" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-15">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control pl-15 bg-transparent" placeholder="Password">
                                </div>
                            </div>
                              <div class="row">
                                <div class="col-6">
                                  <div class="checkbox ml-5">
                                    <input type="checkbox" id="basic_checkbox_1">
                                    <label for="basic_checkbox_1">Remember Me</label>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                 <div class="fog-pwd text-right">
                                    <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-12 text-center">
                                  <button type="submit" class="btn btn-info btn-block mt-15">SIGN IN</button>
                                </div>
                                <!-- /.col -->
                              </div>
                        </form>	
                        <div class="text-center">
                            <p class="mt-15 mb-0">Don't have an account? <a href="{{url('register')}}" class="text-warning ml-5">REGISTRARSE</a></p>
                        </div>	
                    </div>
                </div>								

                <div class="text-center">
                  <p class="mt-20">- Login With -</p>
                  <p class="d-flex gap-items-2 mb-0 justify-content-center">
                      <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
                      <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
                      <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
                    </p>	
                </div>
            </div>
        </div>
    </div>
</section>	
<section class="bg-light py-30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9 col-12">
                <div class="text-md-left text-center">
                    <h2><strong> EduAdmin: </strong> fully responsive template in the market</h2>
                    <p class="mb-0">Exclusive multi-purpose lightweight responsive with powerful features.</p>
                </div>
            </div>
            <div class="col-md-3 col-12">					
                 <div class="text-md-right text-center mt-30 mt-md-0">
                    <a class="btn btn-primary" href="#">Purchase Now</a> 
                 </div>
            </div>
        </div>
    </div>
</section>
<!--Page content -->
@endsection