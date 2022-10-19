@extends('dashboard.base')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Edit Member Info</h4></div>
                        <div class="card-body">
                            @if(Session::has('error_message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('error_message') }}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal"  action="{{ route('team_members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="first-name">First Name</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" id="first-name" value="{{ $member->first_name }}" type="text" name="first_name" placeholder="First Name">
                                                        @if ($errors->has('first_name'))
                                                            <span class="invalid-feedback">{{ $errors->first('first_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="last-name">Last Name</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}" id="last-name" value="{{ $member->last_name }}" type="text" name="last_name" placeholder="Last Name">
                                                        @if ($errors->has('last_name'))
                                                            <span class="invalid-feedback">{{ $errors->first('last_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="email">Email</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="email" value="{{ $member->email }}" name="email" placeholder="Enter Email" autocomplete="email">
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="position">Position</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control {{ $errors->has('position') ? ' is-invalid' : '' }}" id="position" value="{{ $member->position }}" type="text" name="position" placeholder="Position">
                                                        @if ($errors->has('position'))
                                                            <span class="invalid-feedback">{{ $errors->first('position') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row pt-3 pb-5">
                                                <label class="col-md-3 col-form-label" for="image">Image</label>
                                                    <div class="col-md-9">
                                                        <input id="image" type="file" name="image" class="file @error('image') is-invalid @enderror">
                                                        @if ($errors->has('image'))
                                                            <span class="invalid-feedback">{{ $errors->first('image') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="about">About</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control {{ $errors->has('about') ? ' is-invalid' : '' }}" id="about" name="about" rows="9" placeholder="About..">{{ $member->about }}</textarea>
                                                        @if ($errors->has('about'))
                                                            <span class="invalid-feedback">{{ $errors->first('about') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="about">Soc. Accounts</label>
                                                    <div class="col-md-3">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    iN
                                                                </span>
                                                            </div>
                                                            <input class="form-control {{ $errors->has('linkedin') ? ' is-invalid' : '' }}" id="linkedin" value="{{ $member->linkedin }}" type="text" name="linkedin" placeholder="Linkedin">
                                                            @if ($errors->has('linkedin'))
                                                                <span class="invalid-feedback">{{ $errors->first('linkedin') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                  TW
                                                                </span>
                                                            </div>
                                                            <input class="form-control {{ $errors->has('twitter') ? ' is-invalid' : '' }}" id="twitter" value="{{ $member->twitter }}" type="text" name="twitter" placeholder="Twitter">
                                                            @if ($errors->has('twitter'))
                                                                <span class="invalid-feedback">{{ $errors->first('twitter') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    FB
                                                                </span>
                                                            </div>
                                                            <input class="form-control {{ $errors->has('facebook') ? ' is-invalid' : '' }}" id="facebook" value="{{ $member->facebook }}" type="text" name="facebook" placeholder="Facebook">
                                                            @if ($errors->has('facebook'))
                                                                <span class="invalid-feedback">{{ $errors->first('facebook') }}</span>
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
    <script>
        let  image = '{{$member->image}}';
        let initialPreview = [];
        let initialPreviewConfig = [];
        if (image){
            initialPreview = ['/'+image];
            initialPreviewConfig = [
                {caption: image, key: 'image'}
            ];
        }
        $("#image").fileinput({
            initialPreview: initialPreview,
            initialPreviewAsData: true,
            initialPreviewConfig: initialPreviewConfig,
            theme: 'fa',
            showUpload: false,
            uploadUrl: false,
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg'],
            overwriteInitial: false,
            maxFileSize: 30000,
            maxFilesNum: 1,
        });

        $(".kv-file-remove").click(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            let id = '{{$member->id}}'
            let link = '{{$member->image}}'
            let type = 'image';
            let kv_file = $(this)
            $.ajax({
                type: "post",
                url: "/team-members/remove-image",
                data: {id:id, type:type, image:link},
                dataType:'json',
                success: function (data) {
                    if (data.alert === 'success'){
                        kv_file.parent().parent().parent().parent().remove()
                        toastr.success(data.message);
                    }else{
                        toastr.error(data.message);
                    }
                },
                error: function (data) {
                    toastr.error(data.message);
                }
            });
        });
    </script>
@endsection
