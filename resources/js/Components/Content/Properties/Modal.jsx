import React, { useEffect, useState } from "react";
import BaseUrl from "../../../Utils/BaseUrl";

const Modal = () => {
    const [loadding, setLoadding] = useState(false);
    const [isError, setIsError] = useState(false);
    const [error, setError] = useState("");
    const [projects, setProjects] = useState([]);
    const [floorDetails, setFloorDetails] = useState([]);

    // form state
    const [totalSquireFeet,setTotalSquireFeet] = useState('');

    async function getProjects() {
        setLoadding(true);
        try {
            const { data } = await BaseUrl.get("/projects");
            // console.log(data);
            setProjects(data.data);
        } catch (error) {
            setError(error);
        }
        setLoadding(false);
    }
    async function getFloorDetails() {
        setLoadding(true);
        try {
            const { data } = await BaseUrl.get("/flootdetails");
            setFloorDetails(data);
        } catch (err) {
            setError(err);
        }
        setLoadding(false);
    }

    useEffect(() => {
        getProjects();
        getFloorDetails();
    }, []);

    // function

    const handleFloorChange = (e)=> {
        console.log(totalSquireFeet)
        console.log(e);
    }

    //   constent

    const projectContent =
        !loadding &&
        projects.length > 0 &&
        projects.map((project) => {
            return (
                <option key={project.id} value={project.id} >
                    {project.project_name}
                </option>
            );
        });

    const floorDetailsContent =
        !loadding &&
        floorDetails.length > 0 &&
        floorDetails.map((floor) => {
            return (
                <option key={floor.id} value={floor.id} >
                    {floor.floor_no}
                </option>
            );
        });

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
                            Add New Property
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
                            <div className="row">
                                <div class="mb-3">
                                    <label class="form-label">Project</label>
                                    <select class="form-select form-control-light">
                                        <option>Select</option>
                                        {projectContent}
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Floor</label>
                                    <select class="form-select form-control-light" onChange={(e)=>handleFloorChange(e)}>
                                        <option>Select</option>
                                        {floorDetailsContent}
                                    </select>
                                </div>
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
