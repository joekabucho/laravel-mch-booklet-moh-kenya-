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
                                    <div class="col-m-3 offset-md-2">
                                        <H3 class="mt-20 ">
                                            surgical
                                        </H3>
                                    </div>
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>SURGICAL OPERATION</th>
                                            <th>BLOOD TRANSFUSION</th>
                                            <th>FAMILY HISTORY</th>
                                            <th>TWINS</th>
                                            <th>TUBERCULOSIS</th>
                                            <th>DIABETES</th>
                                            <th>HYPERTENSION</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($surgicalreport_results as $surgicalreport_result)
                                            <tr>
                                                <td>{{ $surgicalreport_result->surgicaloperation }}</td>
                                                <td>{{ $surgicalreport_result->bloodtransfusion }}</td>
                                                <td>{{ $surgicalreport_result->familyhistory }}</td>
                                                <td>{{ $surgicalreport_result->twins }}</td>
                                                <td>{{ $surgicalreport_result->tuberculosis }}</td>
                                                <td>{{ $surgicalreport_result->diabetes }}</td>
                                                <td>{{ $surgicalreport_result->hypertension}}</td>

                                            </tr>
                                        @endforeach


                                        </tbody>

                                    </table>
                                </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        previous pregnancy
                                    </H3>
                                </div>
                                    <div class="card-content table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>pregnancy order</th>
                                            <th> year</th>
                                            <th>place of delivery</th>
                                            <th>maturity </th>
                                            <th>duration of labour</th>
                                            <th>type of delivery</th>
                                            <th>weight</th>\
                                            <th> sex</th>
                                            <th>outcome</th>
                                            <th>perpetium</th>


                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach( $previousreport_results as  $previousreport_result)
                                            <tr>
                                                <td>{{  $previousreport_result->pregnancyorder}}</td>
                                                <td>{{  $previousreport_result-> year}}</td>
                                                <td>{{  $previousreport_result->placeofdelivery}}</td>
                                                <td>{{  $previousreport_result->maturity}}</td>
                                                <td>{{  $previousreport_result->durationoflabour}}</td>
                                                <td>{{  $previousreport_result->typeofdelivery}}</td>
                                                <td>{{  $previousreport_result->weight}}</td>
                                                <td>{{  $previousreport_result-> sex}}</td>
                                                <td>{{  $previousreport_result->outcome}}</td>
                                                <td>{{  $previousreport_result->perpetium}}</td>



                                            </tr>

                                        @endforeach


                                        </tbody>

                                    </table>
                                    </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        Physical examination
                                    </H3>
                                </div>
                                    <div class="card-content table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>GENERAL</th>
                                            <th>CVS:</th>
                                            <th>RESPIRATION:</th>
                                            <th>BREASTS: </th>
                                            <th>ABDOMEN:</th>
                                            <th>VAGINAL EXAMINATION:</th>
                                            <th>DISCHARGE/DUD: </th>

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


                                                @endforeach
                                            </tr>

                                        </tbody>

                                    </table>
                                    </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        maternal report
                                    </H3>
                                </div>
                                    <div class="card-content table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
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


                                            </tr>

                                        @endforeach




                                        </tbody>

                                    </table>
                                    </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        create child
                                    </H3>
                                </div>
                                        <div class="card-content table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
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
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        child health card
                                    </H3>
                                </div>
                                    <div class="card-content table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
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

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        PMTCT
                                    </H3>
                                </div>
                                    <div class="card-content table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Hospital<br> Name</th>
                                            <th>Admission<br>Number</th>
                                            <th>Date of<br>Admission</th>
                                            <th>Date of<br>Discharge</th>
                                            <th>Discharge Diagnosis</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach( $childhealthcard6_results as  $childhealthcard6_results)
                                            <tr>
                                                <td>{{  $childhealthcard6_results-> hospitalname}}</td>
                                                <td>{{  $childhealthcard6_results-> admissionnumber}}</td>
                                                <td>{{  $childhealthcard6_results-> dateofadmission}}</td>
                                                <td>{{  $childhealthcard6_results-> dateofdischarge}}</td>
                                                <td>{{  $childhealthcard6_results-> dischargediagnosis}}</td>

                                            </tr>

                                        @endforeach


                                        </tbody>

                                    </table>
                                    </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        HEALTH WORKER CONSULTANTS
                                    </H3>
                                </div>
                                        <div class="card-content table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>DATE</th>
                                            <th> Clinical Notes,Diagnosis & Treatment(and signature)<br>(use key words,2 to 8 lines per visit)</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach( $childhealthcard5_results as  $childhealthcard5_results)
                                            <tr>
                                                <td>{{  $childhealthcard5_results-> date}}</td>
                                                <td>{{  $childhealthcard5_results->clinicalnotes }}</td>


                                            </tr>

                                        @endforeach


                                        </tbody>

                                    </table>
                                        </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                      ID OF EXPOSED CHILDREN
                                    </H3>
                                </div>
                                            <div class="card-content table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>mother </th>
                                            <th>antibody</th>
                                            <th>pcr </th>
                                            <th>mother 1</th>
                                            <th>antibody 1</th>
                                            <th> pcr 1</th>
                                            <th> mother 2</th>
                                            <th>antibody 2</th>
                                            <th> pcr 2</th>

                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach( $childhealthcard4_results as  $childhealthcard4_results)
                                            <tr>
                                                <td>{{  $childhealthcard4_results-> mother}}</td>
                                                <td>{{  $childhealthcard4_results->antibody }}</td>
                                                <td>{{  $childhealthcard4_results-> pcr }}</td>
                                                <td>{{  $childhealthcard4_results-> mother1 }}</td>
                                                <td>{{  $childhealthcard4_results-> antibody1 }}</td>
                                                <td>{{  $childhealthcard4_results-> pcr1 }}</td>
                                                <td>{{  $childhealthcard4_results-> mother2 }}</td>
                                                <td>{{  $childhealthcard4_results->antibody2 }}</td>
                                                <td>{{  $childhealthcard4_results-> pcr2}}</td>


                                            </tr>
                                        @endforeach


                                        </tbody>

                                    </table>
                                            </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                       DEVELOPMENTAL MILESTONES
                                    </H3>
                                </div>
                                    <div class="card-content table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th> Social Smile</th>
                                            <th> Head Holding/Control</th>
                                            <th>Turns towards the origin of sound</th>
                                            <th>Extend hand to grasp a toy</th>
                                            <th>Sitting</th>
                                            <th> Standing</th>
                                            <th> Walking</th>
                                            <th> Talking </th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach( $childhealthcard3_results as  $childhealthcard3_results)
                                            <tr>
                                                <td>{{  $childhealthcard3_results->  social}}</td>
                                                <td>{{  $childhealthcard3_results-> head}}</td>
                                                <td>{{  $childhealthcard3_results-> turn}}</td>
                                                <td>{{  $childhealthcard3_results-> extend}}</td>
                                                <td>{{  $childhealthcard3_results-> sitting}}</td>
                                                <td>{{  $childhealthcard3_results->standing}}</td>
                                                <td>{{  $childhealthcard3_results->walking}}</td>
                                                <td>{{  $childhealthcard3_results->talking}}</td>


                                            </tr>

                                        @endforeach


                                        </tbody>

                                    </table>
                                    </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        VITAMIN A
                                    </H3>
                                </div>
                                    <div class="card-content table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>at 6 months</th>
                                            <th>at 6 months</th>
                                            <th>at 12 months(1 Year)</th>
                                            <th>at 12 months(1 Year)</th>
                                            <th>at 18 months(1 1/2 Years)</th>
                                            <th>at 18 months(1 1/2 Years)</th>
                                            <th>at 24 months(2 Years)</th>
                                            <th>at 24 months(2 Years)</th>
                                            <th>at 30 months(2 1/2 Years</th>
                                            <th>at 30 months(2 1/2 Years</th>
                                            <th>at 36 months(3 Years)</th>
                                            <th>at 36 months(3 Years)</th>
                                            <th>at 42 months(3 1/2 Years)</th>
                                            <th>at 42 months(3 1/2 Years)</th>
                                            <th>at 48 months(4 Years)</th>
                                            <th>at 48 months(4 Years)</th>
                                            <th>at 54 months(4 1/2 Years)</th>
                                            <th>at 54 months(4 1/2 Years)</th>
                                            <th>at 60 months(5 Years)</th>
                                            <th>at 60 months(5 Years)</th>
                                            <th>VACCINE</th>
                                            <th>DATE GIVEN</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach( $childhealthcard2_results as  $childhealthcard2_results)
                                            <tr>
                                                <td>{{  $childhealthcard2_results->check6}}</td>
                                                <td>{{  $childhealthcard2_results->date6}}</td>
                                                <td>{{  $childhealthcard2_results->check12}}</td>
                                                <td>{{  $childhealthcard2_results->date12}}</td>
                                                <td>{{  $childhealthcard2_results->check18}}</td>
                                                <td>{{  $childhealthcard2_results->date18}}</td>
                                                <td>{{  $childhealthcard2_results->check24}}</td>
                                                <td>{{  $childhealthcard2_results->date24}}</td>
                                                <td>{{  $childhealthcard2_results->check30 }}</td>
                                                <td>{{  $childhealthcard2_results->date30}}</td>
                                                <td>{{  $childhealthcard2_results->check36}}</td>
                                                <td>{{  $childhealthcard2_results->date36}}</td>
                                                <td>{{  $childhealthcard2_results->check42}}</td>
                                                <td>{{  $childhealthcard2_results->date42 }}</td>
                                                <td>{{  $childhealthcard2_results->check48}}</td>
                                                <td>{{  $childhealthcard2_results->date48}}</td>
                                                <td>{{  $childhealthcard2_results->check54 }}</td>
                                                <td>{{  $childhealthcard2_results->date54 }}</td>
                                                <td>{{  $childhealthcard2_results->check60 }}</td>
                                                <td>{{  $childhealthcard2_results->date60}}</td>
                                                <td>{{  $childhealthcard2_results-> vaccine}}</td>
                                                <td>{{  $childhealthcard2_results-> date_given}}</td>

                                            </tr>

                                        @endforeach




                                        </tbody>

                                    </table>
                                    </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        IMMUNIZATION CARD
                                    </H3>
                                </div>
                                    <div class="card-content table-responsive">

                                    <table id="" class="table table-striped table-bordered" style="width:100%">
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

                                            </tr>
                                        @endforeach




                                        </tbody>

                                    </table>
                                    </div>
                                </div>
                            </div>
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


@endsection