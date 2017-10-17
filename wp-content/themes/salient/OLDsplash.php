<?php
/*
 * Template Name: Splash
 * 
 */
?>


<!DOCTYPE html>
    <html>
        <head>
            <title>
                MARK 1 Bangladesh
            </title>
            <style>
                body{
                    background:#dddddd;
                }
                .hading {
                    left: 448px;
                    position: absolute;
                    top: 0;
                }
               .hading h2 {
                      color: #136f26;
                      font-family: comic sans ms;
                      font-size: 30px;
                      margin-top: 50px;
                      padding-top: 5px;
                      transition: all 5s ease 0s;
                    }
                .hading h2:hover{
                    transform: rotate(2deg);
                    transition:all 3s;
                    box-shadow: 1px 310px 100px 1px #ffffff;
                }

                .sub-main-section1 {
                    height: auto;
                    margin: 0;
                    width: 100%;
                    position: relative;
                }

              .sub-section-1 {
                      border: 2px solid #136f26;
                      border-radius: 8px;
                      float: left;
                      height: 207px;
                      margin: 190px 0 0 298px;
                      padding: 20px;
                      transition: all 1s ease 0s;
                      width: 295px;
                } .sub-section-2 {
                      border: 2px solid #136f26;
                      border-radius: 8px;
                      float: left;
                      height: 208px;
                      margin: 189px 0 0 90px;
                      padding: 20px;
                      transition: all 1s ease 0s;
                      width: 290px;
                    }
                .mar_fun_img {
                    height: 74px!important;
                    padding-left: 79px!important;
                    padding-top: 24px!important;
                    width: 73px!important;
                }
               .mar_fun h4 {
                  color: #136f26;
                  float: left;
                  font-family: comic sans ms;
                  font-size: 20px;
                  margin-top: 11px;
                  margin-left: 43px !important;
                }
              /*  .sub-section-3 {
                    border: 2px solid #136f26;
                    border-radius: 8px;
                    float: left;
                    height: 168px;
                    margin: 50px 0 0 350px;
                    padding: 20px;
                    transition: all 1s ease 0s;
                    width: 224px;
                }
                .sub-section-4 {
                    border: 2px solid #136f26;
                    border-radius: 8px;
                    float: left;
                    height: 168px;
                    margin: 50px 0 0 90px;
                    padding: 20px;
                    transition: all 1s ease 0s;
                    width: 224px;
                }*/
                .sub-section-1:hover{
                    box-shadow: 8px #fff;
                    box-shadow: 10px 80px 80px 10px #ffffff;
                    transform: rotatez(2deg);
                }
                .sub-section-2:hover{
                    box-shadow: 8px #fff;
                    box-shadow: 10px 80px 80px 10px #ffffff;
                    transform: rotatez(2deg);
                }
            /*    .sub-section-3:hover{
                    box-shadow: 8px #fff;
                    box-shadow: 10px 80px 80px 10px #ffffff;
                    transform: rotatez(2deg);
                }
                .sub-section-4:hover{
                    box-shadow: 8px #fff;
                    box-shadow: 10px 80px 80px 10px #ffffff;
                    transform: rotatez(2deg);
                }*/

              .images img {
                    float: left!important;
                    height: 170px!important;
                    width: 295px!important;
                 }
                 .images2{
                    margin-top:4px!important; 
                 }
             
              
                .images2 img {
                    float: left!important;
                    height: 84px!important;
                    margin-left: 20px!important;
                    width: 93px!important;
                }
                .content h2 {
                    color: #136f26!important;
                    font-family: comic sans ms!important;
                    font-size: 21px!important;
                    padding-top: 1px!important;
                }


            </style>
        </head>
<body>
    <div class="main-section">
        <div class="sub-main-section1">
            <div class="hading">
                <h2>Welcome to MARK 1 Bangladesh</h2>
            </div>
            <a href="<?php echo get_home_url(); ?>/home">
                <div class="sub-section-1">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/MARK1-Technology-Ltd_Logo.png">
                    </div>
                </div>
            </a>

            <a href="<?php echo get_template_directory_uri(); ?>/foundation.php">
                <div class="sub-section-2">
                    <div class="images2">
                        <img class="mar_fun_img" src="<?php echo get_template_directory_uri(); ?>/images/mark1foundation.png">
                    </div>
                    <div class="mar_fun">
                        <h4>MARK 1 Foundation <!--Limited --></h4>
                    </div>
                </div>
            </a>

        </div>


      <!--  <div class="sub-main-section2">
            <a href="<?php echo get_home_url(); ?>/home">
                <div class="sub-section-3">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/MARK1-Technology-Ltd_Logo.png">
                    </div>
                </div>
            </a>

            <a href="<?php echo get_home_url(); ?>/home">
                <div class="sub-section-4">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/MARK1-Technology-Ltd_Logo.png">
                    </div>
                </div>
            </a>

        </div>-->

    </div>


</body>
</html>