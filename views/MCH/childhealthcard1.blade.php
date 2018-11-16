@extends('MCH.mchmaster')

@section('content')
    <div class="wrapper">

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
                                    <form action="{{route('childhealthcard1_post')}}" method="post" >{!! csrf_field() !!}

                                        <div class="col-m-3 offset-md-12">
                                            <H2 class="mt-10">CHILD IMMUNIZATION CARD

                                            </H2>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>BCG VACCINE:at birth<br>(Intra-dermal left arm)</th>
                                                    <th>Date Given</th>
                                                    <th>Date of next visit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Dose:(0.05mls for child below 1 year)</td>
                                                    <td><input name="date_given9" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="date_of_next_visit9" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Dose:(0.1 mls for child above 1 year)</td>
                                                    <td><input name="date_given10" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="date_of_next_visit10" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>BCG Scar checked</td>
                                                    <td>DATE CHECKED</td>
                                                    <td>PRESENT<input value='present' name="present" type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><input name='date_checked' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>ABSENT<input name="absent" value='absent' type="checkbox" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>DATE REDONE</td>
                                                    <td><input name='date_redone' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            </div>
                                            <div class="col-sm-6">
                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>DIPTHERIA/PERTUSSIS/TETANUS/HEPATITIS B/HAEMOPHILUS INFLUENZAE Type b<br>Dose:(0.5mls) Intra Muscular outer right thigh</th>
                                                    <th>Date Given</th>
                                                    <th>Date of next visit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1st dose at 6 weeks</td>
                                                    <td><input name='date_given' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>2nd dose at 10 weeks</td>
                                                    <td><input name='date_given1' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit1' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>3rd dose at 14 weeks</td>
                                                    <td><input name='date_given2' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit2' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>ORAL POLIO VACCINE(OPV)<br><br>Dose:2 drops orally</th>
                                                    <th>Date Given</th>
                                                    <th>Date of next visit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Birth Dose:at birth or within 2 wks (OPV 0)</td>
                                                    <td><input name='date_given3' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit3' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>

                                                <tr>
                                                    <td>1st dose at 6 weeks(OPV 1)</td>
                                                    <td><input name='date_given4' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit4' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>2nd dose at 10 weeks(OPV 2)</td>
                                                    <td><input name='date_given5' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit5' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>3rd dose at 14 weeks(OPV 3)</td>
                                                    <td><input name='date_given6' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='date_of_next_visit6' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            </div>
                                                <div class="col-sm-6">
                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>YELLOW FEVER VACCINE at 9 Months</th>
                                                    <th>Date Given</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Dose:(0.5mls) Intra-Muscular left upper deltoid</td>
                                                    <td><input name='date_given7' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                                </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>MEASLES VACCINE at 9 Months</th>
                                                    <th>Date Given</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Dose:(0.5mls) Subcutaneously right upper arm</td>
                                                    <td><input name='date_given8' type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                            <br>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>


                                        <div class="form-group  ">
                                            <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-6">

                                            </div>
                                            <br>

                                        </div>

                                    </form>
                                </div>

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

@endsection