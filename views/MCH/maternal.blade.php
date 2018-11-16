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
                    <a href="{{ url('home') }}">
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
                        <p>previous pregnancies</p>
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
                                        <H3 class="mt-20 ">

                                        </H3>
                                    </div>
                                    <form action="{{route('maternal_post')}}" method="POST" >{!! csrf_field() !!}
                                    <table class="table table-bordered">
                                        <div class="col-m-3 offset-md-2">
                                            <H3 class="mt-20 ">
                                                MATERNAL PROFILE
                                            </H3>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">NAME OF INSTITUTION:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="name_of_institution" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">NAME OF CLIENT:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="name_of_client" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">DATE OF BIRTH:</label>
                                                <div class="col-sm-6">
                                                    <input type="date" name="date_of_birth" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">GRAVIDA:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="gravida" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">PARITY:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="parity" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">HEIGHT:</label>
                                                <div class="col-sm-6">
                                                    <input type="number" name="height" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">L.M.P:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="lmp" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">EDD:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="edd" name=duedate class="form-control" placeholder="">
                                                </div>
                                            </div>



                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">MARITAL STATUS:</label>
                                                <div class="col-sm-6">
                                                    <select name="marital_status" align="center">
                                                        <option value="">-select-</option>
                                                        <option value="single">Single</option>
                                                        <option value="married">Married</option>
                                                        <option value="widowed">Widowed</option>
                                                        <option value="divorced">Divorced</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                                <div class="col-sm-6">
                                            <br><br>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">EDUCATION:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="education" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">ADDRESS:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="address" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">TELEPHONE:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="telephone" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">OCCUPATION:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="occupation" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">NEXT OF KIN:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="next_of_kin" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="staticEmail" class="col-sm-3 col-form-label">NEXT OF KIN ADDRESS:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="next_of_kin_address" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                                </div>
                                        </div>
                                    </table>
                                    </form>
                                    @if (Auth::user()->user_type==2)
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
                                                <table class="card-content table-responsive">
                                                    <tr><td>
<pre>
Last Menstrual Period:        <input type=text name=menstrual value="" size=10 maxlength=10>
                              (MM/DD/YYYY format)

Average Length of Cycles:     <input type='number' name=cycle value="" size=3 maxlength=3> (22 to 45)
                              (defaults to 28)

Average Luteal Phase Length:  <input type='number' name=luteal value="" size=3 maxlength=3> (9 to 16)
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
                </div>
            </div>

        </div>





@endsection