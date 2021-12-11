@extends('pages.admin.main')
@section('content')
    <form method="POST" action="{{ route('manage-product.update',['id'=>data_get($product,'id')]) }}"
          enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product name</label>
            <input type="text" name="product_name" value="{{data_get($product,'name')}}" class="form-control"
                   id="exampleFormControlInput1"
                   placeholder="Product name..">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">VND</label>
            <input type="text" name="product_price" value="{{data_get($product,'price')}}" class="form-control"
                   id="exampleFormControlInput1"
                   placeholder="Product price..">
        </div>
        <div class="mb-3">
            <label for="exampleDataList" class="form-label">Category name</label>
            <select class="custom-select" name="category_id">
                <option selected value="">Select category name</option>
                @foreach($categories as $category)

                    <option
                        @foreach($product->categories as $product_category)
                            @if(data_get($product_category,'id')== $category->id) selected @endif
                        @endforeach

                        value="{{$category->id}}">
                        {{$category->category_name}}</option>


                @endforeach
                <td>

                </td>
            </select>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Product image</label>
            <input class="form-control" type="file" id="formFile" name="product_image">
            <div class="d-flex justify-content-between">
                <img class="align-items-center" width="150" src="{{asset('storage/'.data_get($product,'image'))}}">
            </div>

        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Description" id="floatingTextarea2" style="height: 100px"
                      name="product_desc">{{data_get($product,'description')}}</textarea>
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-success" type="submit">Save</button>

            <!-- <button type="button" class="btn btn-danger ml-3">Back</button> -->
        </div>

    </form>


@endsection
