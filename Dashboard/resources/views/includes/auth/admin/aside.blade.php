<aside class="min-vh-100 nav_dash" style="flex: 0 0 250px; height: 1250px;">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="d-flex flex-column m-0 p-0 w-100">
            <div class="bg-white text-dark d-flex align-items-center justify-content-center font-weight-bold py-3 pr-4" id="navbarNavDropdown">
                <i class="far fa-clock fa-2x mr-2"></i>EMP TIME
            </div>
            <li>
                <div class="d-flex justify-content-end  px-3 py-2" style="font-size:20px;"><i class="fas fa-edit"></i></div>
                <div class=" pb-0 text-center">
                    <div class="d-flex justify-content-center">
                        <div class="rounded-circle bg-transparent d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 3px solid #F5A10E; width: 90px; padding: 4px;">                         
                            <div class="rounded-circle embed-responsive embed-responsive-1by1" style="background: url({{ asset('images/pic1.jpg') }}) no-repeat center; background-size: cover;"></div> 
                        </div> 
                    </div>
                    <h4  class="mb-0" style="font-size: 25px !important; font-weight: bold;">Tami Ambrad</h4>
                    <div class="d-flex justify-content-center">
                        <div class="col-8 d-flex justify-content-center border-bottom">
                            <div class="rounded-circle bg-white d-flex justify-content-center align-items-center embed-responsive embed-responsive-1by1" style="border: 1px solid #FFFFFF; width: 15px; padding: 0px; transform: translateY(50%);"> 
                                <div class="rounded-circle  embed-responsive embed-responsive-1by1" style=" background-color:#F5A10E; width: 100%; "></div>
                             </div>
                        </div>
                    </div> 
                    
                    <div class="m-2 font-weight-light" style="font-size:18px;color:#BFBFBF; !important;">Sales manager</div>
                    <div class="d-flex justify-content-center">
                        <div><i class="fas fa-briefcase mr-1 pr-2 text-white"></i></div>
                        <div class="d-flex position-relative justify-content-center align-items-center border-left mr-1">
                            <div class="rounded-circle bg-warning embed-responsive embed-responsive-1by1" style=" width: 6px; bottom: 0; transform: translateX(-50%);"></div>
                        </div>
                        <span style="color:#F5A10E;">Hired on 26 - 02 - 2019</span>
                    </div> 
    
    
                    <div class="d-flex justify-content-center align-items-center pr-4">
                        <div class="rounded-circle  embed-responsive embed-responsive-1by1 mr-1"  style=" width: 15px; height: 15px; background-color:#BEDB39 !important;"></div>
                        <span style="color:#96CA2D !important;">Online</span> 
                    </div>
                    <div class="border-bottom mt-2" style="border-color:#F5A10E !important; opacity:0.25;"></div>
                </div>  
            </li>
            <li class="nav-item active mt-5">
             <a class="nav-link pl-4 active" href="#"  ><i class="fas fa-tachometer-alt fa-fw mr-2"></i> Dashboard</a> 
            </li>
            <li class="nav-item"> 
            <a class="nav-link pl-4" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="multiCollapseEmployee" href="#multiCollapseEmployee"><i class="fas fa-fw mr-2  fa-user-tie"></i> Employees<i class="fas fa-fw mr-2 ml-2 fa-angle-right"></i></a> 
            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseEmployee">
                    <ul class=" navbar-nav d-flex align-items-justify justify-content-end flex-column">
                        <li class="nav-item active"> add Employee</li>
                        <li class="nav-item "> List Employee</li>
                        <li class="nav-item "> Edit Employee</li>
                    </ul>
                    </div>
                </div>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link pl-4" href="#"><i class="fas fa-fw mr-2 fa-envelope"></i> Notifications</a> 
            </li>
            <li class="nav-item">  
                <div class="d-flex">  
                    <a class="nav-link pl-4" href="#">
                        <i class="fa fa-sms fa-fw mr-2"></i> 
                        Chat
                        <div class="rounded-circle position-relative d-inline-flex justify-content-center align-items-center  align-items-center embed-responsive embed-responsive-1by1" style="width: 15px; height: 15px; font-size: .5rem; top: -4px; background-color:#1BB13D; ">12</div>
                    </a>
                </div>
            </li>
            <li class="nav-item">   
                <a class="nav-link pl-4" href="#"><i class="fas fa-fw mr-2 fa-user-friends"></i> User List</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link pl-4" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="multiCollapseCalendar" href="#multiCollapseCalendar"><i class="fas fa-fw mr-2 fa-calendar"></i> Calendar<i class="fas fa-fw mr-2 ml-2 fa-angle-right"></i></a> 
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseCalendar">
                        <ul class=" navbar-nav d-flex  justify-content-end flex-column">
                            <li class="nav-item active"> add Calendar</li>
                            <li class="nav-item "> List Calendar</li>
                            <li class="nav-item "> Edit Calendar</li>
                        </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item"> 
                <div class="d-flex">
                    <a class="nav-link pl-4" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="multiCollapseTasks" href="#multiCollapseTasks">
                        <i class="fas fa-fw mr-2 fa-tasks"></i> Tasks
                        <div class="rounded-circle position-relative d-inline-flex justify-content-center align-items-center  align-items-center embed-responsive embed-responsive-1by1" style="width: 15px; height: 15px; font-size: .5rem; top: -4px; background-color:#EC0544; ">12</div>
                        <i class="fas fa-fw mr-2 ml-2 fa-angle-right"></i>
                    </a> 
                </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseTasks">
                                <ul class=" navbar-nav d-flex  justify-content-end flex-column">
                                    <li class="nav-item active"> add Tasks</li>
                                    <li class="nav-item "> List Tasks</li>
                                    <li class="nav-item "> Edit Tasks</li>
                                </ul>
                            </div>
                        </div>
                    </div>    
            </li>


            <li class="nav-item">
                <a class="nav-link pl-4" href="#"><i class="fas fa-fw mr-2 fa-cog"></i> Settings</a>
            </li>

        </ul>

        </div>
    </nav>
</aside>