<header class="sticky-top" style="background-color:#fff;">
    <div class="register-signup-bar container-fluid" style="background-color:#232f3e">
        <div class="row res-top-info">
            <div class="col-sm-5 col-xs-12">
                <ul>
                    <li><i class="fa fa-home"></i><a style="text-decoration: none;color:white;" href="{{url('')}}">Home</a></li>
                    <li><a style="text-decoration: none;color:white;" href="{{url('how-to-buy')}}">How to Buy</a></li>
                    <li><a style="text-decoration: none;color:white;" href="{{url('product-compare')}}">Compare</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-xs-12">
                <p style="color:white;margin-bottom:0px;">Hotline: +8801797744248 ( 9 AM to 12 AM - Everyday )</p>
            </div>
            <div class="col-sm-3 col-xs-12">
                <ul>
                    <li><a style="text-decoration: none;color:white;" href="{{url('bn')}}">বাংলা</a> | <a style="text-decoration: none;color:white;" href="{{url('')}}">Eng</a></li>
                    <li><i class="fa fa-user"></i> <a style="text-decoration: none;color:white;" href="{{url('signup')}}">Register</a></li>
                    <li><i class="fa fa-toggle-right"></i> <a style="text-decoration: none;color:white;" href="{{url('login')}}">Sing In</a></li>
                </ul>
            </div>
        </div>
        <div class="row res-top-info-display">
            <div class="col-sm-6 col-xs-12">
                <ul>
                    <li><i class="fa fa-home"></i><a style="text-decoration: none;color:white;" href="{{url('')}}">Home</a></li>
                    <li><a style="text-decoration: none;color:white;" href="{{url('how-to-buy')}}">How to Buy</a></li>
                    <li><a style="text-decoration: none;color:white;" href="{{url('product-compare')}}">Compare</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-xs-12">
                <ul>
                    <li><a style="text-decoration: none;color:white;" href="{{url('bn')}}">বাংলা</a> | <a style="text-decoration: none;color:white;" href="{{url('')}}">Eng</a></li>
                    <li><i class="fa fa-user"></i> <a style="text-decoration: none;color:white;" href="{{url('signup')}}">Register</a></li>
                    <li><i class="fa fa-toggle-right"></i> <a style="text-decoration: none;color:white;" href="{{url('login')}}">Sing In</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="logo-and-search-bar">
        <div style="padding: 10px 0px;" class="container-fluid">
            <div style="width:80%;margin: 0 auto;" class="res-main-search-cart">
                <div class="row">
                    <div class="col-sm-3 col-xs-3 logo">
                        <a href="{{url('')}}"><img style="max-width:50%;max-height:50px;" src="{{asset('public/User')}}/img/ecommerce-logo.png"></a>
                    </div>
                    <div class="col-sm-6 col-xs-19">
                        <div class="home-search-box">
                            <input type="text" name="product-name"/>
                            <button type="submit" title="Search" class="search-button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="wish-list-and-cart">
                            <div data-toggle="modal" data-target="#myModal" id="cart-circle" style="cursor: pointer;height:50px;width:50px;background-color:#f57224;position: relative;border-radius: 50%;float: left;">
                                <i style="position:absolute;top:12px;left:12px;font-size: 24px;color:white;" class="fa fa-shopping-cart"></i>
                                <div style="height:20px;width:20px;border-radius:50%;background-color:#32CD32;text-align: center;position:absolute;top:0px;right:0px;">2</div>
                            </div>

                            <div style="float:left;padding-left:15px;" class="">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                <span style="display:block;text-align: center;" class="cart-label">My Bag</span>
                                <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;text-align:center;" class="price">৳ 200</span>
                            </div>
                            
                            <div data-toggle="modal" data-target="#wishlist"  class="wish-list" style="cursor: pointer;height:50px;width:50px;background-color:#f57224;position: relative;border-radius: 50%;float:left;margin-left: 15px;">
                                <i style="position:absolute;top:12px;left:12px;font-size: 24px;color:white;" class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container res-main-search-display">
                <div class="row" style="margin-right:0px;margin-left:0px;">
                    <div style="width:40%;">
                        <a href="{{url('')}}"><img style="max-width:50%;max-height:50px;" src="{{asset('public/User')}}/img/ecommerce-logo.png"></a>
                    </div>
                    <div style="width: 60%">
                        <div class="wish-list-and-cart float-right">
                            <div data-toggle="modal" data-target="#myModal" id="cart-circle" style="cursor: pointer;height:50px;width:50px;background-color:#f57224;position: relative;border-radius: 50%;float: left;">
                                <i style="position:absolute;top:12px;left:12px;font-size: 24px;color:white;" class="fa fa-shopping-cart"></i>
                                <div style="height:20px;width:20px;border-radius:50%;background-color:#32CD32;text-align: center;position:absolute;top:0px;right:0px;">2</div>
                            </div>

                            <div style="float:left;padding-left:15px;" class="">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                <span style="display:block;text-align: center;" class="cart-label">My Bag</span>
                                <span style="font-family: Roboto-Regular,'Helvetica Neue',Helvetica,Tahoma,Arial,Sans-serif;text-align:center;" class="price">৳ 200</span>
                            </div>

                            <div data-toggle="modal" data-target="#wishlist"  class="wish-list" style="cursor: pointer;height:50px;width:50px;background-color:#f57224;position: relative;border-radius: 50%;float:left;margin-left: 15px;">
                                <i style="position:absolute;top:12px;left:12px;font-size: 24px;color:white;" class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="margin-top:0px;margin-bottom:0px;">
    </div>
    <!--=========================================== Logo and search box end here==================================================================-->

    <div class="menu-box" style="border-bottom: 1px solid red;">
        <div style="width:80%;margin: 0 auto;" class="menu-bar">
            <div class="row" style="margin-left: 0px;margin-right: 0px;">
                <div class="col-sm-2" style="padding-right: 0;padding-left: 0px;">
                    <div class="left-menu">
                        <div class="menu-vertical-title categorylist" style="">
                            <i class="fa fa-list"></i>
                            <a style="text-decoration: none;" href="#thiscategory">CATEGORIES </a>
                            <a style="text-decoration: none;" class="hidden-xs all-cat" href="#thiscategory">See All&gt;</a>
                        </div>
                    </div>
                </div>


                <div style="padding-right: 0;padding-left: 0px;" class="col-sm-10">
                    <div class="content-megamenu">
                        <ul class="groupmenu">
                            <li class="main-item">
                                <a class="menu-link" href="#"><i class="menu-icon fa fa-home"></i> <span><a style="text-decoration: none;" href="{{url('')}}">Home</a></span></a>
                            </li>
                            <li class="main-item">
                                <a class="menu-link" href="#"> <span><span>MakeUp</span></span></a>
                                <ul class="groupmenu-drop">
                                    <li class="child-item">
                                        <div class="groupmenu-drop-content">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p style="border-bottom: 1px solid #e9e9e9;margin-bottom: 0px;">
                                                        <a style="color:black" class="groupdrop-title" href="{{url('jualiary')}}">Eyes</a>
                                                    </p>
                                                    <ul class="groupdrop-link">
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Lehenga</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Salwar kameez</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Kurti</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Saree</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">T-Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Tops</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <p style="border-bottom: 1px solid #e9e9e9;margin-bottom: 0px;">
                                                        <a style="color:black" class="groupdrop-title" href="{{url('jualiary')}}">Face</a>
                                                    </p>
                                                    <ul class="groupdrop-link">
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Lehenga</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Salwar kameez</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Kurti</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Saree</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">T-Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Tops</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <p style="border-bottom: 1px solid #e9e9e9;margin-bottom: 0px;">
                                                        <a style="color:black" class="groupdrop-title" href="{{url('jualiary')}}">Lips</a>
                                                    </p>
                                                    <ul class="groupdrop-link">
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Lehenga</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Salwar kameez</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Kurti</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Saree</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">T-Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Tops</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <p style="border-bottom: 1px solid #e9e9e9;margin-bottom: 0px;">
                                                        <a style="color:black" class="groupdrop-title" href="{{url('jualiary')}}">Nails</a>
                                                    </p>
                                                    <ul class="groupdrop-link">
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Lehenga</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Salwar kameez</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Kurti</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Saree</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">T-Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Tops</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="main-item">
                                <a class="menu-link" href=""> <span><span>Bath &amp; Body</span></span></a>
                                <ul class="groupmenu-drop">
                                    <li class="child-item">
                                        <div class="groupmenu-drop-content">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p style="border-bottom: 1px solid #e9e9e9;margin-bottom: 0px;">
                                                        <a style="color:black" class="groupdrop-title" href="">Eyes</a>
                                                    </p>
                                                    <ul class="groupdrop-link">
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Lehenga</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Salwar kameez</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Kurti</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Saree</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">T-Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Tops</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <p style="border-bottom: 1px solid #e9e9e9;margin-bottom: 0px;">
                                                        <a style="color:black" class="groupdrop-title" href="{{url('jualiary')}}">Face</a>
                                                    </p>
                                                    <ul class="groupdrop-link">
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Lehenga</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Salwar kameez</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Kurti</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Saree</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">T-Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Tops</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <p style="border-bottom: 1px solid #e9e9e9;margin-bottom: 0px;">
                                                        <a style="color:black" class="groupdrop-title" href="{{url('jualiary')}}">Lips</a>
                                                    </p>
                                                    <ul class="groupdrop-link">
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Lehenga</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Salwar kameez</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Kurti</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Saree</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">T-Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Tops</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                    <p style="border-bottom: 1px solid #e9e9e9;margin-bottom: 0px;">
                                                        <a style="color:black" class="groupdrop-title" href="">Nails</a>
                                                    </p>
                                                    <ul class="groupdrop-link">
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Lehenga</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Salwar kameez</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Kurti</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Saree</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">T-Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Tops</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="item level0  level-top parent">
                                <a class="menu-link" href="{{url('jualiary')}}"> <span><span>Gromming Shop</span></span></a>
                            </li>
                            <li class="main-item">
                                <a class="menu-link" href="{{url('jualiary')}}"> <span><span>Health &amp; Beauty</span></span></a>
                            </li>
                            <li class="item level0  level-top">
                                <a class="menu-link" href="{{url('jualiary')}}"> <span><span>Kids</span></span></a>
                            </li>
                            <li class="main-item">
                                <a class="menu-link" href="{{url('jualiary')}}"> <span><span>Shop By Brand</span></span></a>
                                <ul class="groupmenu-drop">
                                    <li class="child-item">
                                        <div style="width:180px;" class="groupmenu-drop-content">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p style="border-bottom: 1px solid #e9e9e9;margin-bottom: 0px;">
                                                        <a style="color:black" class="groupdrop-title" href="">Brand List</a>
                                                    </p>
                                                    <ul class="groupdrop-link">
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Lehenga</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Salwar kameez</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Kurti</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Saree</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">T-Shirts</a></li>
                                                        <li style="width: 100%" class="item"><a href="{{url('jualiary')}}">Tops</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>