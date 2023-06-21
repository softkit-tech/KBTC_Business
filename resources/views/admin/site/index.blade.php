@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Site Setting</h3>
          
            
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
      <form action="{{route('update.setting')}}" method="post" role="form" enctype="multipart/form-data">
              	@csrf
             <div class="card-body">
             	<input type="hidden" name="id" value="{{ $setting->id }}">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email"  class="form-control" value="{{$setting->email}}">
                </div>
              </div>

                <div class="col-md-6">
                <div class="form-group">
                  <label>Address</label>
                  <input type="address" name="address"  class="form-control" value="{{$setting->address}}">
                </div>
              </div>
              
                <div class="col-md-6">
                <div class="form-group">
                  <label>Address</label>
                  <input type="address" name="title"  class="form-control" value="{{$setting->title}}">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Mobile No</label>
                  <input type="text" name="phone"  class="form-control" value="{{$setting->phone}}">
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group">
                  <label>Facebook </label>
                  <input type="text" name="facebook"  class="form-control" value="{{$setting->facebook}}">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Instagram </label>
                  <input type="text" name="instagram"  class="form-control" value="{{$setting->instagram}}">
                </div>
              </div>

             

             <div class="col-md-6">
               <div class="form-group">
                 <label>Twitter </label>
                 <input type="text" name="twitter"  class="form-control" value="{{$setting->twitter}}">
               </div>
             </div>

             <div class="col-md-6">
               <div class="form-group">
                 <label>Linkend </label>
                 <input type="text" name="linkend"  class="form-control" value="{{$setting->linkend}}">
               </div>
             </div>

               

           
               

              <div class="col-md-6">
                <div class="form-group">
                  <label>Site Image</label>
                  <input type="file" name="image" class="form-control">
                  <input type="hidden" name="oldpic" value="{{$setting->image }}">
                </div>

                 <img id="logo" src="{{asset('public/backend/setting/'.$setting->image) }}" width="50" height="50;" />
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