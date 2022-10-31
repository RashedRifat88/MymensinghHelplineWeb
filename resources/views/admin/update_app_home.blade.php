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

    @include('admin.sidebar')

    @include('admin.navbar')

    <!-- partial -->

    ///

    <div class="main-panel">
      <div class="content-wrapper">


        @if (session()->has('message'))

        <div class="alert alert-success alert-dismissible" role="alert">

          {{session()->get('message')}}

          <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>

        @endif

        <div class="row">

          <div class="col-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Update Doctor Form</h4>

                <form class="forms-sample" action="{{ url('update_app_home', $data->id) }}" method="POST" enctype="multipart/form-data">

                  @csrf

                  <div class="form-group">
                    <label for="exampleInputName1">Top Scroll Text</label>
                    <input type="text" class="form-control" style="background-color:#2A3038; color:white;" name="top_scroll_text" value="{{$data->top_scroll_text}}" required>
                  </div>

                

                  <div class="form-group">
                    <label for="exampleInputName1">Top Scroll Text2</label>
                    <input type="text" class="form-control" style="background-color:#2A3038; color:white;" name="top_scroll_text2" value="{{$data->top_scroll_text2}}" required>
                  </div>

                

                  <div class="form-group">
                    <label for="exampleInputName1">Top Scroll Text3</label>
                    <input type="text" class="form-control" style="background-color:#2A3038; color:white;" name="top_scroll_text3" value="{{$data->top_scroll_text3}}" required>
                  </div>

                

                  <div class="form-group">
                    <label for="exampleInputName1">Top Scroll Text4</label>
                    <input type="text" class="form-control" style="background-color:#2A3038; color:white;" name="top_scroll_text4" value="{{$data->top_scroll_text4}}" required>
                  </div>

                

                  <div class="form-group">
                    <label for="exampleInputName1">Top Scroll Text5</label>
                    <input type="text" class="form-control" style="background-color:#2A3038; color:white;" name="top_scroll_text5" value="{{$data->top_scroll_text5}}" required>
                  </div>

                

                  <!-- <div class="form-group col-md-3 mt-3">
                  </div> -->

                  <div class="form-group" col-md-3 mt-3>
                    <label for="exampleInputName1">Old Image 1</label>
                    <img height="100 px" width="100 px" src="home_slider_image/{{ $data->top_slider_img1 }}">
                  </div>
                  <div class="form-group">
                    <label>New Image 1</label>
                    <br />
                    <input type="file" style="color: white;" name="file_image1">
                  </div>


                  <br />
                  <br />
                  
                  <div class="form-group">
                    <label for="exampleInputName1">Old Image 2</label>
                    <img height="100 px" width="100 px" src="home_slider_image/{{ $data->top_slider_img2 }}">
                  </div>
                  <div class="form-group">
                    <label>New Image 2</label>
                    <br />
                    <input type="file" style="color: white;" name="file_image2">
                  </div>


                  <br />
                  <br />
                  
                  <div class="form-group">
                    <label for="exampleInputName1">Old Image 3</label>
                    <img height="100 px" width="100 px" src="home_slider_image/{{ $data->top_slider_img3 }}">
                  </div>
                  <div class="form-group">
                    <label>New Image 3</label>
                    <br />
                    <input type="file" style="color: white;" name="file_image3">
                  </div>


                  <button type="submit" class="btn btn-primary me-2">Update</button>

                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    ///

    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('admin.script')

</body>

</html>