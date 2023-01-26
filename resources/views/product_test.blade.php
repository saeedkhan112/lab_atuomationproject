@extends('layout')
@section('title')

Laboratory
@endsection
@section('data')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Products</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4  col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-4  col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Tested Products</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header bg-warning py-3 d-flex flex-row align-items-center justify-content-between">
                                   <h6 class="m-0 font-weight-bold text-light">Products Overview</h6>                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <form action="/inserted" method="POST" enctype="multipart/form-data" >
@csrf
<h2 class="text-center">product testing</h2>
<label for="Product" >Product Name</label>
<input type="text" class="form-control" name="Product" placeholder="Product Name.."><br>
<label for="Price">Price</label>
<input type="text"class="form-control" placeholder="Enter Price.." name="Price"><br>
<input type="file"class="form-control" name="image"><br>
<label for="category">categories</label>
<select  class="form-control" name="category" >
<option value="volvo" >Select Category..</option>
  
  <option value="Capacitors" >Capacitors</option>
  <option value="Switches">Switches</option>
  <option value="Gears">Gears</option>
  <option value="Fuses">Fuses</option>
</select>
      </div>
      <div class="modal-footer">
        <button type="button" data-bs-dismiss="modal" class="dashbtn1">Close</button>
        <button type="submit" class="dashbtn" >Add</button>
      </div>
      </form>
                                </table>
                            </div></div> </div>
                            </div>
                        </div>

<br><br>

<!-- testing -->






                                         </div>
                                         </div>




                             
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                  
                            <!-- Color System -->
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          @endsection