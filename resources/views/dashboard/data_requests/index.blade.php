@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Data Requests') }}
                    </div>
                    <div class="card-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
                        @endif
                        @if(Session::has('error'))
                            <div class="alert alert-warning" role="alert">{{ Session::get('error') }}</div>
                        @endif
                        <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Company Name</th>
                              <th>Job Title</th>
                              <th>Message</th>
                              <th>Status</th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data_requests as $data_request)
                            <tr>
                              <td>{{ $data_request->first_name }} {{ $data_request->last_name }}</td>
                                <td>{{ $data_request->email }}</td>
                                <td>{{ $data_request->phone }}</td>
                                <td>{{ $data_request->company_name }}</td>
                                <td>{{ $data_request->job_title }}</td>
                                <td width="300px">{{ $data_request->message }}</td>
                                <td>
                                    <span class="badge badge-pill {{$data_request->status == 0 ? 'badge-primary' : 'badge-success'}}">
                                        {{$data_request->status == 0 ? 'Unread' : 'Readed'}}
                                    </span>
                                 </td>
                              <td>
                                <a href="{{ url('/data-requests/show/' . $data_request->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ url('/data-requests/send/' . $data_request->id) }}" class="btn btn-info">Send Data</a>
                              </td>
                                <td>
                                    <form action="{{ route('data_request.delete', $data_request->id ) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $data_requests->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

