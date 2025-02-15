<?php include_once 'inc/pages-header.php' ?>
<style>
    .card {
        cursor: pointer;
        margin: 25px;
        border-radius: 15px;
        background-color: #eee;
        padding: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        transition: transform .5s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-img-top {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .card-title {
        margin-top: 20px;
    }

    @media (min-width: 768px) {
        .card-group {
            margin: 0 50px;
            display: flex;
            gap: 25px;
        }

        .card {
            margin: 0;
        }
    }
</style>

<!-- header end -->
<div class="layer-drop"></div>
<!-- Start breadcumb Area -->
<div class="page-area" style="background: url(<?= '../img/exports/transportation.jpg' ?>);background-size: contain;">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3>Our Concern</h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread">Home</li>
                        <li>Our Concern</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->
<!-- End services Area -->
<div class="single-services-page page-padding">
    <div class="">
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="../img/exports/cow.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Animal Products</h5>
                    <p class="card-text">We offer a range of animal products, including horns, hoofs, Ox testicles, bezoar (gallstone), bones, intestines, blood, and other organs, sourced ethically and sustainably.</p>

                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="../img/exports/agri-veges.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Agricultural Goods</h5>
                    <p class="card-text">Tejarat International specializes in exporting a variety of fruits—Guava, Jackfruit, Litchi, Mangoes, Pineapple—and vegetables, featuring the versatile Potato, among others, providing high-quality produce for global markets.</p>

                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="../img/exports/seafood-market.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Seafood Items</h5>
                    <p class="card-text">Our seafood export range includes premium items such as pomfret fish, lobster, crab, seaweed, Cuchia (eel), and other delicacies from the ocean, ensuring a delightful culinary experience for our global clientele.</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- start single footer -->
<?php include_once 'inc/footer.php' ?>