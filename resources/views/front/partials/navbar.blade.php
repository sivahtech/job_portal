 <header>
     <div class="container flex">
         <div class="col">
             <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo.png') }}" class="logo"></a>
         </div>
         <div class="col">
             <ul class="menu">
                 <li class="active"><a href="{{ route('index') }}">Home</a></li>
                 @guest
                 <li><a href="{{ route('find.jobs') }}">Find a job</a></li>
                 @endguest

                 @can('employee')
                 <li>
                     <a href="#">Jobs</a>
                     <ul class="sub-menu">
                         <li><a href="{{ route('applied.jobs') }}">Applied Jobs</a></li>
                         <li><a href="{{ route('find.jobs') }}">Find a job</a></li>
                     </ul>
                 </li>
                 @endcan

                 @can('company')

                 <li class=""><a href="{{ route('find.candidates') }}">Find Candidate</a></li>
                 <li>
                     <a href="#">Jobs</a>
                     <ul class="sub-menu">
                         <li><a href="{{ route('my.job') }}">My Jobs</a></li>
                         <li><a href="{{ route('post.job') }}">Post a job</a></li>
                     </ul>
                 </li>
                 @endcan

                 <li><a href="#">contact</a></li>
                 @auth
                    <li><a href="{{ route('settings') }}">settings</a></li>
                 @endauth
             </ul>
         </div>

         <div class="col">
             @guest
             <a href="{{ route('login') }}" class="button-alt">Log In</a>
             <a href="{{ route('register') }}" class="button">Register</a>
             @endguest
             @auth
             <a href="{{ route('logout') }}" class="button">Logout</a>
             @endauth
         </div>
     </div>
 </header>
