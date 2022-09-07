@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <main>
        <div class="jumbotron"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 wrapper d-flex flex-wrap">
                    <div class="flag text-uppercase fw-bold text-light fs-3">current series</div>
                    <div class="comic-card">
                        <img :src="cover" :alt="series" />
                        <h5 class="fw-bold text-light mt-3 fs-6"></h5>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-primary fw-bold">Load More</button>
                    </div>
                </div>
            </div>
            <div class="background">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col d-flex align-items-center justify-content-center" v-for="(img, index) in imgList"
                            :key="index">
                            <img :src="require(`../assets/img/buy-${img.imgPath}`)" alt="img.alt">
                            <h6 class="text-light text-uppercase"></h6>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
