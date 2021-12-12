@extends('pages.admin.main')
@section('content')
    <form method="POST" action="{{ route('manage-product.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product name</label>
            <input type="text" name="product_name" class="form-control" id="exampleFormControlInput1"
                   placeholder="Product name..">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product price</label>
            <input type="text" name="product_price" class="form-control" id="exampleFormControlInput1"
                   placeholder="Product price..">
        </div>
        <div class="mb-3">
        <label for="exampleDataList" class="form-label">Category name</label>
        <select class="custom-select" name="category_id">
            <option selected value="">Select category name</option>

           @foreach($categories as $cate)
                <option  value="{{data_get($cate,'id')}}">{{data_get($cate,'category_name')}}</option>
            @endforeach
        </select>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Product image</label>
            <input class="form-control" type="file" id="formFile" name="product_image">
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Description" id="floatingTextarea2" style="height: 100px" name="product_desc"></textarea>
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-success" type="submit">Save</button>

            <!-- <button type="button" class="btn btn-danger ml-3">Back</button> -->
        </div>

    </form>


@endsection
