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
                hospitali

            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        @if (Auth::user()->user_type==2)
                        <a href="{{ url('home') }}">

                            <i class="material-icons"></i>
                            <p>home</p>
                        </a>
                        @endif
                    </li>
                    <li class="active">
                        @if (Auth::user()->user_type==2)
                        <a href="{{ url('maternal_home') }}">
                            <i class="material-icons"></i>
                            <p>maternal profile</p>
                        </a>
                        @endif
                    </li>

                    <li class="active">
                        @if (Auth::user()->user_type==2)
                        <a href="{{ url('child_home') }}">
                            <i class="material-icons"></i>
                            <p>child profile</p>
                        </a>
                        @endif
                    </li>
                    <li class="active">
                        @if (Auth::user()->user_type==2)
                        <a href="{{ url('mch_booklet') }}">
                            <i class="material-icons"></i>
                            <p>view booklet</p>
                        </a>
                        @endif
                    </li>
                    <li class="active">
                        @if (Auth::user()->user_type==1)
                            <a href="{{ url('mother') }}"><i class="material-icons"></i><p>patient profile</p></a>
                        @endif
                    </li>
                    <li class="active">
                        @if (Auth::user()->user_type==0)
                            <a href="{{ url('admin') }}"><i class="material-icons"></i><p>admin</p></a>
                        @endif
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
                        <a class="navbar-brand" href="#"> hospitali patient profile Dashboard </a>
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
                                        <a href="#">new doctors appointment</a>
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
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
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
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="black">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Tables</p>
                                    <h3 class="title">15

                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">thank you</i>
                                        <a href="#pablo">continue using</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="black">
                                    <i class="material-icons attach-money">thumb_up</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">successfull submissions</p>
                                    <h3 class="title">24</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="black">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">unsuccessfull submissions</p>
                                    <h3 class="title">75</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Pusher.io
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="black">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">USERS</p>
                                    <h3 class="title">     @foreach( $create_user_results as  $create_user_result)

                                                {{  $create_user_result->id }}
                                        @endforeach</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="black">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Daily submissions</h4>
                                    <p class="category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today submissions.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="black">
                                    <div class="ct-chart" id="emailsSubscriptionChart"></div>
                                </div>
                                <div class="card-content">
                                    <p class="category">Last  Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="black">
                                    <div class="ct-chart" id="completedTasksChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">data usage</h4>
                                    <p class="category">Last usage Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="black">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Profiles:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#profile" data-toggle="tab">
                                                        <i class="material-icons">face</i>children registered
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#messages" data-toggle="tab">
                                                        <i class="material-icons">pregnant_woman</i> mothers registered
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <table class="table">
                                                <tbody>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                    view record
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <div class="col-m-3 offset-md-2">
                                                                    <H3 class="mt-20 ">
                                                                        CHILD PROFILE
                                                                    </H3>
                                                                </div>

                                                                <div class="row">
                                                                    @foreach( $create_child_results as  $create_child_resultss)
                                                                        <div class="col-sm-6">
                                                                            <div class="row">
                                                                                <label for="staticEmail" class="col-sm-3 col-form-label">CHILDS NAME</label>
                                                                                <div class="col-sm-6">
                                                                                    {{  $create_child_resultss->child_name }}
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <label for="staticEmail" class="col-sm-3 col-form-label">DATE OF BIRTH:</label>
                                                                                <div class="col-sm-6">
                                                                                    {{  $create_child_resultss->date_of_birth }}
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <label for="staticEmail" class="col-sm-3 col-form-label">MOTHERS NAME</label>
                                                                                <div class="col-sm-6">
                                                                                    {{  $create_child_resultss->mothers_name }}
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <label for="staticEmail" class="col-sm-3 col-form-label">PARITY:</label>
                                                                                <div class="col-sm-6">
                                                                                    {{  $create_child_resultss->parity }}
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <label for="staticEmail" class="col-sm-3 col-form-label">WEIGHT:</label>
                                                                                <div class="col-sm-6">
                                                                                    {{  $create_child_resultss->weight }}
                                                                                </div>
                                                                            </div>




                                                                            <div class="row">
                                                                                <label for="staticEmail" class="col-sm-3 col-form-label"> STATUS:</label>
                                                                                <div class="col-sm-6">
                                                                                    {{  $create_child_resultss->status }}
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                <tr>
                                                    <th>child_name</th>
                                                    <th>date_of_birth</th>
                                                    <th>mothers_name</th>
                                                    <th>parity</th>
                                                    <th>weight</th>
                                                    <th>status</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach( $create_child_results as  $create_child_result)
                                                    <tr>
                                                        <td>{{  $create_child_result->child_name }}</td>
                                                        <td>{{  $create_child_result->date_of_birth }}</td>
                                                        <td>{{  $create_child_result->mothers_name}}</td>
                                                        <td>{{  $create_child_result->parity }}</td>
                                                        <td>{{  $create_child_result->weight}}</td>
                                                        <td>{{  $create_child_result->status}}</td>
                                                    </tr>

                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <table class="table">

                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">view record</button>

                                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-m-3 offset-md-2">
                                                                    <H3 class="mt-20 ">
                                                                        MATERNAL PROFILE
                                                                    </H3>
                                                                </div>
                                                                @foreach( $maternalreport_results as  $maternalreport_resultss)
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">NAME OF INSTITUTION:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->name_of_institution}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">NAME OF CLIENT:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->name_of_client}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">DATE OF BIRTH:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->date_of_birth}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">GRAVIDA:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->gravida}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">PARITY:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->parity}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">HEIGHT:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->height}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">L.M.P:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->lmp}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">EDD:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->edd}}
                                                                            </div>
                                                                        </div>



                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">MARITAL STATUS:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->marital_status}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <br><br>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">EDUCATION:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->education}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">ADDRESS:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->address}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">TELEPHONE:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->telephone}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">OCCUPATION:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->occupation}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">NEXT OF KIN:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->next_of_kin}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <label for="staticEmail" class="col-sm-3 col-form-label">NEXT OF KIN ADDRESS:</label>
                                                                            <div class="col-sm-6">
                                                                                {{  $maternalreport_resultss->next_of_kin_address}}
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                        </div>
                                    </div>
                                </div>
                                </tr>
                                                <thead>
                                                <tr>
                                                    <th>NAME OF INSTITUTION</th>
                                                    <th>NAME OF CLIENT</th>
                                                    <th>DATE OF BIRTH</th>
                                                    <th>HEIGHT</th>
                                                    <th>MARITAL STATUS</th>
                                                    <th>TELEPHONE</th>
                                                    <th>NEXT OF KIN</th>

                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach( $maternalreport_results as  $maternalreport_result)


                                                    <tr>
                                                        <td>{{  $maternalreport_result->name_of_institution}}</td>
                                                        <td>{{  $maternalreport_result->name_of_client}}</td>
                                                        <td>{{  $maternalreport_result->date_of_birth}}</td>
                                                        <td>{{  $maternalreport_result->height}}</td>
                                                        <td>{{  $maternalreport_result->marital_status}}</td>
                                                        <td>{{  $maternalreport_result->telephone}}</td>
                                                        <td>{{  $maternalreport_result->next_of_kin}}</td>

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="optionsCheckboxes" checked>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>pending issues to be resolved
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="optionsCheckboxes">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>upcoming features to be added"</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="optionsCheckboxes">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Pending process</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="optionsCheckboxes" checked>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Successfull submission
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="optionsCheckboxes">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>Server error?"</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="black">
                                    <h4 class="title">Users</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>telephone</th>
                                        </thead>
                                        <tbody>
                                        @foreach( $create_user_results as  $create_user_results)
                                            <tr>
                                                <td>{{  $create_user_results->id }}</td>
                                                <td>{{  $create_user_results->name }}</td>
                                                <td>{{  $create_user_results->email }}</td>
                                                <td>{{  $create_user_results->telephone }}</td>




                                            </tr>

                                            @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
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