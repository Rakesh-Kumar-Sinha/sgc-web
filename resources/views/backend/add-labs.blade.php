@extends('backend.includes.layout')
@section('main-content')


    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <h2>Add New Lab</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('labs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Lab Title</label>
                        <input type="text" name="title" class="form-control" id="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="banner_image" class="form-label">Banner Image</label>
                        <input type="file" name="banner_image" class="form-control" id="banner_image" required>
                    </div>

                    <div class="mb-3">
                        <label for="images" class="form-label">Lab Images</label>
                        <input type="file" name="images[]" class="form-control" id="images" multiple>
                    </div>

                    <div class="mb-3">
                        <label for="short_description" class="form-label">Short Description</label>
                        <textarea  name="short_description" class="form-control" id="short_description" rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                       

                        <textarea name="description" class="form-control" id="description" rows="20"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Lab</button>
                </form>
            </div>
        </div>
    </div>
@endsection
