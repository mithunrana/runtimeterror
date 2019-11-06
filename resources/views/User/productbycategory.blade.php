@include('user.inc.headersource')
<!--=============================responsive menu bar start here======================================-->
@include('user.inc.responsive-menubar')
<!--=============================responsive menu bar end here======================================-->
@include('user.inc.menubar')
<!--============================================Menu Bar end here================================================-->


<!--Modal start Here-->
@include('user.inc.modal')
<!--Modal End Here-->

<div style="padding-right:0px;padding-left:0px;width:80%;margin: 0 auto;margin-top: 20px;">
    <img  style="width:100%;" src="{{asset('public/User')}}/img/pureit.jpg">

    <div class="row" style="margin-left: 0px;margin-right: 0px;">
        <h2 style="color:#ff5a00;padding:0px 0px 5px;font-size: 22px;line-height: 30px;text-transform: uppercase;">BEST SELLING JUALIARY PRODUCT</h2>
    </div>
    <hr>

    <div class="row" style="margin-bottom: 10px;">
        <div class="col-sm-12">
            <h1 style="font-size: 18px;color:#737373">Water Dispensers, Purifiers &amp; Filters</h1>
            <div class="row">
                <div class="col-sm-7">
                    <p>174 items found in Water Dispensers, Purifiers & Filters</p>
                </div>
                <div class="col-sm-5">
                    <select style="width: 60%;height: 40px;border-radius: 5px;" class="pull-right">
                        <option disabled>SORTED PRODUCT</option>
                        <option>Sort by Popularity</option>
                        <option>Sort by low price</option>
                        <option>Sort by high price</option>
                    </select>
                </div>
            </div>

        </div>
    </div>

    <div class="row" style="margin-bottom: 10px;">
        <div class="col-sm-3">
            <select style="width:100%;height: 40px;border-radius: 5px;" class="pull-right">
                <option disabled selected="">SORTED BY BRAND</option>
                <option>KENT</option>
                <option>KEKO</option>
                <option>PUREIT</option>
                <option>KING</option>
            </select>
        </div>
        <div class="col-sm-3">
            <select style="width:100%;height: 40px;border-radius: 5px;" class="pull-right">
                <option disabled selected="">SORTED BY Service</option>
                <option>Installment</option>
                <option>Cash on delivay</option>
                <option>Free shipping</option>
            </select>
        </div>
        <div class="col-sm-3">
            <select style="width:100%;height: 40px;border-radius: 5px;" class="pull-right">
                <option disabled selected="">SORTED BY Location</option>
                <option>Bangladesh</option>
                <option>India</option>
                <option>China</option>
            </select>
        </div>
        <div class="col-sm-3">
            <form class="form-inline pull-right" action="">
                <div class="form-group">
                    <input style="max-width:100px;" placeholder="Min"  min="10" type="number" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <input style="max-width:100px;" placeholder="Max" min="10" type="number" class="form-control" id="pwd">
                </div>
                <button style="background-color:#ff5a00" type="submit" class="btn btn-default"><i class="fa fa-angle-right"></i></button>
            </form>
        </div>
    </div>
</div>

<div style="margin-top:30px;margin-bottom:20px;width:80%;margin: 0 auto;">
    <div class="row" style="border-top: 2px solid #ff5a00;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12);margin-left: 0px;margin-left: 0px;">
        <div class="col-sm-12">
            <div class="row">
                <div style="padding: 0px;" class="col-sm-2 col-xs-12">
                    <h3 style="background-color:#ff5a00;padding:7px;">জেন্টস হুডি</h3>
                    <ul style="list-style: none;">
                        <li style="padding:0px 5px;">লেডিজ হুডি</li>
                        <li style="padding:0px 5px;">লেডিজ হুডি</li>
                        <li style="padding:0px 5px;">লেডিজ হুডি</li>
                        <li style="padding:0px 5px;">লেডিজ হুডি</li>
                        <li style="padding:0px 5px;">লেডিজ হুডি</li>
                        <li style="padding:0px 5px;">লেডিজ হুডি</li>
                    </ul>
                </div>
                <div class="col-sm-4 col-xs-12 catproductslide">
                    <img style="width:100%" src="{{asset('public/User')}}/img/products/pureit1.jpg">
                    <img style="width:100%" src="{{asset('public/User')}}/img/products/pureit2.jpg">
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#" title="Flower Slave Gentle Casual Jacket" target="_blank">
                                <img style="width:80%;display: block;margin: 0 auto;" src="{{asset('public/User')}}/img/products/pureit3.png" alt="Flower Slave Gentle Casual Jacket">
                            </a>
                            <a href="#"><h3 style="text-decoration: none;font-size:15px;text-align: center;margin-bottom: 0px;">ফুল স্লিভ জেন্টস ক্যাজুয়াল জ্যাকেট</h3></a>
                            <p style="text-align: center;font-weight: bold;color:red;">50Tk</p>
                        </div>

                        <div class="col-sm-6">
                            <a href="#" title="Flower Slave Gentle Casual Jacket" target="_blank">
                                <img style="width:80%;display: block;margin: 0 auto;" src="{{asset('public/User')}}/img/products/pureit4.jpg" alt="Flower Slave Gentle Casual Jacket">
                            </a>
                            <a href="#"><h3 style="text-decoration: none;font-size:15px;text-align: center;margin-bottom: 0px;">ফুল স্লিভ জেন্টস ক্যাজুয়াল জ্যাকেট</h3></a>
                            <p style="text-align: center;font-weight: bold;color:red;">50Tk</p>
                        </div>

                        <div class="col-sm-6">
                            <a href="#" title="Flower Slave Gentle Casual Jacket" target="_blank">
                                <img style="width:80%;display: block;margin: 0 auto;" src="{{asset('public/User')}}/img/products/pureit5.jpg" alt="Flower Slave Gentle Casual Jacket">
                            </a>
                            <a href="#"><h3 style="text-decoration: none;font-size:15px;text-align: center;margin-bottom: 0px;">ফুল স্লিভ জেন্টস ক্যাজুয়াল জ্যাকেট</h3></a>
                            <p style="text-align: center;font-weight: bold;color:red;">50Tk</p>
                        </div>

                        <div class="col-sm-6">
                            <a href="#" title="Flower Slave Gentle Casual Jacket" target="_blank">
                                <img style="width:80%;display: block;margin: 0 auto;" src="{{asset('public/User')}}/img/products/pureit6.jpg" alt="Flower Slave Gentle Casual Jacket">
                            </a>
                            <a href="#"><h3 style="text-decoration: none;font-size:15px;text-align: center;margin-bottom: 0px;">ফুল স্লিভ জেন্টস ক্যাজুয়াল জ্যাকেট</h3></a>
                            <p style="text-align: center;font-weight: bold;color:red;">50Tk</p>
                        </div>
                    </div>
                </div>

                <div style="width:100%;margin: 0 auto;" >
                    <div class="row">
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage5.jpg">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage4.jpg">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage3.jpg">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage2.jpg">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/ladies-watch.webp">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/ladies-watch.webp">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage5.jpg">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage4.jpg">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage3.jpg">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage2.jpg">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/ladies-watch.webp">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/ladies-watch.webp">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage5.jpg">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage4.jpg">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage3.jpg">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage2.jpg">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/ladies-watch.webp">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:5px;" class="col-sm-2 cart-item">
                            <div class="product-cart-hover">
                                <div class="cart-pro-image">
                                    <a href="#">
                                        <img style="display: inline-block;width: 100%;height: 180px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/ladies-watch.webp">
                                    </a>
                                </div>
                                <div style="padding-left:5px;padding-right: 5px;">
                                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                                        <span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span>
                                    </div>
                                    <div class="cart-pro-price">
                                        <del style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;">৳1250</del><span> -75%</span>&nbsp&nbsp
                                        <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;" class="currency">৳350</span>
                                    </div>
                                    <div style="">
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                        <i style="color:yellow" class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="padding-right:0px;padding-left:0px;width:80%;margin: 0 auto;">
    <div class="row" style="margin-left: 0px;margin-right: 0px;">
        <h2 style="color:#ff5a00;border-bottom: 1px solid #ddd;padding:0px 0px 15px;font-size: 22px;line-height: 30px;text-transform: uppercase;">SHOP BY BRAND</h2>
    </div>
</div>
<div  style="width:80%;margin: 0 auto;">
    <div class="row carousel-brand owl-theme">
        <div style="height: 165px;line-height: 165px;margin: 0 auto;width: 165px;" class="col item">
            <a href="#"><img style="display: inline-block;max-width: 100%;max-height: 100%;vertical-align: middle;" src="{{asset('public/User')}}/img/brands/1.png"></a>
        </div>
        <div style="height: 165px;line-height: 165px;margin: 0 auto;width: 165px;" class="col item">
            <a href="#"><img style="display: inline-block;max-width: 100%;max-height: 100%;vertical-align: middle;" src="{{asset('public/User')}}/img/brands/2.png"></a>
        </div>
        <div style="height: 165px;line-height: 165px;margin: 0 auto;width: 165px;" class="col item">
            <a href="#"><img style="display: inline-block;max-width: 100%;max-height: 100%;vertical-align: middle;" src="{{asset('public/User')}}/img/brands/3.png"></a>
        </div>
        <div style="height: 165px;line-height: 165px;margin: 0 auto;width: 165px;" class="col item">
            <a href="#"><img style="display: inline-block;max-width: 100%;max-height: 100%;vertical-align: middle;" src="{{asset('public/User')}}/img/brands/4.png"></a>
        </div>
        <div style="height: 165px;line-height: 165px;margin: 0 auto;width: 165px;" class="col item">
            <a href="#"><img style="display: inline-block;max-width: 100%;max-height: 100%;vertical-align: middle;" src="{{asset('public/User')}}/img/brands/5.png"></a>
        </div>
        <div style="height: 165px;line-height: 165px;margin: 0 auto;width: 165px;" class="col item">
            <a href="#"><img style="display: inline-block;max-width: 100%;max-height: 100%;vertical-align: middle;" src="{{asset('public/User')}}/img/brands/6.png"></a>
        </div>
        <div style="height: 165px;line-height: 165px;margin: 0 auto;width: 165px;" class="col item">
            <a href="#"><img style="display: inline-block;max-width: 100%;max-height: 100%;vertical-align: middle;" src="{{asset('public/User')}}/img/brands/7.png"></a>
        </div>
        <div style="height: 165px;line-height: 165px;margin: 0 auto;width: 165px;" class="col item">
            <a href="#"><img style="display: inline-block;max-width: 100%;max-height: 100%;vertical-align: middle;" src="{{asset('public/User')}}/img/brands/8.png"></a>
        </div>
        <div style="height: 165px;line-height: 165px;margin: 0 auto;width: 165px;" class="col item">
            <a href="#"><img style="display: inline-block;max-width: 100%;max-height: 100%;vertical-align: middle;" src="{{asset('public/User')}}/img/brands/9.png"></a>
        </div>
        <div style="height: 165px;line-height: 165px;margin: 0 auto;width: 165px;" class="col item">
            <a href="#"><img style="display: inline-block;max-width: 100%;max-height: 100%;vertical-align: middle;" src="{{asset('public/User')}}/img/brands/10.png"></a>
        </div>
    </div>
</div>

@include('user.inc.live chat box')

<!-- ========================================== Footer Bar Bellow Here================================================= -->
@include('user.inc.footer')