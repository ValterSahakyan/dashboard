@extends('dashboard.base')

@section('content')


    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Post</h4></div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered datatable">
                                <tbody>
                                    <tr>
                                        <th>
                                            ID - {{ $post->id }}
                                        </th>
                                        <td>
                                            <img src="{{$post->image ? asset($post->image) : asset('/assets/img/default.png')}}" width="100px" height="100px" alt="image">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Author
                                        </th>
                                        <td>
                                            {{ $post->user->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Title
                                        </th>
                                        <td>
                                            {{ $post->title }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Type
                                        </th>
                                        <td>
                                            {{ $post->type }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Description
                                        </th>
                                        <td>
                                            {!! $post->description !!}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="{{ route('posts.index') }}">Return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')


@endsection
