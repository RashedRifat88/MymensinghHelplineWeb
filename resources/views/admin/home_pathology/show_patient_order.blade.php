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


        <!-- <div class="container-fluid page-body-wrapper" style="background-color: #e3e1e3;">

            <div align="center" style="padding:80px;">

                <table style="border-radius: 4px;">

                    <tr style="background-color: #000000;" align="center">
                        <th style="padding:10px; font-size:20px; color: white;">Customar Name</th>
                        <th style="padding:10px; font-size:20px; color: white;">Email</th>
                        <th style="padding:10px; font-size:20px; color: white;">Phone</th>
                        <th style="padding:10px; font-size:20px; color: white;">Doctor</th>
                        <th style="padding:10px; font-size:20px; color: white;">Date</th>
                        <th style="padding:10px; font-size:20px; color: white;">Message</th>
                        <th style="padding:10px; font-size:20px; color: white;">Status</th>
                        <th style="padding:10px; font-size:20px; color: white;">Approve</th>
                        <th style="padding:10px; font-size:20px; color: white;">Cancel</th>
                    </tr>

                    @foreach ($data as $appointment)
<tr style="background-color: #cef542;" align="center">

                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->name }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->email }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->phone }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->doctor }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->date }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->message }}</td>
                        <td style="padding:10px; font-size:15px; color: black;">{{ $appointment->status }}</td>
                        <td style="padding:5px; margin:5px;"><a class="btn btn-success" onclick="return confirm('Are you sure to approve this?')" href="{{ url('approve_appointment', $appointment->id) }}">Approve</a></td>
                        <td style="padding:5px; margin:5px;"><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{ url('cancel_appointment_a', $appointment->id) }}">Cancel</a></td>

                    </tr>
@endforeach



                </table>

            </div>

        </div> -->


        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> Patient Order Table </h3>
                </div>
                <div class="row">

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>

                                                <th style="color:white;">Prescription</th>
                                                <th style="color:white;">Patient Name</th>
                                                <th style="color:white;">Patient Mobile</th>
                                                <th style="color:white;">Tests</th>
                                                <th style="color:white;">Date</th>

                                                {{-- <th style="color:white;">Status</th>
                                                <th style="color:white;">Action</th> --}}

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($data as $obj1)
                                                <tr>


                                                    <td><img height="100 px" width="100 px"  src="test_prescription_image/{{ $obj1->test_prescription }}"></td>
                                                    <td style="">{{ $obj1->pat_name }}</td>
                                                    <td style="">{{ $obj1->pat_mobile }}</td>
                                                    {{-- <td style="">{{ $obj1->test_list }}</td> --}}
                                                    <td style="">{{ $obj1->date }}</td>

                                                    {{-- <td style="">{{ $obj1->message }}</td> --}}
                                                    {{-- <td style="color:yellow;">{{ $obj1->status }}</td> --}}


                                                    {{-- <td style="padding:5px; margin:5px;">
                                                        <a class="btn btn-success"
                                                            onclick="return confirm('Are you sure to approve this?')"
                                                            href="{{ url('approve_appointment', $obj1->id) }}">Approve</a>
                                                        <a class="btn btn-danger"
                                                            onclick="return confirm('Are you sure to delete this?')"
                                                            href="{{ url('cancel_appointment_a', $obj1->id) }}">Cancel</a>
                                                    </td> --}}

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                        mymensinghhelpline.com 2022</span>
                    <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span> -->
                </div>
            </footer>
            <!-- partial -->
        </div>



    </div>
    <!-- container-scroller -->

    @include('admin.script')

</body>

</html>
