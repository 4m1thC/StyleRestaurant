@extends('layouts.app')

@section('content')
    <div class="cotainer">
        <div class="all-page-title page-breadcrumb">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Contactos</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Contact -->
        <div class="contact-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-title text-center">
                            <h2>Contact</h2>
                            <p style="color: white">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email" id="email" class="form-control"
                                            name="name" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="custom-select d-block form-control" id="guest" required
                                            data-error="Please Select Person">
                                            <option disabled selected>Please Select Person*</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message"
                                            required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn btn-outline-light" id="submit" type="submit">Send
                                            Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact -->


        <!-- Start Contact info -->
        <div class="contact-imfo-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 arrow-right">
                        <i class="fa fa-volume-control-phone">
                            <img src="img/phone.png" height="45px" width="45px" alt="">
                        </i>
                        <div class="overflow-hidden">
                            <h4>Phone</h4>
                            <p class="lead">
                                +01 123-456-4590
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 arrow-right">
                        <i class="fa fa-envelope">
                            <img src="img/email.png" height="45px" width="45px" alt="">
                        </i>
                        <div class="overflow-hidden">
                            <h4>Email</h4>
                            <p class="lead">
                                yourmail@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-map-marker">
                            <img src="img/location.png" height="45px" width="45px" alt="">
                        </i>
                        <div class="overflow-hidden">
                            <h4>Location</h4>
                            <p class="lead">
                                800, Lorem Street, US
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact info -->
        <footer class="footer-area bg-f">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <h3>About Us</h3>
                        <p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper
                            magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui.</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3>Subscribe</h3>
                        <div class="subscribe_form">
                            <form class="subscribe_form">
                                <input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..."
                                    type="email">
                                <button type="submit" class="submit">SUBSCRIBE</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                        <ul class="list-inline f-social">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"
                                        aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3>Contact information</h3>
                        <p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
                        <p class="lead"><a href="#">+01 2000 800 9999</a></p>
                        <p><a href="#"> info@admin.com</a></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3>Opening hours</h3>
                        <p><span class="text-color">Monday: </span>Closed</p>
                        <p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
                        <p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
                        <p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Live Dinner
                                    Restaurant</a>
                                Design By :
                                <a href="https://html.design/">html design</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </div>
@endsection
