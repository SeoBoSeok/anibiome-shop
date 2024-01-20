<?php
include_once('./_common.php');

include_once(G5_THEME_PATH.'/head2.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_CSS_URL.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);
?>


<?php if($config['cf_kakao_js_apikey']) { ?>
<script src="https://developers.kakao.com/sdk/js/kakao.min.js" async></script>
<script>
var kakao_javascript_apikey = "<?php echo $config['cf_kakao_js_apikey']; ?>";
</script>
<script src="<?php echo G5_JS_URL; ?>/kakaolink.js?ver=<?php echo G5_JS_VER; ?>"></script>

<?php } ?>



<div class="content_wrap">
    <section class="product_info box_width">
        <div class="product_slide">
            <?php
                // 이미지 셋팅
                $big_img_count = 0;
                $thumbnails = array();
                for($i=1; $i<=10; $i++) {
                    if(!$it['it_img'.$i])
                        continue;
        
                    $img = get_it_thumbnail($it['it_img'.$i], $default['de_mimg_width'], $default['de_mimg_height']);
                    
                    if($img) {
                        // 썸네일
                        $thumb = get_it_thumbnail($it['it_img'.$i], 70, 70);
                        $thumbnails[] = $thumb;
                        $big_img_count++;
                    }
                }
            ?>

            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                <?php
                $big_img_count = 0;
                $thumbnails = array();
                for($i=1; $i<=10; $i++) {
                    if(!$it['it_img'.$i])
                        continue;
        
                    $img = get_it_thumbnail($it['it_img'.$i], $default['de_mimg_width'], $default['de_mimg_height']);
        
                    if($img) {
                        // 썸네일
                        $thumb = get_it_thumbnail($it['it_img'.$i], 70, 70);
                        $thumbnails[] = $thumb;
                        $big_img_count++;
                        echo '<div class="swiper-slide">';
                        echo $img;
                        echo '</div>';
                    }
                }
        
                // if($big_img_count == 0) {
                //     echo '<img src="'.G5_SHOP_URL.'/img/no_image.gif" alt="">';
                // }
                ?>
                </div> 

                <!--                 
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/product_slide_img.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/product_slide_img2.jpg" />
                    </div>
                </div> 
                -->
            </div>
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                <?php
                    $big_img_count = 0;
                    $thumbnails = array();
                    for($i=1; $i<=10; $i++) {
                        if(!$it['it_img'.$i])
                            continue;
            
                        $img = get_it_thumbnail($it['it_img'.$i], $default['de_mimg_width'], $default['de_mimg_height']);
                        
                        if($img) {
                            // 썸네일
                            $thumb = get_it_thumbnail($it['it_img'.$i], 70, 70);
                            $thumbnails[] = $thumb;
                            $big_img_count++;
                            echo '<div class="swiper-slide">';
                            echo $img;
                            echo '</div>';
                        }
                    }
                ?>
                </div>

                <!-- 
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/product_slide_img.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/product_slide_img2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/product_slide_img3.jpg" />
                    </div> 
                </div> 
                -->
            </div>


        </div>
        <div class="right_group">
            <p class="category">
            <?php echo $it['ca_name']; ?>
            </p>
            <div class="pro_name_box">
                <h3 class="pro_name"><?php echo $it['it_name']; ?></h3>
                <div class="btn_cart">
                    <button type="button">
                        <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/ico_cart_gray.svg" alt="">
                    </button>
                </div>
            </div>
            <div class="pro_star">
                <div class="img_box">
                    <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/ico_star5.svg" alt="" class="img">
                </div>
                <p class="">
                    <span>5.0</span>
                    <span>&#40;2130개의 후기 &#41;</span>
                </p>
            </div>
            <div class="pro_review">
                <p class="txt_group">
                    <span class="percent">
                        <em>14</em>%
                    </span>
                    <span class="price_s">
                        <em><?php echo number_format($it['it_cust_price']); ?></em>원
                    </span>
                </p>
                <p class="price">
                    <span><?php echo number_format($it['it_price']); ?></span>원
                </p>
            </div>
            <div class="pro_txt">
                <?php echo $it['it_explan']; ?>
                <!-- <ul>
                    <li>

                        장&피부 면역기증 회복 및 증진에 도움을 줌

                    </li>
                    <li>
                        60 캡슐 (250mg/Caps.)
                    </li>
                </ul> -->
            </div>
            <div class="pro_last">
                <div class="sub_box">
                    <div class="img_box">
                        <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/ico_anibiome.svg" alt="">
                    </div>
                    <p>
                        주치 수의사들과 보호자들이 함께 추천하는 <br>
                        <strong>No.1 브랜드 애니바이옴헬스케어</strong>
                    </p>
                </div>
                <div class="sub_box">
                    <div class="img_box">
                        <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/ico_guaranteed.svg" alt="">
                    </div>
                    <p>
                        구매하신 제품에 대해 불만족 시, 미사용분을 구매처에 반품하시면 <br>
                        <strong>전액 환불 또는 교환을 진행해드립니다.</strong>
                        <a href="javascript:;">더 알아보기</a>
                    </p>
                </div>
            </div>
            <form name="fitem" action="<?php echo $action_url; ?>" method="post" onsubmit="return fitem_submit(this);">
                <input type="hidden" name="it_id[]" value="<?php echo $it['it_id']; ?>">
                <input type="hidden" name="sw_direct" value="1">
                <input type="hidden" name="url">
                <input type="hidden" name="io_type[<?php echo $it_id; ?>][]" value="0">
                <input type="hidden" name="io_id[<?php echo $it_id; ?>][]" value="">
                <input type="hidden" name="io_value[<?php echo $it_id; ?>][]" value="<?php echo $it['it_name']; ?>">
                <input type="hidden" class="io_price" value="0">
                <input type="hidden" class="io_stock" value="<?php echo $it['it_stock_qty']; ?>">
                <input type="hidden" name="ct_qty[<?php echo $it_id; ?>][]" value="1" id="quantity2" class="num_input" size="5">
                <input type="hidden" id="it_price" value="150000">
                    <div class="pro_buy">
                        <div class="btn_quantity">
                            <button type="button" class="btn_minus" onclick="decreaseQuantity()">-</button>
                            <span id="quantity">1</span>
                            <button type="button" class="btn_plus" onclick="increaseQuantity()">+</button>
                        </div>
                        <div class="btn_buy">
                            <a href="javascript:;" onclick="simulateButtonClick()">바로 구매</a>
                        </div>
                    </div>
            </form>
        </div>

    </section>
    <section class="product_tab_box">
        <div class="product_tab">
            <ul>
                <li class="on">
                    <a href="javascript:;">
                        주요 이점
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        성분
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        복용 가이드
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        주요성분별 효능
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        연구자료실
                    </a>
                </li>
            </ul>
        </div>
        <div class="product_tab_wrap">
            <div class="product_tab_cont">
                <div class="text_group">
                    <h4>
                        [제품 특징]
                    </h4>
                    <ol class="num_list">
                        <li>
                            알러지나 설사 증상, 건강한 피부와 장기능 회복에 도움되는 프로바이오틱과 프리바이오틱 보충제
                        </li>
                        <li>
                            활성 성분인S. boulardii및 GOS를 함유하여, 소화기능향상과 면역 체계 강화하여 건강한 피부회복을 촉진
                        </li>
                        <li>
                            다양한 항생제 및 면역저하 약물 등에서 장내 유익균 감소로 발생되는 문제를 해결하는데 매우 도움
                        </li>
                        <li>
                            체중이나 증상에 따른 권장 복용량을 참조하거나 수의사의 지시에 따라 사용할 것
                        </li>
                        <li>
                            캡슐 전체를 복용하는 데 문제가 있는 경우 캡슐을 열고 분말을 음식이나 간식과 혼합섭취 가능
                        </li>
                        <li>
                            수의내과전문의 & 수의영양학 전문가 추천제품
                        </li>
                    </ol>
                </div>
                <div class="text_group">
                    <h4>
                        [주요 핵심 기능]
                    </h4>
                    <ol class="num_list">
                        <li>
                            알러지나 설사 증상, 건강한 피부와 장기능 회복에 도움되는 프로바이오틱과 프리바이오틱 보충제
                        </li>
                        <li>
                            활성 성분인S. boulardii및 GOS를 함유하여, 소화기능향상과 면역 체계 강화하여 건강한 피부회복을 촉진
                        </li>
                        <li>
                            다양한 항생제 및 면역저하 약물 등에서 장내 유익균 감소로 발생되는 문제를 해결하는데 매우 도움
                        </li>
                        <li>
                            체중이나 증상에 따른 권장 복용량을 참조하거나 수의사의 지시에 따라 사용할 것
                        </li>
                        <li>
                            캡슐 전체를 복용하는 데 문제가 있는 경우 캡슐을 열고 분말을 음식이나 간식과 혼합섭취 가능
                        </li>
                        <li>
                            수의내과전문의 & 수의영양학 전문가 추천제품
                        </li>
                    </ol>
                </div>
                <div class="text_group">
                    <div class="txt_alert">
                        <div class="icon_box">
                            <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/ico_alret.svg" alt="">
                        </div>
                        <p>
                            피부/위장질환 심하거나,본 보충제 사용에도 효과가 미미한 경우, 장-구강 마이크로바이옴 검사를 반드시 권장드립니다.
                        </p>
                    </div>
                </div>

            </div>
            <div class="product_tab_cont ingredient_tab">
                <div class=" text_group">
                    <h4>
                        [사용한 원료]
                    </h4>
                    <p>
                        Saccharomycescerevisiaeboulardii,Chicoryrootextract,Oatmealpowder,Turmericpowder,Earmushroompowder,Zincgluconate,Clostridiumbutyricum,Galactooligosaccharide,Driedyeast,Silicondioxide,Tunaextract,Cheesepowder,Skimmilkpowder
                    </p>
                </div>
                <div class="product_tab_table">
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    주요 성분
                                </th>
                                <th>
                                    1캡슐 250mg 중
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    S. cerevisiae boulardii
                                </th>
                                <td>
                                    6 x 108CFU
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Clostridium butyricum
                                </th>
                                <td>
                                    1 x 107CFU
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Clostridium butyricum
                                </th>
                                <td>
                                    10mg
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Oatmeal powder
                                </th>
                                <td>
                                    10mg
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Turmeric powder
                                </th>
                                <td>
                                    2mg
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Ear mushroom powder
                                </th>
                                <td>
                                    10mg
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Zinc gluconate
                                </th>
                                <td>
                                    25mg
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Galactooligosaccharide(GOS)
                                </th>
                                <td>
                                    15mg
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="product_tab_cont">
                <div class=" text_group">
                    <h4>
                        [효능 및 효과]
                    </h4>
                    <ul>
                        <li>
                            대상동물: 개
                        </li>
                        <li>
                            장과 피부의 면역기증 회복 및 증진에 도움을 줌
                        </li>

                    </ul>
                </div>
                <div class="text_group">
                    <h4>
                        [용법 및 용량]
                    </h4>
                    <ul>
                        <li>
                            사용방법: <br>
                            1일 2캡슐 경구 투여. 캡슐 그대로 또는 분말로 투여 가능*체중 5kg기준
                        </li>


                    </ul>
                </div>
                <div class="text_group">
                    <h4>
                        [보관방법]
                    </h4>
                    <ul>
                        <li>
                            햇빛이 들지 않고 건조한 실온(1~25°C)에 보관
                        </li>


                    </ul>
                </div>
                <div class="text_group">
                    <h4>
                        [주의사항]
                    </h4>
                    <ul>
                        <li>
                            수의사의 지시에 따라 사용하십시오.
                        </li>
                        <li>
                            사용 전 사용설명을 잘 읽어 보신 후 사용하십시오.
                        </li>
                        <li>
                            생후 3개월 미만의 어린 동물에 급여 시는 반드시 수의사와 상의하십시오.
                        </li>
                        <li>
                            투여 중 설사나 구토 등 부작용이 보이는 동물에게는 급여를 중단하십시오.
                        </li>
                        <li>
                            안정성 및 유효성에 변화를 초래할 수 있으므로 반드시 저장방법을 준수하십시오.
                        </li>
                        <li>
                            유효기간이 경과한 제품은 사용하지 마시고 안전하게 폐기하십시오.
                        </li>
                        <li>
                            개체별 상황에 따라 도움을 줄 수 없을 수도 있습니다.
                        </li>
                        <li>
                            어린이나 동물의 접근이 불가능한 곳에 보관하십시오.
                        </li>

                    </ul>
                </div>
            </div>
            <div class="product_tab_cont efficacy_tab">

                <div class="product_tab_table">
                    <table>
                        <colgroup>
                            <col class="col1">
                            <col class="col2">

                        </colgroup>
                        <thead>
                            <tr>
                                <th>
                                    주요 성분
                                </th>
                                <th>
                                    주요 효능
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    S. cerevisiae boulardii
                                </th>
                                <td>
                                    <div class="sub_box">
                                        <p>위장건강, 설사관리, 면역조절, 항염증, 항생제로 약화된 장내 미생물 보호</p>
                                        <div class="btn_more">
                                            <button type="button"><img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/btn_circle_plus.svg"
                                                    alt="">
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Clostridium butyricum
                                </th>
                                <td>
                                    <div class="sub_box">
                                        <p>단쇄지방산 생산, 장건강, 항염증 효과, 영양소 흡수개선, 향상된 장장벽, 장내미생물 균형, 위장장애 도움</p>
                                        <div class="btn_more">
                                            <button type="button"><img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/btn_circle_plus.svg"
                                                    alt="">
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Clostridium butyricum
                                </th>
                                <td>
                                    <div class="sub_box">
                                        <p>천연 식이섬유, 프리바이오틱, 저칼로리, 질감 및 맛향상, 혈당조절, 소화기건강, 식욕조절, 잠재적인 건강상 이점</p>
                                        <div class="btn_more">
                                            <button type="button"><img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/btn_circle_plus.svg"
                                                    alt="">
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Oatmeal powder
                                </th>
                                <td>
                                    <div class="sub_box">
                                        <p>진정효과, 피부 수분공급 및 장벽기능, 가려움방지효과, 부드러운 클랜징, 위장건강, 식이섬유 공급</p>
                                        <div class="btn_more">
                                            <button type="button"><img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/btn_circle_plus.svg"
                                                    alt="">
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Turmeric powder
                                </th>
                                <td>
                                    <div class="sub_box">
                                        <p>항염증, 항산화 활성, 소화지원, 통증관리, 항암효과</p>
                                        <div class="btn_more">
                                            <button type="button"><img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/btn_circle_plus.svg"
                                                    alt="">
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Ear mushroom powder
                                </th>
                                <td>
                                    <div class="sub_box">
                                        <p>면역조절, 항산화 활동, 항염증, 피부건강</p>
                                        <div class="btn_more">
                                            <button type="button"><img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/btn_circle_plus.svg"
                                                    alt="">
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Zinc gluconate
                                </th>
                                <td>
                                    <div class="sub_box">
                                        <p>면역체계지원, 상처치유, 항산화 방어, 미각 및 후각도움, 호르몬 조절, 피부건강, 생식건강, 뼈건강</p>
                                        <div class="btn_more">
                                            <button type="button"><img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/btn_circle_plus.svg"
                                                    alt="">
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Galactooligosaccharide(GOS)
                                </th>
                                <td>
                                    <div class="sub_box">
                                        <p>프리바이오틱 활동, 장건강 및 소화, 면역조절, 변비완화, 향상된 미네랄흡수</p>
                                        <div class="btn_more">
                                            <button type="button"><img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/btn_circle_plus.svg"
                                                    alt="">
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
                <a href="#" class="open-btn-ckver">회사소개</a>
                <div class="detail_menu">
                    <a href="#">menu01</a>
                    <a href="#">menu02</a>
                    <a href="#">menu03</a>
                </div>
                <a href="#" class="open-btn-ckver">핵심역량/사업</a>
                <div class="detail_menu">
                    <a href="#">menu01</a>
                    <a href="#">menu02</a>
                    <a href="#">menu03</a>
                </div>
                <a href="#" class="open-btn-ckver">협업/자문 시스템</a>
                <div class="detail_menu">
                    <a href="#">menu01</a>
                    <a href="#">menu02</a>
                    <a href="#">menu03</a>
                </div>
                <a href="#" class="open-btn-ckver">마이크로바이옴</a>
                <div class="detail_menu">
                    <a href="#">menu01</a>
                    <a href="#">menu02</a>
                    <a href="#">menu03</a>
                </div>
                <a href="#" class="open-btn-ckver">제품/쇼핑몰</a>
                <div class="detail_menu">
                    <a href="#">menu01</a>
                    <a href="#">menu02</a>
                    <a href="#">menu03</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal_effic" id="mb_ef">
    <div class="modal_container">
        <div class="modal_efficacy">
            <div class="top_group">
                <div class="logo">
                    <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/logo.svg" alt="">
                </div>
                <button onclick="mdHide('mb_ef')" class="btn_close">
                    <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/ico_closepop.svg" alt="">
                </button>
            </div>
            <div class="txt_group">
                <h4 class="tit">
                    Saccharomycesboulardii 효능
                </h4>
                <div class="scroll_box">
                    <p>
                        Saccharomycesboulardii는 수의학 및 인간 건강 관리에서 그 기능과 잠재적 이점에 대해 광범위하게 연구된 유익한 효모 균주입니다. 다음은 수의학 및
                        의료
                        분야에서
                        SaccharomycesboulardiI의 주요 기능 및 이점입니다.
                    </p>
                    <ul>
                        <li>
                            <span>1.</span> 위장 건강: Saccharomycesboulardii는 반려동물에서 위장 건강을 지원하는 것으로 나타났습니다. 유익한 장내
                            미생물의 건강한 균형을 회복하고
                            유지하는 데 도움이 되며, 소화를 개선하고 배변을 조절하며 영양소 흡수를 향상시키는 데 도움이 될 수 있습니다.
                        </li>
                        <li>
                            <span>2.</span>
                            위장 건강: Saccharomycesboulardii는 반려동물에서 위장 건강을 지원하는 것으로 나타났습니다. 유익한 장내 미생물의 건강한 균형을 회복하고
                            유지하는 데 도움이 되며, 소화를 개선하고 배변을 조절하며 영양소 흡수를 향상시키는 데 도움이 될 수 있습니다.
                        </li>
                        <li>
                            <span>3.</span>
                            위장 건강: Saccharomycesboulardii는 반려동물에서 위장 건강을 지원하는 것으로 나타났습니다. 유익한 장내 미생물의 건강한 균형을 회복하고
                            유지하는 데 도움이 되며, 소화를 개선하고 배변을 조절하며 영양소 흡수를 향상시키는 데 도움이 될 수 있습니다.
                        </li>
                        <li>
                            <span>4.</span>
                            위장 건강: Saccharomycesboulardii는 반려동물에서 위장 건강을 지원하는 것으로 나타났습니다. 유익한 장내 미생물의 건강한 균형을 회복하고
                            유지하는 데 도움이 되며, 소화를 개선하고 배변을 조절하며 영양소 흡수를 향상시키는 데 도움이 될 수 있습니다.
                        </li>
                        <li>
                            <span>5.</span>
                            위장 건강: Saccharomycesboulardii는 반려동물에서 위장 건강을 지원하는 것으로 나타났습니다. 유익한 장내 미생물의 건강한 균형을 회복하고
                            유지하는 데 도움이 되며, 소화를 개선하고 배변을 조절하며 영양소 흡수를 향상시키는 데 도움이 될 수 있습니다.
                        </li>
                        <li>
                            <span>6.</span>
                            위장 건강: Saccharomycesboulardii는 반려동물에서 위장 건강을 지원하는 것으로 나타났습니다. 유익한 장내 미생물의 건강한 균형을 회복하고
                            유지하는 데 도움이 되며, 소화를 개선하고 배변을 조절하며 영양소 흡수를 향상시키는 데 도움이 될 수 있습니다.
                        </li>
                        <li>
                            <span>7.</span>
                            위장 건강: Saccharomycesboulardii는 반려동물에서 위장 건강을 지원하는 것으로 나타났습니다. 유익한 장내 미생물의 건강한 균형을 회복하고
                            유지하는 데 도움이 되며, 소화를 개선하고 배변을 조절하며 영양소 흡수를 향상시키는 데 도움이 될 수 있습니다.
                        </li>
                        <li>
                            <span>8.</span>
                            위장 건강: Saccharomycesboulardii는 반려동물에서 위장 건강을 지원하는 것으로 나타났습니다. 유익한 장내 미생물의 건강한 균형을 회복하고
                            유지하는 데 도움이 되며, 소화를 개선하고 배변을 조절하며 영양소 흡수를 향상시키는 데 도움이 될 수 있습니다.
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- 탭메뉴 -->
<script>
    $(function(){
        // 상품이미지 첫번째 링크
        $("#sit_pvi_big a:first").addClass("visible");

        // 상품이미지 미리보기 (썸네일에 마우스 오버시)
        $("#sit_pvi .img_thumb").bind("mouseover focus", function(){
            var idx = $("#sit_pvi .img_thumb").index($(this));
            $("#sit_pvi_big a.visible").removeClass("visible");
            $("#sit_pvi_big a:eq("+idx+")").addClass("visible");
        });

        // 상품이미지 크게보기
        $(".popup_item_image").click(function() {
            var url = $(this).attr("href");
            var top = 10;
            var left = 10;
            var opt = 'scrollbars=yes,top='+top+',left='+left;
            popup_window(url, "largeimage", opt);

            return false;
        });
    });

    $(".wrap").addClass("shop");
    
    $(".product_tab li ").click(function () {
        let t = $(this).index();
        $(".product_tab li").removeClass("on");
        $(this).addClass("on");
        $(".product_tab_wrap .product_tab_cont").hide().eq(t).fadeIn();
    });
    $(".efficacy_tab .sub_box .btn_more ").click(function () {

        $(".modal_effic").addClass("show");

    });
</script>
<script>
    // 초기 수량
    let quantity = 1;

    // 수량 증가 함수
    function increaseQuantity() {
        quantity++;
        updateQuantity();
    }

    // 수량 감소 함수
    function decreaseQuantity() {
        if (quantity > 1) {
            quantity--;
            updateQuantity();
        }
    }

    // 수량 업데이트 함수
    function updateQuantity() {
        document.getElementById('quantity').innerText = quantity;
        document.getElementById('quantity2').value = quantity;
        document.getElementById('it_price').value = quantity * 150000;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        direction: "vertical",
        spaceBetween: 8,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {

        spaceBetween: 10,
        slidesPerView: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>
<!--E 햄버거 모달 끝-->
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
<!--shop 탭메뉴 고정-->
<script>
    const content = document.querySelector('.shop_header');
    const wing = document.querySelector('.shop_header');

    // 컨텐츠 영역부터 브라우저 최상단까지의 길이 구하기
    const contentTop = content.getBoundingClientRect().top + window.scrollY;

    window.addEventListener('scroll', function () {
        if (window.scrollY >= contentTop) {
            wing.classList.add('fixed');
        } else {
            wing.classList.remove('fixed');
        }
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
<!-- 제품 슬라이드 -->

<script>
function simulateButtonClick() {
    // 필요한 값 설정
    document.pressed = '바로구매';

    // 폼 제출
    document.fitem.submit();
}
</script>

<?php include_once(G5_THEME_PATH.'/footer.php'); ?>
<?php
include_once(G5_THEME_PATH.'/tail.php');