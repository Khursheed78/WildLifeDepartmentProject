    
<?php
 require 'Header.php';

?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
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
          
          
               
              </li>
            
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title"> Shooting License Information</h4>
                  <p class="card-category">PUT COMPLETE INFORMATIN</p>
                </div>
                <div class="card-body">
                <form action="#" onsubmit="return Validation()" method="post">

                  <div class="row">
                      <div class="col-md-4">
                         <select name="select" id="select" class="form-control">
                        <option value="1">Select Types of Shooting</option>
                         <option value="1">Small Game</option>
                         <option value="2">Big Game</option>
                     
                        </select>                    
                        </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Serial Number</label>
                          <input id="s1"  type="text" class="form-control">
                          <span id="n1" class="text-danger"></span>
                        </div>
                      </div>
                      
                    
                      <div class="col-md-4">
                  <label for="actual-btn">Select Picture:</label>
                  <input type="file" id="img" name="img" accept="image/*">
                  </div>
                  
                </div>
                   
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Hunter Name</label>
                          <input id="s3" type="text" class="form-control">
                          <span id="n3" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Father Name</label>
                          <input id="s4" type="text" class="form-control">
                          <span id="n" class="text-danger"></span>
                        </div>
                         <div class="col-md-3" style="margin-top: -11px;">
                      </div>
                      </div>

                       <div class="col-md-3">
                        <div class="form-group">
                          <label >Issue Date</label>
                          <input id="s5" type="Date" class="form-control">

                           <span id="n5" class="text-danger"></span>
                        </div>
                      </div>

                       <div class="form-group ml-4">
                          <label class="bmd-label-floating">Gender</label>
                        
                          <br>
                           <input type="radio" name="gender" checked value="male"> Male
                           <input type="radio" name="gender" value="female"> Female
                           <input  type="radio" name="gender" value="other"> Other

                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input  id="s6" type="email" class="form-control">

                           <span id="n6" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile Number</label>
                          <input id="s7" type="text" class="form-control" id="phone-number" name="phone" onblur="mask(this)">
                           <span id="n7" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        
                         <select name="select" id="select" class="form-control">
                        <option value="1">Please Select Province</option>
                         <option value="1">KPKP</option>
                         
                        </select>                    
                        </div>

                      </div>
                     
                      <div class="row">
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating" >Name of Country<small class="ml-2">(If Abroad)</small> </label>
                          
                          <input  id="s8" type="text" class="form-control">
                          <span id="n8" class="text-danger"></span>
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Passport Number</label>
                          <input  id="s9" type="text" class="form-control">
                          <span id="n9" class="text-danger"></span>
                        </div>
                      </div>  
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">CNIC Number</label>
                          <input id="s10" type="text" class="form-control" onblur="card(this)" >

                           <span id="n10" class="text-danger"></span>
                        </div>
                      </div> 
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating" >Hunter Address </label>
                          
                          <input  id="s11" type="text" class="form-control">
                          <span id="n11" class="text-danger"></span>
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address of Issuing Authority </label>
                          <input  id="s12" type="text" class="form-control">
                          <span id="n12" class="text-danger"></span>
                        </div>
                      </div>  
                      </div>
                      <div class="row">
                         <div class="col-md-4">
                        <div class="form-group">
                          <label >Issue Date</label>
                          <input id="s13" type="Date" class="form-control">

                           <span id="n13" class="text-danger"></span>
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label >Expiry Date</label>
                          <input id="s14" type="Date" class="form-control">

                           <span id="n14" class="text-danger"></span>
                        </div>
                      </div>

                      </div>
                      <div class="row">
                        <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating" >Remarks</small> </label>
                          
                          <input  id="s15" type="text" class="form-control">
                          <span id="n15" class="text-danger"></span>
                        </div>
                      </div>
                      </div>
                    
                      <div class="row">
                        <div class="col-md-2">
                    <button type="submit" class="btn btn-success pull-right">Submit</button>
                    <div class="clearfix"></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
           
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
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
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
    //Empty Field Validations
   

  </script>
<script type="text/javascript">
    

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
      // var u16= document.getElementById('s16').value;
    

      if(u1=="")
      {

          document.getElementById('n1').innerHTML="* Please Fill the field";
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
    
    }
  </script>
      <script>

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
  
</body>

</html>