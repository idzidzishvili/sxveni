<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>sxveni.ge</title>
      <link rel="shortcut icon" type="image/jpg" href="<?= base_url('assets/images/favicon.ico');?>"/>
      <link rel="stylesheet" href="<?= base_url('assets/css/aos.css');?>">
      <link rel="stylesheet" href="<?= base_url('assets/css/slick.css');?>">
      <link rel="stylesheet" href="<?= base_url('assets/css/venobox.min.css');?>">
      <link rel="stylesheet" href="<?= base_url('assets/css/boxicons.min.css');?>">
      <link rel="stylesheet" href="<?= base_url('assets/css/icofont.min.css');?>">
      <link rel="stylesheet" href="<?= base_url('assets/css/progres-bar.css');?>">
      <link href="https://fonts.googleapis.com/css2?family=Istok+Web&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>" >
      <link rel="stylesheet" href="<?= base_url('assets/css/mediaqueries.css');?>" >
   </head>
   <body class="<?php echo $lang=='ru'?'ru-font-reg':' geo-en-font-reg'; ?> ">
      <!-- Header -->
      <header class="header">
         <nav class="navigation">
            <div class="nav-logo"> <a href="<?= base_url('/');?>"> <img src="<?= base_url('assets/images/logo.svg');?>" alt="sxveni logo" height="50px" /> </a></div>
            <ul class="nav-menu <?php echo $lang=='ru'?'':'geo-en-font-cap';?>">
               <li><a href="#services"><?php echo $siteTexts[0]['text_'.$lang];?></a></li>
               <li><a href="#portfolio"><?php echo $siteTexts[1]['text_'.$lang];?></a></li>
               <li><a href="#partners"><?php echo $siteTexts[2]['text_'.$lang];?></a></li>
               <li><a href="#contact"><?php echo $siteTexts[3]['text_'.$lang];?></a></li>
               <li class="displaymobile">
                  <a href="<?= base_url('ge');?>" class="flags">GE</a>
                  <a href="<?= base_url('en');?>" class="flags">EN</a>
                  <a href="<?= base_url('ru');?>" class="flags">RU</a>
               </li>            
            </ul>
            <ul class="lang-bar">
               <a href="<?= base_url('home/ge');?>"><li class="<?php echo $lang=='ge'?' active':'';?>">GE</li></a>
               <a href="<?= base_url('home/en');?>"><li class="<?php echo $lang=='en'?' active':'';?>">EN</li></a>
               <a href="<?= base_url('home/ru');?>"><li class="<?php echo $lang=='ru'?' active':'';?>">RU</li></a>
            </ul>
            <div class="nav-toggle">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </div>
         </nav>
         <div class="nav-overlay"></div>
      </header>
      <div id="page-head" style="display:flex; flex-direction:column;align-items:center; justify-content:center; height:100vh; width:100vw">
         <img src="<?= base_url('assets/images/404.svg');?>" style="width:90%; max-width:900px">
         <h2><?php echo $this->lang->line('NOT_FOUND');?></h2>
      </div>
   </body>
</html>
