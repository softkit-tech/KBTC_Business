@extends('admin.admin_layouts')
@section('admin_content')


    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
 
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Slider</h3>
              </div>
               <a href="{{route('add.slider')}}" class="btn btn-primary">Add Slider </a>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Slider Title</th>
                    <th>Slider Image</th>
                    <th>Active</th>
                  </tr>
                  </thead>
                  <tbody>
            
                 
                  @foreach($sliders as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->name}}</td>
             
                  
                    
                    <td>
                    	<img id="logo" src="{{asset('public/backend/slider/'.$row->image) }}" width="50" height="50;" alt="image" />
                    </td>
               
                    <td>
                      <a href="{{route('edit.slider',$row->id)}}" class="btn btn-primary">Edit</a>
                      <a href="{{route('delete.slider',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                    </td>
              
                  </tr>
                 @endforeach
             
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Slider Title</th>
                    <th>Slider Image</th>
                    <th>Active</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection  