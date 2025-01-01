@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="text-center mb-5">Anggota Kelompok</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
            <!-- Grid Item -->
            <div class="col">
                <div class="card shadow-sm border-0 rounded-lg overflow-hidden hover-effect">
                    <img src="{{ asset('img/anin.jpeg') }}" class="card-img-top" alt="Photo"
                        style="height: 300px; object-fit: cover; border-bottom: 3px solid #a52a2a;">
                    <div class="card-body text-center">
                        <h6 class="card-title text-uppercase font-weight-bold mb-2">Anindya Silvia Marella</h6>
                        <p class="card-text text-muted small">NIM: 8020220268</p>
                    </div>
                </div>
            </div>

            <!-- Grid Item -->
            <div class="col">
                <div class="card shadow-sm border-0 rounded-lg overflow-hidden hover-effect">
                    <img src="{{ asset('img/lala.jpeg') }}" class="card-img-top" alt="Photo"
                        style="height: 300px; object-fit: cover; border-bottom: 3px solid #a52a2a;">
                    <div class="card-body text-center">
                        <h6 class="card-title text-uppercase font-weight-bold mb-2">Fitriya Rahma</h6>
                        <p class="card-text text-muted small">NIM: 8020220390</p>
                    </div>
                </div>
            </div>

            <!-- Grid Item -->
            <div class="col">
                <div class="card shadow-sm border-0 rounded-lg overflow-hidden hover-effect">
                    <img src="{{ asset('img/nazwa.jpeg') }}" class="card-img-top" alt="Photo"
                        style="height: 300px; object-fit: cover; border-bottom: 3px solid #a52a2a;">
                    <div class="card-body text-center">
                        <h6 class="card-title text-uppercase font-weight-bold mb-2">Nazwa Finanda Olinvia</h6>
                        <p class="card-text text-muted small">NIM: 8020220258</p>
                    </div>
                </div>
            </div>

            <!-- Grid Item -->
            <div class="col">
                <div class="card shadow-sm border-0 rounded-lg overflow-hidden hover-effect">
                    <img src="{{ asset('img/kei.jpeg') }}" class="card-img-top" alt="Photo"
                        style="height: 300px; object-fit: cover; border-bottom: 3px solid #a52a2a;">
                    <div class="card-body text-center">
                        <h6 class="card-title text-uppercase font-weight-bold mb-2">Shafaa Kayla Delvia</h6>
                        <p class="card-text text-muted small">NIM: 8020220309</p>
                    </div>
                </div>
            </div>

            <!-- Grid Item -->
            <div class="col">
                <div class="card shadow-sm border-0 rounded-lg overflow-hidden hover-effect">
                    <img src="{{ asset('img/zakwan.jpeg') }}" class="card-img-top" alt="Photo"
                        style="height: 300px; object-fit: cover; border-bottom: 3px solid #a52a2a;">
                    <div class="card-body text-center">
                        <h6 class="card-title text-uppercase font-weight-bold mb-2">M. Dzakwan Syah</h6>
                        <p class="card-text text-muted small">NIM: 8020220286</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .hover-effect {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-effect:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
</style>
