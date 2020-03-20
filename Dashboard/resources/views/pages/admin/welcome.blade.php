@extends('layouts.admin')

@section('content')
<div class="container-dash">
    <div class="content_head bg-light">
        <div class="d-inline-flex text-white   rounded-top pb-1 pt-2 px-3 ml-4 mt-4" style=" background-color:#012840;">
            <div class="d-flex mr-3" >
                <div class="mr-2 h5"><i class="fas fa-tachometer-alt"></i></div>
                <div>
                    <div><strong class="h5 font-weight-bold">Dashboard</strong></div>
                    <div>Employee panel</div>
                </div>
            </div>
            <div>
                <i class="fas fa-times-circle fa-sm"></i>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="d-flex justify-content-end align-items-center py-2 px-4 m-4">
            <span class="font-weight-bold mr-1"><i class="fas fa-home mr-1"></i>Home</span> / Dashboard
        </div>
        
        <div class="row px-4">
            <div class="col-md-3">
                <div class="card1 rounded-sm text-white h-100">
                    <div class="position-relative">
                        <h4 class="px-3 py-2 pt-3">Weekly Worked Time</h4>
                        <div class="border-bottom" style="border-color:#BFBFBF !important; opacity:0.3;"></div>

                        <div class="rounded-circle bg-transparent position-absolute d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 2px solid #F5A10E; width: 20px; padding: 3px; bottom: 0; left: 1rem; transform: translateY(50%);">
                            <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background-color:#FFFFFF; background-size: cover;"> 
                        </div>
                    </div>
                    </div> 
                        <div class="px-3 pt-2 pb-3 position-relative">
                            <div class="w-75 text-center">
                                <h4 class="m-0 font-weight-lighter">HH    &nbsp; &nbsp;    MM    &nbsp; &nbsp;      SS</h4>
                                <div class="h3 font-weight-bold m-0">25 : 34 : 03</div>
                                <div class="progress mt-1 rounded-0" style="background-color:#012840;">
                                    <div class="progress-bar font-weight-light" role="progressbar" style="Background-color:#F5A10E; width: 45%; font-size:7px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">55% to target</div>
                                </div>
                            </div>
                            <div class="position-absolute text-white-50" style="bottom: 0; right: 1rem; color:#BFBFBF; opacity:0.2;">
                                <i class="fas fa-clock fa-4x"></i>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                <div class="card2 rounded-sm text-white h-100">
                    <div class="position-relative">
                        <h4 class="px-3 py-2 pt-3" >Total Leave Taken</h4> 
                        <div class="border-bottom" style="border-color:#BFBFBF !important; opacity:0.3;"></div>
                        <div class="rounded-circle bg-transparent position-absolute d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 2px solid #FFFFFF; width: 20px; padding: 3px; bottom: 0; left: 1rem; transform: translateY(50%);">
                                <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background-color:#F5A10E; background-size: cover;"> 
                        </div>
                        </div>
                    </div>

                    <div class="px-3 pt-2 pb-3 position-relative">
                        <div class="w-75 text-center">
                            <div class="h3 font-weight-bold m-0">4 Days</div>
                            <p> You have exceeded </p>
                        </div>
                        <div class="position-absolute text-white-50" style="bottom: 0; right: 1rem; color:#D9D9D9; opacity:0.2;">
                            <i class="fas fa-university fa-4x"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card3 rounded-sm text-white h-100 rounded-sm">
                    <div class="position-relative">
                        <h4 class="px-3 py-2 pt-3">Unread Messages</h4>
                        <div class="border-bottom" style="border-color:#BFBFBF !important; opacity:0.35;"></div>
                        <div class="rounded-circle bg-transparent position-absolute d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 2px solid #FFFFFF; width: 20px; padding: 3px; bottom: 0; left: 1rem; transform: translateY(50%);">
                            <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background-color:#F5A10E; background-size: cover;"> 
                        </div>
                    </div>
                </div>
                    <div class="px-3  pt-2 pb-3 position-relative">
                        <div class="w-75 text-center text-center" >
                            <div class="h3 font-weight-bold m-0">4 </div> 
                            <p>Unread Messages </p>
                        </div>
                    </div> 
                    <div class="position-absolute text-white-50 m-2" style="bottom: 0; right: 1rem; color:#00305A; opacity:0.5;">
                            <i class="fas fa-envelope fa-4x"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card4 rounded-sm text-blue h-100">
                    <div class="position-relative">
                        <h4 class="px-3 py-2 pt-3">Clock-in-out Status</h4>
                        <div class="border-bottom" style="border-color:#BFBFBF !important; opacity:0.35;"></div>
                        <div class="rounded-circle bg-transparent position-absolute d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 2px solid #F5A10E; width: 20px; padding: 3px; bottom: 0; left: 1rem; transform: translateY(50%);">
                            <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background-color:#F5A10E; background-size: cover;"> 
                        </div>
                    </div>
                </div>
                    <div class="px-3  pt-2 pb-3 position-relative">
                        <div class="w-75 text-center" text-center>
                            <div class="p m-0 mb-4 font-weight-light">You need to Clock-in </div>  <a href="#">
                            <button type="button" class="btn btn-success font-weight-bold"  style="background-color:#049D27;"><i class="fas fa-sign-in-alt"></i> clock In</button></a>
                        </div>
                    </div> 
                    <div class="position-absolute text-white-40 m-2"  style="bottom: 0; right: 1rem; color:#E9E9E9; opacity:0.75;">
                        <i class="fas fa-stopwatch fa-4x"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="step1 row ml-3 mt-4">
            <div class="col-md-7 bg-light mr-4 shadow">
                <div class="d-flex justify-content-between m-3">
                    <h3 style="color:#04668C;  font-size:15px;  font-weight: bold;"><i class="fas fa-tasks m-2" style="color:#F5A10E;"></i>Tasks board</h3>
                    <form class=" form-inline my-2 my-lg-0 mr-5 position-relative search"  style="background-color: rgba(0, 0, 0, .1);" >
                        <input class="form-control mr-sm-2 bg-transparent border-0 mb-2" type="search" placeholder="Search..." aria-label="Search"><button class="fas fa-search border-0 position-absolute" style="right:.5rem; color:#606060; border:0;  background-color: rgba(0, 0, 0, .0);" ></button>
                    </form>
                </div>
                <hr>

                <table class="table table-bordered ">
                    <thead class="thead" style="background-color:#00305A !important; color:#FFFFFF; font-weigt:bold;">
                        <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col">Author</th>
                        <th scope="col">Date Due</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>2020-02-28</td>
                        <td>CEO</td>
                        <td>2020-03-12</td>
                        <td>urgent</td>
                        <td><a href="#"><button type="button" class="btn btn-danger rounded-0" style="color:#FFFFFF; background-color:#EC0544; font-size:8px;  font-weight: bold; width:80px;"><i class="fas fa-spinner fa-spin"></i>&nbsp;  Pending</button></a></td>
                        <td><a href="#"> <i class="fas fa-eye ml-2" style="color:#049D27;"></i></a><a href="#"> <i class="fas fa-edit ml-2" style="color:#04668C;"></i></a> 
                            <a href="#"><i class="fas fa-trash-alt ml-2" style="color:#EC0544;"></i></a> <a href="#"> <i class="fas fa-download ml-2" style="color:#012840;"></i></a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td>2020-02-28</td>
                        <td>CEO</td>
                        <td>2020-03-12</td>
                        <td>urgent</td>
                        <td><a href="#"><button type="button" class="btn btn-success rounded-0" style="color:#FFFFFF; background-color:#049D27;  font-size:7px;   font-weight: bold; width:80px;"> <i class="fas fa-check-circle"></i>&nbsp; Completed</button></a></td>
                        <td><a href="#"> <i class="fas fa-eye ml-2" style="color:#049D27;"></i></a><a href="#"> <i class="fas fa-edit ml-2" style="color:#04668C;"></i></a> 
                            <a href="#"><i class="fas fa-trash-alt ml-2" style="color:#EC0544;"></i></a> <a href="#"> <i class="fas fa-download ml-2" style="color:#012840;"></i></a>
                        </td>
                        </tr>
                    </tbody>
                </table>
                <a href="#"><p style="color:#015C16; font-weight:bold;">View full task list  |  ></p></a>
            </div>
            <div class="col-md-4 bg-light mr-4  shadow">
                <div class="d-flex justify-content-between border-bottom mb-4 m-4">
                    <h3 style="color:#00305A;  font-size:15px;  font-weight: bold;"><i class="fas fa-tasks m-2" style="color:#F5A10E;"></i>work time traker</h3>

                    <p class="mt-2"><i class="fas fa-square m-1" style="color: #049D27;"></i> Clock-In <i class="fas fa-square m-1" style="color: #EC0544;"></i>Clock-out</p>
                </div>
                <div class="d-flex justify-content-end"> 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Daily</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="step1 row ml-3 mt-4">
            <div class="col-md-7 bg-light mr-4 shadow">
                <div class="d-flex justify-content-between m-4">
                    <h3 style="color:#04668C;  font-size:15px;  font-weight: bold;"><i class="fas fa-envelope m-2" style="color:#EC0544;"></i>Recents messages</h3>

                        <form class=" form-inline my-2 my-lg-0  mr-5 position-relative search"  style="background-color: rgba(0, 0, 0, .1);" >
                            <input class="form-control mr-sm-2 bg-transparent border-0" type="search" placeholder="Search..." aria-label="Search"><button class="fas fa-search border-0 position-absolute" style="right:.5rem; color:#606060; border:0;  background-color: rgba(0, 0, 0, .0);" ></button>
                        </form>
                </div>
                <hr>

            <table class="table table-bordered">
                <thead class="thead" style="background-color:#00305A !important; color:#FFFFFF; font-weigt:bold;">
                    <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Received Date </th>
                    <th scope="col">Sender</th>
                    <th scope="col">Object</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>2020-02-10</td>
                    <td>John Doe</td>
                    <td>Kindly send report...</td>
                    <td>Hello, you are invited...</td>
                    <td><a href="#"> <button type="button" class="btn btn-success rounded-0" style="color:#FFFFFF; background-color:#1BB13D;  font-size: 7px;   font-weight: bold;"><i class="fas fa-eye"></i> &nbsp; View</button></a>
                        <a href="#"><button type="button" class="btn btn-info rounded-0" style="color:#FFFFFF; background-color:#04668C;  font-size: 7px;   font-weight: bold;" ><i class="fas fa-reply"></i> &nbsp; Reply</button></a>

                    </td>
                
                    </tr>
                </tbody>
            </table>
            <a href="#"><p style="color:#015C16; font-weight:bold;">View full task list  |  ></p></a>
        </div> 

        <div class="col-4 bg-light m-4 shadow">
            <div class="border-bottom mb-2 m-4"> 
                 <h3 style="color:#00305A;  font-size:15px;  font-weight: bold;"><i class="fas fa-envelope m-2 " style="color:#015C16;"></i>Employee Report</h3>
            </div>
        <div class="d-flex justify-content-center">
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Daily</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Weekly</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox3">Monthly</label>
            </div>
        </div>

        <div class="form-group">
            <select class="form-control mr-10 " style="width: 70%; background-color:#F5A10E; color:#FFFFFF;" id="exampleFormControlSelect1">
                <option>Select employee...</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        <div class="row m-1">
            <div class="col-2 rounded-circle bg-transparent d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 3px solid #00305A; width: 50px; padding: 4px;">
                <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background: url({{ asset('images/pic1.jpg') }}) no-repeat center; background-size: cover;"> 
                </div>
            </div> 
            <div class="col-10">
                <div class="row">
                    <h4 class="col-12">Tami Ambrad</h4> 
                    <p class="col-12 d-block">Sales manager</p>
                </div> 
            </div> 
        </div>
    </div>
</div>
@endsection