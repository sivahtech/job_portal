@extends('admin.layouts.admin')

@section('content')
    @inject('carbon', 'Carbon\Carbon')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <a href="{{ route('admin.create.employee') }}" class="btn btn-primary">Add New employee</a>

                <div class="card-body">
                    <h4 class="card-title">Employees Details Table</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Profile </th>
                                    <th> Status </th>
                                    <th> Profile Completed</th>
                                    <th> Created Date</th>
                                    <th> Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $key =>$value)
                                    <tr>
                                        <td class="py-1">
                                            {{ $value->id }}
                                        </td>
                                        <td> {{ $value->user_name }} </td>
                                        <td> {{ $value->email }} </td>
                                        <td> {{ $value->profile }}</td>
                                        <td> {{ Str::ucfirst($value->status) }} </td>
                                        <td> {{ $value->is_porfile_completed ? 'Yes' : 'No' }}</td>
                                        <td> {{ $carbon->parse($value->created_at)->format('d M , Y') }}</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('edit.employee', ['id' => $value->id]) }}"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="{{ route('delete.employee', ['id' => $value->id]) }}"
                                                    onclick=" return confirm('Are you sure?')"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <p>No data found</p>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                        <div class="mt-3">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
