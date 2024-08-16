@extends('front.layouts.app')

@section('content')
<section class="jobs">
    <div class="container flex">
        <aside>
            <h5>All Filters</h5>
            <div class="filter">
                <h5>Industry</h5>
                <ul>
                    <li class="checkbox"><label><input type="checkbox" name="" class="form-input" id="">IT Services & Consultant</label></li>
                    <li class="checkbox"><label><input type="checkbox" name="" class="form-input" id="">Recruitment / Staffing</label></li>
                    <li class="checkbox"><label><input type="checkbox" name="" class="form-input" id="">Software Product</label></li>
                    <li class="checkbox"><label><input type="checkbox" name="" class="form-input" id="">Internet</label></li>
                </ul>
            </div>
            <div class="filter">
                <h5>Work mode</h5>
                <ul>
                    <li class="checkbox"><label><input type="checkbox" name="" class="form-input" id="">Work from office</label></li>
                    <li class="checkbox"><label><input type="checkbox" name="" class="form-input" id="">Remote</label></li>
                    <li class="checkbox"><label><input type="checkbox" name="" class="form-input" id="">Hybrid</label></li>
                </ul>
            </div>
            <div class="filter">
                <h5>Salary</h5>
                <input type="range" name="" class="form-input" id="">
            </div>
            <div class="filter">
                <h5>Role</h5>
                <ul>
                    <li class="checkbox"><label><input type="checkbox" name="" class="form-input" id="">Software Development</label></li>
                    <li class="checkbox"><label><input type="checkbox" name="" class="form-input" id="">Content Management</label></li>
                    <li class="checkbox"><label><input type="checkbox" name="" class="form-input" id="">Quality Assurance and Testing</label></li>
                    <li class="checkbox"><label><input type="checkbox" name="" class="form-input" id="">Graphic Designing</label></li>
                    <li class="checkbox"><label><input type="checkbox" name="" class="form-input" id="">Other Design</label></li>
                </ul>
            </div>
        </aside>
        <div class="right-content">
            <form action="" class="search-form">
                <div class="inline">
                    <div class="form-group">
                        <div class="adv-input">
                            <i class="fa fa-briefcase"></i><input type="text" name="title" class="form-input" placeholder="Job Title">
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
            <div class="candid-cards">
                <div class="card">
                    <div class="above">
                        <img src="images/candidate.png" alt="" class="logo">
                        <div class="post-details">
                            <h5 class="position">Front-end Developer</h5>
                            <p class="name">John Doe</p>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                <li><i class="fa fa-briefcase"></i>1-2 Yrs</li>
                                <li><i class="fa fa-phone"></i>(+00) 000 000 0000</li>
                                <li><i class="fa fa-envelope"></i>example@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bottom">
                        <ul class="skills">
                            <li>Design</li>
                            <li>UI</li>
                            <li>Figma</li>
                        </ul>
                        <a href="login.html" class="button">Resume</a>
                    </div>
                </div>
                <div class="card">
                    <div class="above">
                        <img src="images/candidate.png" alt="" class="logo">
                        <div class="post-details">
                            <h5 class="position">Front-end Developer</h5>
                            <p class="name">John Doe</p>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                <li><i class="fa fa-briefcase"></i>1-2 Yrs</li>
                                <li><i class="fa fa-phone"></i>(+00) 000 000 0000</li>
                                <li><i class="fa fa-envelope"></i>example@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bottom">
                        <ul class="skills">
                            <li>Design</li>
                            <li>UI</li>
                            <li>Figma</li>
                        </ul>
                        <a href="login.html" class="button">Resume</a>
                    </div>
                </div>
                <div class="card">
                    <div class="above">
                        <img src="images/candidate.png" alt="" class="logo">
                        <div class="post-details">
                            <h5 class="position">Front-end Developer</h5>
                            <p class="name">John Doe</p>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                <li><i class="fa fa-briefcase"></i>1-2 Yrs</li>
                                <li><i class="fa fa-phone"></i>(+00) 000 000 0000</li>
                                <li><i class="fa fa-envelope"></i>example@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bottom">
                        <ul class="skills">
                            <li>Design</li>
                            <li>UI</li>
                            <li>Figma</li>
                        </ul>
                        <a href="login.html" class="button">Resume</a>
                    </div>
                </div>
                <div class="card">
                    <div class="above">
                        <img src="images/candidate.png" alt="" class="logo">
                        <div class="post-details">
                            <h5 class="position">Front-end Developer</h5>
                            <p class="name">John Doe</p>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                <li><i class="fa fa-briefcase"></i>1-2 Yrs</li>
                                <li><i class="fa fa-phone"></i>(+00) 000 000 0000</li>
                                <li><i class="fa fa-envelope"></i>example@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bottom">
                        <ul class="skills">
                            <li>Design</li>
                            <li>UI</li>
                            <li>Figma</li>
                        </ul>
                        <a href="login.html" class="button">Resume</a>
                    </div>
                </div>
                <div class="card">
                    <div class="above">
                        <img src="images/candidate.png" alt="" class="logo">
                        <div class="post-details">
                            <h5 class="position">Front-end Developer</h5>
                            <p class="name">John Doe</p>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                <li><i class="fa fa-briefcase"></i>1-2 Yrs</li>
                                <li><i class="fa fa-phone"></i>(+00) 000 000 0000</li>
                                <li><i class="fa fa-envelope"></i>example@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bottom">
                        <ul class="skills">
                            <li>Design</li>
                            <li>UI</li>
                            <li>Figma</li>
                        </ul>
                        <a href="login.html" class="button">Resume</a>
                    </div>
                </div>
                <div class="card">
                    <div class="above">
                        <img src="images/candidate.png" alt="" class="logo">
                        <div class="post-details">
                            <h5 class="position">Front-end Developer</h5>
                            <p class="name">John Doe</p>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Noida, Uttar Pradesh</li>
                                <li><i class="fa fa-briefcase"></i>1-2 Yrs</li>
                                <li><i class="fa fa-phone"></i>(+00) 000 000 0000</li>
                                <li><i class="fa fa-envelope"></i>example@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bottom">
                        <ul class="skills">
                            <li>Design</li>
                            <li>UI</li>
                            <li>Figma</li>
                        </ul>
                        <a href="login.html" class="button">Resume</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
