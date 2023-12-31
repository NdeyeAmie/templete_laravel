@extends('master')
@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Simple Tables</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
      </ol>
    </div>

    <div class="row">
      <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>Order ID</th>
                  <th>Customer</th>
                  <th>Item</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="#">RA0449</a></td>
                  <td>Udin Wayang</td>
                  <td>Nasi Padang</td>
                  <td><span class="badge badge-success">Delivered</span></td>
                  <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                </tr>
                <tr>
                  <td><a href="#">RA5324</a></td>
                  <td>Jaenab Bajigur</td>
                  <td>Gundam 90' Edition</td>
                  <td><span class="badge badge-warning">Shipping</span></td>
                  <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                </tr>
                <tr>
                  <td><a href="#">RA8568</a></td>
                  <td>Rivat Mahesa</td>
                  <td>Oblong T-Shirt</td>
                  <td><span class="badge badge-danger">Pending</span></td>
                  <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                </tr>
                <tr>
                  <td><a href="#">RA1453</a></td>
                  <td>Indri Junanda</td>
                  <td>Hat Rounded</td>
                  <td><span class="badge badge-info">Processing</span></td>
                  <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                </tr>
                <tr>
                  <td><a href="#">RA1998</a></td>
                  <td>Udin Cilok</td>
                  <td>Baby Powder</td>
                  <td><span class="badge badge-success">Delivered</span></td>
                  <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
        </div>
      </div>
    </div>
    <!--Row-->

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to logout?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            <a href="login.html" class="btn btn-primary">Logout</a>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection