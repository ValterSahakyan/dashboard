@extends('dashboard.base')

@section('content')


    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>Project</h4></div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered datatable">
                                <tbody>
                                    <tr>
                                        <th>
                                            ID - {{ $project->id }}
                                        </th>
                                        <td>
                                            <img src="{{$project->image ? asset($project->image) : asset('/assets/img/default.png')}}" width="100px" height="100px" alt="image">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Title
                                        </th>
                                        <td>
                                            {{ $project->title }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Sub Title
                                        </th>
                                        <td>
                                            {{ $project->sub_title }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            Description
                                        </th>
                                        <td>
                                            {!! $project->description !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            About
                                        </th>
                                        <td>
                                            <strong>Disease Contagion : </strong>{{ $project->disease_contagion }}
                                        </td>
                                        <td>
                                            <strong>Disease Mortality : </strong>{{ $project->disease_mortality }}
                                        </td>
                                        <td>
                                            <strong>Existing Drugs : </strong> {{ $project->existing_drugs }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Collaboration With
                                        </th>
                                        <td>
                                            {{ $project->collaboration->name }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="{{ route('projects.index') }}">Return</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')


@endsection
