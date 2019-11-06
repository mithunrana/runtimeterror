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
        <div style="padding: 0px;" class="col-sm-2 col-xs-12 res-side-category-bar main-categorylist">
            <div class="side-category-bar" style="">
                <ul>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="{{url('jualiary')}}">
                            <i class="menu-icon fa fa-female"></i> <span><span>Women's Clothing</span></span>
                        </a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="{{url('jualiary')}}"><i class="menu-icon fa fa-meh-o"></i> <span><span>MakeUp</span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="{{url('jualiary')}}"><i class="menu-icon fa fa-heart"></i> <span><span>Inner Wear</span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="{{url('jualiary')}}"><i class="menu-icon fa fa-diamond"></i> <span><span>Jewellery </span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="{{url('jualiary')}}"><i class="menu-icon fa fa-shopping-bag"></i> <span><span> Women's Bags</span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="{{url('jualiary')}}"><i class="menu-icon fa fa-paw"></i> <span><span>Women's Shoes</span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="{{url('jualiary')}}"><i class="menu-icon fa fa-clock-o"></i> <span><span> Women's Watches</span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="{{url('jualiary')}}"><i class="menu-icon fa fa-hospital-o"></i> <span><span>Toiletries &amp; Health</span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="{{url('jualiary')}}"><i class="menu-icon fa fa-square"></i> <span><span>Borka &amp; Hijab </span></span></a>
                    </li>
                    <li class="item level0  level-top parent">
                        <a class="menu-link" href="{{url('jualiary')}}"><i class="menu-icon fa fa-bell"></i> <span><span>Accessories</span></span></a>
                    </li>
                    <li class="item level0  level-top">
                        <a class="menu-link" href="{{url('jualiary')}}"><i class="menu-icon fa fa-gift"></i> <span><span>Gift Items</span></span></a>
                    </li>
                    <li class="item level0  level-top">
                        <a class="menu-link" href="{{url('jualiary')}}"><i class="menu-icon fa fa-star"></i> <span><span>Best Selling Product</span></span></a>
                    </li>
                </ul>
            </div>
        </div>
       
        
        <div style="padding: 0px;" class="col-sm-10 col-xs-12 res-slider">
            <div class="silk-slider">
                <div>
                    <img style="width:100%;height:370px;" src="{{asset('public/User')}}/img/consumerelectornics.webp">
                </div>
                <div>
                    <img style="width:100%;height:370px;" src="{{asset('public/User')}}/img/machinaray.webp">
                </div>
                <div>
                    <img style="width:100%;height:360px;" src="{{asset('public/User')}}/img/slider2.jpg">
                </div>
                <div>
                    <img style="width:100%;height:370px;" src="{{asset('public/User')}}/img/e-commerce.jpg">
                </div>
            </div>
        </div>

        <div style="margin-left: 0px;margin-right: 0px;" class="col-sm-12 col-xs-12 res-slider-display">
            <div class="silk-slider">
                <div>
                    <img style="width:100%;" src="{{asset('public/User')}}/img/consumerelectornics.webp">
                </div>
                <div>
                    <img style="width:100%;" src="{{asset('public/User')}}/img/machinaray.webp">
                </div>
                <div>
                    <img style="width:100%;" src="{{asset('public/User')}}/img/slider2.jpg">
                </div>
                <div>
                    <img style="width:100%;" src="{{asset('public/User')}}/img/e-commerce.jpg">
                </div>
            </div>
        </div>
    </div>
</div>


<!--- products category start -->
<div style="margin-top: 30px;margin-bottom:30px;padding: 0px;margin-left: auto;margin-right: auto;width:80%;" >
    <h2 style="border-bottom: 1px solid #ddd;padding:0px 0px 15px;font-size: 22px;line-height: 30px;color: #333;text-transform: uppercase;">Popular Category</h2>
    <div style="padding:5px;" style="margin: 0px" class="row slick-category">
        <div style="padding:5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category4.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color:white;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 5px 0px;background-color: rgba(0,0,0,.5);display: block;">
                    <a style="text-decoration: none;color: white;" style="text-decoration: none;color: white;" href="{{url('jualiary')}}">Mobile & Electronics</a>
                </h3>
            </div>
        </div>

        <div style="padding:5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1                    px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category5.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color:white;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 5px 0px;background-color: rgba(0,0,0,.5);display: block;">
                    <a style="text-decoration: none;color: white;" style="text-decoration: none;color: white;" href="{{url('jualiary')}}">Men's Clothing</a>
                </h3>
            </div>
        </div>

        <div style="padding: 5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category6.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color:white;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 5px 0px;background-color: rgba(0,0,0,.5);display: block;">
                    <a style="text-decoration: none;color: white;" style="text-decoration: none;color: white;" href="{{url('jualiary')}}">Footwear</a>
                </h3>
            </div>
        </div>

        <div style="padding: 5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category7.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color:white;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 5px 0px;background-color: rgba(0,0,0,.5);display: block;">
                    <a style="text-decoration: none;color: white;" href="{{url('jualiary')}}">Kitchen & Dining Item</a>
                </h3>
            </div>
        </div>

        <div style="padding:5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category8.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color:white;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 5px 0px;background-color: rgba(0,0,0,.5);display: block;">
                    <a style="text-decoration: none;color: white;" href="{{url('jualiary')}}">Giter</a>
                </h3>
            </div>
        </div>

        <div style="padding: 5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category3.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color:white;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 5px 0px;background-color: rgba(0,0,0,.5);display: block;">
                    <a style="text-decoration: none;color: white;" href="{{url('jualiary')}}">Mackup</a>
                </h3>
            </div>
        </div>

        <div style="padding: 5px;" class="col-sm-2">
            <div style="box-sizing: border-box;border: 1px solid #e9e9e9;" class="item-holder">
                <img  src="{{asset('public/User')}}/img/category/category4.webp" style="width:100%;height:100%;">
                <h3 style="position: absolute;bottom: 0px;left: 0px;font-weight: bold;color:white;font-size: 1.17em;text-align: center;
                    width: 100%;margin-bottom: 0px;padding: 5px 0px;background-color: rgba(0,0,0,.5);display: block;">
                    <a style="text-decoration: none;color: white;" href="{{url('jualiary')}}">wash</a>
                </h3>
            </div>
        </div>
    </div>
</div>
<!--- products category end -->



<div style="padding-right:0px;padding-left:0px;margin: 0 auto;width:80%;">
    <h2 style="color:#ff5a00;border-bottom: 1px solid #ddd;padding:0px 0px 15px;font-size: 22px;line-height: 30px;text-transform: uppercase;">Best Selling Product</h2>
</div>
<div style="background-color: #fc6d20;padding: 10px;width:80%;margin: 0 auto;">
    <div style="margin-right:-5px;margin-left:-5px;" class="row slick-best-sell-section-1">
            <div style="padding: 5px;" class="best-sell-product col-sm-2 col-md-2 col-xs-12">
            <div style="border: 1px solid black;">
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/smallimage1.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/watch.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/moneybag.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/machine.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/light.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/machine.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/light.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg"></a>
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
                <a href="{{url('product-veiw')}}"><img style="width: 100%;" src="{{asset('public/User')}}/img/products/digitalwatch.jpg"></a>
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
        <div class="col-sm-4 col-xs-12 catproductslide">
            <img style="width:100%" src="{{asset('public/User')}}/img/products/shirt.jpg">
            <img style="width:100%" src="{{asset('public/User')}}/img/products/hudi2.jpg">
            <img style="width:100%" src="{{asset('public/User')}}/img/products/hudi3.jpg">
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
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
                <div class="cart-pro-image">
                    <a style="text-decoration:none;color: black;" href="{{url('product-veiw')}}">
                        <img style="display: inline-block;width: 100%;height: 160px;vertical-align: middle;" src="{{asset('public/User')}}/img/products/smallimage5.jpg">
                    </a>
                </div>
                <div style="padding-left:5px;padding-right: 5px;">
                    <div style="max-height:30px;overflow: hidden" class="cart-pro-name">
                        <a style="text-decoration:none;color: black;" href="{{url('product-veiw')}}"><span style="font-weight: bold">Starry Sky Round Dial Women Watches Magnetic-Golden</span></a>
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                 <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>

        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>

        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
        <div style="padding:5px;" class="col-sm-2 cart-item">
            <div class="product-cart-hover" style="border: 1px solid #cccccc">
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
                <button type="button" style="width: 100%;background-color:#F15B2D;border: none;color:white;">Add To Cart</button>
            </div>
        </div>
    </div>
</div>


@include('user.inc.live chat box')


<!-- ========================================== Footer Bar Bellow Here================================================= -->
@include('user.inc.footer')