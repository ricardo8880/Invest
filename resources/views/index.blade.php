@extends('layout.layout')
@section('content')
    <header class="home">

    </header>




    <div id="carouselExampleControlsNoTouching" class="carousel slide m-auto" data-touch="false" data-interval="false" style="width: 900px">
        <div class="carousel-inner">
          <div class="carousel-item active">
                <div class="row m-0">
                    <div class="m-auto">
                        <div class="card my-4" style="width: 400px">
                            <img src="/img/ff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                        </div>
                    </div>

                    <div class="m-auto">
                        <div class="card my-4" style="width: 400px">
                            <img src="/img/f.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                        </div>
                    </div>  
                </div>
          </div>
          <div class="carousel-item">
                <div class="row m-0">
                    <div class="m-auto">
                        <div class="card my-4" style="width: 400px">
                            <img src="/img/ff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                        </div>
                    </div>

                    <div class="m-auto">
                        <div class="card my-4" style="width: 400px">
                            <img src="/img/f.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                        </div>
                    </div>  
                </div>
          </div>

          
          <div id="noticia"></div>

          <div class="carousel-item">
                <div class="row m-0">
                    <div class="m-auto">
                        <div class="card my-4" style="width: 400px">
                            <img src="/img/ff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="m-auto">
                        <div class="card my-4" style="width: 400px">
                            <img src="/img/f.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                        </div>
                    </div>  
                </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControlsNoTouching" data-slide="prev">
          <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControlsNoTouching" data-slide="next">
          <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    </div>
@endsection