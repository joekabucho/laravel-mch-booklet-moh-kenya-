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
                    @if (Auth::user()->user_type==2)
                        <a href="{{ url('weight') }}">
                            <i class="material-icons"></i>
                            <p>weight chart</p>
                        </a>
                    @endif
                </li>
                <li class="active">
                    @if (Auth::user()->user_type==2)
                        <a href="{{ url('childmonitoring') }}">
                            <i class="material-icons"></i>
                            <p>height chart</p>
                        </a>
                    @endif
                </li>
                <li class="active">
                    @if (Auth::user()->user_type==2)
                        <a href="{{ url('childmonitemp') }}">
                            <i class="material-icons"></i>
                            <p>temperature chart</p>
                        </a>
                    @endif
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

                                    </H3>
                                </div>
                                <form action="{{route('create_child_post')}}" method="POST" >{!! csrf_field() !!}
                                    <table class="table table-bordered">
                                        <div class="col-m-3 offset-md-2">
                                            <H3 class="mt-20 ">
                                                CHILD PROFILE
                                            </H3>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">CHILDS NAME</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="child_name" class="form-control" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">DATE OF BIRTH:</label>
                                                    <div class="col-sm-6">
                                                        <input type="date" name="date_of_birth" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">MOTHERS NAME</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="mothers_name" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">PARITY:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="parity" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label">WEIGHT:</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" name="weight" class="form-control" placeholder="">
                                                    </div>
                                                </div>




                                                <div class="row">
                                                    <label for="staticEmail" class="col-sm-3 col-form-label"> STATUS:</label>
                                                    <div class="col-sm-6">
                                                        <select name="status" align="center">
                                                            <option value="">-select-</option>
                                                            <option value="HEALTHY">HEALTHY</option>
                                                            <option value="UNDERWEIGHT">UNDERWEIGHT</option>
                                                            <option value="OVERWEIGHT">OVERWEIGHT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>


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





@endsection