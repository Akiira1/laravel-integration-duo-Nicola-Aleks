 <!-- ***** Main Banner Area Start ***** -->
<section class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="header-text">
                    <h6>{{ $titles[0]->title }}</h6>
                    <h2>{{ $titles[0]->subtitle }}</h2>
                    <div class="main-button-gradient">
                        <div class="scroll-to-section"><a href="#contact-section">{{ $banners[0]->button }}</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-image">
                    <img src="{{ '/img/' . $banners[0]->image }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- ***** Main Banner Area End ***** -->
