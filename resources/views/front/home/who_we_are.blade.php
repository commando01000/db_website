<div class="container">
                       

    <div class="who-we-section ">
        <div id="youtubeVideo" onclick="closePopup()" style="display: none" class="YouTubePopUp-Wrap"><div class="YouTubePopUp-Content"><span class="YouTubePopUp-Close"></span><iframe  src="{{ Utility::getsettings('who_we_are_link') }}" allowfullscreen=""></iframe></div></div>   
            <div class="box-seat">
                <div class="dsn-v-text">
                    <div class="container-fluid">
                        <h3 style="font-size: 200%;margin-bottom:5px !important;padding-bottom: 0px" class="section-title">World-leading brand specialists.
                            <br>Consulting. Design. Experience.</h3>
                        <div class="box-middle-text">
                            <a  class="vid" onclick="openPopup('{{ Utility::getsettings('who_we_are_link') }}')">
                                    <div class="">
                                    <h4 class="section-title">who we are</h4>     
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="inner-img" data-dsn-grid="moveUp">
                            <img class="" src="{{ asset('assets/front/img/whoweare.png') }}"
                                alt="" style="transform: translate(0%, 6.691%) translate3d(0px, 0px, 0px);">
                        </div>
                    </div>
                </div>
            

            {{-- </div> --}}
            {{-- <div class="pro-text">

            <h2>{{@Utility::getsettings('menu_name_section2')}}</h2>
            <hr>
            <h4>{{@Utility::getsettings('menu_bold_name_section2')}}</h4>
            @if (Utility::getsettings('menu_button_url_section2'))
            <div class="link-custom">
                <a class="image-zoom effect-ajax" href="{{ route('see.all.projects') }}" data-dsn="parallax">
                    <span>{{__('See More')}}</span>
                </a>
            </div>
            @endif

        </div> --}}
        </div>

{{-- <div class="box-seat box-seat-full section-margin">
    <div class="container-fluid">
        <header>
            <div class="container header-hero">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contenet-hero">
                            <h5>Our WOrk</h5>
                            <h1>portfolio</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <div class="root-work">
                <div class="container">
                    <div class="box-title" data-dsn-title="cover">
                        <h2 class="title-cover" data-dsn-grid="move-section" data-dsn-move="-70">Projets</h2>
                    </div>

                    <div class="filterings">
                        <div class="filtering-wrap">
                            <div class="filtering">
                                <div class="selector"></div>
                                <button type="button" data-filter="*" class="active">
                                    All
                                </button>
                                <button type="button" data-filter=".brand">Brand</button>
                                <button type="button" data-filter=".photography">Photography</button>
                                <button type="button" data-filter=".architecture">Architecture</button>
                                <button type="button" data-filter=".video">video</button>

                            </div>
                        </div>
                    </div>

                    <div class="projects-list gallery">
                        <div class="item brand">
                            <a class='effect-ajax' data-dsn-ajax='work' data-dsn-grid='move-up' href='/project-9'>
                                <img class="has-top-bottom" src="assets/img/project/project9/1.jpg" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Brand</h5>
                                    <h4>Time Tag Watch</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item brand">
                            <a class='effect-ajax' data-dsn-ajax='work' data-dsn-grid='move-up' href='/project-4'>
                                <img class="has-top-bottom" src="assets/img/project/project4/2.jpg" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Brand</h5>
                                    <h4>Under Armour</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item photography">
                            <a data-dsn-grid='move-up' href='/project-3'>
                                <img class="has-top-bottom" src="assets/img/project/project3/1.jpg" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Photography</h5>
                                    <h4>Re Styling</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item video">
                            <a href='/project-8'>
                                <img class="hidden" src="assets/img/project/project8/1.jpg" alt="" />
                                <div data-dsn="video" data-overlay="4" style="height: 80vh">
                                    <video class="has-top-bottom dsn-video" preload="none"
                                        poster="assets/img/project/project8/1.jpg" autoplay loop muted>
                                        <source src="http://theme.dsngrid.com/video/droow.mp4" type="video/mp4"
                                            type="video/mp4">
                                        <source src="http://theme.dsngrid.com/video/droow.webm" type="video/webm">
                                        Your browser does not support HTML5 video.
                                    </video>
                                </div>
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">video</h5>
                                    <h4>Toast 2019 Reel</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item photography">
                            <a data-dsn-grid='move-up' href='/project-7'>
                                <img class="has-top-bottom" src="assets/img/project/project7/1.jpg" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Photography</h5>
                                    <h4>Nile - Kabutha</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item photography">
                            <a data-dsn-grid='move-up' href='/project-6'>
                                <img class="has-top-bottom" src="assets/img/project/project6/1.jpg" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Photography</h5>
                                    <h4>Sleep Walker</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item brand">
                            <a data-dsn-grid='move-up' href='/project-1'>
                                <img class="has-top-bottom" src="assets/img/project/project1/1.jpg" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">brand</h5>
                                    <h4>Magista</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item photography">
                            <a data-dsn-grid='move-up' href='/project-2'>
                                <img class="has-top-bottom" src="assets/img/project/project2/1.jpg" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Photography</h5>
                                    <h4>Bastian Bux</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item architecture">
                            <a data-dsn-grid='move-up' href='/project-5'>
                                <img class="has-top-bottom" src="assets/img/project/project5/1.jpg" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Architecture</h5>
                                    <h4>Novara Conic</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

      

        </div>
    </div>
</div> --}}
