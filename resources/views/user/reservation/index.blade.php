@extends('user.user_main')
@section('content')
    <div id="wrapper">
        <div class="content">
            <!--=============== parallax section  ===============-->
            <section class="parallax-section header-section">
                <div class="bg bg-parallax" style="background-image:url({{ asset('frontend/images/bg/1.jpg)') }}"
                    data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                <div class="overlay"></div>
                <div class="container">
                    <h2>Make online reservation</h2>
                    <h3>Booking a table online is easy</h3>
                </div>
            </section>
            <!--section end-->
            <!--=============== reservation ===============-->
            <section>
                <div class="triangle-decor"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h4>Reervation info</h4>
                                <div class="separator color-separator"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="inner">
                                        <p> Numerous commentators have also referred to the supposed restaurant owner's
                                            eccentric habit of touting for custom outside his establishment, dressed in
                                            aristocratic fashion and brandishing a sword</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bold-separator">
                                <span></span>
                            </div>
                            <div class="reservation-form-holder">
                                <div class="reservation-form">
                                    <div id="message"></div>
                                    <form method="post" action="php/reservation.php" name="reservationform"
                                        id="reservation-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Book a table</h3>
                                                <!--date-->
                                                <input name="resdate" class="myInput" id="resdate" data-lang="en"
                                                    data-years="2015-2016" data-format="YYYY-MM-DD" data-sundayfirst="false"
                                                    value="Date" onClick="this.select()">
                                                <!--time-->
                                                <select id="restime" class="form-control">
                                                    <option value="5:00am">5:00 am</option>
                                                    <option value="5:30am">5:30 am</option>
                                                    <option value="6:00am">6:00 am</option>
                                                    <option value="6:30am">6:30 am</option>
                                                    <option selected="selected" value="7:00am">7:00 am</option>
                                                    <option value="7:30am">7:30 am</option>
                                                    <option value="8:00am">8:00 am</option>
                                                    <option value="8:30am">8:30 am</option>
                                                    <option value="9:00am">9:00 am</option>
                                                    <option value="9:30am">9:30 am</option>
                                                    <option value="10:00am">10:00 am</option>
                                                    <option value="10:30am">10:30 am</option>
                                                    <option value="11:00am">11:00 am</option>
                                                    <option value="11:30am">11:30 am</option>
                                                    <option value="12:00pm">12:00 pm</option>
                                                    <option value="12:30pm">12:30 pm</option>
                                                    <option value="1:00pm">1:00 pm</option>
                                                    <option value="1:30pm">1:30 pm</option>
                                                    <option value="2:00pm">2:00 pm</option>
                                                    <option value="2:30pm">2:30 pm</option>
                                                    <option value="3:00pm">3:00 pm</option>
                                                    <option value="3:30pm">3:30 pm</option>
                                                    <option value="4:00pm">4:00 pm</option>
                                                    <option value="4:30pm">4:30 pm</option>
                                                    <option value="5:00pm">5:00 pm</option>
                                                    <option value="5:30pm">5:30 pm</option>
                                                    <option value="6:00pm">6:00 pm</option>
                                                    <option value="6:30pm">6:30 pm</option>
                                                    <option value="7:00pm">7:00 pm</option>
                                                    <option value="7:30pm">7:30 pm</option>
                                                    <option value="8:00pm">8:00 pm</option>
                                                    <option value="8:30pm">8:30 pm</option>
                                                    <option value="9:00pm">9:00 pm</option>
                                                    <option value="9:30pm">9:30 pm</option>
                                                    <option value="10:00pm">10:00 pm</option>
                                                    <option value="10:30pm">10:30 pm</option>
                                                    <option value="11:00pm">11:00 pm</option>
                                                    <option value="11:30pm">11:30 pm</option>
                                                </select>
                                                <!--restaurant-->
                                                <select class="form-control" id="resrest" onClick="this.select()">
                                                    <option value="Lambert - New York City">Lambert - New York City</option>
                                                    <option value="Lambert - Washington">Lambert - Washington</option>
                                                    <option value="Lambert - Florida ">Lambert - Florida</option>
                                                </select>
                                                <!--person-->
                                                <select id="numperson" class="form-control" onClick="this.select()">
                                                    <option value="1">1 Person</option>
                                                    <option value="2">2 People</option>
                                                    <option value="3">3 People</option>
                                                    <option value="4">4 People</option>
                                                    <option value="5">5 People</option>
                                                    <option value="6">6 People</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Contact Details</h3>
                                                <!--name-->
                                                <input name="name" type="text" id="name" onClick="this.select()"
                                                    value="Name">
                                                <!--mail-->
                                                <input name="email" type="text" id="email"
                                                    onClick="this.select()" value="E-mail">
                                                <!--phone-->
                                                <input name="phone" type="text" id="phone"
                                                    onClick="this.select()" value="Phone">
                                                <!--message-->
                                                <textarea name="comments" id="comments" onClick="this.select()">Message</textarea>
                                            </div>
                                        </div>
                                        <button type="submit" id="submit-res">Make a reservation</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--section end-->
            <!--=============== Opening Hours ===============-->
            <section class="parallax-section" id="sec2">
                <div class="media-container video-parallax" data-top-bottom="transform: translateY(300px);"
                    data-bottom-top="transform: translateY(-300px);">
                    <div class="bg mob-bg" style="background-image: url(images/bg/1.jpg)"></div>
                    <div class="video-container">
                        <video autoplay loop muted class="bgvid">
                            <source src="{{ asset('frontend/video/1.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="overlay"></div>
                <div class="container">
                    <h2>Opening Hours</h2>
                    <h3>Call For Reservations</h3>
                    <div class="bold-separator">
                        <span></span>
                    </div>
                    <div class="work-time">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Sunday to Tuesday</h3>
                                <div class="hours">
                                    09:00<br>
                                    22:00
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Friday to Saturday</h3>
                                <div class="hours">
                                    11:00<br>
                                    19:00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="big-number"><a href="#">+7(111)123456789</a></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
