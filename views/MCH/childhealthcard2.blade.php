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
                                <div class="card-header" data-background-color="black">

                                </div>
                                <div class="card-content table-responsive">

                                    <div class="col-m-3 offset-md-2">
                                        <H3 class="mt-20 ">
                                            PUBLIC HEALTH
                                        </H3>
                                    </div>
                                    <form action="{{route('childhealthcard2_post')}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">
                                        <div class="col-m-3 offset-md-5">
                                            <H2 class="mt-10">
                                                VITAMIN A CAPSULES FROM 6 MONTHS

                                            </H2>
                                        </div>

                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">VITAMIN A CAPSULE:Given orally<br><br>At 6 months or at .rst contract after 6 months</th>
                                                    <th>Tick Age Given</th>
                                                    <th>Date of next visit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Dose</td>
                                                    <td>Age</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>100,000 IU</td>
                                                    <td>at 6 months</td>
                                                    <td><input NAME="check6" VALUE="6 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date6' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 12 months(1 Year)</td>
                                                    <td><input NAME="check12" VALUE="12 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date12' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 18 months(1 1/2 Years)</td>
                                                    <td><input NAME="check18" VALUE="18 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date18' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 24 months(2 Years)</td>
                                                    <td><input NAME="check24" VALUE="24 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date24' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 30 months(2 1/2 Years)</td>
                                                    <td><input NAME="check30" VALUE="30 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date30' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 36 months(3 Years)</td>
                                                    <td><input NAME="check36" VALUE="36 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date36' type="date" class="form-control" id="" aria-describedby="" placeholder="">  </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 42 months(3 1/2 Years)</td>
                                                    <td><input NAME="check42" VALUE="42 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date42' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 48 months(4 Years)</td>
                                                    <td><input NAME="check48" VALUE="48 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date48' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 54 months(4 1/2 Years)</td>
                                                    <td><input NAME="check54" VALUE="54 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date54' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>200,000 IU</td>
                                                    <td>at 60 months(5 Years)</td>
                                                    <td><input NAME="check60" VALUE="60 MONTHS" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input NAME='date60' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br><br>


                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th  colspan="2">SUPPLEMENTAL VACCINES</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>VACCINE</td>
                                                    <td>DATE GIVEN</td>
                                                </tr>
                                                <tr>
                                                    <td><input name="vaccine" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>


                                                </tbody>
                                            </table>

                                            <br><br>
                                            <div class="form-group  ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                                <br>
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
                    creted by tilt systems
                </p>
            </div>
        </footer>
    </div>
    </div>
@endsection