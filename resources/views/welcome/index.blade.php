@component('layouts.app')
    <section class="bg-img pt-130 pb-150" data-overlay="7" style="background-image: url(assets/images/front-end-img/background/bg-9.jpg); background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mt-80">
                        <h1 class="box-title text-white mb-30">
                            Encuentre su curso en línea
                        </h1>
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
                    <div class="tab-content">
                        <div class="tab-pane active" id="all" role="tabpanel">
                            <div class="px-15 pt-15">
                                <div class="row">
                                    @foreach ($categorias as $cat)
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="box">
                                            <a href="#">
                                                <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/fondos.png') }}"  alt="Card image cap">
                                            </a>
                                            <div class="box-body">
                                                <div class="text-left">
                                                    <h4 class="box-title" style="margin-bottom: 0px">{{ $cat->nombreCategoria }}</h4>
                                                    <hr class="w-180 bg-primary" style="margin-left:0;">
                                                    <p class="box-text">{{ $cat->descriptions }}</p>
                                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Ver cursos</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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
