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
                                    <form action="{{route('childhealthcard3_post')}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">



                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th colspan="3">DEVELOPMENT MILESTONES</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>AGE ACHIEVED</td>
                                                    <td>NORMAL LIMITS</td>
                                                </tr>
                                                <tr>
                                                    <td>Social Smile</td>
                                                    <td><input name="social" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>4-6 weeks</td>
                                                </tr>
                                                <tr>
                                                    <td>Head Holding/Control</td>
                                                    <td><input name="head" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>1-3 months</td>
                                                </tr>
                                                <tr>
                                                    <td>Turns towards the origin of sound</td>
                                                    <td><input name="turn" type="numbers" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>2-3 months</td>
                                                </tr>
                                                <tr>
                                                    <td>Extend hand to grasp a toy</td>
                                                    <td><input name="extend" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>2-3 moths</td>
                                                </tr>
                                                <tr>
                                                    <td>Sitting</td>
                                                    <td><input name="sitting" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>5-9 months</td>
                                                </tr>
                                                <tr>
                                                    <td>Standing</td>
                                                    <td><input name="standing" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>7-13 months</td>
                                                </tr>
                                                <tr>
                                                    <td>Walking</td>
                                                    <td><input name="walking" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>12-18 moths</td>
                                                </tr>
                                                <tr>
                                                    <td>Talking</td>
                                                    <td><input name="talking" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td>9-24 months</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">Refer for further assessment if a milestone delays beyond the normal age limit indicated above</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <br><br>
                                            <div class="form-group  ">
                                                <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                                <div class="col-sm-6">

                                                </div>
                                                <br>

                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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




@endsection