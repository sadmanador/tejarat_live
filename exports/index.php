<?php include_once 'inc/header.php' ?>

<style>
    .subheading {
        text-align: center;
        margin-top: 86px;
    }

    .card-container {
        margin: 0 25px;
        display: grid;
        justify-content: center;
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .item-card {
        background-color: white;
        border-radius: 22px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
    }

    .card-details {
        text-align: center;
    }


    .item-tag {
        background: gray;
        border-radius: 16px;
        color: black;
        padding: 4px 8px;
    }

    @media (min-width: 768px) {
        .card-container {
            margin: 0 25px;
            display: grid;
            justify-content: center;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
        }
    }
</style>

<!-- header end -->
<div class="layer-drop"></div>
<!--Appointment Box-->
<div class="appointment-wrapper">
    <div class="appoint-box">
        <div class="cross-icon"><span class="icon icon-cross"></span></div>
        <div class="title">
            <h2>Get Appointment</h2>
            <div class="separator"></div>
        </div>
        <div class="contact-icon">
            <div class="single-contact">
                <h5>Head Office</h5>

                <a href="#"><i class="fa fa-map"></i><span>391 Ground Floor, Road#29, New DOHS, Mohakhali, Dhaka-1206.</span></a>
                <a href="#"><i class="fa fa-phone"></i><span>+88 096 1167 7341</span></a>
                <a href="#"><i class="fa fa-envelope"></i><span>info@titaspar.com</span></a>
            </div>
            <div class="quote-icons">
                <h5>Follow us</h5>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row form-row">
            <form id="contactForm" method="POST" action="https://titaspar.com/contact.php" class="contact-form">
                <div class="col-md-12 inner-column col-sm-12 col-xs-12">
                    <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                    <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                    <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="col-md-12 inner-column col-sm-12 col-xs-12">
                    <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                    <div class="help-block with-errors"></div>
                    <button type="submit" id="submit" class="quote-btn">Submit</button>
                    <div id="msgSubmit" class="h3 hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End Consulting Form-->
<!-- Start Slider Area -->
<div class="intro-area intro-2">
    <div class="main-overly"></div>
    <div class="intro-carousel">

        <div class="intro-content">
            <div class="slider-images">
                <img src="../img/exports/agri-veges.jpg" alt="">
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- layer 1 -->
                            <div class="layer-1">
                                <h1 class="title2">Cultivating Excellence <br> Harvesting the Finest Agricultural Goods for a Sustainable Tomorrow.</h1>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-content">
            <div class="slider-images">
                <img src="../img/exports/seafood-market.jpg" alt="">
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- layer 1 -->
                            <div class="layer-1">
                                <h1 class="title2">Ocean's Bounty Unleashed <br> Unrivaled Quality in Every Seafood Experience.</h1>
                            </div>
                            <!-- layer 2 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-content">
            <div class="slider-images">
                <img src="../img/exports/seafood-crab.jpg" alt="">
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- layer 1 -->
                            <div class="layer-1">
                                <h1 class="title2">Halal Harmony <br> Exceptional Quality, Ethically Sourced Animal Products.</h1>
                            </div>
                            <!-- layer 2 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-content">
            <div class="slider-images">
                <img src="../img/exports/warehouse of trucks-08.jpg" alt="">
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">

                            <div class="layer-1">
                                <h1 class="title2">Savor the Purity <br> Exceptional Quality in Every Product.
                                </h1>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->

<!-- PDF starts -->
<div class="single-services-page page-padding">
    <div class="container">
        <div class="row">
            <!-- Start service page -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="project-details">
                    <embed src="img/Tejaratprofile.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf"
                           width="100%" height="1450px"/>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PDF Ends -->


<!-- item card area -->
<!-- <h2 class="subheading">Agricultural Goods</h2>
<div class="card-container">
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/mango.png" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Mango</h3>
            <div class="tag-container">
                <p class="item-tag">Agricultural Goods</p>
            </div>
        </div>
    </div>
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/jackfruit.jpg" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Jackfruit</h3>
            <div class="tag-container">
                <p class="item-tag">Agricultural Goods</p>
            </div>
        </div>
    </div>
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/potato.jpg" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Potato</h3>
            <div class="tag-container">
                <p class="item-tag">Agricultural Goods</p>
            </div>
        </div>
    </div>
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/Cauliflower.png" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Cauliflower</h3>
            <div class="tag-container">
                <p class="item-tag">Agricultural Goods</p>
            </div>
        </div>
    </div>
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/banana.jpg" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Banana</h3>
            <div class="tag-container">
                <p class="item-tag">Agricultural Goods</p>
            </div>
        </div>
    </div>
</div>

<h2 class="subheading">Animal Products</h2>
<div class="card-container">
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/beef.jpg" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Beef</h3>
            <div class="tag-container">
                <p class="item-tag">Animal Products</p>
            </div>
        </div>
    </div>
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/intestine.jpeg" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Beef Intestine</h3>
            <div class="tag-container">
                <p class="item-tag">Animal Products</p>
            </div>
        </div>
    </div>
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/gallstone.jpg" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Beef Gall-stone (Bezoar)</h3>
            <div class="tag-container">
                <p class="item-tag">Animal Products</p>
            </div>
        </div>
    </div>
</div>

<h2 class="subheading">Sea Food</h2>
<div class="card-container">
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/crab.jpg" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Crab</h3>
            <div class="tag-container">
                <p class="item-tag">Sea Food</p>
            </div>
        </div>
    </div>
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/shrimp.jpg" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Shrimp</h3>
            <div class="tag-container">
                <p class="item-tag">Sea Food</p>
            </div>
        </div>
    </div>
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/eel.jpg" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Chuchia Eel</h3>
            <div class="tag-container">
                <p class="item-tag">Sea Food</p>
            </div>
        </div>
    </div>
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/oyster.jpg" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Oyster</h3>
            <div class="tag-container">
                <p class="item-tag">Sea Food</p>
            </div>
        </div>
    </div>
    <div class="item-card">
        <div class="img-container">
            <img src="../img/exports/items/prawn.jpg" alt="">
        </div>
        <div class="card-details">
            <h3 class="item-name">Prawn</h3>
            <div class="tag-container">
                <p class="item-tag">Sea Food</p>
            </div>
        </div>
    </div>
</div>


<h2 class="subheading">Strategic Consumer Targeting</h2>
<div>
    <img src="../img/exports/modern-creative-communication-internet-network-connect-smart-city.jpg" alt="">
</div> -->

<!-- about-area start -->

<!-- about-area end -->


<!-- start single footer -->

<?php include_once 'inc/footer.php' ?>