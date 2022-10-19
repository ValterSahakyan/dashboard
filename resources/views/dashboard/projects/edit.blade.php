@extends('dashboard.base')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Project</h4>
                        </div>
                        <div class="card-body">
                            @if(Session::has('error_message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('error_message') }}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal"  action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="title">Title</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" value="{{ old('title') ?? $project->title }}" type="text" name="title" placeholder="Title">
                                                        @if ($errors->has('title'))
                                                            <span class="invalid-feedback">{{ $errors->first('title') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="sub_title">Sub Title</label>
                                                    <div class="col-md-9">
                                                         <textarea id="sub_title" class="form-control editor @error('sub_title') is-invalid @enderror"
                                                                   name="sub_title"
                                                                   autocomplete="sub_title"
                                                                   placeholder="Sub Title"
                                                         >{{ old('sub_title') ?? $project->sub_title }}</textarea>
                                                        @if ($errors->has('sub_title'))
                                                            <span class="invalid-feedback">{{ $errors->first('sub_title') }}</span>
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
                                                         >{{ old('description') ?? $project->description}}</textarea>
                                                        @if ($errors->has('description'))
                                                            <span class="invalid-feedback">{{ $errors->first('description') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="about">About</label>
                                                    <div class="col-md-3">
                                                        <textarea id="disease_contagion" class="form-control @error('disease_contagion') is-invalid @enderror"
                                                                  name="disease_contagion"
                                                                  autocomplete="disease_contagion"
                                                                  placeholder="Disease Contagion"
                                                        >{{old('disease_contagion') ?? $project->disease_contagion}}</textarea>
                                                        @if ($errors->has('disease_contagion'))
                                                            <span class="invalid-feedback">{{ $errors->first('disease_contagion') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-3">
                                                        <textarea id="disease_mortality" class="form-control @error('disease_mortality') is-invalid @enderror"
                                                                  name="disease_mortality"
                                                                  autocomplete="disease_mortality"
                                                                  placeholder="Disease Mortality"
                                                        >{{old('disease_mortality') ?? $project->disease_mortality}}</textarea>
                                                        @if ($errors->has('disease_mortality'))
                                                            <span class="invalid-feedback">{{ $errors->first('disease_mortality') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-3">
                                                        <textarea id="existing_drugs" class="form-control @error('existing_drugs') is-invalid @enderror"
                                                                  name="existing_drugs"
                                                                  autocomplete="existing_drugs"
                                                                  placeholder="Existing Drugs"
                                                        >{{old('existing_drugs') ?? $project->existing_drugs}}</textarea>
                                                        @if ($errors->has('existing_drugs'))
                                                            <span class="invalid-feedback">{{ $errors->first('existing_drugs') }}</span>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="collaboration_id">Collaboration With</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="collaboration_id" id="collaboration_id">
                                                            <option value="0">Select</option>
                                                        @foreach($collaborations as $collaboration)
                                                                @if($collaboration->id == old('collaboration') || $collaboration->id == $project->collaboration_id)
                                                                    <option value="{{$collaboration->id}}" selected>{{$collaboration->name}}</option>
                                                                @else
                                                                    <option value="{{$collaboration->id}}">{{$collaboration->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row pt-3 pb-5">
                                                    <label class="col-md-3 col-form-label" for="image">Image</label>
                                                    <div class="col-md-9">
                                                        <input id="image" data-id="file" class="form-control file-input @error('image') is-invalid @enderror" type="file" name="image">
                                                        @if ($errors->has('image'))
                                                            <span class="invalid-feedback">{{ $errors->first('image') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="name">Request Form Title</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control {{ $errors->has('request_title') ? ' is-invalid' : '' }}" id="request_title"
                                                               value="{{ old('request_title') ?? $project->request_title }}" type="text" name="request_title" placeholder="Request Title">
                                                        @if ($errors->has('request_title'))
                                                            <span class="invalid-feedback">{{ $errors->first('request_title') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="request_sub_title">Request Sub Title</label>
                                                    <div class="col-md-9">
                                                         <textarea id="request_sub_title" class="form-control @error('request_sub_title') is-invalid @enderror"
                                                                   name="request_sub_title"
                                                                   autocomplete="request_sub_title"
                                                                   placeholder="Sub Title"
                                                         >{{old('request_sub_title') ?? $project->request_sub_title}}</textarea>
                                                        @if ($errors->has('request_sub_title'))
                                                            <span class="invalid-feedback">{{ $errors->first('request_sub_title') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row pt-3 pb-5">
                                                    <label class="col-md-3 col-form-label" for="file">Data File</label>
                                                    <div class="col-md-9">
                                                        <input id="file" data-id="file" class="form-control file-input" type="file" name="file">
                                                    </div>
                                                </div>
                                                <div class="form-group row pt-3 pb-5">
                                                    <div class="col-md-12 text-center">
                                                        <input id="data_file" class="form-control file-input @error('data_file') is-invalid @enderror" type="hidden" name="data_file">
                                                        @if ($errors->has('data_file'))
                                                            <span class="invalid-feedback">{{ $errors->first('data_file') }}</span>
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

        let  image = '{{$project->image}}';
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

        let  data_file = '{{$project->data_file}}';
        let initialPreviewDataFile = [];
        let initialPreviewConfigDataFile = [];
        if (data_file){
            initialPreviewDataFile = ['/'+data_file];
            initialPreviewConfigDataFile = [
                {caption: data_file, key: 'data_file', type: 'text', url: '/'+data_file}
            ];
        }

        $("#file").fileinput({
            initialPreview: initialPreviewDataFile,
            initialPreviewAsData: true,
            initialPreviewConfig: initialPreviewConfigDataFile,
            theme: 'fa',
            showUpload: false,
            uploadUrl: false,
            allowedFileExtensions: ['txt', 'csv', 'doc', 'docx', 'log', 'sdf', 'sd'],
            overwriteInitial: false,
            maxFileSize: 20000,
            maxFilesNum: 1,
        });

        $(".kv-file-remove").click(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });

            let id = '{{$project->id}}';
            let link = '{{$project->image}}';
            let kv_file = $(this)
            let type = $(this).data("key");
            $.ajax({
                type: "post",
                url: "/projects/remove-file",
                data: {id:id, type:type, image:link},
                dataType:'json',
                success: function (data) {
                    if (data.alert === 'success'){
                        toastr.success(data.message);
                        location.reload();
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
