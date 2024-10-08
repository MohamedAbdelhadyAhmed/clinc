@extends('site.master')


@section('container')
    @include('site.layouts.banner')
    {{-- container --}}
    <div class="container">
        <h2 class="h1 fw-bold text-center my-4">majors</h2>
        <div class="d-flex flex-wrap gap-4 justify-content-center">
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctors')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctors')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctors')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctors')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctors')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctors')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctors')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctors')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
        </div>
        <h2 class="h1 fw-bold text-center my-4">doctors</h2>
        <section class="splide home__slider__doctors mb-5">
            <div class="splide__track ">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                alt="major">
                            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="{{route('doctor-booking')}}" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                alt="major">
                            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="{{route('doctor-booking')}}" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                alt="major">
                            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="{{route('doctors')}}" class="btn btn-outline-primary card-button">Browse
                                    Doctors</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                alt="major">
                            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="{{route('doctor-booking')}}" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                alt="major">
                            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="{{route('doctor-booking')}}" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                alt="major">
                            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="{{route('doctor-booking')}}" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                alt="major">
                            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="{{route('doctor-booking')}}" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card p-2" style="width: 18rem;">
                            <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                alt="major">
                            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                <h6 class="card-title fw-bold text-center">Major</h6>
                                <a href="{{route('doctor-booking')}}" class="btn btn-outline-primary card-button">Book an
                                    appointment</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>


    @include('site.layouts.banner-info')
@endsection
