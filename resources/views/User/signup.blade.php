@include('user.inc.headersource')
<!--=============================responsive menu bar start here======================================-->
@include('user.inc.responsive-menubar')
<!--=============================responsive menu bar end here======================================-->
@include('user.inc.menubar')
<!--============================================Menu Bar end here================================================-->
<!--Modal start Here-->
@include('user.inc.modal')
<!--Modal End Here-->



        <div class="" style="width:80%;margin: 0 auto;">
            <div id="container" class="container">
                <div class="login-title">
                    <h3 style="text-align: center;padding:5px;color:#f57224">Welcome to Runtime Terror! Please Register Here.</h3>
                </div>
                <div>
                    <form>
                        <div style="background-color: #E9EAEB;padding:15px;">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="email">Name:</label>
                                    <input placeholder="Enter your name" style="border:1px solid #f57224" type="email" class="form-control" id="email">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="email">Mobile</label>
                                    <input placeholder="Enter your mobile" style="border:1px solid #f57224" type="email" class="form-control" id="email">
                                </div>
                                
                                <div class="form-group col-sm-6">
                                    <label for="email">Email</label>
                                    <input placeholder="Enter your email" style="border:1px solid #f57224" type="email" class="form-control" id="email">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="email">Password</label>
                                    <input placeholder="Enter your password" style="border:1px solid #f57224" type="email" class="form-control" id="email">
                                </div>
                                
                                <div class="form-group col-sm-6">
                                    <label for="email">Retype Password</label>
                                    <input placeholder="Enter your password again" style="border:1px solid #f57224" type="email" class="form-control" id="email">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="email">Delivery Phone</label>
                                    <input placeholder="Enter Delivery phone" style="border:1px solid #f57224" type="email" class="form-control" id="email">
                                </div>
                                
                                <div class="form-group col-sm-12">
                                    <label for="email">Delivery Address</label>
                                    <textarea style="border:1px solid #f57224" placeholder="Enter your delivary address" class="form-control" id="email"></textarea>
                                </div>
                                
                                <div class="form-group col-sm-4">
                                    <input style="background-color: #f57224;font-weight: bold" placeholder="Enter Delivery phone" value="Register" type="submit" class="form-control btn" >
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>


@include('user.inc.live chat box')

        <!-- ========================================== Footer Bar Bellow Here================================================= -->
@include('user.inc.footer')