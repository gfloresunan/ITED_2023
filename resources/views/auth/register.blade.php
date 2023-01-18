@extends('layout.master')


@section('content')
<!--Page content -->
<section class="py-50">
    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="box box-body">
                    <div class="content-top-agile pb-0 pt-20">
                        <h2 class="text-primary">Get started with Us</h2>
                        <p class="mb-0">Register a New Membership</p>
                    </div>
                    <div class="p-40">
                        <form action="/register" method="POST">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="input-group mb-15">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" name="name"  class="form-control pl-15 bg-transparent" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-15">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" name="username"  class="form-control pl-15 bg-transparent" placeholder="User Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-15">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="email" name="email" class="form-control pl-15 bg-transparent" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-15">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control pl-15 bg-transparent" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-15">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                    </div>
                                    <input type="password" name="password_confirmation" class="form-control pl-15 bg-transparent" placeholder="Retype Password">
                                </div>
                            </div>
                              <div class="row">
                                <div class="col-12">
                                  <div class="checkbox ml-5">
                                    <input type="checkbox" id="basic_checkbox_1">
                                    <label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
                                  </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-12 text-center">
                                  <button type="submit"  class="btn btn-info btn-block mt-15">REGISTRARSE</button>
                                </div>
                                <!-- /.col -->
                              </div>
                        </form>
                        <div class="text-center">
                            <p class="mt-15 mb-0">Already have an account?<a href="{{url('login')}}"class="text-danger ml-5"> Log In</a></p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                  <p class="mt-20">- Register With -</p>
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
<!--Page content -->
@endsection
