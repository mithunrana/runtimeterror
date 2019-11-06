@include('user.inc.headersource')
<!--=============================responsive menu bar start here======================================-->
@include('user.inc.responsive-menubar')
<!--=============================responsive menu bar end here======================================-->
@include('user.inc.menubar')
<!--============================================Menu Bar end here================================================-->
<!--Modal start Here-->
@include('user.inc.modal')
<!--Modal End Here-->

        <div  style="width:80%;margin:0 auto;margin-top: 15px;margin-bottom: 15px;">
            <div class="row">
                <div class="col-sm-4">
                    <div style="border:1px solid #f57224;">
                        <img style="width:70px;height:60px;margin-left: auto;margin-right: auto;display:block;" src="{{asset('public/User')}}/img/location.png">
                        <p style="color:blue;text-align: center;font-size:22px;padding: 0px 10px;">
                            <a style="font-size: 18px;text-decoration: none;" href="#">I want to know where my order is</a>
                        </p>
                        <p style="padding:5px 10px;text-align: center;">Get status updates about your order with our Tracking Tool</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div style="border:1px solid #f57224;">
                        <img style="width:70px;height:60px;margin-left: auto;margin-right: auto;display:block;" src="{{asset('public/User')}}/img/return.png">
                        <p style="color:blue;text-align: center;font-size:22px;padding: 0px 10px;">
                            <a style="font-size: 18px;text-decoration: none;" href="#">How can i retun my order</a>
                        </p>
                        <p style="padding:5px 10px;text-align: center;">How can i retun my order</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div style="border:1px solid #f57224;">
                        <img style="width:70px;height:60px;margin-left: auto;margin-right: auto;display:block;" src="{{asset('public/User')}}/img/cancel.png">
                        <p style="color:blue;text-align: center;font-size:22px;padding: 0px 10px;">
                            <a style="font-size: 18px;text-decoration: none;" href="#">how to cancel my order</a>
                        </p>
                        <p style="padding:5px 10px;text-align: center;">how to cancel my order</p>
                    </div>
                </div>
            </div>
        </div>


        <div style="width:80%;margin: 0 auto;">
            <div style="background-color:white;" class="contact-form"> 
                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                    <!--======================== Contact Information Start Here====================================================-->
                    <div style="background-color:#f57224;color:white;" class="col-md-3 col-sm-4 col-xs-12">
                        <h5 style="font-weight: bold;border-bottom:2px solid white;">Run Time Terror</h5>
                        <ul style="list-style: none;">
                            <li style="display: block;margin-bottom: 8px;position: relative;">
                                <div class="icon"><p><i class="fa fa-bank"></i> Ga-92 Gulshan Dhaka 1212</p></div>
                            </li>
                            <li><p><i style="font-size: 22px;" class="fa fa-mobile" aria-hidden="true"></i> +8801516733436</p></li>
                            <li><p><i class="fa fa-envelope"></i> contact@techhelpinfo.com</p></li>
                            <li><p><i class="fa fa-envelope"></i> Info@techhelpinfo.com</p></li>
                        </ul>
                        <h4 style="padding:5px;">Headquarters</h4>
                        <ul style="list-style: none;">
                            <li>
                                <p><i class="fa fa-bank"></i> Ga-92 Gulshan Badda Link Rd, Dhaka 1212</p>
                            </li>
                            <li><p><i style="font-size: 22px;" class="fa fa-mobile" aria-hidden="true"></i> +8801836375309</p></li>
                            <li><p><i class="fa fa-envelope"></i> contact@techhelpinfo.com</p></li>
                            <li><p><i class="fa fa-envelope"></i> Info@techhelpinfo.com</p></li>
                        </ul>
                    </div>
                    <!--======================== Contact Information End Here====================================================-->

                    <!--======================== Contact Form Start Here=========================================================-->
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12"> 
                            <h3 style="color:#d71920">Contact us for your Inquiry</h3>
                        </div>
                        <div class="clearfix"></div>
                        <form method="POST" action="" accept-charset="UTF-8" class="">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label " for="name">Your Name</label>
                                    <input id="name" name="name" class="form-control" value="" type="text" style="margin-bottom:6px">
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label " for="company_name">Company Name</label>
                                    <input id="company_name" name="companyname" class="form-control" value="" type="text" style="margin-bottom:6px">
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label " for="phone_no">Phone No.</label>
                                    <input id="phone_no" name="phone_no" class="form-control" value="" type="text" style="margin-bottom:6px">
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <label class="control-label " for="email">Email Address</label>
                                    <input id="email" name="email" class="form-control" value="" type="text" style="margin-bottom:6px">
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 textarea-block">
                                    <label class="control-label " for="message">Message/Query</label>
                                    <textarea id="message" name="message" class="form-control" rows="4"  style="margin-bottom:6px" placeholder="Describe yourself here..." autofocus></textarea>
                                </div>

                                <div id="submit-wrapper" class="col-md-12 col-sm-12 col-xs-12 textarea-block" style="margin-bottom: 5px;">
                                    <button type="submit" data-attach-loading="" class="btn btn-md btn-success" style="width:100px;text-align: center;">Send</button>
                                </div>
                            </div>
                        </form>		
                    </div>
                    <!--======================== Contact Form End Here====================================================-->
                </div>
            </div>
        </div>

        <div class="" style="width:80%;margin:10px auto;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7304.652041748362!2d90.38255367503554!3d23.735750788386362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d23.730648799999997!2d90.38542079999999!4m5!1s0x3755b94a82a07ea7%3A0x80bf93eb92ce2d64!2stech%20help%20info!3m2!1d23.738995199999998!2d90.3872037!5e0!3m2!1sen!2sbd!4v1572888078837!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

@include('user.inc.live chat box')
 <!-- ========================================== Footer Bar Bellow Here================================================= -->
@include('user.inc.footer')