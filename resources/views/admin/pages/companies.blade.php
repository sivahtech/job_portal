@extends('admin.layouts.admin')

@section('content')
@inject('carbon','Carbon\Carbon' )
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Company Details Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Company name </th>
                                <th> Email </th>
                                <th> Status </th>
                                <th> Job Added</th>
                                <th> Company Type </th>
                                <th> Created Date</th>
                                <th> Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key =>$value )
                            <tr>
                                <td class="py-1">
                                    {{ $value->id }}
                                </td>
                                <td> {{ $value->company_name }} </td>
                                <td> {{ $value->email }} </td>
                                <td> {{ Str::ucfirst($value->status) }} </td>
                                <td>  {{ $value->job_count }}</td>
                                <td> {{ $value->company_type }}</td>
                                <td> {{ $carbon->parse($value->created_at)->format('d M , Y') }}</td>
                                <td>
                                    <div class="row">
                                        <a href=""><i class="fa fa-pencil"></i></a>
                                        <a href=""><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <p>No data found</p>
                            </tr>

                            @endforelse

                        </tbody>
                        {{ $data->links() }}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
