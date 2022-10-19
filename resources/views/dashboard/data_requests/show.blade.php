@extends('dashboard.base')

@section('content')


    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Message</h4></div>
                        <div class="card-body">
                            @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
                            @endif
                            @if(Session::has('error'))
                                <div class="alert alert-warning" role="alert">{{ Session::get('error') }}</div>
                            @endif
                            <table class="table table-striped table-bordered datatable">
                                <tbody>
                                    <tr>
                                        <th>
                                            First Name
                                        </th>
                                        <td>
                                            {{ $data_request->first_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Last Name
                                        </th>
                                        <td>
                                            {{ $data_request->last_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Email
                                        </th>
                                        <td>
                                            {{ $data_request->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Phone
                                        </th>
                                        <td>
                                            {{ $data_request->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Company Name
                                        </th>
                                        <td>
                                            {{ $data_request->company_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Job Title
                                        </th>
                                        <td>
                                            {{ $data_request->job_title }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Message
                                        </th>
                                        <td>
                                            {{$data_request->message}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Date
                                        </th>
                                        <td>
                                            {{$data_request->created_at}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a class="btn btn-primary" href="{{ route('data_request.index') }}">Return</a>
                                    <a class="btn btn-info" href="{{ route('data_request.send', $data_request->id) }}">Send Data</a>
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


@endsection
