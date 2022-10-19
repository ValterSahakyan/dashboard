@extends('dashboard.base')

@section('content')


    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>The Number</h4></div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered datatable">
                                <tbody>
                                    <tr>
                                        <th>
                                            ID - {{ $number->id }}
                                        </th>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Title
                                        </th>
                                        <td>
                                            {{ $number->title }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Percent
                                        </th>
                                        <td>
                                            {{ $number->percent }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Description
                                        </th>
                                        <td>
                                            {!! $number->description !!}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="{{ route('numbers.index') }}">Return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')


@endsection
