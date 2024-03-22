<footer>
    <div class="box_width">
        <h4 class="logo">애니바이옴 헬스케어</h4>
        <div class="f_info_wrap">
            <p class="name m_none">Anibiome Healthcare</p>
            <div class="info_area">
                <p><em>Adress :</em> (28651) 242, Sajik-daero, Seowon-gu, Cheongju-si, Chungcheongbuk-do, Korea</p>
                <p><em>Phone :</em> 010-5130-8844</p>
                <p><em>E-mail :</em> anibiome-hc@daum.net</p>
                <p><em>Fax :</em> 043-274-9551</p>
            </div>
            <span class="copyright">2023. Anibiome Healthcare Inc. All Rights Reserved</span>
        </div>
    </div>
</footer>

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

<script>
$(function(){
    $('.open-btn-ckver').click(function(el){
        $(el.target).toggleClass('active');
    });
    $(".gnb_menu_btn").click(function(){
        $("#gnb_all, #gnb_all_bg").show();
    });
    $(".gnb_close_btn, #gnb_all_bg").click(function(){
        $("#gnb_all, #gnb_all_bg").hide();
    });
});
function mdShow(mdName) {
    var $layer = $("#" + mdName);
    $layer.addClass("show");
}
function mdHide(mdName) {
    $("#" + mdName).removeClass("show");
}
</script>