@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">About Us</h3>
          
            
          </div>
         
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form action="{{route('update.about')}}" method="post" role="form" enctype="multipart/form-data">
              	@csrf
             <div class="card-body">
             	<input type="hidden" name="id" value="{{ $setting->id }}">
            <div class="row">
              

               

              


            

             

            

               

           
               

              <div class="col-md-6">
                <div class="form-group">
                  <label>About Image</label>
                  <input type="file" name="image" class="form-control">
                  <input type="hidden" name="oldpic" value="{{$setting->image }}">
                </div>

                 <img id="logo" src="{{asset('public/backend/about/'.$setting->image) }}" width="50" height="50;" />
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