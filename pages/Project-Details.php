<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>
            <header class="work-hed2 section-padding pb-0">
                <div class="container">
                    <div class="caption sec-head text-center mb-80">
                        <span class="sub-head mb-10"><?php echo $data["title"];?></span>
                        <h1 class="fz-70 fw-600">
                            <?php echo $data["longtitle"]?>
                        </h1>
                    </div>
                    <div class="info mb-80 text-center">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="item mb-30">
                                    <span class="opacity-8 mb-10">Category</span>
                                    <h6><?php echo $data["category"];?></h6>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="item mb-30">
                                    <span class="opacity-8 mb-10">Client</span>
                                    <h6><?php echo $data["client"];?></h6>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="item mb-30">
                                    <span class="opacity-8 mb-10">Start Date</span>
                                    <h6><?php
                                        $date = new DateTime($data["date"]);
                                        echo $date->format('d F Y'); // Jan 25, 2025
                                        ?></h6>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="item">
                                    <span class="opacity-8 mb-10">Designer</span>
                                    <h6><?php echo $data["designer"]?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="fit-img radius-15">
                        <img src="<?php echo $data["bgphoto"]?>" alt=""
                             data-lag="0" data-speed="0.5">
                    </div>
                </div>
            </header>
            <!-- ==================== End Header ==================== -->
            <!-- ==================== Start Services ==================== -->

            <section class="proj-details section-padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div>
                                <h2>Project overview</h2>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="content">
                                <?php echo $data["overview"]?>
                            </div>
                        </div>
                    </div>
                    <div class="row sm-marg mt-80">
                        <div class="col-md-12 mb-10 ">
                            <div class="img sm-mb10 h-full">
                                <img  class="img-h-fluid" src="<?php echo $data['photo']?>" alt=""
                                />
                            </div>
                            <div class="d-flex justify-content-center gap-5 pt-50">
                                <?php if($presult != null){ ?>
                                <a href="/project/<?php echo $presult['slug'];?>" class="icon"
                                      style="background:#d0ff71;transform:rotate(225deg);
                                       border-radius:50%; padding:15px;">
                                    <img src="/assets/imgs/icons/arrow-top-right.svg" alt="">
                                </a>
                                <?php } ?>
                                <?php if($nresult != null){ ?>
                                <a href="/project/<?php echo $nresult['slug'];?>" class="icon"
                                   style="background:#d0ff71;transform:rotate(45deg);
                                        border-radius:50%; padding:15px;">
                                    <img src="/assets/imgs/icons/arrow-top-right.svg" alt="">
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ==================== End Services ==================== -->
        </main>
        <!-- ==================== Start Footer ==================== -->
        <?php require_once "../component/footer.php"; ?>
        <!-- ==================== End Footer ==================== -->
    </div>
</div>