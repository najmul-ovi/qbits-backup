@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

<!--end::Head-->
<!--begin::Body-->
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column ">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
            data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
            data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
            data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <!--begin::Brand-->
            <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                <!--begin::Logo-->
                <a href="{{ route('admin.dashboard')}}">
                    <img src="{{ asset('frontend/assets/logo/qbits_logo.png')}}" alt="qbits Logo"
                        class="img-responsive">
                </a>
                <!--end::Logo-->
                <!--begin::Aside toggler-->
                <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                    data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                    data-kt-toggle-name="aside-minimize">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                    <!-- <span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
									<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
								</svg>
							</span> -->
                    <!--end::Svg Icon-->
                </div>
                <!--end::Aside toggler-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
                    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                    data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                        id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!-- <span class="menu-link">
										<span class="menu-icon">
											<i class="bi bi-grid fs-3"></i>
										</span>
										<span class="menu-title">Dashboards</span>
										<span class="menu-arrow"></span>
									</span> -->
                            <div class="menu-sub menu-sub-accordion menu-active-bg">

                            </div>

                            <div class="menu-item">
                                <a class="menu-link {{($route=='admin.dashboard')? 'active': '' }}"
                                    href="{{ route('admin.dashboard')}}">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                    fill="currentColor" />
                                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                    fill="currentColor" />
                                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a class="menu-link  {{($route=='product.index')? 'active': '' }}"
                                    href="{{ route('product.index')}}">
                                    <span class="menu-icon">
                                        <span class="svg-icon svg-icon-primary svg-icon-2">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Devices/Laptop.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M6,8 L6,16 L18,16 L18,8 L6,8 Z M20,16 L21.381966,16 C21.7607381,16 22.1070012,16.2140024 22.2763932,16.5527864 L22.5,17 C22.6706654,17.3413307 22.5323138,17.7563856 22.190983,17.927051 C22.0950363,17.9750244 21.9892377,18 21.881966,18 L2.11803399,18 C1.73641461,18 1.42705098,17.6906364 1.42705098,17.309017 C1.42705098,17.2017453 1.45202663,17.0959467 1.5,17 L1.7236068,16.5527864 C1.89299881,16.2140024 2.23926193,16 2.61803399,16 L4,16 L4,8 C4,6.8954305 4.8954305,6 6,6 L18,6 C19.1045695,6 20,6.8954305 20,8 L20,16 Z"
                                                        fill="currentColor" fill-rule="nonzero" />
                                                    <polygon fill="currentColor" opacity="0.3"
                                                        points="6 8 6 16 18 16 18 8" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span>
                                    </span>
                                    <span class="menu-title">Product</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link {{($route=='admin.customer')? 'active': '' }}"
                                    href="{{ route('admin.customer')}}">
                                    <span class="menu-icon">
                                        <span class="svg-icon svg-icon-primary svg-icon-2">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Layout/Layout-left-panel-2.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z"
                                                        fill="currentColor" />
                                                    <rect fill="currentColor" opacity="0.3" x="2" y="4" width="5"
                                                        height="16" rx="1" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span>
                                    </span>
                                    <span class="menu-title">Customers List</span>
                                </a>
                            </div>

                            <!-- Sales -->
                            <div data-kt-menu-trigger="click"
                                class="menu-item  menu-accordion {{($prefix =='/order') ? 'show': ''}}">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="svg-icon svg-icon-primary svg-icon-2">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Shopping/Chart-pie.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z"
                                                        fill="currentColor" opacity="0.3" />
                                                    <path
                                                        d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z"
                                                        fill="currentColor" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span>
                                    </span>
                                    <span class="menu-title ps-3">Sales</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link {{request()->routeIs('order.listing') ? 'active': '' }}"
                                            href="{{route('order.listing')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Orders Listing</span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <!-- end sales -->
                            <div data-kt-menu-trigger="click"
                                class="menu-item  menu-accordion mb-1 {{($prefix =='/support')  ? 'show': ''}}">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z"
                                                    fill="currentColor" />
                                                <path opacity="0.3"
                                                    d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Support Center</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <!-- <div class="menu-item">
											<a class="menu-link"  href="{{route ('support.center')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Overview</span>
											</a>
										</div> -->
                                    <div data-kt-menu-trigger="click"
                                        class="menu-item menu-accordion mb-1 {{ ($route=='support.ticket.list') || ($route=='support.ticket.userInfo')  ? 'show': '' }}">
                                        <span class="menu-link">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Tickets</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <!-- <div class="menu-item">
													<a class="menu-link" href="{{route ('support.ticket.create')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Create Ticket</span>
													</a>
												</div> -->
                                            <div class="menu-item">
                                                <a class="menu-link {{request()->routeIs('support.ticket.list') ? 'active': '' }}"
                                                    href="{{route ('support.ticket.list')}}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Tickets List</span>
                                                </a>
                                            </div>
                                            <!-- <div class="menu-item">
													<a class="menu-link" href="{{route('support.ticket.view')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Ticket</span>
													</a>
												</div> -->
                                        </div>
                                    </div>
                                    <!-- 
										<div class="menu-item">
											<a class="menu-link" href="{{route('support.faq')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">FAQ</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="{{route('support.licenses')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Licenses</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link " href="{{route('support.contact')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Contact Us</span>
											</a>
										</div> -->
                                </div>
                            </div>
                        </div>

                        <!--end::Menu-->
                    </div>


                    <!--end::Menu-->

                </div>

                <!--end::Aside Menu-->

            </div>
            <!--end::Aside menu-->
            <!--begin::Footer-->

            <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->

        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->

<!--end::Activities drawer-->
<!--begin::Chat drawer-->




<!--end::Body-->

</html>
