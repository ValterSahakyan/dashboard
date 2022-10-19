@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Add New Career</h4></div>
                        <div class="card-body">
                            @if(Session::has('error_message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('error_message') }}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal"  action="{{ route('careers.store') }}" method="POST" enctype="multipart/form-data">
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
                                                    <label class="col-md-3 col-form-label" for="deadline">Deadline</label>
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control {{ $errors->has('deadline') ? ' is-invalid' : '' }}" name="deadline"/>
                                                        @if ($errors->has('deadline'))
                                                            <span class="invalid-feedback">{{ $errors->first('deadline') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="location">Location</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control {{ $errors->has('location') ? ' is-invalid' : '' }}" id="location" value="{{ old('location') }}" type="text" name="location" placeholder="Location">
                                                        @if ($errors->has('location'))
                                                            <span class="invalid-feedback">{{ $errors->first('location') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="level">Level</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control {{ $errors->has('level') ? ' is-invalid' : '' }}" name="level">
                                                            <option>Select Level</option>
                                                            <option value="intern" {{ old('location') == 'intern' ? 'selected' : '' }}>Intern</option>
                                                            <option value="junior" {{ old('location') == 'junior' ? 'selected' : '' }}>Junior</option>
                                                            <option value="middle" {{ old('location') == 'middle' ? 'selected' : '' }}>Middle</option>
                                                            <option value="senior" {{ old('location') == 'senior' ? 'selected' : '' }}>Senior</option>
                                                            <option value="lead"  {{ old('location') == 'lead' ? 'selected' : '' }}>Lead</option>
                                                        </select>
                                                        @if ($errors->has('level'))
                                                            <span class="invalid-feedback">{{ $errors->first('level') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="term">Term</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control {{ $errors->has('term') ? ' is-invalid' : '' }}" name="term">
                                                            <option>Select Term</option>
                                                            <option value="full_time" {{ old('term') == 'full_time' ? 'selected' : '' }}>Full Time</option>
                                                            <option value="part_time" {{ old('term') == 'part_time' ? 'selected' : '' }}>Part Time</option>
                                                        </select>
                                                        @if ($errors->has('term'))
                                                            <span class="invalid-feedback">{{ $errors->first('term') }}</span>
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

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="responsibilities">Responsibilities</label>
                                                    <div class="col-md-9">
                                                         <textarea id="responsibilities" class="form-control editor @error('responsibilities') is-invalid @enderror"
                                                                   name="responsibilities"
                                                                   autocomplete="responsibilities"
                                                                   placeholder="responsibilities"
                                                                   >{{old('responsibilities')}}</textarea>
                                                        @if ($errors->has('responsibilities'))
                                                            <span class="invalid-feedback">{{ $errors->first('responsibilities') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="qualifications">Qualifications</label>
                                                    <div class="col-md-9">
                                                         <textarea id="qualifications" class="form-control editor @error('qualifications') is-invalid @enderror"
                                                                   name="qualifications"
                                                                   autocomplete="qualifications"
                                                                   placeholder="qualifications"
                                                                   >{{old('qualifications')}}</textarea>
                                                        @if ($errors->has('qualifications'))
                                                            <span class="invalid-feedback">{{ $errors->first('qualifications') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="apply">How to Apply</label>
                                                    <div class="col-md-9">
                                                         <textarea id="apply" class="form-control editor @error('apply') is-invalid @enderror"
                                                                   name="apply"
                                                                   autocomplete="apply"
                                                                   placeholder="apply"
                                                                   >{{old('apply')}}</textarea>
                                                        @if ($errors->has('apply'))
                                                            <span class="invalid-feedback">{{ $errors->first('apply') }}</span>
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

<script type="text/javascript">
    $(document).ready(function () {
        CKEDITOR.replace( 'description' )
        CKEDITOR.replace( 'responsibilities' )
        CKEDITOR.replace( 'qualifications' )
        CKEDITOR.replace( 'apply' )
    });
</script>
@endsection

