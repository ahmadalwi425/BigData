@extends('layouts.templateAdmin')

@section('content')



<!-- Header -->
<div class="header bg-primary pt-3 pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </nav>
          </div>
          {{-- <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div> --}}
        </div>
        
      </div>
    </div>
    <!-- Card stats -->
    <div class="row px-4">
        @foreach($data as $row)
        {{-- @foreach($row as $orm) --}}
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">{{ $row[0] }}</h5>
                  <span class="h1 font-weight-bold mb-0">{{ $row[1] }}</span>
                </div>
                {{-- <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <i class="ni ni-active-40"></i>
                  </div>
                </div> --}}
              </div>
              <p class="mt-1 mb-0 text-sm">
                {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> --}}
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
        @endforeach
        {{-- @endforeach --}}
      </div>
  </div>
  
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-8">
        <div class="card bg-default">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6>
                <h5 class="h3 text-white mb-0">Amount of Transaction</h5>
              </div>
              <div class="col">
                <ul class="nav nav-pills justify-content-end">
                  <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                    <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                      <span class="d-none d-md-block">Month</span>
                      <span class="d-md-none">M</span>
                    </a>
                  </li>
                  <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                    <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                      <span class="d-none d-md-block">Week</span>
                      <span class="d-md-none">W</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <!-- Chart -->
            <!-- <div class="chart"> -->
              <!-- Chart wrapper -->
              <!-- <canvas id="chart-sales-dark" class="chart-canvas"></canvas> -->
              @foreach($data as $row)
                {{$row[0]}} -
                {{$row[1]}}
                <br>
              @endforeach
              @foreach($dataperormawa as $row)
                @foreach($row as $row2)
                  {{$row2[0]}} -
                  {{$row2[1]}} -
                  {{$row2[2]}} -
                  {{$row2[3]}}
                  <br>
                @endforeach
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                <h5 class="h3 mb-0">Total Members</h5>
              </div>
            </div>
          </div>
          <div class="card-body">
            <!-- Chart -->
            <div class="chart2">
              <canvas id="chart-bars" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-8">
        <div class="card">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Page visits</h3>
              </div>
              <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">See all</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Page name</th>
                  <th scope="col">Visitors</th>
                  <th scope="col">Unique users</th>
                  <th scope="col">Bounce rate</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    /argon/
                  </th>
                  <td>
                    4,569
                  </td>
                  <td>
                    340
                  </td>
                  <td>
                    <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/index.html
                  </th>
                  <td>
                    3,985
                  </td>
                  <td>
                    319
                  </td>
                  <td>
                    <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/charts.html
                  </th>
                  <td>
                    3,513
                  </td>
                  <td>
                    294
                  </td>
                  <td>
                    <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/tables.html
                  </th>
                  <td>
                    2,050
                  </td>
                  <td>
                    147
                  </td>
                  <td>
                    <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    /argon/profile.html
                  </th>
                  <td>
                    1,795
                  </td>
                  <td>
                    190
                  </td>
                  <td>
                    <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Social traffic</h3>
              </div>
              <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">See all</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Referral</th>
                  <th scope="col">Visitors</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    Facebook
                  </th>
                  <td>
                    1,480
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="mr-2">60%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    Facebook
                  </th>
                  <td>
                    5,480
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="mr-2">70%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    Google
                  </th>
                  <td>
                    4,807
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="mr-2">80%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    Instagram
                  </th>
                  <td>
                    3,678
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="mr-2">75%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    twitter
                  </th>
                  <td>
                    2,645
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="mr-2">30%</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
          <div class="copyright text-center  text-lg-left  text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </div>

  @endsection

  @section('script')
  
  <script type="text/javascript">

  // var ctx2 = document.getElementsByClassName("chart");
  // var ctx2.innerHTML = '&nbsp;';
  // var ctx2.innerHTML = '<canvas id="chart-bars"></canvas>;';
  $('.chart2').empty();
    
    $('.chart2').html('<canvas id="chart-bars" class="chart-canvas"></canvas>'); // then load chart.
        
  var ctx = document.getElementById("chart-bars");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
              @foreach($data as $row)
              '{{ $row[0] }}', 
              @endforeach
            ],
            datasets: [{
                label: 'member',
                data: [
                  @foreach($data as $row)
                    {{ $row[1] }}, 
                  @endforeach
                ],
                backgroundColor: '#5e72e4',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: false
                }
            },events:[]
        }
    });
    </script>
  @endsection