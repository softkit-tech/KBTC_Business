@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Number Form</h3>
          
            
          </div>
          <a href="{{route('all.number')}}" class="btn btn-primary"> Number List </a>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form action="{{route('update.number',$edit_data->id)}}" method="post" role="form" enctype="multipart/form-data">
              	@csrf
             <div class="card-body">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name"  value="{{$edit_data->name}}" class="form-control">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Number</label>
                  <input type="text" name="count"  value="{{$edit_data->count}}" class="form-control">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Icon</label>
                  <input type="text" name="icon"  value="{{$edit_data->icon}}" class="form-control">
                </div>
              </div>

             


          <br><br><br>
              

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  




@endsection