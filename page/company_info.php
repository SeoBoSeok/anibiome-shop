<?php
include_once('./_common.php');

include_once(G5_THEME_PATH.'/head_guide.php');

?>
<div class="content_wrap sub">
	<section class="sub_visual">
		<div class="sub_top_bg"><img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images_guide/sub_top_bg.png"></div>
		<div class="page_name text-typing-any">
			<p>Products & Services</p>
		</div>
		<div class="page_navi box_width">
			<a href="index.html" class="home">홈</a>
			<div class="dropdown_set">
				<div class="dropdown">
					<div class="dropbtn open-btn-ckver">회사소개</div>
					<div class="dropdown-content">
						<a href="">수의통합의학 강의실</a>
						<a href="">핵심역량/사업</a>
						<a href="">협업/자문 시스템</a>
						<a href="">마이크로바이옴</a>
						<a href="">제품/쇼핑몰</a>
					</div>
				</div>
				<div class="dropdown">
					<div class="dropbtn open-btn-ckver">Products & Services</div>
					<div class="dropdown-content">
						<a href="">menu01</a>
						<a href="">menu02</a>
						<a href="">menu03</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="products_services ">
		<div class="section_padding bg_line">
			<div class="relative scroll_slide_group">
				<div class="image-container">
					<div class="bg" style="background-image: url('/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images_guide/sub_product_service_img01.png');"></div>
				</div>
				<h2 class="section-title box_width ">
					<em>Anibiome Healthcare</em>
					<span class="paralax-title">
					The Best Your Partner!<br>Center for Companion<br class="pc_tab_none"> Animal Health
					</span>
				</h2>
			</div>
		</div>
		<div class="sc_box_02 relative">
			<div class="bg">
				<img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images_guide/sub_product_service_img02.png" class="m_none_tab_on">
				<img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images_guide/sub_product_service_img02_m.png" class="pc_tab_none">
			</div>
			<div class="text white">
				<div class="box_width" data-aos="fade-down">
					<p><span>애니바이옴 헬스케어</span>는<br>수의학 최고의 전문가들의<br>반려동물 헬스케어/R&D<br class="pc_tab_none">전문기업입니다.</p>
				</div>
			</div>
			
		</div>
		<div class="sc_box_02 relative">
			<div class="bg">
				<img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images_guide/sub_product_service_img03.png" class="m_none_tab_on">
				<img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images_guide/sub_product_service_img03_m.png" class="pc_tab_none">
			</div>
			<div class="text left black">
				<div class="box_width" data-aos="fade-down">
					<p><span>애니바이옴 헬스케어</span>는<br>수의통합의학의 완성을 <br class="pc_tab_none">지향합니다.</p>
				</div>
			</div>
			
		</div>
	</section>
	
</div>

<!--S 햄버거 모달-->
<div class="modal hamburger" id="mb_gnb">
  <div class="modal_container">
    <div class="m_content">
		<div class="gnb_header">
			<a href="index.html" class="logo">로고</a>
			<button onclick="mdHide('mb_gnb')" class="btn_close">닫기</button>
		</div>
        <div class="gnb_menu">
			<a href="#" class="open-btn-ckver">수의통합의학 강의실</a>
			<div class="detail_menu">
				<a href="#">수의통합의학</a>
				<a href="#">노령동물전문관리 프로그램</a>
				<a href="#">강의/교육컨텐츠</a>
				<a href="#">전문진료자문시스템</a>
			</div>
			<a href="#"  class="open-btn-ckver">회사소개</a>
			<div class="detail_menu">
				<a href="#">menu01</a>
				<a href="#">menu02</a>
				<a href="#">menu03</a>
			</div>
			<a href="#"  class="open-btn-ckver">핵심역량/사업</a>
			<div class="detail_menu">
				<a href="#">menu01</a>
				<a href="#">menu02</a>
				<a href="#">menu03</a>
			</div>
			<a href="#"  class="open-btn-ckver">협업/자문 시스템</a>
			<div class="detail_menu">
				<a href="#">menu01</a>
				<a href="#">menu02</a>
				<a href="#">menu03</a>
			</div>
			<a href="#"  class="open-btn-ckver">마이크로바이옴</a>
			<div class="detail_menu">
				<a href="#">menu01</a>
				<a href="#">menu02</a>
				<a href="#">menu03</a>
			</div>
			<a href="#"  class="open-btn-ckver">제품/쇼핑몰</a>
			<div class="detail_menu">
				<a href="#">menu01</a>
				<a href="#">menu02</a>
				<a href="#">menu03</a>
			</div>
		</div>
    </div>
  </div>
</div>
<!--E 햄버거 모달 끝-->
<!--스크립트-->
	<!--애니메이션 사용-->
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>
	<!--드롭다운-->
<script>
	var checkdropdown = document.getElementsByClassName("open-btn-ckver");
	var b;

	for (b = 0; b < checkdropdown.length; b++) {
	  checkdropdown[b].addEventListener("click", function() {
		this.classList.toggle("active");
		this.nextElementSibling.classList.toggle("show");
	  });
	}
</script>
	<!--모달-->
<script>
	function mdShow(mdName) {
	  var $layer = $("#" + mdName);
	  $layer.addClass("show");
	}
	function mdHide(mdName) {
	  $("#" + mdName).removeClass("show");
	}
</script>
	<!--텍스트 슬라이드 애니-->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
<script>
	let didScroll = false;
	let paralaxTitles = document.querySelectorAll('.paralax-title');

	const scrollInProgress = () => {
		didScroll = true
	}

	const raf = () => {
		if(didScroll) {
			paralaxTitles.forEach((element, index) => {
				element.style.transform = "translateX("+ window.scrollY / 10 + "%)"
			})
			didScroll = false;
		}
		requestAnimationFrame(raf);
	}


	requestAnimationFrame(raf);
	window.addEventListener('scroll', scrollInProgress)
</script>

<?php include_once(G5_THEME_PATH.'/footer.php'); ?>
<?php
include_once(G5_THEME_PATH.'/tail.php');