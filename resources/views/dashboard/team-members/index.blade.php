@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Team Members') }}
                        <div class="float-right mr-2">
                            <a class="btn btn-primary" href="{{ route('team_members.create') }}">Add New Member</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(Session::has('success_message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('success_message') }}</div>
                        @endif
                        @if(Session::has('error_message'))
                            <div class="alert alert-warning" role="alert">{{ Session::get('error_message') }}</div>
                        @endif
                        <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                              <th>Image</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>E-mail</th>
                              <th>Position</th>
                              <th>Action</th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($members as $member)
                            <tr>
                              <td>
                                  <img src="{{$member->image ? asset($member->image) : asset('/assets/img/default.png')}}" width="100px" height="100px" alt="image">
                              </td>
                              <td>{{ $member->first_name }}</td>
                              <td>{{ $member->last_name }}</td>
                              <td>{{ $member->email }}</td>
                              <td>{{ $member->position }}</td>
                              <td>
                                <a href="{{ url('/team-members/show/' . $member->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ url('/team-members/edit/' . $member->id) }}" class="btn btn-warning">Edit</a>
                              </td>
                                <td>
                                    <form action="{{ route('team_members.delete', $member->id ) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                            {{ $members->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

