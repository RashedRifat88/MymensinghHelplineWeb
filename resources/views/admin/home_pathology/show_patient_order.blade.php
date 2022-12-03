<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        img {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        img:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }
    </style>
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

                                                    <td><img id='image_{{ $obj1->id }}' height="100 px"
                                                            width="100 px"
                                                            src="test_prescription_image/{{ $obj1->test_prescription }}">
                                                    </td>
                                                    <td style="">{{ $obj1->pat_name }}</td>
                                                    <td style="">{{ $obj1->pat_mobile }}</td>
                                                    @php
                                                        $var = collect($obj1->test_list)->implode("\n");
                    
                                                    @endphp
                                                    <td style="">
                                                        <pre>{{  $var  }}</pre>
                                                    </td>
                                                    {{-- <td style="">{{ implode(', ', $obj1->test_list) }}</td> --}}
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
    {{-- modal for image --}}
    <div id="myModal" class="modal">
        <span class="close" style="cursor:pointer;margin-top:70px; margin-right:120px;">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    <script>
        // Get the modal
        $(document).ready(function() {
            $('img').click(function() {
                var image_id = $(this).attr('id');
                var modal = document.getElementById("myModal");
                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById(image_id);
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            });
            // Get the <span> element that closes the modal
            var span = document.getElementById("myModal");
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                console.log('ok');
                span.style.display = "none";
            }
        });
    </script>
</body>

</html>
