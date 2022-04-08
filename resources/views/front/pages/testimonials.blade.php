<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h6>{{ $titles[3]->title }}</h6>
                    <h4>{{ $titles[3]->subtitle }}</h4>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
                    @foreach($testimonials as $testimonial)
                        <div class="item">
                            <p>“{{ $testimonial->description }}”</p>
                            <h4>{{ $testimonial->name }}</h4>
                            <span>{{ $testimonial->post }}</span>
                            <img src="{{ asset('img/quote.png') }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
