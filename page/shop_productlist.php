<?php
include_once('./_common.php');

$ca_id = isset($_REQUEST['ca_id']) ? safe_replace_regex($_REQUEST['ca_id'], 'ca_id') : '';
$items = [];

if ($ca_id) {   // 분류 선택시
    $sql = " select * from {$g5['g5_shop_category_table']} where ca_id = '$ca_id' and ca_use = '1'  ";
    $ca = sql_fetch($sql);
    if (! (isset($ca['ca_id']) && $ca['ca_id'])) {
        alert('등록된 분류가 없습니다.');
    }
    
    $i=0;
    $row2 = sql_query(" select * from {$g5['g5_shop_item_table']} where ca_id like '{$ca_id}%' and it_use = '1'  ");
    while ($row = sql_fetch_array($row2)) {
        $items[$i] = $row;
        ++$i;
    }
} else {
    $i=0;
    $sql = " select * from {$g5['g5_shop_item_table']} where it_use = '1' order by it_id ";
    $row2 = sql_query($sql);
    while ($row = sql_fetch_array($row2)) {
        $items[$i] = $row;
        ++$i;
    }
    
}


include_once(G5_THEME_PATH.'/head_guide.php');

?>

<div class="content_wrap">
		<section class="shop_header">
			<div class="box_width">
				<h3 class="sc_tit">Shop</h3>
				<div class="tap_text m_none_tab_on">
                    <a href="/page/shop_productlist.php" class="<?php echo $ca_id? "" : "active"; ?>">All products</a>
                    <?php
                        $sql = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where ca_use = '1' order by ca_order, ca_id ";
                        $result = sql_query($sql);
                        while ($row=sql_fetch_array($result)) {
                    ?>
					<a href="/page/shop_productlist.php?ca_id=<?php echo $row['ca_id']; ?>" class="<?php echo $ca_id == $row['ca_id']? "active" : ""; ?>"><?php echo $row['ca_name']; ?></a>
                    <?php } ?>
				</div>
				<div class="selectbox_group pc_tab_none">
					<select class="selectbox">
						<option <?php echo $ca_id? "" : "selected"; ?>>All products</option>
                        <?php
                            $sql = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where ca_use = '1' order by ca_order, ca_id ";
                            $result = sql_query($sql);
                            while ($row=sql_fetch_array($result)) {
                        ?>
                        <option <?php echo $ca_id == $row['ca_id']? "selected" : ""; ?>><?php echo $row['ca_name']; ?></option>
                        <?php } ?>
					</select>
				</div>
			</div>
		</section>
		<section class="product_list">
			<ul class="box_width item_list_wrap"> 

                <!-- 로그인시, class="login_on"추가 -->
                <!--
				<li class="login_on"> 
					<a href="">
						<div class="img">
							<img src="">
						</div>
						<div class="info"> 
							<span class="category">animalbiome 수의학</span>
							<p class="tit">개를 위한 GI 릴리프 키트</p>
							<div class="price">35,000원</div>
							<button>가격을 보려면 로그인 또는 등록<i></i></button>
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<div class="img">
							<img src="">
						</div>
						<div class="info">
							<span class="category">animalbiome 수의학</span>
							<p class="tit">날로 먹인 개의 장 복원 보조제</p>
							<div class="price">35,000원</div>
							<button>가격을 보려면 로그인 또는 등록<i></i></button>
						</div>
					</a>
				</li>
                -->
                <?php foreach ($items as $item) { ?>
                <?php
                    $thumb = get_it_thumbnail2($item['it_img1'], 100, 100);
                ?>

                <li class="<?php echo $member['mb_no']? "login_on" : ""; ?>">
                    <a href="/shop/item.php?it_id=<?php echo $item['it_id']; ?>">
						<!-- <div class="img"> -->
                            <img src="<?php echo $thumb; ?>">
						<!-- </div> -->
						<div class="info">
							<span class="category"><?php echo $item['it_name']; ?></span> <!-- 상품명 -->
							<p class="tit"><?php echo $item['it_basic']; ?></p> <!-- 기본설명 -->
							<div class="price"><?php echo number_format($item['it_price']); ?>원</div>
							<button>가격을 보려면 로그인 또는 등록<i></i></button>
						</div>
					</a>
				</li>
                <?php } ?>
			</ul>
			<!-- <div class="pagination">
			  <a href="#" class="prev">prev</a>
			  <a href="#">1</a>
			  <a class="active" href="#">2</a>
			  <a href="#">3</a>
			  <a href="#">4</a>
			  <a href="#">5</a>
			  <a href="#" class="next">next</a>
			</div> -->
		</section>
	</div>
	<footer>
		<div class="box_width">
			<h4 class="logo">애니바이옴 헬스케어</h4>
			<div class="f_info_wrap">
				<p class="name m_none">Anibiome Healthcare</p>
				<div class="info_area">
					<p><em>Adress :</em> (28651) 242, Sajik-daero, Seowon-gu, Cheongju-si, Chungcheongbuk-do, Korea
</p>
					<p><em>Phone :</em> 010-5130-8844</p>
					<p><em>E-mail :</em> anibiome-hc@daum.net</p>
					<p><em>Fax :</em> 043-274-9551</p>
				</div>
				<span class="copyright">2023. Anibiome Healthcare Inc. All Rights Reserved</span>
			</div>
		</div>
	</footer>
</div>
<!--E 마크업 끝-->
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
                <a href="/page/ahvma.php">수의통합의학</a>
                <a href="/bbs/board.php?bo_table=sub12">노령동물전문관리 프로그램</a>
                <a href="/bbs/board.php?bo_table=sub13">강의/교육컨텐츠</a>
                <a href="/bbs/board.php?bo_table=sub14">전문진료자문시스템</a>
			</div>
			<a href="#"  class="open-btn-ckver">회사소개</a>
			<div class="detail_menu">
                <a href="/page/company_info.php">회사소개</a>
                <a href="/page/mission_vision.php">미션 및 비전</a>
                <a href="/page/ourteam.php">팀소개</a>
                <a href="/page/global_network.php">글로벌 네트워크</a>
			</div>
			<a href="#"  class="open-btn-ckver">핵심역량/사업</a>
			<div class="detail_menu">
                <a href="/page/target_market.php">Target Market</a>
                <a href="/page/core_needs.php">코어시장과 소비자의 니즈</a>
                <a href="/page/rnd_strategy.php">사업화 전략</a>
                <a href="/page/growth.php">중장기 성장전략</a>
			</div>
			<a href="#"  class="open-btn-ckver">협업/자문 시스템</a>
			<div class="detail_menu">
                <a href="/bbs/content.php?co_id=sub41">협업/자문 시스템</a>
                <a href="/bbs/content.php?co_id=sub42">협업/자문 프로세스</a>
                <a href="/bbs/content.php?co_id=sub43">협업/자문 상담 리스트</a>
			</div>
			<a href="#"  class="open-btn-ckver">마이크로바이옴</a>
			<div class="detail_menu">
                <a href="/bbs/content.php?co_id=sub51">마이크로바이옴</a>
                <a href="/bbs/content.php?co_id=sub52">마이크로바이옴(개)</a>
                <a href="/bbs/content.php?co_id=sub53">마이크로바이옴(고양이)</a>
                <a href="/bbs/board.php?bo_table=research">연구자료실</a>
                <a href="/page/fmt.php">분변이실(FMT)</a>
                <a href="/page/donor_screening.php">분변기증자 선별</a>
			</div>
			<a href="#"  class="open-btn-ckver">제품/쇼핑몰</a>
			<div class="detail_menu">
                <a href="/page/shop_productlist.php">제품 리스트</a>
			</div>
		</div>
    </div>
  </div>
</div>
<!--E 햄버거 모달 끝-->
<!--모달-->
<script>
    $(".wrap").addClass("shop");

	function mdShow(mdName) {
	  var $layer = $("#" + mdName);
	  $layer.addClass("show");
	}
	function mdHide(mdName) {
	  $("#" + mdName).removeClass("show");
	}
</script>

<!--shop 탭메뉴 고정-->
	<!-- <script>
		const content = document.querySelector('.shop_header');
		const wing = document.querySelector('.shop_header');

// 컨텐츠 영역부터 브라우저 최상단까지의 길이 구하기
const contentTop = content.getBoundingClientRect().top + window.scrollY;

window.addEventListener('scroll', function(){
  if(window.scrollY >= contentTop){
    wing.classList.add('fixed');
  }else{
    wing.classList.remove('fixed');
  }
});
	</script> -->
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


<?php
include_once(G5_THEME_PATH.'/tail.php');