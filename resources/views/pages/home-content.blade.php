@extends('layout')
@section('content')
@include('slider')
<br><br>
<h2 class="title text-center">Features Items</h2>

@foreach($all_view_products as $view_product)
<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
                <div class="productinfo text-center">
                <img src="{{ URL::to($view_product->product_image) }}" style="height: 200px;" alt="" />
                    <h2>{{ $view_product->product_price }}$</h2>
                    <p>{{ $view_product->product_name }}</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>{{ $view_product->product_price }}$</h2>
                        <a href="{{ URL::to('/view_product/'.$view_product->product_id) }}"><p>{{ $view_product->product_name }}</p></a>
                        <a href="{{ URL::to('/view_product/'.$view_product->product_id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-plus-square"></i>{{ $view_product->manufacture_name }}</a></li>
                <li><a href="{{ URL::to('/view_product/'.$view_product->product_id) }}"><i class="fa fa-plus-square"></i>View Product</a></li>
            </ul>
        </div>
    </div>
</div>
@endforeach

</div><!--features_items-->

<div class="category-tab"><!--category-tab-->
<div class="col-sm-12">
    <ul class="nav nav-tabs">
        <li><a href="#samsung" data-toggle="tab">Samsung</a></li>
        <li><a href="#hp" data-toggle="tab">HP</a></li>
        <li><a href="#lenovo" data-toggle="tab">Lenovo</a></li>
        <li><a href="#apple" data-toggle="tab">Apple</a></li>
    </ul>
</div>
<div class="tab-content">
    <div class="tab-pane fade active in" id="samsung" >
        <div class="col-sm-3">
         <div class="product-image-wrapper">
          <div class="single-products">
           <div class="productinfo text-center">
             <img src="{{ asset('frontend/images/laptop/samsung_tab_2.jpg') }}" alt="" />
               <h2>$56</h2>
               <p>Easy Polo Black Edition</p>
               <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
         </div>
        </div>
    </div>

     <div class="col-sm-3">
         <div class="product-image-wrapper">
          <div class="single-products">
           <div class="productinfo text-center">
             <img src="{{ asset('frontend/images/laptop/samsung_tab_2.jpg') }}" alt="" />
               <h2>$56</h2>
               <p>Easy Polo Black Edition</p>
               <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
         </div>
        </div>
    </div>

     <div class="col-sm-3">
         <div class="product-image-wrapper">
          <div class="single-products">
           <div class="productinfo text-center">
             <img src="{{ asset('frontend/images/laptop/samsung_tab_2.jpg') }}" alt="" />
               <h2>$56</h2>
               <p>Easy Polo Black Edition</p>
               <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
         </div>
        </div>
    </div>

     <div class="col-sm-3">
         <div class="product-image-wrapper">
          <div class="single-products">
           <div class="productinfo text-center">
             <img src="{{ asset('frontend/images/laptop/samsung_tab_2.jpg') }}" alt="" />
               <h2>$56</h2>
               <p>Easy Polo Black Edition</p>
               <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
         </div>
        </div>
    </div>
   </div>
    
    <div class="tab-pane fade" id="hp" >
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/laptop/samsung_tab_7.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/laptop/samsung_tab_2.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/laptop/samsung_tab_3.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/laptop/samsung_tab_5.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="lenovo" >
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/laptop/samsung_tab_6.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/laptop/samsung_tab_7.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/laptop/samsung_tab_2.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/laptop/samsung_tab_3.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="apple" >
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/laptop/samsung_tab_5.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/laptop/samsung_tab_5.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/laptop/samsung_tab_6.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/laptop/samsung_tab_7.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>
</div><!--/category-tab-->

<div class="recommended_items"><!--recommended_items-->
<h2 class="title text-center">recommended items</h2>

<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active">   
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ asset('frontend/images/laptop/iphone_2.jpg') }}" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ asset('frontend/images/laptop/iphone_2.jpg') }}" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ asset('frontend/images/laptop/iphone_2.jpg') }}" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="item">  
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ asset('frontend/images/laptop/iphone_2.jpg') }}" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ asset('frontend/images/laptop/iphone_2.jpg') }}" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ asset('frontend/images/laptop/iphone_2.jpg') }}" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
     <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>          
</div>
</div><!--/recommended_items-->


@endsection