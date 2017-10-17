<?php
/*
 Template Name: Splash
 
 */

include('header_top.php');
?>
    <title>
        MARK 1 Bangladesh
    </title>
    <style>
        body{
            background:#dddddd !important;
        }
        .hading {
            left: 448px !important;
            position: absolute !important;
            top: 0 !important;
        }
        .hading h2 {
            color: #136f26 !important;
            font-family: comic sans ms !important;
            font-size: 30px !important;
            margin-top: 80px !important;
            padding-top: 10px !important;
            transition: all 5s ease 0s !important;
        }
        .hading h2:hover{
            transform: rotate(2deg) !important;
            transition:all 3s !important;
            box-shadow: 1px 310px 100px 1px #ffffff !important;
        }

        .sub-main-section1 {
            height: auto !important;
            margin: 0 !important;
            width: 100% !important;
            position: relative !important;
        }

       .sub-section-1 {
            border: 2px solid #136f26 !important;
            border-radius: 8px !important;
            float: left !important;
            height: 207px !important;
            margin: 189px 0 0 268px !important;
            padding: 20px 0 221px 17px !important;
            transition: all 1s ease 0s !important;
            width: 358px !important;}
        .sub-section-2 {
            border: 2px solid #136f26 !important;
            border-radius: 8px !important;
            float: left !important;
            height: 244px !important;
            margin: 189px 0 100px 90px !important;
            padding: 20px !important;
            transition: all 1s ease 0s !important;
            width: 358px !important;
        }
        .mar_fun_img{
            float: left !important;
            height: 84px !important;
            margin: 28px 0px 6px 106px !important;
            width: 100px !important;
        }
        .mar_fun1 h4 {
              color: #136f26 !important;
              float: left !important;
              font-family: comic sans ms !important;
              font-size: 19px !important;
              margin-top: 15px !important;
              margin-left: 20px !important;
              font-weight: bold;
              letter-spacing: 1px !important;
          }
        .mar_fun2 h4 {
            color: #136f26 !important;
            float: left !important;
            font-family: comic sans ms !important;
            font-size: 19px !important;
            margin-top: 10px !important;
            margin-left: 60px !important;
            font-weight: bold;
            letter-spacing: 1px !important;
        }

        .sub-section-1:hover{
            box-shadow: 8px #fff !important;
            box-shadow: 10px 80px 80px 10px #ffffff !important;
            transform: rotatez(2deg) !important;
        }
        .sub-section-2:hover{
            box-shadow: 8px #fff !important;
            box-shadow: 10px 80px 80px 10px #ffffff !important;
            transform: rotatez(2deg) !important;
        }
       .mark_tac {
            float: left !important;
            height: 112px !important;
            padding: 28px 0px 0px 110px;
        }
        .content h2 {
            color: #136f26!important;
            font-family: comic sans ms!important;
            font-size: 21px!important;
            padding-top: 1px!important;
        }

    </style>
<div class="main-section clearfix">
    <div class="sub-main-section1">
        <div class="hading">
            <h2>Welcome to MARK 1 Bangladesh</h2>
        </div>
        <a href="<?php echo get_home_url(); ?>/home">
            <div class="sub-section-1">
                <div class="images">
                    <img class="mark_tac" src="<?php echo get_template_directory_uri(); ?>/images/MARK1 logo_10_10_17.png">
                </div>
                <div class="mar_fun1">
                    <h4>MARK 1 Technology Limited</h4>
                </div>
            </div>
        </a>

        <a href="http://mark1bd.com/foundation/">
            <div class="sub-section-2">
                <div class="images2">
                    <img class="mar_fun_img" src="<?php echo get_template_directory_uri(); ?>/images/MARK1 logo_10_10_17.png">
                </div>
                <div class="mar_fun2">
                    <h4>MARK 1 Foundation</h4>
                </div>
            </div>
        </a>

    </div>
</div>
<?php get_footer(); ?>
