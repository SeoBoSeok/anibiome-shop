<?php
include_once('./_common.php');

include_once(G5_THEME_PATH.'/head2.php');

?>

<div class="content_wrap sub">
    <section class="sub_visual">
        <div class="sub_top_bg"><img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images2/sub_top_bg.png"></div>
        <div class="page_name text-typing-any">
            <p>코어시장과 소비자의 니즈</p>
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
                    <div class="dropbtn open-btn-ckver">Target Market</div>
                    <div class="dropdown-content">
                        <a href="">menu01</a>
                        <a href="">menu02</a>
                        <a href="">menu03</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="consumer_needs">
        <div class="visual">
            <div class="box_width">
                <h1>
                    반려동물산업의 생애주기별 분류
                </h1>
                <p>
                    반려동물 헬스케어 핵심 코어시장과 소비자의 니즈는 <br>
                    의료시장 확장에 있습니다.
                </p>
            </div>
        </div>
        <div class="needs_list ">
            <div class="box_width">
                <ul>
                    <li data-aos="fade-up" data-aos-duration="2000">
                        <div class="img_box">
                            <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images2/needs01.jpg" alt="">
                            <h2>01 생산</h2>
                        </div>
                        <p>
                            브리딩 | 사육 | 교육
                        </p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <div class="img_box">
                            <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images2/needs02.jpg" alt="">
                            <h2>02 유통</h2>
                        </div>
                        <p>
                            분양 (분양숍, 경매장 등) | 수입 (해외) | 운송
                        </p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="2000">
                        <div class="img_box">
                            <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images2/needs03.jpg" alt="">
                            <h2>03 반려</h2>
                        </div>
                        <p>
                            푸드 (사료,간식) | 프로덕트 (관련용품) <br>
                            헬스케어 (수의, 약품, 침술) | 파이낸스 (보험)<br>
                            리빙 (주거, 여행, 여가) | 뷰티 (미용) | 컬쳐 (파크, 대회)<br>
                            테크 (연식/관리, IOT)
                        </p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <div class="img_box">
                            <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images2/needs04.jpg" alt="">
                            <h2>04 사후</h2>
                        </div>
                        <p>
                            장례 | 화장 | 장묘
                        </p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="2000">
                        <div class="img_box">
                            <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images2/needs05.jpg" alt="">
                            <h2>05 의료사업 확장</h2>
                        </div>
                        <p>
                            유기 유실견 건강관리 | 반려동물 영상진단센터 <br>
                            반려동물 응급센터
                        </p>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <footer class="color">
        <div class="box_width">
            <h4 class="logo">애니바이옴 헬스케어</h4>
            <div class="f_info_wrap">
                <p class="name m_none">Anibiome Healthcare</p>
                <div class="info_area">
                    <p><em>Adress :</em> (28651) 242, Sajik-daero, Seowon-gu, Cheongju-si, Chungcheongbuk-do,
                        Korea
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
        checkdropdown[b].addEventListener("click", function () {
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

<?php
include_once(G5_THEME_PATH.'/tail.php');