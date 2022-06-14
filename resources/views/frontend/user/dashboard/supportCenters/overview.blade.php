@extends('frontend.user.dashboard.master')

@section('admin-content')

<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Hero card-->
								<div class="card mb-12">
									<!--begin::Hero body-->
									<div class="card-body flex-column p-5">
										<!--begin::Hero content-->

										<!--end::Hero content-->
										<!--begin::Hero nav-->
										<div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
											<!--begin::Nav-->
											<ul class="nav flex-wrap border-transparent fw-bolder">
												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="{{route ('support.center')}}">Overview</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase " href="{{route ('support.ticket.list')}}">tickets</a>
												</li>
												<!--end::Nav item-->

												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase " href="{{route('support.faq')}}">FAQ</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="{{route('support.licenses')}}">Warranty</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="{{route('support.contact')}}">Contact US</a>
												</li>
												<!--end::Nav item-->
											</ul>
											<!--end::Nav-->
											<!--begin::Action-->
											<a href="{{route('support.ticket.create')}}"  class="btn btn-primary fw-bolder fs-8 fs-lg-base">Create Ticket</a>
											<!--end::Action-->
										</div>
										<!--end::Hero nav-->
									</div>
									<!--end::Hero body-->
								</div>
								<!--end::Hero card-->
								<!--begin::Row-->
								<div class="row gy-0 mb-6 mb-xl-12">
									<!--begin::Col-->
									<div class="col-md-6">
										<!--begin::Card-->
										<div class="card card-md-stretch ms-xl-3">
											<!--begin::Body-->
											<div class="card-body p-10 p-lg-15">
												<!--begin::Header-->
												<div class="d-flex flex-stack mb-7">
													<!--begin::Title-->
													<h1 class="fw-bolder text-dark">FAQ</h1>
													<!--end::Title-->
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Link-->
														<a href="{{route('support.faq')}}" class="text-primary fw-bolder me-1">Full FAQ</a>
														<!--begin::Link-->
														<!--begin::Arrow-->
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--end::Arrow-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Header-->
												<!--begin::Accordion-->
												<!--begin::Section-->
												<div class="m-0">
													<!--begin::Heading-->
													<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_1">
														<!--begin::Icon-->
														<div class="ms-n1 me-5">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon toggle-off svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Icon-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-wrap">
															<!--begin::Title-->
															<h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">What admin theme does?</h3>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light my-1 d-none">Bootstrap</span>
															<!--end::Label-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Heading-->
													<!--begin::Body-->
													<div id="kt_support_2_1" class="collapse show fs-6 ms-10">
														<!--begin::Block-->
														<div class="mb-4">
															<!--begin::Text-->
															<span class="text-muted fw-bold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
															<!--end::Text-->
															<!--begin::Link-->
															<a href="#" class="d-none"></a>
															<!--end::Link-->
														</div>
														<!--end::Block-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Body-->
												<!--begin::Section-->
												<div class="m-0">
													<!--begin::Heading-->
													<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_2">
														<!--begin::Icon-->
														<div class="ms-n1 me-5">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon toggle-off svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Icon-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-wrap">
															<!--begin::Title-->
															<h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">How Extended Licese works?</h3>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light my-1 d-none">General</span>
															<!--end::Label-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Heading-->
													<!--begin::Body-->
													<div id="kt_support_2_2" class="collapse fs-6 ms-10">
														<!--begin::Block-->
														<div class="mb-4">
															<!--begin::Text-->
															<span class="text-muted fw-bold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
															<!--end::Text-->
															<!--begin::Link-->
															<a href="#" class="d-none"></a>
															<!--end::Link-->
														</div>
														<!--end::Block-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Body-->
												<!--begin::Section-->
												<div class="m-0">
													<!--begin::Heading-->
													<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_3">
														<!--begin::Icon-->
														<div class="ms-n1 me-5">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon toggle-off svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Icon-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-wrap">
															<!--begin::Title-->
															<h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">How to install on a local machine?</h3>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light my-1 d-none">React</span>
															<!--end::Label-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Heading-->
													<!--begin::Body-->
													<div id="kt_support_2_3" class="collapse fs-6 ms-10">
														<!--begin::Block-->
														<div class="mb-4">
															<!--begin::Text-->
															<span class="text-muted fw-bold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
															<!--end::Text-->
															<!--begin::Link-->
															<a href="#" class="d-none"></a>
															<!--end::Link-->
														</div>
														<!--end::Block-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Body-->
												<!--begin::Section-->
												<div class="m-0">
													<!--begin::Heading-->
													<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_4">
														<!--begin::Icon-->
														<div class="ms-n1 me-5">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon toggle-off svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Icon-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-wrap">
															<!--begin::Title-->
															<h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">How can I import Google fonts?</h3>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light my-1 d-none">Angular</span>
															<!--end::Label-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Heading-->
													<!--begin::Body-->
													<div id="kt_support_2_4" class="collapse fs-6 ms-10">
														<!--begin::Block-->
														<div class="mb-4">
															<!--begin::Text-->
															<span class="text-muted fw-bold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
															<!--end::Text-->
															<!--begin::Link-->
															<a href="#" class="d-none"></a>
															<!--end::Link-->
														</div>
														<!--end::Block-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Body-->
												<!--begin::Section-->
												<div class="m-0">
													<!--begin::Heading-->
													<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_5">
														<!--begin::Icon-->
														<div class="ms-n1 me-5">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon toggle-off svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Icon-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-wrap">
															<!--begin::Title-->
															<h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">How long the license is valid?</h3>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light my-1 d-none">Webpack</span>
															<!--end::Label-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Heading-->
													<!--begin::Body-->
													<div id="kt_support_2_5" class="collapse fs-6 ms-10">
														<!--begin::Block-->
														<div class="mb-4">
															<!--begin::Text-->
															<span class="text-muted fw-bold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
															<!--end::Text-->
															<!--begin::Link-->
															<a href="#" class="d-none"></a>
															<!--end::Link-->
														</div>
														<!--end::Block-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Body-->
												<!--begin::Section-->
												<div class="m-0">
													<!--begin::Heading-->
													<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_6">
														<!--begin::Icon-->
														<div class="ms-n1 me-5">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon toggle-off svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Icon-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-wrap">
															<!--begin::Title-->
															<h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">How many end projects I can build?</h3>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light my-1 d-none">Laravel</span>
															<!--end::Label-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Heading-->
													<!--begin::Body-->
													<div id="kt_support_2_6" class="collapse fs-6 ms-10">
														<!--begin::Block-->
														<div class="mb-4">
															<!--begin::Text-->
															<span class="text-muted fw-bold fs-5">By Keenthemes to save tons and more to time money projects are listed and outstanding</span>
															<!--end::Text-->
															<!--begin::Link-->
															<a href="#" class="d-none"></a>
															<!--end::Link-->
														</div>
														<!--end::Block-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Body-->
												<!--end::Accordion-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
																		<!--begin::Col-->
																		<div class="col-md-6">
										<!--begin::Card-->
										<div class="card card-md-stretch ms-xl-3">
											<!--begin::Body-->
											<div class="card-body pp-10 p-lg-15">
												<!--begin::Header-->
												<div class="d-flex flex-stack mb-7">
													<!--begin::Title-->
													<h1 class="fw-bolder text-dark">Videos</h1>
													<!--end::Title-->
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Link-->
														<!-- <a href="https://www.youtube.com/c/KeenThemesTuts/videos" target="_blank" class="text-primary fw-bolder me-1">All Videos</a> -->
														<!--begin::Link-->
														<!--begin::Arrow-->
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--end::Arrow-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Header-->
												<!--begin::Video-->
												<div class="mb-3">
													<iframe class="embed-responsive-item card-rounded h-275px w-100" src="https://www.youtube.com/embed/TWdDZYNqlg4" allowfullscreen="allowfullscreen"></iframe>
												</div>
												<!--end::Video-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Container-->
						</div>						

@endsection