<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <!-- ==================== Start Header ==================== -->
            <header class="work-hed">
                <div class="container section-padding">
                    <div class="caption text-center">
                        <h1 style="font-size:75px">Our Portfolio</h1>
                        <div class="path mt-15">
                                <span>
                                    <a href="#">Home</a>
                                </span>
                            <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            <span class="main-color">Portfolio</span>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ==================== End Header ==================== -->
            <!-- ==================== Start Portfolio ==================== -->
            <div class="works-mp section-padding pt-0">
                <div class="container">
                    <div class="row md-marg gallery">
                        <?php while($row = $portfolio->fetch_assoc()){?>
                            <div class="col-lg-6 items">
                            <div class="item">
                                <div class="cont d-flex align-items-center">
                                    <div>
                                        <h5><?php echo $row['title']?></h5>
                                        <?php
                                        $tags = explode(",", $row["tags"]);
                                        foreach ($tags as $tag) { ?>
                                        <span>
                                            <?php echo trim($tag);?>
                                        </span>
                                        <?php } ?>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="/project/<?php echo $row['slug']?>">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="img">
                                    <a href="/project/<?php echo $row['slug']?>">
                                        <img src="<?php echo $row['thambnail']?>" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>

            <!-- ==================== End Portfolio ==================== -->


        </main>
        <!-- ==================== Start Footer ==================== -->
        <?php require_once "component/footer.php"; ?>
        <!-- ==================== End Footer ==================== -->
    </div>
</div>