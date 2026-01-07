<div class="container">
    <div class="row">
        <!-- logo start -->
        <div class="col-md-3 col-sm-3">
            <div class="logo">
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="<?= buildUrl('home') ?>">
                    <img src="<?= asset('img/logo/logo.png') ?>" alt="Tejarat International">
                </a>
            </div>
        </div>
        <!-- logo end -->
        <div class="col-md-9 col-sm-9">
            <div class="header-right-link">
                <!-- search option start -->
                <a class="main-search" href="public/img/TitasProfile.pdf" target="_blank" title="Download Profile"></a>
                <!-- search option end -->
            </div>

            <!-- mainmenu start -->
            <nav class="navbar navbar-default">
                <div class="collapse navbar-collapse" id="navbar-example">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Home Link - Always visible -->
                            <li class="<?= isCurrentSection('home') ? 'active' : '' ?>">
                                <a class="pagess" href="<?= buildUrl('home') ?>">
                                    <i class="fa fa-home"></i>&nbsp;Home
                                </a>
                            </li>

                            <?php 
                            $section = getCurrentSection();
                            
                            // Show Exports link when not in exports section
                            if ($section !== 'exports'): ?>
                            <li class="<?= isCurrentSection('exports') ? 'active' : '' ?>">
                                <a class="pagess" href="<?= buildUrl('exports') ?>">
                                    <i class="fa fa-ship"></i>&nbsp;Exports
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php 
                            // Show Defense link when not in defense section
                            if ($section !== 'defense'): ?>
                            <li class="<?= isCurrentSection('defense') ? 'active' : '' ?>">
                                <a class="pagess" href="<?= buildUrl('defense') ?>">
                                    <i class="fa fa-shield"></i>&nbsp;Defense
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php 
                            // Section-specific menu items (only show when in exports or defense)
                            if ($section === 'exports' || $section === 'defense'): ?>
                            
                            <!-- Our Concern -->
                            <li>
                                <a class="pagess" href="<?= buildUrl($section, 'services') ?>">
                                    <i class="fa fa-ticket"></i>&nbsp;Our Concern
                                </a>
                            </li>

                            <?php if ($section === 'defense'): ?>
                            <!-- Our Clients (Defense only) -->
                            <li>
                                <a class="pagess" href="<?= buildUrl($section, 'partner') ?>">
                                    <i class="fa fa-users"></i>&nbsp;Our Clients
                                </a>
                            </li>
                            <?php endif; ?>

                            <!-- About us dropdown -->
                            <li>
                                <a class="pagess" href="#">
                                    <i class="fa fa-paperclip"></i>&nbsp;About us ↓
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="<?= buildUrl($section, 'message') ?>">
                                            <i class="fa fa-share"></i>&nbsp;Message From CEO
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= buildUrl($section, 'about') ?>">
                                            <i class="fa fa-share"></i>&nbsp;About Company
                                        </a>
                                    </li>
                                    <?php if ($section === 'defense'): ?>
                                    <li>
                                        <a href="<?= buildUrl($section, 'profile') ?>">
                                            <i class="fa fa-share"></i>&nbsp;Company Profile
                                        </a>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                            <?php endif; ?>

                            <!-- Contact Link - Always visible -->
                            <li>
                                <a href="<?= buildUrl(getCurrentSection(), 'contact') ?>">
                                    <i class="fa fa-mobile-phone"></i>&nbsp;Contacts
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- mainmenu end -->

        </div>
    </div>
</div>
