<div class="ms-fullscreen-template" id="slider1-wrapper">
    <!-- masterslider -->
    <?php
        $xeffect=array(
                    "first"=>array("data-type"=>"rotate3dtop(70,0,0,180)","data-duration"=>"2000"),
                    "second"=>array("data-type"=>"rotate3dbottom(-70,0,0,180)","data-duration"=>"2000","data-delay"=>"300"),
                    "third"=>array("data-type"=>"skewleft(10,100,true)","data-duration"=>"2000","data-delay"=>"300"),
                    "fourth"=>array("data-type"=>"rotateleft(5,long,br,true))","data-duration"=>"2000","data-delay"=>"300"),
                    //"fifth"=>array("data-type"=>"bottom(50, true)","data-duration"=>"2000","data-delay"=>"300")
                    //"sixth"=>array("data-type"=>"rotate3dtop(70,0,0,180)","data-duration"=>"2000","data-delay"=>"300")
                );
        function select_effect($i)
            {
                switch ($i)
                    {
                        case 1:
                                $ret="first";
                                break;
                        case 2:
                                $ret="second";
                                break;
                        case 3:
                                $ret="third";
                                break;
                        case 4:
                                $ret="fourth";
                                break;
                        case 5:
                                $ret="fifth";
                                break;
                        default:
                                break;
                    }
                return $ret;
            }
    ?>
    <div class="master-slider ms-skin-default has-thumbnails" id="masterslider">
        <?php
           $x=0;
           foreach($art as $value)
                {
                    $j=$x+1;
                    $effect=($x==0)?$xeffect["first"]:$xeffect[select_effect(rand(1,4))];
                    echo'<div class="ms-slide ms-slide'.$j.'" data-delay = "7" >
                            <div class="ms-slide-pattern bg-pattern dark-screen" ></div>
                            <img src = "'.base_url().$value->image.'" data-src = "'.base_url().$value->image.'" alt = "'.$value->title.'" >        
                            <div class="ms-layer ms-layer1 ms-text-size3 text-uppercase" data-type = "text" data-effect = "'.$effect['data-type'].'" data-duration = "2000" data-ease = "easeInOutQuint" >
                                <div class="container" >
                                    <h2>'.$value->title.'</h2>
                                </div>
                            </div>';
                            $effect=($x==0)?$xeffect["first"]:$xeffect[select_effect(rand(1,4))];
                           echo' <div class="ms-layer ms-layer2 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type = "text" data-effect = "'.$effect['data-type'].'" data-duration="2000" data-ease="easeInOutQuint" >
                                <div class="container" >
                
                                    <h3 class="text-uppercase" >'.$value->caption.'</h3 >
                
                                </div >
                            </div>';
                           $effect=$xeffect[select_effect(rand(1,4))];

                            echo'<div class="ms-layer ms-layer3 ms-text-size7 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type = "text" data-effect = "'.$effect['data-type'].'" data-duration = "2000" data-delay = "300" data-ease = "easeInOutQuint" >
                                <div class="container" >
                                    <a class="button" href= "'.$value->related.'" > Learn More <i class="fa fa-angle-double-right" ></i></a>
                                </div>
                            </div>
                            <div class="ms-thumb">
                                <img alt = "img" src = "'.base_url().$value->image.'" >
                            </div>
                         </div ><!-- .ms - slide-->
                    
                    ';
                    $x++;
               }
        ?>

        <!--div class="ms-slide ms-slide2 text-right" data-delay="7">
            <div class="ms-slide-pattern bg-pattern dark-screen"></div>
            <img src="masterslider/blank.gif" data-src="images/slider/2.jpg" alt="lorem ipsum dolor sit">
            <div class="ms-layer ms-layer1 ms-text-size1" data-type="text" data-effect="skewleft(10,100,true)" data-duration="1500" data-ease="easeInOutQuint">
                <div class="container">
                    <h2 class="text-highlight text-uppercase">Sale</h2>
                </div>
            </div>
            <div class="ms-layer ms-layer2 ms-text-size5" data-type="text" data-effect="skewleft(10,100,true)" data-duration="1500" data-delay="300" data-ease="easeInOutQuint">
                <div class="container text-right">
                    <h2 class="text-uppercase">
                        Duis autem vel eum iriure<br>
                        Lorem ipsum dolor
                    </h2>
                </div>
            </div>
            <div class="ms-layer ms-layer3 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="skewleft(10,100,true)" data-duration="1500" data-delay="600" data-ease="easeInOutQuint">
                <div class="container">
                    <p>
                        Duis autem vel eum iriure dolor in hendrerit in vulputate<br>
                        velit esse molestie consequat, vel illum dolore eu.
                    </p>
                </div>
            </div>
            <div class="ms-layer ms-layer4 ms-text-size7 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="skewleft(10,100,true)" data-duration="1500" data-delay="900" data-ease="easeInOutQuint">
                <div class="container">
                    <a class="button-simple" href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="ms-thumb"><img alt="img" src="images/slider/2.jpg"></div>
        </div><!-- .ms-slide -->
        <!--div class="ms-slide ms-slide3 text-right" data-delay="7">
            <div class="ms-slide-pattern bg-pattern dark-screen"></div>
            <img src="masterslider/blank.gif" data-src="images/slider/3.jpg" alt="lorem ipsum dolor sit">
            <div class="ms-layer ms-layer1 ms-text-size2" data-type="text" data-effect="rotateleft(5,long,br,true)" data-duration="1500" data-ease="easeInOutQuint">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6">
                            <h2 class="text-uppercase text-highlight">For men</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-layer ms-layer2 ms-text-size5" data-type="text" data-effect="bottom(70, true)" data-duration="2000" data-delay="1000" data-ease="easeInOutQuint">
                <div class="container text-uppercase">
                    <div class="row">
                        <div class="col-xxl-6">
                            <h3>
                                Duis autem vel eum iriure<br>
                                Lorem ipsum dolor
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-layer ms-layer3 ms-text-size7 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="bottom(50, true)" data-duration="2000" data-delay="1400" data-ease="easeInOutQuint">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6">
                            <a class="button-simple" href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-thumb"><img alt="img" src="images/slider/3.jpg"></div>
        </div--><!-- .ms-slide -->

    </div>
    <!-- end of masterslider -->
</div><!-- .ms-fullscreen-template -->
        