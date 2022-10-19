@extends('dashboard.base')

@section('content')


    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Message</h4></div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered datatable">
                                <tbody>
                                    <tr>
                                        <th>
                                            First Name
                                        </th>
                                        <td>
                                            {{ $message->first_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Last Name
                                        </th>
                                        <td>
                                            {{ $message->last_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Email
                                        </th>
                                        <td>
                                            {{ $message->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Phone
                                        </th>
                                        <td>
                                            {{ $message->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Message
                                        </th>
                                        <td>
                                            {{$message->message}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Date
                                        </th>
                                        <td>
                                            {{$message->created_at}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="{{ route('messages.index') }}">Return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')


@endsection
