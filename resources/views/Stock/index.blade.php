@extends('app')

@push('style')
    {{-- Datatables js --}}

    <link href="{{ asset('assets/css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item active">Store List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Store</h4>
                </div>
            </div>
        </div>
        {{-- end page title --}}

        <div class="row mb-2">
            {{-- <div class="col-sm-4">
                <a href="{{route('project.create')}}" class="btn btn-danger rounded-pill mb-3"><i class="mdi mdi-plus"></i> Create Project</a>
            </div> --}}
            
            <div class="col-sm-12">
                <div class="text-sm-end">
                    <div class="btn-group mb-3">
                        <button type="button" class="btn btn-primary">All</button>
                    </div>
                    <div class="btn-group mb-3 ms-1">
                        <button type="button" class="btn btn-light">Ongoing</button>
                        <button type="button" class="btn btn-light">Finished</button>
                    </div>
                    <div class="btn-group mb-3 ms-2 d-none d-sm-inline-block">
                        <button type="button" class="btn btn-secondary"><i class="dripicons-view-apps"></i></button>
                    </div>
                    <div class="btn-group mb-3 d-none d-sm-inline-block">
                        <button type="button" class="btn btn-link text-muted"><i class="dripicons-checklist"></i></button>
                    </div>
                </div>
            </div><!-- end col-->
        </div>
        <!-- end row-->

        <div class="tab-content">
            <div class="card">
                <div class="card-body">
                    <div id="buttons-table-preview" class="tab-pane show active">
                        <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-8">
                                    <div class="dt-buttons btn-group flex-wrap"> 
                                        <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                                            <span>Copy</span>
                                        </button> 
                                        <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="datatable-buttons" type="button">
                                            <span>Print</span>
                                        </button> 
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div id="datatable-buttons_filter" class="dataTables_filter d-flex">
                                        <label class=" ">Search:
                                        </label>
                                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable-buttons">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Material</th>
                                <th>Brand</th>
                                <th>Stock In</th>
                                <th></th>
                            </tr>
                            <tbody>
                                @forelse($stores as $item)
                                <tr>
                                    <td>{{++$loop->index}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->brand}}</td>
                                    <td>{{$item->total_qty}} {{$item->quantity_name}}</td>
                                    <td>$320,800</td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center">No Data Founds!</td>
                                </tr>
                                @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script src="{{ asset('assets/js/vendor/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.flash.min.j') }}s"></script>
    <script src="{{ asset('assets/js/vendor/buttons.print.min.js') }}"></script>
@endpush