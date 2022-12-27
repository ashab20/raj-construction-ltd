import React from "react";

const TopFilter = () => {
    return (
        <div class="row mt-4">
            <div class="col-sm-4">
                <a
                    href="#"
                    data-bs-toggle="modal"
                    data-bs-target="#add-new-task-modal"
                    class="btn btn-danger rounded-pill mb-3"
                >
                    <i class="mdi mdi-plus"></i> Create Project
                </a>
            </div>
            <div class="col-sm-8">
                <div class="text-sm-end">
                    <div class="btn-group mb-3">
                        <button type="button" class="btn btn-primary">
                            All
                        </button>
                    </div>
                    <div class="btn-group mb-3 ms-1">
                        <button type="button" class="btn btn-light">
                            Ongoing
                        </button>
                        <button type="button" class="btn btn-light">
                            Finished
                        </button>
                    </div>
                    <div class="btn-group mb-3 ms-2 d-none d-sm-inline-block">
                        <button type="button" class="btn btn-secondary">
                            <i class="dripicons-view-apps"></i>
                        </button>
                    </div>
                    <div class="btn-group mb-3 d-none d-sm-inline-block">
                        <button type="button" class="btn btn-link text-muted">
                            <i class="dripicons-checklist"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default TopFilter;
