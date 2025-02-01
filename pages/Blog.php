<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- ==================== Start Header ==================== -->
            <header class="blog-hed">
                <div class="container section-padding bord-thin-bottom-light">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="caption md-mb30">
                                <h1 class="text-indent">We are a digital agency for visually compelling about
                                    stories Hubfolio.</h1>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-1 d-flex align-items-end">
                            <div class="text">
                                <p>Crafting new bright brands, unique visual systems and digital experience focused
                                    on a wide range of original collabs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ==================== End Header ==================== -->
            <!-- ==================== Start Blog ==================== -->
            <div class="blog-mp section-padding">
                <div class="container">
                    <div class="row xlg-marg">
                        <?php while($row = $result->fetch_assoc()){?>
                        <div class="col-lg-4 bord">
                            <div class="item">
                                <div class="info d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="author-img fit-img">
                                                <img src="/assets/imgs/author.png" alt="">
                                            </div>
                                        </div>
                                        <div class="author-info ml-10">
                                            <span>Anis Morsalin</span>
                                            <span class="sub-color">Author</span>
                                        </div>
                                    </div>
                                    <div class="date ml-auto">
                                            <span class="sub-color">
                                                <i class="fa-regular fa-clock mr-15 opacity-7"></i>
                                                <?php
                                                $date = new DateTime($row["date"]);
                                                echo $date->format('M d, Y'); // Jan 25, 2025
                                                ?>
                                            </span>
                                    </div>
                                </div>
                                <div class="img fit-img mt-30">
                                    <a href="/blog/<?php echo $row['slug']?>"><img src="<?php echo $row['thambnail']?>" alt=""></a>
                                </div>
                                <div class="cont mt-30">
                                    <h6>
                                        <a href="/blog/<?php echo $row['slug']?>"><?php echo $row['title']?></a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>

            <!-- ==================== End Blog ==================== -->


        </main>
        <!-- ==================== Start Footer ==================== -->
        <?php require_once "component/footer.php"; ?>
        <!-- ==================== End Footer ==================== -->
    </div>

</div>