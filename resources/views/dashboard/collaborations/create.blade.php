@extends('dashboard.base')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Add New Collaboration</h4></div>
                        <div class="card-body">
                            @if(Session::has('error_message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('error_message') }}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal"  action="{{ route('collaborations.store') }}" method="POST" enctype="multipart/form-data">
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
                                                    <label class="col-md-3 col-form-label" for="url">Url</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control {{ $errors->has('url') ? ' is-invalid' : '' }}" id="url" value="{{ old('url') }}" type="text" name="url" placeholder="Url">
                                                        @if ($errors->has('url'))
                                                            <span class="invalid-feedback">{{ $errors->first('url') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row pt-3 pb-5">
                                                    <label class="col-md-3 col-form-label" for="image">Image</label>
                                                    <div class="col-md-9">
                                                        <input id="image" class="form-control file-input @error('image') is-invalid @enderror" type="file" name="image">
                                                        @if ($errors->has('image'))
                                                            <span class="invalid-feedback">{{ $errors->first('image') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row pt-3 pb-5">
                                                    <label class="col-md-3 col-form-label" for="second_image">Second Image</label>
                                                    <div class="col-md-9">
                                                        <input id="second_image" class="form-control file-input @error('second_image') is-invalid @enderror" type="file" name="second_image">
                                                        @if ($errors->has('second_image'))
                                                            <span class="invalid-feedback">{{ $errors->first('second_image') }}</span>
                                                        @endif
                                                    </div>
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
<script type="text/javascript">
    $("#image").fileinput({
        theme: 'fa',
        showUpload: false,
        uploadUrl: false,
        allowedFileExtensions: ['jpg', 'png', 'gif', 'jpeg'],
        overwriteInitial: false,
        maxFileSize: 20000,
        maxFilesNum: 1,
    });

    $("#second_image").fileinput({
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

