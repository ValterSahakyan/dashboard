@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Career</h4></div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered datatable">
                                <tbody>
                                    <tr>
                                        <th>
                                            ID - {{ $career->id }}
                                        </th>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Title
                                        </th>
                                        <td>
                                            {{ $career->title }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Deadline
                                        </th>
                                        <td>
                                            {{ $career->deadline }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Location
                                        </th>
                                        <td>
                                            {{ $career->location }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Level
                                        </th>
                                        <td>
                                            {{ strtoupper($career->level)}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Term
                                        </th>
                                        <td>
                                            {{ strtoupper(str_replace('_', ' ', $career->term))}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Description
                                        </th>
                                        <td>
                                            {!! $career->description !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Responsibilities
                                        </th>
                                        <td>
                                            {!! $career->responsibilities !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Qualifications
                                        </th>
                                        <td>
                                            {!! $career->qualifications !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            How to Apply
                                        </th>
                                        <td>
                                            {!! $career->apply !!}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="{{ route('careers.index') }}">Return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')


@endsection
