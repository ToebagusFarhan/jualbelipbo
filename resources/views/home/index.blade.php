@extends('layout.home')

@section('content')
          <!-- Hero Slider -->
          <section class="hero-wrap text-center relative">
        <div id="owl-hero" class="owl-carousel owl-theme light-arrows slider-animated">
          <div class="hero-slide overlay" style="background-image:url(/front/img/hero/1.jpg)">
            <div class="container">
              <div class="hero-holder">
                <div class="hero-message">
                  <h1 class="hero-title nocaps">Great Items</h1>
                  <h2 class="hero-subtitle lines">New Airsoft Collection</h2>
                  <div class="buttons-holder">
                    <a href="/front/#" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hero-slide overlay" style="background-image:url(/front/img/hero/2.jpg)">
            <div class="container">
              <div class="hero-holder">
                <div class="hero-message">
                  <h1 class="hero-title nocaps">Exclusive Airsoft</h1>
                  <h2 class="hero-subtitle lines">Get awesome Airsoft only in OPM online shop</h2>
                  <div class="buttons-holder">
                    <a href="/front/#" class="btn btn-lg btn-color"><span>Buy it Now</span></a>
                    <a href="/front/#" class="btn btn-lg btn-transparent"><span>Learn More</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hero-slide overlay" style="background-image:url(/front/img/hero/3.jpg)">
            <div class="container">
              <div class="hero-holder">
                <div class="hero-message">
                  <h1 class="hero-title nocaps">Enjoy Shopping</h1>
                  <h2 class="hero-subtitle lines">OPM is</h2>
                  <div class="buttons-holder">
                    <a href="/front/#" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> <!-- end hero slider -->

      <!-- Promo Banners -->
      <section class="section-wrap promo-banners pb-30">
        <div class="container">
          <div class="row">

            <div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
              <a href="/front/#">
                <img src="/front/img/shop/collection_1.jpg" alt="">
                <div class="overlay"></div>
                <div class="promo-inner valign">
                  <h2>Airsoft</h2>
                  <span>Best Selling Deals</span>
                </div>
              </a>                        
            </div>

            <div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
              <a href="/front/#">
                <img src="/front/img/shop/collection_2.jpg" alt="">
                <div class="overlay"></div>
                <div class="promo-inner valign">
                  <h2>Ammunition</h2>
                  <span>All Kind</span>
                </div>
              </a>                        
            </div>

            <div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
              <a href="/front/#">
                <img src="/front/img/shop/collection_3.jpg" alt="">
                <div class="overlay"></div>
                <div class="promo-inner valign">
                  <h2>Accessories & Armour</h2>
                  <span>New Collection</span>
                </div>
              </a>                        
            </div>
            
          </div>
        </div>
      </section> <!-- end promo banners -->


      <!-- Trendy Products -->
      <section class="section-wrap-sm new-arrivals pb-50">
        <div class="container">

          <div class="row heading-row">
            <div class="col-md-12 text-center">
              <span class="subheading">Hot items of this year</span>
              <h2 class="heading bottom-line">
                Best Selling
              </h2>
            </div>
          </div>

          <div class="row items-grid">              

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="/front/shop-single.html">
                    <img src="/front/img/shop/shop_item_1.jpg" alt="">
                  </a>
                  <div class="product-label">
                    <span class="sale">sale</span>
                  </div>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="/front/#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                      <span class="category">
                        <a href="/front/catalogue-grid.html">Category</a>
                      </span>
                      <h3 class="product-title">
                        <a href="/front/shop-single.html">Item</a>
                      </h3>
                      <span class="price">
                        <del>
                          <span>-Price Tag-</span>
                        </del>
                        <ins>
                          <span class="amount">-Price Tag-</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="/front/#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="/front/shop-single.html">
                    <img src="/front/img/shop/shop_item_2.jpg" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="/front/#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                    <span class="category">
                        <a href="/front/catalogue-grid.html">Category</a>
                      </span>
                      <h3 class="product-title">
                        <a href="/front/shop-single.html">Item</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">-Price Tag-</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="/front/#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="/front/shop-single.html">
                    <img src="/front/img/shop/shop_item_3.jpg" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="/front/#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                    <span class="category">
                        <a href="/front/catalogue-grid.html">Category</a>
                      </span>
                      <h3 class="product-title">
                        <a href="/front/shop-single.html">Item</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">-Price Tag-</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="/front/#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="/front/shop-single.html">
                    <img src="/front/img/shop/shop_item_4.jpg" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="/front/#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                    <span class="category">
                        <a href="/front/catalogue-grid.html">Category</a>
                      </span>
                      <h3 class="product-title">
                        <a href="/front/shop-single.html">Item</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">-Price Tag-</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="/front/#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="/front/shop-single.html">
                    <img src="/front/img/shop/shop_item_5.jpg" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="/front/#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                    <span class="category">
                        <a href="/front/catalogue-grid.html">Category</a>
                      </span>
                      <h3 class="product-title">
                        <a href="/front/shop-single.html">Item</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">-Price Tag-</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="/front/#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="/front/shop-single.html">
                    <img src="/front/img/shop/shop_item_6.jpg" alt="">
                  </a>
                  <div class="product-label">
                    <span class="sale">sale</span>
                  </div>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="/front/#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                    <span class="category">
                        <a href="/front/catalogue-grid.html">Category</a>
                      </span>
                      <h3 class="product-title">
                        <a href="/front/shop-single.html">Item</a>
                      </h3>
                      <span class="price">
                        <del>
                          <span>-Price Tag-</span>
                        </del>
                        <ins>
                          <span class="amount">-Price Tag-</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="/front/#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="/front/shop-single.html">
                    <img src="/front/img/shop/shop_item_7.jpg" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="/front/#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                    <span class="category">
                        <a href="/front/catalogue-grid.html">Category</a>
                      </span>
                      <h3 class="product-title">
                        <a href="/front/shop-single.html">Item</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">-Price Tag-</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="/front/#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="product-item hover-trigger">
                <div class="product-img">
                  <a href="/front/shop-single.html">
                    <img src="/front/img/shop/shop_item_8.jpg" alt="">
                  </a>
                  <div class="hover-overlay">                    
                    <div class="product-actions">
                      <a href="/front/#" class="product-add-to-wishlist">
                        <i class="fa fa-heart"></i>
                      </a>
                    </div>
                    <div class="product-details valign">
                    <span class="category">
                        <a href="/front/catalogue-grid.html">Category</a>
                      </span>
                      <h3 class="product-title">
                        <a href="/front/shop-single.html">Item</a>
                      </h3>
                      <span class="price">
                        <ins>
                          <span class="amount">-Price Tag-</span>
                        </ins>
                      </span>
                      <div class="btn-quickview">
                        <a href="/front/#" class="btn btn-md btn-color">
                        <span>Quickview</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- end row -->
        </div>
      </section> <!-- end trendy products -->

      <!-- Testimonials -->
      <section class="section-wrap relative testimonials bg-parallax overlay" style="background-image:url(img/testimonials/testimonial_bg.jpg);">
        <div class="container relative">

          <div class="row heading-row mb-20">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="heading white bottom-line">Happy Clients</h2>
            </div>
          </div>

          <div id="owl-testimonials" class="owl-carousel owl-theme text-center">

            <div class="item">
              <div class="testimonial">
                <p class="testimonial-text">READY</p>
                <span>OPM</span>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <p class="testimonial-text">AIM</p>
                <span>OPM</span>
              </div>
            </div>

            <div class="item">
              <div class="testimonial">
                <p class="testimonial-text">SHOOT</p>
                <span>OPM</span>
              </div>
            </div>
          </div>
        </div>

      </section> <!-- end testimonials -->


      <!-- Product Widgets List -->
      <section class="section-wrap products-list">
        <div class="container">
          <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
              <h3 class="widget-title bottom-line full-grey">Special Offer</h3>
              <ul class="product-list-widget">
                <li class="clearfix">
                  <a href="/front/shop-single-product.html">
                    <img src="/front/img/shop/shop_item_1.jpg" alt="">
                    <span class="product-title">-Item Tag-</span>
                  </a>
                  <span class="price">
                    <del>
                      <span>-Price Tag-</span>
                    </del>
                    <ins>
                      <span class="amount">-Price Tag-</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="/front/shop-single-product.html">
                    <img src="/front/img/shop/shop_item_2.jpg" alt="">
                    <span class="product-title">-Item Tag-</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">-Price Tag-</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="/front/shop-single-product.html">
                    <img src="/front/img/shop/shop_item_3.jpg" alt="">
                    <span class="product-title">-Item Tag-</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">-Price Tag-</span>
                    </ins>
                  </span>
                </li>               
              </ul>
            </div> <!-- end special offer -->

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
              <h3 class="widget-title bottom-line full-grey">Bestsellers</h3>
              <ul class="product-list-widget">
                <li class="clearfix">
                  <a href="/front/shop-single-product.html">
                    <img src="/front/img/shop/shop_item_9.jpg" alt="">
                    <span class="product-title">-Item Tag-</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">-Price Tag-</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="/front/shop-single-product.html">
                    <img src="/front/img/shop/shop_item_10.jpg" alt="">
                    <span class="product-title">-Item Tag-</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">-Price Tag-</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="/front/shop-single-product.html">
                    <img src="/front/img/shop/shop_item_11.jpg" alt="">
                    <span class="product-title">-Item Tag-</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">-Price Tag-</span>
                    </ins>
                  </span>
                </li>               
              </ul>
            </div> <!-- end bestsellers -->

            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
              <h3 class="widget-title bottom-line full-grey">Accessories</h3>
              <ul class="product-list-widget">
                <li class="clearfix">
                  <a href="/front/shop-single-product.html">
                    <img src="/front/img/shop/shop_item_5.jpg" alt="">  
                    <span class="product-title">-Item Tag-</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">-Price Tag-</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="/front/shop-single-product.html">
                    <img src="/front/img/shop/shop_item_7.jpg" alt="">
                    <span class="product-title">-Item Tag-</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">-Price Tag-</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="/front/shop-single-product.html">
                    <img src="/front/img/shop/shop_item_8.jpg" alt="">
                    <span class="product-title">-Item Tag-</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">-Price Tag-</span>
                    </ins>
                  </span>
                </li>               
              </ul>
            </div> <!-- end top rated -->

            <div class="col-md-3 col-sm-6 col-xs-12 products-widget last">
              <h3 class="widget-title bottom-line full-grey">top rated</h3>
              <ul class="product-list-widget">
                <li class="clearfix">
                  <a href="/front/shop-single-product.html">
                    <img src="/front/img/shop/shop_item_4.jpg" alt="">
                    <span class="product-title">-Item Tag-</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">-Price Tag-</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="/front/shop-single-product.html">
                    <img src="/front/img/shop/shop_item_6.jpg" alt="">
                    <span class="product-title">-Item Tag-</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">-Price Tag-</span>
                    </ins>
                  </span>
                </li>
                <li class="clearfix">
                  <a href="/front/shop-single-product.html">
                    <img src="/front/img/shop/shop_item_12.jpg" alt="">
                    <span class="product-title">-Item Tag-</span>
                  </a>
                  <span class="price">
                    <ins>
                      <span class="amount">-Price Tag-</span>
                    </ins>
                  </span>
                </li>               
              </ul>
            </div> <!-- end sales -->

          </div> <!-- end row -->
        </div>
      </section> <!-- end product widgets -->

@endsection