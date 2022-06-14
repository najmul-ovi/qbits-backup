@extends('frontend.user.dashboard.master')

@section('admin-content')


					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Orders Listing</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-300 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<span  class="text-muted ">Home</span>
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
										<li class="breadcrumb-item text-dark">Orders Listing</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post" style="z-index:1">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Products-->
								<div class="card card-flush">
									<!--begin::Card header-->
									<div class="card-header align-items-center py-5 gap-2 gap-md-5">
										<!--begin::Card title-->
										<div class="card-title">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												<span class="svg-icon svg-icon-1 position-absolute ms-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Order" />
											</div>
											<!--end::Search-->
										</div>
										<!--end::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
											<!--begin::Flatpickr-->
											<div class="input-group w-250px">
												<input class="form-control form-control-solid rounded rounded-end-0" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" />
												
												<button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
													
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
															<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
											</div>
											
											<!--end::Flatpickr-->
											<div class="w-100 mw-150px">
												<!--begin::Select2-->
												<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
													<option></option>
													<option value="all">All</option>
													<option value="Cancelled">Cancelled</option>
													<option value="Completed">Completed</option>
													<option value="Pending">Pending</option>

												</select>
												<!--end::Select2-->
											</div>

										</div>
										<!--end::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_ecommerce_sales_table">
											<!--begin::Table head-->
											<thead>
												<!--begin::Table row-->
												<tr class=" text-gray-400 fw-bolder  fs-7 text-uppercase gs-0">
													<th class="text-center min-w-100px ">Order ID</th>
													<th ></th>													
													<th class="text-center min-w-100px p-5">Product Name</th>
													<th class="text-center min-w-100px p-5">Quantity</th>
													<th class="text-center min-w-100px p-5">Total</th>
													<th class="text-center min-w-100px p-5">Status</th>
													<th class="text-center min-w-100px p-5">Date</th>
													<th class="text-center min-w-100px p-5">Actions</th>
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fw-bold text-gray-600">
											@foreach($order as $key=>$orders)
												<tr>
													<!--begin::Checkbox-->
													<!-- <td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td> -->
													<!--end::Checkbox-->
													<!--begin::Order ID=-->
													<td class="text-center " data-kt-ecommerce-order-filter="order_id">
														<div class="">
														<a href="" class="text-gray-600 " >{{$orders->invoice}}</a>
														</div>
														
													</td>
													<!--end::Order ID=-->
													<!--begin::Customer=-->
													<td>
													
															<!--begin:: Avatar -->
															<!-- <div class="symbol  symbol-40px overflow-hidden me-3">
																<a href="">
																	<div class="symbol-label">
																		<img src="{{(!empty($orders['customer']['avatar']))?url($orders['customer']['avatar']):url('/avatar.png')}}" alt="Ethan Wilder" class="w-100" />
																	</div>
																</a>
															</div> -->
															<!--end::Avatar-->
															<!-- <div class="ms-2">
															
																<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">{{$orders['customer']['name']}}</a>
																
															</div> -->
												
													</td>
													<td class="text-center ">
													@foreach($orders['orderDetails'] as $key=>$details)
														<div class="">
															<!--begin:: Avatar -->
															<!-- <div class="symbol  symbol-40px overflow-hidden me-3">
																<a href="">
																	<div class="symbol-label">
																		<img src="{{(!empty($details['productid']['galary_photo']))?url($details['productid']['galary_photo']):url('/avatar.png')}}" alt="Ethan Wilder" class="w-100" />
																	</div>
																</a>
															</div> -->
															<!--end::Avatar-->
															
																<!--begin::Title-->
																<a  class="text-gray-600 text-hover-primary fs-6 fw-bolder">{{$details['productid']['name']}}</a>
																<!--end::Title-->
													
														</div>
														@endforeach
													</td>

													<td class="text-center ">
													@foreach($orders['orderDetails'] as $key=>$details)													
														<span class="fw-bolder">{{$details->quantity}}</span> <br>
														@endforeach
														
													</td>
													<td class="text-center">
													@php
                                                        $Totalprice = App\Models\OrderDetail::where('order_id',$orders->id)->sum('price');
													
                                                    @endphp
														<span class="fw-bolder">{{$Totalprice}} TK</span>
													</td>
													<td class="text-center" data-order="Completed">
														<!--begin::Badges-->
														<div class="badge badge-light-success">{{$orders->delivery_status}}</div> <br>
														<!--end::Badges-->
													</td>
													<!--end::Status=-->
													<!--begin::Total=-->

													
													<!--end::Total=-->
													<!--begin::Date Added=-->
													<td class="text-center" data-order="2022-02-04">
														<span class="fw-bolder">{{date('d/m/Y',strtotime($orders->date))}}</span>
													</td>

													<!--end::Date Modified=-->
													<!--begin::Action=-->
													<td class="text-center">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="{{route('order.details',$orders->id)}}" class="menu-link px-3">View</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->

															@if($orders->delivery_status != 'Close')
															<div class="menu-item px-3">
																<a href="{{route('order.edit',$orders->id)}}" class="menu-link px-3">Edit</a>
															</div>
															@endif
															<!--end::Menu item-->

														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
											@endforeach
											</tbody>
											<!--end::Table body-->
										</table>
										
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Products-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->

@endsection