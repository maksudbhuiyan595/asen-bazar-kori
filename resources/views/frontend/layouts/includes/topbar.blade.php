<div class="container-fluid">
        <!-- -- -->
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h2 class="m-0 display-6 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Asen Bazar Kori</h2>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="{{route('search')}}">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                
                <a href="{{route('cart.view')}}" class="btn border">
                    <span>Cart <i class="fas fa-shopping-cart text-primary"></i></span>
                    <span class="badge">{{session()->has('cart')?count(session()->get('cart')):0}} items</span>
                </a>
            </div>
        </div>
    </div>
