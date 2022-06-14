@extends('admin.master')

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

                        <!-- <li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="{{route ('support.center')}}">Overview</a>
												</li> -->


                        <li class="nav-item my-1">
                            <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active"
                                href="{{route ('support.ticket.list')}}">tickets</a>
                        </li>




                        <!-- <li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="{{route('support.faq')}}">FAQ</a>
												</li>
												
												
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase "  href="{{route('support.licenses')}}">Licenses</a>
												</li>
												
												
												<li class="nav-item my-1">
													<a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="{{route('support.contact')}}">Contact US</a>
												</li> -->

                    </ul>
                    <!--end::Nav-->
                    <!--begin::Action-->
                    <!-- <a href="{{route('support.ticket.create')}}"  class="btn btn-primary fw-bolder fs-8 fs-lg-base">Create Ticket</a> -->
                    <!--end::Action-->
                </div>
                <!--end::Hero nav-->
            </div>
            <!--end::Hero body-->
        </div>
        <!--end::Hero card-->
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row p-7">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-xl-10 mb-2=00 mb-xl-0">
                        <!--begin::Tickets-->
                        <div class="mb-0">
                            <!--begin::Search form-->
                            <!--end::Heading-->
                            <div class="modal-body scroll-y px-10 px-lg-10 pt-0 pb-10">
                                <!--begin:Form-->
                                <div class="row g-9 mb-8">
                                    <!--begin::Col-->

                                    <div class="col-md-8 fv-row">
                                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px px-5"
                                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                            data-kt-menu-placement="bottom-end">
                                            <img src="{{(!empty($Ticket['customerid']->avatar))?url($Ticket['customerid']->avatar):url('/avatar.png')}}"
                                                alt="image" />
                                        </div>
                                        <label class=" fs-6 fw-bold mb-2"></label>
                                        <span>{{$Ticket->name}}</span> <span class="text-center"> <i
                                                class=" fs-6 fw-bold px-3">{{date('d M Y g:i A',strtotime($Ticket->created_at))}}</i>
                                        </span>
                                        <br><br>
                                        <br>
                                        <div class="fs-5 d-flex flex-column mb-8 fv-row px-5"
                                            style="text-align: justify;">
                                            <p>{{$Ticket->description}}</p>
                                        </div>

                                    </div>


                                    <div class="col-md-4 fv-row text-white-50">
                                        <label class=" fs-6 fw-bold mb-2 ">Invoice ID:</label>
                                        <span>{{$Ticket->invoice_name}}</span>
                                        <br>
                                        <label class=" fs-6 fw-bold mb-2 ">Product Name:</label>
                                        <span>{{$Ticket->product_name}}</span>
                                        <br>
                                        <label class=" fs-6 fw-bold mb-2 ">Email:</label>
                                        <span>{{$Ticket->email}}</span>
                                        <br>
                                        <label class=" fs-6 fw-bold mb-2">Subject:</label>
                                        <span>{{$Ticket->subject}}</span>
                                        <br>
                                        <label class=" fs-6 fw-bold mb-2">Tracking number:</label>
                                        <span>{{$Ticket->Tracking_number}}</span>
                                        <br>
                                        <label class=" fs-6 fw-bold mb-2">Status:</label>
                                        @if($Ticket->status == 'Open')
                                        <span class="text-success">{{$Ticket->status}}</span>
                                        @elseif($Ticket->status == 'Processing')
                                        <span class="text-warning">{{$Ticket->status}}</span>
                                        @elseif($Ticket->status == 'Close')
                                        <span class="text-danger">{{$Ticket->status}}</span>
                                        @endif
                                        <br>
                                        <label class=" fs-6 fw-bold mb-2">Create Date:</label>
                                        <span>{{date('d M Y',strtotime($Ticket->date))}}</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!-- loop start -->
                                @foreach($message as $key=>$messages)

                                <div class="col-md-8 fv-row">
                                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px px-5"
                                        data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end">
                                        <img src="{{(!empty($messages['customer']->avatar))?url($messages['customer']->avatar):url('/avatar.png')}}"
                                            alt="image" />
                                    </div>
                                    <label class=" fs-6 fw-bold mb-2"></label>
                                    <span>{{$messages['customer']['name']}}</span>
                                    <span class="text-center"> <i
                                            class=" fs-6 fw-bold px-3">{{date('d M Y g:i A',strtotime($messages->created_at))}}</i>
                                    </span>
                                    <br><br>
                                    <br>
                                    <div class="fs-5 d-flex flex-column mb-8 fv-row px-5" style="text-align: justify;">
                                        <p>{{$messages->Conversation}}</p>
                                    </div>
                                    <div class="fs-2 d-flex flex-column mb-8 fv-row px-5"
                                        style="text-align: justify; width:50%">
                                        <img src="/{{$messages->photo}}" alt="">
                                    </div>

                                </div>

                                @endforeach
                                <!-- loop end -->

                                <form action="{{route('support.ticket.status',$Ticket->id)}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <input type="text" class="form-control form-control-solid" placeholder="Your Name"
                                        name="user_type" value="{{Auth::user()->user_type}}" hidden />
                                    <input type="text" class="form-control form-control-solid" placeholder="Your Name"
                                        name="user_id" value="{{Auth::user()->id}}" hidden />

                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label class="fs-6 fw-bold mb-2">Message</label>
                                        <textarea class="form-control form-control-solid" rows="4" name="message"
                                            placeholder="Type your ticket description"></textarea>
                                        @error('subject')<span class="text-danger">{{$message}}</span>@enderror

                                    </div>
                                    <div class="row g-9 mb-8">
                                        <div class="col-md-6 mt-6 ">
                                            <label class=" fs-6 fw-bold mb-2">Status</label>
                                            <select class="form-select form-select-solid" data-control="select2"
                                                data-hide-search="true" data-placeholder="Select a product"
                                                name="status">
                                                <option value="Open" {{ $Ticket->status == 'Open' ? 'selected' : '' }}>
                                                    OPEN</option>
                                                <option value="Processing"
                                                    {{ $Ticket->status == 'Processing' ? 'selected' : '' }}>
                                                    Processing
                                                </option>
                                                <option value="Close"
                                                    {{ $Ticket->status == 'Close' ? 'selected' : '' }}>CLOSE
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-6">
                                            <label class=" fs-6 fw-bold mb-2">Attach file </label>
                                            <input name="t_image[]" class="form-control" type="file" max-size="10"
                                                id="formFileMultiple" multiple>
                                            @error('t_image')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>


                                    <div class="text-start col-md-12">

                                        <!-- <a href="{{ route('back')}}" class="btn btn-light me-3">Back</a> -->

                                        <button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                </form>
                                <!--end:Form-->
                            </div>
                        </div>
                        <!--end::Tickets-->
                    </div>
                    <!--end::Content-->

                </div>
                <!--end::Layout-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::Modal - Support Center - Create Ticket-->
        <div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-750px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->

                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Support Center - Create Ticket-->
    </div>
    <!--end::Container-->
</div>

@endsection
