@extends('layouts.admin')

@section('content')
   
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
            <h1>Gestion des banques</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
       
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Ajouter une banque </h3><br/>
             <img src="{{asset("addmin/dist/img/credit/mastercard.png")}}"  width="50" height="30" class="brand-image img-square elevation-10" style="opacity: .8">
             <img src="{{asset("addmin/dist/img/credit/paypal.png")}}"  width="50" height="30" class="brand-image img-square elevation-10" style="opacity: .8">
             <img src="{{asset("addmin/dist/img/credit/visa.png")}}"  width="50" height="30" class="brand-image img-square elevation-10" style="opacity: .8">
  

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
          
                 <form  action="{{ route("save.bank") }}" method="POST" >
                  @csrf
                  @error('nom')
                  <div class="alert alert-danger "> {{ $message }} </div>
                 @enderror
                
                 @if (Session::has('error'))
                     <div class="alert alert-danger"> {{ Session::get('error') }} </div>
                 @endif
                  
                 @if (Session::has('success'))
                     <div class="alert alert-danger"> {{ Session::get('success') }} </div>
                 @endif
                <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                          <label>Nom:</label>
                          <input type="text" name="nom" class="form-control">
                       </div>
                       <div class="form-group">
                          <label>Prenom:</label>
                          <input type="text" name="prenom" class="form-control">
                       </div>

                  </div>   
                  <div class="col-md-6">
                       <div class="form-group">
                          <label>Email :</label>
                          <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Numero de compte :</label>
                            <input type="text" name="bank" class="form-control">
                        </div>
                  </div>
                
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Telephone:</label>
                        <input type="text" name="telephone" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Mot de passe:</label>
                        <input type="text" name="pwd" class="form-control ">
                      </div>
                  </div>
             
              </div>
              <!-- /.col -->      
            <button type="submit" class="btn btn-primary">Ajouter</button>
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
