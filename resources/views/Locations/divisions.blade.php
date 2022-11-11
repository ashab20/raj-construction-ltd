@extends('app')

@section('content')



<div class="content-page">
<div class="content">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                    <li class="breadcrumb-item active">Customers</li>
                </ol>
            </div>
            <h4 class="page-title">Customers</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Member</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="text-sm-end">
                            <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                            <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                            <button type="button" class="btn btn-light mb-2">Export</button>
                        </div>
                    </div><!-- end col-->
                </div>

                <div class="table-responsive">
                    <table class="table table-centered mb-0">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Country</th>
                                <th>Created</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Risa D. Pearson</td>
                                <td>336-508-2157</td>
                                <td>July 24, 1950</td>
                                <td>
                                    <!-- Switch-->
                                    <div>
                                        <input type="checkbox" id="switch1" checked data-switch="success"/>
                                        <label for="switch1" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ann C. Thompson</td>
                                <td>646-473-2057</td>
                                <td>January 25, 1959</td>
                                <td>
                                    <!-- Switch-->
                                    <div>
                                        <input type="checkbox" id="switch2" checked data-switch="success"/>
                                        <label for="switch2" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Paul J. Friend</td>
                                <td>281-308-0793</td>
                                <td>September 1, 1939</td>
                                <td>
                                    <!-- Switch-->
                                    <div>
                                        <input type="checkbox" id="switch3" data-switch="success"/>
                                        <label for="switch3" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Linda G. Smith</td>
                                <td>606-253-1207</td>
                                <td>May 3, 1962</td>
                                <td>
                                    <!-- Switch-->
                                    <div>
                                        <input type="checkbox" id="switch4" data-switch="success"/>
                                        <label for="switch4" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                                    </div>
                                </td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                                                                    
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
           {{-- ? Popup Add divisions Start--}}
                <!-- Add New Event MODAL -->
                <div class="modal fade" id="event-modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                <div class="modal-header py-3 px-4 border-bottom-0">
                                    <h5 class="modal-title" id="modal-title">Event</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="$('#event-modal').removeClass('d-block show')"></button>
                                </div>
                                <div class="modal-body px-4 pb-4 pt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="control-label form-label">Country</label>
                                                <input class="form-control" placeholder="Insert Event Name" type="text" name="title" id="event-title" required />
                                                <div class="invalid-feedback">Please provide a valid event name</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="control-label form-label">Category</label>
                                                <select class="form-select" name="category" id="event-category" required>
                                                    <option value="bg-danger" selected>Danger</option>
                                                    <option value="bg-success">Success</option>
                                                    <option value="bg-primary">Primary</option>
                                                    <option value="bg-info">Info</option>
                                                    <option value="bg-dark">Dark</option>
                                                    <option value="bg-warning">Warning</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid event category</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end modal-content-->
                    </div> <!-- end modal dialog-->
                </div>
                <!-- end modal-->
                {{-- ? Popup Add Divisions End--}}
    </div> <!-- end col -->
</div>
<!-- end row -->

</div> <!-- End Content -->

<!-- Footer Start -->
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

@endsection