@extends('front.layouts.app')
@section('content')
    <section class="jobs">
        <div class="container flex">
           {{-- Job Filters component --}}
           <x-job-filter />
            <div class="right-content">
                <form action="" class="search-form">
                    <div class="inline">
                        <div class="form-group">
                            <div class="adv-input">
                                <i class="fa fa-briefcase"></i><input type="text" name="title" class="form-input"
                                    placeholder="Job Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="adv-input">
                                <i class="fa fa-list"></i>
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
                            <input type="submit" class="button" value="Search">
                        </div>
                    </div>
                </form>
                <div class="job-cards">
                    <div class="card">
                        <div class="above">
                            <img src="images/favicon.png" alt="" class="logo">
                            <div class="post-details">
                                <h5><a href="job-detail.html">Freshers / Trainees Requirement</a></h5>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                    <li><i class="fa fa-briefcase"></i>Exp: 1-2 Yrs</li>
                                    <li><i class="fa fa-dollar"></i>Salary: $20K-$50K / Per Month</li>
                                    <li><i class="fa fa-clock-o"></i>Posted On: 05 Augest, 2023</li>
                                    <li><i class="fa fa-clock-o"></i>Deadline: 30 Augest, 2023</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom">
                            <ul class="timeline">
                                <li>Full Time</li>
                                <li>Part Time</li>
                                <li>Remote</li>
                            </ul>
                            <a href="login.html" class="button">Apply</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="above">
                            <img src="images/favicon.png" alt="" class="logo">
                            <div class="post-details">
                                <h5><a href="job-detail.html">Freshers / Trainees Requirement</a></h5>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                    <li><i class="fa fa-briefcase"></i>Exp: 1-2 Yrs</li>
                                    <li><i class="fa fa-dollar"></i>Salary: $20K-$50K / Per Month</li>
                                    <li><i class="fa fa-clock-o"></i>Posted On: 05 Augest, 2023</li>
                                    <li><i class="fa fa-clock-o"></i>Deadline: 30 Augest, 2023</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom">
                            <ul class="timeline">
                                <li>Full Time</li>
                                <li>Remote</li>
                            </ul>
                            <a href="login.html" class="button">Apply</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="above">
                            <img src="images/favicon.png" alt="" class="logo">
                            <div class="post-details">
                                <h5><a href="job-detail.html">Freshers / Trainees Requirement</a></h5>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                    <li><i class="fa fa-briefcase"></i>Exp: 1-2 Yrs</li>
                                    <li><i class="fa fa-dollar"></i>Salary: $20K-$50K / Per Month</li>
                                    <li><i class="fa fa-clock-o"></i>Posted On: 05 Augest, 2023</li>
                                    <li><i class="fa fa-clock-o"></i>Deadline: 30 Augest, 2023</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom">
                            <ul class="timeline">
                                <li>Part Time</li>
                            </ul>
                            <a href="login.html" class="button">Apply</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="above">
                            <img src="images/favicon.png" alt="" class="logo">
                            <div class="post-details">
                                <h5><a href="job-detail.html">Freshers / Trainees Requirement</a></h5>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                    <li><i class="fa fa-briefcase"></i>Exp: 1-2 Yrs</li>
                                    <li><i class="fa fa-dollar"></i>Salary: $20K-$50K / Per Month</li>
                                    <li><i class="fa fa-clock-o"></i>Posted On: 05 Augest, 2023</li>
                                    <li><i class="fa fa-clock-o"></i>Deadline: 30 Augest, 2023</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom">
                            <ul class="timeline">
                                <li>Full Time</li>
                                <li>Part Time</li>
                                <li>Remote</li>
                            </ul>
                            <a href="login.html" class="button">Apply</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="above">
                            <img src="images/favicon.png" alt="" class="logo">
                            <div class="post-details">
                                <h5><a href="job-detail.html">Freshers / Trainees Requirement</a></h5>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                    <li><i class="fa fa-briefcase"></i>Exp: 1-2 Yrs</li>
                                    <li><i class="fa fa-dollar"></i>Salary: $20K-$50K / Per Month</li>
                                    <li><i class="fa fa-clock-o"></i>Posted On: 05 Augest, 2023</li>
                                    <li><i class="fa fa-clock-o"></i>Deadline: 30 Augest, 2023</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom">
                            <ul class="timeline">
                                <li>Full Time</li>
                                <li>Part Time</li>
                                <li>Remote</li>
                            </ul>
                            <a href="login.html" class="button">Apply</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="above">
                            <img src="images/favicon.png" alt="" class="logo">
                            <div class="post-details">
                                <h5><a href="job-detail.html">Freshers / Trainees Requirement</a></h5>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                    <li><i class="fa fa-briefcase"></i>Exp: 1-2 Yrs</li>
                                    <li><i class="fa fa-dollar"></i>Salary: $20K-$50K / Per Month</li>
                                    <li><i class="fa fa-clock-o"></i>Posted On: 05 Augest, 2023</li>
                                    <li><i class="fa fa-clock-o"></i>Deadline: 30 Augest, 2023</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom">
                            <ul class="timeline">
                                <li>Full Time</li>
                                <li>Part Time</li>
                                <li>Remote</li>
                            </ul>
                            <a href="login.html" class="button">Apply</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="above">
                            <img src="images/favicon.png" alt="" class="logo">
                            <div class="post-details">
                                <h5><a href="job-detail.html">Freshers / Trainees Requirement</a></h5>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                    <li><i class="fa fa-briefcase"></i>Exp: 1-2 Yrs</li>
                                    <li><i class="fa fa-dollar"></i>Salary: $20K-$50K / Per Month</li>
                                    <li><i class="fa fa-clock-o"></i>Posted On: 05 Augest, 2023</li>
                                    <li><i class="fa fa-clock-o"></i>Deadline: 30 Augest, 2023</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom">
                            <ul class="timeline">
                                <li>Full Time</li>
                                <li>Remote</li>
                            </ul>
                            <a href="login.html" class="button">Apply</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="above">
                            <img src="images/favicon.png" alt="" class="logo">
                            <div class="post-details">
                                <h5><a href="job-detail.html">Freshers / Trainees Requirement</a></h5>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                    <li><i class="fa fa-briefcase"></i>Exp: 1-2 Yrs</li>
                                    <li><i class="fa fa-dollar"></i>Salary: $20K-$50K / Per Month</li>
                                    <li><i class="fa fa-clock-o"></i>Posted On: 05 Augest, 2023</li>
                                    <li><i class="fa fa-clock-o"></i>Deadline: 30 Augest, 2023</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom">
                            <ul class="timeline">
                                <li>Full Time</li>
                                <li>Part Time</li>
                                <li>Remote</li>
                            </ul>
                            <a href="login.html" class="button">Apply</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="above">
                            <img src="images/favicon.png" alt="" class="logo">
                            <div class="post-details">
                                <h5><a href="job-detail.html">Freshers / Trainees Requirement</a></h5>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                    <li><i class="fa fa-briefcase"></i>Exp: 1-2 Yrs</li>
                                    <li><i class="fa fa-dollar"></i>Salary: $20K-$50K / Per Month</li>
                                    <li><i class="fa fa-clock-o"></i>Posted On: 05 Augest, 2023</li>
                                    <li><i class="fa fa-clock-o"></i>Deadline: 30 Augest, 2023</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom">
                            <ul class="timeline">
                                <li>Full Time</li>
                                <li>Part Time</li>
                                <li>Remote</li>
                            </ul>
                            <a href="login.html" class="button">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
