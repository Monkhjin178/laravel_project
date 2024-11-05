@extends('layouts.admin')
@section('content')
   <form action="{{route ('update' ,$product->id)}}"  method = "POST">
    @csrf
    @method('PUT')
    <a href="{{route('index') }}" class="">back</a>
    <div class="mb-3">
        <label >name</label>
        <input type="text" name="name" class="from-control" value="{{$product->name}}">
        @error('name')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label >slug</label>
        <input type="text" name="slug" class="from-control" value="{{$product->slug}}">
        @error('slug')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label >price</label>
        <input type="text" name="price" class="from-control" value="{{$product->price}}">
        @error('price')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label >description</label>
        <input type="text" name="description" class="from-control" value="{{$product->description}}">
        @error('description')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <button class="btn-primary" type="submit">
        Updated Now
    </button>
   </form>
@endsection

