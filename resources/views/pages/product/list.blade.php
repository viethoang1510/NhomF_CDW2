@extends('pages.admin.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/category.css')}}">
@endsection
@section('content')
    <div class="container-xl">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endif
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Product</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{route('manage-product.create')}}" class="btn btn-success"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Product</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product )
                        <tr>
                            <td>{{data_get($product,'name')}}</td>
                            <td>
                                @foreach(data_get($product,'categories') as $category)
                                    {{$category->category_name}} . <br>
                                @endforeach
                            </td>
                            <td>{{data_get($product,'price')}}</td>
                            <td>{{data_get($product,'description')}}</td>
                            <td>
                                @if(!is_null(data_get($product,'image')))
                                    <img width="100px" src="{{asset('storage/'.data_get($product,'image'))}}">
                                @endif
                            </td>
                            <td class="d-flex justify-content-between">
                                <a href="{{route('manage-product.edit',[$product->id])}}" class="edit"><i
                                        class="material-icons" title="Edit">&#xE254;</i></a>

                                <form action="{{route('manage-product.destroy',[$product->id])}}" method="post"
                                      onsubmit="return window.confirm('Delete this record?')">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="close" aria-label="Close">
                                        <span class="text-danger" aria-hidden="true">&times;</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection


