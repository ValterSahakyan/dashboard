@extends('dashboard.base')

@section('content')


    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Collaboration</h4></div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered datatable">
                                <tbody>
                                    <tr>
                                        <th>
                                            ID - {{ $collaboration->id }}
                                        </th>
                                        <td>
                                            <img src="{{$collaboration->image ? asset($collaboration->image) : asset('/assets/img/default.png')}}" width="100px" height="100px" alt="image">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <td>
                                            {{ $collaboration->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Url
                                        </th>
                                        <td>
                                            {{ $collaboration->url }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="{{ route('collaborations.index') }}">Return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')


@endsection
