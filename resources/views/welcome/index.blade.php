@component('layouts.app')
    <section class="bg-img pt-130 pb-150" data-overlay="7" style="background-image: url(assets/images/front-end-img/background/bg-9.jpg); background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mt-80">
                        <h1 class="box-title text-white mb-30">
                            Encuentre su curso en línea</h1>
                    </div>
                    <form class="cours-search mb-30">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="¿Qué quieres aprender hoy?">
                            <div class="input-group-append">
                                <button class="btn btn-block btn-primary" type="submit">Buscar</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="{{url('/login')}}" class="btn btn-outline text-white">Browse Courses List</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Explora nuestros cursos
                    </h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-12">
                    <ul class="nav nav-tabs justify-content-center bb-0 mb-10" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#all" role="tab">All</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab1" role="tab">Finance</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">Operations</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab3" role="tab">Strategy & Leadership</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab4" role="tab">Marketing</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab5" role="tab">Analytics</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab6" role="tab">HR</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab7" role="tab">Management</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="all" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    @foreach ($cursos as $curso)

                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/4.jpg') }}"  alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">{{ $curso->nombre }}</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/6.jpg') }}"  alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">IT & Software</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/5.jpg') }}"  alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Photography</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/2.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Programming Language</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/9.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/10.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab1" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/5.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Photography</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/2.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Programming Language</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/9.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/10.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" ssrc="{{ URL::asset('assets/images/front-end-img/courses/5.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Photography</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/2.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Programming Language</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab4" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/9.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/10.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab5" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/5.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Photography</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/2.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Programming Language</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Business Manegement</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">UI Design</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/9.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/10.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab7" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/4.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">General</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/6.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">IT & Software</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/9.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Manegement</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" ssrc="{{ URL::asset('assets/images/front-end-img/courses/10.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title">Computer Basic</h4>
                                                    <p class="mb-10 text-light font-size-12"><i class="fa fa-calendar mr-5"></i> Sept 16th, 2020</p>
                                                    <p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-xl-100 py-50 bg-white" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-12">
                    <div class="box box-body p-xl-50 p-30">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <p class="badge badge-warning badge-lg">FREE</p>
                                <h1 class="mb-15">Live Classes</h1>
                                <h4 class="font-weight-400">It is a long established fact that a reade.</h4>
                                <p class="font-size-22">Experience Plus for free and start<br> learning from the best</p>
                                <a href="#" class="btn btn-outline btn-primary">See all</a>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="media-list media-list-hover media-list-divided md-post mt-lg-0 mt-30">
                                    <a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
                                        <img class="w-80 rounded ml-0" src="{{ URL::asset('assets/images/front-end-img/avatar/1.jpg') }}"  alt="...">
                                        <div class="media-body font-weight-500">
                                            <h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
                                            <small class="text-fade">Today, 5:00 PM</small>
                                            <p><small class="text-fade mt-10">Johen doe</small></p>
                                        </div>
                                    </a>
                                    <a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
                                        <img class="w-80 rounded ml-0" src="{{ URL::asset('assets/images/front-end-img/avatar/2.jpg') }}" alt="...">
                                        <div class="media-body font-weight-500">
                                            <h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
                                            <small class="text-fade">Today, 5:00 PM</small>
                                            <p><small class="text-fade mt-10">Johen doe</small></p>
                                        </div>
                                    </a>
                                    <a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
                                        <img class="w-80 rounded ml-0" src="{{ URL::asset('assets/images/front-end-img/avatar/3.jpg') }}" alt="...">
                                        <div class="media-body font-weight-500">
                                            <h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
                                            <small class="text-fade">Today, 5:00 PM</small>
                                            <p><small class="text-fade mt-10">Johen doe</small></p>
                                        </div>
                                    </a>
                                    <a class="media media-single box-shadowed bg-white pull-up mb-0" href="#">
                                        <img class="w-80 rounded ml-0" src="{{ URL::asset('assets/images/front-end-img/avatar/4.jpg') }}" alt="...">
                                        <div class="media-body font-weight-500">
                                            <h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
                                            <small class="text-fade">Today, 5:00 PM</small>
                                            <p><small class="text-fade mt-10">Johen doe</small></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Upcoming Courses</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-12">
                    <ul class="nav nav-tabs justify-content-center bb-0 mb-10" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab8" role="tab">MBA</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab9" role="tab">Machine Learning</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab10" role="tab">Software & Technology</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab11" role="tab">Marketing</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab12" role="tab">Law</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab13" role="tab">Management</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab8" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/1.jpg') }}"  alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Manegement</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/9.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Networking</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Security</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">IT & Software</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab9" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">IT & Software</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/1.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Manegement</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/9.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Networking</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Security</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab10" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Security</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">IT & Software</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/9.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Networking</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/1.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Manegement</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab11" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/1.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Manegement</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">IT & Software</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/9.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Networking</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Security</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab12" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Security</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" ssrc="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">IT & Software</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/1.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Manegement</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/9.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Networking</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab13" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/9.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Networking</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/8.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Security</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/1.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">Manegement</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/7.jpg') }}" alt="Card image cap">
                                            </a>
                                            <div class="position-absolute r-10 t-10">
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <span class="badge badge-success mb-10">Online</span>
                                                <h4 class="card-title">IT & Software</h4>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#"><span class="font-weight-bold">Duration:</span> 6 Months</a>
                                                    <a href="#"><span class="font-weight-bold">Daily:</span> 2 Hours</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50 bg-white" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Reviews & Ratings</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="mr-15">
                                        <img src="{{ URL::asset('assets/images/front-end-img/avatar/1.jpg') }}"  class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column font-weight-500">
                                        <a href="#" class="text-dark hover-primary mb-1 font-size-16">Johen Kothari</a>
                                        <span class="text-fade font-size-12">Software Engineer</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">A great aspect of this course is the student mentors. These people are always there to help, support, and motivate the student to complete modules...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="mr-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="mr-15">
                                        <img src="{{ URL::asset('assets/images/front-end-img/avatar/2.jpg') }}" class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column font-weight-500">
                                        <a href="#" class="text-dark hover-primary mb-1 font-size-16">Johen doe</a>
                                        <span class="text-fade font-size-12">Vice President</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">This course actually helped me move from being a general manager to vice president. The content was exciting. I actually implemented what I learnt through case...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="mr-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="mr-15">
                                        <img src="{{ URL::asset('assets/images/front-end-img/avatar/3.jpg') }}" class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column font-weight-500">
                                        <a href="#" class="text-dark hover-primary mb-1 font-size-16">Anshu Srivastav</a>
                                        <span class="text-fade font-size-12">Research Assistant</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">Group case studies really give a sense of teamwork, as it happens in regular classroom studies. It teaches us coordination and right attitude as a team...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="mr-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="mr-15">
                                        <img src="{{ URL::asset('assets/images/front-end-img/avatar/4.jpg') }}" class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column font-weight-500">
                                        <a href="#" class="text-dark hover-primary mb-1 font-size-16">Mical Doe</a>
                                        <span class="text-fade font-size-12">Analyst</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">It doesn’t matter what your previous working background is, as everything is taught from the basics.</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="mr-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="mr-15">
                                        <img src="{{ URL::asset('assets/images/front-end-img/avatar/5.jpg') }}" class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column font-weight-500">
                                        <a href="#" class="text-dark hover-primary mb-1 font-size-16">Paton don</a>
                                        <span class="text-fade font-size-12">Data Analyst</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">They will prepare you how to face Data Science job interviews along with this upGrad will also provide mock interviews and mock MCQ tests to check...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="mr-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="mr-15">
                                        <img src="{{ URL::asset('assets/images/front-end-img/avatar/6.jpg') }}" class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column font-weight-500">
                                        <a href="#" class="text-dark hover-primary mb-1 font-size-16">Johen Doe</a>
                                        <span class="text-fade font-size-12">Samsung</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">Many of the basic concepts are being taught to build good intuition of Machine Learning models. Most of the basic math required for developing an intuition...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="mr-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="mr-15">
                                        <img src="{{ URL::asset('assets/images/front-end-img/avatar/7.jpg') }}" class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column font-weight-500">
                                        <a href="#" class="text-dark hover-primary mb-1 font-size-16">Moriss Kothari</a>
                                        <span class="text-fade font-size-12">Software Engineer</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">You will be notified of any interview opportunities in ML and they will share your profile with the recruiters. This really helps to kick start your...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="mr-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="mr-15">
                                        <img src="{{ URL::asset('assets/images/front-end-img/avatar/8.jpg') }}" class="avatar avatar-lg rounded10" alt="">
                                    </div>
                                    <div class="d-flex flex-column font-weight-500">
                                        <a href="#" class="text-dark hover-primary mb-1 font-size-16">Johens Kothari</a>
                                        <span class="text-fade font-size-12">Software Engineer</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">The course justifies every penny charged and is an investment that reaps benefits once we enter the market after course completion.</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="mr-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Try FREE courses to learn fundamentals</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/1.jpg') }}" alt="Card image cap">
                        </a>
                        <div class="position-absolute r-10 t-10">
                            <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Data</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/2.jpg') }}" alt="Card image cap">
                        </a>
                        <div class="position-absolute r-10 t-10">
                            <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Management & Marketing</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/3.jpg') }}" alt="Card image cap">
                        </a>
                        <div class="position-absolute r-10 t-10">
                            <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Technology</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/4.jpg') }}" alt="Card image cap">
                        </a>
                        <div class="position-absolute r-10 t-10">
                            <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark btn-xs mr-5"><i class="fa fa-share-alt"></i></button>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Digital Marketing</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary mx-auto">View All Free Courses</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50 bg-img countnm-bx" style="background-image: url(assets/images/front-end-img/background/bg-3.jpg)" data-overlay="5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                            <span class="text-white font-size-40 icon-User"><span class="path1"></span><span class="path2"></span></span>
                        </div>
                        <h1 class="countnm my-10 text-white font-weight-300">5428</h1>
                        <div class="text-uppercase text-white">Teachers</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                            <span class="text-white font-size-40 icon-Book"></span>
                        </div>
                        <h1 class="countnm my-10 text-white font-weight-300">120</h1>
                        <div class="text-uppercase text-white">Courses</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                            <span class="text-white font-size-40 icon-Group"><span class="path1"></span><span class="path2"></span></span>
                        </div>
                        <h1 class="countnm my-10 text-white font-weight-300">7485</h1>
                        <div class="text-uppercase text-white">Student</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                            <span class="text-white font-size-40 icon-Globe"><span class="path1"></span><span class="path2"></span></span>
                        </div>
                        <h1 class="countnm my-10 text-white font-weight-300">100</h1>
                        <div class="text-uppercase text-white">Country</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Latest Blog</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-xl-4 col-md-4 col-12">
                    <div class="blog-post">
                        <div class="entry-image clearfix">
                            <img class="img-fluid" src="{{ URL::asset('assets/images/front-end-img/courses/1f.jpg') }}"  alt="">
                        </div>
                        <div class="blog-detail">
                            <div class="entry-title mb-10">
                                <a href="#">Blog Post With Image</a>
                            </div>
                            <div class="entry-meta mb-10">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga laborum totam itaque architecto! Laudantium sed delectus assumenda, doloribus non.</p>
                            </div>
                            <div class="entry-share d-flex justify-content-between align-items-center">
                                <div class="entry-button">
                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                                <div class="social">
                                    <strong>Share : </strong>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-12">
                    <div class="blog-post">
                        <div class="entry-image clearfix">
                            <div class="owl-carousel bottom-dots-center owl-theme" data-nav-dots="true" data-autoplay="true"  data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                                <div class="item">
                                    <img src="{{ URL::asset('assets/images/front-end-img/courses/2f.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ URL::asset('assets/images/front-end-img/courses/3f.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ URL::asset('assets/images/front-end-img/courses/4f.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="blog-detail">
                            <div class="entry-title mb-10">
                                <a href="#">Blog Post With Image Slider</a>
                            </div>
                            <div class="entry-meta mb-10">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga laborum totam itaque architecto! Laudantium sed delectus assumenda, doloribus non.</p>
                            </div>
                            <div class="entry-share d-flex justify-content-between align-items-center">
                                <div class="entry-button">
                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                                <div class="social">
                                    <strong>Share : </strong>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-12">
                    <div class="blog-post">
                        <div class="entry-image clearfix">
                            <ul class="grid-post list-unstyled">
                                <li>
                                    <img class="img-fluid" ssrc="{{ URL::asset('assets/images/front-end-img/courses/5f.jpg') }}" alt="">
                                </li>
                                <li>
                                    <img class="img-fluid" src="{{ URL::asset('assets/images/front-end-img/courses/6f.jpg') }}" alt="">
                                </li>
                                <li>
                                    <img class="img-fluid" src="{{ URL::asset('assets/images/front-end-img/courses/7f.jpg') }}" alt="">
                                </li>
                                <li>
                                    <img class="img-fluid" src="{{ URL::asset('assets/images/front-end-img/courses/8f.jpg') }}" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="blog-detail">
                            <div class="entry-title mb-10">
                                <a href="#">Blogpost With Image Grid Gallery</a>
                            </div>
                            <div class="entry-meta mb-10">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
                                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga laborum totam itaque architecto! Laudantium sed delectus assumenda, doloribus non.</p>
                            </div>
                            <div class="entry-share d-flex justify-content-between align-items-center">
                                <div class="entry-button">
                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                                <div class="social">
                                    <strong>Share : </strong>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endcomponent
