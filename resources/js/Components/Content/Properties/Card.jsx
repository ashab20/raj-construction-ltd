import React from "react";

const Card = ({property}) => {
    const {id,project_name,total_squire_feet,selling_price,property_status} = property;
    return (
        <div class="col-md-6 col-xxl-3">
            <div class="card d-block">
                <img
                    class="card-img-top"
                    src="assets/images/projects/project-1.jpg"
                    alt="project image cap"
                />
                <div class="card-img-overlay">
                    <div class="badge bg-secondary text-light p-1">{property_status}</div>
                </div>

                <div class="card-body position-relative">
                    <div class="dropdown card-widgets">
                        <a
                            href="#"
                            class="dropdown-toggle arrow-none"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <i class="dripicons-dots-3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-pencil me-1"></i>
                                Edit
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-delete me-1"></i>
                                Delete
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-email-outline me-1"></i>
                                Invite
                            </a>

                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-exit-to-app me-1"></i>
                                Leave
                            </a>
                        </div>
                    </div>
                    <h4 class="mt-0">
                        <a href="apps-projects-details.html" class="text-title">
                            {project_name}
                        </a>
                    </h4>

                    <p class="mb-3">
                        <span class="pe-2 text-nowrap">
                            <i class="mdi mdi-format-list-bulleted-type"></i>
                            <b>3</b> Tasks
                        </span>
                        <span class="text-nowrap">
                            <i class="mdi mdi-comment-multiple-outline"></i>
                            <b>104</b> Comments
                        </span>
                    </p>
                    <div class="mb-3" id="tooltip-container4">
                        <a
                            href="javascript:void(0);"
                            data-bs-container="#tooltip-container4"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Mat Helme"
                            class="d-inline-block"
                        >
                            <img
                                src="assets/images/users/avatar-3.jpg"
                                class="rounded-circle avatar-xs"
                                alt="friend"
                            />
                        </a>

                        <a
                            href="javascript:void(0);"
                            data-bs-container="#tooltip-container4"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Michael Zenaty"
                            class="d-inline-block"
                        >
                            <img
                                src="assets/images/users/avatar-5.jpg"
                                class="rounded-circle avatar-xs"
                                alt="friend"
                            />
                        </a>

                        <a
                            href="javascript:void(0);"
                            data-bs-container="#tooltip-container4"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="James Anderson"
                            class="d-inline-block"
                        >
                            <img
                                src="assets/images/users/avatar-9.jpg"
                                class="rounded-circle avatar-xs"
                                alt="friend"
                            />
                        </a>
                    </div>
                    {/* <p class="mb-2 fw-bold">Progress <span class="float-end">45%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                </div>
                            </div> */}
                </div>
            </div>
        </div>
    );
};

export default Card;
