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

                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>NAME OF INSTITUTION</th>
                                                <th>NAME OF CLIENT</th>
                                                <th>DATE OF BIRTH</th>
                                                <th> GRAVIDA</th>
                                                <th>PARITY</th>
                                                <th>HEIGHT</th>
                                                <th> L.M.P</th>
                                                <th>EDD</th>
                                                <th>MARITAL STATUS</th>
                                                <th> EDUCATION</th>
                                                <th>ADDRESS</th>
                                                <th>TELEPHONE</th>
                                                <th>OCCUPATION</th>
                                                <th>NEXT OF KIN</th>
                                                <th>NEXT OF KIN ADDRESS</th>
                                                <th>DELETE</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach( $maternalreport_results as  $maternalreport_results)
                                                <tr>
                                                    <td>{{  $maternalreport_results->name_of_institution}}</td>
                                                    <td>{{  $maternalreport_results->name_of_client}}</td>
                                                    <td>{{  $maternalreport_results->date_of_birth}}</td>
                                                    <td>{{  $maternalreport_results->gravida}}</td>
                                                    <td>{{  $maternalreport_results->parity}}</td>
                                                    <td>{{  $maternalreport_results->height}}</td>
                                                    <td>{{  $maternalreport_results->lmp}}</td>
                                                    <td>{{  $maternalreport_results->edd}}</td>
                                                    <td>{{  $maternalreport_results->marital_status}}</td>
                                                    <td>{{  $maternalreport_results->education}}</td>
                                                    <td>{{  $maternalreport_results->address}}</td>
                                                    <td>{{  $maternalreport_results->telephone}}</td>
                                                    <td>{{  $maternalreport_results->occupation}}</td>
                                                    <td>{{  $maternalreport_results->next_of_kin}}</td>
                                                    <td>{{  $maternalreport_results->next_of_kin_address}}</td>
                                                    <td><form role="form" action="/maternal_delete/{{$maternalreport_results->id}}" enctype="multipart/form-data" method="post" >@csrf

                                                            <div>
                                                                <button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>
                                                            </div>
                                                        </form></td>

                                                </tr>

                                                    @endforeach




                                            </tbody>

                                        </table>
                                    @if (Auth::user()->user_type==1)
                                    <SCRIPT LANGUAGE="JavaScript">





                                        <!-- Begin
                                        function isValidDate(dateStr) {

                                            var datePat = /^(\d{1,2})(\/|-)(\d{1,2})\2(\d{4})$/; // requires 4 digit year

                                            var matchArray = dateStr.match(datePat); // is the format ok?
                                            if (matchArray == null) {
                                                alert("Date is not in a valid format.")
                                                return false;
                                            }
                                            month = matchArray[1]; // parse date into variables
                                            day = matchArray[3];
                                            year = matchArray[4];
                                            if (month < 1 || month > 12) { // check month range
                                                alert("Month must be between 1 and 12.");
                                                return false;
                                            }
                                            if (day < 1 || day > 31) {
                                                alert("Day must be between 1 and 31.");
                                                return false;
                                            }
                                            if ((month==4 || month==6 || month==9 || month==11) && day==31) {
                                                alert("Month "+month+" doesn't have 31 days!")
                                                return false;
                                            }
                                            if (month == 2) { // check for february 29th
                                                var isleap = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0));
                                                if (day>29 || (day==29 && !isleap)) {
                                                    alert("February " + year + " doesn't have " + day + " days!");
                                                    return false;
                                                }
                                            }
                                            return true;
                                        }

                                        function dispDate(dateObj) {
                                            month = dateObj.getMonth()+1;
                                            month = (month < 10) ? "0" + month : month;

                                            day   = dateObj.getDate();
                                            day = (day < 10) ? "0" + day : day;

                                            year  = dateObj.getYear();
                                            if (year < 2000) year += 1900;

                                            return (month + "/" + day + "/" + year);
                                        }

                                        function pregnancyCalc(pregform) {
                                            menstrual = new Date(); // creates new date objects
                                            ovulation = new Date();
                                            duedate = new Date();
                                            today = new Date();
                                            cycle = 0, luteal = 0; // sets variables to invalid state ==> 0

                                            if (isValidDate(pregform.menstrual.value)) { // Validates menstual date
                                                menstrualinput = new Date(pregform.menstrual.value);
                                                menstrual.setTime(menstrualinput.getTime())
                                            }
                                            else return false; // otherwise exits

                                            cycle = (pregform.cycle.value == "" ? 28 : pregform.cycle.value); // defaults to 28
// validates cycle range, from 22 to 45
                                            if (pregform.cycle.value != "" && (pregform.cycle.value < 22 || pregform.cycle.value > 45)) {
                                                alert("Your cycle length is either too short or too long for \n"
                                                    + "calculations to be very accurate!  We will still try to \n"
                                                    + "complete the calculation with the figure you entered. ");
                                            }

                                            luteal = (pregform.luteal.value == "" ? 14 : pregform.luteal.value); // defaults to 14
// validates luteal range, from 9 to 16
                                            if (pregform.luteal.value != "" && (pregform.luteal.value < 9 || pregform.luteal.value > 16)) {
                                                alert("Your luteal phase length is either too short or too long for \n"
                                                    + "calculations to be very accurate!  We will still try to complete \n"
                                                    + "the calculation with the figure you entered. ");
                                            }

// sets ovulation date to menstrual date + cycle days - luteal days
// the '*86400000' is necessary because date objects track time
// in milliseconds;  86400000 milliseconds equals one day
                                            ovulation.setTime(menstrual.getTime() + (cycle*86400000) - (luteal*86400000));
                                            pregform.conception.value = dispDate(ovulation);

// sets due date to ovulation date plus 266 days
                                            duedate.setTime(ovulation.getTime() + 266*86400000);
                                            pregform.duedate.value = dispDate(duedate);

// sets fetal age to 14 + 266 (pregnancy time) - time left
                                            var fetalage = 14 + 266 - ((duedate - today) / 86400000);
                                            weeks = parseInt(fetalage / 7); // sets weeks to whole number of weeks
                                            days = Math.floor(fetalage % 7); // sets days to the whole number remainder

// fetal age message, automatically includes 's' on week and day if necessary
                                            fetalage = weeks + " week" + (weeks > 1 ? "s" : "") + ", " + days + " days";
                                            pregform.fetalage.value = fetalage;

                                            return false; // form should never submit, returns false
                                        }
                                        //  End -->
                                    </script>
                                    <table width=600 cellpadding=0 cellspacing=10>
                                        <tr>
                                            <td width=468 align=center>



                                            </td>
                                            <td width=120 align=center>

                                            </td>
                                        </tr>
                                    </table>
                                    <BR>
                                    <BR>
                                    <basefont size=3>

                                    <!-- Description --><!--content_start-->
                                    Enter the mother's pregnancy information into this calculator and Hospitali will provide an estimated conception date, birth due date, and an estimated current fetal age.   Great for all those mothers-to-be!
                                    <hr>
                                    </td></tr>
                                    </table>
                                    <!-- Demonstration -->
                                    <center>
                                        <form onSubmit="return pregnancyCalc(this);">
                                            <table>
                                                <tr><td>
<pre>
Last Menstrual Period:        <input type=text name=menstrual value="" size=10 maxlength=10>
                              (MM/DD/YYYY format)

Average Length of Cycles:     <input type=text name=cycle value="" size=3 maxlength=3> (22 to 45)
                              (defaults to 28)

Average Luteal Phase Length:  <input type=text name=luteal value="" size=3 maxlength=3> (9 to 16)
                              (defaults to 14)

<center><input type=submit value="Calculate!"></center>

Estimated Conception:         <input type=text name=conception value="" size=20>
Estimated Due Date:           <input type=text name=duedate value="" size=20>
Estimated Fetal Age:          <input type=text name=fetalage value="" size=20>
</pre>
                                                    </td></tr>
                                            </table>
                                        </form>
                                    </center>

                                    <P>
                                    <P>
                                        <a name="source">

                                            </form>
                                            </FONT>
                                            </CENTER>


                                            </center>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @if (Auth::user()->user_type==2)
                        <div class="form-group">
                            <a href="{{ url('maternal') }}" type="submit" class="btn btn-primary">add record</a>

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