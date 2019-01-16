<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"/home/wwwroot/school.wxn.fun/public/../application/index/view/index/index.html";i:1547225798;s:69:"/home/wwwroot/school.wxn.fun/application/index/view/public/title.html";i:1547226402;s:68:"/home/wwwroot/school.wxn.fun/application/index/view/public/link.html";i:1547225731;s:70:"/home/wwwroot/school.wxn.fun/application/index/view/public/header.html";i:1547226438;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<!-- Basic need -->
<title><?php echo $system['title']; ?></title>
<meta charset="UTF-8">
<link rel="icon" href="<?php echo $system['icon']; ?>" type="image/x-icon"/>
<meta name="description" content="Kinder" value="<?php echo $system['description']; ?>">
<meta name="keywords" content="Kinder universell" value="<?php echo $system['keywords']; ?>">
<meta name="author" content="tnthao" value="<?php echo $system['title']; ?>">
	<link rel="profile" href="#profile">
<link rel="shortcut icon" href="/static/index/images/favicon.ico.html">

<!-- Mobile specific meta -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone-no">

<!-- CSS files -->
<link rel="stylesheet" href="/static/index/css/style.css">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
<!--  -->
<link rel="stylesheet" href="/static/index/css/ionicons.min.css">
<link rel="stylesheet" href="/static/index/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="/static/index/css/animate.css"> -->

<!-- html5/css3 for old browsers -->
<script src="/static/index/js/modernizr.js"></script>
</head>
<body>
<!-- BEGIN | Header -->
<header id="ht_header" class="flw">
	<!-- top -->
	<div class="top_section flw">
		<div class="container">
			<div class="row">
				<div class="top_box flw">
					<ul class="top_list">
						<li class="spc"><span class="ion-ios-telephone"></span>官方电话:10086</li>
						<li class="spc"><span class="ion-android-mail"></span>官方邮箱: <a href="mailto:info@kidkatkg.co.us">info@kidkatkg.co.us</a></li>
						<li>
							<form action="#">
								<button type='submit'></button>
								<input type="text" placeholder="站内搜索..." required>
							</form>
						</li>
					</ul>
					<ul class="top_social">
						<li><a href="#" class="ion-social-facebook"></a></li>
						<li><a href="#" class="ion-social-googleplus-outline"></a></li>
						<li><a href="#" class="ion-social-twitter"></a></li>
						<li><a href="#" class="ion-social-skype-outline"></a></li>
						<li><a href="#" class="ion-social-pinterest"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- end top -->

	<!-- top menu -->
	<div class="box_mn uk-panel uk-panel-box uk-panel-box-primary" data-uk-sticky="{top:-200, animation: 'uk-animation-slide-top'}">
		<div class="top_menu flw">
			<div class="container">
				<a href="index.html" class="lg" title="Kinder">
					<img src="<?php echo $system['logo']; ?>" alt="Logo Image">
				</a>
				<a href="#" class="appoint">申请加盟</a>
				<!-- menu -->
				<nav class="nav is-fixed">
					<div class="nav-toggle">
						<div class="icon-menu"> <span class="line line-1"></span> <span class="line line-2"></span> <span class="line line-3"></span> </div>
					</div>
					<div class="nav-container">
						<ul class="nav-menu menu">
							<li class="menu-item has-dropdown">
								<a role="button" class="menu-link set_active">首页</a>
								<ul class="nav-dropdown menu">
									<li class="menu-item"><a href="index.html" class="menu-link">首页样式一</a> </li>
									<li class="menu-item"><a href="index_2.html" class="menu-link sub_active">首页样式二</a> </li>
									<li class="menu-item"><a href="index_3.html" class="menu-link">首页样式三</a> </li>
									<li class="menu-item"><a href="index_4.html" class="menu-link">首页样式四</a> </li>
								</ul>
							</li>
							<li class="menu-item has-dropdown">
								<a role="button" class="menu-link">关于我们</a>
								<ul class="nav-dropdown menu">
									<li class="menu-item"><a href="about.html" class="menu-link">About ver. 1</a> </li>
									<li class="menu-item"><a href="about_2.html" class="menu-link">About ver. 2</a> </li>
								</ul>
							</li>
							<li class="menu-item has-dropdown">
								<a role="button" class="menu-link">课程介绍</a>
								<ul class="nav-dropdown menu">
									<li class="menu-item"><a href="classes.html" class="menu-link">Classes</a> </li>
									<li class="menu-item"><a href="classes_single.html" class="menu-link">Single ver. 1</a> </li>
									<li class="menu-item"><a href="classes_single_2.html" class="menu-link">Single ver. 2</a> </li>
								</ul>
							</li>
							<li class="menu-item"><a href="gallery.html" class="menu-link">Gallery</a></li>
							<li class="menu-item has-dropdown">
								<a role="button" class="menu-link">Pages</a>
								<ul class="nav-dropdown menu">
									<li class="menu-item"><a href="coming_soon.html" class="menu-link">Coming soon</a> </li>
									<li class="menu-item"><a href="event.html" class="menu-link">Event</a> </li>
									<li class="menu-item"><a href="event_detail.html" class="menu-link">Event Detail</a></li>
									<li class="menu-item"><a href="404.html" class="menu-link">404</a></li>
								</ul>
							</li>
							<li class="menu-item has-dropdown">
								<a role="button" class="menu-link">Blog</a>
								<ul class="nav-dropdown menu">
									<li class="menu-item"><a href="blog.html" class="menu-link">Blog</a> </li>
									<li class="menu-item"><a href="blog_single.html" class="menu-link">Blog Detail</a> </li>
								</ul>
							</li>
							<li class="menu-item"><a href="contact.html" class="menu-link">Contact</a></li>
						</ul>
					</div>
				</nav>
				<!-- end menu -->
			</div>
		</div>
	</div>
	<!-- end top menu -->
</header>
<!-- END | Header -->

	<main id="main" class="page_content">
<!-- main slider index ver. 1 -->
<div class="main_sl flw">
	<div class="box_sliders">
		<div 
			id="rev_slider_4_1_wrapper" 
			class="rev_slider_wrapper fullwidthbanner-container" 
			data-alias="classicslider1" 
			style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
				<div 
					id="rev_slider_4_1" 
					class="rev_slider fullwidthabanner" 
					style="display:none;" data-version="5.0.7">
					<ul>
						<li 
							data-index="rs-16" 
							data-transition="zoomout" 
							data-slotamount="default"
							data-easein="Power4.easeInOut" 
							data-easeout="Power4.easeInOut" 
							data-masterspeed="2000"
							data-fstransition="fade" 
							data-fsmasterspeed="1500" 
							data-fsslotamount="7" 
							data-saveperformance="off"  
							data-title="Intro" 
							data-description="" 
							class="add_">
							<img 
								src="/static/index/images/upload/slide1.jpg"  
								alt="img"  
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat" 
								class="rev-slidebg"
								data-no-retina>
							<div 
								class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0 tit_main" 
								id="slide-16-layer-1" 
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" data-voffset="['354','200','170','80']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="1000" 
								data-splitin="chars" 
								data-splitout="none" 
								data-responsive_offset="on"
								data-elementdelay="0.05"
								data-fontsize="['64','54','34','24']"
								data-fontweight="['900','700','400','400']"
								style="z-index: 5; white-space: nowrap;">BEST KINDERGARTEN IN USA.
							</div>
							<div 
								class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0 circle_text" 
								id="slide-16-layer-2" 
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" data-voffset="['320','170','140','50']"
								data-width="none"
								data-height="none"
								data-fontsize="['42','30','24','20']"
								data-lineheight="['42','30','24','20']"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="1000" 
								data-responsive_offset="on"
								data-elementdelay="0.05"
								style="z-index: 5; white-space: nowrap;">
								Come and visit us today
							</div>
							<div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0 tit_des" 
								id="slide-16-layer-6" 
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" data-voffset="['538','400','280','150']" 
								data-width="none"
								data-fontsize="['18','18','18','18']"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="1500" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 									
								style="z-index: 6; white-space: nowrap;">At November 12, 13 and December 1, 2
							</div>
							<div id="slide-16-layer-4" class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0 tit_btn"
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" data-voffset="['596','450','400','200']" 
								data-width="['295','295','295','295']"
								data-height="['50','45','40','40']"
								data-lineheight="['47','38','30','30']"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
								data-fontsize="['16','16','16','16']"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="1500" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 									
								style="z-index: 6; white-space: nowrap;">
								<a href="#" class="btn_go">MAKE AN APPOINTMENT</a>
							</div>
							<div class="tp-caption NotGeneric-Icon tp-resizeme rs-parallaxlevel-0 icon_" 
								id="slide-16-layer-5" 
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" data-voffset="['172','50','10','10']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-style_hover="cursor:default;"

								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="2000" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 									
								style="z-index: 7; white-space: nowrap;">
								<img src="/static/index/images/face.png" alt="img">
							</div>
						</li>
						<li
							data-index="rs-17" 
							data-transition="zoomout" 
							data-slotamount="default"
							data-easein="Power4.easeInOut" 
							data-easeout="Power4.easeInOut" 
							data-masterspeed="2000" 
							data-rotate="0"  
							data-fstransition="fade" 
							data-fsmasterspeed="1500" 
							data-fsslotamount="7" 
							data-saveperformance="off"  
							data-title="Intro" 
							data-description="" 
							class="add_">
							<img 
								src="/static/index/images/upload/slide_2.jpg"  
								alt="img"  
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat" 
								class="rev-slidebg"
								data-no-retina>
							<div 
								class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-3 title_main_2" 
								id="slide-17-layer-1" 
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" data-voffset="['335','300','255','125']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-fontsize="['84','55','45','36']"
								data-fontweight="['700','700','700','700']"
								data-lineheight="['84','84','84','84']"
								data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:0px;" 
								data-mask_out="x:inherit;y:inherit;" 
								data-start="1000" 
								data-splitin="chars" 
								data-splitout="none" 
								data-responsive_offset="on" 

								data-elementdelay="0.05" 

								style="z-index: 5; white-space: nowrap;">Education For Kids Perfectly!
							</div>
							<div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0 tit_btn_2" 
								id="slide-16-layer-3" 
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" data-voffset="['596','450','400','250']" 
								data-width="['295','295','295','295']"
								data-height="['50','45','40','40']"
								data-lineheight="['47','38','30','30']"
								data-fontsize="['16','16','16','16']"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="1500" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 									
								style="z-index: 6; white-space: nowrap;">
								<a href="#" class="btn_go">MAKE AN APPOINTMENT</a>
							</div>
							<div
								class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-2 welcome_" 
								id="slide-17-layer-4" 
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" data-voffset="['278','230','150','50']" 
								data-fontsize="['36','28','24','18']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"

								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-mask_in="x:0px;y:[100%];" 
								data-mask_out="x:inherit;y:inherit;" 
								data-start="1500" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on"
								style="z-index: 7; white-space: nowrap;">
								<i class="ion-android-star-outline big_3"></i>
								<i class="ion-android-star-outline big_2"></i>
								<i class="ion-android-star big_1"></i>
								Welcome to KinderUniversell!
								<i class="ion-android-star big_1"></i>
								<i class="ion-android-star-outline big_2"></i>
								<i class="ion-android-star-outline big_3"></i>
							</div>
						</li>
					</ul>
				</div>
			</div>
	</div>
</div>
<!-- end main slider index ver. 1 -->
<!-- section item -->

<div class="_section_item flw">
	<div class="container">
		<div class="row">
			<div class="box_shadow flw">
				<div class="col-md-4 col-lg-4 nopadding">
					<div class="_box_item _box_item_one bd_radi_l">
						<span class="icon-1 kinder_icon"></span>
						<div class="medal_">
							<span>Programs:</span>
							<h3>Full- and Part-Day</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</p>
						</div>
						<a href="#" class="btn_read">read more</a>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 nopadding"
				data-wow-delay=".2s" data-wow-duration=".7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.2s; animation-name: fadeInUpSmall;" >
					<div class="_box_item _box_item_two">
						<span class="icon-2 kinder_icon"></span>
						<div class="medal_">
							<span>Location:</span>
							<h3>In or Out of School</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</p>
						</div>
						<a href="#" class="btn_read">read more</a>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 nopadding wow fadeInUpSmall animated"
				data-wow-delay=".4s" data-wow-duration=".7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.4s; animation-name: fadeInUpSmall;" >
					<div class="_box_item _box_item_three bd_radi_r">
						<span class="icon-3 kinder_icon"></span>
						<div class="medal_">
							<span>Teacher:</span>
							<h3>Credential–Training</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</p>
						</div>
						<a href="#" class="btn_read">read more</a>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

<!-- end section item -->
<!-- section featured -->
<div class="_section_featured flw">
	<div class="container">
		<div class="row">
			<div class="col-sm-1">
				<span class="_fl ion-bug"></span>
			</div>
			<div class="col-md-3">
				<div class="_it_feat">
					<h3><span>Always</span> Innovation</h3>
					<p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-sm-1">
				<span class="_fl ion-easel"></span>
			</div>
			<div class="col-md-3">
				<div class="_it_feat">
					<h3><span>Growing</span> by Learning</h3>
					<p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-sm-1">
				<span class="_fl ion-android-hand"></span>
			</div>
			<div class="col-md-3">
				<div class="_it_feat">
					<h3>Music <span>And</span> Art Room</h3>
					<p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-1">
				<span class="_fl ion-icecream"></span>
			</div>
			<div class="col-md-3">
				<div class="_it_feat">
					<h3><span>Pursuing</span> Excellence</h3>
					<p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-sm-1">
				<span class="_fl ion-earth"></span>
			</div>
			<div class="col-md-3">
				<div class="_it_feat">
					<h3><span>Global</span> Citizenship</h3>
					<p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-sm-1">
				<span class="_fl ion-android-sunny"></span>
			</div>
			<div class="col-md-3">
				<div class="_it_feat">
					<h3>Multimedia <span>Centre</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- end section featured -->
<!-- section classes -->
<div class="_section_classes flw">
	<div class="container">
		<div class="class_title">
			<h3>Your weekly classes</h3>
			<h4>�?Quality classes for kids �?/h4>
		</div>
		<div class="row">
			<div class="col-md-4 col-lg-4">
				<div class="classes_it">
					<div class="box_img">
						<a href="#"><img src="/static/index/images/upload/babe1.png" alt="Image babe"></a>
						<div class="wave"></div>
					</div>
					<div class="box_suma">
						<div class="date_ flw">
							<span>December 8, 2016</span>
							<span>8:00 am</span>
						</div>
						<a href="#" class="name_ flw">Letter Match Class</a>
						<div class="rate_ flw">
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
						</div>
						<div class="sumary_ flw">
							<p>Elipsis magna a terminal nulla elementum morbi elite forte maecenas est magna vehicula est node maecenas.  <b>Praesent arcu gravida vehicula</b> est node maecenas loareet morbi.</p>
						</div>
						<a href="#" class="btn_apply">apply</a>
						<a class="more_" href="#">
							<span></span>
							<span></span>
							<span></span>
						</a>
						<div class="popup_">
							<a href="#" class="btn_popup">More info</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4">
				<div class="classes_it">
					<div class="box_img">
						<a href="#"><img src="/static/index/images/upload/babe2.png" alt="Image babe"></a>
						<div class="wave"></div>
					</div>
					<div class="box_suma">
						<div class="date_ flw">
							<span>December 8, 2016</span>
							<span>8:00 am</span>
						</div>
						<a href="#" class="name_ flw">Letter Match Class</a>
						<div class="rate_ flw">
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
						</div>
						<div class="sumary_ flw">
							<p>Elipsis magna a terminal nulla elementum morbi elite forte maecenas est magna vehicula est node maecenas.  <b>Praesent arcu gravida vehicula</b> est node maecenas loareet morbi.</p>
						</div>
						<a href="#" class="btn_apply">apply</a>
						<a class="more_" href="#">
							<span></span>
							<span></span>
							<span></span>
						</a>
						<div class="popup_">
							<a href="#" class="btn_popup">More info</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4">
				<div class="classes_it">
					<div class="box_img">
						<a href="#"><img src="/static/index/images/upload/babe3.png" alt="Image babe"></a>
						<div class="wave"></div>
					</div>
					<div class="box_suma">
						<div class="date_ flw">
							<span>December 8, 2016</span>
							<span>8:00 am</span>
						</div>
						<a href="#" class="name_ flw">Letter Match Class</a>
						<div class="rate_ flw">
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
						</div>
						<div class="sumary_ flw">
							<p>Elipsis magna a terminal nulla elementum morbi elite forte maecenas est magna vehicula est node maecenas.  <b>Praesent arcu gravida vehicula</b> est node maecenas loareet morbi.</p>
						</div>
						<a href="#" class="btn_apply">apply</a>
						<a class="more_" href="#">
							<span></span>
							<span></span>
							<span></span>
						</a>
						<div class="popup_">
							<a href="#" class="btn_popup">More info</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="#" class="all_classes">OUR ALL CLASSES</a>
	</div>
</div>
<!-- end section classes -->
<!-- _section_teacher -->
<div class="_section_teacher flw">
	<div class="box_parallax flw">
		<div class="parallax"><img src="/static/index/images/upload/slide2.jpg" alt="background feauted"></div>
	</div>
	<div class="box_teacher flw">
		<div class="container">
			<div class="teacher_title flw">
				<h2>Our manager &amp; teacher</h2>
				<h3>�?Carefully, lovely, smooth �?/h3>
				<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc <br>putamus parum claram, anteposuerit litterarum formas.</p>
			</div>
			<div class="row">
				<div class="col-md-3 col-lg-3">
					<div class="box_item">
				    	<ul class="social_">
				    		<li><a href="#" class="fa fa-pinterest-p"></a></li>
				    		<li><a href="#" class="fa fa-google-plus"></a></li>
				    		<li><a href="#" class="fa fa-twitter"></a></li>
				    		<li><a href="#" class="fa fa-facebook"></a></li>
				    	</ul>
					    <div class="box_img hvr_icon_push">
					        <img src="/static/index/images/upload/teacher1.png" alt="Image Teacher">
					    </div>
					    <div class="teacher_info">
					        <a href="#">Talor Swift</a>
					        <span></span>
					        <p>Teacher</p>
					    </div>
					</div>
				</div>
				<div class="col-md-3 col-lg-3">
					<div class="box_item">
				    	<ul class="social_">
				    		<li><a href="#" class="fa fa-pinterest-p"></a></li>
				    		<li><a href="#" class="fa fa-google-plus"></a></li>
				    		<li><a href="#" class="fa fa-twitter"></a></li>
				    		<li><a href="#" class="fa fa-facebook"></a></li>
				    	</ul>
					    <div class="box_img hvr_icon_push">
					        <img src="/static/index/images/upload/teacher2.png" alt="Image Teacher">
					    </div>
					    <div class="teacher_info">
					        <a href="#">Talor Swift</a>
					        <span></span>
					        <p>Teacher</p>
					    </div>
					</div>
				</div>
				<div class="col-md-3 col-lg-3">
					<div class="box_item">
				    	<ul class="social_">
				    		<li><a href="#" class="fa fa-pinterest-p"></a></li>
				    		<li><a href="#" class="fa fa-google-plus"></a></li>
				    		<li><a href="#" class="fa fa-twitter"></a></li>
				    		<li><a href="#" class="fa fa-facebook"></a></li>
				    	</ul>
					    <div class="box_img hvr_icon_push">
					        <img src="/static/index/images/upload/teacher3.png" alt="Image Teacher">
					    </div>
					    <div class="teacher_info">
					        <a href="#">Cherry Lad</a>
					        <span></span>
					        <p>Teacher</p>
					    </div>
					</div>
				</div>
				<div class="col-md-3 col-lg-3">
					<div class="box_item">
				    	<ul class="social_">
				    		<li><a href="#" class="fa fa-pinterest-p"></a></li>
				    		<li><a href="#" class="fa fa-google-plus"></a></li>
				    		<li><a href="#" class="fa fa-twitter"></a></li>
				    		<li><a href="#" class="fa fa-facebook"></a></li>
				    	</ul>
					    <div class="box_img hvr_icon_push">
					        <img src="/static/index/images/upload/teacher4.png" alt="Image Teacher">
					    </div>
					    <div class="teacher_info">
					        <a href="#">Carry Mod</a>
					        <span></span>
					        <p>Teacher</p>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end _section_teacher -->
<!-- section counter -->
<div class="_section_counter flw">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-lg-3">
				<div class="item_counter">
					<span class="counter one">9190</span>
					<span class="or_ smile"></span>
					<p>Teaching Hours</p>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="item_counter">
					<span class="counter two">190</span>
					<span class="bl_ smile"></span>
					<p>Meals Per Year</p>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="item_counter">
					<span class="counter three">1910</span>
					<span class="ort_ smile"></span>
					<p>Morning Sessions</p>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="item_counter">
					<span class="counter four">690</span>
					<span class="orr_ smile"></span>
					<p>Full Daycare</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end section counter -->





























































































<!-- section testim -->
<div class="_section_testim flw">
	<div class="box_parallax flw">
		<div class="parallax"><img src="/static/index/images/upload/slide3.jpg" alt="background feauted"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-lg-5">
				<div class="testim_title">
					<h3>Parents Testimonials</h3>
					<h4>�?Don’t hear from us only �?/h4>
					<p>Elipsis magna a terminal nulla elementum morbi elite forte maecenas est magna vehicula est node maecenas.</p>
				</div>
				<div class="testim_vd">
					<h3><a href="#">Bill Johnson</a></h3>
					<span>Kinny Shine’s mom, live in New York C.</span>
					<p>“Elipsis magna a terminal nulla elementum morbi elite forte maecenas est magna vehicula est node maecenas. <b>Praesent arcu gravida vehicula</b> est"</p>
					<a href="#">Play Interview Video  </a>
					<div class="btn_play">
						<span data-video-id="y-loaupcTjC8I" title="Play Interview Video" class="ion-ios-play btn_play_vd"></span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1">
				<div class="box_location">
					<ul class="location_">
						<li><span class="ion-ios-location"></span></li>
						<li><span class="cter">5,094</span></li>
						<li><p>Parents trusted us in USA from 1991.</p></li>
						<li>
							<hr>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
						</li>
						<li>
							<p>
								Elipsis magna a terminal nulla elementum morbi elite forte maecenas est magna vehicula est node maecenas.  Praesent arcu gravida vehicula est node maecenas loareet morbi.
							</p>
						</li>
						<li><a href="#">VIEW ALL LOCATION</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end section testim -->

<!-- section glery -->
<div class="_section_gallery flw">
	<div class="container">
		<div class="gallery_title">
			<h3>A few moments</h3>
			<h4>�?Cute gallery �?/h4>
			<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc <br>putamus parum claram, anteposuerit litterarum formas.</p>
		</div>
		<div data-js-module="filtering-demo">
    		<div class="gallery_nav filter-button-group button-group js-radio-button-group">
			<button class="button is-checked" data-filter="*">All</button>
			<button class="button" data-filter=".wildlife, .toy, .charty">charty</button>
			<button class="button" data-filter=".nature, .video, children">nature</button>
			<button class="button" data-filter=".wildlife, .toy">wildlife</button>
			<button class="button" data-filter=".video, .children">video</button>
			<button class="button" data-filter=".toy, .nature">toy</button>
			<button class="button" data-filter=".children">children</button>
     	</div>
		<div class="gallery_content grid flw">
			<div class="element-item video">
				<div class="gallery_item">
					<a href="/static/index/images/upload/child1.png" data-imagelightbox="light_box_img">
						<img src="/static/index/images/upload/child1.png" alt="image event">
					</a>
					<ul class="child_hv">
						<li><a href="/static/index/images/upload/child1.png" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="/static/index/images/upload/child1.png" class="btn_cl" data-imagelightbox="light_box_img">Children Funny</a></li>
						<li><b>CHARTY, NATURE</b></li>
					</ul>
				</div>
			</div>
			<div class="gutter-sizer"></div>
			<div class="element-item toy">
				<div class="gallery_item">
					<a href="/static/index/images/upload/child2.png" data-imagelightbox="light_box_img">
						<img src="/static/index/images/upload/child2.png" alt="image event">
					</a>
					<ul class="child_hv">
						<li><a href="/static/index/images/upload/child2.png" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="/static/index/images/upload/child2.png" class="btn_cl" data-imagelightbox="light_box_img">Children Funny</a></li>
						<li><b>CHARTY, NATURE</b></li>
					</ul>
				</div>
			</div>
			<div class="element-item video chrty">
				<div class="gallery_item">
					<a href="/static/index/images/upload/child3.png" data-imagelightbox="light_box_img">
						<img src="/static/index/images/upload/child3.png" alt="image event">
					</a>
					<ul class="child_hv">
						<li><a href="/static/index/images/upload/child3.png" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="/static/index/images/upload/child3.png" class="btn_cl" data-imagelightbox="light_box_img">Children Funny</a></li>
						<li><b>CHARTY, NATURE</b></li>
					</ul>
				</div>
			</div>
			<div class="element-item children video">
				<div class="gallery_item">
					<a href="/static/index/images/upload/child4.png" data-imagelightbox="light_box_img">
						<img src="/static/index/images/upload/child4.png" alt="image event">
					</a>
					<ul class="child_hv">
						<li><a href="/static/index/images/upload/child4.png" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="/static/index/images/upload/child4.png" class="btn_cl" data-imagelightbox="light_box_img">Children Funny</a></li>
						<li><b>CHARTY, NATURE</b></li>
					</ul>
				</div>
			</div>
			<div class="element-item nature toy">
				<div class="gallery_item">
					<a href="/static/index/images/upload/child5.png" data-imagelightbox="light_box_img">
						<img src="/static/index/images/upload/child5.png" alt="image event">
					</a>
					<ul class="child_hv">
						<li><a href="/static/index/images/upload/child5.png" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="/static/index/images/upload/child5.png" class="btn_cl" data-imagelightbox="light_box_img">Children Funny</a></li>
						<li><b>CHARTY, NATURE</b></li>
					</ul>
				</div>
			</div>
			<div class="element-item wildlife children">
				<div class="gallery_item">
					<a href="/static/index/images/upload/child6.png" data-imagelightbox="light_box_img">
						<img src="/static/index/images/upload/child6.png" alt="image event">
					</a>
					<ul class="child_hv">
						<li><a href="/static/index/images/upload/child6.png" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="/static/index/images/upload/child6.png" class="btn_cl" data-imagelightbox="light_box_img">Children Funny</a></li>
						<li><b>CHARTY, NATURE</b></li>
					</ul>
				</div>
			</div>
	     </div>
		</div>
	</div>
</div>
<!-- end section glery -->
<!-- section event -->
<div class="_section_event flw">
	<div class="box_parallax flw">
		<div class="parallax"><img src="/static/index/images/upload/slide4.jpg" alt="background feauted"></div>
	</div>
<!--	-->
	<div class="box_event flw">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4">
					<div class="event_title">
						<h3>News &amp; Events</h3>
						<h4>�?Update useful infomation �?/h4>
						<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. </p>
					</div>
				</div>
				<div class="col-md-8 col-lg-8 sss">
					<div class="event_cs">
						<div class="event_item">
							<div class="box_img">
								<img src="/static/index/images/upload/babe1_2.png" alt="">
								<div class="shape"></div>
							</div>
							<div class="event_content">
								<h3><a href="#">Gulf Today Report On</a></h3>
								<dl>
									<dt>December 29, 2015</dt>
									<dd>Kevil Shin</dd>
								</dl>
								<p>Claritas est etiam processus dynamicus, qui  res sequitur mutationem consuetudium lectorum Mirum est notare quam littera gothica, quam...</p>
								<a href="#">Read more</a>
							</div>
						</div>
						<div class="event_item">
							<div class="box_img">
								<img src="/static/index/images/upload/event.png" alt="">
								<div class="shape"></div>
							</div>
							<div class="event_content">
								<h3><a href="#">The KGS Kindness</a></h3>
								<dl>
									<dt>December 29, 2015</dt>
									<dd>Kevil Shin</dd>
								</dl>
								<p>Claritas est etiam processus dynamicus, qui  res sequitur mutationem consuetudium lectorum Mirum est notare quam littera gothica, quam...</p>
								<a href="#">Read more</a>
							</div>
						</div>
						<div class="event_item">
							<div class="box_img">
								<img src="/static/index/images/upload/babe1_2.png" alt="">
								<div class="shape"></div>
							</div>
							<div class="event_content">
								<h3><a href="#">Gulf Today Report On</a></h3>
								<dl>
									<dt>December 29, 2015</dt>
									<dd>Kevil Shin</dd>
								</dl>
								<p>Claritas est etiam processus dynamicus, qui  res sequitur mutationem consuetudium lectorum Mirum est notare quam littera gothica, quam...</p>
								<a href="#">Read more</a>
							</div>
						</div>
						<div class="event_item">
							<div class="box_img">
								<img src="/static/index/images/upload/event.png" alt="">
								<div class="shape"></div>
							</div>
							<div class="event_content">
								<h3><a href="#">The KGS Kindness</a></h3>
								<dl>
									<dt>December 29, 2015</dt>
									<dd>Kevil Shin</dd>
								</dl>
								<p>Claritas est etiam processus dynamicus, qui  res sequitur mutationem consuetudium lectorum Mirum est notare quam littera gothica, quam...</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end section event -->
<!-- section question -->
<div class="_section_question flw">
	<div class="container">
		<div class="q_title flw">
			<span class="ion-chatbubble-working"></span>
			<h3>Have any question for us?</h3>
			<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam <br>nunc putamus parum claram, anteposuerit <a href="#">litterarum formas</a>.</p>
			<a href="#" class="qas">Go to QAs page</a>
		</div>
	</div>
</div>
<!-- end section question -->
	</main>

<footer class="ht_footer flw">
	<div class="footer_ flw">
		<div class="container">
			<div class="box_register flw">
				<span>Visit us to day to explore best of kinder garten in New York!</span>
				<a href="#" class="btn_reg">REGISTER NOW</a>
			</div>
			<div class="footer_main flw">
				<div class="row">
					<div class="col-md-3 col-lg-3">
						<div class="ft_col">
							<a href="#" class="lg_bottom"><img src="/static/index/images/lg.png" alt="Image Logo"></a>
							<div class="des_">
								<img src="/static/index/images/upload/des.png" alt="Image Des">
							</div>
							<ul class="info flw">
								<li>No 123, Ohh Street, New York</li>
								<li>1 (800) 345- 6789</li>
								<li><a href="#">Support@company.mail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="ft_col">
							<h3>Useful link</h3>
							<ul class="uselink flw">
								<li><a href="#">About us</a></li>
								<li><a href="#">Classes</a></li>
								<li><a href="#">News</a></li>
								<li><a href="#">Teacher &amp; Staff</a></li>
								<li><a href="#">Contact us</a></li>
								<li><a href="#">Privacy policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="ft_col">
							<h3>Recent tweet</h3>
							<dl class="tw">
								<dt><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></dt>
								<dd><a href="#">http://twitter.com/linktotweet</a></dd>
								<dt><span>1 day ago</span></dt>
								<dd>&#160;</dd>
							</dl>
							<dl class="tw">
								<dt><p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></dt>
								<dd><a href="#">http://twitter.com/linktotweet</a></dd>
								<dt><span>2 day ago</span></dt>
								<dd>&#160;</dd>
							</dl>
						</div>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="ft_col">
							<h3>News letter</h3>
							<p class="letter flw">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do.
							</p>
							<form action="#" class="letter_form flw">
								<input type="text" required placeholder="Name">
								<input type="text" required placeholder="Mail">
								<input type="submit" value="SUBSCRIBE NOW">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- social footer -->
		<div class="box_social flw">
			<ul class="footer_social">
				<li><a href="#" class="ion-social-facebook"></a></li>
				<li><a href="#" class="ion-social-twitter"></a></li>
				<li><a href="#" class="ion-social-googleplus"></a></li>
				<li><a href="#" class="ion-social-vimeo"></a></li>
			</ul>
		</div>
	</div>
	<div class="copyright flw">
		Copyright © 2015. Designed by <a href="#">PukDG</a>. All reserved!
	</div>
</footer>

<!-- JS files -->
<script src="/static/index/js/jquery.js"></script>
<!-- smooth scroll -->
<script src="/static/index/js/jquery.nicescroll.min.js"></script>
<!-- menu -->
<script src="/static/index/js/menu.responsive.js"></script>
<script src="/static/index/js/scroll.menu.js"></script>
<!-- parallax -->
<script src="/static/index/js/parallax.materialize.js"></script>
<!-- video lightning -->
<script src="/static/index/js/video.lightning.js"></script>
<!-- isotope -->
<script src="/static/index/js/isotope-docs.min.js"></script>
<!-- bx slider -->
<script src="/static/index/js/jquery.bxslider.min.js"></script>
<!-- gallery classes page -->
<script src="/static/index/js/jquery.flexslider-min.js"></script>
<!-- couter up -->
<script src="/static/index/js/waypoints.min.js"></script>
<script src="/static/index/js/counter.plugin.js"></script>
<!-- slick carousel -->
<script src="/static/index/js/slick.min.js"></script>
<!-- accordion -->
<script src="/static/index/js/smk-accordion.js"></script>
<!-- lightbox image -->
<script src="/static/index/js/imagelightbox.min.js"></script>
<script src="/static/index/js/light_box_img.js"></script>
<!-- menu sticky -->
<script src="/static/index/js/uikit.min.js"></script>
<script src="/static/index/js/sticky.menu.js"></script>
<!-- wow js -->
<!-- <script src="/static/index/js/wow.min.js"></script> -->
<!-- custom -->
<script src="/static/index/js/custom.js"></script>
<!-- custom slider -->
<script src="/static/index/js/slider/jquery.themepunch.tools.min.js"></script>
<script src="/static/index/js/slider/jquery.themepunch.revolution.min.js"></script>
<script src="/static/index/js/slider/revolution.extension.actions.min.js"></script>
<script src="/static/index/js/slider/revolution.extension.carousel.min.js"></script>
<script src="/static/index/js/slider/revolution.extension.kenburn.min.js"></script>
<script src="/static/index/js/slider/revolution.extension.layeranimation.min.js"></script>
<script src="/static/index/js/slider/revolution.extension.migration.min.js"></script>
<script src="/static/index/js/slider/revolution.extension.navigation.min.js"></script>
<script src="/static/index/js/slider/revolution.extension.parallax.min.js"></script>
<script src="/static/index/js/slider/revolution.extension.slideanims.min.js"></script>
<script src="/static/index/js/slider/revolution.extension.video.min.js"></script>
<script src="/static/index/js/slider/custom_slider.js"></script>
</body>
</html>
