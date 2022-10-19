@extends('dashboard.base')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Edit Post</h4></div>
                        <div class="card-body">
                            @if(Session::has('error_message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('error_message') }}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal"  action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="name">Title</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" value="{{ $post->title }}" type="text" name="title" placeholder="Title">
                                                        @if ($errors->has('title'))
                                                            <span class="invalid-feedback">{{ $errors->first('title') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="description">Description</label>
                                                    <div class="col-md-9">
                                                         <textarea id="description" class="form-control editor @error('description') is-invalid @enderror"
                                                                   name="description"
                                                                   autocomplete="description"
                                                                   placeholder="Description"
                                                         >{{$post->description}}</textarea>
                                                        @if ($errors->has('description'))
                                                            <span class="invalid-feedback">{{ $errors->first('description') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="type">Type</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }}" name="type">
                                                            <option>Select Type</option>
                                                            <option value="news" {{ $post->type == 'news' ? 'selected' : '' }}>News</option>
                                                            <option value="event" {{ $post->type == 'event' ? 'selected' : '' }}>Event</option>
                                                        </select>
                                                        @if ($errors->has('type'))
                                                            <span class="invalid-feedback">{{ $errors->first('type') }}</span>
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
        $(document).ready(function () {
            CKEDITOR.replace( 'description' )
        });

        let  image = '{{$post->image}}';
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
            maxFileSize: 2000,
            maxFilesNum: 1,
        });

        $(".kv-file-remove").click(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            let id = '{{$post->id}}'
            let link = '{{$post->image}}'
            let type = 'image';
            let kv_file = $(this)
            $.ajax({
                type: "post",
                url: "/posts/remove-image",
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

