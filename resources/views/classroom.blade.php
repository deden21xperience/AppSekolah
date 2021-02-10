@extends('administrasi.template')
@section('content')

<h2>Kelas</h2>
<table class="table" id="myTable">
  <thead>
    <th>
      <tr>
        <td>#</td>
        <td>Tingkat</td>
        <td>Jurusan</td>
        <td>Pembagian</td>
        <td>Aksi</td>
      </tr>
    </th>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>
        <select name="kelas" id="kelas">
          <option value="x">X</option>
          <option value="xi">XI</option>
          <option value="xii">XII</option>
        </select>
      </td>
      <td>
        <select name="kelas" id="kelas">
          <option value="tkj">TKJ - Teknik Komputer Jaringan</option>
          <option value="tbsm">TBSM - Teknik Bisnis Sepeda Motor</option>
          <option value="tkr">TKR - Teknik Kendaraan Ringan</option>
          <option value="otkp">OTKP Perkantoran</option>
          <option value="ak">Akuntansi</option>
        </select>
      </td>
      <td>
        <select name="kelas" id="kelas">
          <option value="a">A</option>
          <option value="b">B</option>
          <option value="c">C</option>
          <option value="d">D</option>
          <option value="e">E</option>
        </select>
      </td>
      <td>
        <button id="tambah-kelas">Tambah Kelas</button>
      </td>
    </tr>
  </tbody>
  {{-- <tfoot>
    <a href="#" class="btn btn-primary">simpan</a>
  </tfoot> --}}
</table>




<script>
  let tambahKelas = document.getElementById('tambah-kelas')
  const myTable = document.getElementById('myTable')

  tambahKelas.addEventListener('click', function() {
    console.log(myTable.children) //return 3 rows
    // var lastRow = myTable.rows.length;
    // var row = myTable.insertRow(lastRow);
    // var cell0 = row.insertCell(0);
    // var cell1 = row.insertCell(1);
    // var cell2 = row.insertCell(2);
    // var cell3 = row.insertCell(3);
    // var cell4 = row.insertCell(4);
    // let costumBtn = document.createElement('btn')
    // cell0.innerHTML = '#';
    // cell1.innerHTML = "NEW CELL1";
    // cell2.createElement('button');
    // cell3.innerHTML = "NEW CELL3";
    // cell2.innerHTML = "NEW CELL4";
    // alert('tes')
    // containerKelas.appendChild()
  })
  // console.log(containerKelas);
</script>
@endsection




<div class="row">
  @include('components.progress')
  {{-- <div class="contain">
          <ul class="progressbar">
            <li>login</li>
            <li class="active">choose interest</li>
            <li>add friends</li>
            <li>View map</li>
          </ul>
        </div> --}}







  {{-- <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
</div>
<!-- Content Row -->
{{-- <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

<!-- Content Row -->
{{-- <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                  aria-labelledby="dropdownMenuLink">
                  <div class="dropdown-header">Dropdown Header:</div>
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="chart-area">
                <div class="chartjs-size-monitor">
                  <div class="chartjs-size-monitor-expand">
                    <div class=""></div>
                  </div>
                  <div class="chartjs-size-monitor-shrink">
                    <div class=""></div>
                  </div>
                </div>
                <canvas id="myAreaChart" style="display: block; width: 377px; height: 320px;" width="377" height="320"
                  class="chartjs-render-monitor"></canvas>
              </div>
            </div>
          </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                  aria-labelledby="dropdownMenuLink">
                  <div class="dropdown-header">Dropdown Header:</div>
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="chart-pie pt-4 pb-2">
                <div class="chartjs-size-monitor">
                  <div class="chartjs-size-monitor-expand">
                    <div class=""></div>
                  </div>
                  <div class="chartjs-size-monitor-shrink">
                    <div class=""></div>
                  </div>
                </div>
                <canvas id="myPieChart" width="250" height="245" class="chartjs-render-monitor"
                  style="display: block; width: 250px; height: 245px;"></canvas>
              </div>
              <div class="mt-4 text-center small">
                <span class="mr-2">
                  <i class="fas fa-circle text-primary"></i> Direct
                </span>
                <span class="mr-2">
                  <i class="fas fa-circle text-success"></i> Social
                </span>
                <span class="mr-2">
                  <i class="fas fa-circle text-info"></i> Referral
                </span>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

<!-- Content Row -->
{{-- <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

          <!-- Project Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
            </div>
            <div class="card-body">
              <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
              <div class="progress mb-4">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
              <div class="progress mb-4">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
              <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
              <div class="progress mb-4">
                <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <!-- Color System -->
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="card bg-primary text-white shadow">
                <div class="card-body">
                  Primary
                  <div class="text-white-50 small">#4e73df</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-success text-white shadow">
                <div class="card-body">
                  Success
                  <div class="text-white-50 small">#1cc88a</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-info text-white shadow">
                <div class="card-body">
                  Info
                  <div class="text-white-50 small">#36b9cc</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-warning text-white shadow">
                <div class="card-body">
                  Warning
                  <div class="text-white-50 small">#f6c23e</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-danger text-white shadow">
                <div class="card-body">
                  Danger
                  <div class="text-white-50 small">#e74a3b</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-secondary text-white shadow">
                <div class="card-body">
                  Secondary
                  <div class="text-white-50 small">#858796</div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mb-4">

          <!-- Illustrations -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
            </div>
            <div class="card-body">
              <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg"
                  alt="">
              </div>
              <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow"
                  href="">unDraw</a>, a constantly updated collection of
                beautiful svg images that
                you can use completely free and without attribution!</p>
              <a target="_blank" rel="nofollow" href="">Browse Illustrations on unDraw →</a>
            </div>
          </div>

          <!-- Approach -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
            </div>
            <div class="card-body">
              <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat
                and poor
                page performance. Custom CSS classes are used to create custom components and custom utility
                classes.
              </p>
              <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap
                framework,
                especially the utility classes.</p>
            </div>
          </div>

        </div>
      </div> --}}

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->