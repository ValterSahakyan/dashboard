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
                                            ID - {{ $member->id }}
                                        </th>
                                        <td>
                                            <img src="{{$member->image ? asset($member->image) : asset('/assets/img/default.png')}}" width="100px" height="100px" alt="image">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            First Name
                                        </th>
                                        <td>
                                            {{ $member->first_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Last Name
                                        </th>
                                        <td>
                                            {{ $member->last_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            E-mail
                                        </th>
                                        <td>
                                            {{ $member->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Position
                                        </th>
                                        <td>
                                            {{ $member->position }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            About
                                        </th>
                                        <td>
                                            {{ $member->about }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Linkedin
                                        </th>
                                        <td>
                                            {{ $member->linkedin }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Twitter
                                        </th>
                                        <td>
                                            {{ $member->twitter }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Facebook
                                        </th>
                                        <td>
                                            {{ $member->facebook }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="{{ route('team_members.index') }}">Return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')


@endsection
