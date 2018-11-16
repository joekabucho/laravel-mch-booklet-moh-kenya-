@extends('MCH.landingmaster')

@section('content')

<!-- notification for small viewports and landscape oriented smartphones -->
<div class="device-notification">
    <a class="device-notification--logo" href="#0">
        <img src="assets/landing/assets/img/logo.png" alt="Global">
        <p>Hospitali</p>
    </a>
    <p class="device-notification--message">Hospitali ehr®  is a Cloud Web Based Electronic Health Records System which enables healthcare facilities run their day to day healthcare provision processes electronically, paperless and with seamless ease.</p>
</div>

<div class="perspective effect-rotate-left">
    <div class="container"><div class="outer-nav--return"></div>
        <div id="viewport" class="l-viewport">
            <div class="l-wrapper">
                <header class="header">
                    <a class="header--logo" href="#0">
                        <img style="height: 50px " src="assets/landing/assets/img/Mother-PNG-Image.png" alt="Welcome">
                        <p>Hospitali ehr®</p>
                    </a>
                    <a href="{{ route('login') }}"><button class="header--cta cta">Login</button></a>
                    <div class="header--nav-toggle">
                        <span></span>
                    </div>
                </header>
                <nav class="l-side-nav">
                    <ul class="side-nav">
                        <li class="is-active"><span>Home</span></li>
                        <li><span>what is hospitali EHR</span></li>
                        <li><span>About us</span></li>

                        <li><span>join the movement</span></li>
                    </ul>
                </nav>
                <ul class="l-main-content main-content">
                    <li class="l-section section section--is-active">
                        <div class="intro">
                            <div class="intro--banner">
                                <h1>Hospitali ehr®</h1>
                                <a href="{{ route('login') }}"><button class="cta"><label style="color: rgba(255,255,255);">login</label>
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                                    <span class="btn-background"></span>
                                    </button></a>
                                <a href="{{ route('register') }}"><button class="cta"><label style="color: rgba(255,255,255);">register</label>
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                                    <span class="btn-background"></span>
                                    </button></a>
                                <img style="height: 450px " src="assets/landing/assets/img/Mother-PNG-Image.png" alt="Welcome">
                            </div>
                            <div class="intro--options">
                                <a href="#0">
                                    <h3>Mission</h3>
                                    <p>To provide the most reliable, efficient & advanced Electronic Health Records System & Hospital  Management System to healthcare institutions and healthcare providers.</p>
                                </a>
                                <a href="#0">
                                    <h3>Vision</h3>
                                    <p>To empower healthcare providers & institutions through cutting edge healthcare software any place ,any time and on any device.</p>
                                </a>
                                <a href="#0">
                                    <h3>Objectives</h3>
                                    <p>Improve overall  output and quality of care .</p>
                                </a>
                                @if (Route::has('login'))

                                        @auth
                                        @else
                                            {{--<a href="{{ url('homee') }}">Home</a>--}}
                                            <a href="{{ route('login') }}">Login</a>
                                            <a href="{{ route('register') }}">Register</a>
                                            @endauth

                                @endif

                            </div>
                        </div>
                    </li>
                    <li class="l-section section">
                        <div class="work">
                            <h2>Selected work</h2>
                            <div class="work--lockup">
                                <ul class="slider">
                                    <li class="slider--item slider--item-left">
                                        <a href="#0">
                                            <div class="slider--item-image">
                                                <img src="assets/landing/assets/img/dna-rna-chromosomes-double-helix-rotating-animated-gif-2.gif" alt="Victory">
                                            </div>
                                            <p class="slider--item-title" style="color: rgba(0,0,0);">Mission</p>
                                            <p class="slider--item-description" style="color: rgba(0,0,0);">To provide the most reliable, efficient & advanced Electronic Health Records System & Hospital  Management System to healthcare institutions and healthcare providers.</p>
                                        </a>
                                    </li>
                                    <li class="slider--item slider--item-center">
                                        <a href="#0">
                                            <div class="slider--item-image">
                                                <img src="assets/landing/assets/img/ad5287768acf9bb1ac643d3e69f79e6d.gif" alt="Metiew and Smith">
                                            </div>
                                            <p class="slider--item-title" style="color: rgba(0,0,0);">Vision</p>
                                            <p class="slider--item-description" style="color: rgba(0,0,0);">To empower healthcare providers & institutions through cutting edge healthcare software any place ,any time and on any device.</p>
                                        </a>
                                    </li>
                                    <li class="slider--item slider--item-right">
                                        <a href="#0">
                                            <div class="slider--item-image">
                                                <img src="assets/landing/assets/img/tumblr_static__640_v2.gif" alt="Alex Nowak">
                                            </div>
                                            <p class="slider--item-title" style="color: rgba(0,0,0);">Objectives</p>
                                            <p class="slider--item-description" style="color: rgba(0,0,0);">Improve overall  output and quality of care .</p>
                                        </a>
                                    </li>
                                </ul>
                                <div class="slider--prev">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                    c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                    c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"/>
                  </g>
                  </svg>
                                </div>
                                <div class="slider--next">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="l-section section">
                        <div class="about">
                            <div class="about--banner">
                                <p>Hospitali ehr®  is a Cloud Web Based Electronic Health Records System which enables healthcare facilities run their day to day healthcare provision processes electronically, paperless and with seamless ease
                                    Hospitali ehr® system captures all the health records and hospital management records, store them for easy retrieval, automated data analysis, reporting, charting and interpretation.
                                    Hospitali ehr® system encompasses a complete HMIS (Hospital Management Information System) with all the necessary modules to run a healthcare facility of any size.
                                    The Hospitali ehr® does not require purchase of expensive hardware, installation, or hiring of staff to manage the system.
                                </p>
                                <a href="#0">Register
                                    <span>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                    </g>
                    </svg>
                  </span>
                                </a>
                                <img src="assets/landing/assets/img/about-visual.png" alt="About Us">
                            </div>
                            <div class="about--options">

                            </div>
                        </div>
                    </li>
                    <li class="l-section section">
                        <div class="hire">
                            <h2>Features</h2>
                            <!-- checkout formspree.io for easy form setup -->
                            <form class="work-request">
                                <div class="work-request--options">
                  <span class="options-a">
                    <input id="opt-1" type="checkbox" value="app design">
                    <label for="opt-1" style="color:rgba(0,0,0);">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Best analytics
                    </label>
                    <input id="opt-2" type="checkbox" value="graphic design">
                    <label for="opt-2" style="color:rgba(0,0,0);">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Good graphics
                    </label>
                    <input id="opt-3" type="checkbox" value="motion design">
                    <label for="opt-3" style="color:rgba(0,0,0);">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Responsive
                    </label>
                  </span>
                                    <span class="options-b">
                    <input id="opt-4" type="checkbox" value="ux design">
                    <label for="opt-4" style="color:rgba(0,0,0);">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Interactive graphs
                    </label>
                    <input id="opt-5" type="checkbox" value="webdesign">
                    <label for="opt-5" style="color:rgba(0,0,0);">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                     Analytics
                    </label>
                    <input id="opt-6" type="checkbox" value="marketing">
                    <label for="opt-6" style="color:rgba(0,0,0);">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                     Realtime updates
                    </label>
                  </span>
                                </div>


                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="outer-nav">
        <li class="is-active">Home</li>
        <li>what is hospitali EHR</li>
        <li>About us</li>

        <li>join the movement</li>
    </ul>
</div>

@endsection
