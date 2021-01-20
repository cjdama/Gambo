<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gambolthemes.net/html-items/gambo_admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 15:03:36 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>Gambo Supermarket Admin</title>
	<link href="asset/css/styles.css" rel="stylesheet">
	<link href="asset/css/admin-style.css" rel="stylesheet">
	
	<!-- Vendor Stylesheets -->
	<link href="asset/vendor//bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	
	<!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

    <body class="sb-nav-fixed">
				@include('partials.navbar')
				@include('partials.sidebar')
				
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Dashboard</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
													Earnings (Monthly)</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-calendar fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>

                            <div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-success shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
													Earnings (Annual)</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						
                            <div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-info shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Order Process
												</div>
												<div class="row no-gutters align-items-center">
													<div class="col-auto">
														<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
													</div>
													<div class="col">
														<div class="progress progress-sm mr-2">
															<div class="progress-bar bg-info" role="progressbar"
																style="width: 50%" aria-valuenow="50" aria-valuemin="0"
																aria-valuemax="100"></div>
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
							

                            <div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-warning shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
														Order Pending</div>
													<div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
												</div>
												<div class="col-auto">
													<i class="fas fa-comments fa-2x text-gray-300"></i>
												</div>
											</div>
										</div>
									</div>
                    		</div>


							<div class="col-xl-12 col-md-12">
							 	<div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
									<div
										class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">2020 Income & Order Summary</h6>
									</div>
									<!-- Card Body -->
									<div class="card-body">
										<div class="chart-area">
											<canvas id="myAreaChart"></canvas>
										</div>
									</div>
                            	</div>
							</div>

							<div class="col-xl-12 col-md-12">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Recent Orders</h4>
										<a href="orders.html" class="view-btn hover-btn">View All</a> 
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:130px">Order ID</th>
														<th>Item</th>
														<th style="width:200px">Date</th>
														<th style="width:300px">Address</th>
														<th style="width:130px">Status</th>
														<th style="width:130px">Total</th>
														<th style="width:100px">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>ORDER12345</td>
														<td>
															<a href="#" target="_blank">Product Title Here</a>
														</td>
														<td>
															<span class="delivery-time">15/06/2020</span>
															<span class="delivery-time">4:00PM - 6.00PM</span>
														</td>
														<td>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</td>
														<td>
															<span class="badge-item badge-status">Pending</span>
														</td>
														<td>$90</td>
														<td class="action-btns">
															<a href="order_view.html" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.html" class="edit-btn"><i class="fas fa-edit"></i></a>
														</td>
													</tr>
													<tr>
														<td>ORDER12346</td>
														<td>
															<a href="#" target="_blank">Product Title Here</a>
														</td>
														<td>
															<span class="delivery-time">13/06/2020</span>
															<span class="delivery-time">2:00PM - 4.00PM</span>
														</td>
														<td>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</td>
														 <td>
															<span class="badge-item badge-status">Pending</span>
														</td>
														<td>$105</td>
														<td class="action-btns">
															<a href="order_view.html" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.html" class="edit-btn"><i class="fas fa-edit"></i></a>
														</td>
													</tr>
													<tr>
														<td>ORDER12347</td>
														<td>
															<a href="#" target="_blank">Product Title Here</a>
														</td>
														<td>
															<span class="delivery-time">13/6/2020</span>
															<span class="delivery-time">5:00PM - 7.00PM</span>
														</td>
														<td>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</td>
														<td>
															<span class="badge-item badge-status">Pending</span>
														</td>
														<td>$60</td>
														<td class="action-btns">
															<a href="order_view.html" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.html" class="edit-btn"><i class="fas fa-edit"></i></a>
														</td>
													</tr>
													<tr>
														<td>ORDER12348</td>
														<td>
															<a href="#" target="_blank">Product Title Here</a>
														</td>
														<td>
															<span class="delivery-time">12/06/2020</span>
															<span class="delivery-time">01:00PM - 3.00PM</span>
														</td>
														<td>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</td>
														<td>
															<span class="badge-item badge-status">Pending</span>
														</td>
														<td>$120</td>
														<td class="action-btns">
															<a href="order_view.html" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.html" class="edit-btn"><i class="fas fa-edit"></i></a>
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
					
                </main>
				@include('partials.footer')
				
            </div>
        </div>
        <script src="asset/js/jquery-3.4.1.min.js"></script>
        <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="asset/vendor/chart/highcharts.js"></script>
		<script src="asset/vendor/chart/exporting.js"></script>
		<script src="asset/vendor/chart/export-data.js"></script>
		<script src="asset/vendor/chart/accessibility.js"></script>
        <script src="asset/js/scripts.js"></script>
        <script src="asset/js/chart.js"></script>
	   
		
		<!-- Bootstrap core JavaScript-->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="assets/endor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="assets/js/sb-admin-2.min.js"></script>

		<!-- Page level plugins -->
		<script src="assets/vendor/chart.js/Chart.min.js"></script>

		<!-- Page level custom scripts -->
		<script src="assets/js/demo/chart-area-demo.js"></script>
		<script src="assets/js/demo/chart-pie-demo.js"></script>



    </body>

<!-- Mirrored from gambolthemes.net/html-items/gambo_admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 15:04:09 GMT -->
</html>