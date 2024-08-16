 <aside>
     <h5>All Filters</h5>
     <div class="filter">
         <h5>Industry</h5>
         <ul>
             @forelse ($data['job_industries'] as $key => $value)
                 <li class="checkbox"><label><input type="checkbox" name="job_industry[]" value="{{ $value->id }}"
                             class="form-input" id="">{{ $value->name }}</label></li>
             @empty
             @endforelse

         </ul>
     </div>
     <div class="filter">
         <h5>Job Type</h5>
         <ul>
             @forelse ($data['job_types'] as $key => $value)
                 <li class="checkbox"><label><input type="checkbox" name="job_types[]" value="{{ $value->id }}"
                             class="form-input" id="">{{ $value->name }}</label></li>
             @empty
             @endforelse

         </ul>
     </div>
     <div class="filter">
         <h5>Salary</h5>
         <input type="range" name="range" class="form-input" min="10000" max="999999" id="range">
     </div>
     <div class="filter">
         <h5>Role</h5>
         <ul>
             @forelse ($data['job_roles'] as $key => $role)
                 <li class="checkbox"><label><input type="checkbox" name="job_roles[]" value="{{ $role->id }}" class="form-input"
                             id="">{{ $role->name }}</label></li>

             @empty
             @endforelse

         </ul>
     </div>
 </aside>
