@extends('layouts.admin')

@section('content')
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
            <h1>Ajouter Une Ecole</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Information sur l'ecole</h3>

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
                 <form  method="POST" action="{{ route('save') }} ">
                @csrf
                  <label>Email</label>
                  <input type="email" name="email" class="form-control">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Name</label>
                    <input type="password" name="nom" class="form-control">
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Bank1</label>
                  <input type="text" name="bank1" class="form-control ">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Account1</label>
                    <input type="text" name="account1" class="form-control ">
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Bank2</label>
                  <input type="text" name="bank2" class="form-control ">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Account2</label>
                    <input type="text" name="account2" class="form-control ">
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Bank3</label>
                  <input type="text" name="bank3" class="form-control ">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Account3</label>
                    <input type="text" name="account3" class="form-control ">
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Bank4</label>
                  <input type="text" name="bank4" class="form-control ">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Account4</label>
                    <input type="text" name="account4" class="form-control ">
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Bank5</label>
                  <input type="text" name="bank5" class="form-control ">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Account5</label>
                    <input type="text" name="account5" class="form-control ">
                  </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Bank6</label>
                  <input type="text" name="bank6" class="form-control ">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Account6</label>
                    <input type="text" name="account6" class="form-control ">
                  </div>
                <!-- /.form-group -->
              </div>
        
              <div class="col-md-6">
                <div class="form-group">
                    <label>Numero de Telephone</label>
                    <input type="int" name="tel" class="form-control">
                  </div>
                <!-- /.form-group -->
            
                <!-- /.form-group -->
              </div>
                    
<button type="submit" class="btn btn-primary">Ajouter</button>
          
</form>      
  

              
            </div>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      
      
      
      </div>

      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  @endsection