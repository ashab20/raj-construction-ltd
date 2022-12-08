@extends('app')


@push('style')
<link href="{{ asset('assets/css/vendor/simplemde.min.css')}}" rel="stylesheet" type="text/css" />
@endpush



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
                            <li class="breadcrumb-item active">{{__('Create Team')}}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{__('Create Team')}}</h4>
                </div>
            </div>
        </div>


        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('post')

                            <div class="row">
                                <div class="col-xl-4 mb-3">
                                    <label for="projectname" class="form-label">{{__('Team Name')}}</label>
                                    <input type="text" id="projectname" class="form-control" placeholder="Enter project name" name="projectNameInputField" value="{{ old('projectNameInputField')}}" required>
                                </div>

                                <div class="col-xl-4 mb-3">
                                    <label for="projectOwnerShip" class="form-label">{{__('Team Leader')}}:</label>
                                    <select name="worker[]" id="" class="form-control select2" data-toggle="select2">
                                        <option value="">Select Team Leader</option>
                                        @forelse($workers as $worker)
                                        <option value="{{$worker->id}}">
                                            {{$worker->name}}
                                        </option>
                                        @empty
                                        <option value="">
                                            {{__('No Data Founds!')}}
                                        </option>
                                        @endforelse
                                        <option value="">

                                        </option>
                                    </select>
                                </div>
                                <div class="col-xl-4 position-relative" id="datepicker2">
                                    <label class="form-label">{{__('Building Options')}}</label>
                                    <select name="worker[]" id="" class="form-control select2" data-toggle="select2">
                                        <option value="">Select Builder Options</option>
                                        @forelse($builderOptions as $bo)
                                        <option value="{{$bo->id}}">
                                            {{$bo->name}}
                                        </option>
                                        @empty
                                        <option value="">
                                            {{__('No Data Founds!')}}
                                        </option>
                                        @endforelse
                                        <option value="">

                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-8 position-relative3">
                                    <label for="project-overview" class="form-label">{{__('Select Workers')}}</label>
                                    <select name="worker[]" id="" class="form-control select2" data-toggle="select2" multiple>
                                        <option value="">Select Worker</option>
                                        @forelse($workers as $worker)
                                        <option value="{{$worker->id}}">
                                            {{$worker->name}}
                                        </option>
                                        @empty
                                        <option value="">
                                            {{__('No Data Founds!')}}
                                        </option>
                                        @endforelse
                                        <option value="">

                                        </option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class=" mb-3">
                                    <label for="project-overview" class="form-label">{{__('Workers')}}</label>
                                    <textarea class="form-control" name="projectOverview" rows="5" placeholder="Enter some brief about project..">{{old('workers_id')}}</textarea>
                                </div>
                            </div> -->
                    </div>
                    <!-- end row -->
                    <!-- Plot Documents -->
                    <div class="col-10 offset-1 d-flex justify-content-end">

                        <button type="reset" class="btn btn-warning mt-2 mx-1"><i class="mdi mdi-content-save"></i> Reset</button>
                        <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save mx-1"></i> Save</button>
                    </div>
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
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

<!-- SimpleMDE js -->
<script src="{{asset('assets/js/vendor/simplemde.min.js')}}"></script>
<!-- SimpleMDE demo -->
<script src="{{asset('assets/js/pages/demo.simplemde.js')}}"></script>




<script>
    function modelAction() {
        $('#division-modal').toggleClass('d-block show');
        $('body').toggleClass('modal-open');
    }
    // function handleSubmit() {
    //     // e.preventDefault();
    //     let countryName = $('#countryName').val();
    //     let authName = $('#authName').val();
    //     // console.log(countryName);
    //     const host = `${window.location.origin}`;
    //     const data = {
    //         countryName,
    //         _token: '<?php echo csrf_token() ?>',
    //         _method:'PATCH',
    //     }
    // console.log('host',host);
    //     $.ajax({
    //         method: 'GET',
    // headers:{
    //     _token : '<?php echo csrf_token() ?>',
    //       _method:'PATCH',
    //},
    //         url: host + `/${authName}/country/store`,
    //         data,
    //         success: function(data) {
    //             console.log(data);
    //         },
    //         error: function(data) {
    //             console.log(data);
    //         }
    //     });
    // }
</script>
@endpush