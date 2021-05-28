@extends('organization.layouts.layout')
  @section('content')

     
      
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
     
    @endsection
