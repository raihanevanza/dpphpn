@extends('template.base-user')
@section('section')
<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    <h2 class="title-header">Mewujudnya Pengusaha Nahdliyin yang berdaya saing tinggi dan Beretika Bisnis Islami</h2>
    <div class="gallery-header">
        <div class="image-wrapper">
            <div class="image img-1">
                <img src="{{ url('assets_user/img/services-1.jpg') }}" class="img-1">
            </div>
        </div>
        <div class="image-wrapper">
            <div class="image img-2">
                <img src="{{ url('assets_user/img/services-2.jpg') }}" class="img-1">
            </div>
            <div class="image img-3">
                <img src="{{ url('assets_user/img/services-3.jpg') }}" class="img-1">
            </div>
        </div>
        <div class="image-wrapper">
            <div class="image img-4">
                <img src="{{ url('assets_user/img/services-2.jpg') }}" class="img-1">
            </div>
        </div>
        <div class="image-wrapper">
            <div class="image img-5">
                <img src="{{ url('assets_user/img/services-3.jpg') }}" class="img-1">
            </div>
            <div class="image img-6">
                <img src="{{ url('assets_user/img/services-2.jpg') }}" class="img-1">
            </div>
        </div>
        <div class="image-wrapper">
            <div class="image img-7">
                <img src="{{ url('assets_user/img/services-1.jpg') }}" class="img-1">
            </div>
        </div>
    </div>
    </div>
</section>
  
<main id="main">

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <div class="title">Berita Terbaru</div>
            <div class="subtitle"></div>
        </div>

        <div class="row">
            @foreach ($news as $item)
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="post-box">
                <div class="post-img"><img src="{{ url('uploads/news_file/'.$item->news_file) }}" class="img-fluid" alt=""></div>
                <div class="meta">
                    <span class="post-date">{{ date('l, d M Y', strtotime($item->created_at)) }}</span>
                    {{-- <span class="post-author"> / Julia Parker</span> --}}
                </div>
                <h3 class="post-title">{{ $item->title }}</p>
                <a href="{{ url('detail/news/'.$item->id) }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
        <div class="title">Kontak Kami</div>
        <div class="subtitle">Lorem ipsum dolor sit amet</div>
        </div>

    </div>

    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126886.57493010073!2d106.86558280358355!3d-6.367450381450746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698e62ce4d3747%3A0xe67e4b652488ae9!2sHPN%20Himpunan%20Pengusaha%20Nahdliyin!5e0!3m2!1sid!2sid!4v1657644053162!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="container">

        <div class="row gy-5 gx-lg-5">

        <div class="col-lg-4">

            <div class="info">
            <h3>Get in touch</h3>
            <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

            <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
                </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                <h4>Email:</h4>
                <p>info@example.com</p>
                </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
                </div>
            </div><!-- End Info Item -->

            </div>

        </div>

        <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div><!-- End Contact Form -->

        </div>

    </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection