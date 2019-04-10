<section class="about-us pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center">ABOUT HT ACTIVE</h1>
                <div class="line"></div>
                <p class="lead lead-cus text-center">HT Active is the team of Young & Brilliant people. We will help and support all you need about Software Solutions. We’re developers, designers, support specialists and gamers. We have all you needs.</p>
                <div class="row mt-5">
                    <div class="col-6">
                        <h2>Meet the team - HT Active</h2>
                        <div class="row">
                            <div class="col-6">
                                <img src="http://www.htactive.com/assets/voc/images/section-image-2.png" alt="" class="img-fuild img-about">
                            </div>
                            <div class="col-6">
                                <p>We work on the services, product and comunication. We love what we do, and who we do it with. To HT Active, all customers are friends.</p>
                            </div>
                        </div>
                        <p>HT Active wouldn’t be what it is without the incredible and loving contributions of our member. Thanks to everyone who’s put their heart and their energy into this community.</p>
                        <a class="btn btn-outline-danger btn-cus" href="">READ MORE</a>
                    </div>
                    <div class="col-6">
                        <?php foreach ($abouts as $key => $about) { ?>
                            <div class="content mb-2">
                                <button class="collapsible"><span class="question-text mr-2"><i class="<?php echo $about["icon"] ?>"></i></span><?php echo $about["title"] ?></button>
                                <div class="content-question">
                                    <p class="text-left">
                                    <?php echo $about["description"] ?>
                                    </p>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>