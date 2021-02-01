<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================



=========================================================
 -->

   <?php
     require 'Header.php';    
   ?>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"><h4><u><b>GOVERNMENT OF KHYBER PAKHTUNKHWA WILDLIFE DEPARTMENT</u></b><h4></a>
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
          </div>
        </div> -->
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">EMPLOYEE PERSONAL INFORMATION</h4>
                  <p class="card-category">PUT COMPLETE INFORMATIN</p>
                </div>
                <div class="card-body">
                  <form action="#" onsubmit="return Validation()" method="post">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Employee Number</label>
                          <input type="text" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">CNIC Number</label>
                          <input id="s1" type="text" class="form-control" onblur="card(this)" >

                           <span id="n1" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input  id="s2" type="email" class="form-control">

                           <span id="n2" class="text-danger"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input id="s3" type="text" class="form-control">

                           <span id="n3" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input id="s4" type="text" class="form-control">

                           <span id="n4" class="text-danger"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input id="s5" type="text" class="form-control">

                           <span id="n5" class="text-danger"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input id="s6" type="text" class="form-control">

                           <span id="n6" class="text-danger"></span>
                        </div>
                      </div>
                    
           
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input  id="s8" type="text" class="form-control">

                           <span id="n8" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">BPS</label>
                          <input id="s7" type="text" class="form-control">

                           <span id="n7" class="text-danger"></span>
                        </div>
                      </div>

                    </div>
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                          <label class="bmd-label-floating">Designation</label>
                          <input id="s20" type="text" class="form-control">

                           <span id="n20" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile Number</label>
                          <input id="s9" type="text" class="form-control" id="phone-number" name="phone" onblur="mask(this)">

                           <span id="n9" class="text-danger"></span>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                     
                   <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">office Number</label>
                          <input id="s10" type="text" class="form-control" name="phone1" onblur="mymask(this)">

                           <span id="n10" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alternate Number</label>
                          <input id="s11" type="text" class="form-control" onblur="mask(this)">

                           <span id="n11" class="text-danger"></span>
                        </div>
                      </div>

                    </div>
                      <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label >Date of Birth</label>
                          <input id="s12" type="Date" class="form-control">

                           <span id="n12" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Religion</label>
                          <input id="s13" type="text" class="form-control">

                           <span id="n13" class="text-danger"></span>
                        </div>
                      </div>
                    

                      <div class="col-md-4" style="margin-top: -11px;">
                        <div class="form-group">
                          <label class="bmd-label-floating">Gender</label>
                        
                          <br>
                           <input type="radio" name="gender" checked value="male"> Male
                           <input type="radio" name="gender" value="female"> Female
                           <input type="radio" name="gender" value="other"> Other

                        </div>
                      </div>
                      </div>
                      <div class="row">
                <!--       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Province</label>
                          <input id="s15" type="text" class="form-control">

                           <span id="n15" class="text-danger"></span>
                        </div>
                      </div> -->
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Domicile District</label>
                          <input id="s16" type="text" class="form-control">

                           <span id="n16" class="text-danger"></span>
                        </div>
                      </div>
                    

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Insurance Policy</label>
                          <input id="s17" type="text" class="form-control">

                           <span id="n17" class="text-danger"></span>
                        </div>
                      </div>
                         <div class="col-md-4" style="margin-top: -15px">
                        <div class="form-group">
                          <label class="bmd-label-floating">Marital Status</label>
                          <br>
                           <input type="radio" name="MS" checked value="Married"> Married
                           <input type="radio" name="MS" value="Unmarried"> Unmarried
                          
                        </div>
                      </div>
                      </div>
                      <div class="row">
                   
                      <div class="col-md-4">
                        <label class="control-label mb-1">Employee Position</label>
                         <select name="select" id="select" class="form-control">
                        <option value="1">Please Select Position</option>
                         <option value="1">Chief Conservator WildLife</option>
                         <option value="2">Conservator WildLife</option>
                        <option value="3">DFO WildLife</option>
                        <option value="4">SDWO WildLife</option>
                        <option value="5">Veterinary Doctor/Officer</option>
                        <option value="6">PMO</option>
                        <option value="7">GIS Specialist</option>
                        <option value="8">Superintendent</option>
                        <option value="9">Statistical Investigator</option>
                        <option value="10">Senior Scale Stenographer</option>
                        <option value="11">Range Officer Wildlife</option>
                        <option value="12">Assistant</option>
                        <option value="13">Tourism Coordinator</option>

                        <option value="14">Social Organizer</option>
                        <option value="15">Computer Operator</option>
                        <option value="16">Senior Clerk</option>
                        <option value="17">Junior Scale Stenographer</option>
                        <option value="18">Camera Man /Photographer</option>
                        <option value="19">Taxidermist</option>
                        <option value="20">Sub-Engg(Civil)</option>
                        <option value="21">Sub-Engg(Electric)</option>
                        <option value="22">Junior Clerk</option>
                        <option value="23">Deputy Ranger Wildlife</option>
                        <option value="24">Veterinay Assistant</option>
                        <option value="25">Stock Assistant</option>
                        <option value="26">Pheasant Breading Assistant</option>
                        <option value="27">Field Assistant</option>
                        <option value="28">Head Watcher</option>
                        <option value="29">Draftsman</option>
                        <option value="30">Wildlife Watcher</option>
                        <option value="31">Veterinary Assistant</option>
                        <option value="32">Painter</option>
                        <option value="33">Electrician</option>
                        <option value="34">Masson</option>
                        <option value="35">Carpenter</option>
                        <option value="36">Watch & Ward Assistant</option>
                        <option value="37">Driver</option>
                        <option value="38">Receptionist</option>
                        <option value="39">Security Gard(Male) </option>
                        <option value="40">Security Gard(Female) </option>
                        <option value="41">Animal Attandant </option>
                        <option value="42">Boatman </option>
                        <option value="43">Sweeper </option>
                        <option value="44">Naib Qasid </option>
                        <option value="45">Mali </option>
                        <option value="46">Dak Runner </option>
                        <option value="47">Crane keeper </option>
                        <option value="48">Cook</option>
                        <option value="49">WildLife Chowkidar</option>
                        <option value="50">Chowkidar</option>
                        <option value="51">Plumber/Sanitary Worker</option>
                        <option value="52">Tube Well Operator</option>
                        <option value="53">Carpenter/Welder</option>
                        <option value="54">Animal Keeper/Attendant</option>
                        <option value="55">Bird Keeper/Attendant</option>
                        <option value="56">Helper to Texi Dermist</option>
                        <option value="57">Snake Keeper/Sapera</option>
                        </select>                    
                        </div>
                    

                      <div class="col-md-4 mt-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Project</label>
                          <input  id="s14" type="text" class="form-control">
                           <span id="n14" class="text-danger"></span>
                        </div>
                      </div>
                      </div>
                      

                      

                    

                    <button type="submit" class="btn btn-success pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           <!--  <div class="col-md-4">
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
                  <a href="javascript:;" class="btn btn-success btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <footer class="footer">
       <!--  <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li> -->
            </ul>
          </nav>
          <div class="">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, design <!-- with <i class="material-icons">favorite</i> --> by <em>HAMZA</em>
            <!-- <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web. -->
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
       
    </div>
  </div> -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script type="text/javascript">
    function mask(f){ 
tel=''; 
var val =f.value.split(''); 
for(var i=0;i<val.length;i++){ 
if(i==0){val[i]='('+val[i]} 
if(i==3){val[i]=val[i]+')-'} 
 
tel=tel+val[i] 
} 
f.value=tel; 
} 
//Mask for phone number

function mymask(f){ 
tel=''; 
var val =f.value.split(''); 
for(var i=0;i<val.length;i++){ 
if(i==0){val[i]='('+val[i]} 
if(i==2){val[i]=val[i]+')-'} 
 
tel=tel+val[i] 
} 
f.value=tel; 
} 
//Mask for CNIC number

function card(f){ 
tel=''; 
var val =f.value.split(''); 
for(var i=0;i<val.length;i++){ 
if(i==4){val[i]='-'+val[i]} 
if(i==11){val[i]=val[i]+'-'} 
 
tel=tel+val[i] 
} 
f.value=tel; 
} 


//Empty Field Validations

 function Validation()
    {

      var u1 = document.getElementById('s1').value;
      var u2 = document.getElementById('s2').value;
      var u3 = document.getElementById('s3').value;
      var u4 = document.getElementById('s4').value;
      var u5 = document.getElementById('s5').value;
      var u6 = document.getElementById('s6').value;
      var u7 = document.getElementById('s7').value;
      var u8 = document.getElementById('s8').value;
       var u9= document.getElementById('s9').value;
       var u10= document.getElementById('s10').value;
      var u11= document.getElementById('s11').value;
       var u12= document.getElementById('s12').value;  
        var u13= document.getElementById('s13').value;
        var u14= document.getElementById('s14').value;
        var u15= document.getElementById('s15').value;
        var u16= document.getElementById('s16').value;
        var u17= document.getElementById('s17').value;
        var u18= document.getElementById('s18').value;
        var u19= document.getElementById('s19').value;
        var u20= document.getElementById('s20').value;



      if (u1=="") 
      {
      
      document.getElementById('n1').innerHTML="* Please fill the field";
      return false;

      }
       if (u2=="") 
      {
      
      document.getElementById('n2').innerHTML="* Please fill the field";
      return false;

      }
       if (u3=="") 
      {
      
      document.getElementById('n3').innerHTML="* Please fill the field";
      return false;

      }
       if (u4=="") 
      {
      
      document.getElementById('n4').innerHTML="* Please fill the field";
      return false;

      }
       if (u5=="") 
      {
      
      document.getElementById('n5').innerHTML="* Please fill the field";
      return false;

      }
       if (u6=="") 
      {
      
      document.getElementById('n6').innerHTML="* Please fill the field";
      return false;

      }
       if (u7=="") 
      {
      
      document.getElementById('n7').innerHTML="* Please fill the field";
      return false;

      }
       if (u8=="") 
      {
      
      document.getElementById('n8').innerHTML="* Please fill the field";
      return false;

      }
      if (isNaN(u8)) {

      document.getElementById('n8').innerHTML="* Please use only digit";
      return false;

      }
    /*   if (isNaN(u9)) {

      document.getElementById('n9').innerHTML="* Please use only digit";
      return false;

      }
       if (isNaN(u10)) {

      document.getElementById('n10').innerHTML="* Please use only digit";
      return false;

      }
       if (isNaN(u11)) {

      document.getElementById('n11').innerHTML="* Please use only digit";
      return false;

      }*/
        if (u9=="") 
      {
      
      document.getElementById('n9').innerHTML="* Please fill the field";
      return false;

      }
         if (u10=="") 
      {
      
      document.getElementById('n10').innerHTML="* Please fill the field";
      return false;

      }
         if (u11=="") 
      {
      
      document.getElementById('n11').innerHTML="* Please fill the field";
      return false;

      }

         if (u12=="") 
      {
      
      document.getElementById('n12').innerHTML="* Please fill the field";
      return false;

      }
         if (u13=="") 
      {
      
      document.getElementById('n13').innerHTML="* Please fill the field";
      return false;

      }
         if (u14=="") 
      {
      
      document.getElementById('n14').innerHTML="* Please fill the field";
      return false;

      }
         if (u15=="") 
      {
      
      document.getElementById('n15').innerHTML="* Please fill the field";
      return false;

      }
         if (u16=="") 
      {
      
      document.getElementById('n16').innerHTML="* Please fill the field";
      return false;

      }
         if (u17=="") 
      {
      
      document.getElementById('n17').innerHTML="* Please fill the field";
      return false;

      }
         if (u18=="") 
      {
      
      document.getElementById('n18').innerHTML="* Please fill the field";
      return false;

      }
         if (u19=="") 
      {
      
      document.getElementById('n19').innerHTML="* Please fill the field";
      return false;

      }
      if (u20=="") 
      {
      
      document.getElementById('n20').innerHTML="* Please fill the field";
      return false;

      }

      
    }

  </script>
</body>

</html>