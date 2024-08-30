 <aside>
     <h5>All Filters</h5>
     <div class="filter">
         <h5>Industry</h5>
         <ul>
             @php
             $checkedIndustries = explode(',',request()->industry);
             $checkedJobRoles = explode(',',request()->roles);
             $checkedJobTypes = explode(',',request()->types);
             $checkedJobCategories = explode(',',request()->category);
             $checkedSalary = request()->salary;
             @endphp

             @forelse ($data['job_industries'] as $key => $value)
             <li class="checkbox"><label><input type="checkbox" name="job_industry[]" {{ in_array( $value->id , $checkedIndustries)?'checked':'' }} class="job_industry" value="{{ $value->id }}" class="form-input" id="{{ $key }}">{{ $value->name }}</label></li>
             @empty
             @endforelse
         </ul>
     </div>
     <div class="filter">
         <h5>Job Category</h5>
         <ul>
             @forelse ($data['job_categories'] as $key => $value)
             <li class="checkbox"><label><input type="checkbox" name="job_category[]" {{ in_array( $value->id , $checkedJobCategories)?'checked':'' }} class="job_category" value="{{ $value->id }}" class="form-input" id="{{ $key }}">{{ $value->name }}</label></li>
             @empty
             @endforelse

         </ul>
     </div>
     <div class="filter">
         <h5>Job Type</h5>
         <ul>
             @forelse ($data['job_types'] as $key => $value)
             <li class="checkbox"><label><input type="checkbox" name="job_types[]" class="job_types" {{ in_array( $value->name , $checkedJobTypes)?'checked':'' }} value="{{ $value->name }}" class="form-input" id="">{{ $value->name }}</label></li>
             @empty
             @endforelse

         </ul>
     </div>

     <div class="filter">
         <h5>Role</h5>
         <ul>
             @forelse ($data['job_roles'] as $key => $role)
             <li class="checkbox"><label><input type="checkbox" name="job_roles[]" {{ in_array( $role->id , $checkedJobRoles)?'checked':'' }} class="job_roles" value="{{ $role->id }}" class="form-input" id="">{{ $role->name }}</label></li>

             @empty
             @endforelse

         </ul>
     </div>
     <div class="filter">
         <h5>Salary</h5>
         <input type="range" name="range" class="form-input" min="0" step="5000" max="100000" id="range" value="">
         <div class="value-display">
             {{-- <span>Min Value: <span id="minValue">0</span></span><br> --}}
             <span>Salary:<span id="currentValue">10000</span></span>
         </div>
     </div>
 </aside>
