@extends('layouts.layout')
  @section('content')
   <body id="app-container" class="menu-default show-spinner">
      <nav class="navbar fixed-top">
         <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
               <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                  <rect x="0.48" y="0.5" width="7" height="1" />
                  <rect x="0.48" y="7.5" width="7" height="1" />
                  <rect x="0.48" y="15.5" width="7" height="1" />
               </svg>
               <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                  <rect x="1.56" y="0.5" width="16" height="1" />
                  <rect x="1.56" y="7.5" width="16" height="1" />
                  <rect x="1.56" y="15.5" width="16" height="1" />
               </svg>
            </a>
            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                  <rect x="0.5" y="0.5" width="25" height="1" />
                  <rect x="0.5" y="7.5" width="25" height="1" />
                  <rect x="0.5" y="15.5" width="25" height="1" />
               </svg>
            </a>
            <div class="upr-icon">
               <a href="#">
               <i class="simple-icon-magnifier" data-toggle="modal" data-target="#sem-login"></i> <span class="d-inline-block"></span>
               </a>
               <a href="#">
               <i class="simple-icon-basket-loaded"></i> <span class="d-inline-block"></span>
               </a>
               <a href="#">
               <i class="fa fa-barcode"></i><span class="d-inline-block"></span>
               <span></span>
               </a>
               <a href="#">
               <i class="simple-icon-folder-alt"></i> <span class="d-inline-block"></span>
               </a>
            </div>
         </div>
         <a class="navbar-logo" href="Dashboard.Default.html">
         <span class="logo d-none d-xs-block"></span>
         <span class="logo-mobile d-block d-xs-none"></span>
         </a>
         <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
               <div class="d-none d-md-inline-block align-text-bottom mr-3">
                  <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1"
                     data-toggle="tooltip" data-placement="left" title="Dark Mode">
                     <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                     <label class="custom-switch-btn" for="switchDark"></label>
                  </div>
               </div>
               <div class="d-none d-md-inline-block align-text-bottom clock-cstm">
                  <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1"
                     data-toggle="tooltip" data-placement="left" title="Clock In & Clock Out">
                     <i class="simple-icon-clock"></i>
                  </div>
               </div>
               <div class="position-relative d-none d-sm-inline-block">
                  <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                  <i class="simple-icon-grid"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                     <a href="#" class="icon-menu-item">
                     <i class="iconsminds-equalizer d-block"></i>
                     <span>Settings</span>
                     </a>
                     <a href="#" class="icon-menu-item">
                     <i class="iconsminds-male-female d-block"></i>
                     <span>Users</span>
                     </a>
                     <a href="#" class="icon-menu-item">
                     <i class="iconsminds-puzzle d-block"></i>
                     <span>Components</span>
                     </a>
                     <a href="#" class="icon-menu-item">
                     <i class="iconsminds-bar-chart-4 d-block"></i>
                     <span>Profits</span>
                     </a>
                     <a href="#" class="icon-menu-item">
                     <i class="iconsminds-file d-block"></i>
                     <span>Surveys</span>
                     </a>
                     <a href="#" class="icon-menu-item">
                     <i class="iconsminds-suitcase d-block"></i>
                     <span>Tasks</span>
                     </a>
                  </div>
               </div>
               <div class="position-relative d-inline-block">
                  <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="simple-icon-bell"></i>
                  <span class="count">3</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                     <div class="scroll">
                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                           <a href="#">
                           <img src="img/profile-pic-l-2.jpg" alt="Notification Image"
                              class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                           </a>
                           <div class="pl-3">
                              <a href="#">
                                 <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                 <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                              </a>
                           </div>
                        </div>
                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                           <a href="#">
                           <img src="img/notification-thumb.jpg" alt="Notification Image"
                              class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                           </a>
                           <div class="pl-3">
                              <a href="#">
                                 <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                 <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                              </a>
                           </div>
                        </div>
                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                           <a href="#">
                           <img src="img/notification-thumb-2.jpg" alt="Notification Image"
                              class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                           </a>
                           <div class="pl-3">
                              <a href="#">
                                 <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                 <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                              </a>
                           </div>
                        </div>
                        <div class="d-flex flex-row mb-3 pb-3 ">
                           <a href="#">
                           <img src="img/notification-thumb-3.jpg" alt="Notification Image"
                              class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                           </a>
                           <div class="pl-3">
                              <a href="#">
                                 <p class="font-weight-medium mb-1">3 items just added to wish list by a user!
                                 </p>
                                 <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
               <i class="simple-icon-size-fullscreen"></i>
               <i class="simple-icon-size-actual"></i>
               </button>
            </div>
            <div class="user d-inline-block">
               <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
               <span class="name">Sarah Kortney</span>
               <span>
               <img alt="Profile Picture" src="img/profile-pic-l.jpg" />
               </span>
               </button>
                <div class="dropdown-menu dropdown-menu-right mt-3">
                  <a class="dropdown-item" href="#">Account</a>
                  <a class="dropdown-item" href="roster-management.html">Roster Management</a>
                  <a class="dropdown-item" href="availability.html">Availability</a>
                  <a class="dropdown-item" href="roster.html">Roster</a>
                  <a class="dropdown-item" href="#">Sign out</a>
               </div>
            </div>
         </div>
      </nav>
      <div class="menu">
         <div class="main-menu">
            <div class="scroll">
               <ul class="list-unstyled">
                  <li class="active">
                     <a href="index.html">
                     <i class="iconsminds-shop-4"></i>
                     <span>Home</span>
                     </a>
                  </li>
                  <li>
                     <a href="#sale">
                     <i class="simple-icon-basket-loaded"></i> Sales
                     </a>
                  </li>
                  <li>
                     <a href="target.html">
                     <i class="iconsminds-bar-chart-4"></i> Targets
                     </a>
                  </li>
                  <li>
                     <a href="#customer">
                     <i class="iconsminds-male-female d-block"></i> Customers
                     </a>
                  </li>
                  <li>
                     <a href="#product">
                     <i class="iconsminds-puzzle d-block"></i> Products
                     </a>
                  </li>
                  <li>
                     <a href="#connection">
                     <i class="iconsminds-three-arrow-fork"></i> Connections
                     </a>
                  </li>
                  <li class="text-center">
                     <a href="#" target="_blank">
                     <i class="iconsminds-file"></i>Reconciliation
                     </a>
                  </li>
                  <li>
                     <a href="#report">
                     <i class="iconsminds-library"></i> Reports
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="sub-menu">
            <div class="scroll">
               <ul class="list-unstyled" data-link="sale">
                  <li>
                     <a href="new-sale.html"><i class="simple-icon-event"></i>
                     <span class="d-inline-block"> New sale</span>
                     </a>
                  </li>
                  <li>
                    <a href="qsl.html"><i class="simple-icon-notebook"></i>
                     <span class="d-inline-block"> QSL</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <i class="simple-icon-user-following"></i>
                     <span class="d-inline-block">On Account</span>
                     </a>
                  </li>
               </ul>
               <ul class="list-unstyled" data-link="product" id="menuTypes">
                  <!-- <li>
                     <a href="#">
                     <i class="simple-icon-bag"></i>
                     <span class="d-inline-block">Products</span>
                     </a>
                  </li> -->
                  <li>
                     <a href="product.html">
                     <i class="simple-icon-magnifier"></i>
                     <span class="d-inline-block">Search</span>
                     </a>
                  </li>
                 <!--  <li>
                     <a href="#">
                     <i class="simple-icon-check"></i>
                     <span class="d-inline-block">Receive Stock</span>
                     </a>
                  </li> -->
                  <li>
                     <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                        aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                     <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Stock</span>
                     </a>
                     <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                        <ul class="list-unstyled inner-level-menu">
                           <li>
                              <a href="product-received-invoice.html">
                              <i class="simple-icon-badge"></i>
                              <span
                                 class="d-inline-block">Receive Stock</span>
                              </a>
                           </li>
                           <li>
                              <a href="stock-transfer.html">
                              <i class="simple-icon-rocket"></i>
                              <span
                                 class="d-inline-block">Transfer Stock</span>
                              </a>
                           </li>
                           <li>
                              <a href="stock-return.html">
                              <i class="simple-icon-pie-chart"></i>
                              <span
                                 class="d-inline-block">Stock Return</span>
                              </a>
                           </li>
						   <li>
							 <a href="stocktake.html">
							 <i class="simple-icon-list"></i>
							 <span
								class="d-inline-block">Stocktake</span>
							 </a>
						  </li>
                        </ul>
                     </div>
                  </li>


               </ul>
			    <ul class="list-unstyled" data-link="customer">
                  <li>
                     <a href="customer-search.html"><i class="simple-icon-event"></i>
                     <span class="d-inline-block"> Customer Search</span>
                     </a>
                  </li>
                  <li>
                     <a href="customer-comms.html">
                     <i class="simple-icon-notebook"></i>
                     <span class="d-inline-block">Customer Comms </span>
                     </a>
                  </li>

               </ul>
               <ul class="list-unstyled" data-link="connection">
                  <li>
                     <a href="#">
                     <i class="iconsminds-three-arrow-fork"></i>
                     <span class="d-inline-block">Connections</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <i class="simple-icon-link"></i>
                     <span class="d-inline-block">Compliance</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                        aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                     <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Reconciliation</span>
                     </a>
                     <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                        <ul class="list-unstyled inner-level-menu">
                           <li>
                              <a href="#">
                              <i class="simple-icon-pie-chart"></i>
                              <span
                                 class="d-inline-block">Reconciliation dashboard</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="iconsminds-three-arrow-fork"></i>
                              <span
                                 class="d-inline-block">Outstanding Connections</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="simple-icon-credit-card"></i>
                              <span
                                 class="d-inline-block">Payments</span>
                              </a>
                           </li>
                           <li>
                              <a href="#" data-toggle="collapse" data-target="#collapseMenuTypess" aria-expanded="true"
                                 aria-controls="collapseMenuTypess" class="rotate-arrow-icon">
                              <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Claims</span>
                              </a>
                              <div id="collapseMenuTypess" class="collapse show" data-parent="#menuTypes">
                                 <ul class="list-unstyled inner-level-menu">
                                    <li>
                                       <a href="#">
                                       <i class="simple-icon-notebook"></i>
                                       <span
                                          class="d-inline-block">All Claims</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <i class="simple-icon-mouse"></i>
                                       <span
                                          class="d-inline-block">Outstanding Claims</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <i class="simple-icon-grid"></i>
                                       <span
                                          class="d-inline-block">Claims Template</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <i class="simple-icon-doc"></i>
                                       <span
                                          class="d-inline-block">Disputes Template</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <i class="simple-icon-layers"></i>
                                       <span
                                          class="d-inline-block">Bulk Update Status By Upload</span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </li>
               </ul>
               <ul class="list-unstyled" data-link="report">
                  <li>
                     <a href="#">
                     <i class="simple-icon-chart"></i> <span class="d-inline-block">Report Dashboard</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                        aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                     <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Claims</span>
                     </a>
                     <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                        <ul class="list-unstyled inner-level-menu">
                           <li>
                              <a href="#">
                              <i class="iconsminds-library"></i>
                              <span
                                 class="d-inline-block">Sale Reports</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="simple-icon-user-follow"></i>
                              <span
                                 class="d-inline-block">Sales By User</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="simple-icon-credit-card"></i>
                              <span
                                 class="d-inline-block">Sales payment Method</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="simple-icon-book-open"></i>
                              <span
                                 class="d-inline-block">Sales master Report</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="simple-icon-bag"></i>
                              <span
                                 class="d-inline-block">Prepaid sales</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                        aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                     <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Claims</span>
                     </a>
                     <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                        <ul class="list-unstyled inner-level-menu">
                           <li>
                              <a href="#">
                              <i class="simple-icon-control-pause"></i> <span
                                 class="d-inline-block">Stock Reports</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="simple-icon-chart"></i>
                              <span
                                 class="d-inline-block">Stock Report</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="simple-icon-layers"></i>
                              <span
                                 class="d-inline-block">Stock soid Replenishment</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="iconsminds-arrow-refresh"></i>
                              <span
                                 class="d-inline-block">Stock Ageing</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="simple-icon-hourglass"></i>
                              <span
                                 class="d-inline-block">Stock Holdings</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="simple-icon-list"></i>
                              <span
                                 class="d-inline-block">Stock History</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="simple-icon-basket-loaded"></i>
                              <span
                                 class="d-inline-block">Products Received</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <a href="#">
                     <i class="simple-icon-doc"></i><span class="d-inline-block">Profit Reports</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <i class="simple-icon-notebook"></i><span class="d-inline-block">Daily reco variances Reports</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <main>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12 col-lg-3 bg-white cstm-welcome">
                  <h2 class="hding-cstm"> welcome</h2>
                  <div class="row">
                     <div class="col-2 pr-0">
                        <div class="user-cstm">
                           <i class="simple-icon-user"></i>
                        </div>
                     </div>
                     <div class="col-8">
                        <div class="user-name">
                           <h3>Jamesh Smith</h3>
                        </div>
                     </div>
                  </div>
                  <div class="separator my-2"></div>
                  <div class="row">
                     <div class="col-2 pr-0">
                        <div class="user-cstm">
                           <i class="iconsminds-shop-4"></i>
                        </div>
                     </div>
                     <div class="col-8">
                        <div class="user-name">
                           <h3 class="mt-2">Vodafone Store</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-9">
                  <div class="row">
                     <div class="col-lg-3 col-md-12">
                        <div class="btn-dashboard">
                           <a href="new-sale.html"><button type="button" class="btn btn-primary"><i class="simple-icon-basket-loaded"></i><br><span class="mt-3">New Sale</span></button></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-12">
                        <div class="btn-dashboard">
                           <button type="button" class="btn btn-primary"><i class="fa fa-barcode"></i><br><span class="mt-3">Price Check </span></button>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-12">
                        <div class="btn-dashboard">
                           <button type="button" class="btn btn-primary"><i class="simple-icon-folder-alt"></i><br><span class="mt-3">Daily Task Progress</span></button>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-12">
                        <div class="btn-dashboard">
                           <button type="button" class="btn btn-primary"><i class="iconsminds-file"></i><br><span class="mt-3">Today Reconciliation</span></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mrg-up">
               <div class="row">
                  <div class="col-md-4 col-lg-3 col-12 pl-2">
                     <div class="tabs-dashboard sale-cstm-option mt-5">
                        <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                                 aria-controls="first" aria-selected="true">
                                 <div class="card">
                                    <div class="card-header p-0 position-relative">
                                       <div class="position-absolute handle card-icon">
                                          <i class="simple-icon-shuffle"></i>
                                       </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                       <h6 class="mb-0">Today Sale</h6>
                                       <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                          data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="3"
                                          data-show-percent="true">
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " id="second-tab" data-toggle="tab" href="#second" role="tab"
                                 aria-controls="second" aria-selected="false">
                                 <div class="card">
                                    <div class="card-header p-0 position-relative">
                                       <div class="position-absolute handle card-icon">
                                          <i class="simple-icon-shuffle"></i>
                                       </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                       <h6 class="mb-0">Today Connection</h6>
                                       <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                          data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="4"
                                          data-show-percent="true">
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " id="third-tab" data-toggle="tab" href="#third" role="tab"
                                 aria-controls="third" aria-selected="false">
                                 <div class="card">
                                    <div class="card-header p-0 position-relative">
                                       <div class="position-absolute handle card-icon">
                                          <i class="simple-icon-shuffle"></i>
                                       </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                       <h6 class="mb-0">Incomplete Sale/Connection</h6>
                                       <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                          data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="1"
                                          data-show-percent="true">
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-9 col-12">
                     <div class="tab-content mt-5">
                        <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                           <div class="card">
                              <div class="card-body table-sales">
                                 <table class="data-table data-table-scrollable responsive nowrap">
                                    <thead>
                                       <tr>
                                          <th>Sale</th>
                                          <th>Name</th>
                                          <th>Sale R</th>
                                          <th>sale Date</th>
                                          <th>sale Type</th>
                                          <th>sale Total</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
                                        <tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
										<tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
										<tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
										<tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
										<tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
										<tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
										<tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade tablewidth" id="second" role="tabpanel" aria-labelledby="second-tab">
							<div class="card">
                              <div class="card-body table-sales">
                                 <table class="data-table data-table-scrollable responsive nowrap">
                                    <thead>
                                       <tr>
                                          <th>Sale</th>
                                          <th>Name</th>
                                          <th>Sale R</th>
                                          <th>sale Date</th>
                                          <th>sale Type</th>
                                          <th>sale Total</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>

                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade tablewidth" id="third" role="tabpanel" aria-labelledby="third-tab">
								<div class="card">
                              <div class="card-body table-sales">
                                 <table class="data-table data-table-scrollable responsive nowrap">
                                    <thead>
                                       <tr>
                                          <th>Sale</th>
                                          <th>Name</th>
                                          <th>Sale R</th>
                                          <th>sale Date</th>
                                          <th>sale Type</th>
                                          <th>sale Total</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <p class="list-item-heading">#b-by88</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lorem Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">Lipsum</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">5 May 2020</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">In Store</p>
                                          </td>
                                          <td>
                                             <p class="text-muted">$ 30.00</p>
                                          </td>
                                       </tr>

                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </main>
      <footer class="page-footer">
         <div class="footer-content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 col-sm-6">
                     <p class="mb-0 text-muted">Ⓒ 2017-2020 Software</p>
                  </div>
                  <div class="col-sm-6 d-none d-sm-block">
                     <ul class="breadcrumb pt-0 pr-0 float-right">
                        <li class="breadcrumb-item mb-0">
                           <a href="#" class="btn-link">Guide</a>
                        </li>
                        <!--  <li class="breadcrumb-item mb-0">
                           <a href="#" class="btn-link">Purchase</a>
                           </li>
                           <li class="breadcrumb-item mb-0">
                           <a href="#" class="btn-link">Docs</a>
                           </li> -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-----------------------Modal--------------------->
      <div class="modal fade seminor-login-modal cstm-modal" data-backdrop="static" id="sem-login">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <!-- Modal body -->
               <div class="modal-body seminor-login-modal-body">
                  <button type="button" class="close" data-dismiss="modal">
                  <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                  </button>
                  <form class="seminor-login-form">
                     <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                  <form class="card card-sm">
                  <div class="card-body row no-gutters align-items-center search-cstmsss">
                  <div class="col">
                  <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search here...">
                  </div>
                  <div class="col-auto">
                  <button class="btn btn-lg btn-success btn-search" type="submit"><i class="simple-icon-magnifier"></i></button>
                  </div>
                  </div>
                  </form>
                  </div>
                  <!--end of col-->
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-----------------------Modal-end-------------------->
      <script src="js/vendor/jquery-3.3.1.min.js"></script>
      <script src="js/vendor/bootstrap.bundle.min.js"></script>
      <script src="js/vendor/Chart.bundle.min.js"></script>
      <script src="js/vendor/chartjs-plugin-datalabels.js"></script>
      <script src="js/vendor/moment.min.js"></script>
      <script src="js/vendor/fullcalendar.min.js"></script>
      <script src="js/vendor/datatables.min.js"></script>
      <script src="js/vendor/perfect-scrollbar.min.js"></script>
      <script src="js/vendor/progressbar.min.js"></script>
      <script src="js/vendor/jquery.barrating.min.js"></script>
      <script src="js/vendor/select2.full.js"></script>
      <script src="js/vendor/nouislider.min.js"></script>
      <script src="js/vendor/bootstrap-datepicker.js"></script>
      <script src="js/vendor/Sortable.js"></script>
      <script src="js/vendor/mousetrap.min.js"></script>
      <script src="js/vendor/glide.min.js"></script>
      <script src="js/dore.script.js"></script>
      <script src="js/scripts.js"></script>
    @endsection
