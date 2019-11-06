@include('user.inc.headersource')
<!--=============================responsive menu bar start here======================================-->
@include('user.inc.responsive-menubar')
<!--=============================responsive menu bar end here======================================-->
@include('user.inc.menubar')
<!--============================================Menu Bar end here================================================-->

<!--Modal start Here-->
@include('user.inc.modal')
<!--Modal End Here-->


        <div style="width:80%;margin: 0 auto;">
            <div class="col-sm-12">
                <img style="width:100%;max-height: 200px;" src="{{asset('public/User')}}/img/privacy-policy.png"/>
            </div>
            <div class="privacy-policy-details">
                <p style="font-size:22px;color:rgb(245, 114, 36);text-transform: uppercase;margin-top: 10px;">The privacy policy term of <span>runtimeterror.com</span> is to –</p>

                <p>Assure you about the information you share with us, for various purposes, how we collect them and what types of information they are so that you be informed about the security of your valuable personal details shared with us.</p>

                <p style="background-color: rgb(245, 114, 36);padding: 5px;width:85%;font-size: 22px;font-weight: bold;text-transform: uppercase"><span>runtimeterror.com</span> may collect information about valuable clients from,</p>
                <ul style="list-style: none;">
                    <li>Our website</li>
                    <li>The email you send us</li>
                    <li>We communicate via social media</li>
                    <li>From direct call</li>
                    <li>Through direct registration, event or workshop</li>
                </ul>

                <p style="background-color: rgb(245, 114, 36);font-size: 22px;padding: 5px;width:75%;font-weight: bold;text-transform: uppercase">We keep your data,</p>
                <ul style="list-style: none;">
                    <li>Name, age, address, phone number</li>
                    <li>Demographic information</li>
                    <li>Date and time of visiting our site</li>
                    <li>Your interest regarding our provided services</li>
                    <li>Through direct registration, event or workshop</li>
                </ul>

            </div><!-- #End Privacy Policy Details -->
        </div>


@include('user.inc.live chat box')

        <!-- ========================================== Footer Bar Bellow Here================================================= -->
@include('user.inc.footer')