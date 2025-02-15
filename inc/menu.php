<div class="container">
    <div class="row">
        <!-- logo start -->
        <div class="col-md-3 col-sm-3">
            <div class="logo">
                <?php
                if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php') {
                    $logo = 'logo.png';
                } else {
                    $logo = 'logo2.png';
                }
                ?>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="<?= 'index.php' ?>">
                    <img src="img/logo/logo.png" alt="">
                </a>
            </div>
        </div>
        <!-- logo end -->
        <div class="col-md-9 col-sm-9">
            <div class="header-right-link">
                <!-- search option start -->
                <!-- form action="#">
                    <div class="search-option">
                        <input type="text" placeholder="Search...">
                        <button class="button" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form -->
                <a class="main-search" href="../img/TitasProfile.pdf" target="_blank" title="Download Profile"></a>
                <!-- search option end -->
                <!-- div class="slice-btn"><span class="icon icon-menu"></span></div -->
            </div>


            <!-- mainmenu start -->
            <nav class="navbar navbar-default">
                <div class="collapse navbar-collapse" id="navbar-example">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="pagess" href="<?= 'index.php' ?>"><i class="fa fa-home"></i>&nbsp;Home</a>
                            </li>
                            <li>
                                <a href="<?= 'contact.php' ?>"><i class="fa fa-mobile-phone"></i>&nbsp; Contacts</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- mainmenu end -->

        </div>
    </div>
</div>