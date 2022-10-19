@extends('dashboard.base')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Add New Technology</h4></div>
                        <div class="card-body">
                            @if(Session::has('error_message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('error_message') }}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal"  action="{{ route('technologies.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="name">Name</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}" type="text" name="name" placeholder="Name">
                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback">{{ $errors->first('name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="description">Description</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="9" placeholder="Description..">{{ old('description') }}</textarea>
                                                        @if ($errors->has('description'))
                                                            <span class="invalid-feedback">{{ $errors->first('description') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="discovery">Discovery</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control {{ $errors->has('discovery') ? ' is-invalid' : '' }}" id="discovery" value="{{ old('discovery') }}" type="text" name="discovery" placeholder="Discovery">
                                                        @if ($errors->has('discovery'))
                                                            <span class="invalid-feedback">{{ $errors->first('discovery') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="description">Text</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control {{ $errors->has('text') ? ' is-invalid' : '' }}" id="text" name="text" rows="9" placeholder="Text..">{{ old('text') }}</textarea>
                                                        @if ($errors->has('text'))
                                                            <span class="invalid-feedback">{{ $errors->first('text') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="image">Image</label>
                                                    <div class="col-md-9">
                                                        <input id="image" class="form-control file-input @error('image') is-invalid @enderror" type="file" name="image">
                                                        @if ($errors->has('image'))
                                                            <span class="invalid-feedback">{{ $errors->first('image') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center">
                                                <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                                                <button class="btn btn-sm btn-danger" type="reset"> Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            CKEDITOR.replace( 'description' )
        });
        $(document).ready(function () {
            CKEDITOR.replace( 'text' )
        });
        $("#image").fileinput({
            theme: 'fa',
            showUpload: false,
            uploadUrl: false,
            allowedFileExtensions: ['jpg', 'png', 'gif', 'jpeg'],
            overwriteInitial: false,
            maxFileSize: 20000,
            maxFilesNum: 1,
        });
    </script>
@endsection
