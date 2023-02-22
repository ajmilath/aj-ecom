@extends('customer/layout')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="customer_carousel col-lg-8">
      <div id="carouselExampleControls" class="carousel slide mt-4 ms-4" data-bs-ride="carousel">
        <div class="carousel-inner ms-0">
          <div class="carousel-item active">
            <img src="https://azcd.domayne.com.au/media/catalog/category/cache/25/image/1260x/17f82f742ffe127f42dca9de82fb58b1/gp917532-furniture-hero.jpg" class="d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.arteriorshome.com/media/catalog/product/cache/3d47458fd5e2e3e5a1e1114900a568b8/2/9/2945.e2.jpg" class="d-block " alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://i5.walmartimages.com/asr/78c73530-d8d5-4c6c-b676-7deef1f2042d.5754bffb98a511d307e3ccdc9bde556c.jpeg" class="d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.homedepot-static.com/lifestyleimages/1024x682/ad40b887-970f-4749-99ef-1287e8b989c331.jpeg" class="d-block  " alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="col-lg-2 banner mt-4 ms-0">
      <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/web_rhs_02022023_1.jpg" height="600" alt="">
    </div>

  </div>
</div>

<div class="container-fluid mt-5 products">
  <div class="row">
    <div class="card ms-4 me-4" style="width: 16rem; padding:0">
      <a href="products"><img src="https://i.pinimg.com/originals/57/64/ed/5764edae4878b683898b07a3a052eabb.jpg" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title">Hanging Lights</h5>
        <p class="card-text"></p>
        <a href="customer/products" class="">ExploreStarting Rs.500</a>
      </div>
    </div>

    <div class="card ms-4" style="width: 16rem; padding:0">
      <a href=""><img src="https://ii1.pepperfry.com/media/wysiwyg/banners/decor_web_section3_14102022_3.jpg" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title">Candle Holders</h5>
        <p class="card-text"></p>
        <a href="customer/products" class="">ExploreStarting Rs.400</a>
      </div>
    </div>
  </div>
</div>



@endsection('content')