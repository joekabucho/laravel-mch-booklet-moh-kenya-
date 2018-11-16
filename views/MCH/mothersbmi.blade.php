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
                            <div class="card-header" data-background-color="black">

                            </div>


                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        PUBLIC HEALTH
                                    </H3>
                                </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        weight chart
                                    </H3>
                                </div>
                                <table class="table-responsive">
                                    <thead>
                                    <tr>
                                        <th>BMI INDEX CALCULATOR</th>
                                    </tr>
                                    </thead>
                                    <tbody>




                                    </tr>
                                    <tr>
                                        <td>  <p>Enter your height: <input type="float" id="height" name="height"/>

                                                <select type="multiple" id="heightunits">

                                                    <option value="metres" selected="selected">metres</option>

                                                    <option value="inches">inches</option>

                                                    <option value="cm">cm</option>

                                                </select>

                                            </p></td>
                                        <td> <p>Enter your weight: <input type="float" id="weight" name="weight"/>

                                                <select type="multiple" id="weightunits">

                                                    <option value="kg" selected="selected">kilograms</option>

                                                    <option value="lb">pounds</option>

                                                </select>

                                            </p></td>


                                        </body>

                                    </tr>

                                    </tbody>
                                </table>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" value="computeBMI" onclick="computeBMI();">Compute</button>
                                </div>



                                <strong>Status:<span id="output"></span></strong><br>





                           <strong>This means you are: <span id="comment"></span> </strong>
                            </div>
                            <script type="text/javascript">

                                function computeBMI()

                                {

                                    //Obtain user inputs

                                    var height=Number(document.getElementById("height").value);

                                    var heightunits=document.getElementById("heightunits").value;

                                    var weight=Number(document.getElementById("weight").value);

                                    var weightunits=document.getElementById("weightunits").value;









                                    //Convert all units to metric

                                    if (heightunits=="inches") height/=39.3700787;

                                    if (weightunits=="lb") weight/=2.20462;

                                    if (heightunits=="cm") height/=100;





                                    //Perform calculation

                                    var BMI=weight/Math.pow(height,2);





                                    //Display result of calculation

                                    document.getElementById("output").innerText=Math.round(BMI*100)/100;





                                    var output =  Math.round(BMI*100)/100

                                    if (output<18.5)

                                        document.getElementById("comment").innerText = "Underweight";

                                    else   if (output>=18.5 && output<=25)

                                        document.getElementById("comment").innerText = "Normal";

                                    else   if (output>=25 && output<=30)

                                        document.getElementById("comment").innerText = "Obese";

                                    else   if (output>30)

                                        document.getElementById("comment").innerText = "Overweight";

                                    // document.getElementById("answer").value = output;

                                }

                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <br>




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