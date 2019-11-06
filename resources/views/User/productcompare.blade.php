@include('user.inc.headersource')
<!--=============================responsive menu bar start here======================================-->
@include('user.inc.responsive-menubar')
<!--=============================responsive menu bar end here======================================-->
@include('user.inc.menubar')
<!--============================================Menu Bar end here================================================-->

<!--Modal start Here-->
@include('user.inc.modal')
<!--Modal End Here-->

<div style="width:80%;margin: 0 auto">
    <div class="row">                
        <div id="content" class="bg-white col-sm-12">
            <div class="table-responsive">
                <table class="table table-bordered white-theme compare_table">
                    <thead>
                        <tr>
                            <td colspan="4"><strong>Product Details</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product</td>
                            <td><a class="product_name" href=""><strong>Gents Tshirt styleish</strong></a></td>
                            <td><a class="product_name" href=""><strong>Gents Tshirt fashions</strong></a></td>
                            <td><a class="product_name" href=""><strong>Gents model</strong></a></td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td class="text-center">                      
                                <img src="{{asset('public/User')}}/img/products/tshirt1.jpg" style="max-height: 180px;" class="img-thumbnail">
                            </td>
                            <td class="text-center">                      
                                <img src="{{asset('public/User')}}/img/products/tshirt2.jpg" style="max-height: 180px;" class="img-thumbnail">
                            </td>
                            <td class="text-center">                      
                                <img src="{{asset('public/User')}}/img/products/tshirt3.jpg"  style="max-height: 180px;" class="img-thumbnail">
                            </td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>                                            
                                700TK                                      
                            </td>
                            <td>                                            
                                700TK                                        
                            </td>
                            <td>                                            
                                700TK                                           
                            </td>
                        </tr>
                        <tr>
                            <td>Model</td>
                            <td>৭৪৮৭৯৭</td>
                            <td>৭৪৮৭৯৭</td>
                            <td>৭৪৮৭৯৭</td>
                        </tr>
                        <tr>
                            <td>Brand</td>
                            <td>King</td>
                            <td>Mithun</td>
                            <td>Shamim</td>
                        </tr>
                        <tr>
                            <td>Availability</td>
                            <td>In Stock</td>
                            <td>In Stock</td>
                            <td>Out Of Stock</td>
                        </tr>
                        <tr>
                            <td>Rating</td>
                            <td class="rating">                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <br>
                                Based on 0 reviews.</td>
                            <td class="rating">                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <br>
                                Based on 0 reviews.</td>
                            <td class="rating">                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <br>
                                Based on 5 reviews.</td>
                        </tr>
                        <tr>
                            <td>Summary</td>
                            <td class="description">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. 
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidu
                            </td>
                            <td class="description">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. 
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidu
                            </td>
                            <td class="description">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. 
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidu
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Base Frequency</td>
                            <td>3.2GHz</td>
                            <td>3.8GHz</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Cache</td>
                            <td>Total L1 Cache 192KB<br>
                                Total L2 Cache 1MB<br>
                                Total L3 Cache 4MB</td>
                            <td>Total L2 Cache: 6MB<br>
                                Total L3 Cache: 64MB</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Cores</td>
                            <td> CPU Cores 2<br>
                                GPU Cores 3<br>
                                Compute Cores: 5 (2 CPU + 3 GPU)</td>
                            <td>12</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Threads</td>
                            <td>4</td>
                            <td>24</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Default TDP </td>
                            <td>35W</td>
                            <td>105W</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Maximum Turbo Frequency</td>
                            <td></td>
                            <td>4.6GHz</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td colspan="4"><strong>Memory Specifications</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Maximum Speed</td>
                            <td>2667MHz</td>
                            <td>3200MHz</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Type</td>
                            <td>DDR4</td>
                            <td>DDR4</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <input type="button" style="background-color: #f57224" value="Add To Cart" class="btn btn-primary btn-block" >
                                <a href="" class="btn btn-danger btn-block">Remove</a>
                            </td>
                            <td>
                                <input type="button" style="background-color: #f57224" value="Add To Cart" class="btn btn-primary btn-block" >
                                <a href="" class="btn btn-danger btn-block">Remove</a>
                            </td>
                            <td>
                                <input type="button" style="background-color: #f57224" value="Add To Cart" class="btn btn-primary btn-block">
                                <a href="" class="btn btn-danger btn-block">Remove</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('user.inc.live chat box')
<!-- ========================================== Footer Bar Bellow Here================================================= -->
@include('user.inc.footer')