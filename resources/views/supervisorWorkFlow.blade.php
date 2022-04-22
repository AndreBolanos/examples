@extends('layout.template')

@section('content')
    <style>
        <style>.nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #ffffff;
            background-color: #559380;
            border-color: #dee2e6 #dee2e6 #fff;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #2C3E50;

        }

        .nav-link {
            color: #2C3E50;
        }


        .form-label {
            margin-bottom: 0px;
        }

        #callInitiation {
            height: 600px;
            overflow-y: auto;
        }

        .form-control-sm,
        .form-select-sm {
            min-height: 1rem;
            padding: 0.15rem 0.5rem;
            font-size: .875rem;
            border-radius: 0.2rem;
        }

    </style>


    <div class="main">


        <div class="container-fluid workArea">






            <div class="row d-flex justify-content-start ms-0 mt-3">
                <div class="col-md-10">
                    <div class="card shadow">
                        <div class="card-body pt-3">
                            <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active position-relative" id="supp" data-bs-toggle="pill"
                                        data-bs-target="#sup" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Supervisor Intake
                                        <span id="focusOption"
                                            class="focusOption position-absolute top-0 start-50 translate-middle p-2 bg-success border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="aa" data-bs-toggle="pill"
                                        data-bs-target="#a" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Basic Intake
                                        <span id="focusOption"
                                            class="focusOption position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="bb" data-bs-toggle="pill"
                                        data-bs-target="#b" type="button" role="tab" aria-controls="pills-profile"
                                        aria-selected="false">Subjective Assessment
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-warning border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="cc" data-bs-toggle="pill"
                                        data-bs-target="#c" type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false">Medical Protocols
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-success border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="dd" data-bs-toggle="pill"
                                        data-bs-target="#d" type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false">ABCD/911
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="ee" data-bs-toggle="pill"
                                        data-bs-target="#e" type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false">Secondary Assessment
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="ff" data-bs-toggle="pill"
                                        data-bs-target="#f" type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false">Plan
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="gg" data-bs-toggle="pill"
                                        data-bs-target="#g" type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false">Intervention
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="hh" data-bs-toggle="pill"
                                        data-bs-target="#h" type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false">Extended Intake
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="ii" data-bs-toggle="pill"
                                        data-bs-target="#i" type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false">Call Completion
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                            </ul>
                            <hr class="mt-2">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="sup" role="tabpanel" aria-labelledby="sup">
                                    <div class="row container-fluid">
                                        <div class="col-md-6">
                                            <form id="" class="row g-3 justify-content-md-start mb-3">
                                                @csrf
                                                <div class="col-md-12" style="padding-right: 15px;">

                                                    <div class="row g-1">

                                                        <div class="d-flex flex-row">
                                                            <h6 class="mb-0 mt-2 me-3">General Information</h6>
                                                        </div>
                                                        <hr class="mb-1">

                                                        <div class="formDatos col-md-4">
                                                            <label for="name" class="form-label col-form-label-sm">First
                                                                name</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="name" name="name" value="James" disabled>
                                                            <b><small><span
                                                                        class="text-danger error-text name_error"></span></small></b>

                                                        </div>
                                                        <div class="formDatos col-md-4">
                                                            <label for="name" class="form-label col-form-label-sm">Last
                                                                name</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="name" name="name" value="Smith" disabled>
                                                            <b><small><span
                                                                        class="text-danger error-text name_error"></span></small></b>

                                                        </div>
                                                        <div class="formDatos col-md-4">
                                                            <label for="name" class="form-label col-form-label-sm">Job
                                                                title</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="name" name="name" value="Supervisor" disabled>
                                                            <b><small><span
                                                                        class="text-danger error-text name_error"></span></small></b>

                                                        </div>
                                                        <div class="formDatos col-md-4">
                                                            <label for="name" class="form-label col-form-label-sm">Phone
                                                                number</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="name" name="name" value="(858)-456-445-7895" disabled>
                                                            <b><small><span
                                                                        class="text-danger error-text name_error"></span></small></b>

                                                        </div>
                                                        <div class="formDatos col-md-8">
                                                            <label for="name"
                                                                class="form-label col-form-label-sm">Email</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="name" name="name" value="jamessmith@gmail.com" disabled>
                                                            <b><small><span
                                                                        class="text-danger error-text name_error"></span></small></b>

                                                        </div>
                                                        <h6 class="mb-0 mt-3 me-3">Intake Eligibility</h6>
                                                        <hr class="mb-1">
                                                        <div class="formDatos col-md-12 mt-1">
                                                            <div class="form-check form-check-inline ps-0">
                                                                <label class="form-check-label" for="inlineCheckbox1">Is the
                                                                    associate a
                                                                    contractor/Temp?</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inlineRadioOptions" id="inlineRadio1"
                                                                    value="option1" disabled checked>
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1">Employee</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inlineRadioOptions" id="inlineRadio2"
                                                                    value="option2" disabled>
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2">Contractor</label>
                                                            </div>
                                                        </div>
                                                        <div class="formDatos col-md-12 mt-1">
                                                            <div class="form-check form-check-inline ps-0">
                                                                <label class="form-check-label" for="inlineCheckbox1">Work related
                                                                    injury?</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsA"
                                                                    id="inlineRadio3" value="option1" checked disabled>
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsA"
                                                                    id="inlineRadio4" value="option2" disabled>
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                        <div class="formDatos col-md-12 mt-1">
                                                            <div class="col-md-12 form-check form-check-inline ps-0">
                                                                <label class="form-check-label" for="inlineCheckbox1">Does employee's answer
                                                                    match the client name on the phone system?</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsB"
                                                                    id="inlineRadio5" value="option1" checked disabled>
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsB"
                                                                    id="inlineRadio6" value="option2" disabled>
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                        <div class="formDatos col-md-12 mt-1">
                                                            <div class="form-check form-check-inline ps-0">
                                                                <label class="form-check-label" for="inlineCheckbox1">Custom question 1</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsCC"
                                                                    id="inlineRadio55" value="option1" disabled checked>
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsCC"
                                                                    id="inlineRadio66" value="option2" disabled>
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                        <h6 class="mb-0 mt-3 me-3">Triage Eligibility</h6>
                                                        <hr class="mb-1">
                                                        <div class="formDatos col-md-6 mt-1">
                                                            <div class="form-check form-check-inline ps-0 me-1">
                                                                <label class="form-check-label" for="inlineCheckbox1">Medical Treatment Sought?</label>
                                                            </div>
                                                            <div class="form-check form-check-inline me-1">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsC"
                                                                    id="inlineRadio7" value="option1" disabled>
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <div class="form-check form-check-inline me-1">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsC"
                                                                    id="inlineRadio8" value="option2" checked disabled>
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                        <div class="formDatos col-md-6 mt-1 text-end">
                                                            <div class="form-check form-check-inline ps-0 me-1">
                                                                <label class="form-check-label" for="inlineCheckbox1">Is Employee Present?</label>
                                                            </div>
                                                            <div class="form-check form-check-inline me-1">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsD"
                                                                    id="inlineRadio9" value="option1" checked disabled>
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <div class="form-check form-check-inline me-1">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsD"
                                                                    id="inlineRadio10" value="option2" disabled>
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                        <div class="formDatos col-md-6 mt-1">
                                                            <div class="form-check form-check-inline ps-0 me-1">
                                                                <label class="form-check-label" for="inlineCheckbox1">Is the employee under 18?</label>
                                                            </div>
                                                            <div class="form-check form-check-inline me-1">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsE"
                                                                    id="inlineRadio11" value="option1" disabled>
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <div class="form-check form-check-inline me-1">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsE"
                                                                    id="inlineRadio12" value="option2" checked disabled>
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                        <div class="formDatos col-md-6 mt-1 text-end">
                                                            <div class="form-check form-check-inline ps-0 me-1">
                                                                <label class="form-check-label" for="inlineCheckbox1">Parental consent?</label>
                                                            </div>
                                                            <div class="form-check form-check-inline me-1">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsF"
                                                                    id="inlineRadio13" value="option1" disabled>
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <div class="form-check form-check-inline me-1">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptionsF"
                                                                    id="inlineRadio14" value="option2" disabled>
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="col-md-4">
                                            <form id="" class="row g-3 justify-content-md-start mb-3">
                                                @csrf
                                                <div class="col-md-12" style="padding-right: 15px;">

                                                    <div class="row g-1">

                                                        <div class="d-flex flex-row">
                                                            <h6 class="mb-0 mt-2 me-3">Accident Description</h6>
                                                        </div>
                                                        <hr class="mb-1">
                                                        <div class="mb-2">
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize: none;" autofocus></textarea>
                                                        </div>

                                                        <div class="formDatos col-md-6">
                                                            <label for="name"
                                                                class="form-label col-form-label-sm">Injury/Illness Cause
                                                                description</label>
                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example">
                                                                <option selected disabled>Select option...</option>

                                                            </select>

                                                        </div>

                                                        <div class="formDatos col-md-6">
                                                            <label for="name"
                                                                class="form-label col-form-label-sm">Injury/Illness Nature
                                                                description</label>
                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example">
                                                                <option selected disabled>Select option...</option>

                                                            </select>

                                                        </div>

                                                        <div class="formDatos col-md-6">
                                                            <label for="name" class="form-label col-form-label-sm">Body part
                                                                location</label>
                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example">
                                                                <option selected disabled>Select option...</option>

                                                            </select>

                                                        </div>
                                                        <div class="formDatos col-md-6">
                                                            <label for="name" class="form-label col-form-label-sm">Body part
                                                                description</label>
                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example">
                                                                <option selected disabled>Select option...</option>

                                                            </select>

                                                        </div>

                                                        <div class="formDatos col-md-12">
                                                            <label for="name" class="form-label col-form-label-sm">What
                                                                object or substance directly harmed the employee?</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="name" name="name">
                                                            <b><small><span
                                                                        class="text-danger error-text name_error"></span></small></b>

                                                        </div>

                                                        <div class="formDatos col-md-3">
                                                            <label for="name" class="form-label col-form-label-sm">Weight
                                                                lifter</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="name" name="name">
                                                            <b><small><span
                                                                        class="text-danger error-text name_error"></span></small></b>

                                                        </div>
                                                        <div class="formDatos col-md-3">
                                                            <label for="name" class="form-label col-form-label-sm">Height
                                                                of fall</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="name" name="name">
                                                            <b><small><span
                                                                        class="text-danger error-text name_error"></span></small></b>

                                                        </div>
                                                        <div class="formDatos col-md-6">
                                                            <label for="name"
                                                                class="form-label col-form-label-sm">Equipment Used</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="name" name="name">
                                                            <b><small><span
                                                                        class="text-danger error-text name_error"></span></small></b>

                                                        </div>

                                                        <div class="formDatos col-md-12 mt-1">
                                                            <div class="form-check form-check-inline ps-0 me-1">
                                                                <label class="form-check-label" for="inlineCheckbox1">Self
                                                                    Care started by EMT/On-Site First Aid?</label>
                                                            </div>
                                                            <div class="form-check form-check-inline me-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inlineRadioOptionsC" id="inlineRadio7"
                                                                    value="option1">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <div class="form-check form-check-inline me-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inlineRadioOptionsC" id="inlineRadio8"
                                                                    value="option2">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>
                                                        <div class="formDatos col-md-12 mt-1">
                                                            <div class="form-check form-check-inline ps-0 me-1">
                                                                <label class="form-check-label" for="inlineCheckbox1">EE
                                                                    wearing required protective equipment?</label>
                                                            </div>
                                                            <div class="form-check form-check-inline me-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inlineRadioOptionsC" id="inlineRadio7"
                                                                    value="option1">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio1">Yes</label>
                                                            </div>
                                                            <div class="form-check form-check-inline me-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inlineRadioOptionsC" id="inlineRadio8"
                                                                    value="option2">
                                                                <label class="form-check-label"
                                                                    for="inlineRadio2">No</label>
                                                            </div>
                                                        </div>

                                                        <div class="formDatos col-md-12">
                                                            <label for="name"
                                                                class="form-label col-form-label-sm">Escalation criteria
                                                                met?</label>
                                                            <select class="form-select form-select-sm"
                                                                aria-label=".form-select-sm example">
                                                                <option selected disabled>Select option...</option>

                                                            </select>

                                                        </div>


                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-1 ms-auto mt-0">
                                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                                            data-bs-target="#claimSearch">Next <span class="ms-2"><i class="bi bi-caret-right-fill"></i></span></button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="a" role="tabpanel" aria-labelledby="a">a</div>
                                <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="b">b</div>
                                <div class="tab-pane fade" id="c" role="tabpanel" aria-labelledby="c">c</div>
                                <div class="tab-pane fade" id="d" role="tabpanel" aria-labelledby="d">d</div>
                                <div class="tab-pane fade" id="e" role="tabpanel" aria-labelledby="e">e</div>
                                <div class="tab-pane fade" id="f" role="tabpanel" aria-labelledby="f">f</div>
                                <div class="tab-pane fade" id="g" role="tabpanel" aria-labelledby="g">g</div>
                                <div class="tab-pane fade" id="h" role="tabpanel" aria-labelledby="h">h</div>
                                <div class="tab-pane fade" id="i" role="tabpanel" aria-labelledby="h">i</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script>
        $(document).ready(function() {
            // $('.nav-link .focusOption').addClass('visually-hidden');
        });

        // function checkFocus() {
        //     if ($('.nav-link').hasClass('active') == true) {
        //         $('.focusOption').addClass('visually-hidden');
        //         $('.active .focusOption').removeClass('visually-hidden');
        //     }
        // }
    </script>
@endsection
