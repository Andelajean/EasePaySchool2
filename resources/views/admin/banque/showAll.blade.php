@extends('layouts.admin')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestion des Banques</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    @if (Session::has('success'))
         <div class="alert alert-success"> {{ Session::get('success') }} </div>
        @endif
        @if (Session::has('update'))
         <div class="alert alert-warning"> {{ Session::get('update') }} </div>
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
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>email</th>
                    <th>bank</th>
                    <th>telephone</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @isset($banks)
                    @foreach ($banks as $bank)
                    <tr>
                      <td>{{$bank->nom}}</td>
                      <td>{{$bank->prenom}}</td>
                      <td>{{$bank->email}}</td>
                      <td>{{$bank->bank}}</td>
                      <td>{{$bank->telephone}}</td>
                    
                      <td>
                        <ul class="list-inline m-0">
                          <li class="list-inline-item">
                          <a href="{{ route('edit.bank',$bank->id) }}">  <button class="btn btn-success btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="{{ route('delete.bank',$bank->id) }}"> <button class="btn btn-danger btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
                          </li>
                      </ul>
                      </td>
                    </tr>
                    @endforeach
                @endisset                
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