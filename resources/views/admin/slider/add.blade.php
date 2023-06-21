@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Slider Form</h3>
          
            
          </div>
          <a href="{{route('all.slider')}}" class="btn btn-primary"> Slider List </a>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form action="{{route('store.slider')}}" method="post" role="form" enctype="multipart/form-data">
              	@csrf
             <div class="card-body">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>First Title</label>
                  <input type="text" name="name" placeholder="First  Title" required="" class="form-control">
                </div>
              </div>
              
                <div class="col-md-6">
                <div class="form-group">
                  <label>Second Title</label>
                  <input type="text" name="second_name" placeholder="Second Title" required="" class="form-control">
                </div>
              </div>
              
               <div class="col-md-6">
                <div class="form-group">
                  <label>Three Title</label>
                  <input type="text" name="three_name" placeholder="Second Title" required="" class="form-control">
                </div>
              </div>
 


          
      


              <div class="col-md-6">
                <div class="form-group">
                  <label>Slider Image</label>
                  <input type="file" name="image" class="form-control" onchange="readURL(this);" required="">
                </div>
                   <span class="custom-file-control"></span>
                  <img src="#" id="one" >
              </div>

          <br><br><br>
              

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  


<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>


@endsection