@extends('layouts.admin')

@section('content')
   
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
            <h1>modifier les informations d'une banque</h1>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
       
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Modifier une banque</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">

              <div class="col-md-6">
                 <div class="form-group">
                 <form  action="{{ route("update.bank") }}" method="POST" >
                  @csrf
              
                 @error('nom')
                  <div class="alert alert-danger "> {{ $message }} </div>
                 @enderror 
                 
                 @if (Session::has('error'))
                     <div class="alert alert-danger"> {{ Session::get('error') }} </div>
                 @endif
                

                
                  <label>Nom</label>
                  <input type="text" name="nom" class="form-control" value="{{ $banques->nom }}">
                 </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Prenom</label>
                    <input type="text" name="prenom" class="form-control" value="{{ $banques->prenom }}">
                  </div>
              </div>

              <div class="col-md-6">
                 <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="nom" class="form-control " value="{{ $banques->email }}">
                 </div>
                <!-- /.form-group -->
                  <div class="form-group">
                    <label>Numero de compte</label>
                    <input type="text" name="bank" class="form-control " value="{{ $banques->bank }}">
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label>Telephone</label>
                <input type="text" name="telephone" class="form-control " value="{{ $banques->telephone }}">
              </div>
              <div class="form-group">
                <label>Mot de passe :</label>
                <input type="text" name="pwd" class="form-control " value="">
              </div>

              </div>
              </div>
              <!-- /.col -->    
                <input type="hidden" name="id" value="{{ $banques->id }}">
                <input type="submit" value="Modifier" class="btn btn-primary">  
            
          </form>      
              
            </div>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection