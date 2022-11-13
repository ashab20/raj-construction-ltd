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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                            <li class="breadcrumb-item active">{{__('Create Project')}}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{__('Create Project')}}</h4>
                </div>
            </div>
        </div>


        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="">
                         
                        <div class="row">
                            
                                <div class="col-xl-6 mb-3">
                                    <label for="projectname" class="form-label">{{__('Project Name')}}</label>
                                    <input type="text" id="projectname" class="form-control" placeholder="Enter project name" name="projectNameInputField">
                                </div>

                                <div class="mb-0 col-xl-6 col-6">
                                    <label for="project-overview" class="form-label">{{__('Land Owner Name')}} :</label>

                                    <select class="form-control select2" data-toggle="select2">
                                        <option value="">{{__('Select Name')}}</option>
                                        @forelse($landOwner as $onwer)
                                        <option value="{{$onwer->id}}">{{$onwer->name}} - {{$onwer?->email}} - {{$onwer?->phone}}</option>

                                        @empty
                                            <option value="">{{('No data found!')}}</option>
                                        @endforelse
                                    </select>

                                    {{-- <div class="mt-2" id="tooltip-container">
                                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                            <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>

                                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                            <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>

                                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                            <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>

                                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Lorene Block" class="d-inline-block">
                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>

                                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mike Baker" class="d-inline-block">
                                            <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                        </a>
                                    </div> --}}

                                </div>

                           
                            <div class="row">
                                <!-- Date View -->
                                <div class="col-xl-6 mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">{{__('Start Date')}}</label>
                                    <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker1" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                </div>
                                <div class="col-xl-6 position-relative" id="datepicker2">
                                    <label class="form-label">{{__('Due Date')}}</label>
                                    <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker2" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 mb-3">
                                    <label for="project-overview" class="form-label">{{__('Overview')}}</label>
                                    <textarea class="form-control" id="project-overview" rows="5" placeholder="Enter some brief about project.."></textarea>
                                </div>
                                 <!-- Date View -->
                                 <div class="col-xl-6">
                                    
                                    <div class="mb-3">
                                        <label for="project-budget" class="form-label">{{__('Budget')}}</label>
                                        <input type="text" id="project-budget" class="form-control" name="totalBudget" placeholder="Enter project budget">
                                    </div>
                                    <div class="mb-3 mt-3 mt-xl-0">
                                        <label for="projectname" class="mb-0">Project Image</label>
                                        
                                            <input class="form-control" type="file" id="inputGroupFile04">
                                            <p class="text-muted font-14">Recommended thumbnail size 800x400 (px).</p>
                                    </div>
                                 </div>

                             <!-- end col-->
                        </div>
                            <h5 class="mb-3 text-uppercase bg-light p-2 mt-4"><i class="mdi mdi-office-building me-1"></i> {{__('Plot Information')}} :</h5>

                            <div class="row">
                                <div class="mb-3 col-xl-4 form-row">
                                    <label for="squireFeet" class="form-label">{{__('Plot Area')}} :</label>
                                    <input type="text" id="squireFeet" name="squireFeet" class="form-control">
                                    <select name="areaCounter" id="" class="form-control">
                                        <option value="" selected>Squire Feet</option>
                                        <option value="">Miter</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-xl-4 form-row">
                                    <label for="squireFeet" class="form-label">{{__('Building Area')}} :</label>
                                    <input type="text" id="squireFeet" name="squireFeet" class="form-control">
                                    <select name="BUildingCounter" id="" class="form-control">
                                        <option value="Squire Feet" selected>Squire Feet</option>
                                        <option value="Miter">Miter</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-xl-4 form-row">
                                    <label for="squireFeet" class="form-label">{{__('Building Height')}} :</label>
                                    <input type="text" id="squireFeet" name="squireFeet" class="form-control">
                                    <select name="BUildingCounter" id="" class="form-control">
                                        <option value="Miter" selected>Miter</option>
                                        <option value="Squire Feet">Squire Feet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">                      
                                <div class="mb-3 col-xl-4 form-row">
                                    <label for="houseNo" class="form-label">House No.</label>
                                    <input type="text" id="houseNo" class="form-control" name="houseNo">
                                </div>
                                <div class="mb-3 col-xl-4 form-row">
                                    <label for="block" class="form-label">Block</label>
                                    <input type="text" id="block" class="form-control" name="block">
                                </div>
                                <div class="mb-3 col-xl-4 form-row">
                                    <label for="roadNo" class="form-label">Road No.</label>
                                    <input type="text" id="roadNo" class="form-control" name="roadNo">
                                </div>
                            </div>
                           
                            <div class="row">

                                {{-- <div class="col-xl-6 mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <p class="text-muted font-14">{{__('( House no, Road, Block etc. )')}}</p>
                                    <textarea class="form-control" id="project-overview" rows="5" placeholder="Enter address" name="address"></textarea>
                                </div> --}}
                                {{-- <div class="col-xl-6"> --}}
                                    @php
                                    $countires = DB::table('countries')->get();

                                 @endphp
                                    <div class="mb-3 col-xl-4 ">
                                    <label for="country" class="form-label">{{__('Country')}}</label>
                                    <select id="inputState" name="country"class="form-select" >
                                       
                                        <option>{{_('Select Country')}}</option>
                                        @forelse ($countires as $country)
                                        <option value="{{$country->id}}">{{$country->country}}</option>
                                            
                                        @empty
                                        <option>No data Found</option>
                                            
                                        @endforelse
                                    </select>
                                </div>  
                                @php
                                    $divisions = DB::table('divisions')->get();
                                        
                                @endphp
                                <div class="col-xl-4">
                                    <label for="division" class="form-label">{{__('Division')}}</label>
                                    <select id="divisons" name="division" class="form-select">
                                      
                                        <option>{{_('Select Division')}}</option>

                                    @forelse ($divisions as $division)
                                    <option value="{{$division->id}}">{{$division->divison}}</option>
                                        
                                    @empty
                                    <option>No data Found</option>
                                        
                                    @endforelse
                                    </select>
                                </div>
                                @php
                                    $districts = DB::table('districts')->get();
                                        
                                @endphp
                                <div class="col-xl-4">
                                    <label for="district" class="form-label">{{__('District')}}</label>
                                    <select id="district" name="district" class="form-select">
                                        
                                        <option>{{_('Select District')}}</option>

                                    @forelse ($districts as $district)
                                    <option value="{{$district->id}}">{{$district->district}}</option>
                                        
                                    @empty
                                    <option>No data Found</option>
                                        
                                    @endforelse
                                    </select>
                                    
                                {{-- </div> --}}
                            </div>
                            {{-- <div class="mb-3">
                                <label for="designId" class="form-label">Design</label>
                                <input type="file" id="designId" class="form-control" name="designId">
                            </div> --}}
                        </div>
                        <!-- end row -->
                        <h5 class="mb-3 text-uppercase bg-light p-2 mt-4"><i class="mdi mdi-office-building me-1"></i> {{__('Plot Document')}} :</h5>
                        <div class="row">
                            <div class="col-xl-6 mb-3 mt-xl-0">
                                <label for="project-overview" class="form-label">{{__('Overview')}}</label>
                                <p class="text-muted font-14">Brief about the document</p>
                                <textarea class="form-control" id="project-overview" rows="7" placeholder="Enter some brief about project.."></textarea>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3 mt-3 mt-xl-0">
                                    <label for="projectname" class="mb-0">Project Image</label>
                                    <p class="text-muted font-14">Recommended thumbnail size 800x400 (px).</p>

                                    <div action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                        <div class="fallback">
                                            <input name="file" type="file"  />
                                        </div>

                                        <div class="dz-message needsclick">
                                            <i class="h3 text-muted dripicons-cloud-upload"></i>
                                            <h4>Drop files here or click to upload.</h4>
                                        </div>
                                    </div>

                                    <!-- Preview -->
                                    <div class="dropzone-previews mt-3" id="file-previews"></div>

                                    <!-- file preview template -->
                                    <div class="d-none" id="uploadPreviewTemplate">
                                        <div class="card mt-1 mb-0 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                                    </div>
                                                    <div class="col ps-0">
                                                        <span class="d-flex justify-content-between">
                                                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                                            <p class="mb-0" data-dz-size></p>

                                                        </span>
                                                        <input type="text" name="documentText" class="form-control" placeholder="Enter image name">
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                            <i class="dripicons-cross"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end file preview template -->
                                </div>

                               
                            </div> <!-- end col-->

                            <div class="col-10 offset-1 d-flex justify-content-end">
    
                                <button type="reset" class="btn btn-warning mt-2 mx-1"><i class="mdi mdi-content-save"></i> Reset</button>
                                <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save mx-1"></i> Save</button>
                            </div>
                        </div>
                    </form>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- End Content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Hyper - Coderthemes.com
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

@push('scripts')



 <!-- plugin js -->
 <script src="{{asset('assets/js/vendor/dropzone.min.js')}}"></script>
 <!-- init js -->
 <script src="{{asset('assets/js/ui/component.fileupload.js')}}"></script>

 @endpush