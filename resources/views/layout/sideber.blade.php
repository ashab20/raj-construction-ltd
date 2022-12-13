        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu leftside-menu-detached" style="height: 100vh;">

            <div class="leftbar-user">
                <a href="javascript: void(0);">
                    @if(Session::has('avatar'))
                    <img src="{{  asset('uploads/profile/'.Session::get('avatar')) }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                    @endif
                    <span class="leftbar-user-name">
                        @if(Session::has('userName'))
                        {{ Crypt::decrypt(Session::get('userName')) }}
                        @endif
                    </span>
                </a>
            </div>
            <!--- Sidemenu -->
            <ul class="side-nav">
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span> My Accounts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{route('member.show',Crypt::decrypt(Session::get('userId')))}}">Profile</a>
                            </li>
                            <li>
                                <a href="#">
                                    Change Password
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Update Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">Projects</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-title side-nav-item">Quick Access</li>
                <li class="side-nav-item">
                    <a href="{{route('admin.dashboard')}}" class="side-nav-link">
                        <i class="uil-comments-alt"></i>
                        <span> {{__('Dashaboard')}} </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="#" class="side-nav-link">
                        <i class="uil-comments-alt"></i>
                        <span> {{__('Quick Search')}} </span>
                    </a>
                </li>

                <li class="side-nav-title side-nav-item">Construstions</li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                        <i class="uil-clipboard-alt"></i>
                        <span> {{ __('Projects')}}</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTasks">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{ route('project.index')}}">
                                    {{__('Projects')}}
                                </a>
                            </li>
                            <li>
                                <a href="apps-projects-gantt.html">Gantt <span class="badge rounded-pill badge-dark-lighten text-dark font-10 float-end">New</span></a>
                            </li>
                            <li>
                                <a href="{{route('project.create')}}">{{__('Create Project')}} <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                            </li>
                            <li>
                                <a href="{{ route('land.index')}}">
                                    {{__('Lands')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('flatDetail.index')}}">
                                    {{__('Flat Details')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('document.index')}}">
                                    {{__('Documents')}}
                                </a>
                            </li>
                            {{-- budget --}}
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarbudget" aria-expanded="false" aria-controls="sidebarbudget">
                                    <span> {{ __('Budget')}}</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarbudget">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="{{ route('budget.index')}}">
                                                {{__('Budget')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('BudgetDetail.index')}}">
                                                {{__('Budget Details')}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- support table --}}
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarsuport" aria-expanded="false" aria-controls="sidebarsuport">
                                    <span> {{ __('Suport')}}</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarsuport">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="{{ route('foundation.index')}}">
                                                {{__('Foundation')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('team.index')}}">
                                                {{__('Team')}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- flat --}}
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarflat" aria-expanded="false" aria-controls="sidebarflat">
                                    <span> {{ __('Flat')}}</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarflat">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="{{ route('flat.index')}}">
                                                {{__('Flats Details')}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- material --}}
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarMaterial" aria-expanded="false" aria-controls="sidebarMaterial">
                                    <span> {{ __('Materials')}}</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMaterial">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="{{ route('materialDetails.index')}}">
                                                {{__('Material Details')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('material.index')}}">
                                                {{__('Material')}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarFloor">
                                    <span>{{__('Floor')}}</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse ml-3" id="sidebarFloor">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="{{ route('floorDetails.index')}}">
                                                {{__('Floor Details')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('floorBudget.index')}}">
                                                {{__('Floor Budget')}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarBuilder">
                                    <span>{{__('Builder')}}</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse ml-3" id="sidebarBuilder">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="{{ route('builder.index')}}">
                                                {{__('Builder Details')}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- Test Details --}}
                            <li class="side-nav-item">
                                <a href="{{ route('testDetail.index')}}">
                                    {{__('Test Detail')}}
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="{{ route('management.index')}}">
                                    {{__('Management List')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarStore" aria-expanded="false" aria-controls="sidebarStore" class="side-nav-link">
                        <i class="uil-clipboard-alt"></i>
                        <span> {{ __('Store')}}</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarStore">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{ route('store.index')}}">
                                    {{__('Store')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-title side-nav-item">HR</li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarDesignation" aria-expanded="false" aria-controls="sidebarDesignation" class="side-nav-link">
                        <i class="uil-rss"></i>
                        <span> Designations</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarDesignation">
                        <ul class="side-nav-second-level">

                            <li>
                                <a href="{{ route('designation.index')}}">Designations Details</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                        <i class="uil-envelope"></i>
                        <span>{{__('Members')}}</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{route('member.index')}}">
                                    {{ _('All Members')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admins')}}">{{ _('Admins')}}</a>
                            </li>
                            <li>
                                <a href="{{route('admin.moderators')}}">{{ _('Moderators')}}</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarWorker" aria-expanded="false" aria-controls="sidebarWorker" class="side-nav-link">
                        <i class="uil-rss"></i>
                        <span>Workers</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarWorker">
                        <ul class="side-nav-second-level">

                            <li>
                                <a href="{{ route('worker.index')}}">Worker Details</a>
                            </li>
                            <li>
                                <a href="{{ route('workerdetails.index')}}">Working Details</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-title side-nav-item">Base Setup</li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                        <i class="uil-briefcase"></i>
                        <span> {{__('Locations')}} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProjects">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{ route('country.index')}}">
                                    {{__('Coutries')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('division.index')}}">
                                    {{__('Divions/State')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('district.index')}}">
                                    {{_('Districts')}}
                                    <span class="badge rounded-pill badge-dark-lighten text-dark font-10 float-end">New</span>
                                </a>
                            </li>
                            {{-- <li>
                                        <a href="apps-projects-add.html">Create Project <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                                    </li> --}}
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="{{ route('team.index')}} aria-expanded=" false" aria-controls="sidebarDesignation" class="side-nav-link">
                        <i class="uil-rss"></i>
                        <span> {{__('Team')}}</span>
                        <span class="menu-arrow"></span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="{{ route('unit.index')}}" class="side-nav-link">
                        <i class="uil-rss"></i>
                        <span> {{__('Unit')}}</span>
                    </a>
                </li>

                <li class="side-nav-title side-nav-item">Apps</li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                        <i class="uil-clipboard-alt"></i>
                        <span> Tasks </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTasks">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="apps-tasks.html">List</a>
                            </li>
                            <li>
                                <a href="apps-tasks-details.html">Details</a>
                            </li>
                            <li>
                                <a href="apps-kanban.html">Kanban Board</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>


            <!-- End Sidebar -->

            <div class="clearfix">
                <button style="position: absolute;right: 0;bottom: 0;" type="button" class="btn btn-light rounded closeBtn float-end" id="condensed-check" onclick="sidebarHandler()">
                    <i class="mdi mdi-chevron-left-box-outline"></i>
                </button>
                <button style="position: absolute;right: 0;bottom: 0;" type="button" class="d-none btn btn-light justify-content-center" id="opentBtn">
                    <i class="mdi mdi-dock-left"></i>
                </button>
            </div>



            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->
        @push('scripts')
        <script>
            let condensed = $('#condensed-check')
            let fixed = $('#fixed-check')

            function sidebarHandler() {
                // data-leftbar-compact-mode="condensed"
                $('body').attr('data-leftbar-compact-mode', 'condensed');
                $('.closeBtn').toggleClass('d-none');
                $('#opentBtn').removeClass('d-none');
            }
            $('#opentBtn').click(() => {
                $('.closeBtn').removeClass('d-none');
                $('#opentBtn').addClass('d-none');
                $('body').removeAttr('data-leftbar-compact-mode');
            });
        </script>
        @endpush