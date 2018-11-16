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
                    <a href="{{ url('maternal_home') }}">
                        <i class="material-icons"></i>
                        <p>home</p>
                    </a>
                </li>

                <li class="active">
                    <a href="{{ url('maternalreport') }}">
                        <i class="material-icons"></i>
                        <p>maternal profile</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('motherstemp') }}">
                        <i class="material-icons"></i>
                        <p>temperatue chart</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('mothersweight') }}">
                        <i class="material-icons"></i>
                        <p>weight chart</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('bmi') }}">
                        <i class="material-icons"></i>
                        <p>BMI</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('mothersbp') }}">
                        <i class="material-icons"></i>
                        <p> blood pressure chart</p>
                    </a>
                </li>

                <li class="active">
                    <a href="{{ url('physicalexaminationreport') }}">
                        <i class="material-icons"></i>
                        <p>physical examination</p>
                    </a>
                </li>



                <li class="active">
                    <a href="{{ url('previousreport') }}">
                        <i class="material-icons"></i>
                        <p>previous</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('surgicalreport') }}">
                        <i class="material-icons"></i>
                        <p>medical/ Surgical Hx</p>
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
                                        <H3 class="mt-20 "> PUBLIC HEALTH

                                        </H3>
                                    </div>
                                    <form action="{{route('surgical_post')}}" method="post" >{!! csrf_field() !!}
                                        <table class="table table-bordered">
                                            <H3>MEDICAL AND SURGICAL HISTORY</H3>

                                            <div class="row">
                                                <div class="col-sm-4">
                                                <label for="staticEmail" class="col-sm-2 col-form-label">SURGICAL OPERATION:</label>
                                                    <input type="text" name="surgicaloperation" class="form-control" placeholder="">
                                                </div>

                                                    <div class="col-sm-4">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">BLOOD TRANSFUSION:</label>
                                                        <input type="text" name="bloodtransfusion" class="form-control" placeholder="">
                                                    </div>


                                                        <div class="col-sm-4">
                                                        <label for="staticEmail" class="col-sm-2 col-form-label">FAMILY HISTORY:</label>
                                                            <input type="text" name="familyhistory" class="form-control" placeholder="">
                                                        </div>
                                            </div>
                                            <div class="row ">
                                                            <div class="col-sm-4">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">TWINS:</label>
                                                                <input type="text" name="twins" class="form-control" placeholder="">
                                                            </div>


                                                                <div class="col-sm-4">
                                                                <label for="staticEmail" class="col-sm-3 col-form-label">TUBERCULOSIS:</label>
                                                                    <input type="text" name="tuberculosis" class="form-control" placeholder="">
                                                                </div>


                                                                    <div class="col-sm-4">
                                                                    <label for="staticEmail" class="col-sm-3 col-form-label">DIABETES:</label>
                                                                        <input type="text" name="diabetes" class="form-control" placeholder="">
                                                                    </div>
                                            </div>
                                            <div class="row ">
                                                                        <div class="col-sm-4">
                                                                        <label for="staticEmail" class="col-sm-3 col-form-label">HYPERTENSION:</label>
                                                                            <input type="text" name="hypertension" class="form-control" placeholder="">
                                                                        </div>
                                                                        <br>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </table>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>




@endsection