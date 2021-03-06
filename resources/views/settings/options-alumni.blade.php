@extends('user')

@section('title', 'Alumni')



@section('content')

<div class="row">
    <div class="card">

        <div class="header">
	        <h4 class="title">Alumni list
	            <a href="{{ route('admin.alumni.create') }}" class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i> NEW Alumni</a>
	            <div ><b>Total Alumnis:</b><span class="badge label-success">{{$alumnis->total()}}</span></div>
            </h4>
            <hr>
        </div>
        
        <div class="content" >
        	<h5>
        		<table class="table bootstrap-admin-table-with-actions">
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>Name</th>
	                            <th>Designation</th>
	                            <th>Company</th>
	                            <th>Image</th>
	                            <th>Actions</th>
	                        </tr>
	                    </thead>
                    <tbody>
                    	@foreach ($alumnis as $alumni)
	                        <tr>
	                            <td>{{ $alumni->id }}</td>
	                            <td>{{ $alumni->name }}</td>
	                            <td>{{ $alumni->designation }}</td>
	                            <td>{{ $alumni->company }}</td>
	                            <td>{{ $alumni->image }}</td>
	                            <td class="actions">
	                                <a href="{{ route('admin.alumni.show', $alumni->id)}}">
	                                    <button class="btn btn-md btn-primary">
	                                        <h6><i class="ti-eye" aria-hidden="true"></i>
	                                        View</h6>
	                                    </button>
	                                </a>
	                                <a href="{{ route('admin.alumni.edit', $alumni->id) }}">
	                                    <button class="btn btn-md btn-warning">
	                                        <h6><i class="ti-pencil"></i>
	                                        Edit</h6>
	                                    </button>
	                                </a>
	                            </td>
	                        </tr>
	                    @endforeach
                    </tbody>

                </table>

                <div class="text-center">
                	{!! $alumnis->render() !!}
                </div>
            </h5>

        </div>
    </div>    

</div>



@endsection