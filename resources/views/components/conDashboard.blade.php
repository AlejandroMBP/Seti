@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<div class="main-panel">
    <div class="pb-0 content-wrapper">
      <div class="flex-wrap page-header">
        <h3 class="mb-0"> Bienvenido {{Auth::user()->name}}<span class="pl-0 h6 pl-sm-2 text-muted d-inline-block"> a su panel de administracion
        </span>
        </h3>
        <div class="d-flex">
          <button type="button" class="bg-white border btn btn-sm btn-icon-text">
            <i class="mdi mdi-email btn-icon-prepend"></i> Email </button>
          <button type="button" class="ml-3 bg-white border btn btn-sm btn-icon-text">
            <i class="mdi mdi-printer btn-icon-prepend"></i> Print </button>
          <button type="button" class="ml-3 btn btn-sm btn-success"> Add User </button>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
          <div class="row">
            <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
              <div class="card bg-warning">
                <div class="px-3 py-4 card-body">
                  <div class="d-flex justify-content-between align-items-start">
                    <div class="color-card">
                      <p class="mb-0 color-card-head">Sales</p>
                      <h2 class="text-white"> $8,753.<span class="h5">00</span>
                      </h2>
                    </div>
                    <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                  </div>
                  <h6 class="text-white">18.33% Since last month</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
              <div class="card bg-danger">
                <div class="px-3 py-4 card-body">
                  <div class="d-flex justify-content-between align-items-start">
                    <div class="color-card">
                      <p class="mb-0 color-card-head">Margin</p>
                      <h2 class="text-white"> $5,300.<span class="h5">00</span>
                      </h2>
                    </div>
                    <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                  </div>
                  <h6 class="text-white">13.21% Since last month</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
              <div class="card bg-primary">
                <div class="px-3 py-4 card-body">
                  <div class="d-flex justify-content-between align-items-start">
                    <div class="color-card">
                      <p class="mb-0 color-card-head">Orders</p>
                      <h2 class="text-white"> $1,753.<span class="h5">00</span>
                      </h2>
                    </div>
                    <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                  </div>
                  <h6 class="text-white">67.98% Since last month</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
              <div class="card bg-success">
                <div class="px-3 py-4 card-body">
                  <div class="d-flex justify-content-between align-items-start">
                    <div class="color-card">
                      <p class="mb-0 color-card-head">Affiliate</p>
                      <h2 class="text-white">2368</h2>
                    </div>
                    <i class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-success"></i>
                  </div>
                  <h6 class="text-white">20.32% Since last month</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-7">
                  <h5>Business Survey</h5>
                  <p class="text-muted"> Show overview jan 2018 - Dec 2019 <a class="pl-2 text-muted font-weight-medium" href="#"><u>See Details</u></a>
                  </p>
                </div>
                <div class="col-sm-5 text-md-right">
                  <button type="button" class="mb-3 btn btn-icon-text mb-sm-0 btn-inverse-primary font-weight-normal">
                    <i class="mdi mdi-email btn-icon-prepend"></i>Download Report </button>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3 card mb-sm-0">
                    <div class="px-4 py-3 card-body">
                      <p class="m-0 survey-head">Today Earnings</p>
                      <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                        <div>
                          <h3 class="m-0 survey-value">$5,300</h3>
                          <p class="m-0 text-success">-310 avg. sales</p>
                        </div>
                        <div id="earningChart" class="flot-chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3 card mb-sm-0">
                    <div class="px-4 py-3 card-body">
                      <p class="m-0 survey-head">Product Sold</p>
                      <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                        <div>
                          <h3 class="m-0 survey-value">$9,100</h3>
                          <p class="m-0 text-danger">-310 avg. sales</p>
                        </div>
                        <div id="productChart" class="flot-chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="px-4 py-3 card-body">
                      <p class="m-0 survey-head">Today Orders</p>
                      <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                        <div>
                          <h3 class="m-0 survey-value">$4,354</h3>
                          <p class="m-0 text-success">-310 avg. sales</p>
                        </div>
                        <div id="orderChart" class="flot-chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="my-3 row">
                <div class="col-sm-12">
                  <div class="flot-chart-wrapper">
                    <div id="flotChart" class="flot-chart">
                      <canvas class="flot-base"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <p class="mb-0 text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. <b>Learn More</b>
                  </p>
                </div>
                <div class="col-sm-4">
                  <p class="mb-0 text-muted">Sales Revenue</p>
                  <h5 class="mb-0 d-inline-block survey-value"> $2,45,500 </h5>
                  <p class="mb-0 d-inline-block text-danger"> last 8 months </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="overflow-auto px-0 card-body">
              <h4 class="pl-4 card-title">Purchase History</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead class="bg-light">
                    <tr>
                      <th>Customer</th>
                      <th>Project</th>
                      <th>Invoice</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assetsDash/images/faces/face1.jpg" alt="image" />
                          <div class="ml-3 table-user-name">
                            <p class="mb-0 font-weight-medium"> Cecelia Cooper </p>
                            <small> Payment on hold</small>
                          </div>
                        </div>
                      </td>
                      <td>Angular Admin</td>
                      <td>
                        <div class="badge badge-inverse-success"> Completed </div>
                      </td>
                      <td>$ 77.99</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assetsDash/images/faces/face10.jpg" alt="image" />
                          <div class="ml-3 table-user-name">
                            <p class="mb-0 font-weight-medium"> Victor Watkins </p>
                            <small>Email verified</small>
                          </div>
                        </div>
                      </td>
                      <td>Angular Admin</td>
                      <td>
                        <div class="badge badge-inverse-success"> Completed </div>
                      </td>
                      <td>$245.30</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assetsDash/images/faces/face11.jpg" alt="image" />
                          <div class="ml-3 table-user-name">
                            <p class="mb-0 font-weight-medium"> Ada Burgess </p>
                            <small>Email verified</small>
                          </div>
                        </div>
                      </td>
                      <td>One page html</td>
                      <td>
                        <div class="badge badge-inverse-danger"> Completed </div>
                      </td>
                      <td>$ 160.25</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assetsDash/images/faces/face13.jpg" alt="image" />
                          <div class="ml-3 table-user-name">
                            <p class="mb-0 font-weight-medium"> Dollie Lynch </p>
                            <small>Email verified</small>
                          </div>
                        </div>
                      </td>
                      <td>Wordpress</td>
                      <td>
                        <div class="badge badge-inverse-success"> Declined </div>
                      </td>
                      <td>$ 123.21</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assetsDash/images/faces/face16.jpg" alt="image" />
                          <div class="ml-3 table-user-name">
                            <p class="mb-0 font-weight-medium"> Harry Holloway </p>
                            <small>Payment on process</small>
                          </div>
                        </div>
                      </td>
                      <td>VueJs Application</td>
                      <td>
                        <div class="badge badge-inverse-danger"> Declined </div>
                      </td>
                      <td>$ 150.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <a class="pl-4 mt-3 text-black d-block" href="#">
                <span class="font-weight-medium h6">View all order history</span>
                <i class="mdi mdi-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="card-title font-weight-medium"> Business Survey </div>
              <p class="text-muted"> Lorem ipsum dolor sitadipiscing elit, sed amet do eiusmod tempor we find a new solution </p>
              <div class="flex-wrap py-2 d-flex border-bottom border-top justify-content-between">
                <img class="survey-img mb-lg-3" src="assetsDash/images/dashboard/img_3.jpg" alt="" />
                <div class="pt-2">
                  <h5 class="mb-0">Villa called Archagel</h5>
                  <p class="mb-0 text-muted">St, San Diego, CA</p>
                  <h5 class="mb-0">$600/mo</h5>
                </div>
              </div>
              <div class="flex-wrap py-2 d-flex border-bottom justify-content-between">
                <img class="survey-img mb-lg-3" src="assetsDash/images/dashboard/img_1.jpg" alt="" />
                <div class="pt-2">
                  <h5 class="mb-0">Luxury villa in Hermo</h5>
                  <p class="mb-0 text-muted">Glendale, CA</p>
                  <h5 class="mb-0">$900/mo</h5>
                </div>
              </div>
              <div class="flex-wrap py-2 d-flex border-bottom justify-content-between">
                <img class="survey-img mb-lg-3" src="assetsDash/images/dashboard/img_2.jpg" alt="" />
                <div class="pt-2">
                  <h5 class="mb-0">House on the Clarita</h5>
                  <p class="mb-0 text-muted">Business Survey</p>
                  <h5 class="mb-0">$459/mo</h5>
                </div>
              </div>
              <a class="mt-3 text-black d-block font-weight-medium h6" href="#">View all <i class="mdi mdi-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="text-black card-title">To do Task List</h4>
              <p class="text-muted">Created by anonymous</p>
              <div class="list-wrapper">
                <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" /> Meeting with Alisa </label>
                      <span class="list-time">4 Hours Ago</span>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" /> Create invoice </label>
                      <span class="list-time">6 Hours Ago</span>
                    </div>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked /> Prepare for presentation </label>
                      <span class="list-time">2 Hours Ago</span>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" /> Pick up kids from school </label>
                      <span class="list-time">8 Hours Ago</span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="flex-wrap add-items d-flex flex-sm-nowrap">
                <input type="text" class="flex-grow form-control todo-list-input" placeholder="Add task name" />
                <button class="add btn btn-primary font-weight-regular text-nowrap" id="add-task"> Add Task </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="text-black card-title">Recent Customers</h4>
              <p class="text-muted">All contacts</p>
              <div class="pt-2 pb-1 row">
                <div class="col-12 col-sm-7">
                  <div class="row">
                    <div class="col-4 col-md-4">
                      <img class="customer-img" src="assetsDash/images/faces/face22.jpg" alt="" />
                    </div>
                    <div class="col-8 col-md-8 p-sm-0">
                      <h6 class="mb-0">Cecelia Cooper</h6>
                      <p class="text-muted font-12">05:58AM</p>
                    </div>
                  </div>
                </div>
                <div class="pl-0 col-sm-5">
                  <canvas id="areaChart1"></canvas>
                </div>
              </div>
              <div class="py-1 row">
                <div class="col-sm-7">
                  <div class="row">
                    <div class="col-4 col-sm-4">
                      <img class="customer-img" src="assetsDash/images/faces/face25.jpg" alt="" />
                    </div>
                    <div class="col-8 col-sm-8 p-sm-0">
                      <h6 class="mb-0">Victor Watkins</h6>
                      <p class="text-muted font-12">05:28AM</p>
                    </div>
                  </div>
                </div>
                <div class="pl-0 col-sm-5">
                  <canvas id="areaChart2"></canvas>
                </div>
              </div>
              <div class="py-1 row">
                <div class="col-sm-7">
                  <div class="row">
                    <div class="col-4 col-sm-4">
                      <img class="customer-img" src="assetsDash/images/faces/face15.jpg" alt="" />
                    </div>
                    <div class="col-8 col-sm-8 p-sm-0">
                      <h6 class="mb-0">Ada Burgess</h6>
                      <p class="text-muted font-12">05:57AM</p>
                    </div>
                  </div>
                </div>
                <div class="pl-0 col-sm-5">
                  <canvas id="areaChart3"></canvas>
                </div>
              </div>
              <div class="py-1 row">
                <div class="col-sm-7">
                  <div class="row">
                    <div class="col-4 col-sm-4">
                      <img class="customer-img" src="assetsDash/images/faces/face5.jpg" alt="" />
                    </div>
                    <div class="col-8 col-sm-8 p-sm-0">
                      <h6 class="mb-0">Dollie Lynch</h6>
                      <p class="text-muted font-12">05:59AM</p>
                    </div>
                  </div>
                </div>
                <div class="pl-0 col-sm-5">
                  <canvas id="areaChart4"></canvas>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-7">
                  <div class="row">
                    <div class="col-4 col-sm-4">
                      <img class="customer-img" src="assetsDash/images/faces/face2.jpg" alt="" />
                    </div>
                    <div class="col-8 col-sm-8 p-sm-0">
                      <h6 class="mb-0">Harry Holloway</h6>
                      <p class="mb-0 text-muted font-12">05:13AM</p>
                    </div>
                  </div>
                </div>
                <div class="pl-0 col-sm-5">
                  <canvas id="areaChart5" height="100"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="text-black card-title">Business Survey</h4>
              <p class="pb-2 text-muted">Jan 01 2019 - Dec 31 2019</p>
              <canvas id="surveyBar"></canvas>
              <div class="pt-4 pb-3 mx-0 row border-bottom align-items-center">
                <div class="pl-0 col-sm-9">
                  <div class="d-flex">
                    <img src="assetsDash/images/dashboard/img_4.jpg" alt="" />
                    <div class="pl-2">
                      <h6 class="m-0">Red Chair</h6>
                      <p class="m-0">Home Decoration</p>
                    </div>
                  </div>
                </div>
                <div class="pl-0 col-sm-3 pl-sm-3">
                  <div class="mt-3 badge badge-inverse-success mt-sm-0"> +7.7% </div>
                </div>
              </div>
              <div class="py-3 mx-0 row align-items-center">
                <div class="pl-0 col-sm-9">
                  <div class="d-flex">
                    <img src="assetsDash/images/dashboard/img_5.jpg" alt="" />
                    <div class="pl-2">
                      <h6 class="m-0">Gray Sofa</h6>
                      <p class="m-0">Home Decoration</p>
                    </div>
                  </div>
                </div>
                <div class="pl-0 col-sm-3 pl-sm-3">
                  <div class="mt-3 badge badge-inverse-success mt-sm-0"> +7.7% </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8 grid-margin stretch-card">
          <div class="card card-calender">
            <div class="card-body">
              <div class="pt-4 row">
                <div class="col-sm-6">
                  <h1 class="text-white">10:16PM</h1>
                  <h5 class="text-white">Monday 25 October, 2016</h5>
                  <h5 class="pt-2 m-0 text-white">Precipitation:50%</h5>
                  <h5 class="m-0 text-white">Humidity:23%</h5>
                  <h5 class="m-0 text-white">Wind:13 km/h</h5>
                </div>
                <div class="pt-3 col-sm-6 text-sm-right pt-sm-0">
                  <h3 class="text-white">Clear Sky</h3>
                  <p class="m-0 text-white">London, UK</p>
                  <h3 class="m-0 text-white">21°C</h3>
                </div>
              </div>
              <div class="mt-5 row">
                <div class="col-sm-12">
                  <ul class="overflow-auto pl-0 d-flex">
                    <li class="text-center text-white weakly-weather-item font-weight-medium active">
                      <p class="mb-0">TODAY</p>
                      <i class="mdi mdi-weather-cloudy"></i>
                      <p class="mb-0">21<span class="symbol">°c</span></p>
                    </li>
                    <li class="text-center text-white weakly-weather-item font-weight-medium">
                      <p class="mb-0">MON</p>
                      <i class="mdi mdi-weather-hail"></i>
                      <p class="mb-0">21<span class="symbol">°c</span></p>
                    </li>
                    <li class="text-center text-white weakly-weather-item font-weight-medium">
                      <p class="mb-0">TUE</p>
                      <i class="mdi mdi-weather-cloudy"></i>
                      <p class="mb-0">21<span class="symbol">°c</span></p>
                    </li>
                    <li class="text-center text-white weakly-weather-item font-weight-medium">
                      <p class="mb-0">WED</p>
                      <i class="mdi mdi-weather-fog"></i>
                      <p class="mb-0">21<span class="symbol">°c</span></p>
                    </li>
                    <li class="text-center text-white weakly-weather-item font-weight-medium">
                      <p class="mb-0">THU</p>
                      <i class="mdi mdi-weather-hail"></i>
                      <p class="mb-0">21<span class="symbol">°c</span></p>
                    </li>
                    <li class="text-center text-white weakly-weather-item font-weight-medium">
                      <p class="mb-0">FRI</p>
                      <i class="mdi mdi-weather-cloudy"></i>
                      <p class="mb-0">21<span class="symbol">°c</span></p>
                    </li>
                    <li class="text-center text-white weakly-weather-item font-weight-medium">
                      <p class="mb-0">SAT</p>
                      <i class="mdi mdi-weather-hail"></i>
                      <p class="mb-0">21<span class="symbol">°c</span></p>
                    </li>
                    <li class="text-center text-white weakly-weather-item font-weight-medium">
                      <p class="mb-0">SUN</p>
                      <i class="mdi mdi-weather-cloudy"></i>
                      <p class="mb-0">21<span class="symbol">°c</span></p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 grid-margin stretch-card">
          <!--activity-->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">
                <span class="d-flex justify-content-between">
                  <span>Activity</span>
                  <span class="dropdown dropleft d-block">
                    <span id="dropdownMenuButton1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <span><i class="mdi mdi-dots-horizontal"></i></span>
                    </span>
                    <span class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <a class="dropdown-item" href="#">Contact</a>
                      <a class="dropdown-item" href="#">Helpdesk</a>
                      <a class="dropdown-item" href="#">Chat with us</a>
                    </span>
                  </span>
                </span>
              </h4>
              <ul class="gradient-bullet-list border-bottom">
                <li>
                  <h6 class="mb-0"> It's awesome when we find a new solution </h6>
                  <p class="text-muted">2h ago</p>
                </li>
                <li>
                  <h6 class="mb-0">Report has been updated</h6>
                  <p class="text-muted">
                    <span>2h ago</span>
                    <span class="d-inline-block">
                      <span class="d-flex d-inline-block">
                        <img class="ml-1" src="assetsDash/images/faces/face1.jpg" alt="" />
                        <img class="ml-1" src="assetsDash/images/faces/face10.jpg" alt="" />
                        <img class="ml-1" src="assetsDash/images/faces/face14.jpg" alt="" />
                      </span>
                    </span>
                  </p>
                </li>
                <li>
                  <h6 class="mb-0"> Analytics dashboard has been created#Slack </h6>
                  <p class="text-muted">2h ago</p>
                </li>
                <li>
                  <h6 class="mb-0"> It's awesome when we find a new solution </h6>
                  <p class="text-muted">2h ago</p>
                </li>
              </ul>
              <a class="mt-3 mb-0 text-black d-block h6" href="#">View all <i class="mdi mdi-chevron-right"></i></a>
            </div>
          </div>
          <!--activity ends-->
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-md-6 grid-margin stretch-card">
          <div class="card card-invoice">
            <div class="card-body">
              <h4 class="pb-3 card-title">Pending invoices</h4>
              <div class="list-card">
                <div class="row align-items-center">
                  <div class="col-7 col-sm-8">
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <img src="assetsDash/images/faces/face2.jpg" alt="" />
                      </div>
                      <div class="pr-0 col-sm-8 pl-sm-0">
                        <span>06 Jan 2019</span>
                        <h6 class="mb-1 mb-sm-0">Isabel Cross</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-5 col-sm-4">
                    <div class="pt-1 d-flex align-items-center">
                      <div class="reload-outer bg-info">
                        <i class="mdi mdi-reload"></i>
                      </div>
                      <div class="pt-3 pl-1 dropdown dropleft">
                        <div id="dropdownMenuButton2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <p><i class="mdi mdi-dots-vertical"></i></p>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                          <a class="dropdown-item" href="#">Sales</a>
                          <a class="dropdown-item" href="#">Track Invoice</a>
                          <a class="dropdown-item" href="#">Payment History</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-card">
                <div class="row align-items-center">
                  <div class="col-7 col-sm-8">
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <img src="assetsDash/images/faces/face3.jpg" alt="" />
                      </div>
                      <div class="pr-0 col-sm-8 pl-sm-0">
                        <span>18 Mar 2019</span>
                        <h6 class="mb-1 mb-sm-0">Carrie Parker</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-5 col-sm-4">
                    <div class="pt-1 d-flex align-items-center">
                      <div class="reload-outer bg-primary">
                        <i class="mdi mdi-reload"></i>
                      </div>
                      <div class="pt-3 pl-1 dropdown dropleft">
                        <div id="dropdownMenuButton3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <p><i class="mdi mdi-dots-vertical"></i></p>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                          <a class="dropdown-item" href="#">Sales</a>
                          <a class="dropdown-item" href="#">Track Invoice</a>
                          <a class="dropdown-item" href="#">Payment History</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-card">
                <div class="row align-items-center">
                  <div class="col-7 col-sm-8">
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <img src="assetsDash/images/faces/face11.jpg" alt="" />
                      </div>
                      <div class="pr-0 col-sm-8 pl-sm-0">
                        <span>10 Apr 2019</span>
                        <h6 class="mb-1 mb-sm-0">Don Bennett</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-5 col-sm-4">
                    <div class="pt-1 d-flex align-items-center">
                      <div class="reload-outer bg-warning">
                        <i class="mdi mdi-reload"></i>
                      </div>
                      <div class="pt-3 pl-1 dropdown dropleft">
                        <div id="dropdownMenuButton4" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <p><i class="mdi mdi-dots-vertical"></i></p>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                          <a class="dropdown-item" href="#">Sales</a>
                          <a class="dropdown-item" href="#">Track Invoice</a>
                          <a class="dropdown-item" href="#">Payment History</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-card">
                <div class="row align-items-center">
                  <div class="col-7 col-sm-8">
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <img src="assetsDash/images/faces/face3.jpg" alt="" />
                      </div>
                      <div class="pr-0 col-sm-8 pl-sm-0">
                        <span>18 Mar 2019</span>
                        <h6 class="mb-1 mb-sm-0">Carrie Parker</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-5 col-sm-4">
                    <div class="pt-1 d-flex align-items-center">
                      <div class="reload-outer bg-info">
                        <i class="mdi mdi-reload"></i>
                      </div>
                      <div class="pt-3 pl-1 dropdown dropleft">
                        <div id="dropdownMenuButton5" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <p><i class="mdi mdi-dots-vertical"></i></p>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                          <a class="dropdown-item" href="#">Sales</a>
                          <a class="dropdown-item" href="#">Track Invoice</a>
                          <a class="dropdown-item" href="#">Payment History</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 grid-margin stretch-card">
          <!--datepicker-->
          <div class="card">
            <div class="card-body">
              <div id="inline-datepicker" class="datepicker table-responsive"></div>
            </div>
          </div>
          <!--datepicker ends-->
        </div>
        <div class="col-xl-4 col-md-6 stretch-card grid-margin">
          <!--browser stats-->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Browser stats</h4>
              <div class="py-2 row">
                <div class="col-sm-12">
                  <div class="pb-3 d-flex justify-content-between border-bottom">
                    <div>
                      <img class="mr-2" src="assetsDash/images/browser-logo/opera-logo.png" alt="" />
                      <span class="p">opera mini</span>
                    </div>
                    <p class="mb-0">23%</p>
                  </div>
                </div>
              </div>
              <div class="py-2 row">
                <div class="col-sm-12">
                  <div class="pb-3 d-flex justify-content-between border-bottom">
                    <div>
                      <img class="mr-2" src="assetsDash/images/browser-logo/safari-logo.png" alt="" />
                      <span class="p">Safari</span>
                    </div>
                    <p class="mb-0">07%</p>
                  </div>
                </div>
              </div>
              <div class="py-2 row">
                <div class="col-sm-12">
                  <div class="pb-3 d-flex justify-content-between border-bottom">
                    <div>
                      <img class="mr-2" src="assetsDash/images/browser-logo/chrome-logo.png" alt="" />
                      <span class="p">Chrome</span>
                    </div>
                    <p class="mb-0">33%</p>
                  </div>
                </div>
              </div>
              <div class="py-2 row">
                <div class="col-sm-12">
                  <div class="pb-3 d-flex justify-content-between border-bottom">
                    <div>
                      <img class="mr-2" src="assetsDash/images/browser-logo/firefox-logo.png" alt="" />
                      <span class="p">Firefox</span>
                    </div>
                    <p class="mb-0">17%</p>
                  </div>
                </div>
              </div>
              <div class="py-2 row">
                <div class="col-sm-12">
                  <div class="d-flex justify-content-between">
                    <div>
                      <img class="mr-2" src="assetsDash/images/browser-logo/explorer-logo.png" alt="" />
                      <span class="p">Explorer</span>
                    </div>
                    <p class="mb-0">05%</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--browser stats ends-->
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-center text-muted d-block text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
        <span class="float-none mt-1 text-center float-sm-right d-block mt-sm-0"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a> from Bootstrapdash.com</span>
      </div>
    </footer>
  </div>
@endsection