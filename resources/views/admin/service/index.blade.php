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
                <h3 class="card-title">All Service</h3>
              </div>
               <a href="{{route('add.service')}}" class="btn btn-primary">Add Service </a>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Service NAme</th>
                    <th>Service Image</th>
                    <th>Active</th>
                  </tr>
                  </thead>
                  <tbody>
            
                 
                  @foreach($services as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->name}}</td>
             
                  
                    
                    <td>
                    	<img id="logo" src="{{asset('public/backend/service/'.$row->image) }}" width="50" height="50;" alt="image" />
                    </td>
               
                    <td>
                      <a href="{{route('edit.service',$row->id)}}" class="btn btn-primary">Edit</a>
                      <a href="{{route('delete.service',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
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