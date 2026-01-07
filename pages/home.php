<head>
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<style>
    .about-us-container {
        margin: 40px 0;
        padding: 20px 45px;
        text-align: center;
    }

    .about-us-body {
        font-size: 16px;
        line-height: 1.6;
        color: #333;
    }

    .card-title{
        text-align: center;
        margin: 20px 0;
    }
</style>

<body>
    <div class="card-container">
        <div>
            <h2 class="card-title">What we do</h2>
        </div>
        <div class="card-section">
            <div class="section section-1">
                <img class="section-img" src="<?= asset('img/export_img.jpg') ?>" alt="">
                <div class="section-body text-center ">
                    <h3 class="section-title">We Export Agricultural Products <span style="display: block;">Globally</span></h3>
                    <button class="section-btn export-btn"><a href="<?= buildUrl('exports') ?>">Explore</a></button>
                </div>
            </div>
            <div class="section section-2">
                <img class="section-img" src="<?= asset('img/military_image.webp') ?>" alt="">
                <div class="section-body text-center ">
                    <h3 class="section-title">We Provide Military Supplies For Bangladesh</h3>
                    <button class="section-btn defense-btn"><a href="<?= buildUrl('defense') ?>">Explore</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="about-us-container">
        <div>
            <h2>About Us</h2>
        </div>
        <div class="about-us-body">
            <p>
                <strong>
                    Tejarat International (TI)
                </strong>
                has been a trusted supplier of military products for over 15 years. We started with all military supplies, including food rations, but later realized the potential for food exports. Recognizing this, we began exporting food products beyond Bangladesh, including potatoes, betel nuts, cauliflower, cabbage, carrots, beans, mangoes, pineapples, bananas, guavas, and marine products. In recent years, we've prioritized top-tier storage facilities, fast delivery, halal assurance, and the highest quality standards to ensure customer satisfaction.
            </p>
        </div>
    </div>

</body>
