@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Category Add Form</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="category_name">Category Name</label>
                            @error('name')
                                <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                            @enderror
                            <input type="text" name="name" class="form-control" id="category_name">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Upload Category Images</label>
                                    @error('image')
                                        <h6 class="modal-header justify-content-start"
                                            style="font-weight: 800; color: #FFFFFF; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                            {{ $message }}</h6>
                                    @enderror
                                    <br> <small>This image size must be upto ( 80px X 80px )</small>
                                    <div class="card w-100">
                                        <div class="card-header d-flex justify-content-start">
                                            <input type="file" name="image" id="image" accept="image/*"
                                                class="d-none " onchange="showImage(this)">
                                            <button class="btn btn-sm btn-primary" type="button"
                                                onclick="document.getElementById('image').click()">Select
                                                Image</button>
                                        </div>
                                        <div class="card-body d-flex flex-wrap justify-content-start" id="image-container">
                                            <img class="category-image" id="thumbnil">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Category Status</label>
                            <div class="form-group">
                                <label><input type="radio" value="1" name="status"> Active</label>
                                &nbsp; &nbsp;
                                <label><input type="radio" value="0" name="status"> Inactive</label>
                            </div>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Add Category">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
