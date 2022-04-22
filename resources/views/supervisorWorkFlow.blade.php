@extends('layout.template')

@section('content')
<style>
    <style>
    .nav-tabs .nav-item.show .nav-link,
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
</style>


    <div class="main">


        <div class="container-fluid workArea">






            <div class="row d-flex justify-content-start ms-3 mt-3">
                <div class="col-md-auto">
                    <div class="card shadow">
                        <div class="card-body pt-3">
                            <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="aa" data-bs-toggle="pill"
                                        data-bs-target="#a" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true" onclick="checkFocus()">Supervisor Intake
                                        <span id="focusOption"
                                            class="focusOption position-absolute top-0 start-50 translate-middle p-2 bg-success border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active position-relative" id="aa" data-bs-toggle="pill"
                                        data-bs-target="#a" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true" onclick="checkFocus()">Basic Intake
                                        <span id="focusOption"
                                            class="focusOption position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="bb" data-bs-toggle="pill"
                                        data-bs-target="#b" type="button" role="tab" aria-controls="pills-profile"
                                        aria-selected="false" onclick="checkFocus()">Medical Questions
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-warning border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="cc" data-bs-toggle="pill" data-bs-target="#c"
                                        type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false" onclick="checkFocus()">ABCD Assessment
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-success border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="dd" data-bs-toggle="pill" data-bs-target="#d"
                                        type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false" onclick="checkFocus()">Primary Assessment
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="ee" data-bs-toggle="pill" data-bs-target="#e"
                                        type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false" onclick="checkFocus()">Secondary Assessment
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="ff" data-bs-toggle="pill" data-bs-target="#f"
                                        type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false" onclick="checkFocus()">Plan
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="ff" data-bs-toggle="pill" data-bs-target="#f"
                                        type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false" onclick="checkFocus()">Extenden Intake
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative" id="gg" data-bs-toggle="pill" data-bs-target="#g"
                                        type="button" role="tab" aria-controls="pills-contact"
                                        aria-selected="false" onclick="checkFocus()">Call Completion Confirmation
                                        <span
                                            class="focusOption  position-absolute top-0 start-50 translate-middle p-2 bg-danger border border-light border-3 rounded-circle">

                                        </span>
                                    </button>
                                </li>
                            </ul>
                            <hr class="mt-2">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="a" role="tabpanel" aria-labelledby="a">a
                                </div>
                                <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="b">b</div>
                                <div class="tab-pane fade" id="c" role="tabpanel" aria-labelledby="c">c</div>
                                <div class="tab-pane fade" id="d" role="tabpanel" aria-labelledby="d">d</div>
                                <div class="tab-pane fade" id="e" role="tabpanel" aria-labelledby="e">e</div>
                                <div class="tab-pane fade" id="f" role="tabpanel" aria-labelledby="f">f</div>
                                <div class="tab-pane fade" id="g" role="tabpanel" aria-labelledby="g">g</div>
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