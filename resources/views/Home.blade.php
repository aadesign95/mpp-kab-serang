@extends('layouts.master')

@section('content')
    <div class="container">
        <section class="hero">
            <div class="hero-bg" style="background: url('{{ asset('images/hero-01.png') }}') no-repeat center center/cover;">
            </div>
            <div class="hero-content">
                <h1>Pelayanan Cepat, Mudah, dan Nyaman</h1>
                <p>Kami hadir untuk memberikan layanan terbaik dengan proses yang lebih mudah dan cepat.</p>
                <a href="#" class="btn btn-main">Pelajari Lebih Lanjut</a>
            </div>
        </section>

        {{-- Section value --}}
        <section>
            <div class="section-title">
                <h2 class="text-center mb-5">Nilai Yang Ditanamkan</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body text-centers">
                                <i class="ph ph-atom fs-1"></i>
                                <h5 class="card-title mt-3">Terintegrasi</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis inventore quam
                                    voluptates excepturi veniam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body text-centers">
                                <i class="ph ph-atom fs-1"></i>
                                <h5 class="card-title mt-3">Terintegrasi</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis inventore quam
                                    voluptates excepturi veniam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body text-centers">
                                <i class="ph ph-atom fs-1"></i>
                                <h5 class="card-title mt-3">Terintegrasi</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis inventore quam
                                    voluptates excepturi veniam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body text-centers">
                                <i class="ph ph-atom fs-1"></i>
                                <h5 class="card-title mt-3">Terintegrasi</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis inventore quam
                                    voluptates excepturi veniam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
