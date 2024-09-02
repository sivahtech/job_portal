 <header>
     <div class="container flex">
         <div class="col">
             @if(Auth::check() && (auth()->user()->role == 'employee' || auth()->user()->role == 'company'))
             <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo.png') }}" class="logo"></a>
             @endif
             @can('admin')
             <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('assets/images/logo.png') }}" class="logo"></a>
             @endcan
         </div>
         <div class="col">
             <ul class="menu">
                 <li class="active"><a href="{{ route('index') }}">Home</a></li>
                 @guest
                 <li><a href="{{ route('find.jobs') }}">Find a job</a></li>
                 @endguest

                 @can('employee')
                 <li><a href="{{ route('find.jobs') }}">Find a job</a></li>
                 @endcan

                 @can('company')

                 <li class=""><a href="{{ route('find.candidates') }}">Find Candidate</a></li>
                 <li><a href="{{ route('post.job') }}">Post a job</a></li>

                 @endcan

                 <li><a href="#">contact</a></li>
             </ul>
         </div>

         <div class="col three">
             @guest
             <a href="{{ route('login') }}" class="button-alt">Log In</a>
             <a href="{{ route('register') }}" class="button">Register</a>
             @endguest
             @auth
             <ul class="menu profile">
                 <li>
                     <a href="#"><img src="{{ asset('assets/admin/images/faces/face1.jpg') }}" class="profile-pic"></a>
                     <ul class="sub-menu profiles">
                         <li class="name">
                             <h5>John Doe</h5>
                         </li>
                         <li><a href="{{ route('settings') }}">Profile Setting</a></li>
                         @can('company')
                         <li><a href="{{ route('my.job') }}">My Jobs</a></li>
                         @endcan
                         @can('employee')
                         <li><a href="{{ route('applied.jobs') }}">Applied Jobs</a></li>
                         @endcan
                         <li> <a href="{{ route('logout') }}">Logout</a></li>
                     </ul>
                 </li>
             </ul>
             @endauth
         </div>
     </div>
 </header>
