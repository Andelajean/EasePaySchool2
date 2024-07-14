@extends('layouts.admin')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <center><h1>Information Relative a chaque Ecole</h1></center>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        @if (Session::has('success'))
         <div class="alert alert-warning"> {{ Session::get('success') }} </div>
        @endif
        @if (Session::has('ajoute'))
         <div class="alert alert-success"> {{ Session::get('ajoute') }} </div>
        @endif
        @if (Session::has('delete'))
         <div class="alert alert-danger"> {{ Session::get('delete') }} </div>
        @endif
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover" style="writing-mode: vertical-lr;">
                  <thead>
                  <tr>
                  <th style="writing-mode: horizontal-tb;">name</th>
                  <th style="writing-mode: horizontal-tb;">email</th> 
                  <th style="writing-mode: horizontal-tb;">identifiant</th>
                  <th style="writing-mode: horizontal-tb;">bank1</th>
                  <th style="writing-mode: horizontal-tb;">account1</th>
                  <th style="writing-mode: horizontal-tb;">bank2</th>
                  <th style="writing-mode: horizontal-tb;">account2</th>
                  <th style="writing-mode: horizontal-tb;">bank3</th>
                  <th style="writing-mode: horizontal-tb;">account3</th>
                  <th style="writing-mode: horizontal-tb;">bank4</th>
                  <th style="writing-mode: horizontal-tb;">account4</th>
                  <th style="writing-mode: horizontal-tb;">bank5</th>
                  <th style="writing-mode: horizontal-tb;">account5</th>
                  <th style="writing-mode: horizontal-tb;">bank6</th>
                  <th style="writing-mode: horizontal-tb;">account6</th>
                  <th style="writing-mode: horizontal-tb;">telephone</th>
                  <th style="writing-mode: horizontal-tb;">Action</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($Ecole as $p)
                  <tr>

                    <td>{{ $p->name }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->identifiant }}</td>
                    <td>{{ $p->bank1 }}</td>
                    <td>{{ $p->account1 }}</td>
                    <td>{{ $p->bank2 }}</td>
                    <td>{{ $p-account2 }}</td>
                    <td>{{ $p->bank3 }}</td>
                    <td>{{ $p->account3 }}</td>
                    <td>{{ $p->bank4 }}</td>
                    <td>{{ $p->account4 }}</td>
                    <td>{{ $p->bank5 }}</td>
                    <td>{{ $p->account5 }}</td>
                    <td>{{ $p->bank6 }}</td>
                    <td>{{ $p->account6 }}</td>
                    <td>{{ $p->telephone }}</td>
                    <td> <ul class="list-inline m-0">
                          <li class="list-inline-item">
                          <a href="{{ route('editprof',$p->id)  }}">  <button class="btn btn-success btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="{{ route('deleteprof',$p->id ) }}"> <button class="btn btn-danger btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
                          </li>  
                        </ul></td>
                  </tr>

                   @endforeach
                  
</tbody>                
</table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection