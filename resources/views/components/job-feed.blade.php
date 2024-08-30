@inject('carbon', 'Carbon\Carbon')
@forelse ($jobs as $job )
<div class="card">
    <div class="above">
        <img src="{{ asset('assets/images/favicon.png') }}" alt="" class="logo">
        <div class="post-details">
            <h5><a href="{{ route('job.details',['id'=>$job->id]) }}">{{ $job->title }}</a></h5>
            <ul>
                <li><i class="fa fa-map-marker"></i>{{ $job->location }}</li>
                <li><i class="fa fa-briefcase"></i>Exp: {{ $job->experience }}</li>
                <li><i class="fa fa-dollar"></i>Salary: @if($job->salary_type == 'fixed')
                    ${{$job->salary }}
                    @endif
                    @if($job->salary_type == 'range')
                    ${{$job->salary }} - ${{ $job->max_salary }}
                    @endif
                    / Per Month</li>
                <li><i class="fa fa-clock-o"></i>Posted On: {{ $carbon->parse($job->created_at)->format('d M , Y') }}</li>
                <li><i class="fa fa-clock-o"></i>Deadline: {{ $carbon->parse($job->deadline)->format('d M , Y') }}</li>
            </ul>
        </div>
    </div>
    <div class="bottom">
        <ul class="timeline">
            @foreach (json_decode($job->job_type,true) as $type )
            <li>{{ $type }}</li>
            @endforeach

        </ul>
        @if($viewType == 2)
        <div class="company_job_btn">
            @can('company')
            <a href="{{ route('myjob.details',['id'=>Crypt::encrypt($job->id)]) }}" class="button">View Job</a>
            @endcan
            @can('employee')
            <a href="{{ route('job.details',['id'=>Crypt::encrypt($job->id)]) }}" class="button">Job Details</a>
            @endcan
        </div>
        @endif

        @if($viewType == 1)
        <a href="{{ route('job.details',['id'=>Crypt::encrypt($job->id)]) }}" class="button">Apply</a>
        @endif
    </div>
</div>

@empty

@endforelse
