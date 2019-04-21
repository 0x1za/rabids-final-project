<?php
/**
 * Created by PhpStorm.
 * User: mwizasimbeye
 * Date: 21/04/2019
 * Time: 9:30 PM
 */
include_once ('header.php');
?>
<section class="probootstrap-slider flexslider sm-inner">
    <ul class="slides">
        <li style="background-image: url(img/slider_1.jpg);" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="sm-slider-text text-center">
                            <p><img src="img/curve_white.svg" class="seperator sm-animate" alt=""></p>
                            <h1 class="sm-heading sm-animate">Book A Room</h1>
                            <div class="sm-animate sm-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>

<section class="hotel-section">
    <div class="container">
        <div class="row probootstrap-gutter40">
            <div class="col-md-8">
                <h2 class="mt0">Reservation Form</h2>
                <form action="#" method="post" class="probootstrap-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="form-field">
                            <i class="icon icon-mail"></i>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="room">Room</label>
                        <div class="form-field">
                            <i class="icon icon-chevron-down"></i>
                            <select name="room" id="room" class="form-control">
                                <option value="">Select a Room</option>
                                <option value="1">Classic Room</option>
                                <option value="2">Ultra Superior Room</option>
                                <option value="3">Grand Deluxe Room</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date-arrival">Arrival</label>
                                <div class="form-field">
                                    <i class="icon icon-calendar2"></i>
                                    <input type="text" class="form-control" id="date-arrival" name="date-arrival">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date-departure">Departure</label>
                                <div class="form-field">
                                    <i class="icon icon-calendar2"></i>
                                    <input type="text" class="form-control" id="date-departure" name="date-departure">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb30">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="adults">Adults</label>
                                <div class="form-field">
                                    <i class="icon icon-chevron-down"></i>
                                    <select name="adults" id="adults" class="form-control">
                                        <option value="">Number of Adults</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="children">Children</label>
                                <div class="form-field">
                                    <i class="icon icon-chevron-down"></i>
                                    <select name="children" id="children" class="form-control">
                                        <option value="">Number of Children</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4+</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Reserve">
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <h2 class="mt0">Feedback</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="btn btn-primary" role="button">Send Message</a></p>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-half">
    <div class="image" style="background-image: url(img/slider_2.jpg);"></div>
    <div class="text">
        <div class="sm-animate fadeInUp probootstrap-animated">
            <h2 class="mt0">Best 5 Star hotel</h2>
            <p><img src="img/curve_white.svg" class="seperator" alt="></p>
            <div class="row">
                <div class="col-md-6">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
                <div class="col-md-6">
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>
            <p><a href="#" class="link-with-icon white">Learn More <i class=" icon-chevron-right"></i></a></p>
        </div>
    </div>
</section>
<?php
include_once ('footer.php');
?>
