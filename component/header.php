<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="logo" href="/">
            <img src="/assets/imgs/logo.png" alt="logo" />
        </a>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER["REQUEST_URI"] == "/") ? 'active' : '' ?>" href="/">Home

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER["REQUEST_URI"] == "/about.php") ? 'active' : '' ?>" href="/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER["REQUEST_URI"] == "/portfolio.php") ? 'active' : '' ?>" href="/portfolio.php">Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER["REQUEST_URI"] == "/services.php") ? 'active' : '' ?>" href="/services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_SERVER["REQUEST_URI"] == "/blogs.php") ? 'active' : '' ?>" href="/blogs.php">Blogs</a>
                </li>
            </ul>
        </div>

        <div class="topnav d-flex align-items-center">
            <a href="/contact.php" class="butn butn-rounded">
                <div class="d-flex align-items-center">
                    <span>Start Project</span>
                    <span class="icon ml-10">
                            <img src="/assets/imgs/icons/arrow-top-right.svg" alt="" />
                        </span>
                </div>
            </a>
            <div class="menu-icon cursor-pointer">
                <span class="icon ti-align-right"></span>
            </div>
        </div>
    </div>
</nav>
<div class="hamenu">
    <div class="close-menu cursor-pointer ti-close"></div>
    <div class="container-fluid rest d-flex">
        <div class="menu-links">
            <ul class="main-menu rest">
                <li>
                    <div class="o-hidden">
                        <div class="link cursor-pointer dmenu">
                            <a href="/"><span class="fill-text" data-text="Home">Home</span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="o-hidden">
                        <div class="link cursor-pointer dmenu">
                            <a href="./faqs.php"><span class="fill-text" data-text="FAQ">FAQ</span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="o-hidden">
                        <div class="link cursor-pointer dmenu">
                            <a href="/portfolio.php"><span class="fill-text"
                                                            data-text="Portfolio">Portfolio</span></a>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="o-hidden">
                        <div class="link cursor-pointer dmenu">
                            <a href="./blog-details.php"><span class="fill-text" data-text="Blog">Blog</span>
                            </a>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="o-hidden">
                        <a href="/contact.php" class="link"><span class="fill-text" data-text="Contact Us">Contact
                                    Us</span></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="cont-info valign">
            <div class="text-center full-width">
                <div class="logo">
                    <img src="/assets/imgs/logo.png" alt="" />
                </div>
                <div class="social-icon mt-40">
                    <a href="https://www.facebook.com/profile.php?id=61567458085675"> <i
                            class="fab fa-facebook-f"></i> </a>
                    <!-- <a href="#"> <i class="fab fa-x-twitter"></i> </a> -->
                    <a href="https://www.linkedin.com/company/104859346"> <i class="fab fa-linkedin-in"></i> </a>
                    <!-- <a href="#"> <i class="fab fa-instagram"></i> </a> -->
                </div>
                <div class="item mt-30">
                    <h5>
                        541 Melville Geek, <br />
                        Palo Alto, CA 94301
                    </h5>
                </div>
                <div class="item mt-10">
                    <h5><a href="mailto:hello@orbizenstudio.com">hello@orbizenstudio.com</a></h5>
                    <h5 class="underline"><a href="tel:+8801778383297">+8801778383297</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>