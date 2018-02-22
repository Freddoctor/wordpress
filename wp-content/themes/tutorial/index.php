<?php

;?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php get_header(); ?>
</head>

<body>
<!-- 头部 -->
<div class="header">
    <img class="logoimg" src="<?php echo($static);?>images/logo.png" alt="">
    <ul class="nav">
        <li>图库</li>
        <li>教程</li>
        <li>素材</li>
        <li>资讯</li>
        <li>互动</li>
    </ul>
    <div class="searinput">
        <div class="se-input"><input type="text"><ins></ins></div>
        <a href="javascript:;">登陆</a>
        <a href="javascript:;">注册</a>
    </div>
</div>
<!-- banner区域 -->
<div class="banner">
    <div class="bannercont">
        <a href="javascript:;"><img src="<?php _e($static);?>images/banner.jpg" alt=""></a>
    </div>
    <span class="point">
        <i></i>
        <i></i>
        <i></i>
    </span>
</div>
<!-- 瀑布流区域 -->
<div class="waterfall">
    <div id="masonry" class="container-fluid">
        <div class="box">
            <img src="<?php _e($static);?>/images/waterfall_1.jpg">
            <div class="sletup">
                <p>的说法是电风扇的是的发送到</p>
            </div>
        </div>
        <div class="box">
            <img src="<?php _e($static);?>/images/waterfall_2.jpg">
            <div class="sletup">
                <p>的说法是电风扇的是的发送到</p>
            </div>
        </div>
        <div class="box">
            <img src="<?php _e($static);?>/images/waterfall_3.jpg">
            <div class="sletup">
                <p>的说法是电风扇的是的发送到</p>
            </div>
        </div>
        <div class="box">
            <img src="<?php _e($static);?>/images/waterfall_4.jpg">
            <div class="sletup">
                <p>的说法是电风扇的是的发送到</p>
            </div>
        </div>
        <div class="box">
            <img src="<?php _e($static);?>/images/waterfall_5.jpg">
            <div class="sletup">
                <p>的说法是电风扇的是的发送到</p>
            </div>
        </div>
    </div>
    <a href="javascript:;" id="moreImg">查看更多</a>
</div>
<div class="secfooter">
    <!-- 信息切换 -->
    <div class="info">
        <div class="cour-tab">
            <a href="javascript:;" class="hover">教程</a>
            <a href="javascript:;">咨询</a>
        </div>
        <div class="cour-list">
            <div class="list-content">
                <img src="<?php _e($static);?>/images/imgfo.jpg" alt="">
                <p class="list-h1">星际字体，用PS创建五彩的星际效果字体</p>
                <p class="list-p">这次我们教程大转风格，平常我们做多了萌萌哒转手绘、小清新风格转手绘，今天我们来换一种风格，本篇教程拿一张复古感的美女照</p>
                <div class="list-inter">
                    <a href="javascript:;" class="ic-love">
                        <ins></ins>
                        <em>1234</em>
                    </a>
                    <a href="javascript:;" class="ic-time">
                        <ins></ins>
                        <em>2017-11-14</em>
                    </a>
                </div>
            </div>
            <div class="list-content">
                <img src="<?php _e($static);?>/images/imgfo.jpg" alt="">
                <p class="list-h1">星际字体，用PS创建五彩的星际效果字体</p>
                <p class="list-p">这次我们教程大转风格，平常我们做多了萌萌哒转手绘、小清新风格转手绘，今天我们来换一种风格，本篇教程拿一张复古感的美女照</p>
                <div class="list-inter">
                    <a href="javascript:;" class="ic-love">
                        <ins></ins>
                        <em>1234</em>
                    </a>
                    <a href="javascript:;" class="ic-time">
                        <ins></ins>
                        <em>2017-11-14</em>
                    </a>
                </div>
            </div>
            <a href="javascript:;" class="list-more">MORE >></a>
        </div>
    </div>
    <!-- 互动 -->
    <div class="intera">
        <a href="javascript:;" class="intera-tag marb_20">互动</a>
        <img src="<?php _e($static);?>/images/imgfo2.jpg" alt="">
        <p class="intera-p">星际字体，用PS创建五彩的星际效果字体</p>
        <p class="intera-p">社交软件不社交：用了那么多社交软件和婚恋网站，却撩不……</p>
        <p class="intera-p">星际字体，用PS创建五彩的星际效果字体</p>
        <p class="intera-p">社交软件不社交：用了那么多社交软件和婚恋网站，却撩不人……</p>
        <p class="intera-p">星际字体，用PS创建五彩的星际效果字体</p>
    </div>
</div>
<!-- 底部 -->
<div class="footer">
    <p>独角兽 | 备案号2017-01-11</p>
    <p>地点：上海市普陀区中山北路2438号中瑞商务大厦15楼  邮编：200040  电话：400-716-7661</p>
</div>
</body>

</html>
