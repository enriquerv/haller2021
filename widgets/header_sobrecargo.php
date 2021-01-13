<nav class="navbar navbar-expand-md fixed-top navbar-fixed-top navbar-light bg-light" id="inicio_sobrecargo">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="https://www.facebook.com/InstitutoRafaelHaller/" target="_blank">
                    <img src="<?php echo $direction; ?>/assets/images/fb_az_in.png" width="80px">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/HallerInstituto" target="_blank">
                    <img src="<?php echo $direction; ?>/assets/images/tw_az_in.png" width="80px">
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/institutorafael_haller/" target="_blank">
                    <img src="<?php echo $direction; ?>/assets/images/in_az_in.png" width="80px">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com/channel/UCIK3jccyaRDlb3Dr_Vm8KAQ" target="_blank">
                    <img src="<?php echo $direction; ?>/assets/images/yt_az_in.png" width="80px">
                </a>
            </li>
        </ul>
    </div>
</nav>


<nav class="navbar navbar-expand-md fixed-top navbar-light bg-light main-nav">
    <div class="container-fluid">
        <div class="navbar-collapse collapse nav-content order-2">
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#" onclick="goToByScroll('ini')">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="goToByScroll('objetivo')">OBJETIVO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="goToByScroll('ventajas')">VENTAJAS</a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2">

            <li class="nav-item">
                <p class="navbar-brand navbar-brand-centered">
                    <a href="<?php echo $direction; ?>/instituto">
                        <img src="<?php echo $direction; ?>/assets/images/escudoBco.png" class="escudo2">
                    </a>
                    <img src="<?php echo $direction; ?>/assets/images/logo_sobrecargo.png" width="150px">
                    <a href="<?php echo $direction; ?>/universidad">
                        <img src="<?php echo $direction; ?>/assets/images/escudo2Bco.png" class="escudo3">
                    </a>
                </p>
                
            </li>

            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target=".nav-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </ul>
        <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3">
            <ul class="ml-auto nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="goToByScroll('plan')">PLAN DE ESTUDIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="navGallery">GALERÍA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="goToByScroll('contacto')">CONTACTO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .escudo2{
        width: 35px;
        position: absolute;
        top: -15px;
        left: 130px;
    }
    .escudo3{
        width: 35px;
        position: absolute;
        top: -15px;
        left: -15px;
    }
    .main-nav{
        top: 112px;
    }
</style>

<script>
    // This is a functions that scrolls to #{blah}link
    function goToByScroll(id) {
        id = id.replace("link", "");
        console.log(id);
        $('html,body').animate({
            scrollTop: $("#" + id + "_sobrecargo").offset().top - 172
        }, 'slow');
    }  
</script>




