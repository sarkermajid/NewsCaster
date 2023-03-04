@extends('admin.master')


@push('styles')
    {{-- Image Upload CSS --}}
    <style>
        .image_container {
            height: 120px;
            width: 200px;
            border-radius: 6px;
            overflow: hidden;
            margin: 10px;
        }

        .image_container img {
            height: 100%;
            width: auto;
            object-fit: cover;
        }

        .image_container span {
            top: -6px;
            right: 8px;
            color: red;
            font-size: 28px;
            font-weight: normal;
            cursor: pointer;
        }

        .about-image {
            min-width: 200px;
            min-width: 100px;
            max-width: 400px;
            max-height: 280px;
        }

    </style>
@endpush

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Create About Content</h4>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('about.update',['id'=>$about->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            @error('title')
                            <h6 class="modal-header justify-content-start"
                                style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                {{ $message }}</h6>
                            @enderror
                            <input type="text" name="title" class="form-control" value="{{ $about->name }}" id="title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            @error('description')
                            <h6 class="modal-header justify-content-start"
                                style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                {{ $message }}</h6>
                            @enderror
                            <textarea class="form-control" id="description" value="{{ $about->description }}" name="description"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Upload About Images</label>
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
                                            <img src="{{ asset($about->image) }}" class="about-image" id="thumbnil">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Add About">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        // image upload js code
        function showImage(fileInput) {
            var files = fileInput.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    continue;
                }
                var img = document.getElementById('thumbnil');
                img.file = file;
                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
            }
        }
    </script>
@endpush
