<section class="qbits-top-menu">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <div class="col-sm-2">
                    <div class="qbits-logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('frontend/assets/logo/qbits_logo.png')}}" alt="qbits Logo" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item top-menu-list d-flex justify-content-center">
                                <a class="nav-link" href="{{ route('sigma') }}">Sigma</a>
                            </li>

                            <li class="nav-item top-menu-list d-flex justify-content-center">
                                <a class="nav-link" href="#">Alpha</a>
                            </li>

                            <li class="nav-item top-menu-list d-flex justify-content-center">
                                <a class="nav-link" href="{{ route('caliph')}}">Caliph</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="top-menu-right">


                        @if( App\Models\Cart::totalItems()==0)
                            
                                <i class="fa fa-shopping-cart position-relative" style="color: #a1a1a6;margin-right:20px;">
                                    <span style="margin-right: 10px;display:none;" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ App\Models\Cart::totalItems()}}
                                    </span>
                                </i>
                              
                        @else

                        <a href="{{route('carts')}}">

                            <i class="fa fa-shopping-cart position-relative" style="color: #a1a1a6;margin-right:20px;">
                                <span  class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="margin-top: -5px !important;margin-left:5px;display: flex;justify-content: center;">
                                <strong style="margin-bottom: 1px;"> {{ App\Models\Cart::totalItems()}}</strong>
                                </span>
                            </i>

                            </a>

                        @endif
                        <i class="fa fa-search search-btn" aria-hidden="true"></i>
                        @auth
                            
                            <a href="{{ route('dashboard')}}"><i class="fa fa-user" aria-hidden="true"></i></a>

                        @else
                        <a href="{{ route('signin')}}"><i class="fa fa-user" aria-hidden="true"></i></a>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div id="searchbar" class="clearfix">
        <form id="searchform" action="{{ route('search')}}" method="get">
            @csrf
            <input type="search" class="form-control" name="search" id="search" placeholder="Search here for what you need?" autocomplete="off">
        </form>
    </div>
</section>

<section class="qbits-mobile-menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="mobile-responsive-menu">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        <div class="qbits-logo">
                            <a href="{{ route('index') }}"><img src="frontend/assets/images/mobile/mobile-logo.png" alt="qbits Logo" class="img-responsive"></a>
                        </div>
                        <div class="top-menu-right">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="mobile-middle-menu">
                        <div class="form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <ul class="top-mobile">
                            <li><a href="{{ route('sigma') }}">Sigma</a></li>
                            <li><a href="#">Alpha</a></li>
                            <li><a href="#">Caliph</a></li>
                        </ul>

                        <ul class="mobile-seconed-mobile">
                            <li><a href="#">Drivers & Manuals</a></li>
                            <li><a href="#">Registration</a></li>
                            <li><a href="#">Warrenty</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<script>
    $(document).ready(function() {
        $(".fa-bars").click(function() {
            $(".mobile-middle-menu").toggle();
        });
    });   
</script> 

