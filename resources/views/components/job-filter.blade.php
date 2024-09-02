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
         {{-- <input type="number" class="form-input" id="salary" name="salary" list="salary_suggestions" placeholder="Enter minimum salary" required>
         <datalist id="salary_suggestions">
             <option value="0">
             <option value="5000">
             <option value="10000">
             <option value="15000">
             <option value="20000">
             <option value="25000">
             <option value="50000">
             <option value="55000">
         </datalist>
         <input type="number" class="form-input" id="max_salary" name="max_salary" list="salary_suggestions" placeholder="Enter maximum salary" required> --}}


         <input type="range" name="range" class="form-input" min="0" step="5000" max="100000" id="range" value="">
         <div class="value-display">
             <span>Salary:<span id="currentValue">10000</span></span>
         </div>
     </div>
 </aside>
