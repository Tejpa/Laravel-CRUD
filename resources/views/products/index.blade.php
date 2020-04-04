@extends('products.layouts')

@section('content')
  <div class="row">
  	<div class="col-lg-12 margin-tb">
  		<div class="pull-left">
  			<h2>Laravel CRUD</h2>
  		</div>
  		<div class="pull-right">
  		<a class="btn btn-success" href="{{route('products.create')}}">Create Product</a>
  		</div>
  	</div>
  </div>
 @if($message = session::get('success'))
   <div class="alert alert-success">
   	  <p>{{ $message }}</p>
   </div>
 @endif

 <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Details</th>
        <th width="300px">Action</th>
      </tr>
    </thead>
    @foreach($prducts as $product)

    <tbody>
      <tr>
      	<td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$products->Details}}</td>
        <td>
        <a class="btn btn-primary" href="{{ route('products.show',$product->id) }}">Show</a>
        <a class="btn btn-success" href="{{ route('products.edit',$product->id) }}">Edit</a>
        <a class="btn btn-danger" href="{{ route('products.destroy',$product-id) }}"></a>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
  @endsection