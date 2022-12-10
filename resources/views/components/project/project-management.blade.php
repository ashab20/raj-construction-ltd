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
                    <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable table-striped mb-0">
                        <thead>
                            <tr>
                                <th></th>
                                <th>#SL</th>
                                <th>Project Name</th>
                                <th>Project Director</th>
                                <th>Architecht</th>
                                <th>Chivil Engneer Name</th>
                                <th>Team</th>
                                <th>Total Worker</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($project->management as $managed)
                            <tr>
                                <td class="table-user">
                                    <button class="btn  action-icon" onclick="$('#t{{$managed->id}}').toggleClass('d-none')" type="button">
                                    <i class="uil  uil-plus-circle "></i>
                                    </button>
                                </td>
                                <td>{{ ++$loop->index}}</td>
                                <td>{{ $project?->project_name}}</td>
                                <td>{{ $managed->director?->name}}</td>
                                <td>{{ $managed->architecht?->name}}</td>
                                <td>{{ $managed->civilengineer?->name}}</td>
                                <td>{{$managed->teams->team_name}}</td>
                                <td>
                                    @php
                                    $workers_id = json_decode($managed->teams->worker_id);
                                    
                                    @endphp
                                    {{count($workers_id)}}
                                </td>
                                <td>{{$managed->status}}</td>
                                <td class="table-action">
                                    <a href="#" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i> </a>
                                    <a href="javascript:void()" onclick="$('#form{{$managed->id}}').submit()">
                                        <i class="mdi mdi-delete"></i>
                                    </a>
                                    <form id="{{$managed->id}}" action="{{ route('management.destroy',$managed->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            <tr id="t{{$managed->id}}" class="d-none">
   @php
         $workers = DB::table('workers')->whereIn('id', $workers_id)->get();
  @endphp
                                <td colspan="9">
                                    <table class="table table-bordered border-primary table-centered mb-0table table-bordered table-centered mb-0">
                                        <tr>
                                            <th>Worker Id</th>
                                            <th>Worker Name</th>
                                            <th>Father Name</th>
                                            <th>Address</th>
                                            <th>Total Working Day</th>
                                            <th>Attachment</th>
                                        </tr>
                                        @foreach ($workers as $worker)
                                          <tr>
                                            <td>{{$worker->id}}</td>
                                            <td>{{$worker->name}}</td>
                                            <td>{{$worker->father_name}}</td>
                                            <td>{{$worker->present_address}},{{$worker->present_district_id}}</td>
                                            <td>{{$worker->total_working_day}}</td>
                                            <td class="table-action"> <a href="#" class="action-icon"> <i class="text-info uil-eye"></i> </a>
                                        </tr>  
                                        @endforeach
                                        
                                    </table>
                                </td>

                            </tr>

                            @empty
                            <tr>
                                <td colspan="8" class="text-center">Data not found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div> <!-- end preview-->
            </div> <!-- end tab-content-->
        </div> <!-- end card body-->
    </div> <!-- end card -->
</div>