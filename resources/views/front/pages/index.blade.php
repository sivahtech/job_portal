@extends('front.layouts.app')

@section('content')

<div class="banner">
    <div class="container">
        <h1>Looking for a <span class="alt-text">Job</span></h1>
        <p>10 lakh+ jobs for you to explore</p>
        <form action="" class="search-form">
            <div class="inline">
                <div class="form-group">
                    <div class="adv-input">
                        <i class="fa fa-briefcase"></i><input type="text" name="title" class="form-input" placeholder="Job Title or Keywords">
                    </div>
                </div>
                <div class="form-group">
                    <div class="adv-input">
                        <i class="fa fa-map-marker"></i>
                        <select name="location" id="location" class="form-input">
                            <option value="">Location</option>
                            <option value="">Location</option>
                            <option value="">Location</option>
                            <option value="">Location</option>
                            <option value="">Location</option>
                            <option value="">Location</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-submit">
                    <!-- <input type="submit" class="button" value="Search"> -->
                     <a class="button" href="jobs.html">Search</a>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- latest jobs --}}
<x-job-feed />

{{-- brands --}}
<x-brands-bar />

{{-- jobs category --}}
<x-job-category />


@endsection
