@extends('admin.layouts.admin')

@section('content')
@inject('carbon','Carbon\Carbon' )
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Jobs Details Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Title </th>
                                <th> Location </th>
                                <th> Status </th>
                                <th> By Company </th>
                                <th> Created Date</th>
                                <th> DeadLine</th>
                                <th> Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($jobs as $key =>$value )
                            <tr>
                                <td class="py-1">
                                    {{ $value->id }}
                                </td>
                                <td> {{ $value->title }} </td>
                                <td> {{ $value->location }} </td>
                                <td> {{ $value->status == 1?'Published (Active) ':'Deleted'  }} </td>
                                <td> {{ $value->company->company_name }}</td>
                                <td> {{ $carbon->parse($value->created_at)->format('d M , Y') }}</td>
                                <td> {{ $carbon->parse($value->deadline)->format('d M , Y') }}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('edit.job',['id'=>$value->id]) }}"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ route('delete.job',['id'=>$value->id]) }}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i></a>
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
                    {{ $jobs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
