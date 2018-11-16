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
                        @if (Auth::user()->user_type==2)
                            <a href="{{ url('motherstemp') }}">
                                <i class="material-icons"></i>
                                <p>temperatue chart</p>
                            </a>
                        @endif
                    </li>
                    <li class="active">
                        @if (Auth::user()->user_type==2)
                            <a href="{{ url('mothersweight') }}">
                                <i class="material-icons"></i>
                                <p>weight chart</p>
                            </a>
                        @endif
                    </li>
                    <li class="active">
                        <a href="{{ url('bmi') }}">
                            <i class="material-icons"></i>
                            <p>BMI</p>
                        </a>
                    </li>
                    <li class="active">\
                        @if (Auth::user()->user_type==2)
                            <a href="{{ url('mothersbp') }}">
                                <i class="material-icons"></i>
                                <p> blood pressure chart</p>
                            </a>
                        @endif
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
                                    <div class="card-content table-responsive">
                                        <table class="table table-hover">

                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>GENERAL</th>
                                <th>CVS:</th>
                                <th>RESPIRATION:</th>
                                <th>BREASTS: </th>
                                <th>ABDOMEN:</th>
                                <th>VAGINAL EXAMINATION:</th>
                                <th>DISCHARGE/DUD: </th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach( $physicalexaminationreport_results as  $physicalexaminationreport_results)
                                <tr>
                                    <td>{{  $physicalexaminationreport_results->general}}</td>
                                    <td>{{  $physicalexaminationreport_results->cvs}}</td>
                                    <td>{{  $physicalexaminationreport_results->respiration}}</td>
                                    <td>{{  $physicalexaminationreport_results->breasts}}</td>
                                    <td>{{  $physicalexaminationreport_results->abdomen}}</td>
                                    <td>{{  $physicalexaminationreport_results->vaginal_examination}}</td>
                                    <td>{{  $physicalexaminationreport_results->discharge_dud}}</td>
                                    <td><form role="form" action="/physicalexamination_delete/{{$physicalexaminationreport_results->id}}" enctype="multipart/form-data" method="post" >@csrf

                                            <div>
                                                <button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>
                                            </div>
                                        </form></td>

                                    @endforeach
                            </tr>

                            </tbody>

                        </table>
                                            @if (Auth::user()->user_type==2)
                        <div class="form-group">
                            <a href="{{ url('physicalexamination') }}" type="submit" class="btn btn-primary">add record</a>

                        </div>
                                        @endif
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