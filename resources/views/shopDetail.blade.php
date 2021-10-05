@extends('layouts.templateShop')

@section('content')


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @foreach($jenis_produk as $row)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">{{ $row->jenis_produk }}</a></h4>
								</div>
							</div>
							@endforeach
                    </div>
                </div>
            </div>
            
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img class="thumbnail" src="{{asset('storage/'.$data->gambar)}}" alt="" />
                            <h3>ZOOM</h3>
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">
                            
                              <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                      <a href=""><img class="thumbnail" src="{{asset('storage/'.$data->gambar)}}" alt=""></a>
                                    </div>
                                    
                                    
                                </div>

                              <!-- Controls -->
                              <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2>{{ $data->nama_produk }}</h2>
                            <p>Product ID: {{ $data->id }}</p>
                            <img src="images/product-details/rating.png" alt="" />
                            <span>
                                <span>Rp. {{ number_format($data->harga, 3, ',', '.') }}</span>
                                <button  onclick="location.href='{{ url('/keranjang/create', $data->id) }}';" type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </button>
                            </span>
                            <p><b>Availability:</b> In Stock</p>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
                
            </div>
        </div>
    </div>
</section>

<footer id="footer"><!--Footer--> 
    <div  class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
            </div>
        </div>
    </div>
    
</footer><!--/Footer-->

@endsection