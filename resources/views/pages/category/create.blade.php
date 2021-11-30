@extends('pages.admin.main')
@section('content')
<form method="POST" action="{{ route('manage-category-store') }}">
     @csrf
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Add New Caterory</label>
    <input type="text" name="category_name" class="form-control" id="exampleFormControlInput1" placeholder="Category name..">
    </div>
    <div class="d-flex justify-content-center" >
        <button class="btn btn-success" type="submit">Save</button>
        
        <!-- <button type="button" class="btn btn-danger ml-3">Back</button> -->
    </div>
    
</form>
    
    
@endsection