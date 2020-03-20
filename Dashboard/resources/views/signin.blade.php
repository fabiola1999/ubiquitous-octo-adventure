
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EMP TIME</title>
                <!-- css -->
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body style="background-color:#012840;">
    <div class="w-100">
        <header>
            <nav > 

                {{-- <ul class="nav">
                    <li class="nav-item"> --}}
                        <div class="d-flex justify-content-between">
                            <div class="text-white d-flex align-items-center justify-content-center py-3 pr-4 ml-5" id="navbarNavDropdown">
                                <div class="mr-2 h6" style="color:#F5A10E;"> <i class="far fa-clock fa-2x mr-2"></i></div>
                                <div>
                                    <div><strong class="h5 font-weight-bold">EMP TIME</strong></div>
                                    <div class="text-white font-weight-light"> Employee Attendance Management System v.0.1</div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-end text-white" id="navbarNavDropdown">
                                <div class="mr-2"> 
                                    <div><strong class="h6 font-weight-bold" style="color:#A8A8A8;">DATE : Monday 21 Jan 2020</strong></div>
                                    <div class="ml-5"><strong class="h6 font-weight-bold"><i class="far  fa-clock mr-2" style="color:#F5A10E;"></i>Time: 07:54:34</strong></div>
                                </div>
                            </div>
                        </div>
                    {{-- </li>
                   
                </ul> --}}
                <div class="border-bottom" style="border-color: #F5A10E !important; opacity:0.5;"> </div>
            </nav>
        </header>
        <main class="container-fluid">
            <div class="row">
                <div class="col-6 ">
                    <div class="signin d-flex justify-content-center m-4 pt-4">
                        
                        <form>
                            <h4 style="font-size: 25px ; font-weight: bold; color:#FFFFFF;">Don't Be late ! Sign In</h4> 
                            <div class="mb-4">
                                <div class="border-bottom" style=" opacity:0.25;"></div>     
                                <div class="rounded-circle  embed-responsive embed-responsive-1by1 mr-1"  style=" Background-color:#F5A10E; width: 15px; height: 15px;  bottom: 0; left: 6rem; transform: translateY(-50%);"></div>   
                            </div>
                            <div class="form-group" style="width: 522px; height: 84px !important;">
                                <div class="input-group" style="background-color: rgba(0, 0, 0, .2);" >
                                    <div class="input-group-prepend border-right" style="border-color: #FFFFFF; opacity:0.5;   width: 60px; height: 65px !important;" >
                                        <div class="input-group-text bg-transparent text-light border-0">
                                            <i class="fas fa-user mb-2 ml-2" style="font-size:20px;"></i>
                                        </div>
                                    </div>
                                    <input type="email" class="form-control bg-transparent text-light border-0 m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address...">  
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group" style="background-color: rgba(0, 0, 0, .2);">
                                    <div class="input-group-prepend border-right" style="border-color: #FFFFFF; opacity:0.5;    width: 60px; height: 65px !important;">
                                        <div class="input-group-text bg-transparent text-light border-0">
                                            <i class="fas fa-key m-2" style="font-size:20px;"></i>
                                        </div>
                                    </div>
                                    <input type="password" class="form-control bg-transparent text-light border-0 m-2" id="exampleInputPassword1"  placeholder="Password">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end text-white">
                                <p><i class="fas fa-lock-open"></i> Forgot password  ?<span style="color:#F5A10E; font-weight:bold;"> Click here</span></p>
                            </div>
                            <button type="submit"  style="width: 521px; height: 84px; background-color:#F5A10E; color:#FFFFFF; font-size:25px; font-weight:bold; border:0"> <i class="fas fa-sign-in-alt m-2"></i>Sign In</button>
                        </form>
                    </div>

                

                
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center pt-5">
                        <div class="rounded-circle bg-transparent d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1 ml-2" style="border: 5px solid #F5A10E; width: 12rem; padding: 10px; transform: translateX(-115%);">                         
                            <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background: url({{ asset('images/business-man-late-meeting.jpg') }}) no-repeat center; background-size: cover;"></div> 
                        </div> 
                    </div>
                    <div class="d-flex justify-content-center pb-5">
                        <div class="rounded-circle bg-transparent d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1 m-2" style="border: 8px solid #FFFFFF; width: 16rem; padding: 13px;  transform: translateY(-50%);">                         
                            <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background: url({{ asset('images/businessman_late.jpg') }}) no-repeat center; background-size: cover;"></div> 
                        </div> 
                    </div>
                </div>
            </div>
        </main>
        <footer class="pt-5 pb-4 px-3 text-white  position-absolute w-100 d-flex align-items-end justify-content-center" style="background-color:rgba(0, 0, 0, .3); font-size:15px; bottom: 0;">
            <div class="border-top bg-warning" style="border-color: #F5A10E !important; opacity:0.5;"> </div>
            <div class="d-flex align-items-end justify-content-center"> 
                <div>
                    <div class="d-flex align-items-center justify-content-cente font-weight-bold" id="navbarNavDropdown" style="color:#A8A8A8;">
                        <i class="far fa-clock fa-2x mr-2" style="color:#F5A10E; font-size:20px;"></i>EMP TIME
                    </div>
                    <div>
                        <span style="color:#F5A10E; font-weight:bold;"> &copy;  </span> Copyright 2020 <strong> EMP TIME Employee Attendance Management System.</strong> All Rights Reserved.  by <span style="color:#F5A10E;"> <a href=# class="font-weight-bold text-reset text-decoration-none"> Briluce Services.</a> </span>
                    </div>
                </div>
        </div>
        </footer>
    </div>




    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>
