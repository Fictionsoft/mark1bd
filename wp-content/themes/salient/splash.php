<?php
/*
 * Template Name: Splash
 *
 *
 */
?>
<?php
include('header_top.php');
?>

<title>
    MARK 1 Bangladesh
</title>
    <style>
        body{
            background:#dddddd !important;
        }
        .total_div {
            margin: auto;
            max-width: 70%;
            height: auto;
            padding: 70px 0px 339px 0px;
            text-align: center;
        }

        .hading h2 {
            color: #136f26 !important;
            font-family: comic sans ms !important;
            font-size: 47px !important;
            transition: all 5s ease 0s !important;
            text-align: center;
        }
      /*  .hading h2:hover{
            transform: rotate(2deg) !important;
            transition:all 3s !important;
            box-shadow: 1px 310px 100px 1px #ffffff !important;
        }*/
        .test {
            margin-left: 7%;
            padding-top: 5%;
        }
        .sub-section-1 {
            border: 2px solid #136f26 !important;
            border-radius: 8px !important;
            float: left !important;
            transition: all 1s ease 0s !important;
            height: auto;
            width: 40%;

        }

        .sub-section-2 {
            border: 2px solid #136f26 !important;
            border-radius: 8px !important;
            float: left !important;
            transition: all 1s ease 0s !important;
            height: auto;
            width: 40%;
            margin-left: 12%;


        }
        
        
        
        

       .mar_fun_img {
        	height: 32% !important;
        	max-width: 83%;
        	padding: 22px 20px 42px 22px;
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
            max-height: 31% !important;
            max-width: 99%;
            margin: 2px 0px 0px 2px;
        }
        .images2 {
            margin-top: 4px !important;
            text-align: center;
        }
        .content h2 {
            color: #136f26!important;
            font-family: comic sans ms!important;
            font-size: 21px!important;
            padding-top: 1px!important;
        }
        .foundation{
            margin-left:12%;
        }
        
        @media screen and (max-width: 991px){
             .hading h2{
                font-size: 26px !important;
            }
        }
        @media screen and (max-width: 767px){
            #text-4 {
            	margin-left: 0px !important;
            }
             #text-7 {
            	margin-left: 0px !important;
            }
             
        }
        
        @media screen and (max-width: 555px){
           
             .sub-section-1 {
                width: 100% !important;
                margin-bottom: 30px;
                
             }
             .foundation{
                 margin-left:0%;
             }
            
            .sub-section-2 {
                width: 100% !important;
                margin-bottom: 30px;
                margin-left: 0;
            }
            
            .test {
                margin-left: 0;
                padding-top: 0;
            }
            
            .hading h2{
                font-size: 17px !important;
            }
            
        }
        @media screen and (max-width: 450px){
            
        }
        @media screen and (max-width: 400px){
            
        }
        
        @media screen and (max-width: 320px){
            
        }
        
        
        
        
        
        
        
    </style>

        <div class="main-section clearfix">
            <div class="total_div">
                <div class="hading">
                    <h2>Welcome to MARK 1 Bangladesh</h2>
                </div>
                <div class="test">
                    <div class="sub-section-1">
                        <a href="<?php echo get_home_url(); ?>/home">
                                <div class="images2">
                                    <img class="mark_tac" src="<?php echo get_template_directory_uri(); ?>/images/MARK1-Technology-Ltd_Logo.png">
                                </div>
                        </a>
                    </div>
                    
                    <div class="sub-section-1 foundation">
                        <a href="<?php echo get_home_url(); ?>/foundation">
                                <div class="images2">
                                    <img class="mark_tac" src="<?php echo get_template_directory_uri(); ?>/images/mark1foundation.png">
                                </div>
                        </a>
                    </div>

                    
                </div>

             </div>
        </div>
<?php get_footer(); ?>
