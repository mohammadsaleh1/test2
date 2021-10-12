<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.head')

</head>

<body class="skin-megna fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Shanuyad CRM</p>
        </div>
    </div>
    
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <img src="{{ asset('images/logo-icon.png') }}"  alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('images/logo-light-icon.png') }}"alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <span class="hidden-xs"><span class="font-bold">Shanuyad</span>CRM</span>
                    </a>
                </div>
              
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">


                      
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">User &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->

                                <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">User</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>


                                <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="index.html"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-credit-card"></i><span class="hide-menu">Sales</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addinvoice.html">Add Invoice</a></li>
                                <li><a href="listinvoice.html">List of Invoices</a></li>

                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icons-Betvibes"></i><span class="hide-menu">Hospitals</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addhospital.html">Add Hospital</a></li>
                                <li><a href="listhospital.html">List of Hospitals</a></li>

                            </ul>

                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Doctors</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="adddoctor.html">Add Doctor</a></li>
                                    <li><a href="listdoctors.html">List of Doctors</a></li>

                                </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-user"></i><span class="hide-menu">Technicians</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addtechnician.html">Add Technician</a></li>
                                <li><a href="listtechnician.html">List of Technicians</a></li>

                            </ul>
                      </li>

                      <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-pie-chart"></i><span class="hide-menu">Reporting</span></a>
                          <ul aria-expanded="false" class="collapse">
                              <li><a href="#">Sales</a></li>
                              <li><a href="#">Other</a></li>

                          </ul>
                    </li>



                        <li>
                            <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false">
                                <i class="far fa-circle text-danger"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
       

        
    
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Add Invoice</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            </ol>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            @if(count($errors))
                            <div class="alert alert-danger">
                                <ul class="m-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if(session()->has('success'))
                            <div class="mt-3 alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{session()->get('success')}}
                            </div>
                            @endif
                            <form action="{{route('store')}}" method="POST" >
                                
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Patient, Doctor, And Hospital Info</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                      <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Invoice Number</label>
                                                <input type="text" id="invoice_number" class="form-control @error('invoice_number') is-invalid @enderror" placeholder="#1234" name="invoice_number" value="{{old('invoice_number')}}">
                                                @error('invoice_number')
                                                <small class="invalid-feedback">{{$message}}</small>
                                               @enderror                                               
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="control-label">Date</label>
                                                <input type="date" id="date" class=" form-control @error('date') is-invalid @enderror" placeholder="12n" name="date" value="{{old('date')}}">
                                                @error('date')
                                                <small class="invalid-feedback">{{$message}}</small>
                                               @enderror        
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Patient Name</label>
                                                <input type="search" id="firstName" class="form-control @error('patient_name') is-invalid @enderror" placeholder="John doe" name="patient_name" value="{{old('patient_name')}}">
                                                @error('patient_name')
                                                <small class="invalid-feedback">{{$message}}</small>
                                               @enderror    
                                             </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group has-validation">
                                                <label class="control-label">Doctor's Name</label>
                                                <input type="search" id="lastName" class="form-control @error('doctor_name') is-invalid @enderror" placeholder="12n" name="doctor_name" value="{{old('doctor_name')}}">
                                               @error('doctor_name')
                                                <small class="invalid-feedback">{{$message}}</small>
                                               @enderror
                                      
                                            </div>
                                        </div>
                                          <!--/span-->
                                      </div>
                                      <div class="row pt-3">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Technician's Name</label> 
                                                  <input type="search" id="firstName" class="form-control  @error('tech_name') is-invalid @enderror" placeholder="John doe" name="tech_name" value="{{old('tech_name')}}">
                                                  @error('tech_name')
                                                  <small class="invalid-feedback">{{$message}}</small>
                                                 @enderror
                                                </div>
                                          </div>

                                          <!--/span-->
                                          <div class="col-md-6">
                                              <div class="form-group ">
                                                  <label class="control-label">Hospital Name</label>
                                                  <input type="search" id="lastName" class="form-control  @error('hospital_name') is-invalid @enderror" placeholder="Rzgari" name="hospital_name"  value="{{old('hospital_name')}}">
                                                  @error('hospital_name')
                                                  <small class="invalid-feedback">{{$message}}</small>
                                                 @enderror
                                                </div>
                                          <!--/span-->
                                      </div>

                                        <!--/row-->
                                     <h4 class="card-title mt-5">Product information</h4>
                                    </div>
                                    <hr>

                                    <div class="card-body">
                                            <div class="row" id="head_products">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Product Name</label>
                                                  <select class="form-control select2" name="product[0][product_id]" id="product_id_0" required>
                                                      <option value="" disabled  >Select product</option>
                                                        @foreach ($products as $product)
                                                            <option value="{{$product->id}}"> {{$product->name}}</option>
                                                        @endforeach
                                                  </select>
                                                  
                                                </div>
                                                
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Quanity</label>
                                                    <input type="number" value="1" class="form-control" name="product[0][quantity]" id="quantity_0" onchange="change_price(0)" min="0" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="number" class="form-control" name="product[0][price]" id="price_0" min="0" onchange="change_price(0)" required>
                                                </div>
                                            </div>

                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Discount</label>
                                                    <input type="number" class="form-control" name="product[0][discount]" id="discount_0" value="0" onchange="change_price(0)" min="0" required>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Total</label>
                                                    <input type="number" class="form-control sub-total" name="product[0][total]" id="total_0" required>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="d-flex justify-content-end"> Total price : <span id="invoice_price">0</span> </div>

                                        <div class="form-actions">
                                        <div class="card-body">
                                            <a href="javascript:void(0);" class="text-decoration-none font-12 btn btn-success"
                                            onclick="addNewProduct(this, 1);" >
                                              Add new product
                                            <i class="fa fa-plus-circle" ></i>
                                            </a>

                                            <hr>
{{--                                             <button type="button" class="btn btn-success"> <i class="fa fa-plus"></i> Add product</button>
 --}}                                           
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Add invoice</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme working">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
      </div>
  
        <footer class="footer">
            © 2021 Shanuyad CRM by wl-solutions.net
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    @include('layout.script')
    <script>
        $( document ).ready(function() {
            $('.select2').select2();
        });
    </script>
</body>

</html>
