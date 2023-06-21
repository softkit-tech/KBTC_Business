@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Service Form</h3>
          
            
          </div>
          <a href="{{route('all.service')}}" class="btn btn-primary"> Service List </a>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form action="{{route('update.service',$edit_data->id)}}" method="post" role="form" enctype="multipart/form-data">
              	@csrf
             <div class="card-body">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Service Name</label>
                  <input type="text" name="name"  value="{{$edit_data->name}}" class="form-control">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Service Description</label>
                  <input type="text" name="description"  value="{{$edit_data->description}}" class="form-control">
                </div>
              </div>


      


              <div class="col-md-6">
                <div class="form-group">
                  <label>Service Image</label>
                  <input type="file" name="image" class="form-control">
                </div>

                <img id="logo" src="{{asset('public/backend/service/'.$edit_data->image) }}" width="50" height="50;" />
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