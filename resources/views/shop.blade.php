@extends('layouts.templateShop')

@section('content')

	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->	
							{{-- <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Fendi</a></li>
											<li><a href="">Guess</a></li>
											<li><a href="">Valentino</a></li>
											<li><a href="">Dior</a></li>
											<li><a href="">Versace</a></li>
										</ul>
									</div>
								</div>
							</div> --}}

							@foreach($jenis_produk as $row)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">{{ $row->jenis_produk }}</a></h4>
								</div>
							</div>
							@endforeach
							
						</div><!--/category-productsr-->
					
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

						@foreach ($data as $row)
						<div  onclick="location.href='{{ url('admin/produk', $row->id) }}';" class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{asset('storage/assets/'.$row->gambar)}}" alt="" />
										<h2>Rp. {{ number_format($row->harga, 3, ',', '.') }}</h2>
										<p>{{ $row->nama_produk }}</p>
										<a href="{{ url('/keranjang/create', $row->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Rp. {{ number_format($row->harga, 3, ',', '.') }}</h2>
											<p>{{ $row->nama_produk }}</p>
											<a href="{{ url('/keranjang/create', $row->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								{{-- <div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div> --}}
							</div>
						</div>
						@endforeach
						
						
						{{-- <ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul> --}}
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	
	<footer style="margin-top: 170px;" id="footer pt-6"><!--Footer--> 
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2021 SantriNgoding.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	@endsection