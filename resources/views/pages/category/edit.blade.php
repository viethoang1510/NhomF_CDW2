@extends('pages.admin.main')
@section('content')
<form method="POST" action="{{route('manage-category.update',[$category->id])}}">
     @csrf
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Update Category</label>
    <input type="text" name="category_name" value="{{$category['category_name']}}" class="form-control" id="id" placeholder="Category name    ">
    </div>
    <div class="d-flex justify-content-center" >
        <button class="btn btn-success" type="submit">Submit</button>
        
        <!-- <button type="button" class="btn btn-danger ml-3">Back</button> -->
    </div>
    
</form>
    
    
@endsection