<!DOCTYPE html>
<html lang="en">

<head>

  <base href="/public">

  <style>
    label {
      display: inline-block;
      width: 200px;
    }
  </style>


  @include('admin.css')
</head>

<body>
  <div class="container-scroller">
    <!-- <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div> -->
    <!-- partial:partials/_sidebar.html -->

    @include('admin.sidebar')

    @include('admin.navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper" style="background-color: #850870;">

      <div class="container" align="center" style="padding-top: 100px;">

        @if (session()->has('message'))

        <div class="alert alert-success alert-dismissible" role="alert">

          {{session()->get('message')}}

          <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>

        @endif

        <form action="{{ url('edit_doctor', $data->id) }}" method="POST" enctype="multipart/form-data">

          @csrf

          <div style="padding: 15px">
            <label>Doctor Name</label>
            <input type="text" style="color: black; border-radius: 10px;" name="name" value="{{$data->name}}" required>
          </div>

          <div style="padding: 15px">
            <label>Phone</label>
            <input type="number" style="color: black; border-radius: 10px;" name="phone" value="{{$data->phone}}" required>
          </div>

          <!-- <div style="padding: 15px">
            <label>Speciality</label>
            <select name="speciality" style="color: black; width:210px; border-radius: 10px;">
              <option>--select--</option>
              <option value="heart">Heart</option>
              <option value="ent">ENT</option>
              <option value="eye">Eye</option>
              <option value="skin">Skin</option>
            </select>
          </div> -->

          <div style="padding: 15px">
            <label>Speciality</label>
            <input type="text" style="color: black; border-radius: 10px;" name="speciality" value="{{$data->speciality}}" required>
          </div>

          <div style="padding: 15px">
            <label>Room No</label>
            <input type="text" style="color: black; border-radius: 10px;" name="room" value="{{$data->room}}" required>
          </div>

          <div style="padding: 15px">
            <label>Previous Image</label>
            <img height="100 px" width="100 px" src="doctor_image/{{ $data->image }}">
          </div>

          <div style="padding: 15px">
            <label>Change Image</label>
            <input type="file" style="color: white; border-radius: 0px;" name="file" >
          </div>

          <div style="padding: 15px">
            <input type="submit" class="btn btn-primary">
          </div>




        </form>

      </div>

    </div>

    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('admin.script')

</body>

</html>