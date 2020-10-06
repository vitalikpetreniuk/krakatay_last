<!DOCTYPE html>
<html lang="ko">
<head>
	<link rel="preconnect" href="https://cdn.jsdelivr.net" />
	<link rel="prefetch" href="img/logo.webp">
	<link rel="prefetch" href="img/youtube.png">
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="alternate" href="https://air.io/krakatau" hreflang="ru" />
    <link rel="alternate" href="https://air.io/en/krakatau" hreflang="en" />

    <title>유튜브 채널 번역 및 현지화- KRAKATAU서비스</title>
	<meta name="description" content="매출 성장에 가장 높은 CPM으로 가장 인기 있는 14개 언어로 콘텐츠를 현지화하십시오. :white_check_mark: 여러분의 YouTube 콘텐츠가 전 세계를 정복하게 하십시오!">

    <link rel="stylesheet" href="css/site-bundle.css">
    <link rel="stylesheet" href="css/style.min.css">

    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#1b1c1c">

    <script defer src="js/site-bundle.js"></script>
    <script defer src="js/main.js"></script>

    <style>
        .kr-section_welcome
        {
            background: linear-gradient(#232528, #2d3c65);
        }
        
        @media only screen and (min-width: 1280px)
        {
            .kr-section_welcome
            {
                 background: radial-gradient(#30437b, #232424);
            }
        }
    </style>
</head>
<?php if(strpos($_SERVER['HTTP_ACCEPT'], 'image/webp')) {
    $bodyclass = 'webp';
}else {
    $bodyclass = '';
}?>
<body class="<?=$bodyclass?> index-kor">
	<div id="wrapper">
		<header class="kr-header" style="background-color: #1b1c1c;">
			<div class="container">
				<div class="kr-header__left">
					<div class="kr-header__logo" data-aos="fade-right">
						<a href="/">
							<picture>
							  <source srcset="img/logo.webp" type="image/webp"> 
							  <img src="img/logo.png" alt="logo">
							</picture>
						</a>
					</div>
					<div class="kr-header__youtube" data-aos="fade-down">
						<a href="https://servicesdirectory.withyoutube.com/directory?page_size=12&page=1" target="_blank"><img src="img/youtube.png" alt="youtube"></a>
					</div>
				</div>
				<div class="kr-header__right" data-aos="fade-left" data-aos-delay="700">
					<div class="kr-header__mainmenu">
					<ul>
						<li><a href="#about">서비스 이용 방법</a></li>
						<li><a href="#profit">수익</a></li>
						<li><a href="#audience">시청자</a></li>
						<li><a href="#infographics">사례</a></li>
						<li><a href="#team">우리 팀</a></li>
					</ul>
					<div class="kr-header__nav-contact">
						<button>문의하기</button>
					</div>
				</div>
					<div class="kr-header__trigger"></div>
				</div>
			</div>
			<div class="kr-header__mobilemenu">
				<div class="kr-header__mobilemenu-lang" style="display: none">
					<span data-lang="ru">RUS</span>
					<ul>
						<li>ENG</li>
						<li>SP</li>
						<li>DE</li>
					</ul>
				</div>
				<div class="kr-header__nav">
					<ul>
						<li><a href="#about">서비스 이용 방법</a></li>
						<li><a href="#profit">수익</a></li>
						<li><a href="#audience">시청자</a></li>
						<li><a href="#infographics">사례</a></li>
						<li><a href="#team">우리 팀</a></li>
					</ul>
					<div class="kr-header__nav-contact">
						<button>문의하기</button>
					</div>
				</div>
			</div>
		</header>
		<div class="main">
			<div class="kr-languages">
				<ul data-aos="slide-down" data-aos-delay="1500">
					<li><a href="/en">Eng</a></li>
					<li><a href="/sp">Spa</a></li>
					<li><a href="/hi">Hin</a></li>
					<li><a href="/ar">Ara</a></li>
					<li><a href="/ru">Rus</a></li>
					<li><a href="/fr">Fre</a></li>
					<li><a href="/po">Por</a></li>
					<li><a href="/in">Ind</a></li>
					<li><a href="/ch">Chi</a></li>
					<li><a href="/de">Deu</a></li>
					<li><a href="/jp">Jpn</a></li>
					<li><a href="/it">Ita</a></li>
					<li><a href="/vi">Vie</a></li>
					<li class="active">Kor</li>
				</ul>
			</div>
			<section id="welcome" class="kr-section kr-section_welcome">
				<div class="container">
					<h1 data-aos="fade-left" data-aos-delay="1000" data-aos-anchor-placement="top-bottom">당신의 유투브 컨텐츠를 위 <span>한</span> 수퍼 수익</h1>
					<span class="only-for" style="display: block" data-aos="fade-right" data-aos-delay="1000" data-aos-anchor-placement="top-bottom">30만명 이상의 구독자를 가 <br>진 채널을 위한 서비스</span>

					<div class="welcome-info" data-aos="zoom-in" data-aos-delay="1000">
						1개 언어 = 1개 수익원<br>
						<span>14개 언어 = 14개 수익원</span>
					</div>

					<div class="welcome-map" data-aos="fade-in" data-aos-delay="1000" data-aos-anchor-placement="top-bottom">
					    <div class="crm-info">
                            <div class="crm-content">
                                <span class="crm-country"></span>
                                <span class="crm-price">$<span></span></span>
                                <p>백만 건의 상업적 <br>리뷰를 위한 CPM</p>
                            </div>
                        </div>
                        <div class="map-mobilenav">
                            <div class="map-nav"><button class="mn-prev"><span>‹</span></button><button class="mn-next"><span>›</span></button></div>
                            <div class="map-dots"><ul></ul></div>
                        </div>
                        <picture loading="lazy" class="lazy">
	                    	<source srcset="img/shadow_map_mobile.webp" type="image/webp" media="(max-width:767px)"> 
	                		<source srcset="img/shadow_map_mobile.png" type="image/png" media="(max-width:767px)">

							<source srcset="img/shadow_map.webp" type="image/webp" media="(min-width:768px)"> 
							<source srcset="img/shadow_map.png" type="image/png" media="(min-width:768px)">

							<img class="map-shadow" src="img/shadow_map.png" alt="">
						</picture>
                        <!-- <img class="map-shadow" src="img/shadow_map.png" alt=""> -->
							<?php require_once('img/image-php/image1.php') ?>
	                </div>
				</div>

				<div class="kr-waves">
					<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
						<defs>
							<path id="gentle-wave1" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
						</defs>
						<g class="parallax">
							<use xlink:href="#gentle-wave1" x="48" y="0" fill="rgba(239,239,239,1)" />
							<use xlink:href="#gentle-wave1" x="48" y="3" fill="rgba(239,239,239,.6)" />
						</g>
					</svg>
				</div>
			</section>
			<section id="about" class="kr-section kr-section_about">
				<div class="about-content">
					<div class="container">
						<div class="about-content__info" data-aos="fade-in">
							<span>멋진 콘텐츠로 가득한 채널이 있나요?</span>
							<h2><strong>Krakatau</strong> 를 통해 전 세계모든 사람들이<br> 여러분의 콘텐츠를 듣고, 보고, 이해하고,<br> 사랑하게 될 것입니다!<br></h2>
						</div>
						<div class="about-content__boxes">
							<div class="about-content__box" data-aos="fade-up">
								<div class="box-header">
									<span class="box-icon" data-aos="zoom-in">
										<picture loading="lazy" class="lazy">
										  <source srcset="img/about1.webp" type="image/webp"> 
										  <img src="img/about1.png" alt="">
										</picture>
										<!-- <img src="img/about1.png" alt=""> -->
									</span>
									<h3 class="box-title">번역</h3>
								</div>
								<div class="box-content">
									<ul>
										<li>귀하의 콘텐츠의<br> 잠재력 분석</li>
										<li>다른 언어들로 콘텐츠 <br>경쟁력 확보</li>
										<li>새로운 채널 <br>출시를 위한 전략 수립</li>
									</ul>
								</div>
							</div>
							<div class="about-content__box" data-aos="fade-up">
								<div class="box-header">
									<span class="box-icon" data-aos="zoom-in">
										<picture loading="lazy" class="lazy">
										  <source srcset="img/about2.webp" type="image/webp"> 
										  <img src="img/about2.png" alt="">
										</picture>
										<!-- <img src="img/about2.png" alt=""> -->
									</span>
									<h3 class="box-title">더빙</h3>
								</div>
								<div class="box-content">
									<ul>
										<li>동영상 내용을<br> 글로 옮기기</li>
										<li>대본 번역 및 <br>현지화 작업</li>
										<li>최고의 성우<br> 섭외하기</li>
									</ul>
								</div>
							</div>
							<div class="about-content__box" data-aos="fade-up">
								<div class="box-header">
									<span class="box-icon" data-aos="zoom-in">
										<picture loading="lazy" class="lazy">
										  <source srcset="img/about3.webp" type="image/webp"> 
										  <img src="img/about3.png" alt="">
										</picture>
										<!-- <img src="img/about3.png" alt=""> -->
									</span>
									<h3 class="box-title">편집</h3>
								</div>
								<div class="box-content">
									<ul>
										<li>새로운 언어에 <br>맞게 동영상 편집</li>
										<li> 유투브 알고리즘을 위해 <br>특별한 동영&nbsp;상&nbsp;제작</li>
										<li>새로운 오디오 및<br> 동영상 요소 추가</li>
									</ul>
								</div>
							</div>
							<div class="about-content__box" data-aos="fade-up">
								<div class="box-header">
									<span class="box-icon" data-aos="zoom-in">
										<picture loading="lazy" class="lazy">
										  <source srcset="img/about4.webp" type="image/webp"> 
										  <img src="img/about4.png" alt="">
										</picture>
										<!-- <img src="img/about4.png" alt=""> -->
									</span>
									<h3 class="box-title">게시</h3>
								</div>
								<div class="box-content">
									<ul>
										<li>포스팅을 위한 가장 <br>적절한 설정 분석</li>
										<li>엔딩 스크린과 <br>재생 목록 작업하기</li>
										<li>각 언어에 대한 <br>태그 클라우드 수집</li>
									</ul>
								</div>
							</div>
							<div class="about-content__box" data-aos="fade-up">
								<div class="box-header">
									<span class="box-icon" data-aos="zoom-in">
										<picture loading="lazy" class="lazy">
										  <source srcset="img/about5.webp" type="image/webp"> 
										  <img src="img/about5.png" alt="">
										</picture>
										<!-- <img src="img/about5.png" alt=""> -->
									</span>
									<h3 class="box-title">프로모션</h3>
								</div>
								<div class="box-content">
									<ul>
										<li>추천 섹션에 도달하기 <br>위한 최고의 접근 방식 구현</li>
										<li>다른 활성 채널에서 <br>시청자 유입 유도</li>
										<li>애드워즈 및 기타<br> 플랫폼 사용</li>
									</ul>
								</div>
							</div>
							<div class="about-content__box" data-aos="fade-up">
								<div class="box-header">
									<span class="box-icon" data-aos="zoom-in">
										<picture loading="lazy" class="lazy">
										  <source srcset="img/about6.webp" type="image/webp"> 
										  <img src="img/about6.png" alt="">
										</picture>
										<!-- <img src="img/about6.png" alt=""> -->
									</span>
									<h3 class="box-title">분석</h3>
								</div>
								<div class="box-content">
									<ul>
										<li>최적의 프로모션 <br>전략 선택</li>
										<li>번역에 가장 적합한 <br>콘텐츠 선택</li>
										<li>조회수 성장 <br>분석</li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</section>
			<section id="profit" class="kr-section kr-section_profit" data-aos="fade-in">
				<div class="container">
					<h2>콘텐츠를&nbsp;다른&nbsp;언어로&nbsp;번역하면&nbsp;어떤&nbsp;수익을&nbsp;창출할수&nbsp;있는지&nbsp;알아보세요</h2>
					<h3>유튜브 채널의 수익 계산기</h3>

					<div class="profit-calculator" data-aos="zoom-in">
						<div class="pc-quantity">
							<span class="h4">각 채널의 광고 시청 조회수</span>
							<div class="range-nav">
								<span class="range-left"><span>‹</span></span>
                            	<span class="range-right"><span>›</span></span>
							</div>
							<div class="range-grid">
								<div class="range-gr range-big">
									<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
								</div>
								<div class="range-gr range-small">
									<span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
								</div>
							</div>
							<input id="profit-input" type="text" class="js-range-slider" name="my_range" value="" />
						</div>
						<div class="pc-languages">
							<ul>
								<li><span class="pc-lang-title">영어</span><span class="pc-lang-price" data-price="3900">$<span></span>*</span></li>
								<li><span class="pc-lang-title">일본어</span><span class="pc-lang-price" data-price="3600">$<span></span>*</span></li>
								<li><span class="pc-lang-title">프랑스어</span><span class="pc-lang-price" data-price="3300">$<span></span>*</span></li>
								<li><span class="pc-lang-title">독일어</span><span class="pc-lang-price" data-price="3200">$<span></span>*</span></li>
								<li><span class="pc-lang-title">한국어</span><span class="pc-lang-price" data-price="3000">$<span></span>*</span></li>
								<li><span class="pc-lang-title">이탈리아어</span><span class="pc-lang-price" data-price="2400">$<span></span>*</span></li>
								<li><span class="pc-lang-title">중국어</span><span class="pc-lang-price" data-price="1500">$<span></span>*</span></li>
							</ul>
							<ul>
								<li><span class="pc-lang-title">스페인어</span><span class="pc-lang-price" data-price="1100">$<span></span>*</span></li>
								<li><span class="pc-lang-title">포르투갈어</span><span class="pc-lang-price" data-price="1000">$<span></span>*</span></li>
								<li><span class="pc-lang-title">러시아어</span><span class="pc-lang-price" data-price="900">$<span></span>*</span></li>
								<li><span class="pc-lang-title">아랍어</span><span class="pc-lang-price" data-price="800">$<span></span>*</span></li>
								<li><span class="pc-lang-title">베트남어</span><span class="pc-lang-price" data-price="700">$<span></span>*</span></li>
								<li><span class="pc-lang-title">인도네시아어</span><span class="pc-lang-price" data-price="600">$<span></span>*</span></li>
								<li><span class="pc-lang-title">힌디어</span><span class="pc-lang-price" data-price="400">$<span></span>*</span></li>
							</ul>
						</div>
						<div class="pc-subtotal"><span>합계</span><span>$<span></span>*</span></div>
						<div class="pc-request"><button>요청 보내기</button></div>
					</div>
					<span>* 모든 계산은 대략적이며 콘텐츠의 주제에<br> 따라 차이가 있을 수 있습니다</span>
				</div>
			</section>
			<section id="audience" class="kr-section kr-section_audience">
				<div class="container">
					<div class="audience-choose">
						<ul>
							<li>Eng</li>
							<li>Spa</li>
							<li>Hin</li>
							<li>Ara</li>
							<li>Rus</li>
							<li>Fre</li>
							<li>Por</li>
							<li>Ind</li>
							<li>Chi</li>
							<li>Deu</li>
							<li>Jpn</li>
							<li>Ita</li>
							<li>Vie</li>
							<li>Kor</li>
						</ul>
					</div>
					<div class="audience-info">
						<span><strong>KRAKATAU</strong> 에는 총 38억명의<br> 시청자가  있습니다</span>
						<button>요청 보내기</button>
					</div>
				</div>
			</section>
			<section id="infographics" class="kr-section kr-section_infographics" data-aos="fade-in">
				<div class="container">
					<h2>새로운 언어 <br>수익 성장 차트</h2>
					<span class="h4">파트너의 실제 사례</span>

					<div class="infographics-slider owl-carousel">
						<div class="item item-1" data-aos="zoom-in">
							<div class="is-author">
								<img class="owl-lazy" data-src="img/chanel1.png" alt="author">
								<span>소유자의 요청에 따라 숨김 </span>
							</div>
							<div class="is-graphic">
								<span class="is-title">엔터테인먼트</span>

								<picture loading="lazy" class="lazy">
								  <!-- <source srcset="img/infographics1-kor.webp" type="image/webp">  -->
								  <img src="img/infographics1-kor.png" alt="graphic">
								</picture>

								<!-- <img src="img/infographics1.png" alt="graphic"> -->
							</div>
						</div>
						<div class="item item-2" data-aos="zoom-in">
							<div class="is-author">
								<img class="owl-lazy" data-src="img/chanel2.png" alt="author">
								<span>소유자의 요청에 따라 숨김 </span>
							</div>
							<div class="is-graphic">
								<span class="is-title">DIY</span>

								<picture loading="lazy" class="lazy">
								  <!-- <source srcset="img/infographics2-kor.webp" type="image/webp">  -->
								  <img src="img/infographics2-kor.png" alt="graphic">
								</picture>

								<!-- <img src="img/infographics2.png" alt="graphic"> -->
							</div>
						</div>
						<div class="item item-3" data-aos="zoom-in">
							<div class="is-author">
								<img class="owl-lazy" data-src="img/chanel3.png" alt="author">
								<span>소유자의 요청에 따라 숨김 </span>
							</div>
							<div class="is-graphic">
								<span class="is-title">뷰티</span>

								<picture loading="lazy" class="lazy">
								  <!-- <source srcset="img/infographics3-kor.webp" type="image/webp">  -->
								  <img src="img/infographics3-kor.png" alt="graphic">
								</picture>

								<!-- <img src="img/infographics3.png" alt="graphic"> -->
							</div>
						</div>
						<div class="item item-4" data-aos="zoom-in">
							<div class="is-author">
								<img class="owl-lazy" data-src="img/chanel4.png" alt="author">
								<span>소유자의 요청에 따라 숨김 </span>
							</div>
							<div class="is-graphic">
								<span class="is-title">게임</span>

								<picture loading="lazy" class="lazy">
								  <!-- <source srcset="img/infographics4-kor.webp" type="image/webp">  -->
								  <img src="img/infographics4-kor.png" alt="graphic">
								</picture>

								<!-- <img src="img/infographics4.png" alt="graphic"> -->
							</div>
						</div>
					</div>
                    <span class="is-chanels">
                        <span class="chanel">메인 유투브 채널의 수입</span>
                        <span class="chanel">번역된 유투브 채널의 수입</span>
                    </span>
				</div>
			</section>
			<section id="contact-us" class="kr-section kr-section_contact-us" data-aos="fade-in">
                <div class="reasons">
                    <div class="container">
                        <span class="h2">왜 KRAKATAU<br> 선택해야 할까요?</span>
                        <div class="reasons-info">
                            <p>전문 번역 및 해외 채널 발굴 관련 전문적이고 폭넓은 경험이</p>
                            <p>모든 번역, 현지화 및 프로모션 제공</p>
                            <p>최대 수익을 창출하는 수익성이 가장 높은 언어 그룹을 활용</p>
                            <p>모든 채널에 투명한 월간 통계 제공</p>
                        </div>

                        <div class="reasons-profit">
                            <span class="profit-arrow" data-aos="flip-down"><img class="lazy" data-src="img/green-arrow.png" alt="arrow"></span>
                            <span>시간이나 돈을 들이지 않고도</span>
                            <img class="lazy" data-src="img/text8.png" alt="profit" data-aos="zoom-in">
                            <span>얻을 수 있습니다</span>
                        </div>
                    </div>
                </div>
                <div class="contact-us">
                    <div class="container">
                        <span class="h2">Krakatau에 문의하세요</span>
                        <span class="h4">더 많은 수익을 위해</span>

						<form action="" method="post" novalidate>
                            <input type="text" name="name" id="input_name" placeholder="귀하의 성함" aria-label="name">
                            <div class="contact-social">
                                <div class="social-inputs">
                                    <input class="input-telegram active" type="text" name="telegram" placeholder="귀하의 텔레그램" aria-label="telegram">
                                    <input class="input-whatsapp" type="text" name="whatsapp" placeholder="귀하의 왓츠앱" aria-label="whatsapp">
                                    <input class="input-messenger" type="text" name="messenger" placeholder="귀하의 메신저" aria-label="messenger">
                                    <input class="input-instagram" type="text" name="instagram" placeholder="귀하의 인스타그램" aria-label="instagram">
                                    <input class="input-skype" type="text" name="skype" placeholder="귀하의 스카이프" aria-label="skype">
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li class="link-telegram active"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"/></svg></li>
                                        <li class="link-whatsapp"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></li>
                                        <li class="link-messenger"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 53.59-25.14 62.56-22.7C337.85 521.8 504 423.7 504 248.57 504 110.34 396.59 8 256.55 8zm149.24 185.13l-73 115.57a37.37 37.37 0 0 1-53.91 9.93l-58.08-43.47a15 15 0 0 0-18 0l-78.37 59.44c-10.46 7.93-24.16-4.6-17.11-15.67l73-115.57a37.36 37.36 0 0 1 53.91-9.93l58.06 43.46a15 15 0 0 0 18 0l78.41-59.38c10.44-7.98 24.14 4.54 17.09 15.62z"/></svg></li>
                                        <li class="link-instagram"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></li>
                                        <li class="link-skype"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z"/></svg></li>
                                    </ul>
                                </div>
                            </div>
                            <input type="email"  id="input_email" name="email" placeholder="귀하의 이메일" aria-label="email">
                            <input type="text"  id="input_link" name="link" placeholder="귀하의 유튜브 채널 링크" aria-label="youtube">

							<input type="submit" name="submit" onClick="return dataField(this.form);" value="요청 보내기">
                        </form>
                        <span>당사는 귀하의 정보의 <br>기밀을 보장합니다</span>
                    </div>
                </div>
			</section>
		</div>	
		<footer class="kr-footer">
			<div class="container">
				<div class="footer-top">
					<div class="footer-logo"> 
						<div class="foo-kr-logo">
							<picture loading="lazy" class="lazy">
							  <source srcset="img/logo.webp" type="image/webp"> 
							  <img src="img/logo.png" alt="logo">
							</picture>
							<!-- <img src="img/logo.png" alt="logo"> -->
						</div>
						<div class="foo-kr-youtube"><a href="https://servicesdirectory.withyoutube.com/directory?page_size=12&page=1" target="_blank"><img class="lazy" data-src="img/youtube.png" alt="youtube"></a></div>
					</div>
					<div class="footer-email">
						<span>질문이 있으세요?</span>
					</div>
				</div>
				<div class="footer-copyright">2020 © Krakatau All rights reserved</div>
			</div>	
		</footer>

		<div class="kr-request">
			<div class="kr-request-content">
				<span class="h2">Krakatau에 문의하세요<span>더 많은 수익을 위해</span></span>
				<form method="post" novalidate>
					<input type="text"   id="input_name2" name="name" placeholder="귀하의 성함" aria-label="name">
					<!-- <input type="text"   id="input_messenger2" name="messenger" placeholder="Мессенджер"> -->
					<div class="contact-social">
                        <div class="social-inputs">
                            <input id="input_telegram2"  class="input-telegram active" type="text" name="telegram" placeholder="귀하의 텔레그램" aria-label="telegram">
                            <input id="input_whatsapp2"  class="input-whatsapp" type="text" name="whatsapp" placeholder="귀하의 왓츠앱" aria-label="whatsapp">
                            <input id="input_messenger2" class="input-messenger" type="text" name="messenger" placeholder="귀하의 메신저" aria-label="messenger">
                            <input id="input_instagram2" class="input-instagram" type="text" name="instagram" placeholder="귀하의 인스타그램" aria-label="instagram">
                            <input id="input_skype2"     class="input-skype" type="text" name="skype" placeholder="귀하의 스카이프" aria-label="skype">
                        </div>
                        <div class="social-links">
                            <ul>
                                <li class="link-telegram active"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"/></svg></li>
                                <li class="link-whatsapp"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></li>
                                <li class="link-messenger"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 53.59-25.14 62.56-22.7C337.85 521.8 504 423.7 504 248.57 504 110.34 396.59 8 256.55 8zm149.24 185.13l-73 115.57a37.37 37.37 0 0 1-53.91 9.93l-58.08-43.47a15 15 0 0 0-18 0l-78.37 59.44c-10.46 7.93-24.16-4.6-17.11-15.67l73-115.57a37.36 37.36 0 0 1 53.91-9.93l58.06 43.46a15 15 0 0 0 18 0l78.41-59.38c10.44-7.98 24.14 4.54 17.09 15.62z"/></svg></li>
                                <li class="link-instagram"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></li>
                                <li class="link-skype"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z"/></svg></li>
                            </ul>
                        </div>
                    </div>
					<input type="text"  id="input_email2" name="email" placeholder="귀하의 이메일" aria-label="email">
					<input type="text"   id="input_link2" name="link" placeholder="귀하의 유튜브 채널 링크" aria-label="youtube">
					<input id="submit" type="submit" name="submit" onClick="return dataField2(this.form);" value="요청 보내기">
				</form>
			</div>
		</div>
		<div id="popup" class="kr-request request-thanks">
			<div class="kr-request-content-thanks">
				<span class="h2" style="margin:0;">감사합니다. 최대한 빨리 연락드리겠습니다.</span>
			</div>
		</div>
        
        <div class="kr-lang-popup">
        	<div class="kr-lang-popup-content">
        		<ul>
        			<li><a href="/en">영어</a></li>
					<li><a href="/sp">스페인어</a></li>
					<li><a href="/hi">힌디어</a></li>
					<li><a href="/ar">아랍어</a></li>
					<li><a href="/m_content/krakatau">러시아어</a></li>
					<li><a href="/fr">프랑스어</a></li>
					<li><a href="/po">포르투갈어</a></li>
					<li><a href="/in">인도네시아어</a></li>
					<li><a href="/ch">중국어</a></li>
					<li><a href="/de">독일어</a></li>
					<li><a href="/jp">일본어</a></li>
					<li><a href="/it">이탈리아어</a></li>
					<li><a href="/vi">베트남어</a></li>
					<li class="active">한국어</li>
        		</ul>
        	</div>
        </div>
	</div>	

	<script src="js/aos-home.js"></script>

    <script>

        // Validate email
        function validateEmail(email) {
            var re = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
            return re.test(String(email).toLowerCase());
        }

        function isValidUrl(url)	{
            var objRE = /(^https?:\/\/)?[a-z0-9~_\-\.]+\.[a-z]{2,9}(\/|:|\?[!-~]*)?$/i;
            return objRE.test(url);
        }

        function dataField(f) {
            let formdata = new FormData(f);
            let formdatasend = {};

            formdata.forEach((value, key) => {formdatasend[key] = value});

            let windowgadata = window.ga_data ? window.ga_data : null;

            formdatasend["ga_data"] = windowgadata;

            let flag = true;
            document.getElementById('input_name' ).classList.remove('error');
            document.getElementById('input_email').classList.remove('error');
            document.getElementById('input_link' ).classList.remove('error');
            if(f.name.value == "" ) {
                document.getElementById('input_name').classList.add('error');
                flag = false;
            }
            else document.getElementById('input_name').classList.add('success');
            if((f.email.value == "") || (!validateEmail(f.email.value)) ) {
                document.getElementById('input_email').classList.add('error');
                flag = false;
            }
            else document.getElementById('input_email').classList.add('success');
            if((f.link.value == ""))  {
                document.getElementById('input_link').classList.add('error');
                flag = false;
            }
            else document.getElementById('input_link').classList.add('success');
            if(flag)	{
                $.ajax({
                    type: 'POST',
                    url:'https://back.krakatau.pro/application',
                    data: formdatasend,
                    success: function () {
                        dataLayer.push({'event': 'FormSuccess'});
                    }
                });
                document.getElementById('popup').classList.add('show');

                setTimeout(function(){
                    $('.kr-request.request-thanks').removeClass('show');
                    $('body').removeClass('request-onscreen');
                }, 2000);
            }
            return false;
        }

        function dataField2(f) {
            let formdata = new FormData(f);
            let formdatasend = {};

            formdata.forEach((value, key) => {formdatasend[key] = value});

            let windowgadata = window.ga_data ? window.ga_data : null;

            formdatasend["ga_data"] = windowgadata;

            let flag = true;
            document.getElementById('input_name2' ).classList.remove('error');
            document.getElementById('input_email2').classList.remove('error');
            document.getElementById('input_link2' ).classList.remove('error');
            if(f.name.value == "" ) {
                document.getElementById('input_name2').classList.add('error');
                flag = false;
            }
            else document.getElementById('input_name2').classList.add('success');
            if((f.email.value == "") || (!validateEmail(f.email.value)) ) {
                document.getElementById('input_email2').classList.add('error');
                flag = false;
            }
            else document.getElementById('input_email2').classList.add('success');
            if((f.link.value == "") ) {
                document.getElementById('input_link2').classList.add('error');
                flag = false;
            }
            else document.getElementById('input_link2').classList.add('success');
            if (flag) {
                $.ajax({
                    type: 'POST',
                    url: 'https://back.krakatau.pro/application',
                    data: formdatasend,
                    success: function () {
                        dataLayer.push({'event': 'FormSuccess'});
                    }
                });
                $('.kr-request').removeClass('show');
                document.getElementById('popup').classList.add('show');

                setTimeout(function () {
                    $('.kr-request.request-thanks').removeClass('show');
                    $('body').removeClass('request-onscreen');
                }, 2000);
            }
            return false;
        }
    </script>
</body>
</html>