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
                <h3 class="card-title">All Contact</h3>
              </div>
               
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>msg</th>
                    <th>Active</th>
                  </tr>
                  </thead>
                  <tbody>
            
                 
                  @foreach($contact as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->last}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->number}}</td>
                    <td>{{$row->msg}}</td>
             
                  
                    
                   
               
                    <td>
                      
                      <a href="{{route('delete.contact',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                    </td>
              
                  </tr>
                 @endforeach
             
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>msg</th>
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