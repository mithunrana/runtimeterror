@include('user.inc.headersource')
<!--=============================responsive menu bar start here======================================-->
@include('user.inc.responsive-menubar')
<!--=============================responsive menu bar end here======================================-->
@include('user.inc.menubar')
<!--============================================Menu Bar end here================================================-->
<!--Modal start Here-->
@include('user.inc.modal')
<!--Modal End Here-->

<div style="width:80%;margin: 0 auto;" class="slider-bar-and-category-bar" id="thiscategory">
    <div class="row" style="margin-left: 0px;margin-right: 0px;">
        <div style="padding: 0px;" class="col-sm-2 col-xs-12 res-side-category-bar">
            <div class="side-category-bar" style="">
                <ul>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="#">
                            <i class="menu-icon fa fa-female"></i> <span><span>মেয়েদের ফ্যাশন</span></span>
                        </a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="#"><i class="menu-icon fa fa-meh-o"></i> <span><span>সাসসজ্জা</span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="#"><i class="menu-icon fa fa-heart"></i> <span><span>পোশাক সামগ্রী </span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="#"><i class="menu-icon fa fa-diamond"></i> <span><span>গহনা </span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="#"><i class="menu-icon fas fa-shopping-bag"></i> <span><span>লেডিজব্যাগ ও পার্স</span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="#"><i class="menu-icon fa fa-paw"></i> <span><span>জুতা ও স্যান্ডেল</span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="#"><i class="menu-icon fa fa-clock-o"></i> <span><span> ঘড়ি</span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="#"><i class="menu-icon fa fa-hospital-o"></i> <span><span>স্বাস্থ্য ও সৌন্দর্য</span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="#"><i class="menu-icon fa fa-square"></i> <span><span>বোরকা,হিজাব ও ওড়না</span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="#"><i class="menu-icon fa fa-bell"></i> <span><span>স্টেশনারি</span></span></a>
                    </li>
                    <li class="item level0  level-top">
                        <a class="menu-link" href="#"><i class="menu-icon fa fa-gift"></i> <span><span>উপহার সামগ্রী</span></span></a>
                    </li>
                    <li class="item level0  level-top">
                        <a class="menu-link" href="#"><i class="menu-icon fa fa-star"></i> <span><span>সেরা বিক্রয় পণ্য</span></span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div style="padding: 0px;" class="col-sm-10 col-xs-12 res-slider">
            <div class="silk-slider">
                <div>
                    <img style="width:100%;height:370px;" src="{{asset('public/User')}}/img/slider1.jpg">
                </div>
                <div>
                    <img style="width:100%;height:370px;" src="{{asset('public/User')}}/img/slider1.jpeg">
                </div>
                <div>
                    <img style="width:100%;height:360px;" src="{{asset('public/User')}}/img/slider2.jpg">
                </div>
                <div>
                    <img style="width:100%;height:370px;" src="{{asset('public/User')}}/img/slider3.jpg">
                </div>
            </div>
        </div>

        <div style="margin-left: 0px;margin-right: 0px;" class="col-sm-12 col-xs-12 res-slider-display">
            <div class="silk-slider">
                <div>
                    <img style="width:100%;" src="{{asset('public/User')}}/img/slider1.jpg">
                </div>
                <div>
                    <img style="width:100%;" src="{{asset('public/User')}}/img/slider1.jpeg">
                </div>
                <div>
                    <img style="width:100%;" src="{{asset('public/User')}}/img/slider2.jpg">
                </div>
                <div>
                    <img style="width:100%;" src="{{asset('public/User')}}/img/slider3.jpg">
                </div>
            </div>
        </div>
    </div>
</div>


<!--- products category start -->
<div style="margin-top: 30px;margin-bottom:30px;padding: 0px;margin-left: auto;margin-right: auto;width:80%;" >
    <h2 style="border-bottom: 1px solid #ddd;padding:0px 0px 15px;font-size: 22px;line-height: 30px;color: #333;text-transform: uppercase;">জনপ্রিয় প্রোডাক্ট</h2>
    <div style="margin: 0px" class="row slick-category">
        <div style="padding: 5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category3.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color: #777;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 3px 0px;background-color: rgba(255,255,255,.7);display: block;">
                    div products
                </h3>
            </div>
        </div>
        <div style="padding: 5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category4.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color: #777;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 3px 0px;background-color: rgba(255,255,255,.7);display: block;">
                    div products
                </h3>
            </div>
        </div>
        <div style="padding: 5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category5.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color: #777;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 3px 0px;background-color: rgba(255,255,255,.7);display: block;">
                    div products
                </h3>
            </div>
        </div>
        <div style="padding: 5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category6.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color: #777;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 3px 0px;background-color: rgba(255,255,255,.7);display: block;">
                    div products
                </h3>
            </div>
        </div>
        <div style="padding: 5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category7.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color: #777;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 3px 0px;background-color: rgba(255,255,255,.7);display: block;">
                    div products
                </h3>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category8.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color: #777;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 3px 0px;background-color: rgba(255,255,255,.7);display: block;">
                    div products
                </h3>
            </div>
        </div>
        <div style="padding: 5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category3.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color: #777;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 3px 0px;background-color: rgba(255,255,255,.7);display: block;">
                    div products
                </h3>
            </div>
        </div>
        <div style="padding: 5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category4.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color: #777;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 3px 0px;background-color: rgba(255,255,255,.7);display: block;">
                    div products
                </h3>
            </div>
        </div>
    </div>
</div>
<!--- products category end -->


<div style="padding-right:0px;padding-left:0px;margin: 0 auto;width:80%;">
    <h2 style="color:#ff5a00;border-bottom: 1px solid #ddd;padding:0px 0px 15px;font-size: 22px;line-height: 30px;text-transform: uppercase;">সেরা বিক্রয় পণ্য</h2>
</div>
<div style="background-color: #fc6d20;padding: 10px;width:80%;margin: 0 auto;">
    <div style="margin-right:-5px;margin-left:-5px;" class="row slick-best-sell-section-1">
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    50tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/smallimage1.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/watch.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/moneybag.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/machine.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/light.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
    </div>

    <div style="margin-right:-5px;margin-left:-5px;" class="row slick-best-sell-section-2">
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/machine.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/light.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
        <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg">
                <span style="font-size: 10px;font-weight: bold;position: absolute;left:10px;top: 10px;background-color: white;height:40px;width:40px;border-radius:50%;text-align: center;border: 1px solid #ff5a00">
                    50%<br>ছাড়
                </span>
                <span style="color:white;font-size: 15px;font-weight: bold;position: absolute;right:5px;bottom:10px;border-bottom-left-radius:5px;border-top-left-radius:5px;line-height: 30px;background-color:#00c42a;height:30px;width:60px;text-align: center;border: 1px solid #00c42a">
                    120tk
                </span>
            </div>
        </div>
    </div>
</div>


<div style="padding-right:0px;padding-left:0px;width:80%;margin: 0 auto;">
    <div class="row" style="margin-left: 0px;margin-right: 0px;">
        <h2 style="color:#ff5a00;border-bottom: 1px solid #ddd;padding:0px 0px 15px;font-size: 22px;line-height: 30px;text-transform: uppercase;">ব্র্যান্ড</h2>
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
            <a href="#"><img style="display: inline-block;max-width: 100%;max-height: 100%;vertical-align: middle;" src="i{{asset('public/User')}}/mg/brands/9.png"></a>
        </div>
        <div style="height: 165px;line-height: 165px;margin: 0 auto;width: 165px;" class="col item">
            <a href="#"><img style="display: inline-block;max-width: 100%;max-height: 100%;vertical-align: middle;" src="{{asset('public/User')}}/img/brands/10.png"></a>
        </div>
    </div>
</div>


<div style="margin-top:30px;margin-bottom:20px;width:80%;margin: 0 auto;">
    <div class="row" style="border-top: 2px solid #ff5a00;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12);margin-left: 0px;margin-left: 0px;">
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
        <div class="col-sm-4 col-xs-12">
            <img style="width:100%" src="{{asset('public/User')}}/img/products/shirt.jpg">
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-sm-6">
                    <a href="#" title="Flower Slave Gentle Casual Jacket" target="_blank">
                        <img style="width:80%;display: block;margin: 0 auto;" src="https://static.ajkerdeal.com/images/deals/144940112180431/smallimage1.jpg" alt="Flower Slave Gentle Casual Jacket">
                    </a>
                    <a href="#"><h3 style="text-decoration: none;font-size:15px;text-align: center;margin-bottom: 0px;">ফুল স্লিভ জেন্টস ক্যাজুয়াল জ্যাকেট</h3></a>
                    <p style="text-align: center;font-weight: bold;color:red;">50Tk</p>
                </div>

                <div class="col-sm-6">
                    <a href="#" title="Flower Slave Gentle Casual Jacket" target="_blank">
                        <img style="width:80%;display: block;margin: 0 auto;" src="https://static.ajkerdeal.com/images/deals/144940112180431/smallimage1.jpg" alt="Flower Slave Gentle Casual Jacket">
                    </a>
                    <a href="#"><h3 style="text-decoration: none;font-size:15px;text-align: center;margin-bottom: 0px;">ফুল স্লিভ জেন্টস ক্যাজুয়াল জ্যাকেট</h3></a>
                    <p style="text-align: center;font-weight: bold;color:red;">50Tk</p>
                </div>

                <div class="col-sm-6">
                    <a href="#" title="Flower Slave Gentle Casual Jacket" target="_blank">
                        <img style="width:80%;display: block;margin: 0 auto;" src="https://static.ajkerdeal.com/images/deals/144940112180431/smallimage1.jpg" alt="Flower Slave Gentle Casual Jacket">
                    </a>
                    <a href="#"><h3 style="text-decoration: none;font-size:15px;text-align: center;margin-bottom: 0px;">ফুল স্লিভ জেন্টস ক্যাজুয়াল জ্যাকেট</h3></a>
                    <p style="text-align: center;font-weight: bold;color:red;">50Tk</p>
                </div>

                <div class="col-sm-6">
                    <a href="#" title="Flower Slave Gentle Casual Jacket" target="_blank">
                        <img style="width:80%;display: block;margin: 0 auto;" src="https://static.ajkerdeal.com/images/deals/144940112180431/smallimage1.jpg" alt="Flower Slave Gentle Casual Jacket">
                    </a>
                    <a href="#"><h3 style="text-decoration: none;font-size:15px;text-align: center;margin-bottom: 0px;">ফুল স্লিভ জেন্টস ক্যাজুয়াল জ্যাকেট</h3></a>
                    <p style="text-align: center;font-weight: bold;color:red;">50Tk</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="width:80%;margin: 0 auto;">
    <div class="row">
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover">
                <div class="cart-pro-image">
                    <a href="#">
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage5.jpg">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage4.jpg">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage3.jpg">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage2.jpg">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/ladies-watch.webp">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/ladies-watch.webp">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage5.jpg">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage4.jpg">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage3.jpg">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage2.jpg">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/ladies-watch.webp">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/ladies-watch.webp">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage5.jpg">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage4.jpg">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage3.jpg">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage2.jpg">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/ladies-watch.webp">
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
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/ladies-watch.webp">
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


<!-- ========================================== Footer Bar Bellow Here================================================= -->

@include('user.inc.live chat box')



<div class="container-fluid" style="background-color:#cc1016;">
    <div class="container">
        <div class="row">
            <div  class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                <div style="margin-top: 20px;" class="row">
                    <div style="padding-right:1px;" class="col-sm-9">
                        <input style="width:100%;height:35px;border-radius: 5px;outline: none;" type="text" name="subscriberemail">
                    </div>
                    <div style="padding-left:1px;" class="col-sm-3">
                        <input style="width:100%;height:35px;border-radius: 5px;outline: none;font-weight: bold;background-color:white;" type="submit"  value="সাবস্ক্রাইবে">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 text-center text-md-right">
                <span style="font-size: 20px;font-weight: bold;">আমাদেরকে অনুসরণ করুন</span>
                <a style="text-decoration: none;" href="" class="fb-ic">
                    <i class="fa fa-facebook-official" style="font-size:36px;color: white;line-height: 76px;padding: 0px 5px;"></i>
                </a>
                <!-- Twitter -->
                <a style="text-decoration: none;" href="" class="tw-ic">
                    <i class="fa fa-tumblr-square" style="font-size:36px;color: white;line-height: 76px;padding: 0px 5px;"></i>
                </a>
                <!-- Google +-->
                <a style="text-decoration: none;" href="" class="gplus-ic">
                    <i class="fa fa-google" style="font-size:36px;color: white;line-height: 76px;padding: 0px 5px;"></i>
                </a>
                <a style="text-decoration: none;" href="" class="gplus-ic">
                    <i class="fa fa-youtube-play" style="font-size:36px;color: white;line-height: 76px;padding: 0px 5px;"></i>
                </a>
                <!--Linkedin -->
                <a style="text-decoration: none;" href="" class="li-ic">
                    <i class="fa fa-linkedin-square" style="font-size:36px;color: white;line-height: 76px;padding: 0px 5px;"></i>
                </a>
                <!--Instagram-->
                <a style="text-decoration: none;" href="" class="ins-ic">
                    <i class="fa fa-instagram" style="font-size:36px;color: white;line-height: 76px;padding: 0px 5px;"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div style="background-color:white;" class="container-fluid">
    <div class="container">
        <div style="margin-top:25px;" class="row">
            <div class="col-sm-3">
                <h5>তথ্যসেবা</h5>
                <ul style="list-style: none;">
                    <li>আমাদের সম্পর্কে</li>
                    <li>আমাদের সাথে যোগাযোগ করুন</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>গ্রাহক সেবা</h5>
                <ul style="list-style: none;">
                    <li>সুরক্ষা নীতিমালা</li>
                    <li>পণ্য রিটার্ণ ও টাকা রিফান্ড</li>
                    <li>আচরণ বিধি</li>
                    <li>নিয়ম ও শর্তাবলী</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>আমার অ্যাকাউন্ট</h5>
                <ul style="list-style: none;">
                    <li>গ্রাহকের তথ্য</li>
                    <li>ঠিকানা</li>
                    <li>অন্যান্য</li>
                    <li>শপিং কার্ড</li>
                    <li>ইচ্ছে লিস্ট</li>
                    <li>পণ্য পরিবর্তন প্রক্রিয়া</li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>আমাদের ঠিকানা</h5>
                <ul style="list-style: none;">
                    <li class="address" itemprop="address"><i class="fa fa-bank"></i><span> ৩৯, ভুতের গলি, ধানমন্ডি, ধাকা-১২0৫</span></li>
                    <li class="email"><i class="fa fa-envelope"></i><span>runtimeterro@gmail.com</span></li>
                    <li class="phone" itemprop="telephone"><i class="material-icons">ফোন</i><span>০৯৬৩৬-১০২০৩০</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div style="background-color:white;" class="container-fluid">
    <div style="text-align: center;padding-top:10px;padding-bottom: 10px;font-size: 22px;color:red;" class="container">পেমেন্ট মেথডসমূহ</div>
    <div class="container">
        <div class="row card-carousel">
            <div class="col-sm-2">
                <img style="width:100%;" src="{{asset('public/User')}}/img/card/1.png" >
            </div>
            <div class="col-sm-2">
                <img style="width:100%;" src="{{asset('public/User')}}/img/card/2.png" >
            </div>
            <div class="col-sm-2">
                <img style="width:100%;" src="{{asset('public/User')}}/img/card/3.png">
            </div>
            <div class="col-sm-2">
                <img style="width:100%;" src="{{asset('public/User')}}/img/card/4.png">
            </div>
            <div class="col-sm-2">
                <img style="width:100%;" src="{{asset('public/User')}}/img/card/5.png">
            </div>
            <div class="col-sm-2">
                <img style="width:100%;" src="{{asset('public/User')}}/img/card/7.png">
            </div>
            <div class="col-sm-2">
                <img style="width:100%;" src="{{asset('public/User')}}/img/card/8.png">
            </div>
            <div class="col-sm-2">
                <img style="width:100%;" src="{{asset('public/User')}}/img/card/4.png">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#465052;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p style="text-align:center;color:white;padding-top: 10px;"> © 2018 Copyright: Run Time Terror.com</p>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var scrolltotop = {setting: {startline: 100, scrollto: 0, scrollduration: 1e3, fadeduration: [500, 100]}, controlHTML: '<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow4.png" />', controlattrs: {offsetx: 5, offsety: 5}, anchorkeyword: "#top", state: {isvisible: !1, shouldvisible: !1}, scrollup: function () {
            this.cssfixedsupport || this.$control.css({opacity: 0});
            var t = isNaN(this.setting.scrollto) ? this.setting.scrollto : parseInt(this.setting.scrollto);
            t = "string" == typeof t && 1 == jQuery("#" + t).length ? jQuery("#" + t).offset().top : 0, this.$body.animate({scrollTop: t}, this.setting.scrollduration)
        }, keepfixed: function () {
            var t = jQuery(window), o = t.scrollLeft() + t.width() - this.$control.width() - this.controlattrs.offsetx, s = t.scrollTop() + t.height() - this.$control.height() - this.controlattrs.offsety;
            this.$control.css({left: o + "px", top: s + "px"})
        }, togglecontrol: function () {
            var t = jQuery(window).scrollTop();
            this.cssfixedsupport || this.keepfixed(), this.state.shouldvisible = t >= this.setting.startline ? !0 : !1, this.state.shouldvisible && !this.state.isvisible ? (this.$control.stop().animate({opacity: 1}, this.setting.fadeduration[0]), this.state.isvisible = !0) : 0 == this.state.shouldvisible && this.state.isvisible && (this.$control.stop().animate({opacity: 0}, this.setting.fadeduration[1]), this.state.isvisible = !1)
        }, init: function () {
            jQuery(document).ready(function (t) {
                var o = scrolltotop, s = document.all;
                o.cssfixedsupport = !s || s && "CSS1Compat" == document.compatMode && window.XMLHttpRequest, o.$body = t(window.opera ? "CSS1Compat" == document.compatMode ? "html" : "body" : "html,body"), o.$control = t('<div id="topcontrol">' + o.controlHTML + "</div>").css({position: o.cssfixedsupport ? "fixed" : "absolute", bottom: o.controlattrs.offsety, right: o.controlattrs.offsetx, opacity: 0, cursor: "pointer"}).attr({title: "Scroll to Top"}).click(function () {
                    return o.scrollup(), !1
                }).appendTo("body"), document.all && !window.XMLHttpRequest && "" != o.$control.text() && o.$control.css({width: o.$control.width()}), o.togglecontrol(), t('a[href="' + o.anchorkeyword + '"]').click(function () {
                    return o.scrollup(), !1
                }), t(window).bind("scroll resize", function (t) {
                    o.togglecontrol()
                })
            })
        }};
    scrolltotop.init();</script>
<noscript>Not seeing a <a href="https://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

</body>
</html>