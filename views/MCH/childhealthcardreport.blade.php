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

                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>HEALTHCARE FACILITY NAME:</th>
                                                <th>SERVICE DELIVERY POINT(SDP) No:</th>
                                                <th>CHILD'S NAME:</th>
                                                <th>DATE OF BIRTH:</th>
                                                <th>GESTATION AGE(weeks)</th>
                                                <th>PLACE OF BIRTH</th>
                                                <th>HOME</th>
                                                <th>HEALTH FACILITY</th>
                                                <th>FATHER'S NAME</th>
                                                <th>MOTHER'S NAME</th>
                                                <th>PROVINCE</th>
                                                <th>DISTRICT</th>
                                                <th>DIVISION</th>
                                                <th>LOCATION</th>
                                                <th>ESTATE/VILLAGE</th>
                                                <th>P.O BOX </th>
                                                <th>Telephone</th>
                                                <th>DATE</th>
                                                <th>Describe</th>
                                                <th>ANTIGEN/VACCINE</th>
                                                <th>BATCH NUMBER</th>
                                                <th>MANUFACTURE DATE</th>
                                                <th>EXPIRY DATE</th>
                                                <th>MANUFACTURER'S NAME</th>
                                                <th>delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($childhealthcard_results as $childhealthcard_result)
                                                <tr>
                                                    <td>{{ $childhealthcard_result->health_facility_name}}</td>
                                                    <td>{{ $childhealthcard_result->service_delivery_point_no}}</td>
                                                    <td>{{ $childhealthcard_result->childs_name}}</td>
                                                    <td>{{ $childhealthcard_result->date_of_birth}}</td>
                                                    <td>{{ $childhealthcard_result->gestation_age}}</td>
                                                    <td>{{ $childhealthcard_result->place_of_birth}}</td>
                                                    <td>{{ $childhealthcard_result->health_facility}}</td>
                                                    <td>{{ $childhealthcard_result->fathers_name}}</td>
                                                    <td>{{ $childhealthcard_result->mothers_name}}</td>
                                                    <td>{{ $childhealthcard_result->province}}</td>
                                                    <td>{{ $childhealthcard_result->district}}</td>
                                                    <td>{{ $childhealthcard_result->division}}</td>
                                                    <td>{{ $childhealthcard_result->location}}</td>
                                                    <td>{{ $childhealthcard_result->estate}}</td>
                                                    <td>{{ $childhealthcard_result->po_box}}</td>
                                                    <td>{{ $childhealthcard_result->town}}</td>
                                                    <td>{{ $childhealthcard_result->telephone}}</td>
                                                    <td>{{ $childhealthcard_result->date}}</td>
                                                    <td>{{ $childhealthcard_result->description}}</td>
                                                    <td>{{ $childhealthcard_result->antigen}}</td>
                                                    <td>{{ $childhealthcard_result->batch_no}}</td>
                                                    <td>{{ $childhealthcard_result->manufacture_date}}</td>
                                                    <td>{{ $childhealthcard_result->expiry_date}}</td>
                                                    <td>{{ $childhealthcard_result->manufacturer_name}}</td>
                                                    <td><form role="form" action="/childhealthcard_delete/{{$childhealthcard_result->id}}" enctype="multipart/form-data" method="post" >@csrf

                                                        <div>
                                                            <button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>
                                                        </div>
                                                    </form></td>
                                                </tr>
                                            @endforeach



                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @if (Auth::user()->user_type==2)
                        <div class="form-group">
                            <a href="{{ url('childhealthcard') }}" type="submit" class="btn btn-primary">add record</a>

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