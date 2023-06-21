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
                <h3 class="card-title">All Newslater</h3>
              </div>
               
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
    
                    <th>Email</th>
       
                    <th>Active</th>
                  </tr>
                  </thead>
                  <tbody>
            
                 
                  @foreach($newslater as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
            
                    <td>{{$row->email}}</td>
                    
             
                  
                    
                   
               
                    <td>
                      
                      <a href="{{route('newslater.delete',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                    </td>
              
                  </tr>
                 @endforeach
             
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Email</th>
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