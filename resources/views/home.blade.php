@extends('layouts.app')

@section('title', 'Shop')
@section('content')
	<form method="get">
	  <div class="form-row align-items-center">
		<div class="col-auto">
		  <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Search products" name="name">
		</div>
		<div class="col-auto">
		  <button type="submit" class="btn btn-primary mb-2">Search</button>
		</div>
	  </div>
	</form>
	<div class="row">
		@foreach($products as $product)
			<div class="col-md-4">
				<figure class="card card-product">
					<div class="img-wrap">
						<img src="{{asset('images/2.jpg')}}" />
					</div>
					<figcaption class="info-wrap">
						<h6 class="title">
							<a href="#">{{$product->name}}</a>
						</h6>
						<div class="price-wrap">
							<span class="price-new">{{$product->price}} zł</span>
						</div>
					</figcaption>
				</figure>
			</div>
		@endforeach
	</div>
<div class="row">
	<div class="col-md-12">
		{{$products->links()}}
	</div>
</div>
@endsection
