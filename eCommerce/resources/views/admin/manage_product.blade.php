@extends('admin/layout')
@section('page_title','Manage Product')
@section('product_select','active')
@section('container')

  
<h1>Manage Product</h1> 
   <a href="{{url('admin/product')}}">
<button type="button" class="btn btn-success">Back</button>

</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('product.manage_product_process')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="control-label mb-1">Name</label>
                            <input id="name" value="{{$name}}" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                        </div>

                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror

                        <div class="form-group">
                            <label for="slug" class="control-label mb-1">Slug</label>
                            <input id="slug" value="{{$slug}}" name="slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                        </div>

                        <div class="form-group">
                            <label for="gallery" class="control-label mb-1">Gallery</label>
                            <input id="file" name="file" type="file" class="form-control" aria-required="true" aria-invalid="false" required>
                        </div>

                        @error('gallery')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror

                        <div class="form-group">
                            <label for="category_id" class="control-label mb-1">Category</label>
                            <input id="category" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                        </div>

                        <div class="form-group">

                            <label for="description" class="control-label mb-1">Description</label>
                            <textarea id="description" name="description" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$description}}</textarea>
                            </div>
                        <div>
                             <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                             Submit
                              </button>
                        </div>
                        <input type="hidden" name="id" value="{{$id}}"/>
                        </form>
                    </div>
                </div>
            </div>
         
        </div>   

    </div>
</div> 
@endsection     