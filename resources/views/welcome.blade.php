@extends('layout.template')

@section('content')
    <style>
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



        <div class="row m-3 justify-content-start">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header fw-bold">
                        Call Initiation
                    </div>
                    <div class="card-body">
                        <div class="container-fluid" style="padding-top: 5px;padding-bottom: 15px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="callInitiation" class="row g-3 justify-content-md-start mb-3" novalidate>
                                        @csrf
                                        <div class="col-md-12" style="padding-right: 15px;">

                                            <div class="row g-1">
                                                <div class="formDatos col-md-6">
                                                    <label for="name" class="form-label col-form-label-sm">Contact
                                                        ID</label>
                                                    <input type="text" class="form-control form-control-sm" id="name"
                                                        name="name" autofocus>
                                                    <b><small><span
                                                                class="text-danger error-text name_error"></span></small></b>

                                                </div>
                                                <label for="name" class="form-label col-form-label-sm">Account</label>
                                                <div class="input-group input-group-sm mb-1 mt-0">
                                                    <input type="text" class="form-control"
                                                        placeholder="Search by account / skill-no / parent account"
                                                        aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn btn-primary" type="button" id="button-addon2"><i
                                                            class="bi bi-search"></i></button>
                                                </div>
                                                <div class="d-grid gap-2 col-3 ms-auto mt-0">
                                                    <button class="btn btn-secondary btn-sm" type="button"
                                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">Search
                                                        Claim</button>
                                                </div>
                                                <hr class="mb-1">
                                                <div class="formDatos col-md-6">
                                                    <label for="name" class="form-label col-form-label-sm">First
                                                        Name</label>
                                                    <input type="text" class="form-control form-control-sm" id="name"
                                                        name="name" value="{{ old('name') }}" required>
                                                    <b><small><span
                                                                class="text-danger error-text name_error"></span></small></b>

                                                </div>
                                                <div class="formDatos col-md-6">
                                                    <label for="lastName" class="form-label col-form-label-sm">Last
                                                        Name</label>
                                                    <input type="text" class="form-control form-control-sm" id="lastName"
                                                        name="lastName" value="{{ old('lastName') }}">
                                                    <b><small><span
                                                                class="text-danger error-text lastName_error"></span></small></b>
                                                </div>
                                                <div class="formDatos col-md-6">
                                                    <label for="name" class="form-label col-form-label-sm">Caller</label>
                                                    <select class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option selected disabled>Who is calling?</option>
                                                        <option value="1">Supervisor</option>
                                                        <option value="2">Injured Worker</option>
                                                        <option value="3">Other</option>
                                                    </select>

                                                </div>
                                                <div class="formDatos col-md-6">
                                                    <label for="name" class="form-label col-form-label-sm">Job Title</label>
                                                    <input type="text" class="form-control form-control-sm" id="name"
                                                        name="name" value="{{ old('name') }}" required>
                                                    <b><small><span
                                                                class="text-danger error-text name_error"></span></small></b>

                                                </div>

                                                <div class="formDatos col-md-4">
                                                    <label for="tel" class="form-label col-form-label-sm">Phone</label>
                                                    <input type="text" class="form-control form-control-sm" id="tel"
                                                        name="tel" value="{{ old('tel') }}">
                                                    <b><small><span
                                                                class="text-danger error-text tel_error"></span></small></b>
                                                </div>
                                                <div class="formDatos col-md-8">
                                                    <label for="email" class="form-label col-form-label-sm">Email
                                                    </label>
                                                    <input type="text" class="form-control form-control-sm" id="email"
                                                        name="email" autocomplete="off" value="{{ old('email') }}">
                                                    <b><small><span
                                                                class="text-danger error-text email_error"></span></small></b>
                                                </div>
                                                <p class="mb-0 mt-2">Injured Worker</p>
                                                <div class="formDatos col-md-6">
                                                    <label for="name" class="form-label col-form-label-sm">First
                                                        Name</label>
                                                    <input type="text" class="form-control form-control-sm" id="name"
                                                        name="name" value="{{ old('name') }}" required>
                                                    <b><small><span
                                                                class="text-danger error-text name_error"></span></small></b>

                                                </div>
                                                <div class="formDatos col-md-6">
                                                    <label for="lastName" class="form-label col-form-label-sm">Last
                                                        Name</label>
                                                    <input type="text" class="form-control form-control-sm" id="lastName"
                                                        name="lastName" value="{{ old('lastName') }}">
                                                    <b><small><span
                                                                class="text-danger error-text lastName_error"></span></small></b>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <h6 class="mb-0 mt-2 me-3">Intake Eligibility</h6>
                                                    <div class="ms-auto">
                                                        <div class="form-check form-switch nav-link mx-2 d-none">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked1">
                                                            <label class="form-check-label" for="flexSwitchCheckChecked1">Is
                                                                this an
                                                                emergency</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mb-1">
                                                <div class="formDatos col-md-12 mt-1">
                                                    <div class="form-check form-check-inline ps-0">
                                                        <label class="form-check-label" for="inlineCheckbox1">Is the
                                                            associate a
                                                            contractor/Temp?</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Employee</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio2" value="option2">
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
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsA" id="inlineRadio3" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsA" id="inlineRadio4" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                    </div>
                                                </div>
                                                <div class="formDatos col-md-12 mt-1">
                                                    <div class="form-check form-check-inline ps-0">
                                                        <label class="form-check-label" for="inlineCheckbox1">Does
                                                            employee's answer
                                                            match the client name on the phone system?</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsB" id="inlineRadio5" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsB" id="inlineRadio6" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                    </div>
                                                </div>
                                                <div class="formDatos col-md-12 mt-1">
                                                    <div class="form-check form-check-inline ps-0">
                                                        <label class="form-check-label" for="inlineCheckbox1">Custom
                                                            question 1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsBB" id="inlineRadio55" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsBB" id="inlineRadio66" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                    </div>
                                                </div>

                                                {{-- <div class="formDatos col-md-6">
                                                <label for="name" class="form-label col-form-label-sm">DOI (Date)</label>
                                                <input type="text" class="form-control form-control-sm" id="name"
                                                    name="name" value="{{ old('name') }}" required>
                                                <b><small><span
                                                            class="text-danger error-text name_error"></span></small></b>

                                            </div>
                                            <div class="formDatos col-md-6">
                                                <label for="name" class="form-label col-form-label-sm">DOI (time)</label>
                                                <input type="text" class="form-control form-control-sm" id="name"
                                                    name="name" value="{{ old('name') }}" required>
                                                <b><small><span
                                                            class="text-danger error-text name_error"></span></small></b>

                                            </div> --}}
                                                <hr class="mb-1">
                                                <div class="d-flex flex-row mt-2">
                                                    <h6 class="mb-0 mt-2 me-3">Nurse Triage Eligibility</h6>
                                                    <div class="d-flex ms-auto">
                                                        <div class="form-check form-switch nav-link mx-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked1">
                                                            <label class="form-check-label" for="flexSwitchCheckChecked1">Is
                                                                it an
                                                                emergency</label>
                                                        </div>
                                                        <div class="form-check form-switch nav-link mx-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked2">
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckChecked2">Death
                                                                report</label>
                                                        </div>
                                                        <div class="form-check form-switch nav-link mx-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked3">
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckChecked3">Report
                                                                Only</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mb-1">
                                                <div class="formDatos col-md-6 mt-1">
                                                    <div class="form-check form-check-inline ps-0 me-1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Medical
                                                            Treatment Sought?</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsC" id="inlineRadio7" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsC" id="inlineRadio8" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                    </div>
                                                </div>
                                                <div class="formDatos col-md-6 mt-1 text-end">
                                                    <div class="form-check form-check-inline ps-0 me-1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Is Employee
                                                            Present?</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsD" id="inlineRadio9" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsD" id="inlineRadio10" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                    </div>
                                                </div>
                                                <div class="formDatos col-md-6 mt-1">
                                                    <div class="form-check form-check-inline ps-0 me-1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Is the
                                                            employee under 18?</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsE" id="inlineRadio11" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsE" id="inlineRadio12" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                    </div>
                                                </div>
                                                <div class="formDatos col-md-6 mt-1 text-end">
                                                    <div class="form-check form-check-inline ps-0 me-1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Parental
                                                            consent?</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsF" id="inlineRadio13" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsF" id="inlineRadio14" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h6>Translation Services</h6>
                                                <hr class="mb-1">
                                                <div class="d-flex flex-row">
                                                    <div class="form-check form-switch nav-link ps-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="flexSwitchCheckChecked">
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckChecked">Translation</label>
                                                    </div>
                                                    <div class="formDatos col-md-4 mt-2">
                                                        <select class="form-select form-select-sm"
                                                            aria-label=".form-select-sm example" disabled>
                                                            <option selected disabled>English</option>
                                                            <option value="1">Spanish</option>
                                                            <option value="3">Other</option>
                                                        </select>

                                                    </div>
                                                    <div class="formDatos col-md-4 ms-1 mt-2">

                                                        <input type="text" class="form-control form-control-sm" id="name"
                                                            name="name" placeholder="Translator name" required>
                                                        <b><small><span
                                                                    class="text-danger error-text name_error"></span></small></b>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-md-5 d-none">
                                    <form id="callInitiation" class="row g-3 justify-content-md-start mb-3" novalidate>
                                        @csrf
                                        <div class="col-md-12" style="padding-right: 15px;">

                                            <div class="row g-1">

                                                <div class="d-flex flex-row">
                                                    <h6 class="mb-0 mt-2 me-3">Accident Description</h6>
                                                </div>
                                                <hr class="mb-1">
                                                <div class="mb-2">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize: none;"></textarea>
                                                </div>

                                                <div class="formDatos col-md-6">
                                                    <label for="name" class="form-label col-form-label-sm">Injury/Illness
                                                        Cause description</label>
                                                    <select class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option selected disabled>Select option...</option>

                                                    </select>

                                                </div>

                                                <div class="formDatos col-md-6">
                                                    <label for="name" class="form-label col-form-label-sm">Injury/Illness
                                                        Nature description</label>
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
                                                    <label for="name" class="form-label col-form-label-sm">What object or
                                                        substance directly harmed the employee?</label>
                                                    <input type="text" class="form-control form-control-sm" id="name"
                                                        name="name" value="{{ old('name') }}" required>
                                                    <b><small><span
                                                                class="text-danger error-text name_error"></span></small></b>

                                                </div>

                                                <div class="formDatos col-md-3">
                                                    <label for="name" class="form-label col-form-label-sm">Weight
                                                        lifter</label>
                                                    <input type="text" class="form-control form-control-sm" id="name"
                                                        name="name" value="{{ old('name') }}" required>
                                                    <b><small><span
                                                                class="text-danger error-text name_error"></span></small></b>

                                                </div>
                                                <div class="formDatos col-md-3">
                                                    <label for="name" class="form-label col-form-label-sm">Height of
                                                        fall</label>
                                                    <input type="text" class="form-control form-control-sm" id="name"
                                                        name="name" value="{{ old('name') }}" required>
                                                    <b><small><span
                                                                class="text-danger error-text name_error"></span></small></b>

                                                </div>
                                                <div class="formDatos col-md-6">
                                                    <label for="name" class="form-label col-form-label-sm">Equipment
                                                        Used</label>
                                                    <input type="text" class="form-control form-control-sm" id="name"
                                                        name="name" value="{{ old('name') }}" required>
                                                    <b><small><span
                                                                class="text-danger error-text name_error"></span></small></b>

                                                </div>

                                                <div class="formDatos col-md-12 mt-1">
                                                    <div class="form-check form-check-inline ps-0 me-1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Self Care
                                                            started by EMT/On-Site First Aid?</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsC" id="inlineRadio7" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsC" id="inlineRadio8" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                    </div>
                                                </div>
                                                <div class="formDatos col-md-12 mt-1">
                                                    <div class="form-check form-check-inline ps-0 me-1">
                                                        <label class="form-check-label" for="inlineCheckbox1">EE wearing
                                                            required protective equipment?</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsC" id="inlineRadio7" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline me-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptionsC" id="inlineRadio8" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                    </div>
                                                </div>

                                                <div class="formDatos col-md-12">
                                                    <label for="name" class="form-label col-form-label-sm">Escalation
                                                        criteria met?</label>
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
                            <div class="d-grid gap-2 col-2 ms-auto mt-0">
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#claimSearch">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="col-md-5">
                    <div class="card shadow">
                        <div class="card-body pt-3">
                            <ul class="nav nav-tabs mb-1" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="aa" data-bs-toggle="tab" data-bs-target="#a"
                                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">New
                                        Claim</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="bb" data-bs-toggle="tab" data-bs-target="#b"
                                        type="button" role="tab" aria-controls="pills-profile"
                                        aria-selected="false">Search Claim</button>
                                </li>
                            </ul>
                           
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="a" role="tabpanel" aria-labelledby="a">
                                    <div class="col-md-8">
                                        <div class="input-group input-group-sm my-3">
                                            <input type="text" class="form-control"
                                                placeholder="Search by account / skill-no / parent account"
                                                aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-primary" type="button"
                                                id="button-addon2">Create</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="b">
                                    <div class="d-flex justify-content-center">
                                    <div class="col-md-11">
                                        <div class="row g-2">
                                            <div class="col-md-12">
                                                <label for="inputEmail4"
                                                    class="form-label col-form-label-sm">Account</label>
                                                <input type="email" class="form-control form-control-sm"
                                                    id="inputEmail4" placeholder="Search by account / skill-no / parent account">
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <label for="inputPassword4"
                                                    class="form-label col-form-label-sm">Confirmation number</label>
                                                <input type="password" class="form-control form-control-sm"
                                                    id="inputPassword4">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputPassword4"
                                                    class="form-label col-form-label-sm">Employee Name</label>
                                                <input type="password" class="form-control form-control-sm"
                                                    id="inputPassword4">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputPassword4"
                                                    class="form-label col-form-label-sm">Status</label>
                                                <input type="password" class="form-control form-control-sm"
                                                    id="inputPassword4">
                                            </div>
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                  <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                      Advanced criteria
                                                    </button>
                                                  </h2>
                                                  <hr>
                                                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <p>List of advanced criteria fields here...</p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="d-grid gap-2 col-3 ms-auto">
                                                <button class="btn btn-primary btn-sm" type="button">Search</button>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            <div class="col-md-6 d-none">
                <div class="card shadow">
                    <div class="card-header fw-bold">
                        Search results
                    </div>
                    <div class="card-body pt-3">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Claim ID</th>
                                    <th scope="col">Account</th>
                                    <th scope="col">Date Reported</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>00001</td>
                                    <td>Walmart</td>
                                    <td>04/08/2022</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>00002</td>
                                    <td>Charter</td>
                                    <td>04/08/2022</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>00003</td>
                                    <td>Allied</td>
                                    <td>04/08/2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Search Claim</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-11">
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label col-form-label-sm">Account</label>
                                    <input type="email" class="form-control form-control-sm" id="inputEmail4"
                                        placeholder="Search by account / skill-no / parent account">
                                </div>

                                <div class="col-md-4">
                                    <label for="inputPassword4" class="form-label col-form-label-sm">Confirmation
                                        number</label>
                                    <input type="password" class="form-control form-control-sm" id="inputPassword4">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword4" class="form-label col-form-label-sm">Employee Name</label>
                                    <input type="password" class="form-control form-control-sm" id="inputPassword4">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword4" class="form-label col-form-label-sm">Status</label>
                                    <input type="password" class="form-control form-control-sm" id="inputPassword4">
                                </div>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                Advanced criteria
                                            </button>
                                        </h2>
                                        <hr>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <p>List of advanced criteria fields here...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="claimSearch" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Search Claim</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-11">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Claim ID</th>
                                        <th scope="col">Account</th>
                                        <th scope="col">Date Reported</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>00001</td>
                                        <td>Walmart</td>
                                        <td>04/08/2022</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>00002</td>
                                        <td>Charter</td>
                                        <td>04/08/2022</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>00003</td>
                                        <td>Allied</td>
                                        <td>04/08/2022</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Search</button>
                </div>
            </div>
        </div>
    </div>
@endsection
