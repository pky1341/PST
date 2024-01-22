<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            position: absolute;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #2E739D center center fixed;
            background-size: cover;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-lg {
            font-size: 1.5rem;
            margin: 10px;
        }

        #loginBtn {
            padding: 1em 2em;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            letter-spacing: 5px;
            text-transform: uppercase;
            cursor: pointer;
            color: #3d4a4d;
            transition: all 1000ms;
            font-size: 15px;
            position: relative;
            overflow: hidden;
            outline: 2px solid #2c9caf;
        }

        #loginBtn:hover {
            color: #ffffff;
            transform: scale(1.1);
            outline: 2px solid #70bdca;
            box-shadow: 4px 5px 17px -4px #268391;
        }

        #loginBtn::before {
            content: "";
            position: absolute;
            left: -50px;
            top: 0;
            width: 0;
            height: 100%;
            background-color: #2c9caf;
            transform: skewX(45deg);
            z-index: -1;
            transition: width 1000ms;
        }

        #loginBtn:hover::before {
            width: 250%;
        }

        #regBtn {
            background: transparent;
            color: #fff;
            font-size: 17px;
            text-transform: uppercase;
            font-weight: 600;
            border: none;
            height: 57px;
            padding: 20px 30px;
            perspective: 30rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.308);
        }

        #regBtn::before {
            content: '';
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border-radius: 10px;
            background: linear-gradient(320deg, rgba(0, 140, 255, 0.678), rgba(128, 0, 128, 0.308));
            z-index: 1;
            transition: background 3s;
        }

        #regBtn:hover::before {
            animation: rotate 1s;
            transition: all .5s;
        }

        @keyframes rotate {
            0% {
                transform: rotateY(180deg);
            }

            100% {
                transform: rotateY(360deg);
            }
        }

        label {
            font-size: small;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="btn-container">
            <button id="loginBtn" class="btn btn-primary btn-lg button">Login</button>
            <button class="btn btn-success btn-lg" id="regBtn" data-toggle="modal"
                data-target="#modalRegisterForm">Register</button>
        </div>
    </div>

    {{-- modal register form --}}
    <div class="modal" id="modalRegisterForm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Register Form</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="routeToContact" data-route="{{ route('store') }}">
                    @csrf
                    <div class="modal-body mx-3">
                        <div class="md-form mb-2 d-flex">
                            <div class="">
                                <label data-error="wrong" data-success="right" for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control validate" required>
                                <span id="nameErr"
                                    style="color: rgb(181, 19, 19);font-size: small; background-color: bisque;"></span>
                            </div>
                            <div class="ms-2">
                                <label data-error="wrong" data-success="right" for="town">Village</label>
                                <input type="text" id="village" name="village" class="form-control validate" required>
                                <span id="villageErr"
                                    style="color: rgb(181, 19, 19);font-size: small; background-color: bisque; "></span>
                            </div>
                        </div>
                        <div class="md-form mb-2 d-flex">
                            <div>
                                <label data-error="wrong" data-success="right" for="tehsil">Tehsil</label>
                                <input type="text" id="tehsil" name="tehsil" class="form-control validate" required>
                                <span id="tehsilErr"
                                    style="color: rgb(181, 19, 19);font-size: small; background-color: bisque;"></span>
                            </div>
                            <div class="ms-2">
                                <label data-error="wrong" data-success="right" for="dis">District</label>
                                <input type="text" id="dis" name="dis" class="form-control validate" required>
                                <span id="disErr"
                                    style="color: rgb(181, 19, 19);font-size: small; background-color: bisque;"></span>
                            </div>
                        </div>
                        <div class="md-form mb-2 d-flex">
                            <div class="">
                                <label data-error="wrong" data-success="right" for="state">State</label>
                                <input type="text" id="state" name="state" class="form-control validate" required>
                                <span id="stateErr"
                                    style="color: rgb(181, 19, 19);font-size: small; background-color: bisque;"></span>
                            </div>
                            <div class="ms-2">
                                <label data-error="wrong" data-success="right" for="dob">Date Of Birth</label>
                                <input type="date" id="dob" name="dob" class="form-control validate" required>
                                <span id="dobErr"
                                    style="color: rgb(181, 19, 19);font-size: small; background-color: bisque;"></span>
                            </div>
                        </div>
                        <div class="md-form mb-2 d-flex">
                            <div>
                                <label data-error="wrong" data-success="right" for="bloodgroup">Blood</label>
                                <select id="bloodgroup" name="bloodgroup" class="form-control validate">
                                    <option value="">Select Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                                <span id="bloodErr"
                                    style="color: rgb(181, 19, 19);font-size: small;background-color: bisque;"></span>
                            </div>
                            <div class="ms-2">
                                <label data-error="wrong" data-success="right" for="edu">Highest Education</label>
                                <input type="text" id="edu" name="edu" class="form-control validate" required>
                                <span id="eduErr"
                                    style="color: rgb(181, 19, 19);font-size: small;background-color: bisque;"></span>
                            </div>
                        </div>
                        <div class="md-form mb-2 d-flex">
                            <div>
                                <label data-error="wrong" data-success="right" for="job">JOB</label>
                                <select id="job" name="job" class="form-control validate">
                                    <option value="">Select Jobs Type</option>
                                    <option value="GOVERNMENT JOB">GOVERNMENT JOB</option>
                                    <option value="PRIVATE JOB">PRIVATE JOB</option>
                                    <option value="BUSINESS">BUSINESS</option>
                                    <option value="LABOUR">LABOUR</option>
                                </select>
                                <span id="jobErr"
                                    style="color: rgb(181, 19, 19);font-size: small; background-color: bisque;"></span>
                            </div>
                            <div class="ms-2">
                                <label data-error="wrong" data-success="right" for="rel">RELIGION</label>
                                <input type="text" id="rel" name="rel" class="form-control validate" required>
                                <span id="relErr"
                                    style="color: rgb(181, 19, 19);font-size: small; background-color: bisque;"></span>
                            </div>
                        </div>
                        <div class="md-form mb-2 d-flex">
                            <div>
                                <label data-error="wrong" data-success="right" for="cast">CAST</label>
                                <input type="text" id="cast" name="cast" class="form-control validate" required>
                                <span id="castErr"
                                    style="color: rgb(181, 19, 19);font-size: small; background-color: bisque;"></span>
                            </div>
                            <div class="ms-2">
                                <label data-error="wrong" data-success="right" for="subcst">SUB CAST</label>
                                <input type="text" id="subcast" name="subcast" class="form-control validate" required>
                                <span id="subcastErr"
                                    style="color: rgb(181, 19, 19);font-size: small; background-color: bisque;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-deep-orange" style="background-color: aqua;" type="button" id="submit"
                            name="submit">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal register form --}}

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/js/one.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{ asset('assets/js/validationReg.js') }}"></script>

</html>