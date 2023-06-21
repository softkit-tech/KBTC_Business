@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Count Form</h3>
          
            
          </div>
          <a href="{{route('all.number')}}" class="btn btn-primary"> Count List </a>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form action="{{route('store.number')}}" method="post" role="form" enctype="multipart/form-data">
              	@csrf
             <div class="card-body">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" placeholder="Name" required="" class="form-control">
                </div>
                <!-- /.form-group -->
           
                <!-- /.form-group -->
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Number</label>
                  <input type="text" name="count" placeholder="Number" required="" class="form-control">
                </div>
                <!-- /.form-group -->
           
                <!-- /.form-group -->
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Icon</label>
                  <input type="text" name="icon" placeholder="Icon" required="" class="form-control">
                </div>
                <!-- /.form-group -->
              
                <!-- /.form-group -->
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
  





@endsection