<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('assets/js/js.js') }}" type="text/javascript" rel="javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {

        toastr.options = {
            'closeButton': false
            , 'debug': false
            , 'newestOnTop': false
            , 'progressBar': true
            , 'positionClass': 'toast-top-right'
            , 'preventDuplicates': false
            , 'showDuration': '1000'
            , 'hideDuration': '1000'
            , 'timeOut': '5000'
            , 'extendedTimeOut': '1000'
            , 'showEasing': 'swing'
            , 'hideEasing': 'linear'
            , 'showMethod': 'fadeIn'
            , 'hideMethod': 'fadeOut'
        , }

        @if(session('success'))
        toastr.success("{{ session('success') }}");
        @endif

        @if(session('error'))
        toastr.error("{{ session('error') }}");
        @endif

        @if(session('info'))
        toastr.info("{{ session('info') }}");
        @endif

        @if(session('warning'))
        toastr.warning("{{ session('warning') }}");
        @endif

    });
       //sweetalert
       $('#confirm_login').click(function(){  
        event.preventDefault(); // Prevent default action
            Swal.fire({
                title: "Are you sure?",
                text: "Do you really want to log out?",
                icon: "question",  // Change to a more appropriate icon for logout
                showCancelButton: true,
                confirmButtonColor: "#deb56b", // Confirm button color
                cancelButtonColor: "#000",      // Cancel button color
                confirmButtonText: "Yes, log out!",
                cancelButtonText: "No, stay logged in"
                }).then((result) => {
                if (result.isConfirmed) {
                window.location.href = "{{ route('logout') }}"; // Change this to your login URL
                }
            });
     });
</script>
