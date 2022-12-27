import React from "react";

const Modal = () => {
    return (
        <div
            class="modal fade task-modal-content"
            id="add-new-task-modal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="NewTaskModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="NewTaskModalLabel">
                            Create New Task
                        </h4>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <form class="p-2">
                            <div class="mb-3">
                                <label class="form-label">Project</label>
                                <select class="form-select form-control-light">
                                    <option>Select</option>
                                    <option>Hyper - Admin Dashboard</option>
                                    <option>CRM - Design & Development</option>
                                    <option>iOS - App Design</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label
                                            for="task-title"
                                            class="form-label"
                                        >
                                            Title
                                        </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-light"
                                            id="task-title"
                                            placeholder="Enter title"
                                        />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label
                                            for="task-priority2"
                                            class="form-label"
                                        >
                                            Priority
                                        </label>
                                        <select
                                            class="form-select form-control-light"
                                            id="task-priority2"
                                        >
                                            <option>Low</option>
                                            <option>Medium</option>
                                            <option>High</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label
                                    for="task-description"
                                    class="form-label"
                                >
                                    Description
                                </label>
                                <textarea
                                    class="form-control form-control-light"
                                    id="task-description"
                                    rows="3"
                                ></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label
                                            for="task-title"
                                            class="form-label"
                                        >
                                            Assign To
                                        </label>
                                        <select
                                            class="form-select form-control-light"
                                            id="task-priority"
                                        >
                                            <option>Coderthemes</option>
                                            <option>Robert Carlile</option>
                                            <option>Louis Allen</option>
                                            <option>Sean White</option>
                                            <option>Riley Steele</option>
                                            <option>Zak Turnbull</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label
                                            for="task-priority"
                                            class="form-label"
                                        >
                                            Due Date
                                        </label>
                                        <input
                                            type="text"
                                            class="form-control form-control-light"
                                            id="birthdatepicker"
                                            data-toggle="date-picker"
                                            data-single-date-picker="true"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button
                                    type="button"
                                    class="btn btn-light"
                                    data-bs-dismiss="modal"
                                >
                                    Cancel
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Modal;
