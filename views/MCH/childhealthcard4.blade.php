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

                                    <div class="col-m-3 offset-md-6">
                                        <H3 class="mt-20 ">
                                            PUBLIC HEALTH
                                        </H3>
                                    </div>
                                    <form action="{{route('childhealthcard4_post')}}" method="post" >{!! csrf_field() !!}
                                    <table class="table table-bordered">

                                            <h5>IDENTIFICATION OF THE EXPOSED CHILDREN AT 6 WEEKS OR SOON THEREAFTER</h5><br>
                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>MOTHER SEROLOGY</th>
                                                    <th colspan="6">BABY SEROLOGY</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>ANTIBODY</td>
                                                    <td>PCR</td>
                                                </tr>
                                                <tr>
                                                    <td>REACTIVE</td>
                                                    <td><input name="mother" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="antibody" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="pcr" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>NON-REACTIVE</td>
                                                    <td><input name="mother1" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="antibody1" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name='pcr1'  type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td>NON TESTED</td>
                                                    <td><input name="mother2" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="antibody2"  type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="pcr2" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <h5>CO-TRIMOXAZOLE PROPHYLAXIS FOR EXPOSED CHILDREN AT 6 WEEKS OR SOON THEREAFTER</h5>


                                            <table class="table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>Age</th>
                                                    <th>Date Given</th>
                                                    <th>Quantity dispensed in mls</th>
                                                    <th>Date of the next appointment </th>
                                                    <th>Comments</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td>6 weeks</td>
                                                    <td><input name="6wk_date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wk_quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wk_date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="6wk_comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>10 weeks</td>
                                                    <td><input name="10wk_date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="10wk_quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="10wk_date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="10wk_comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>14 weeks</td>
                                                    <td><input name="14date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="14quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="14date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="14comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>4 months</td>
                                                    <td><input name="4date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="4quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="4date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="4comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>5 months</td>
                                                    <td><input name="5date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="5quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="5date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="5comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>6 months</td>
                                                    <td><input name="6date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="6comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>7 months</td>
                                                    <td><input name="7date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="7quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="7date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="7comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>8 months</td>
                                                    <td><input name="8date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="8quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="8date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="8comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>9 months</td>
                                                    <td><input name="9date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="9quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="9date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="9comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>10 months</td>
                                                    <td><input name="10date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="10quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="10date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="10comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>11 months</td>
                                                    <td><input name="11date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="11quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="11date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="11comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>12 months</td>
                                                    <td><input name="12date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="12comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>18 months</td>
                                                    <td><input name="18date_given" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18quantity_dispensed" type="number" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18date_appointment" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><textarea name="18comments" type="text" class="form-control" id="" aria-describedby="" placeholder=""></textarea></td>
                                                </tr>



                                                </tbody>
                                            </table>
                                            <br>
                                            <h5>IMMUNOLOGY STAGING FOR EXPOSED CHILDREN</h5>
                                            <table class="table-responsive">

                                                <thead>
                                                <tr>
                                                    <th>Child's Age</th>
                                                    <th>Date</th>
                                                    <th>HB</th>
                                                    <th>DBS/PCR</th>
                                                    <th>Antibody test</th>
                                                    <th colspan="2">%CD4 COUNT</th>
                                                    <th colspan="2">Total Lymphocyte Count</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><p> <20% </td>
                                                    <td>>20%</td>
                                                    <td><3500/mm3</td>
                                                    <td>>3500mm3</td>
                                                </tr>
                                                <tr>
                                                    <td>6 weeks</td>
                                                    <td><input name="6wks_date_givendate" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givenhb" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givendbs_pcr" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givenantibody_test" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givencd4count<20" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givencd4count>20" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givenlymphocyte_count<3500" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6wks_date_givenlymphocyte_count>3500" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td>6 months</td>
                                                    <td><input name="6_date" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_hb" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_dbs_pcr" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_antibody_test" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_cd4count<20" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_cd4count>20" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_lymphocyte_count<3500" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="6_lymphocyte_count>3500" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td>12 months</td>
                                                    <td><input name="12_date" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_hb" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_dbs_pcr" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_antibody_test" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_cd4count<20" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_cd4count>20" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_lymphocyte_count<3500" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="12_lymphocyte_count>3500" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>

                                                </tr>
                                                <tr>
                                                    <td>18 month</td>
                                                    <td><input name="18_date" type="date" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_hb" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_dbs_pcr" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_antibody_test" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_cd4count<20" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_cd4count>20" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_lymphocyte_count<3500" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>
                                                    <td><input name="18_lymphocyte_count>3500" type="text" class="form-control" id="" aria-describedby="" placeholder=""></td>

                                                </tr>
                                                </tbody>
                                            </table>
                                            <br>
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
    </div>


@endsection