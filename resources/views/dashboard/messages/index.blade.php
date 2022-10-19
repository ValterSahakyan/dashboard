@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Messages') }}
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
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Message</th>
                              <th>Status</th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($messages as $message)
                            <tr>
                              <td>{{ $message->first_name }}</td>
                              <td>{{ $message->last_name }}</td>
                              <td>{{ $message->email }}</td>
                              <td>{{ $message->phone }}</td>
                              <td>{{ $message->message }}</td>
                                <td>
                                    <span class="badge badge-pill {{$message->status == 0 ? 'badge-primary' : 'badge-success'}}">
                                        {{$message->status == 0 ? 'Unread' : 'Readed'}}
                                    </span>
                                 </td>
                              <td>
                                <a href="{{ url('/messages/show/' . $message->id) }}" class="btn btn-primary">View</a>
                              </td>
                                <td>
                                    <form action="{{ route('messages.delete', $message->id ) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $messages->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

