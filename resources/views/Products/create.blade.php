@extends('main')
@section('content')
<div class="row">
    <div class="col-md-6">
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Add product</strong>
         
        </div>
        
        <div class="card-body">
          <form class="form-inline" action="{{ route('products.store') }}" method="POST">
              @csrf
            <label class="sr-only" for="inlineFormInputName2">product</label>
            <input type="text" name="productName" required class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Add product Name">      
            <button type="submit" class="btn btn-primary mb-2">Add product Name</button>
           
          </form>
          <a href="{{ route('products.index') }}"><button style="margin-top: 10px" class="btn btn-dark mb-2">Back To All products</button></a> 
        </div>
        
      </div>
    </div>
  </div> <!-- end section -->
@endsection