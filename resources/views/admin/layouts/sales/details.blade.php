@extends('admin.master')

@section('admin-content')

					<!--begin::Content-->
					<!-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content"> -->
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Order Details</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-300 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">eCommerce</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Sales</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Order Details</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<a href="{{route('order.listing')}}" class="btn  btn-light-primary btn-sm ms-auto me-lg-n1">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="34" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="currentColor" />
												</svg>Back
											</span>
											<!--end::Svg Icon-->
										</a>
							</div>
							
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->




						
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Order details page-->
								<div class="d-flex flex-column gap-7 gap-lg-10">
									<div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
										<!--begin:::Tabs-->
										<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-lg-n2 me-auto">
											<!--begin:::Tab item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary">Order Summary</a>
											</li>
											<!--end:::Tab item-->
											<!--begin:::Tab item-->
											<!--end:::Tab item-->
										</ul>
										<!--end:::Tabs-->
										<!--begin::Button-->


										<!-- <a href="" class="btn btn-light-primary btn-sm me-lg-n7">Edit Order</a>
										<a href="{{route('order.add')}}" class="btn btn-light-primary btn-sm">Add New Order</a> -->

									</div>
									<!--begin::Order summary-->
									<div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
										<!--begin::Order details-->
										<div class="card card-flush py-4 flex-row-fluid">
											<!--begin::Card header-->
											<div class="card-header">
												<div class="card-title">
													<h2>Order Details #{{$orderData->id}}</h2>
												</div>
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">
												<div class="table-responsive">
													<!--begin::Table-->
													<table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
														<!--begin::Table body-->
														<tbody class="fw-bold text-gray-600">
															<!--begin::Date-->
															<tr>
																<td class="text-muted">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/files/fil002.svg-->
																	<span class="svg-icon svg-icon-2 me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
																			<path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="currentColor" />
																			<path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->Date Added</div>
																</td>
																<td class="fw-bolder text-end">{{date('d/m/Y',strtotime($orderData->date))}}</td>
															</tr>
															<!--end::Date-->
															<!--begin::Payment method-->
															<tr>
																<td class="text-muted">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
																	<span class="svg-icon svg-icon-2 me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="currentColor" />
																			<path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="currentColor" />
																			<path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->Payment Method</div>
																</td>
																<td class="fw-bolder text-end">{{$orderData->payment_type}}
																
															</tr>
															<!--end::Payment method-->
															<!--begin::Date-->
															<tr>
																<td class="text-muted">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm006.svg-->
																	<span class="svg-icon svg-icon-2 me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z" fill="currentColor" />
																			<path opacity="0.3" d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->Shipping Method</div>
																</td>
																<td class="fw-bolder text-end">{{$orderData->shipping_method}}</td>
															</tr>
															<!--end::Date-->
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Order details-->
										<!--begin::Customer details-->
										<div class="card card-flush py-4 flex-row-fluid">
											<!--begin::Card header-->
											<div class="card-header">
												<div class="card-title">
													<h2>Customer Details</h2>
												</div>
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">
												<div class="table-responsive">
													<!--begin::Table-->
													<table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
														<!--begin::Table body-->
														<tbody class="fw-bold text-gray-600">
															<!--begin::Customer name-->
															<tr>
																<td class="text-muted">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																	<span class="svg-icon svg-icon-2 me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="currentColor" />
																			<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->Customer</div>
																</td>
																<td class="fw-bolder text-end">
																	<div class="d-flex align-items-center justify-content-end">
																		<!--begin:: Avatar -->
																		<div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
																			<a href="../../demo1/dist/apps/ecommerce/customers/details.html">
																				<div class="symbol-label">
																					<img src="{{(!empty($orderData['customer']['avatar']))?url($orderData['customer']['avatar']):url('/avatar.png')}}" alt="Dan Wilson" class="w-100" />
																				</div>
																			</a>
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Name-->
																		<a href="../../demo1/dist/apps/ecommerce/customers/details.html" class="text-gray-600 text-hover-primary">{{$orderData['customer']['name']}}</a>
																		<!--end::Name-->
																	</div>
																</td>
															</tr>
															<!--end::Customer name-->
															<!--begin::Customer email-->
															<tr>
																<td class="text-muted">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
																	<span class="svg-icon svg-icon-2 me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
																			<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->Email</div>
																</td>
																<td class="fw-bolder text-end">
																	<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-600 text-hover-primary">{{$orderData['customer']['email']}}</a>
																</td>
															</tr>
															<!--end::Payment method-->
															<!--begin::Date-->
															<tr>
																<td class="text-muted">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->
																	<span class="svg-icon svg-icon-2 me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z" fill="currentColor" />
																			<path opacity="0.3" d="M19 4H5V20H19V4Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->Phone</div>
																</td>
																<td class="fw-bolder text-end">{{$orderData['customer']['phone']}}</td>
															</tr>
															<!--end::Date-->
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Customer details-->
										<!--begin::Documents-->
										<div class="card card-flush py-4 flex-row-fluid">
											<!--begin::Card header-->
											<div class="card-header">
												<div class="card-title">
													<h2>Status Change</h2>
												</div>
											</div>
											<!--end::Card header-->
											<!-- status edit -->
												<!--begin::Form-->
												<form action="{{ route('order.update',$orderData->id) }}" method="POST" enctype="multipart/form-data" id="choice_form" class="form d-flex flex-column flex-lg-row" >
													<!-- <form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/sales/listing.html"> -->
														<!--begin::Aside column-->
													@csrf
                                  
													<div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-2 me-lg-1">
														<!--begin::Order details-->
															<div class="card card-flush py-4">

														<!--begin::Card body-->
														<div class="card-body pt-0">
															<div class="d-flex flex-column gap-10">
															<!--begin::Input group-->

															<div class="fv-row">
																	<!--begin::Label-->
																<label class=" form-label">Status</label>
																<!--end::Label-->
																<!--begin::Select2-->
																<select onchange="updateItems(this)" class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="delivery_status" id="kt_ecommerce_edit_order_shipping">
																	<option></option>
																	
																	<option value="Pending" {{ $orderData->delivery_status == 'Pending' ? 'selected' : '' }} >Pending</option>
																	<option value="Processing" {{ $orderData->delivery_status == 'Processing' ? 'selected' : '' }}>Processing</option>
																	<option value="Completed" {{ $orderData->delivery_status == 'Completed' ? 'selected' : '' }}>Completed</option>
																	<option value="Cancelled" {{ $orderData->delivery_status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>

																</select>
																<!--end::Select2-->
																</div>
																<!--end::Input group-->
															</div>
															@if($orderData->delivery_status == 'Completed' )
																<div class="form-group"><label for="" class="col-12 col-form-label">Invoice Number</label><div class="col-12"><input type="text" value="{{$orderData->invoice}}" name="invoice" class="form-control"></div></div>
															
															@endif
															<div id="results"></div>
														</div>
													<!--end::Card header-->
													<div class="d-flex justify-content-end">
														<!--begin::Button-->
														<!--end::Button-->
														<!--begin::Button-->
														<button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-light me-5 btn-primary">
															<span class="indicator-label">Save Changes</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Button-->
													</div>
													</div>
													<!--end::Order details-->

													</div>
													<!--end::Aside column-->

													<!--end::Main column-->
													
												</form>
												<!--end::Form-->
											<!-- end status edit -->

										</div>
										
										<!--end::Documents-->
									</div>
									<!--end::Order summary-->
									<!--begin::Tab content-->
									<div class="tab-content">
										<!--begin::Tab pane-->
										<div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
											<!--begin::Orders-->
											<div class="d-flex flex-column gap-7 gap-lg-10">
												<div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
													<!--begin::Payment address-->
													<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
														<!--begin::Background-->
														<div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
															<img src="assets/media/icons/duotune/ecommerce/ecm001.svg" class="w-175px" />
														</div>
														<!--end::Background-->
														<!--begin::Card header-->
														<div class="card-header">
															<div class="card-title">
																<h2>Payment Address</h2>
															</div>
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0 text-white-50 fs-6"> 
															
															<span class=" pt-0">Street Address: <span class=" px-2 text-white">{{$orderData['customer']['address']}}</span> </span><br> 
															<span class=" pt-0">City: <span class=" px-2 text-white">{{$orderData['customer']['zilla']}}</span>   </span><br> 
															<span class=" pt-0">State / zilla: <span class=" px-2 text-white">{{$orderData['customer']['zilla']}}</span>   </span><br> 
															<span class=" pt-0">Postal / Zip Code: <span class=" px-2 text-white">{{$orderData['customer']['postal_code']}}</span>   </span><br> 
															<span class=" pt-0">Country:  <span class=" px-2 text-white">{{$orderData['customer']['country']}}</span>  </span><br> 
														</div>
														
														<!--end::Card body-->
													</div>
													<!--end::Payment address-->
													<!--begin::Shipping address-->
													<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
														<!--begin::Background-->
														<div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
															<img src="assets/media/icons/duotune/ecommerce/ecm006.svg" class="w-175px" />
														</div>
														<!--end::Background-->
														<!--begin::Card header-->
														<div class="card-header">
															<div class="card-title">
																<h2>Shipping Address</h2>
															</div>
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0">{{$orderData->shipping_address}}</div>
														<!--end::Card body-->
													</div>
													<!--end::Shipping address-->
												</div>
												<!--begin::Product List-->
												<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
													<!--begin::Card header-->
													<div class="card-header">
														<div class="card-title">
															<h2>Order #{{$orderData->id}}</h2>
														</div>
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
																<!--begin::Table head-->
																<thead>
																	<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
																		<th class="min-w-175px">Product</th>
																		<th class="min-w-100px text-end">SKU</th>
																		<th class="min-w-70px text-end">Qty</th>
																		<th class="min-w-100px text-end">Unit Price</th>
																		<th class="min-w-100px text-end">Total</th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody class="fw-bold text-gray-600">
																	<!--begin::Products-->
																	@foreach($OrderDetail as $key=>$detail)
																	<tr>
																		<!--begin::Product-->
																		<td>
																			<div class="d-flex align-items-center">
																				<!--begin::Thumbnail-->
																				<a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																				<img src="{{(!empty($detail['productid']['galary_photo']))?url($detail['productid']['galary_photo']):url('/avatar.png')}}" alt="Ethan Wilder" class="w-100" />
																				</a>
																				<!--end::Thumbnail-->
																				<!--begin::Title-->
																				<div class="ms-5">
																					<a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="fw-bolder text-gray-600 text-hover-primary">{{$detail['productid']['name']}}</a>
																					<div class="fs-7 text-muted"></div>
																				</div>
																				<!--end::Title-->
																			</div>
																		</td>
																		<!--end::Product-->
																		<!--begin::SKU-->
																		<td class="text-end">{{$detail['productid']['sku']}}</td>
																		<!--end::SKU-->
																		<!--begin::Quantity-->
																		<td class="text-end">{{$detail->quantity}}</td>
																		<!--end::Quantity-->
																		<!--begin::Price-->
																		<td class="text-end">{{$detail['productid']['unit_price']}}</td>
																		<!--end::Price-->
																		<!--begin::Total-->
																		<td class="text-end">{{$detail->price}}</td>
																		<!--end::Total-->
																	</tr>
																	@endforeach
																	<!--end::Products-->
																	<!--begin::Subtotal-->
																	<tr>
																		<td colspan="4" class="text-end">Subtotal</td>
																		<td class="text-end">{{$OrderPrice}}</td>
																	</tr>
																	<!--end::Subtotal-->
																	<!--begin::VAT-->
																	<tr>
																		<td colspan="4" class="text-end">VAT (0%)</td>
																		<td class="text-end">$0.00</td>
																	</tr>
																	<!--end::VAT-->
																	<!--begin::Shipping-->
																	@php 
																	$total = $OrderPrice + 5;
																	@endphp
																	<tr>
																		<td colspan="4" class="text-end">Shipping Rate</td>
																		<td class="text-end">{{5}}</td>
																	</tr>
																	
																	<tr>
																		<td colspan="4" class="fs-3 text-dark text-end">Grand Total</td>
																		<td class="text-dark fs-3 fw-boldest text-end">{{$total}} TK</td>
																	</tr>
																	<!--end::Grand total-->
																	
																</tbody>
																<!--end::Table head-->
															</table>
															<!--end::Table-->
														</div>
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Product List-->
											</div>
											<!--end::Orders-->
										</div>
										<!--end::Tab pane-->

									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Order details page-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					<!-- </div> -->
					<!--end::Content-->
					@php 
					$b = 'INV'.rand(100000, 1000000);
					@endphp
<script>
	function updateItems(_this) {
  var ItemCount = _this.value //get the value
  var count = 1
  var results = document.querySelector('#results') //append results
  results.innerHTML = '' //clear the results on each update
//   for (var i = 1; i <= ItemCount; i++) {
//     var input = document.createElement('input') //create input
//     var label = document.createElement("label"); //create label
//     label.innerText = 'Input ' + i
//     input.type = "text";
//     input.placeholder = "Type text here"; //add a placeholder
//     input.className = "my-inputs"; // set the CSS class
//     results.appendChild(label); //append label
//     results.appendChild(document.createElement("br"));
//     results.appendChild(input); //append input
//     results.appendChild(document.createElement("br"));
//   }
if(ItemCount == 'Completed'){
	for (var i = 1; i <= count; i++) 
	//     var input = document.createElement('input') //create input
    // var label = document.createElement("label"); //create label
    // label.innerText = count 
    // input.type = "text";
    // input.placeholder = "Type text here"; //add a placeholder
    // input.className = "form-control form-control-lg "; // set the CSS class
    // results.appendChild(label); //append label
    // results.appendChild(document.createElement("br"));
    // results.appendChild(input); //append input
    // results.appendChild(document.createElement("br"));
	var $section =  $('<div class="form-group"><label for="" class="col-12 col-form-label">Invoice Number</label><div class="col-12"><input type="text" value="{{$b}}" name="invoice" class="form-control" required></div></div>');
         $('#results').append($section);

}
}
</script>



<!-- <script
  src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous">
  </script>
  <h4>Experience Section</h4>
<div class="form-group row">
  <label for="experienceNo" class="col-4 col-form-label"> No of company add for experience</label>
  <div class="col-6">
    <select name="experienceNo" id="experienceNo" class="custom-select mb-2 mr-sm-2 mb-sm-0"> 
    <option value="">Select Value</option>`enter code here`
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
    </div>
  </div>
 <div id="experienceSection"></div>
 <div class="form-group row"> 
 <div class="col-6"> 
 <button type="submit" name="genrate" class="btn btn-
 primary">Genrate</button>
<script>
	

$(document).ready(function(){
     $("#experienceNo").on("change",function(){
     var numInputs = $(this).val();
     $('#experienceSection').html('');
     for(var i=0; i < numInputs; i++)
     {
         var j = i*1;
         var $section =  $('<div class="form-group"><label for="" class="col-4 col-form-label">Company Name '+j+'</label><div class="col-6"><input type="text" name="companyname[]" class="form-control" required></div></div>');
         $('#experienceSection').append($section);
     }
   });
 });
</script> -->

@endsection