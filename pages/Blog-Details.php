<div id="smooth-wrapper">
    <div id="smooth-content">
        <main class="main-bg">
            <!-- ==================== Start Slider ==================== -->

            <header class="post-header pt-20">
                <div
                        class="container-xl bg-img mt-80"
                        data-background="<?php echo $data['bgphoto']?>"
                        data-overlay-dark="4"
                >
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="caption">
                                <div class="tags fz-14">
                                    <?php
                                    $tags = explode(",", $data["tags"]); // Split tags by comma into an array
                                    foreach ($tags as $tag) {
                                        $tag = trim($tag); // Trim any leading/trailing spaces
                                        ?>
                                        <a href="#"><?php echo $tag;?></a>
                                    <?php } ?>
                                </div>
                                <h1 class="fz-55 mt-30">
                                    <?php echo $data["title"];?>
                                </h1>
                            </div>
                            <div class="info d-flex mt-40 align-items-center">
                                <div class="left-info sm-mb30">
                                    <div class="d-flex align-items-center">
                                        <div class="author-info">
                                            <div class="d-flex align-items-center">
                                                <a href="#0" class="circle-60">
                                                    <img
                                                            src="/assets/imgs/author.png"
                                                            alt=""
                                                            class="circle-img"
                                                    />
                                                </a>
                                                <a href="#0" class="ml-20">
                                                    <span class="opacity-7 mb-5">Author</span>
                                                    <h6 class="fz-16">Anis Morsalin</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="date ml-50">
                                            <a href="#0">
                                                <span class="opacity-7 mb-5">Published</span>
                                                <h6 class="fz-16">
                                                    <?php
                                                    $date = new DateTime($data["date"]);
                                                    echo $date->format('M d, Y'); // Jan 25, 2025
                                                    ?>
                                                </h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-info ml-auto">
                                    <div>
                                        <span class="pe-7s-comment fz-18 mr-10"></span>
                                        <span class="opacity-7">02 Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ==================== End Slider ==================== -->

            <!-- ==================== Start Blog ==================== -->

            <section class="blog section-padding">
                <div class="container">
                    <div class="row xlg-marg">
                        <div class="col-lg-8">
                            <div class="main-post">
                                <div class="item pb-60">
                                    <?php echo $data["body"];?>
                                    <div class="mb-50 mt-50">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="iner-img sm-mb30">
                                                    <img src="<?php echo $data['thambnail']?>" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--  <div class="title mb-10">
                                        <h4>Apple currently sells.</h4>
                                      </div>

                                      <div class="text mb-20">
                                        <p>
                                          A new report said earlier this week that Apple is
                                          working on a brand new laptop. Apple plans to release
                                          a 15-inch MacBook Air in 2023, a first for the Air
                                          series. A trusted Apple insider with a proven track
                                          record confirmed that Apple is working on the larger
                                          MacBook Air.
                                        </p>
                                      </div> -->

                                    <!-- <div class="unorder-list mb-30">
                                      <h6 class="mb-15">Ordered & Unordered Lists.</h6>
                                      <ul class="rest">
                                        <li>Yet this above sewed flirted opened ouch</li>
                                        <li>Goldfinch realistic sporadic ingenuous</li>
                                        <li>
                                          Abominable this abidin far successfully then like
                                          piquan
                                        </li>
                                      </ul>
                                    </div> -->
                                    <!--
                                                          <div class="order-list mb-30">
                                                            <h6 class="mb-15">Ordered & Unordered Lists.</h6>
                                                            <ul class="rest">
                                                              <li>
                                                                <span>01 -</span> Yet this above sewed flirted
                                                                opened ouch
                                                              </li>
                                                              <li>
                                                                <span>02 -</span> Goldfinch realistic sporadic
                                                                ingenuous
                                                              </li>
                                                              <li>
                                                                <span>03 -</span> Abominable this abidin far
                                                                successfully then like piquan
                                                              </li>
                                                            </ul>
                                                          </div> -->

                                    <!-- <div class="text">
                                      <p>
                                        However, Apple might not include it in the Air series
                                        when it launches it. As for the notebook’s release
                                        date, the 15-inch MacBook isn’t coming soon. It’ll get
                                        a late 2023 release at best, according to the new
                                        claims.
                                      </p>
                                    </div> -->
                                </div>
                                <div class="info-area flex pt-50 bord-thin-top">
                                    <div>
                                        <div class="tags flex">
                                            <div class="valign">
                                                <span>Tags :</span>
                                            </div>
                                            <div>
                                                <?php
                                                $tags = explode(",", $data["tags"]); // Split tags by comma into an array
                                                foreach ($tags as $tag) {
                                                    $tag = trim($tag); // Trim any leading/trailing spaces
                                                    ?>
                                                    <a href="#"><?php echo $tag;?></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="share-icon flex">
                                            <div class="valign">
                                                <span>Share :</span>
                                            </div>
                                            <div>
                                                <a href="https://www.facebook.com/"
                                                ><i class="fab fa-facebook-f"></i
                                                    ></a>
                                                <a href="https://www.twitter.com/"
                                                ><i class="fab fa-twitter"></i
                                                    ></a>
                                                <a href="https://www.youtube.com/"
                                                ><i class="fab fa-youtube"></i
                                                    ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="author-area mt-50 bord-thin-bottom">
                                    <div class="flex">
                                        <div class="author-img mr-30">
                                            <div class="img">
                                                <img
                                                        src="/assets/imgs/author.png"
                                                        alt=""
                                                        class="circle-img"
                                                />
                                            </div>
                                        </div>
                                        <div class="cont valign">
                                            <div class="full-width">
                                                <h6 class="fw-600 mb-10">Anis Morsalin</h6>
                                                <p>
                                                    Anis Morsalin, the CEO of Orbizen Studio, is a visionary leader dedicated to delivering innovative web solutions
                                                    tailored to client growth. With a deep passion for user-centric design, he drives the studio's mission to create
                                                    impactful digital experiences.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-from mt-80 md-mb80">
                                <div class="mb-60">
                                    <h3>Leave a comment</h3>
                                </div>
                                <form id="contact-form" method="post" action="contact.php">
                                    <div class="messages"></div>

                                    <div class="controls row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-30">
                                                <input
                                                        id="form_name"
                                                        type="text"
                                                        name="name"
                                                        placeholder="Name"
                                                        required="required"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group mb-30">
                                                <input
                                                        id="form_email"
                                                        type="email"
                                                        name="email"
                                                        placeholder="Email"
                                                        required="required"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                            <textarea
                                    id="form_message"
                                    name="message"
                                    placeholder="Message"
                                    rows="4"
                                    required="required"
                            ></textarea>
                                            </div>
                                            <div class="text-center">
                                                <div class="mt-30">
                                                    <button type="submit">
                                                        <span class="text">Post Comment</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar">
                                <div class="search-box">
                                    <input
                                            type="text"
                                            name="search-post"
                                            placeholder="Search"
                                    />
                                    <span class="icon pe-7s-search"></span>
                                </div>
                                <div class="widget last-post-thum">
                                    <h6 class="title-widget">latest Posts</h6>
                                    <?php while($row = $latest->fetch_array()){ ?>
                                    <div class="item d-flex align-items-center">
                                        <div>
                                            <div class="img">
                                                <a href="/blog/<?php echo $row['slug']?>">
                                                    <img src="<?php echo $row['thambnail']?>" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="cont">
                                            <span class="tag"><a href="#"><?php echo $row['category']?></a></span>
                                            <h6>
                                                <a href="/blog/<?php echo $row['slug']?>">
                                                    <?php echo $row["title"]?></a>
                                            </h6>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="widget tags">
                                    <h6 class="title-widget">Tags</h6>
                                    <div>
                                        <?php
                                        $tags = explode(",", $data["tags"]); // Split tags by comma into an array
                                        foreach ($tags as $tag) {
                                        $tag = trim($tag); // Trim any leading/trailing spaces
                                        ?>
                                        <a href="#"><?php echo $tag;?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Blog ==================== -->

            <!-- ==================== Start Recent Blog ==================== -->

            <?php if(false){?><div class="blog-mp">
                <div class="container section-padding bord-thin-top-light">
                    <div class="sec-head mb-80">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2>Recent News</h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex">
                                    <a
                                            href="#0"
                                            class="butn butn-md butn-bord butn-rounded ml-auto"
                                    >
                                        <div class="d-flex align-items-center">
                                            <span>All Articles</span>
                                            <span class="icon ml-20">
                            <i class="fa-solid fa-chevron-right"></i>
                          </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row xlg-marg">
                        <div class="col-lg-4 bord">
                            <div class="item">
                                <div class="info d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="author-img fit-img">
                                                <img src="../assets/imgs/blogs/blog1/a1.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="author-info ml-10">
                                            <span>M Moussa</span>
                                            <span class="sub-color">editor</span>
                                        </div>
                                    </div>
                                    <div class="date ml-auto">
                        <span class="sub-color"
                        ><i class="fa-regular fa-clock mr-15 opacity-7"></i>
                          12 hours ago</span
                        >
                                    </div>
                                </div>
                                <div class="img fit-img mt-30">
                                    <img src="../assets/imgs/blogs/blog1/1.jpg" alt="" />
                                </div>
                                <div class="cont mt-30">
                                    <h6>
                                        <a href="#0">We’re winner SOTY at CSS Award 2023</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 bord">
                            <div class="item">
                                <div class="info d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="author-img fit-img">
                                                <img src="../assets/imgs/blogs/blog1/a1.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="author-info ml-10">
                                            <span>M Moussa</span>
                                            <span class="sub-color">editor</span>
                                        </div>
                                    </div>
                                    <div class="date ml-auto">
                        <span class="sub-color"
                        ><i class="fa-regular fa-clock mr-15 opacity-7"></i>
                          12 hours ago</span
                        >
                                    </div>
                                </div>
                                <div class="img fit-img mt-30">
                                    <img src="../assets/imgs/blogs/blog1/2.jpg" alt="" />
                                </div>
                                <div class="cont mt-30">
                                    <h6>
                                        <a href="#0"
                                        >Common UX painpoints in Dashboard-related projects
                                            you must know</a
                                        >
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="info d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="author-img fit-img">
                                                <img src="../assets/imgs/blogs/blog1/a2.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="author-info ml-10">
                                            <span>M Moussa</span>
                                            <span class="sub-color">editor</span>
                                        </div>
                                    </div>
                                    <div class="date ml-auto">
                        <span class="sub-color"
                        ><i class="fa-regular fa-clock mr-15 opacity-7"></i>
                          12 hours ago</span
                        >
                                    </div>
                                </div>
                                <div class="img fit-img mt-30">
                                    <img src="/assets/imgs/blogs/blog1/3.jpg" alt="" />
                                </div>
                                <div class="cont mt-30">
                                    <h6>
                                        <a href="#0">Visual Website Tips #5</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><?php }?>

            <!-- ==================== End Recent Blog ==================== -->
        </main>
        <!-- ==================== Start Footer ==================== -->
        <?php require_once "../component/footer.php"; ?>
        <!-- ==================== End Footer ==================== -->
    </div>
</div>
