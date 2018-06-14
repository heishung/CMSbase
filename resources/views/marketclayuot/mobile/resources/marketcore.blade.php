@extends('marketclayuot.index')
@section('m-content')
<div class=" font-size-15 mx-auto font-fm-montserrat-extrabold color-title-m text-center text-uppercase" style="position: relative;line-height: 50px">
    documentation
</div>
<div class="row">
    <div class="col-10 mx-auto">
        <h6 class="text-capitalize"><a class="pt-2" href="https://github.com/cmkcoin/cmkcore" style="text-decoration: underline;">Download MarketC Core</a></h6>
        <p class="text-left text-justify">MarketC Core is programmed to decide which block chain contains valid transactions. The users of MarketC Core only accept transactions for that block chain, making it the MarketC block chain that everyone else wants to use It is these users who keep MarketC decentralized. They individually run their own MarketC Core full nodes, and each of those full nodes separately follows the exact same rules to decide which block chain is valid.<br>
            There’s no voting or other corruptible process involved: there’s just individual software following identical rules—”math”—to evaluate identical blocks and coming to identical conclusions about which block chain is valid.<br>
            This shared agreement (called consensus) allows people like you to only accept valid marketCs, enforcing MarketC’s rules against even the most powerful miners.<br>
            In addition to improving MarketC’s decentralization, MarketC Core users get better security for their marketCs, privacy features not available in other wallets, a choice of user interfaces and several other powerful features.</p>
    </div>
    <div class="col-10 mx-auto">
        <ul class="fa-ul bc-core-2">
            <li class="mb-2">
                <p><span class="fa-li fa fa-download fa-2x"></span> <b><a href="https://github.com/cmkcoin/cmkcore">Download</a></b><br>
                    Download MarketC Core&nbsp;0.16.0</p>
            </li>
            <li class="mb-2">
                <p><span class="fa-li fa fa-rocket fa-2x"></span> <b><a href="#">Features</a></b><br>
                    Discover what MarketC Core offers</p>
            </li>
            <li class="mb-2">
                <p><span class="fa-li fa fa-question fa-2x"></span> <b><a href="#">Get help</a></b><br>
                    Documentation, forums, chat rooms</p>
            </li>
            <li class="mb-2">
                <p><span class="fa-li fa fas fa-code-branch fa-2x"></span> <b><a href="#">Contribute</a></b><br>
                    Code, translations, and more</p>
            </li>
        </ul>
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
                <img class="img-fluid"  alt="Card image cap" src="marketc/images/ourpartners/1.png">
            </div>
            <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/2.png">
            </div>
            <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/3.png">
            </div>
            <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/4.png">
            </div>
            <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/5.png">
            </div>
            <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/6.png">
            </div>
            <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/7.png">
            </div>
            <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/8.png">
            </div>
            <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/9.png">
            </div>
            <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/10.png">
            </div>
            <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/11.png">
            </div>
            <div class="p-2 col-lg-3 col-md-4 col-xl-3 col-xs-4 col-sm-4  ">
                <img class="img-fluid" alt="Card image cap" src="marketc/images/ourpartners/12.png">
            </div>

        </div>
    </div>

</div>
<div class="clearfix "></div>
    @endsection