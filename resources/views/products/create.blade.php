@extends('products.layouts')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-td">
		<div class="pull-left">
			 <h2>Add New Products</h2>
		</div>
		<div class="pull-left">
			<a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
		</div>
	</div>
</div>

@if(@errors->any())
  <div class="alert alert-danger">
  	 <strong>Whoops!</strong>There were some problems with your input<br><br>
  	  <ul>
  	  	@foreach($errors->all() as $error)
  	  	 <li>{{ $error }}</li>
  	  	 @endforeach
  	  </ul>
  </div>
 @endif
 <form action="{{ route('products.store')}}" method="post">
 	@csrf
 	<div class="row">
 		<div class="col-xs-12 col-sm-12 col-md-12">
 			<div class="form-group">
 			    <strong>Name:</strong>	
 			    <input type="text" name="name" class="form-control" placeholder="Enter your Name">
 			</div>
 		</div>
 		<div class="col-xs-12 col-sm-12 col-md-12">
 			<div class="form-group">
 			    <strong>Details:</strong>	
 			    <input type="text" name="Details" class="form-control" placeholder="Enter your Details">
 			</div>
 		</div>
 		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
 			<button type="Submit" class="btn btn-primary">Submit</button>
 		</div>
 	</div>
 	
 </form>
 @endsection