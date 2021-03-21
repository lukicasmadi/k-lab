@extends('layouts.template_login')

@section('content')
<div class="container">
    <div class="row">
        <div class="centered">
            <div class="col-sm-12">
                <div class="page-header">
                <div class="col-sm-6 head-logo">
                    <img src="{{ secure_asset('/img/korlantas.png') }}">
                    <h3>korlantas polri</h3>
                </div>
            <div class="toggle-switch">
                <label class="switch s-icons s-outline  s-outline-secondary">
                    <input type="checkbox" checked="" class="theme-shifter" id="changeTheme">
                    <span class="slider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="83" height="19.762" viewBox="0 0 83 19.762" class="feather feather-sun">
                        <g id="Group_3821" data-name="Group 3821" transform="translate(-1550 -140)">
                            <text id="gelap" transform="translate(1580 155)" fill="#fff" font-size="16" font-family="Bahnschrift" letter-spacing="0.05em"><tspan x="0" y="0">GELAP</tspan></text>
                            <path id="moon" d="M18.248,17,18,17A11,11,0,0,1,7,6q0-.124,0-.248A8,8,0,1,0,18.248,17Zm1.218-2.116A9.071,9.071,0,0,1,18,15,9,9,0,0,1,9.822,2.238a10,10,0,1,0,11.94,11.94A8.932,8.932,0,0,1,19.466,14.881Z" transform="translate(1548 137.762)" fill="#fff" fill-rule="evenodd"/>
                        </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="20" viewBox="0 0 94 20" class="feather feather-moon">
                        <g id="Group_3823" data-name="Group 3823" transform="translate(-1670 -140)">
                            <text id="terang" transform="translate(1700 155)" fill="#fff" font-size="16" font-family="Bahnschrift" letter-spacing="0.05em"><tspan x="0" y="0">TERANG</tspan></text>
                            <path id="sun" d="M13,22H11V19h2Zm5.364-2.222-2.121-2.121,1.414-1.414,2.122,2.122-1.413,1.413Zm-12.728,0L4.219,18.364l2.12-2.122,1.415,1.414-2.12,2.121ZM12,17.007A5.007,5.007,0,1,1,17.007,12,5.007,5.007,0,0,1,12,17.007Zm0-8.014A3.007,3.007,0,1,0,15.007,12,3.007,3.007,0,0,0,12,8.993ZM22,13H19V11h3ZM5,13H2V11H5ZM17.654,7.758,16.241,6.343l2.121-2.122,1.415,1.415L17.655,7.757Zm-11.313,0L4.221,5.637,5.636,4.223l2.12,2.122L6.342,7.757ZM13,5H11V2h2Z" transform="translate(1668.002 138)" fill="#fff"/>
                        </g>
                        </svg>
                    </span>
                </label>
            </div>
        </div>
            <div class="col-sm-8 offset-md-2">
                <img class="logo-presisi" src="{{ secure_asset('/img/presisi.png') }}">
            </div>
            <div class="col-sm-2 offset-md-5">
            <a href="{{ route('login') }}">
                <img class="button-login" src="{{ secure_asset('/img/loginon.png') }}">
                <div class="text-center text-login">Login</div>
            </a>
            </div>
            <div class="article-bottom">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="730" height="12" viewBox="0 0 730 12"><defs><style>.a{fill:none;stroke:#00adef;}.b,.c{fill:#00adef;}.d,.e{stroke:none;}.e{fill:#00adef;}</style></defs><g transform="translate(-140 -783)"><line class="a" x2="710" transform="translate(140.5 790)"/><g transform="translate(140 783)"><path class="b" d="M0-.052H25.578l4.422,7H0Z" transform="translate(0 0.052)"/><path class="b" d="M-3.068,0H3.219l3,4.948H0Z" transform="translate(32.44 0.012)"/><path class="b" d="M-3.068,0H.521l3,4.948H0Z" transform="translate(41.727 0.012)"/><path class="b" d="M-3.068,0H-.316l3,4.948H0Z" transform="translate(48.316 0.012)"/></g><g class="c" transform="translate(870 785) rotate(90)"><path class="d" d="M 9.028401374816895 6.5 L 0.9715985655784607 6.5 L 5 0.8602380156517029 L 9.028401374816895 6.5 Z"/><path class="e" d="M 5 1.720461845397949 L 1.94318675994873 6 L 8.05681324005127 6 L 5 1.720461845397949 M 5 0 L 10 7 L 0 7 L 5 0 Z"/></g><g class="c" transform="translate(860 785) rotate(90)"><path class="d" d="M 5 6.499995231628418 C 4.208119869232178 6.499995231628418 3.519030094146729 6.079625606536865 3.156680107116699 5.375515460968018 C 2.794329881668091 4.671395301818848 2.852790117263794 3.866335391998291 3.31306004524231 3.221955537796021 C 3.707129955291748 2.670245409011841 4.322000026702881 2.353825330734253 5 2.353825330734253 C 5.677999973297119 2.353825330734253 6.292870044708252 2.670245409011841 6.68694019317627 3.221955537796021 C 7.147210121154785 3.866335391998291 7.20566987991333 4.671395301818848 6.843319892883301 5.375515460968018 C 6.480969905853271 6.079625606536865 5.791880130767822 6.499995231628418 5 6.499995231628418 Z"/><path class="e" d="M 5 2.853825092315674 C 4.485519886016846 2.853825092315674 4.01894998550415 3.093924999237061 3.71992015838623 3.512575149536133 C 3.370659828186035 4.001534938812256 3.326300144195557 4.612434864044189 3.601260185241699 5.146724700927734 C 3.876220226287842 5.681015014648438 4.399109840393066 5.999995231628418 5 5.999995231628418 C 5.600890159606934 5.999995231628418 6.123780250549316 5.681015014648438 6.398739814758301 5.146724700927734 C 6.673700332641602 4.612434864044189 6.629340171813965 4.001534938812256 6.28007984161377 3.512575149536133 C 5.98105001449585 3.093924999237061 5.514480113983154 2.853825092315674 5 2.853825092315674 M 5 1.853825092315674 C 5.790355205535889 1.853825092315674 6.580709934234619 2.212995052337646 7.093810081481934 2.931334972381592 C 8.310270309448242 4.634374618530273 7.092880249023438 6.999995231628418 5 6.999995231628418 C 2.907120227813721 6.999995231628418 1.689729690551758 4.634374618530273 2.906189918518066 2.931334972381592 C 3.419290065765381 2.212995052337646 4.209644794464111 1.853825092315674 5 1.853825092315674 Z"/></g></g></svg>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="">
                                <div class="text-center title-news">BERITA TERKINI</div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="row">
                            <svg class="scale-rotate" xmlns="http://www.w3.org/2000/svg" width="730" height="12" viewBox="0 0 730 12"><defs><style>.a{fill:none;stroke:#00adef;}.b,.c{fill:#00adef;}.d,.e{stroke:none;}.e{fill:#00adef;}</style></defs><g transform="translate(-140 -783)"><line class="a" x2="710" transform="translate(140.5 790)"/><g transform="translate(140 783)"><path class="b" d="M0-.052H25.578l4.422,7H0Z" transform="translate(0 0.052)"/><path class="b" d="M-3.068,0H3.219l3,4.948H0Z" transform="translate(32.44 0.012)"/><path class="b" d="M-3.068,0H.521l3,4.948H0Z" transform="translate(41.727 0.012)"/><path class="b" d="M-3.068,0H-.316l3,4.948H0Z" transform="translate(48.316 0.012)"/></g><g class="c" transform="translate(870 785) rotate(90)"><path class="d" d="M 9.028401374816895 6.5 L 0.9715985655784607 6.5 L 5 0.8602380156517029 L 9.028401374816895 6.5 Z"/><path class="e" d="M 5 1.720461845397949 L 1.94318675994873 6 L 8.05681324005127 6 L 5 1.720461845397949 M 5 0 L 10 7 L 0 7 L 5 0 Z"/></g><g class="c" transform="translate(860 785) rotate(90)"><path class="d" d="M 5 6.499995231628418 C 4.208119869232178 6.499995231628418 3.519030094146729 6.079625606536865 3.156680107116699 5.375515460968018 C 2.794329881668091 4.671395301818848 2.852790117263794 3.866335391998291 3.31306004524231 3.221955537796021 C 3.707129955291748 2.670245409011841 4.322000026702881 2.353825330734253 5 2.353825330734253 C 5.677999973297119 2.353825330734253 6.292870044708252 2.670245409011841 6.68694019317627 3.221955537796021 C 7.147210121154785 3.866335391998291 7.20566987991333 4.671395301818848 6.843319892883301 5.375515460968018 C 6.480969905853271 6.079625606536865 5.791880130767822 6.499995231628418 5 6.499995231628418 Z"/><path class="e" d="M 5 2.853825092315674 C 4.485519886016846 2.853825092315674 4.01894998550415 3.093924999237061 3.71992015838623 3.512575149536133 C 3.370659828186035 4.001534938812256 3.326300144195557 4.612434864044189 3.601260185241699 5.146724700927734 C 3.876220226287842 5.681015014648438 4.399109840393066 5.999995231628418 5 5.999995231628418 C 5.600890159606934 5.999995231628418 6.123780250549316 5.681015014648438 6.398739814758301 5.146724700927734 C 6.673700332641602 4.612434864044189 6.629340171813965 4.001534938812256 6.28007984161377 3.512575149536133 C 5.98105001449585 3.093924999237061 5.514480113983154 2.853825092315674 5 2.853825092315674 M 5 1.853825092315674 C 5.790355205535889 1.853825092315674 6.580709934234619 2.212995052337646 7.093810081481934 2.931334972381592 C 8.310270309448242 4.634374618530273 7.092880249023438 6.999995231628418 5 6.999995231628418 C 2.907120227813721 6.999995231628418 1.689729690551758 4.634374618530273 2.906189918518066 2.931334972381592 C 3.419290065765381 2.212995052337646 4.209644794464111 1.853825092315674 5 1.853825092315674 Z"/></g></g></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right more-article">
                    <a href="/article/all">
                        Lihat Selangkapnya <img src="{{ secure_asset('/img/chevron_big_left.png') }}">
                    </a>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="col-sm-12 home-article">
                            <a href="/article/detail">
                                <img src="{{ secure_asset('/img/article/img_20200113.jpg') }}">
                                <p>
                                <label>Senin, 10 Apr 2021</label>
                                korlantas pimpin pemberangkatan tim pamatwil operasi lilin tahun 2020
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-sm-12 home-article">
                        <a href="/article/detail">
                            <img src="{{ secure_asset('/img/article/img_20200110.jpg') }}">
                            <p>
                            <label>Senin, 10 Apr 2021</label>
                            korlantas pimpin pemberangkatan tim pamatwil operasi lilin tahun 2020
                            </p>
                        </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-sm-12 home-article">
                            <a href="/article/detail">
                                <img src="{{ secure_asset('/img/article/img_20200111.jpg') }}">
                                <p>
                                <label>Senin, 10 Apr 2021</label>
                                korlantas pimpin pemberangkatan tim pamatwil operasi lilin tahun 2020
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection