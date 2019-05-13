@extends('layout.main')

@section('title', 'Главная')

@section('content')
    <div class="topBlock">
        <h1 align="center" class="greyC1">We build it with passion</h1>
        <h5 align="center" class="greyC2" style="line-height: 30px">Just to be clear, we do this for fun not for you, just kidding</h5>

        <button class="buttonRM">Read more</button>

        <div class="divCircles">
            <div class="circles1"></div>
            <div class="circles2"></div>
            <div class="circles3"></div>
        </div>
    </div>

    <div class="mainBlock">
        <div class="verticalLine">
            <div class="verticalCircles1"></div>
            <div class="verticalCircles2"></div>
            <div class="verticalCircles3"></div>
            <div class="verticalCircles4"></div>

            <div class="textCircles1">
                <h1 align="right">2011</h1>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
            </div>

            <div class="textCircles2">
                <h1 align="left">2012</h1>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
            </div>

            <div class="textCircles3">
                <h1 align="right">2013</h1>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
            </div>

            <div class="textCircles4">
                <h1 align="left">2014</h1>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
            </div>
        </div>
    </div>

    <div class="ourTeam">
        <h1 align="center" class="greyC1">This is our team</h1>
        <h5 align="center" class="greyC2" style="line-height: 30px">We are small but effective end ...</h5>

        <div class="memberTeamBlock">
            <div class="memberTeam1">
                <img width="170px" src="/img/Layer3.png"/>

                <h1 align="center" class="greyC1">Mark Once</h1>
                <h5 align="center" class="greyC2" style="line-height: 30px">Designer & Front-End Developer</h5>

                <div class="memberTeamIcons">
                    <img src="/img/instagram.png" />
                    <img src="/img/twitter.png" />
                </div>
            </div>

            <div class="memberTeam2">
                <img width="170px" src="/img/Layer13.png"/>

                <h1 align="center" class="greyC1">Justin Twice</h1>
                <h5 align="center" class="greyC2" style="line-height: 30px">Founder & CEO</h5>

                <div class="memberTeamIcons">
                    <img src="/img/instagram.png" />
                    <img src="/img/twitter.png" />
                </div>
            </div>

            <div class="memberTeam3">
                <img width="170px" src="/img/Layer2.png"/>

                <h1 align="center" class="greyC1">Antonio Never</h1>
                <h5 align="center" class="greyC2" style="line-height: 30px">Someone & Somewhere</h5>

                <div class="memberTeamIcons">
                    <img src="/img/instagram.png" />
                    <img src="/img/twitter.png" />
                </div>
            </div>
        </div>
    </div>

    <div class="hor-verLine"></div>

    <div class="ourServiceBlock">
        <h1 align="center" class="greyC3">We provide you everything</h1>
        <h5 align="center" class="greyC2" style="line-height: 30px">Maybe not everything, but we provide you some stuff.</h5>

        <div class="serviceBlock">
            <div class="serviceBlock1">
                <img width="170px" src="/img/Love.png"/>

                <h1 align="center" class="greyC3">Some Analytics</h1>
                <h5 align="center" class="greyC4" style="line-height: 21px; font-size: 12px;">Aenean nisi lectus, convallis non orem sit amet, moncus malesuada justo</h5>
            </div>

            <div class="serviceBlock2">
                <img width="170px" src="/img/Love2.png"/>

                <h1 align="center" class="greyC3">We provide you love</h1>
                <h5 align="center" class="greyC4" style="line-height: 21px; font-size: 12px;">Aenean nisi lectus, convallis non orem sit amet, moncus malesuada justo</h5>
            </div>

            <div class="serviceBlock3">
                <img width="170px" src="/img/Love1.png"/>

                <h1 align="center" class="greyC3">And Some Cloud</h1>
                <h5 align="center" class="greyC4" style="line-height: 21px; font-size: 12px;">Aenean nisi lectus, convallis non orem sit amet, moncus malesuada justo</h5>
            </div>
        </div>

        <div class="blogBlock">
            <button class="buttonVOB">Visit our blog</button>
        </div>
    </div>

    <div class="hor-verLine2"></div>

    <footer>
        <h1 align="center" class="greyC1">Contact Us</h1>
        <h5 align="center" class="greyC2" style="line-height: 30px">We know what we need to do</h5>

        <div class="footerBlock">
            <div class="footerBlock1">
                <img height="20px" src="/img/phone.png"/>

                <h5 align="center" class="greyC2" style="line-height: 21px; font-size: 12px;">555-222-333</h5>
            </div>

            <div class="footerBlock2">
                <img height="20px" src="/img/PIN2.png"/>

                <h5 align="center" class="greyC2" style="line-height: 21px; font-size: 12px;">Here is some address</h5>
            </div>

            <div class="footerBlock3">
                <img height="20px" src="/img/MAIL.png"/>

                <h5 align="center" class="greyC2" style="line-height: 21px; font-size: 12px;">somemail@hotmail.com</h5>
            </div>
        </div>

        <form id="feedbackForm">
            <input type="text" placeholder="Full Name"/>

            <input type="text" placeholder="Email"/>

            <input type="text" placeholder="Number"/>

            <textarea>Write your Message here...</textarea>

            <input id="feedbackSubmit" type="submit" value="Submit"/>
        </form>

        <p align="center" class="copyrightP greyC1">Copyright @ Kenan Haminic. All right reserved.</p>

    </footer>

@endsection
