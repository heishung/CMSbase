<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="https://marketc.net/images/logo.png">
    <link rel="apple-touch-icon image_src" href="https://marketc.net/images/logo.png">

    <meta property="og:image" content="images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title >Digital payment anywhare, anytime </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.css?ver=1.4">
    <link rel="stylesheet" href="front/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/customstyle.css?ver=1.3">
    <link rel="stylesheet" href="front/Themify/themify-icons/themify-icons.css">
    <script type="text/javascript" src="js/particles.min.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 992px)" href="css/style-mobile.css" >
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">
</head>
<body data-spy="scroll" data-target="#navbar-example">

<div id="wraper background-whitesmoke">
    <?php
    session_start();
    ?>
    <div class="position-fixed col-lg-4 col-xl-4 col-md-5 col-xs-10 col-sm-10 form-contact modal-content w-100  " style="right: 0%;z-index: 112;top: 32%;display: none;" >
        <div class="modal-header">
            <h6 class="mx-auto modal-title text-capitalize" id="exampleModalLabel">ASK A QUESTION</h6>

            <button type="button" class="close pl-0 ml-0" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="needs-validation" novalidate="" name="contactform" method="post" action="send_form_email.php">

                <div class="form-row mb-2">
                    <div class="col-md-12 mb-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipNamePrepend"><i class="text-primary fas fa-user"></i></span>
                            </div>
                            <input name="name" type="text" class="form-control" id="validationTooltipName" placeholder="Name" aria-describedby="validationTooltipNamePrepend" required="">
                            <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipPhonePrepend"><i class="fas fa-phone text-primary"></i></span>
                            </div>
                            <input name="telephone" type="tel" maxlength="11" minlength="10" class="form-control" id="validationTooltipPhone" placeholder="Phone" aria-describedby="validationTooltipPhonePrepend" required="">
                            <div class="invalid-tooltip">
                                Please choose a unique and valid Phone.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipEmailPrepend"><i class="text-primary fas fa-envelope"></i></span>
                            </div>
                            <input name="email" type="email" class="form-control" id="validationTooltipEmail" placeholder="Email" aria-describedby="validationTooltipEmailPrepend" required="">
                            <div class="invalid-tooltip">
                                Please choose a unique and valid Email.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="text-primary fab fa-font-awesome-flag"></i></span>
                            </div>
                            <input name="country" type="text" class="form-control" id="validationTooltipUsername" placeholder="Country" aria-describedby="validationTooltipUsernamePrepend" required="">
                            <div class="invalid-tooltip">
                                Please choose a unique and valid country.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipCountryPrepend"><i class="text-primary fas fa-comment"></i></span>
                            </div>
                            <textarea style="height: 85px;" name="comments" type="text" class="form-control" id="validationTooltipCountry" placeholder="Message" aria-describedby="validationTooltipCountryPrepend" required=""></textarea>
                            <div class="invalid-tooltip">
                                Please choose a unique and valid Message.
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Send</button>
            </form>
        </div>
    </div>
    <div class="btn-contact-form" ><img style="max-width: 53px;object-fit: fill;left: -17%;position: absolute;top: -17%;" src="images/clipboard-with-pencil.png" alt=""></div>
<div id="mobile" class="">
    <?php require 'mb/header-m.php'?>
    <div class="clearfix"></div>
    <div class="m-container">
        <div class=" font-size-15 mx-auto font-fm-montserrat-extrabold color-title-m text-center text-uppercase" style="position: relative;line-height: 50px">
            documentation
        </div>
        <div class="pb-5 border-bottom" id="ss2" style="background-image: url(images/bg-m-resources.jpg);background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;cursor: -webkit-grab;">

            <div class="clearfix"></div>
            <div class="d-flex flex-wrap text-white">
                <div class="p-2 col-6 pl-4 pr-4 mb-4">
                    <div class="h4 title-item1-ss2" style="position: relative">
                        Code Review
                    </div>
                    <p class="des-item1-ss2 text-capitalize">An unpreceadented level</p>
                    <div class="content-item1-ss2">
                        <p class="text-justify">CMK Core is security software that helps protect assets worth billions of dollars, so every code change needs to be reviewed by experienced developers.</p>
                        <p class="text-justify">It can take a long time for other developers to review your pull requests. Remember that all reviewers are taking time away from their own projects to review your pull requests, so be patient and respectful of their time.</p>
                        <p class="text-justify">Please also consider helping to review other people’s pull requests. You don’t need to be an expert in CMK, the CMK Core codebase, or C++ (although all these things help). There are almost always open pull requests that any programmer can review.</p>
                    </div>
                </div>
                <div class="p-2 col-6 pl-4 pr-4 mb-4">
                    <div class="h4 title-item1-ss2" style="position: relative">
                        Starter Projects
                    </div>
                    <p class="des-item1-ss2 text-capitalize">An unpreceadented level</p>
                    <div class="content-item1-ss2">
                        <p class="text-justify">Do you want to begin coding for CMK Core but don’t have a specific improvement in mind? Here are a few ideas:</p>
                        <p class="text-justify">Fix existing issues: the issue tracker is the best place to find a useful way to contribute to CMK Core. Before starting to write any patches for issues you find, you may want to comment on the issue to make sure nobody else is already working on it.</p>
                        <p class="text-justify">Write tests: CMK Core is covered by many tests, but patches that improve test coverage are always welcome and are a great way to build familiarity with the codebase. See the documentation about automated testing.</p>
                    </div>
                </div>
                <div class="p-2 col-6 pl-4 pr-4 mb-4">
                    <div class="h4 title-item1-ss2" style="position: relative">
                        Documentation
                    </div>
                    <p class="des-item1-ss2 text-capitalize">An unpreceadented level</p>
                    <div class="content-item1-ss2">
                        <p class="text-justify">If you are interested in learning more about the technical details of CMK and how to use existing tools and APIs, it is recommended you start by exploring the developer documentation.</p>
                    </div>
                    <form action="">
                        <input aria-describedby="basic-addon2" aria-label="" class="form-control" placeholder="Search the Glossary, RPCS, ...." style="color: #2fb4e8;border-radius: 5px ;border: #2fb4e8 solid 1px; line-height: 30px; max-width: 464px;margin-right: 15px" type="text">
                    </form>
                </div>
                <div class="p-2 col-6 pl-4 pr-4 mb-4">
                    <div class="h4 title-item1-ss2" style="position: relative">
                        Developer communities
                    </div>
                    <p class="des-item1-ss2 text-capitalize">An unpreceadented level</p>
                    <div class="content-item1-ss2">
                        <p class="text-justify">CMK Core is security software that helps protect assets worth billions of dollars, so every code change needs to be reviewed by experienced developers.</p>
                        <ul class="text-capitalize">
                            <li>RC Channel #marketC-core-dev on freenode.</li>
                            <li>CMK Core Slack Channel</li>
                            <li>CMK StackExchange</li>
                            <li>CMKTalk Development &amp; Technical Discussion Forum</li>
                        </ul>
                    </div>
                </div>
                <div class="p-2 col-6 pl-4 pr-4 mb-4">
                    <div class="h4 title-item1-ss2" style="position: relative">
                        CMK Core contributors
                    </div>
                    <p class="des-item1-ss2 text-capitalize">Ordered by number of commits</p>
                    <div class="content-item1-ss2">
                        <p class="text-justify">CMK Core is security software that helps protect assets worth billions of dollars, so every code change needs to be reviewed by experienced developers.</p><!--<div class="row">
                                            <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                            <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></di<div class=" col-6" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                <div class=" collapse w-100 row pl-3 pr-0" id="collapseExample1">
                                                    <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                    <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                    <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                    <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                    <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                    <div class=" col-6 mb-2" ><a href="#">Wladimir J. van der Laan (5366)  </a></div>
                                                </div>
                                            </div>
                                            <p class="mt-3">
                                                <a class="text-capitalize" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    <i class="fas fa-chevron-down mr-2"></i> show more
                                                </a>
                                            </p>
                                        </div>-->
                    </div>
                </div>
                <div class="p-2 col-6 pl-4 pr-4 mb-4">
                    <div class="h4 title-item1-ss2" style="position: relative">
                        more free software projects
                    </div>
                    <p class="des-item1-ss2 text-capitalize">Ordered by number of commits</p>
                    <div class="content-item1-ss2">
                        <p class="text-justify">Want to contribute to a different project?</p>
                        <ul class="text-capitalize">
                            <li>MarKet Pay</li>
                            <li>MarKet Wallet</li>
                            <li>MarKet Trade</li>
                            <li>MarKet Game</li>
                            <li>API</li><!--<li>Armory - A wallet with enhanced security features, written in C++..</li>
                                            <li>BFGMiner - A modular miner, written in C.</li>
                                            <li>CMK Wallet - A SPV wallet for Android and Blackberry, written in Java.</li>
                                            <li>marketCj - A library for SPV wallets, written in Java.</li>
                                            <li>btcd - A full node, written in Go.</li>
                                            <li>btcwallet - A hierarchical deterministic wallet daemon, written in Go.</li>
                                            <li>ckpool - A fast mining pool server application, written in C.</li>
                                            <li>Electrum - A fast server-trusting wallet, written in Python.</li>
                                            <li>Eloipool - A fast mining pool server application, written in Python.</li>
                                            <li>Haskoin - An implementation of the CMK protocol, written in Haskell.</li>
                                            <li>LibmarketC - A cross-platform development toolkit, written in C++.</li>
                                            <li>LibmarketC Server - A full node and query server, built on libmarketC.</li>
                                            <li>LibmarketC Explorer - A command line tool, built on libmarketC.</li>
                                            <li>Libblkmaker - A client library for the getblocktemplate mining protocol, written in C.</li>
                                            <div class="collapse" id="collapseExample">
                                                <li>LibmarketC - A cross-platform development toolkit, written in C++.</li>
                                                <li>LibmarketC Server - A full node and query server, built on libmarketC.</li>
                                                <li>LibmarketC Explorer - A command line tool, built on libmarketC.</li>
                                            </div>
                                            <p class="mt-3">
                                                <a class="text-capitalize" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    <i class="fas fa-chevron-down mr-2"></i> show more
                                                </a>
                                            </p>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix "></div>
        <div class="pt-5 pb-5 border-bottom background-ebebeb" id="ss5">
            <div class="container">
                <div class="row ">
                    <div class=" font-size-15 mx-auto font-fm-montserrat-extrabold color-title-m text-center text-uppercase" style="position: relative">
                        our partners
                    </div>
                </div>
                <!-- <div class="row"><p class="mx-auto text-left text-justify">Our Board of Advisors includes pedigreed global business professionals and influencers, it is not stacked with pre-ICO hype-makers, all are our long-term trusted business partners.</p></div>-->

                <div class="d-flex flex-wrap justify-content-around m-box-partners">
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid"  alt="Card image cap" src="images/ourpartners/1.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/2.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/3.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/4.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/5.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/6.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/7.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/8.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/9.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/10.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/11.png">
                    </div>
                    <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                        <img class="img-fluid" alt="Card image cap" src="images/ourpartners/12.png">
                    </div>

                </div>
            </div>

        </div>
        <div class="clearfix "></div>
    </div>
    <div class="clearfix"></div>
    <?php require 'mb/ft-m.php'?>
</div>
<a href="https://t.me/joinchat/HiPVKRMFh7-oleJ_dTpcVA" target="_blank" class="fixed-btn w-inline-block"><img src="images/tele.png" class="plane-ico" data-ix="plane-loop" ></a>
</div>

<script src="js/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="js/jquery.shorten.min.js"></script>
<!-- Swiper JS -->
<script src="js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        loop:true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 70,
            stretch: 70,
            depth: 70,
            modifier: 2,
            slideShadows : false,
        },
       /* pagination: {
            el: '.swiper-pagination',
        },*/
    });
</script>
<style>
    .swiper-slide{

        min-height: 309px;
    }
</style>

<script type="text/javascript">

    $(".m-comment").shorten({
        "showChars" : 100,
        "moreText"  : "<i class=\"fas fa-circle\"></i> <i class=\"fas fa-circle\"></i> <i class=\"fas fa-circle\"></i>",
        "lessText"  : "<i class=\"fas fa-circle\"></i> <i class=\"fas fa-circle\"></i> <i class=\"fas fa-circle\"></i>",
    });
</script>
<?php

if (isset($_SESSION["mes"]) ) {
    $mes=$_SESSION["mes"];
    echo
    "<script type='text/javascript'> 
     $.notify({   
                        message: 'Send sussces'
                    },{
                    
                        type: 'success'
                    });
</script>"
    ;
    session_unset("mes");

}
if (isset($_SESSION["meser"]) ) {
    $mes=$_SESSION["meser"];
    echo
    "<script type='text/javascript'> 
     $.notify({   
                        message: 'Send error'
                    },{
                    
                        type: 'success'
                    });
</script>"
    ;
    session_unset("meser");

}
?>

<script>

    $(function () {
        $('#myTab li:first-child a').tab('show');
    });
    function goToByScroll(id){
        // Reove "link" from the ID
        id= id.replace("link", "");
        // Scroll
        $('html,body').animate({
                scrollTop: $("#"+id).offset().top},
            'slow');
    }

    $(".navbar-example > ul > li > a").click(function(e) {
        // Prevent a page reload when a link is pressed
        e.preventDefault();

        // Call the scroll function
        goToByScroll($(this).attr("id"));
    });
</script>
<script>

    $( ".menu-button" ).click(function() {

        $( "#mySidenav" ).slideToggle( "slow",function () {
            $(".fa-window-minimize").toggleClass('fa-rt');

        } );

    });

    $( ".btn-link" ).click(function() {

        $(this).find(".fa-angle-right").toggleClass('fa-angle-r');

    });


</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".btn-contact-form").click(function(){
            $(".form-contact").toggle();
        });

        $(".close").click(function () {
            $('.form-contact').css('display','none')
        });


        /*  $( ".btn-doc-show" ).click(function() {
              $(this).animate({ "right": "-10%" }, "slow" );
              $( "#doc" ).animate({ "right": "0%" }, "slow" );

          });

          $( ".btn-doc-hide" ).click(function(){
              $( "#doc" ).animate({ "right": "-15%" }, "slow" );
              $(".btn-doc-show").animate({ "right": "-1.6%" }, "slow" );
          });
          $(document).ready(function () {
              if (!$.browser.webkit) {
                  $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
              }
          });*/
    });

</script>
<script>
    function cl() {
        $('.as').on('click', function () {
            var idcl = $(this).data("getid");

            $('html,body').animate({
                    scrollTop: $( '#' + idcl).offset().top},
                'slow');

        })
    }
    cl()
</script>



<!--mobile-->

</body>
</html>