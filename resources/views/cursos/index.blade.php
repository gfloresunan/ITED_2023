@component('layouts.app')
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
                                    @foreach ($cursos as $curso)
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="box">
                                                <a href="{{ route('cursos.index', $curso->id) }}">
                                                    <img class="card-img-top" src="{{ URL::asset('assets/images/front-end-img/courses/fondos.png') }}"  alt="Card image cap">
                                                </a>
                                                <div class="box-body">
                                                    <div class="text-left">
                                                        <h4 class="box-title" style="margin-bottom: 0px">{{ $curso->fullname }}</h4>
                                                        <hr class="w-180 bg-primary" style="margin-left:0;">
                                                        <p class="box-text">{!! $curso->summary !!}</p>
                                                        <a href="{{ route('curso.index', $curso->id) }}" class="btn btn-outline btn-primary btn-sm">Ver curso</a>
                                                    </div>
                                                    {{ $cursos->links() }}
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
