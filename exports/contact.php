<?php include_once 'inc/pages-header.php' ?>
<!-- header end -->

<!-- Start breadcumb Area -->
<div class="page-area"
     style="background: url(<?= 'img/contact_banner.jpg' ?>);background-size: cover;    background-position: right -160px;">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3>Contact us</h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread">Home</li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start contact Area -->
<div class="contact-page area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="contact-head">
                    <!--<h3>Contact us</h3>-->
                    <p></p>
                    <div class="contact-icon">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-contact">
                                <h5>REGISTERED OFFICE:</h5>
                                <a href="#"><i class="fa fa-home"></i><span> 6, SUJATNAGAR, PALLABI,</span></a>
                                <a href="#"><span style="margin-left: 38px;"> MIRPUR 12, DHAKA- 1216, </span></a>
                                <a href="#"><span style="margin-left: 38px;"> BANGLADESH.</span></a>
                                <a href="#"><i class="fa fa-phone"></i><span> +88 -02-51040404</span></a>
                                <a href="#"><i class="fa fa-envelope"></i><span>info@tejaratbd.com </span></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-contact">
                                <h5>CORPORATE OFFICE:</h5>
                                <a href="#"><i
                                            class="fa fa-home"></i><span> HOUSE:181, ROAD:2, MIRPUR DOHS,</span></a>
                                <a href="#"><span style="margin-left: 38px;"> MIRPUR- 12, DHAKA- 1216,</span></a>
                                <a href="#"><span style="margin-left: 38px;"> BANGLADESH,</span></a>
                                <a href="#"><i class="fa fa-phone"></i><span> +88 01713-142422</span></a>
                                <!--<a href="#"><i class="fa fa-phone"></i><span> +8801711 116261, +8801711 534787</span></a> -->
                                <a href="#"><i class="fa fa-envelope"></i><span>info@tejaratbd.com </span></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="    margin-top: 30px;">
                            <div class="single-contact">
                                <h5>CHINA OFFICE:</h5>
                                <a href="#"><i class="fa fa-home"></i><span> Guang Yuan Zhong Lu, 183Hao,</span></a>
                                <a href="#"><span style="margin-left: 38px;"> Tai An Shangye Da Sha. </span></a>
                                <a href="#"><span style="margin-left: 38px;"> 7th Floor Room No:728,</span></a>
                                <a href="#"><span style="margin-left: 38px;"> Guangzhou-510405 CHINA.</span></a>
                                <a href="#"><i class="fa fa-phone"></i><span> + 86-20-86553992</span></a>
                                <!--<a href="#"><i class="fa fa-print"></i><span> +44(0)203 642 8444</span></a> -->
                                <a href="#"><i class="fa fa-envelope"></i><span>china@tejaratbd.com</span></a>
                                <a href="#"><i class="fa fa-phone"></i><span> Wechat: iqbal 7728</span></a>
                            </div>
                            <div class="single-contact">
                                <P>Iqbal BD: 华南国际贸易公司</P>
                                <a href="#"><i class="fa fa-home"></i><span> 广园中路,183号</span></a>
                                <a href="#"><span style="margin-left: 38px;"> 泰安商业大厦728房</span></a>
                                <a href="#"><span style="margin-left: 38px;"> 广州-510405,中国</span></a>
                                <a href="#"><i class="fa fa-phone"></i><span> 电话:86-20-86553992</span></a>
                                <a href="#"><i class="fa fa-phone"></i><span> 微信: iqbal7728</span></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="    margin-top: 30px;">
                            <div class="single-contact">
                                <h5>AUSTRALIA OFFICE:</h5>
                                <a href="#"><i class="fa fa-home"></i><span> Unit 4, 16 Evans Avenue ,</span></a>
                                <a href="#"><span style="margin-left: 38px;"> Eastlakes NSW 2018, </span></a>
                                <a href="#"><span style="margin-left: 38px;"> Australia.</span></a>
                                <a href="#"><i class="fa fa-phone"></i><span> Tel: +61416925079</span></a>

                                <a href="#"><i class="fa fa-envelope"></i><span>australia@tejaratbd.com</span></a>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="    margin-top: 30px;">
                            <div class="single-contact">
                                <h5>USA OFFICE:</h5>
                                <a href="#"><i class="fa fa-home"></i><span> 13151 EMILY ROAD # 201 ,</span></a>
                                <a href="#"><span style="margin-left: 38px;"> DALLAS, TEXAS 75240, USA. </span></a> 
                                <a href="#"><i class="fa fa-phone"></i><span> Tel : +1-972-491-0884</span></a>
                                <a href="#"><i class="fa fa-envelope"></i><span>Email : usa@tejaratbd.com;</span></a>
                                <a href="#"><i class="fa fa-envelope"></i><span>Email : kabir_utd@hotmail.com</span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End contact icon -->
            <div class="col-md-4 col-sm-8 col-xs-12">
                <?php
                $errors = [];
                $errorMessage = '';
                $secret = '6Ld5owQeAAAAAI8n28PvoDfilzl53_o7QX7PmIYP';
                if (!empty($_POST)) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $company = $_POST['company'];
                    $title = $_POST['title'];
                    $topic = $_POST['topic'];
                    $message = $_POST['message'];
                    $recaptchaResponse = $_POST['g-recaptcha-response'];

                    $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptchaResponse}";
                    $verify = json_decode(file_get_contents($recaptchaUrl));

                    if (!$verify->success) {
                        $errors[] = 'Recaptcha failed';
                    }
                    if (empty($name)) {
                        $errors[] = 'Name is empty';
                    }

                    if (empty($email)) {
                        $errors[] = 'Email is empty';
                    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errors[] = 'Email is invalid';
                    }
                    if (empty($phone)) {
                        $errors[] = 'Phone is empty';
                    }
                    if (empty($company)) {
                        $errors[] = 'Company is empty';
                    }
                    if (empty($title)) {
                        $errors[] = 'Title is empty';
                    }
                    if (empty($topic)) {
                        $errors[] = 'Topic is empty';
                    }
                    if (empty($message)) {
                        $errors[] = 'Message is empty';
                    }


                    if (empty($errors)) {
                        $toEmail = 'said@tejaratbd.com';
                        $emailSubject = 'New email from your contact form';
                        $headers = ['From' => 'no-reply@tejaratbd.com', 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

                        $bodyParagraphs = ["Name: {$name}", "<br>Email: {$email}", "<br>Phone: {$phone}", "<br>Company: {$company}", "<br>Title: {$title}", "<br>Topic: {$topic}", "<br>Message:", $message];
                        $body = join(PHP_EOL, $bodyParagraphs);

                        if (mail($toEmail, $emailSubject, $body, $headers)) {
                            $errorMessage = "<p style='color: green;'>Message Sent Successfully</p>";
                        } else {
                            $errorMessage = 'Oops, something went wrong. Please try again later';
                        }
                    } else {
                        $allErrors = join('<br/>', $errors);
                        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
                    }
                }

                ?>
                <script src="https://www.google.com/recaptcha/api.js"></script>
                <form action="" method="post" id="contact-form">
                    <h2>Send Message</h2>
                    <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input style="cursor: pointer;" name="email" class="form-control"
                               type="email"/>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input style="cursor: pointer;" name="phone" class="form-control"
                               type="tel"/>
                    </div>
                    <div class="form-group">
                        <label>Company</label>
                        <input style="cursor: pointer;" name="company" class="form-control"
                               type="text"/>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input style="cursor: pointer;" name="title" class="form-control"
                               type="text"/>
                    </div>
                    <div class="form-group">
                        <label>Topic</label>
                        <input style="cursor: pointer;" name="topic" class="form-control"
                               type="text"/>
                    </div>
                    <div class="form-group">
                        <label>Message:</label>
                        <textarea name="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button
                                class="g-recaptcha btn-default"
                                type="submit"
                                data-sitekey="6Ld5owQeAAAAAA7EBpcp8Dvi_2Wm4PHHNI0mbIv2"
                                data-callback='onRecaptchaSuccess'
                        >
                            Submit
                        </button>
                    </div>
                </form>
                <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
                <script>
                    const constraints = {
                        name: {
                            presence: {allowEmpty: false}
                        },
                        email: {
                            presence: {allowEmpty: false},
                            email: true
                        },
                        phone: {
                            presence: {allowEmpty: false},
                            phone: true
                        },
                        company: {
                            presence: {allowEmpty: false},
                            company: true
                        },
                        title: {
                            presence: {allowEmpty: false},
                            title: true
                        },
                        topic: {
                            presence: {allowEmpty: false},
                            topic: true
                        },
                        message: {
                            presence: {allowEmpty: false}
                        }
                    };

                    const form = document.getElementById('contact-form');

                    form.addEventListener('submit', function (event) {
                        const formValues = {
                            name: form.elements.name.value,
                            email: form.elements.email.value,
                            phone: form.elements.phone.value,
                            company: form.elements.company.value,
                            title: form.elements.title.value,
                            topic: form.elements.topic.value,
                            message: form.elements.message.value
                        };

                        const errors = validate(formValues, constraints);

                        if (errors) {
                            event.preventDefault();
                            const errorMessage = Object
                                .values(errors)
                                .map(function (fieldValues) {
                                    return fieldValues.join(', ')
                                })
                                .join("\n");

                            alert(errorMessage);
                        }
                    }, false);

                    function onRecaptchaSuccess() {
                        document.getElementById('contact-form').submit()
                    }
                </script>
            </div>
            <!-- <div class="col-md-4 col-sm-8 col-xs-12">
                <?php
            /*                $errors = [];
                            $errorMessage = '';
                            if (!empty($_POST)) {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $phone = $_POST['phone'];
                                $company = $_POST['company'];
                                $title = $_POST['title'];
                                $topic = $_POST['topic'];
                                $message = $_POST['message'];

                                if (empty($name)) {
                                    $errors[] = 'Name is empty';
                                }

                                if (empty($email)) {
                                    $errors[] = 'Email is empty';
                                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    $errors[] = 'Email is invalid';
                                }
                                if (empty($phone)) {
                                    $errors[] = 'Phone is empty';
                                }
                                if (empty($company)) {
                                    $errors[] = 'Company is empty';
                                }
                                if (empty($title)) {
                                    $errors[] = 'Title is empty';
                                }
                                if (empty($topic)) {
                                    $errors[] = 'Topic is empty';
                                }
                                if (empty($message)) {
                                    $errors[] = 'Message is empty';
                                }


                                if (empty($errors)) {
                                    $toEmail = 'mdshihabuddinm@gmail.com';
                                    $emailSubject = 'New email from your contact form';
                                    $headers = ['From' => 'no-reply@tejaratbd.com', 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

                                    $bodyParagraphs = ["Name: {$name}", "<br>Email: {$email}","<br>Phone: {$phone}","<br>Company: {$company}","<br>Title: {$title}","<br>Topic: {$topic}", "<br>Message:", $message];
                                    $body = join(PHP_EOL, $bodyParagraphs);

                                    if (mail($toEmail, $emailSubject, $body, $headers)) {
                                        $errorMessage = "<p style='color: green;'>Message Sent Successfully</p>";
                                    } else {
                                        $errorMessage = 'Oops, something went wrong. Please try again later';
                                    }
                                } else {
                                    $allErrors = join('<br/>', $errors);
                                    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
                                }
                            }
                            */ ?>
                <form action="" method="post" id="contact-form">
                    <h2>Send Message</h2>
                    <?php /*echo((!empty($errorMessage)) ? $errorMessage : '') */ ?>
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input style="cursor: pointer;" name="email" class="form-control"
                               type="email"/>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input style="cursor: pointer;" name="phone" class="form-control"
                               type="tel"/>
                    </div>
                    <div class="form-group">
                        <label>Company</label>
                        <input style="cursor: pointer;" name="company" class="form-control"
                               type="text"/>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input style="cursor: pointer;" name="title" class="form-control"
                               type="text"/>
                    </div>
                    <div class="form-group">
                        <label>Topic</label>
                        <input style="cursor: pointer;" name="topic" class="form-control"
                               type="text"/>
                    </div>
                    <div class="form-group">
                        <label>Message:</label>
                        <textarea name="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send"/>
                    </div>
                </form>
                <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
                <script>
                    const constraints = {
                        name: {
                            presence: {allowEmpty: false}
                        },
                        email: {
                            presence: {allowEmpty: false},
                            email: true
                        },
                        phone: {
                            presence: {allowEmpty: false},
                            phone: true
                        },
                        company: {
                            presence: {allowEmpty: false},
                            company: true
                        },
                        title: {
                            presence: {allowEmpty: false},
                            title: true
                        },
                        topic: {
                            presence: {allowEmpty: false},
                            topic: true
                        },
                        message: {
                            presence: {allowEmpty: false}
                        }
                    };

                    const form = document.getElementById('contact-form');

                    form.addEventListener('submit', function (event) {
                        const formValues = {
                            name: form.elements.name.value,
                            email: form.elements.email.value,
                            phone: form.elements.phone.value,
                            company: form.elements.company.value,
                            title: form.elements.title.value,
                            topic: form.elements.topic.value,
                            message: form.elements.message.value
                        };

                        const errors = validate(formValues, constraints);

                        if (errors) {
                            event.preventDefault();
                            const errorMessage = Object
                                .values(errors)
                                .map(function (fieldValues) {
                                    return fieldValues.join(', ')
                                })
                                .join("\n");

                            alert(errorMessage);
                        }
                    }, false);
                </script>
            </div>-->
        </div>
    </div>
</div>
<!-- End Contact Area -->
<!-- Start map Area -->
<div class="map-area">
    <div class="container">
        <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Start Map -->
                <div class="map-main">
                    <div id="googleMap" style="width:100%;height:450px;"></div>
                </div>
                <!-- End Map -->
            </div>
        </div>
    </div>
</diV>

    <!-- all js here -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCiK8lBJXmWX31Bwej9nvhftHyBAeXfBGY"></script>

<!-- start single footer -->
<?php include_once 'inc/footer.php' ?>