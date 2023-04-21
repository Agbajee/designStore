@extends('public.layout')

@section('title', setting('store_tagline'))

@section('content')


<div id="main-wrapper">
          <!-- content start -->

<section>
   <div class="container pt-lg-2">
        <div class="row">
            <div class="col-lg-9 pr-lg-2 px-0">
                <div class="w-full mx-auto relative pl-md-3">
                    <div class="w-auto owl-carousel rounded owl-theme overflow-hidden"  id="home-slider">
                        <a href="/categories/logo-design/products"><div class="slider-item js-fullheight" style="background-image:url({{ v(Theme::url('public/images/homepage-imgs/banners/img-05.png')) }});">
                            <img src="{{ v(Theme::url('public/images/homepage-imgs/banners/img-05.png')) }}" style="visibility: hidden;" />
                        </div></a>
                        
                        <a href="products.html"><div class="slider-item js-fullheight" style="background-image:url({{ v(Theme::url('public/images/homepage-imgs/banners/img-04.png')) }});" >
                            <img src="{{ v(Theme::url('public/images/homepage-imgs/banners/img-04.png')) }}" style="visibility: hidden;" />
                        </div></a>
                        <a href="flyer-design.html"><div class="slider-item js-fullheight" style="background-image:url({{ v(Theme::url('public/images/homepage-imgs/banners/img-06.png')) }});" >
                            <img src="{{ v(Theme::url('public/images/homepage-imgs/banners/img-06.png')) }}" style="visibility: hidden;" />
                        </div></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 pl-0 d-none d-lg-block h-inherit">
                <div class="h-100 d-flex flex-column home-rider-side">
                    <a href="/products" class="card d-block border-0 p-3 mb-2 flex-grow-1 d-flex justify-content-center align-items-center" style="background:url({{ v(Theme::url('public/images/homepage-imgs/banners/sm/1577588658_3d.png')) }}); background-size:100%; background-repeat: no-repeat;">
                        <div class="c-body d-flex h-100">
                            <!-- <img class="img-fluid" src="https://designkago.com/images/1577588658_3d.png" /> -->
                        </div>
                    </a>
                    <a href="/products" class="card d-block border-0 p-3 flex-grow-1 d-flex justify-content-center align-items-center" style="background:url({{ v(Theme::url('public/images/homepage-imgs/banners/sm/1578845161_41.png')) }});  background-size:100%; background-repeat: no-repeat;">
                        <div class="c-body d-flex h-100">
                            <!-- <img class="img-fluid" src="https://designkago.com/images/1578845161_41.png" /> -->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trusted-by-business">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="past-customer--section">
                    <div class="customer-container py-3 py-md-4">
                        <h2 class="past-customer-image past-customer-content">
                            TRUSTED BY 10,000+ BUSINESSES
                        </h2>
                        <div class="past-customer-image-group">
                            <div class="past-customer-image dh_pic_lazy">
                                <img class="" data-src="{{ v(Theme::url('public/images/homepage-imgs/trusted-companies/BBC-gray.svg')) }}" alt="bbc" src="{{ v(Theme::url('public/images/homepage-imgs/trusted-companies/BBC-gray.svg')) }}">
                            </div>
                            <div class="past-customer-image dh_pic_lazy">
                                <img class="" data-src="{{ v(Theme::url('public/images/homepage-imgs/trusted-companies/Deloitte-gray.svg')) }}" alt="deloitte" src="{{ v(Theme::url('public/images/homepage-imgs/trusted-companies/Deloitte-gray.svg')) }}">
                            </div>
                            <div class="past-customer-image dh_pic_lazy">
                                <img class="" data-src="{{ v(Theme::url('public/images/homepage-imgs/trusted-companies/microsoft-gray.svg')) }}" alt="microsoft" src="{{ v(Theme::url('public/images/homepage-imgs/trusted-companies/microsoft-gray.svg')) }}">
                            </div>
                            <div class="past-customer-image dh_pic_lazy">
                                <img class="" data-src="{{ v(Theme::url('public/images/homepage-imgs/trusted-companies/ticketmaster-logo-gray.svg')) }}" alt="ticketmaster" src="{{ v(Theme::url('public/images/homepage-imgs/trusted-companies/ticketmaster-logo-gray.svg')) }}">
                            </div>
                            <div class="past-customer-image dh_pic_lazy">
                                <img class="" data-src="{{ v(Theme::url('public/images/homepage-imgs/trusted-companies/winzip-gray.svg')) }}" alt="winzip" src="{{ v(Theme::url('public/images/homepage-imgs/trusted-companies/winzip-gray.svg')) }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-items mt-5 mt-md-20">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center section-title">
                <h1 class="d-none">Featured Products</h1>
                <h3 class="main-title position-relative pb-2">Featured Products</h3>
             </div>
        </div>
        <div class="row pt-10 product-items">
                                    <div class="col-lg-3 col-6 pb-4 pb-sm-5 d-flex">
                <div class="card w-100 border-0 shadow-sm">
                    <a class="stretched-link" href="/products/modern-3d-logo">
                    </a>
                    <a class="card-img-top product-pic" href="modern-3d-logo-design.html">
                        <!-- Image -->
                        <img src="{{ v(Theme::url('public/images/products/primary/1611121069_3d-company-golden-lo.jpg')) }}" alt="Modern 3D logo" class="img-responsive card-img-top">
                    </a>
                    <div class="product-details">
                        <div class="onep mb-0 font-weight-bold">Modern 3D logo</div>
                        <center class="product-footer">
                            <p class="price">From
                            <span class="pk">$50</span></p>
                        </center>
                    </div>
                </div>
            </div>
                        <div class="col-lg-3 col-6 pb-4 pb-sm-5 d-flex">
                <div class="card w-100 border-0 shadow-sm">
                    <a class="stretched-link" href="print-flyer-design.html">
                    </a>
                    <a class="card-img-top product-pic" href="print-flyer-design.html">
                        <!-- Image -->
                        <img src="{{ v(Theme::url('public/images/products/primary/1611123800_design-professional-.jpg')) }}" alt="Print flyer design" class="img-responsive card-img-top">
                    </a>
                    <div class="product-details">
                        <div class="onep mb-0 font-weight-bold">Print flyer design</div>
                        <center class="product-footer">
                            <p class="price">From
                            <span class="pk">$50</span></p>
                        </center>
                    </div>
                </div>
            </div>
                        <div class="col-lg-3 col-6 pb-4 pb-sm-5 d-flex">
                <div class="card w-100 border-0 shadow-sm">
                    <a class="stretched-link" href="logo-animation.html">
                    </a>
                    <a class="card-img-top product-pic" href="logo-animation.html">
                        <!-- Image -->
                        <img src="{{ v(Theme::url('public/images/products/primary/1611121872_create-any-logo-reve.jpg')) }}" alt="Logo Animation" class="img-responsive card-img-top">
                    </a>
                    <div class="product-details">
                        <div class="onep mb-0 font-weight-bold">Logo Animation</div>
                        <center class="product-footer">
                            <p class="price">From
                            <span class="pk">$100</span></p>
                        </center>
                    </div>
                </div>
            </div>
                        <div class="col-lg-3 col-6 pb-4 pb-sm-5 d-flex">
                <div class="card w-100 border-0 shadow-sm">
                    <a class="stretched-link" href="/products/modern-3d-logo">
                    </a>
                    <a class="card-img-top product-pic" href="mascot-and-cartoon-logo.html">
                        <!-- Image -->
                        <img src="{{ v(Theme::url('public/images/products/primary/1611439002_design-awesome-masco.jpg')) }}" alt="Mascot &amp; Cartoon Logo" class="img-responsive card-img-top">
                    </a>
                    <div class="product-details">
                        <div class="onep mb-0 font-weight-bold">Mascot &amp; Cartoon Logo</div>
                        <center class="product-footer">
                            <p class="price">From
                            <span class="pk">$150</span></p>
                        </center>
                    </div>
                </div>
            </div>
                        <div class="col-lg-3 col-6 pb-4 pb-sm-5 d-flex">
                <div class="card w-100 border-0 shadow-sm">
                    <a class="stretched-link" href="signature-logo.html">
                    </a>
                    <a class="card-img-top product-pic" href="signature-logo.html">
                        <!-- Image -->
                        <img src="{{ v(Theme::url('public/images/products/primary/1615659494_design-modern-fashio.jpg')) }}" alt="Signature Logo" class="img-responsive card-img-top">
                    </a>
                    <div class="product-details">
                        <div class="onep mb-0 font-weight-bold">Signature Logo</div>
                        <center class="product-footer">
                            <p class="price">From
                            <span class="pk">$50</span></p>
                        </center>
                    </div>
                </div>
            </div>
                        <div class="col-lg-3 col-6 pb-4 pb-sm-5 d-flex">
                <div class="card w-100 border-0 shadow-sm">
                    <a class="stretched-link" href="real-estate-logo.html">
                    </a>
                    <a class="card-img-top product-pic" href="real-estate-logo.html">
                        <!-- Image -->
                        <img src="{{ v(Theme::url('public/images/products/primary/1622541325_auimodified.jpg')) }}" alt="Real Estate Logo" class="img-responsive card-img-top">
                    </a>
                    <div class="product-details">
                        <div class="onep mb-0 font-weight-bold">Real Estate Logo</div>
                        <center class="product-footer">
                            <p class="price">From
                            <span class="pk">$50</span></p>
                        </center>
                    </div>
                </div>
            </div>
                        <div class="col-lg-3 col-6 pb-4 pb-sm-5 d-flex">
                <div class="card w-100 border-0 shadow-sm">
                    <a class="stretched-link" href="minimalistic-logo.html">
                    </a>
                    <a class="card-img-top product-pic" href="minimalistic-logo.html">
                        <!-- Image -->
                        <img src="{{ v(Theme::url('public/images/products/primary/1611481600_design-luxury-minima.jpg')) }}" alt="Minimalistic Logo" class="img-responsive card-img-top">
                    </a>
                    <div class="product-details">
                        <div class="onep mb-0 font-weight-bold">Minimalistic Logo</div>
                        <center class="product-footer">
                            <p class="price">From
                            <span class="pk">$50</span></p>
                        </center>
                    </div>
                </div>
            </div>
                        <div class="col-lg-3 col-6 pb-4 pb-sm-5 d-flex">
                <div class="card w-100 border-0 shadow-sm">
                    <a class="stretched-link" href="website-design.html">
                    </a>
                    <a class="card-img-top product-pic" href="website-design.html">
                        <!-- Image -->
                        <img src="{{ v(Theme::url('public/images/products/primary/1611305966_create-an-awesome-we.jpg')) }}" alt="Website Design" class="img-responsive card-img-top">
                    </a>
                    <div class="product-details">
                        <div class="onep mb-0 font-weight-bold">Website Design</div>
                        <center class="product-footer">
                            <p class="price">From
                            <span class="pk">$150</span></p>
                        </center>
                    </div>
                </div>
            </div>
                                </div>
        <div class="row justify-content-center py-3">
            <div class="col-12 flex justify-center">
                <div class="flex w-full justify-center"><a class="no-underline bg-black px-5 btn font-light hover:bg-dark text-white text-lg" href="/products">All Products</a></div>
            </div>
        </div>
    </div>
</section>

<!--
<section class="client-say-section home-testimonial-section py-5 mt-md-20 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 flex justify-center">
                <div class="section-title mb-3">
                    <h2 class="main-title position-relative pb-2">What Our Clients Say...</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="w-auto owl-carousel rounded owl-theme overflow-hidden"  id="home-testimonials">
                                                                                                                <div class="testimony-item">
                                <div class="dkg-review-massage-wrap position-relative">
                                    <div class="dkg-review-massage">
                                        <div class="reviewer-image">
                                            <img src="{{ v(Theme::url('public/images/fake-users/1598631195_s.png')) }}" alt="Iamscottbutler">
                                        </div>
                                        <div class="stars-tp text-warning">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                    </div>
                                        <p class="position-relative px-5">The Designer delivered a quality product exceeding expectations. I&#039;d recommend anyone looking for a business logo give Designkago a shot.</p>
                                        <div class="dkg-author-detail">
                                            <h4 class="author-name">
                                                Iamscottbutler
                                            </h4>
                                            <a href="modern-3d-logo-design.html">
                                                <div class="tp-verify-order"><i class="fa fa-check-circle" aria-hidden="true"></i> View Product</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <div class="testimony-item">
                                <div class="dkg-review-massage-wrap position-relative">
                                    <div class="dkg-review-massage">
                                        <div class="reviewer-image">
                                            <img src="{{ v(Theme::url('public/images/fake-users/1599539805_g.png')) }}" alt="Grulla muller">
                                        </div>
                                        <div class="stars-tp text-warning">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                    </div>
                                        <p class="position-relative px-5">Designkago did exactly what I wanted. My logo for my business I&#039;m starting was spot on. His attention to the details that i wanted were exceptional. I would highly recommend Designkago to anyone that needs a logo for there business. I will definitely be using him again on future projects.</p>
                                        <div class="dkg-author-detail">
                                            <h4 class="author-name">
                                                Grulla muller
                                            </h4>
                                            <a href="modern-3d-logo-design.html">
                                                <div class="tp-verify-order"><i class="fa fa-check-circle" aria-hidden="true"></i> View Product</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <div class="testimony-item">
                                <div class="dkg-review-massage-wrap position-relative">
                                    <div class="dkg-review-massage">
                                        <div class="reviewer-image">
                                            <img src="images/fake-users/1612404492_c.png" alt="celbel">
                                        </div>
                                        <div class="stars-tp text-warning">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                    </div>
                                        <p class="position-relative px-5">Seems like there is a large group of people working for this company and every single one of them was nice, professional, and very willing to accommodate revisions in a timely manner and keep me updated every step of the way. Definitely will be coming back to them for more logo work in the future!</p>
                                        <div class="dkg-author-detail">
                                            <h4 class="author-name">
                                                celbel
                                            </h4>
                                            <a href="mascot-and-cartoon-logo.html">
                                                <div class="tp-verify-order"><i class="fa fa-check-circle" aria-hidden="true"></i> View Product</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <div class="testimony-item">
                                <div class="dkg-review-massage-wrap position-relative">
                                    <div class="dkg-review-massage">
                                        <div class="reviewer-image">
                                            <img src="images/fake-users/1607085621_m.png" alt="Mdhiggins">
                                        </div>
                                        <div class="stars-tp text-warning">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                    </div>
                                        <p class="position-relative px-5">Designkago is wonderful from communication, to ideation, to execution. She took my ideas and turned them into a beautiful, functional site.</p>
                                        <div class="dkg-author-detail">
                                            <h4 class="author-name">
                                                Mdhiggins
                                            </h4>
                                            <a href="website-design.html">
                                                <div class="tp-verify-order"><i class="fa fa-check-circle" aria-hidden="true"></i> View Product</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <div class="testimony-item">
                                <div class="dkg-review-massage-wrap position-relative">
                                    <div class="dkg-review-massage">
                                        <div class="reviewer-image">
                                            <img src="images/fake-users/1607047819_j.png" alt="jennifalldin">
                                        </div>
                                        <div class="stars-tp text-warning">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                    </div>
                                        <p class="position-relative px-5">Very responsive, communicated well. Its a two way collab as you have to be very specific about what you&#039;re asking for. Had a couple revisions and he fixed them and understood what I was looking to do. I&#039; am vey satisfied and well pleased with his work. I have a few more projects i&#039;m working on in the future and will most likely use his services again. Please try Designkago you will not be disappointed at all.</p>
                                        <div class="dkg-author-detail">
                                            <h4 class="author-name">
                                                jennifalldin
                                            </h4>
                                            <a href="products.html">
                                                <div class="tp-verify-order"><i class="fa fa-check-circle" aria-hidden="true"></i> View Product</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <div class="testimony-item">
                                <div class="dkg-review-massage-wrap position-relative">
                                    <div class="dkg-review-massage">
                                        <div class="reviewer-image">
                                            <img src="images/fake-users/1606963175_j.png" alt="Javierramire461">
                                        </div>
                                        <div class="stars-tp text-warning">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                    </div>
                                        <p class="position-relative px-5">These guys were incredible to work with, I had contacted several so-called experts previously and got the run around. The first time contacting Designkago, they knew exactly what we were looking for and knew how to make it happen, they made it happen under the timeline, they are working on my next project now, I highly recommend.</p>
                                        <div class="dkg-author-detail">
                                            <h4 class="author-name">
                                                Javierramire461
                                            </h4>
                                            <a href="website-design.html">
                                                <div class="tp-verify-order"><i class="fa fa-check-circle" aria-hidden="true"></i> View Product</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <div class="testimony-item">
                                <div class="dkg-review-massage-wrap position-relative">
                                    <div class="dkg-review-massage">
                                        <div class="reviewer-image">
                                            <img src="images/fake-users/1599967125_d.png" alt="Derrick M. ">
                                        </div>
                                        <div class="stars-tp text-warning">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                    </div>
                                        <p class="position-relative px-5">I came in without a solid idea of what I wanted, but I explained the motivation behind my brand&#039;s name and provided my main colors. Designkago came back within one day with multiple concept ideas, and I&#039;m super satisfied with how all of them turned out! Would highly recommend!</p>
                                        <div class="dkg-author-detail">
                                            <h4 class="author-name">
                                                Derrick M. 
                                            </h4>
                                            <a href="modern-3d-logo-design.html">
                                                <div class="tp-verify-order"><i class="fa fa-check-circle" aria-hidden="true"></i> View Product</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <div class="testimony-item">
                                <div class="dkg-review-massage-wrap position-relative">
                                    <div class="dkg-review-massage">
                                        <div class="reviewer-image">
                                            <img src="images/fake-users/1606962944_s.png" alt="Saneno">
                                        </div>
                                        <div class="stars-tp text-warning">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                    </div>
                                        <p class="position-relative px-5">Excellent experience! Fast, on time delivery and got it right. I&#039;m very happy and impressed and will be using this seller many times for this kind of work.</p>
                                        <div class="dkg-author-detail">
                                            <h4 class="author-name">
                                                Saneno
                                            </h4>
                                            <a href="website-design.html">
                                                <div class="tp-verify-order"><i class="fa fa-check-circle" aria-hidden="true"></i> View Product</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <div class="testimony-item">
                                <div class="dkg-review-massage-wrap position-relative">
                                    <div class="dkg-review-massage">
                                        <div class="reviewer-image">
                                            <img src="images/fake-users/1599962253_d.png" alt="Diegonijboer">
                                        </div>
                                        <div class="stars-tp text-warning">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                    </div>
                                        <p class="position-relative px-5">WOW!!!!! What an awesome experience. This gentleman is very accommodating and worked around the clock to satisfy my requests. They completed my project ahead of time to ensure I was satisfied with the final logo. I look forward to working with Them on future projects. I highly recommend Designkago!</p>
                                        <div class="dkg-author-detail">
                                            <h4 class="author-name">
                                                Diegonijboer
                                            </h4>
                                            <a href="modern-3d-logo-design.html">
                                                <div class="tp-verify-order"><i class="fa fa-check-circle" aria-hidden="true"></i> View Product</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <div class="testimony-item">
                                <div class="dkg-review-massage-wrap position-relative">
                                    <div class="dkg-review-massage">
                                        <div class="reviewer-image">
                                            <img src="images/fake-users/1599958157_a.png" alt="April_miller">
                                        </div>
                                        <div class="stars-tp text-warning">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                    </div>
                                        <p class="position-relative px-5">Working with them was quicker than I expected, and with simple, yet amazing results! I&#039;ve got a podcast in the works, and this logo fits into the theme of it almost perfectly - modern, but simple and humble.</p>
                                        <div class="dkg-author-detail">
                                            <h4 class="author-name">
                                                April_miller
                                            </h4>
                                            <a href="modern-3d-logo-design.html">
                                                <div class="tp-verify-order"><i class="fa fa-check-circle" aria-hidden="true"></i> View Product</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <div class="testimony-item">
                                <div class="dkg-review-massage-wrap position-relative">
                                    <div class="dkg-review-massage">
                                        <div class="reviewer-image">
                                            <img src="images/fake-users/1599957751_a.png" alt="Antebucan5">
                                        </div>
                                        <div class="stars-tp text-warning">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                    </div>
                                        <p class="position-relative px-5">I had a simple logo designed and he did a very good job. Excellent service and willing to make required changes quickly and efficiently so we could finish on time. Very impressed and will use again for more design work.</p>
                                        <div class="dkg-author-detail">
                                            <h4 class="author-name">
                                                Antebucan5
                                            </h4>
                                            <a href="modern-3d-logo-design.html">
                                                <div class="tp-verify-order"><i class="fa fa-check-circle" aria-hidden="true"></i> View Product</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <div class="testimony-item">
                                <div class="dkg-review-massage-wrap position-relative">
                                    <div class="dkg-review-massage">
                                        <div class="reviewer-image">
                                            <img src="images/fake-users/1599957482_p.png" alt="Pawfectwear">
                                        </div>
                                        <div class="stars-tp text-warning">
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                            <i class="fa fa-star"></i>
                                                                                    </div>
                                        <p class="position-relative px-5">Great to work with! The designer worked quickly on my logo and provided revisions within 24 hours of each request. He delivered multiple rounds of revisions and created a second version for me even though it wasn&#039;t truly in the scope of work. I would definitely work with him again!</p>
                                        <div class="dkg-author-detail">
                                            <h4 class="author-name">
                                                Pawfectwear
                                            </h4>
                                            <a href="modern-3d-logo-design.html">
                                                <div class="tp-verify-order"><i class="fa fa-check-circle" aria-hidden="true"></i> View Product</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<section class="grahpics-by-designkago mt-md-20 my-20 d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center section-title">
                <h3 class="main-title position-relative pb-3">Graphic Designs Made with Designkago</h3>
                <p class="">Millions of businesses across the world have trusted Designkago to outsource their graphic design needs.</p>
             </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12">
                        <div class="w-auto owl-carousel rounded owl-theme overflow-hidden"  id="home-design-portfolio">
                            <div class="port-item">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="row no-gutters">
                                            <div class="col-12">
                                                <div class="card" style="margin-bottom: 24px;">
                                                    <img alt="image thirteen" class="swiper-lazy swiper-lazy-loaded" src="{{ v(Theme::url('public/images/homepage-imgs/portfolios/image-land-01.jpg')) }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="card">
                                                     <img alt="image" class="swiper-lazy swiper-lazy-loaded" src="{{ v(Theme::url('public/images/homepage-imgs/portfolios/image-square-01.jpg')) }}" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <img alt="image" class="swiper-lazy swiper-lazy-loaded" src="{{ v(Theme::url('public/images/homepage-imgs/portfolios/image-square-02.jpg')) }}" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <img alt="image" class="swiper-lazy swiper-lazy-loaded" src="{{ v(Theme::url('public/images/homepage-imgs/portfolios/image-port-01.jpg')) }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="port-item">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <img alt="image" class="swiper-lazy swiper-lazy-loaded" src="{{ v(Theme::url('public/images/homepage-imgs/portfolios/image-port-02.jpg')) }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="card">
                                                     <img alt="image" class="swiper-lazy swiper-lazy-loaded" src="{{ v(Theme::url('public/images/homepage-imgs/portfolios/image-square-03.jpg')) }}" />
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <img alt="image" class="swiper-lazy swiper-lazy-loaded" src="{{ v(Theme::url('public/images/homepage-imgs/portfolios/image-square-04.jpg')) }}" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-12">
                                                <div class="card" style="margin-top: 24px;">
                                                    <img alt="image thirteen" class="swiper-lazy swiper-lazy-loaded" src="{{ v(Theme::url('public/images/homepage-imgs/portfolios/image-land-02.jpg')) }}" />
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<section class="statistics-section py-5" >
    <div class="container">
        <div class="row">
            <div class="col-12 text-center section-title">
                <h3 class="main-title position-relative pb-2">We Are Proud On</h3>
                <p class="">Numbers indicate Our Achievements that We Get with Hard Work</p>
             </div>
        </div><br>
        <div class="row">
            <div class="col-6 col-lg-3 mb-3 mb-md-4 mb-lg-0" >
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="dkg-sts-box text-center">
                            <span><i class="fa fa-child fa-3x"></i></span>
                            <h4 class="dkg-sts-heading">10K+</h4>
                            <p class="dkg-sts-text mb-0">Clients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 pl-0 pl-sm-3 col-lg-3 mb-3 mb-md-4 mb-lg-0" >
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="dkg-sts-box text-center">
                            <span><i class="fa fa-line-chart fa-3x"></i></span>
                            <h4 class="dkg-sts-heading">150+</h4>
                            <p class="dkg-sts-text mb-0">Growth</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-5 mb-lg-0" >
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="dkg-sts-box text-center">
                            <span><i class="fa fa-check-square-o fa-3x"></i></span>
                            <h4 class="dkg-sts-heading">7K+</h4>
                            <p class="dkg-sts-text mb-0">Projects</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 pl-0 pl-sm-3 col-lg-3 mb-5 mb-lg-0" >
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="dkg-sts-box text-center">
                            <span><i class="fa fa-bank (alias) fa-3x"></i></span>
                            <h4 class="dkg-sts-heading">45+</h4>
                            <p class="dkg-sts-text mb-0">Countries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- content end -->
      </div>
      </div>


@endsection
