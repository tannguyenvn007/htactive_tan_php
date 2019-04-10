<section class="service pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="">SERVICE</h1>
                <div class="line"></div>
                <p class="lead lead-cus">By using our services, you will get all of the great experience.</p>
                <div class="row">
                    <?php
                        foreach($services as $key => $service){
                    ?>
                    <div class="col-4">
                        <div class="box-service">
                            <i class="<?php echo $service["icon"]?>"></i>
                            <h2 class="pt-4"><?php echo $service["title"]?></h2>
                            <p class="pt-3"><?php echo $service["content"]?></p>
                            <a class="btn btn-danger  btn-cus" href="">READ MORE</a>
                        </div>
                    </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
</section>