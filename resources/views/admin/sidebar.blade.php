<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('common_images/logo.jpeg')}}" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('common_images/logo.jpeg')}}" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <!-- <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
            <span>Gold Member</span>
          </div>
        </div>
        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-onepassword  text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-calendar-today text-success"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
            </div>
          </a>
        </div>
      </div> -->
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>

    <!-- <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('add_doctor_view') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Add Doctors</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('show_appointments') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Appointments</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('show_doctor') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">All Doctor</span>
      </a>
    </li> -->


    <!-- <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui1">
        <span class="menu-icon">
          <i class="fa fa-user-md" style="color:red;"></i>
        </span>
        <span class="menu-title">Doctor</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui1">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('add_doctor_view') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Add Doctors</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('show_appointments') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Appointments</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('show_doctor') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">All Doctor</span>
            </a>
          </li>

        </ul>
      </div>
    </li> -->

    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">App Home Page</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('view_app_home') }}"> Top Slider & Text </a></li>
        </ul>
      </div>
    </li>



    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Doctor</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('add_doctor_view') }}">Add Doctors</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('show_appointments') }}">Appointments</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('show_doctor') }}">All Doctor</a></li>
        </ul>
      </div>
    </li>


    <!-- <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="fa fa-user-md" style="color:red;"></i>
        </span>
        <span class="menu-title">Doctor</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('add_doctor_view') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Add</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('show_doctor') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Show</span>
            </a>
          </li>

        </ul>
      </div>
    </li> -->


    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Hospital and Clinic</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('show_hospital_clinic') }}"> Show </a></li>
        </ul>
      </div>
    </li>



    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#dt" aria-expanded="false" aria-controls="dt">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Home Pathology</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="dt">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('view_add_test_name') }}"> Add Test Name </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{  url('show_patient_order')  }}"> Patient Orders </a></li>
        </ul>
      </div>
    </li>
    



    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ma" aria-expanded="false" aria-controls="ma">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Medical Accessories</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ma">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Show </a></li>
        </ul>
      </div>
    </li>



    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#m" aria-expanded="false" aria-controls="m">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Medicine</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="m">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Show </a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#nursing" aria-expanded="false" aria-controls="nursing">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Nursing</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="nursing">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Show </a></li>
        </ul>
      </div>
    </li>




    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ambulance" aria-expanded="false" aria-controls="ambulance">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Ambulance</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ambulance">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Show </a></li>
        </ul>
      </div>
    </li>




    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#tution" aria-expanded="false" aria-controls="tution">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Tution</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tution">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Show </a></li>
        </ul>
      </div>
    </li>



    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#bas" aria-expanded="false" aria-controls="bas">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Buy and Sell</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="bas">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Show </a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#blood" aria-expanded="false" aria-controls="blood">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Blood</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="blood">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Show </a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#HR" aria-expanded="false" aria-controls="HR">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">House Rent</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="HR">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Show </a></li>
        </ul>
      </div>
    </li>



    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#results" aria-expanded="false" aria-controls="results">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Results</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="results">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Show </a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#jobs" aria-expanded="false" aria-controls="jobs">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Jobs</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="jobs">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Show </a></li>
        </ul>
      </div>
    </li>



    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#quiz" aria-expanded="false" aria-controls="quiz">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Quiz</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="quiz">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Show </a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#md" aria-expanded="false" aria-controls="md">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Mymensingh Division</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="md">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Government Institution </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Educational Institution </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Social Institution </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Hotel and Restaurent </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Bus and Train </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> IT Institute </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Show Rooms </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Places of Interest </a></li>

        </ul>
      </div>
    </li>



    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ap" aria-expanded="false" aria-controls="ap">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Admission and Application</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ap">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> All </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Show </a></li>
        </ul>
      </div>
    </li>










  </ul>
</nav>