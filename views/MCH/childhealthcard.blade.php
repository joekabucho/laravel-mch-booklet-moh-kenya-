@extends('MCH.mchmaster')

@section('content')
    <div class="sidebar" data-color="black" data-image="../assets/img/sidebar-1.jpg">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="logo">
            <img style="height: 50px " src="assets/landing/assets/img/Mother-PNG-Image.png" alt="Welcome">
            HOSPITALI

        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="{{ url('child_home') }}">
                        <i class="material-icons"></i>
                        <p>home</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('create_child_report') }}">
                        <i class="material-icons"></i>
                        <p>register child</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('weight') }}">
                        <i class="material-icons"></i>
                        <p>weight chart</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('childmonitoring') }}">
                        <i class="material-icons"></i>
                        <p>height chart</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('childmonitemp') }}">
                        <i class="material-icons"></i>
                        <p>temperature chart</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('childhealthcardreport') }}">
                        <i class="material-icons"></i>
                        <p>child health card</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('childhealthcard1report') }}">
                        <i class="material-icons"></i>
                        <p>child immunization card </p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('childhealthcard2report') }}">
                        <i class="material-icons"></i>
                        <p>vitamin A</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('childhealthcard3report') }}">
                        <i class="material-icons"></i>
                        <p>developmental milestones</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('childhealthcard4report') }}">
                        <i class="material-icons"></i>
                        <p>identification of exposed children</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('childhealthcard5report') }}">
                        <i class="material-icons"></i>
                        <p>Health worker consultants</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('childhealthcard6report') }}">
                        <i class="material-icons"></i>
                        <p>PMTCT</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Table List </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blackF">

                                </div>
                                <div class="card-content table-responsive">

                                    <div class="col-m-3 offset-md-2">
                                        <H3 class="mt-20 ">
                                            PUBLIC HEALTH
                                        </H3>
                                    </div>
                                    <form action="{{route('childhealthcard_post')}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">
                                        <div class="col-m-3 offset-md-5">
                                            <H2 class="mt-20">CHILD IMMUNIZATION CARD

                                            </H2>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">


                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;HEALTHCARE FACILITY NAME:</label></span>
     <span class="col-md-6"><input name="health_facility_name" type="text" class="form-control"  aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div> <div class="col-sm-3">


                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;SERVICE DELIVERY POINT(SDP) No:</label></span>
     <span class="col-md-6"><input name="service_delivery_point_no" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div>

                                                    <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;CHILD'S NAME:</label></span>
     <span class="col-md-6"><input name="childs_name" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div> <div class="col-sm-3">

                                            <div >
                                                &ensp;&ensp;&ensp;&ensp;<label>SEX</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                                <select name="sex" align="center">
                                                    <option value="">-select sex-</option>
                                                    <option value="male">MALE</option>
                                                    <option value="female">FEMALE</option>}
                                                </select>
                                            </div><br></div></div>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;DATE OF BIRTH:</label></span>
     <span class="col-md-6"><input name="date_of_birth" type="date" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div> <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;GESTATION AGE(weeks)</label></span>
     <span class="col-md-6"><input name="gestation_age" type="number" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div>

                                                                    <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;PLACE OF BIRTH</label></span>
     <span class="col-md-6"><input name="place_of_birth" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div> <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;HOME</label></span>
     <span class="col-md-6"><input name="home" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div></div>
                                                                        <div class="row">
                                                                            <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;HEALTH FACILITY</label></span>
     <span class="col-md-6"><input name="health_facility" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div> <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;FATHER'S NAME</label></span>
     <span class="col-md-6"><input name="fathers_name" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div>

                                                                                    <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;MOTHER'S NAME</label></span>
     <span class="col-md-6"><input name="mothers_name" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div> <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;PROVINCE</label></span>
     <span class="col-md-6"><input name="province" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div></div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;DISTRICT</label></span>
     <span class="col-md-6"><input name="district" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div> <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;DIVISION</label></span>
     <span class="col-md-6"><input name="division" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div>

                                                                                                    <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;LOCATION</label></span>
     <span class="col-md-6"><input name="location" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div> <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;ESTATE/VILLAGE</label></span>
     <span class="col-md-6"><input name="estate" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div></div>
                                        <h5>ANY ADVERSE EVENTS FOLLOWING IMMUNIZATION(AEFI)</h5>
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-3"><label>&ensp;&ensp;&ensp;P.O BOX</label></span>
     <span class="col-md-3"><input name="po_box" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
            <span class="col-md-3"><label>&ensp;&ensp;&ensp;Town</label></span>
     <span class="col-md-3"><input name="town" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div> <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;Telephone</label></span>
     <span class="col-md-6"><input name="telephone" type="number" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div>




                                                                                                            <div class="col-sm-3">

                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;DATE</label></span>
     <span class="col-md-6"><input name="date" type="date" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div> <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;Describe</label></span>
     <span class="col-md-6"><textarea name="description" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></span>
</span>
                                            </div><br></div></div>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;ANTIGEN/VACCINE</label></span>
     <span class="col-md-6"><input name="antigen" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div> <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;BATCH NUMBER</label></span>
     <span class="col-md-6"><input name="batch_no" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div>

                                                                                                                                    <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;MANUFACTURE DATE</label></span>
     <span class="col-md-6"><input name="manufacture_date" type="date" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div> <div class="col-sm-3">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;EXPIRY DATE</label></span>
     <span class="col-md-6"><input name="expiry_date" type="date" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div></div>
                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-sm-6">
                                            <div><span class="row">
        <span class="col-md-6"><label>&ensp;&ensp;&ensp;MANUFACTURER'S NAME</label></span>
     <span class="col-md-6"><input name="manufacturer_name" type="text" class="form-control" id="" aria-describedby="" placeholder=""></span>
</span>
                                            </div><br></div></div>
                                            <hr>
                                            <p align="center">IF YOUR CHILD DEVELOPS ANY ADVERSE EVENTS FOLLOWING IMMUNIZATION (AEFI)<br>PLEASE REPORT IMMEDIATELY TO THE NEAREST<br>HEALTH FACILITY</p>







                                        <div class="form-group  ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-6">

                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>


        <footer class="footer">
            <div class="container-fluid">

                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    created by joe kabucho
                </p>
            </div>
        </footer>
    </div>
    </div>
@endsection