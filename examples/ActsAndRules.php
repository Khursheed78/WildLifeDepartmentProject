
    
<?php
 require 'Header.php';

?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-transparent navbar-expand-lg  navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand navbar-brand-sucess" href="javascript:;"><h4><u><b>GOVERNMENT OF KHYBER PAKHTUNKHWA WILDLIFE DEPARTMENT</u></b></h4></a>
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
           <!--  <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div> -->
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Acts And Rules</h4>
                  <p class="card-category">Upload your file below</p>
                </div>
                <div class="card-body">
                  <form action="#" method="post" onsubmit="return Validation()">
                  
                    

                      

                    

                    <div class="row">
                      <div class=" col-xs-12 col-sm-6 col-lg-8">
                          <div class="custom-file">
                                             <input   type="file" class="custom-file-input" id="s1">
                                             <label class="custom-file-label" for="customFile">Choose file</label>
                                                    <span id="n1" class="text-danger"></span>
                                              </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>

                </div>
              </div>
                <!-- Acts And rules table start-->
          <div class="row">
            
            <div class=" col-lg-12">
              <div class="card card-plain">
                <div class="card-header card-header-success">
                  <h4 class="card-title mt-0"> Acts And Rules</h4>
                  <p class="card-category"> You can See All Acts and Rules Here</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                        Act Name
                        </th>
                       
                        <th>
                         Action
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                           Crane Rules 1984
                          </td>
                           <td>
                            <span class="material-icons">
                            delete
                          </span>
                            <span class="material-icons">
                            edit
                          </span>
                          <span class="material-icons">
                           visibility
                          </span>
                          </td>
                          
                        </tr>
                         <tr>
                          <td>
                            2
                          </td>
                          <td>
                          Falcon Rules 1980
                          </td>
                           <td>
                            <span class="material-icons">
                            delete
                          </span>
                            <span class="material-icons">
                            edit
                          </span>
                          <span class="material-icons">
                          visibility
                          </span>
                          </td>
                          
                        </tr>
                         <tr>
                          <td>
                            3
                          </td>
                          <td>
                           National Park Draft Rules
                          </td>
                           <td>
                           <span class="material-icons">
                            delete
                          </span>
                            <span class="material-icons">
                            edit
                          </span>
                          <span class="material-icons">
                          visibility
                          </span>
                          </td>
                          
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End-->
            </div>

            <!-- <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="../assets/img/hunting-for-beginners-lead_h.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">WildLife</h6>
                  <h4 class="card-title">Application mentioning Wildlife Species to be imported / exported, along with:</h4>
                  <p class="card-description">
                    
Copy of CNIC
8 Passport Size Photographs
Further Action by Department / NCCW, Islamabad in case of International Import / Export
Registration with NCCW, Islamabad in case of Commercial Import / Export (more than 10   animals / birds)
Registration with Chamber of Commerce for Commercial Import / Export
NTN Certificate
Deposit Prescribed Fee in State Bank of  Pakistan after Approval
                  </p>
                  
                </div>
              </div>
            </div>
          </div> -->
        
       </div>
     <?php

     require 'footer.php';
     

     ?>