@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>User</h4></div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered datatable">
                                <tbody>
                                <tr>
                                    <th>
                                        ID - {{ $user->id }}
                                    </th>
                                    <td>

                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        E-mail
                                    </th>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Role
                                    </th>
                                    <td>
                                        {{ $user->menuroles }}
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="{{ route('users.index') }}">Return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')

@endsection
