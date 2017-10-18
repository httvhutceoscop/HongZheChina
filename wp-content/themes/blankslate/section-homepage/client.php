<style>
    .client-area {
        border-top: 1px solid #ebebeb;
        padding: 12px 0;
    }

    .client-carousel .client-logo {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        min-height: 200px;
    }
    .client-carousel .client-logo img {
        transition: .3s;
        opacity: .5;
        text-align: center;
    }
    .client-carousel .client-logo img:hover {
        opacity: 1;
    }
</style>

<div class="section-padding pdb0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading text-center">
                    <h2>Các tổ chức</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="client-area">
    <div class="container-fluid">
        <div class="client-carousel">
            <?php 
                for ($i = 1; $i < 10; $i++) {
            ?>
            <div class="client-logo">
                <img src="<?php echo get_parent_theme_file_uri('/assets/images/client/client'.$i.'.png') ?>" alt="client">
            </div>
            <?php        
                }
            ?>
        </div>
    </div>
</div>
