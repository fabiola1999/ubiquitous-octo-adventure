@extends('layouts.user')

@section('content')
            <div class="container-dash">
                <div class="content_head bg-light d-flex justify-content-between">
                    <div>
                        <div class="d-inline-flex text-blue   rounded-top pb-1 pt-2 px-3 ml-4 mt-4" style=" background-color:white;">
                            <div class="d-flex mr-3" >
                                <div class="mr-2 h5" ><i class="fas fa-tachometer-alt" ></i></div>
                                <div>
                                    <div><strong class="h5 font-weight-bold">Dashboard</strong></div>
                                    <div class="font-weight-light">Employee panel</div>
                                </div>
                            </div>
                            <div style="color: #EC0544 !important;">
                                <i class="fas fa-times-circle fa-sm"></i>
                            </div>
                        </div>
                    
                        <div class="d-inline-flex text-white  rounded-top pb-0 pt-2 px-3 ml-4 mt-4" style=" background-color:#012840;  height:58px;">
                            <div class="d-flex mr-3" >
                                <div class="mr-2 h5"><i class="far fa-comments pr-2  border-right text-white"></i></div>
                                <div>
                                    <div><strong class="h5 font-weight-bold">Chat Box</strong></div>
                                    <div class="font-weight-light">    </div>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-times-circle fa-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex m-4" style="color:#606060; font-size:20px;">
                        <i class="fas fa-angle-left m-2" ></i>
                        <i class="fas fa-angle-right m-2"></i>
                    </div>
                </div>

                <div class="content">
                    <div class="d-flex justify-content-end align-items-center py-2 px-4">
                        <span class="font-weight-bold mr-1"><i class="fas fa-home mr-1"></i>Home</span> /  Chat
                    </div>

                <div class="step1 row mx-4">
                    <div class="col-md-4 bg-light  border-right ">
                        <div class="d-flex justify-content-between m-2">
                            <h3 style="color:#04668C;  font-size:15px;  font-weight: bold;"><i class="far fa-comments m-2" style="color:#04668C;"></i>ChatBox</h3>
                            <form class=" form-inline my-2 my-lg-0 m-8 position-relative search"  style="background-color: rgba(0, 0, 0, .1);" >
                                <input class="form-control mr-sm-2 bg-transparent border-0" type="search" placeholder="Search..." aria-label="Search"><button class="fas fa-search border-0 position-absolute" style="right:.5rem; color:#606060; border:0;  background-color: rgba(0, 0, 0, .0);" ></button>
                            </form>

                            
                        </div>
                        <ul class="d-flex flex-column m-0 p-0 w-100">
                        <li>
                        <div class=" row border-bottom py-3 "> 
                            <div class="col-2 p-0">
                                <div class="rounded-circle position-relative bg-transparent d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 3px solid #00305A; padding: 4px;">
                                    <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background: url({{ asset('images/pic1.jpg') }}) no-repeat center; background-size: cover;"> 
                                    </div>
                                </div> 
                                <div class="rounded-circle font-weight-bold position-absolute d-inline-flex justify-content-center align-items-center text-white embed-responsive embed-responsive-1by1" style="width: 20px; font-size:.7rem; top: 0; right: 0; background-color:#1BB13D; z-index: 1;">12</div>
                            </div>

                            <div class="col-10">
                            <div class="row">
                                <div class="d-flex justify-content-between col-12   ">
                                    <h6 class="font-weight-bold " >Tami Ambrad</h6> 
                                    <p  class="pl-4   font-weight-bold" style="font-size:9px; color:#A8A8A8;" > 18-02-2019   &nbsp; 13 : 40 PM</p> 
                                </div>
                                <p class="col-12 d-block font-weight-light">Hey Anna, Could you please... </p>
                                </div> 
                            </div> 
                        </div>
                        <div class=" row border-bottom py-3 "> 
                            <div class="col-2 p-0">
                                <div class="rounded-circle position-relative bg-transparent d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 3px solid #00305A; padding: 4px;">
                                    <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background: url({{ asset('images/pic1.jpg') }}) no-repeat center; background-size: cover;"> 
                                    </div>
                                </div> 
                                <div class="rounded-circle font-weight-bold position-absolute d-inline-flex justify-content-center align-items-center text-white embed-responsive embed-responsive-1by1" style="width: 20px; font-size:.7rem; top: 0; right: 0; background-color:#1BB13D; z-index: 1;">12</div>
                            </div>

                            <div class="col-10">
                            <div class="row ">
                                <div class="d-flex justify-content-between col-12   ">
                                    <h6 class="font-weight-bold " >Tami Ambrad</h6> 
                                    <p  class="pl-4   font-weight-bold" style="font-size:9px; color:#A8A8A8;" > 18-02-2019   &nbsp; 13 : 40 PM</p> 
                                </div>
                                <p class="col-12 d-block font-weight-light">Hey Anna, Could you please... </p>
                                </div> 
                            </div> 
                        </div>
                        <div class=" row border-bottom py-3 "> 
                            <div class="col-2 p-0">
                                <div class="rounded-circle position-relative bg-transparent d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 3px solid #00305A; padding: 4px;">
                                    <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background: url({{ asset('images/pic1.jpg') }}) no-repeat center; background-size: cover;"> 
                                    </div>
                                </div> 
                            </div>

                            <div class="col-10">
                            <div class="row ">
                                <div class="d-flex justify-content-between col-12   ">
                                    <h6 class="font-weight-bold " >Tami Ambrad</h6> 
                                    <p  class="pl-4   font-weight-bold" style="font-size:9px; color:#A8A8A8;" > 18-02-2019   &nbsp; 13 : 40 PM</p> 
                                </div>
                                <p class="col-12 d-block font-weight-light">Hey Anna, Could you please... </p>
                                </div> 
                            </div> 
                        </div>



                        </li>
                    </div>
                    <div class="col-md-4 bg-light border-right ">
                        <div class="bg-primary text-white d-flex align-items-center justify-content-center font-weight-bold py-3 pr-4" id="navbarNavDropdown">
                            <div class="col-2 rounded-circle bg-transparent mr-2 d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 3px solid #FFFFFF; width: 20px; padding: 4px;">
                                <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background: url({{ asset('images/pic1.jpg') }}) no-repeat center; background-size: cover;"> 
                                </div>
                            </div> 
                            <div class="bg-light mr-4 px-4 py-2 text-center font-weight-bold" style="color:#00305A;">John Doe </div> 

                            <div class="d-flex justify-content-end align-items-center">
                                <div class="rounded-circle bg-warning embed-responsive embed-responsive-1by1 mr-1"  style="width: 10px; height: 10px;"></div>
                                Online
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-start p-3" >
                            <div> 
                                <div class="card  text-secondary w-75" style=" background-color:#E9E9E9;">
                                    <div class="px-3 card-img-top font-weight-bold py-2 border-bottom d-flex justify-content-between">
                                        <span>Tami Ambrad</span>
                                        <div>
                                            <i class="far fa-copy " style="color:#0091CA;">
                                            </i> <i class="fas fa-share" style="color:#049D27;"></i>
                                        </div>
                                      

                                    </div>
                                    <div class="card-body font-weight-light">
                                        Hey Anna, Could you please help me with the accountant mobile number ?
                                    </div>   
                                </div>
                                <div class="d-flex justify-content-end w-75" >il y'a 1 heure</div>
                            </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end p-3">
                                <div class="w-75">
                                    <div class="card  text-white" style=" background-color:#049D27;">
                                        <div class="px-3 card-img-top font-weight-bold py-2 border-bottom d-flex justify-content-between">
                                        <span>  <i class="far fa-copy "  style="color:#F7F7F7;">
                                                </i> <i class="fas fa-share"  style="background-color:#025214; color:#F7F7F7;"></i></span>
                                            <div>You </div>
                                        </div>
                                        <div class="card-body font-weight-light">
                                            Hey Anna, Could you please help me with the accountant mobile number ?
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end" >il y'a 1 heure</div>
                                </div>
                            </div>
                        </div>

                        <form class="form-inline my-2 my-lg-0 m-8 position-relative ">
                            <textarea class="form-control mr-1 w-75  border-0"  placeholder="Type your message here" aria-label="text"  style="background-color: rgba(0, 0, 0, .1);"> </textarea>
                            <a href="#"><button type="button" class="btn btn-primary rounded-0"> <i class="fas fa-paper-plane m-1"></i>Send</button></a> 
                        </form>


                    </div>
                    

                    <div class="col-md-4 bg-light ">
                        <div class="border-bottom py-3 text-center ">
                         
                            <div class="d-flex justify-content-end align-items-center text-white bg-success font-weight-bold w-25 py-1 px-3 " >
                                <div class="rounded-circle bg-light embed-responsive embed-responsive-1by1 mr-1"  style="width: 10px; height: 10px;"></div>
                                Online
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="rounded-circle bg-transparent d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 3px solid #04668C; width: 12rem; padding: 10px;">                         
                                    <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background: url({{ asset('images/pic1.jpg') }}) no-repeat center; background-size: cover;"></div> 
                                </div> 
                            </div>
                            <h4 style="font-size: 25px !important; font-weight: bold;">Tami Ambrad</h4> 
                            <div class="d-flex justify-content-center">
                                <div class="col-8 d-flex justify-content-center border-bottom">
                                    <div class="rounded-circle bg-white d-flex justify-content-center align-items-center mt-0 embed-responsive embed-responsive-1by1" style="border: 1px solid #FFFFFF; width: 15px; padding: -5px; transform: translateY(50%);"> 
                                        <div class="rounded-circle  embed-responsive embed-responsive-1by1" style=" background-color:#F5A10E; width: 100%; "></div>
                                     </div>
                                </div>
                            </div> 

                            <div style="font-size:25px;"><i class="fas fa-briefcase mr-2 pr-2 " style="font-size:20px; color:#00305A;"></i><span >Sales manager</span></div>
                            <div  style="font-size:25px;"><i class="fas fa-phone-square mr-2 pr-2 " style="font-size:20px; color:#04668C;"></i><span>+44 2349 93429</span></div>
                            <div class="d-flex justify-content-center align-items-center font-weight-bold pr-4" style="color:#24943D; font-size: 1rem;"><i class="far fa-clock mr-2 pr-2 " style="color:#24943D;  font-size: 1rem;" ></i> clocked In </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center  m-4 text-white">
                        

                            <a href="#"><div class="rounded-circle position-relative mr-2 d-inline-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="width: 40px; height: 40px; font-size:1.5rem; top: -4px; background-color:#EC0544; color:#FFFFFF; ">
                            <i class="fab fa-pinterest-p "  ></i></div></a>
                            <a href="#"><div class="rounded-circle position-relative mr-2 d-inline-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="width: 40px; height: 40px; font-size:1.5rem; top: -4px; background-color:#AF0303; color:#FFFFFF; ">
                            <i class="fab fa-instagram " ></i></div></a>
                            <a href="#"><div class="rounded-circle position-relative mr-2 d-inline-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="width: 40px; height: 40px; font-size:1.5rem; top: -4px; background-color:#0091CA; color:#FFFFFF;">
                            <i class="fab fa-twitter "></i></div></a>
                            <a href="#"><div class="rounded-circle position-relative mr-2 d-inline-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="width: 40px; height: 40px; font-size:1.5rem; top: -4px; background-color:#013CA5; color:#FFFFFF;">
                            <i class="fab fa-facebook-f " ></i></div></a>
                        </div>
                    </div>
                </div>

                @endsection