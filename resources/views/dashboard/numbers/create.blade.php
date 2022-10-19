@extends('dashboard.base')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Add New Number</h4></div>
                        <div class="card-body">
                            @if(Session::has('error_message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('error_message') }}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal"  action="{{ route('numbers.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="title">Title</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" value="{{ old('title') }}" type="text" name="title" placeholder="Title">
                                                        @if ($errors->has('title'))
                                                            <span class="invalid-feedback">{{ $errors->first('title') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="percent">Percent</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control {{ $errors->has('percent') ? ' is-invalid' : '' }}" value="{{ old('percent') }}" name="percent"/>
                                                        @if ($errors->has('percent'))
                                                            <span class="invalid-feedback">{{ $errors->first('percent') }}</span>
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
                                                                   >{{old('description')}}</textarea>
                                                        @if ($errors->has('description'))
                                                            <span class="invalid-feedback">{{ $errors->first('description') }}</span>
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.editor').summernote(  {
            height: 300,
            focus: true
        })
    });
</script>
@endsection

