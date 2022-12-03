<div class="row d-none" id="project-management">    
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="{{ route('management.create',['id'=> encrypt($project->id)])}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i>Add Management</a>
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
                    <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Project Name</th>
                                <th>Project Director</th>
                                <th>Architecht</th>
                                <th>Chivil Engneer Name</th>
                                <th>Team</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{$project}}
                            {{-- @forelse ($project?->managements as $management) --}}
                            {{-- <tr> --}}
                                {{-- <td scope="row">{{ ++$loop->index }}</td>
                                <td>{{ $management?->project?->project_name}}</td>

                                <td>{{ $management->test_name}}</td>
                                <td>{{ $management->test_status}}</td>
                                <td>{{ $management->comments}}</td>
                                <td>
                                    @if ($management->status === 1)
                                    <span class="badge badge-success-lighten">Active</span>
                                    @else                                   
                                        <span class="badge badge-danger-lighten">Blocked</span>
                                    
                                    @endif
                                </td>
                                <td class="table-action">
                                    <a href="{{ route('testDetail.edit',$management)}}" class="action-icon"> <i class="mdi mdi-pencil"></i> </a>                                            
                                    <a href="javascript:void()" onclick="$('#form{{$management->id}}').submit()">
                                        <i class="mdi mdi-delete"></i>
                                    </a>
                                    <form id="form{{$management->id}}" action="{{ route('testDetail.destroy',$management->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>                                      
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">No Data Found</td>
                                </tr>
                            @endforelse --}}
                        </tbody>
                    </table>                                          
                </div> <!-- end preview-->
            </div> <!-- end tab-content-->
        </div> <!-- end card body-->
    </div> <!-- end card -->
</div>