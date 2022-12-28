  <!-- Topbar Start -->
  <div class="container-fluid">
      <div class="row bg-secondary py-2 px-xl-5">
          <div class="col-lg-6 d-none d-lg-block">
              <div class="d-inline-flex align-items-center">
                  <a class="text-dark" href="">FAQs</a>
                  <span class="text-muted px-2">|</span>
                  <a class="text-dark" href="">Help</a>
                  <span class="text-muted px-2">|</span>
                  <a class="text-dark" href="">Support</a>
              </div>
          </div>
          <div class="col-lg-6 text-center text-lg-right">
              <div class="d-inline-flex align-items-center">
                  <a class="text-dark px-2" href="">
                      <i class="fab fa-facebook-f"></i>
                  </a>
                  <a class="text-dark px-2" href="">
                      <i class="fab fa-twitter"></i>
                  </a>
                  <a class="text-dark px-2" href="">
                      <i class="fab fa-linkedin-in"></i>
                  </a>
                  <a class="text-dark px-2" href="">
                      <i class="fab fa-instagram"></i>
                  </a>
                  <a class="text-dark pl-2" href="">
                      <i class="fab fa-youtube"></i>
                  </a>
              </div>
          </div>
      </div>
      <div class="row align-items-center py-3 px-xl-5">
          <div class="col-lg-3 d-none d-lg-block">
              <a href="" class="text-decoration-none">
                  <h1 class="m-0 display-5 font-weight-semi-bold"><span
                          class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
              </a>
          </div>
          <div class="col-lg-6 col-6 text-left">
              <form action="{{route('search')}}" method="get">
                  <div class="input-group">
                      <input name="product" type="text" class="form-control" placeholder="Search for products">
                      <div class="input-group-append">
                          <button  style="background-color: #D19C97; border:none; height:37px" type="submit">Search</button>
                          
                      </div>
                  </div>
              </form>
          </div>
          <div class="col-lg-3 col-6 text-right">
              <a href="{{route('wishlist.view')}}" class="btn border">
                  <i class="fas fa-heart text-primary"></i>
                  <span class="badge">0</span>
              </a>
              <a href="{{route('shoppingcart.view')}}" class="btn border">
                  <i class="fas fa-shopping-cart text-primary">({{session()->has('cart') ? count(session()->get('cart')) : 0}})</i>
                 
              </a>
          </div>
      </div>
  </div>
  <!-- Topbar End -->


  <!-- Navbar Start -->
  <div class="container-fluid">
      <div class="row border-top px-xl-5">
          <div class="col-lg-3 d-none d-lg-block">
              <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                  data-toggle="collapse" href="#navbar-vertical"
                  style="height: 65px; margin-top: -1px; padding: 0 30px;">
                  <h6 class="m-0">Categories</h6>
                  <i class="fa fa-angle-down text-dark"></i>
              </a>
              <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                  id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                  <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                      <div class="nav-item dropdown">
                          <a href="#" class="nav-link" data-toggle="dropdown">Dresses
                              <i class="fa fa-angle-down float-right mt-1"></i></a>
                          <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                              @foreach($categories as $category)
                              <a href="" class="dropdown-item">{{$category->name}}</a>
                              @endforeach
                          </div>
                      </div>
                     
                    
                    

                  </div>
              </nav>
          </div>
          <div class="col-lg-9">
              <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                  <a href="" class="text-decoration-none d-block d-lg-none">
                      <h1 class="m-0 display-5 font-weight-semi-bold"><span
                              class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                  </a>
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                      <div class="navbar-nav mr-auto py-0">
                          <a href="{{route('home')}}" class="nav-item nav-link  active">Home</a>
                          <a href="{{route('shop.view')}}" class="nav-item nav-link">Shop</a>
                          <a href="{{route('shopdetail.view')}}" class="nav-item nav-link">Shop Detail</a>
                          <div class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                              <div class="dropdown-menu rounded-0 m-0">
                                  <a href="{{route('shoppingcart.view')}}" class="dropdown-item">Shopping Cart</a>
                                  <a href="{{route('checkout.view')}}" class="dropdown-item">Checkout</a>
                              </div>
                          </div>
                          <a href="{{route('contact.view')}}" class="nav-item nav-link">Contact</a>
                      </div>


                      <div class="navbar-nav ml-auto py-0">

                          <!-- Button trigger modal -->
                          @guest()
                          <a href="" class="nav-item nav-link" data-toggle="modal" data-target="#exampleModalCenter">
                              Login
                          </a>
                          @endguest
                          @auth()
                          <a href="{{route('logout')}}" class="nav-item nav-link">Logout( {{auth()->user()->name}}) </a>
                          @endauth

                          @if(session()->has('message'))
                          <p class="alert alert-success">{{session()->get('message')}}</p>
                          @endif
                          
                          <a href="{{route('register')}}" class="nav-item nav-link">Register</a>
                      </div>
                          

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>


                                  <div class="modal-body">
                                      <form action="{{route('dologin')}}" method="post">
                                          @csrf
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Email address</label>
                                              <input name="email" type="email" class="form-control"
                                                  id="exampleInputEmail1" aria-describedby="emailHelp"
                                                  placeholder="Enter email">

                                          </div>
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Password</label>
                                              <input name="password" type="password" class="form-control"
                                                  id="exampleInputPassword1" placeholder="Password">
                                          </div>

                                          <button type="submit" class="btn btn-primary">Submit</button>
                                      </form>
                                  </div>


                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary"
                                          data-dismiss="modal">Close</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
  </div>

  <!-- Navbar End -->
