@extends('MCH.mchmaster')

@section('content')
    <div class="wrapper">
        <div class="sidebar" data-color="black" data-image="../assets/img/sidebar-1.jpg">

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
                                                <th>Date given at 9 months</th>
                                                <th>Date of next visit at 9 months</th>
                                                <th>Date given at 10 months</th>
                                                <th>Date of next visit at 10 months</th>
                                                <th>Present </th>
                                                <th>date checked</th>
                                                <th>absent</th>
                                                <th>date redone</th>
                                                <th>date given</th>
                                                <th>date of next visit</th>
                                                <th>date given 1 wks</th>
                                                <th>date of next visit 1 wks</th>
                                                <th>date given 2 wks</th>
                                                <th>date of next visit 2 wks </th>
                                                <th>date given 3 wks</th>
                                                <th>date of next visit 3 wks</th>
                                                <th>date given 4 wks</th>
                                                <th>date of next visit 4 wks</th>
                                                <th>date given 5 wks</th>
                                                <th>date of next visit 5 wks</th>
                                                <th>date given 6 wks</th>
                                                <th>date of next visit 6 wks</th>
                                                <th>date given 7 wks</th>
                                                <th>date given 8 wks</th>
                                                <th>delete</th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($childhealthcard1_results as $childhealthcard1_result)
                                                <tr>
                                                    <td>{{ $childhealthcard1_result->date_given9}}</td>
                                                    <td>{{ $childhealthcard1_result-> date_of_next_visit9}}</td>
                                                    <td>{{ $childhealthcard1_result-> date_given10}}</td>
                                                    <td>{{ $childhealthcard1_result-> date_of_next_visit10}}</td>
                                                    <td>{{ $childhealthcard1_result->present }}</td>
                                                    <td>{{ $childhealthcard1_result->date_checked }}</td>
                                                    <td>{{ $childhealthcard1_result->absent }}</td>
                                                    <td>{{ $childhealthcard1_result->date_redone }}</td>
                                                    <td>{{ $childhealthcard1_result->date_given }}</td>
                                                    <td>{{ $childhealthcard1_result-> date_of_next_visit }}</td>
                                                    <td>{{ $childhealthcard1_result-> date_given1 }}</td>
                                                    <td>{{ $childhealthcard1_result-> date_of_next_visit1 }}</td>
                                                    <td>{{ $childhealthcard1_result->date_given2 }}</td>
                                                    <td>{{ $childhealthcard1_result->date_of_next_visit2 }}</td>
                                                    <td>{{ $childhealthcard1_result->date_given3 }}</td>
                                                    <td>{{ $childhealthcard1_result->date_of_next_visit3 }}</td>
                                                    <td>{{ $childhealthcard1_result->date_given4 }}</td>
                                                    <td>{{ $childhealthcard1_result-> date_of_next_visit4 }}</td>
                                                    <td>{{ $childhealthcard1_result-> date_given5 }}</td>
                                                    <td>{{ $childhealthcard1_result-> date_of_next_visit5 }}</td>
                                                    <td>{{ $childhealthcard1_result->date_given6 }}</td>
                                                    <td>{{ $childhealthcard1_result->date_of_next_visit6 }}</td>
                                                    <td>{{ $childhealthcard1_result-> date_given7 }}</td>
                                                    <td>{{ $childhealthcard1_result->date_given8 }}</td>
                                                    @if (Auth::user()->user_type==2)
                                                    <td><form role="form" action="/childhealthcard1_delete/{{$childhealthcard1_result->id}}" enctype="multipart/form-data" method="post" >@csrf

                                                            <div>
                                                                <button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>
                                                            </div>
                                                        </form></td>
                                                        @endif
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
                            <a href="{{ url('childhealthcard1') }}" type="submit" class="btn btn-primary">add record</a>

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


@endsection