<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>NFR 2.0</title>
    <style>
        #mydiv {
            position: absolute;
            right: 5px;
            bottom: 5px;
            width: 300px;
            height: 300px;
            z-index: 9;
            text-align: center;
            border: 1px solid #d3d3d3;
        }

        #mydivheader {
            padding: 5px;
            cursor: move;
            z-index: 10;
            background-color: #0047BA;
            color: #fff;
        }

        #floatingTextarea2 {
            height: 255px;
            resize: none;
        }

        #floatingTextarea3 {
            height: 480px;
            resize: none;
        }

        #instructions {
            position: absolute;
            right: 5px;
            top: 90px;
            width: 300px;
            height: 525px;
            z-index: 9;
            text-align: center;
            border: 1px solid #d3d3d3;
        }

        #instructionsHeader {
            padding: 5px;
            cursor: move;
            z-index: 10;
            background-color: #0047BA;
            color: #fff;
        }

    </style>

</head>

<body>

    <div class="main">

        <nav class="navbar navbar-expand-lg navbar-dark p-0" style="background-color: #274463;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">New Claim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light py-0" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        {{-- <div class="d-flex justify-content-center ms-5">
                            <li class="nav-item">
                                <div class="form-check form-switch nav-link mx-4">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Is this an
                                        emergency</label>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="form-check form-switch nav-link mx-4">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Death
                                        report</label>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="form-check form-switch nav-link mx-4">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Report only matter</label>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="form-check form-switch nav-link mx-4">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Translator</label>
                                </div>
                            </li>
                        </div> --}}
                        <div class="d-flex justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link snav mx-3" aria-current="page" href="#"><span
                                        class="fw-bold">Caller
                                        name:</span> Pablo Rodas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link snav mx-3" href="#"><span class="fw-bold">Phone:</span>
                                    123456789</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link snav mx-3" href="#"><span class="fw-bold">Injured
                                        Worker:</span> Jose
                                    Lopez</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link snav mx-3" href="#" tabindex="-1" aria-disabled="true"><span
                                        class="fw-bold">Contact ID: </span>123456789</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link snav mx-3" href="#" tabindex="-1" aria-disabled="true"><span
                                        class="fw-bold">Account Name: </span>Walmart</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid workArea">

            <div id="mydiv" class="shadow">
                <div id="mydivheader">Call Notes</div>
                <div class="form-floating p-1">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style=""></textarea>
                    <label for="floatingTextarea2">Notes...</label>
                </div>
            </div>

            <div id="instructions" class="shadow">
                <div id="instructionsHeader">Handling Instructions</div>
                <div class="form-floating p-1">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea3" style=""></textarea>
                    <label for="floatingTextarea3">Instructions...</label>
                </div>
            </div>


            @yield('content')



        </div>

    </div>

    <script>
        //Make the DIV element draggagle:
        dragElement(document.getElementById("mydiv"));

        function dragElement(elmnt) {
            var pos1 = 0,
                pos2 = 0,
                pos3 = 0,
                pos4 = 0;
            if (document.getElementById(elmnt.id + "header")) {
                /* if present, the header is where you move the DIV from:*/
                document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
            } else {
                /* otherwise, move the DIV from anywhere inside the DIV:*/
                elmnt.onmousedown = dragMouseDown;
            }

            function dragMouseDown(e) {
                e = e || window.event;
                e.preventDefault();
                // get the mouse cursor position at startup:
                pos3 = e.clientX;
                pos4 = e.clientY;
                document.onmouseup = closeDragElement;
                // call a function whenever the cursor moves:
                document.onmousemove = elementDrag;
            }

            function elementDrag(e) {
                e = e || window.event;
                e.preventDefault();
                // calculate the new cursor position:
                pos1 = pos3 - e.clientX;
                pos2 = pos4 - e.clientY;
                pos3 = e.clientX;
                pos4 = e.clientY;
                // set the element's new position:
                elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
                elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
            }

            function closeDragElement() {
                /* stop moving when mouse button is released:*/
                document.onmouseup = null;
                document.onmousemove = null;
            }
        }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
