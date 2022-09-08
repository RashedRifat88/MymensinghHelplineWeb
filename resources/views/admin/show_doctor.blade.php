<!DOCTYPE html>
<html lang="en">

<head>
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
        <div class="container-fluid page-body-wrapper" style="background-color: #d1dbeb;">

            <div align="center" style="padding:80px;">

                <!-- <table style="border-collapse:separate; border-radius: 4px;">   -->
                <table style="border-radius: 4px;">  

                    <tr style="background-color: #000000;" align="center">
                        <th style="padding:10px; font-size:20px; color: white;">Doctor Name</th>
                        <th style="padding:10px; font-size:20px; color: white;">Phone</th>
                        <th style="padding:10px; font-size:20px; color: white;">Speciality</th>
                        <th style="padding:10px; font-size:20px; color: white;">Room No</th>
                        <th style="padding:10px; font-size:20px; color: white;">Image</th>
                        <th style="padding:10px; font-size:20px; color: white;">Delete</th>
                        <th style="padding:10px; font-size:20px; color: white;">Update</th>
                    </tr>

                    @foreach ($data as $doctor)

                    <tr style="background-color: #e3e1e3;" align="center">

                        <td style="padding:10px; font-size:15px; color: black;">{{ $doctor->name }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $doctor->phone }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $doctor->speciality }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $doctor->room }}</td>
                        <td style="padding:10px; font-size:15px; color: black;"><img height="100 px" width="100 px" src="doctor_image/{{ $doctor->image }}"> </td>
                        <td style="padding:5px; margin:5px;"><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_doctor', $doctor->id)}}">Delete</a></td>
                        <td style="padding:5px; margin:5px;"><a class="btn btn-primary"  href="{{url('update_doctor', $doctor->id)}}">Update</a></td>

                    </tr>

                    @endforeach



                </table>

            </div>

        </div>

        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    @include('admin.script')

</body>

</html>