@extends('front.layouts.app')

@section('content')
<section class="dash-banner">
    <div class="container">
        @if($resume->cover_letter)
        <h2>Cover Letter</h2>
        @else
        <h2>Resume</h2>
        @endif
    </div>
</section>

<section class="jobs-details cover_letter">
    <div class="container">
        <div class="col right">
            @if($resume->cover_letter)
            <h2>Cover Letter</h2>
            <p>{{ $resume->cover_letter }}</p>
            @endif
        </div>
        <div class="resume_sec">
            
            <iframe src="{{ env('IMAGE_PATH').'/'.$resume->file }}" style="width: 100%;height: 100%;"></iframe>
            <a href="{{ route('download.resume',['file'=>$resume->file]) }}" class="button">Download</a>
        </div>
    </div>
</section>
@endsection
