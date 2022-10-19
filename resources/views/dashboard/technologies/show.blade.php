@extends('dashboard.base')

@section('content')


    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Member Information</h4></div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered datatable">
                                <tbody>
                                    <tr>
                                        <th>
                                            ID - {{ $technology->id }}
                                        </th>
                                        <td>
                                            <img src="{{$technology->image ? asset('storage/uploads/technologies/'.$technology->image) : asset('/assets/img/default.png')}}" width="100px" height="100px" alt="image">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <td>
                                            {{ $technology->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Description
                                        </th>
                                        <td>
                                            {!! $technology->description !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Discovery
                                        </th>
                                        <td>
                                            {{ $technology->discovery }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Text
                                        </th>
                                        <td>
                                            {!! $technology->text !!}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="{{ route('technologies.index') }}">Return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')


@endsection
