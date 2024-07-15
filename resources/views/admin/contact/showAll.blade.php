@extends('layouts.admin')

@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <center><h1>ECOLES NOUS AYANT CONTACTEES</h1></center>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
            
                  <tr>
                    <th>nom</th>
                    <th>email</th>
                    <th>telephone</th>
                    <th>message</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @isset($contacts)
                    @foreach ($contacts as $contact)
                    <tr>
                      <td>{{$contact->nom}}</td>
                      <td>{{$contact->email}}</td>
                      <td>{{$contact->telephone}}</td>
                      <td>{{$contact->message}}</td>
                      <td>
                        <ul class="list-inline m-0">
                          <li class="list-inline-item">
                          <a href="{{ route('request.contact',$contact->id) }}">  <button class="btn btn-success btn-sm rounded-2" type="button" data-toggle="tooltip" data-placement="top" title="Repondre"><i class="fa fa-edit"></i></button></a>
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
@endsection               
