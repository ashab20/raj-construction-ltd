<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
            </div>
            <div class="col-md-6">
                <div class="text-md-end footer-links d-none d-md-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div> <!-- content-page -->

</div> <!-- end wrapper-->
</div>
<!-- END Container -->

<!-- Right Sidebar -->
@include('right_sideber')

<!-- Right Sidebar -->
{{-- <div class="end-bar">

<div class="rightbar-title">
<a href="javascript:void(0);" class="end-bar-toggle float-end">
<i class="dripicons-cross noti-icon"></i>
</a>
<h5 class="m-0">Settings</h5>
</div>

<div class="rightbar-content h-100" data-simplebar>

<div class="p-3">
<div class="alert alert-warning" role="alert">
<strong>Customize </strong> the overall color scheme, sidebar menu, etc.
</div>

<!-- Settings -->
<h5 class="mt-3">Color Scheme</h5>
<hr class="mt-1" />

<div class="form-check form-switch mb-1">
<input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
    id="light-mode-check" checked />
<label class="form-check-label" for="light-mode-check">Light Mode</label>
</div>

<div class="form-check form-switch mb-1">
<input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
    id="dark-mode-check" />
<label class="form-check-label" for="dark-mode-check">Dark Mode</label>
</div>

    <!-- Left Sidebar-->
    <h5 class="mt-4">Left Sidebar</h5>
    <hr class="mt-1" />

    <div class="form-check form-switch mb-1">
        <input type="checkbox" class="form-check-input" name="compact" value="fixed" id="fixed-check"
            checked />
        <label class="form-check-label" for="fixed-check">Scrollable</label>
    </div>

    <div class="form-check form-switch mb-1">
        <input type="checkbox" class="form-check-input" name="compact" value="condensed"
            id="condensed-check" />
        <label class="form-check-label" for="condensed-check">Condensed</label>
    </div>

    <div class="d-grid mt-4">
        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

        <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
        class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase
        Now</a>
    </div>
</div> <!-- end padding-->
</div>
</div> --}}

<div class="rightbar-overlay"></div>
<!-- /End-bar -->

        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>

        <script src="{{ asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- third party js ends -->

       
       
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @stack('scripts')
    </body>
</html>
