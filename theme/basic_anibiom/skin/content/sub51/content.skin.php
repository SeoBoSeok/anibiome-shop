<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<div class="wrap">
    <?php include_once(G5_THEME_PATH.'/menu.php'); ?>
    <div class="content_wrap sub">
		<section class="sub_visual">
			<div class="sub_top_bg"><img src="/assets/images/sub_top_bg.png"></div>
			<div class="page_name text-typing-any">
				<p class="al_center">Microbiome</p>
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
						<div class="dropbtn open-btn-ckver">Microbiome</div>
						<div class="dropdown-content">
							<a href="">menu01</a>
							<a href="">menu02</a>
							<a href="">menu03</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="hidden microbiome_sub">
			<div class="box_width section_padding">
				<div class="txt_half_box">
					<p class="left_tit">
						마이크로바이옴 연구
					</p>
					<div class="right_group">
						<p>
							반려동물 건강개선을 위해 연구에 전념하는 애니바이옴헬스케어는 반려동물 마이크로바이옴 전문 연구 회사로서, 장내 마이크로바이옴 검사를 포함하여, 각 질병에 대한 혁신적인 솔루션을 연구개발하고 있습니다.
						</p>
					</div>
				</div>
				<div class="blue_text_box" data-aos="flip-left">
					<img src="/assets/images/microbiome_img01.svg" style="max-width: 800px; margin: 0 auto; display: block;">
					<div class="txt_group">
						<span>마이크로바이옴</span>
						<p>환자의 위장관에는 수백 가지의 다양한 유형의 박테리아 및 기타 미생물(예: 바이러스 및 진균류)의 고유한 커뮤니티가 있으며, 총칭하여 장내 미생물 군집(마이크로바이옴)이라고 합니다. 다양하고 균형 잡힌 장내 마이크로바이옴은 소화 및 영양소 흡수에 필수적이며, 중요한 역할을 하므로 건강한 장내 미생물 군집은 전반적인 웰빙과 장수에 중요합니다. 일부 주요 유익한 박테리아가 마이크로바이옴에서 누락되거나 다른 박테리아 그룹이 적절한 양으로 존재하지 않으면 결과적인 불균형이 염증을 유발할 수 있습니다. 그리고 지속적인 염증은 염증성 장 질환(IBD), 피부 문제, 면역 체계 반응, 당뇨병, 심지어 우울증과 같은 만성 질환으로 이어질 수 있습니다.</p>
					</div>
				</div>
			</div>
			<div class="box_width section_padding inner_intestine">
				<div class="txt_half_box">
					<p class="left_tit">
						장내 마이크로바이옴
					</p>
					<div class="right_group">
						<p>
							<span>장내 마이크로바이옴 정의</span>
							사람과 마찬가지로 개와 고양이의 위장관에는 수조 개의 작은 유기체(박테리아, 곰팡이, 바이러스와 같은 미생물)가 살고 있습니다. 총체적으로 장내 마이크로바이옴이라고 불리는 이 작은 유기체는 음식 소화를 돕고, 질병으로부터 보호하고, 건강한 피부와 피모를 유지하는 것과 같이 환자에게 모든 종류의 놀랍고 중요한 일을 합니다.
						</p>
						<p>
							<span>장내 마이크로바이옴과 관련된 증상</span>
							건강한 장에는 수천 종의 다양한 미생물이 다양하고 균형 잡힌 군집을 이룹니다. 그러나 유익한 미생물이 충분하지 않거나 유해한 미생물이 너무 많으면 해당 커뮤니티의 중요한 기능 중 일부가 작동을 멈추고 환자는 설사나 가려운 피부와 같은 불편한 증상을 나타낼 수 있습니다. 장내 마이크로바이옴의 이러한 종류의 파괴는 질병, 연령, 식이요법, 약물(특히 항생제)을 비롯한 다양한 요인에 의해 발생할 수 있습니다.
						</p>
					</div>
				</div>
				<div class="compare_illust">
					<div class="blue" data-aos="zoom-in">
						<p>균형잡힌 장내 마이크로바이옴</p>
						<img src="/assets/images/microbiome_img02.svg" class="m_none_tab_on">
						<img src="/assets/images/microbiome_img02_m.svg" class="pc_tab_none">
					</div>
					<div class="red" data-aos="zoom-in" data-aos-delay="300">
						<p>불균형 장내 마이크로바이옴</p>
						<img src="/assets/images/microbiome_img03.svg" class="m_none_tab_on">
						<img src="/assets/images/microbiome_img03_m.svg" class="pc_tab_none">
					</div>
				</div>
			</div>
			<div class="box_width section_padding influence_area">
				<div class="txt_half_box">
					<!-- <p class="left_tit">
						Influence
					</p> -->
					<div class="left_tit">Influence</div>
					<div class="right_group">
						<p>
							<span>항생제가 마이크로바이옴에 미치는 영향</span>
							어떤 상황에서는 이러한 강력한 약물이 필요하고 생명을 구하는 치료이기도 하지만 항생제( 메트로니다졸 과 같은 )는 환자의 장내 미생물 군집에 급진적이고 장기적인 변화를 일으킬 수 있습니다. 항생제는 목표로 하는 해로운 박테리아와 함께 많은 유익한 박테리아를 죽이기 때문입니다. 그러나 환자에게 항생제가 필요한 경우 치료 중 및 치료 후에 장 건강을 지원하기 위해 할 수 있는 일이 여전히 많이 있으며, 그 중에 가장 중요한 일이 바로 장내 마이크로바이옴의 균형의 회복입니다.
						</p>
						<p>
							<!-- <span>식단이 반려동물의 장 건강에 미치는 영향</span> -->
							<!-- <img src="/assets/images/microbiome_img04.svg" style="max-width: 339px; display: block; margin:0 auto;" class="dog_illu"> -->
							식이요법은 환자의 장내 미생물군을 관리하는 가장 중요하고 최선의 방법입니다. 고양이나 개에게 먹이는 것은 어떤 종류의 미생물이 그들의 장에서 번성하고 번식하는지 결정하는 데 도움이 됩니다. 유익한 종류의 미생물을 지원하고 유해한 종류의 미생물을 억제하는 식단을 제공함으로써 환자가 더 길고 행복한 삶을 살 수 있도록 도울 수 있습니다.
						</p>
						<p>
							<span>프로바이오틱스가 반려동물의 장 건강에 미치는 영향</span>
							프로바이오틱스 보충제에는 유익한 박테리아가 포함되어 있지만, 애완동물을 위해 특별히 판매되는 프로바이오틱스에도 몇 가지 박테리아 균주만 포함되어 있으며, 일반적으로 모든 개와 고양이에게 적합하지는 않습니다. 그 이유는 개체별로 장내 마이크로바이옴 상태가 다르기때문에, 각각 개별에 맞는 제품이 필요할 수 있습니다.
특히 이러한 일반 제품들은 일부 소화기 증상을 일시적으로 개선할 수 있지만, 포함된 미생물은 환자의 장에 영구적으로 상주하지 않으므로 근본적인 불균형을 고칠 수는 없습니다. 최신 연구에 의하면 프로바이오틱스는 항생제 사용 후 장내 미생물의 회복을 실제로 도움을 줄 수도 있지만 방해할 수도 있습니다.
						</p>
					</div>
				</div>
			</div>
			<div class="porocess_info">
				<div class="cover">
					<div class="box_width">
						<p class="sc_tit">마이크로바이옴 검사</p>
					</div>
				</div>
				<div class="blue_text_box box_width" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
					<img src="/assets/images/microbiome_img06.svg" style="max-width: 309px; margin:0 auto; display: block;">
					<div class="txt_group">
						<span>환자의 장내 마이크로바이옴에서  무슨 일이 일어나고 있는지 알아보십시오</span>
						<p>마이크로바이옴 테스트는 환자의 소화기 건강 상태와 식단이 올바른 미생물을 촉진하는지 여부를 알 수 있는 좋은 방법입니다. 쉽고 비침습적인 검사를 통해 환자의 소화 시스템에 살고 있는 박테리아에 실제로 무슨 일이 일어나고 있는지 확인할 수 있습니다. 그리고 장내 미생물 군집의 불균형한 박테리아 군집이 설사나 가려운 피부와 같은 증상을 일으키는 경우 장내 미생물 간의 조화를 회복하도록 도울 수 있습니다. 장내 마이크로바이옴의 균형을 재조정함으로써 환자의 건강상태가 나아지도록 도울 수 있습니다.</p>
					</div>
					<div class="txt_group">
						<span>검사 보고서에는 어떤 내용이 있습니까?</span>
						<p>여러분이 받는 검사결과 보고서에는 환자의 마이크로바이옴 검사 결과에 대한 자세한 설명과 함께, 환자의 건강을 개선하고 증상을 완화하기 위한 식이 조절, 보충제 및 생활 습관 변화와 같은 개인화된 권장 사항도 포함됩니다. 환자가 만성 소화기 또는 피부 문제로 진단받은 경우 테스트 보고서는 실행 가능한 정보를 제공합니다.</p>
					</div>
				</div>
			</div>
			<div class="porocess_area box_width section_padding">
				<div class="txt_half_box">
					<p class="left_tit">
						치료관리 프로세스
					</p>
					<div class="right_group">
						<p>
							애니바이옴헬스케어의 연구자들은 다수의 다양한 품종의 개와 고양이의 마이크로바이옴을 연구하고 있으며, 다양한 증상으로 고통받는 반려동물을 위한 과학적인 솔루션을 연구개발중에 있습니다. 환자가 설사, 구토 또는 가려운 피부와 같은 건강 문제를 겪고 있다면 그 원인은 장내 미생물(마이크로바이옴) 불균형일 수 있습니다. 당사의 마이크로바이옴 테스트 및 치료관리 제품들은 아래의 3단계 프로세스 를 통해 건강한 장내 마이크로바이옴을 달성하기 위한 과학적이고 포괄적인 로드맵을 제공합니다 .
						</p>
					</div>
				</div>
				<ul class="process_diagram">
						<li>
							<img src="/assets/images/microbiome_img07.svg">
							<div class="text_group">
								<span>1단계 : 평가</span>
								<p>환자의 장 건강을 평가 하여 고양이나 개 내부에서 <br class="m_none">실제로 무슨 일이 일어나고 있는지 이해하십시오.</p>
							</div>
						</li>
						<li>
							<img src="/assets/images/microbiome_img08.svg">
							<div class="text_group">
								<span>2단계 : 복원</span>
								<p>장내 미생물의 균형을 회복 하여 <br class="m_none">환자의 불편한 증상을 완화하십시오.</p>
							</div>
						</li>
						<li>
							<img src="/assets/images/microbiome_img09.svg">
							<div class="text_group">
								<span>3단계 : 유지</span>
								<p>건강하고 균형 잡힌 마이크로바이옴을 유지 하여 <br class="m_none">환자가 더 길고 행복한 삶을 살 수 있도록 돕습니다.</p>
							</div>
						</li>
				</ul>
			</div>
			<div class="tea_banner"></div>
			<div class="process01 box_width section_padding">
				<div class="txt_half_box">
					<p class="left_tit" data-aos="fade-right">
						<span>1단계</span> 평가
					</p>
					<div class="right_group">
						<p>
							소량의 대변 샘플로 환자의 건강에 대해 많은 것을 알 수 있습니다. 유전자 시퀀싱을 사용하여 환자의 마이크로바이옴에 있는 모든 상주 박테리아 그룹을 식별합니다. 그런 다음 결과를 건강한 애완 동물 참조 세트와 비교합니다. 마지막으로 환자의 건강과 행복을 개선하기 위한 맞춤형 식단 및 라이프스타일 권장 사항이 포함된 포괄적인 보고서를 제공합니다.
						</p>
						<p>
							<span>마이크로바이옴 검사의 의미</span>
							개와 고양이를 위한 장 건강 테스트 키트 에는 환자 대변의 작은 샘플을 수집하여 실험실로 보내는 데 필요한 모든 것이 포함되어 있습니다. 환자의 샘플을 받으면 먼저 모든 박테리아에서 DNA를 추출합니다. 완두콩 크기의 배설물 샘플에는 약 10억 개의 박테리아 세포가 들어 있습니다. DNA 시퀀싱과 강력한 분석 소프트웨어를 사용하여 환자의 장에 서식하는 모든 유형의 박테리아를 식별합니다. 그런 다음 귀하의 고양이 또는 강아지의 결과를 점점 증가하고 있는 건강한 애완 동물의 대규모 데이터베이스와 비교하여 환자의 내장에 있는 박테리아의 유형과 양이 건강한 개체의 데이터베이스와 얼마나 근접하게 일치하는지 확인합니다. 박테리아 불균형을 감지하고 누락된 주요 그룹을 식별하며 설사나 가려운 피부와 같은 문제가 되는 증상을 유발할 수 있는 해로운 박테리아를 표시할 수 있습니다.
							<img src="/assets/images/microbiome_img10.png" class="img10">
						</p>
						<p>
							<span>건강한 개체에서의 마이크로바이옴 참조 세트</span>
							애니바이옴헬스케어는 개와 고양이의 미생물군집 샘플 데이터베이스를 구축하고 있습니다. 지금까지 우리는 집에서 기르는 개와 고양이의 배설물 샘플을 지속적으로 수집하고 분석연구 중입니다. 그 중에서 건강한 애완 동물에 대한 기준을 충족하는 샘플 그룹을 모았습니다. 이러한 건강한 샘플을 연구함으로써 우리는 건강한 개와 고양이의 장내 마이크로바이옴에서 찾을 것으로 기대할 수 있는 특정 박테리아 분류군(그룹)의 데이터베이스를 구축하고 있습니다.
						</p>
					</div>
				</div>
			</div>
			<div class="process02 box_width section_padding">
				<div class="txt_half_box">
					<p class="left_tit" data-aos="fade-right">
						<span>2단계</span> 복원
					</p>
					<div class="right_group">
						<p>
							개와 고양이가 설사, 구토 또는 가려운 피부와 같은 증상을 겪고 있다면 장내 미생물의 불균형과 관련이 있을 수 있습니다. 반려동물의 장내 미생물 군집의 균형, 지원 및 강화를 위한 접근 방식에는 식단, 프리바이오틱스, 프로바이오틱스 및 분변 미생물 이식(FMT)이 포함됩니다. 환자의 장 건강 테스트 보고서는 누락된 주요 박테리아를 추가해야 하는지, 혼합물에서 유해한 박테리아(병원체)를 제거해야 하는지, 더 나은 비율을 달성하기 위해 기존 인구의 균형을 재조정해야 하는지 여부를 알려줍니다.
						</p>
						<p>
							<span>주요 마이크로바이옴 추가</span>
							소화 문제, 피부 문제 또는 기타 증상이 있는 많은 개와 고양이는 특정 중요한 장내 세균이 없거나 부족한 것으로 밝혀졌습니다. 이러한 경우, 우리는 누락된 박테리아를 마이크로바이옴에 추가하고 새로운 개체군이 성장하고 번성하도록 도와야 합니다. 프로바이오틱스 제품에는 유익한 미생물이 포함되어 있지만, 선도적인 프로바이오틱스조차도 불균형한 미생물 군집을 복원할 수 없습니다. 다행히 더 나은 옵션이 있습니다. 점점 더 많은 연구에서 분변이식이 장내 마이크로바이옴을 변경하여 여러 가지 위장 장애(및 기타 여러 상태)를 개선하는 데 도움이 될 수 있음을 발견했습니다.
						</p>
						<p>
							<span>분변 이식이란 정확히 무엇입니까?</span>
							분변 미생물 이식(FMT)이라고도 하는 분변 이식은 건강한 기증자의 대변을, 질병있는 환자(수용자)의 장으로 옮기는 과정입니다. 기증자의 대변에는 환자(수용자)의 장에 거주할 수 있는 건강한 박테리아 군집이 포함되어 있습니다. 예를 들어 인간 의학에서 FMT는 C. difficile (일명 C. diff ) 감염을 치료하는 데 사용됩니다.
애니바이옴헬스케어의 장회복 보조제(FMT)는 세심하게 선별된 기증자 동물에서 직접 채취한 건강한 개 또는 고양이에서의 특정 박테리아의 전체 커뮤니티를 제공합니다. 환자의 마이크로바이옴에 올바른 비율의 모든 올바른 미생물을 주입함으로써 당사의 보충제는 균형을 재정립하고 증상을 해결하는 데 도움이 될 수 있습니다.
							<img src="/assets/images/microbiome_img11.png" class="img11">
							마이크로바이옴 관련한 한 파일럿 연구에서는, 염증성 장 질환(IBD)이 있는 고양이 72마리와 개 40마리에게 25일 과정의 장 복원 보조제를 제공했습니다. 캡슐 과정을 마친 후 고양이의 83%와 개의 80%가 증상이 호전되었습니다. 식욕도 고양이의 1/4과 개의 절반에서 증가했습니다. 연구자들은 다양한 건강 문제에 대한 FMT의 치료적 이점에 대해 계속해서 배우고 있으며, 이 연구는 IBD와 같은 만성 질환이 있는 반려동물의 경우에도 FMT가 증상을 개선하고 삶의 질을 높일 수 있음을 보여주었습니다.
						</p>
					</div>
				</div>
			</div>
			<div class="process03 box_width section_padding">
				<div class="txt_half_box">
					<p class="left_tit" data-aos="fade-right">
						<span>3단계</span> 유지
					</p>
					<div class="right_group">
							<p>
								고양이 또는 강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
							</p>
							<p>
								<span>지속적인 장 지원</span>
								일부 반려동물, 특히 나이가 많은 반려동물과 만성 질환이 있는 반려동물은 미생물 균형을 유지하기 위해 매일 프리바이오틱스 또는 포스트바이오틱스를 보충해야 할 수 있습니다. 프리바이오틱스가 유익한 장내 박테리아의 먹이를 제공하는 반면, 포스트바이오틱스(이러한 박테리아의 대사 활동의 건강한 부산물)는 특히 염증을 줄이는 데 도움을 주어 장에 도움이 됩니다.
	우리는 특정 건강 문제로 인해 반려동물의 마이크로바이옴이 영구적으로 균형을 잃을 수 있음을 알고 있습니다. 예를 들어 많은 종류의 암은 장내 미생물 군집을 방해합니다. 유전적 요인도 장내 미생물 균형에 영향을 미칠 수 있습니다. 예를 들어 특정 질환자들은 미생물군집의 적절한 기능을 방해하는 유전적 소인을 가지고 있습니다. 그러한 경우, 장회복 보조제는 증상을 최소화하는 데 도움이 될 수 있으며 환자 치료의 지속적인 요소가 될 수 있습니다.
	애니바이옴헬스케어의 장회복 보조제 및 관련 제품들은 세심하게 선별된 기증자 동물에서 직접 채취한 건강한 개 또는 고양이에서의 특정 박테리아의 전체 커뮤니티를 제공합니다. 환자의 마이크로바이옴에 올바른 비율의 모든 올바른 미생물을 주입함으로써 당사의 보충제는 균형을 재정립하고 증상을 해결하는 데 도움이 될 수 있습니다.
							</p>
					</div>
				</div>
			</div>
			<div class="section_padding program_area">
				<div class="txt_half_box box_width">
					<p class="left_tit">전문진단 및 치료프로그램</p>
					<div class="right_group">
							<p>
								고양이 또는 강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
							</p>
					</div>
				</div>
				<div class="box_width program_step">
					<div class="tit"><span>환자의 위장관 및 피부 문제를 치료하기 위한<br class="pc_tab_none"> 간단한 3단계 시스템</span></div>
					<ul>
						<li data-aos="fade-up">
							<span>step 01</span>
							<div class="img" style="justify-content: center;"><img src="/assets/images/step1.png" style="width: auto;"></div>
							<p>애니바이옴헬스케어<br>마이크로바이옴 건강검사(분변, 구강)를<br>실시합니다.</p>
						</li>
						<li class="ico_next"><img src="/assets/images/ico_next_cyc_blue.svg"></li>
						<li data-aos="fade-up" data-aos-delay="100">
							<span>step 02</span>
							<div class="img"  style="justify-content: center;"><img src="/assets/images/step2.png" style="width: auto;"></div>
							<p>장내 미생물 건강 테스트 결과를 기다리는 동안<br>(일반적으로 15~30), 애니바이옴헬스케어 구호<br>제품으로 증상을 완화할 수 있습니다.</p>
						</li>
						<li class="ico_next"><img src="/assets/images/ico_next_cyc_blue.svg"></li>
						<li data-aos="fade-up" data-aos-delay="200">
							<span>step 03</span>
							<div class="img"  style="justify-content: center;"><img src="/assets/images/step3.png" style="width: auto;"></div>
							<p>환자의 장 & 구강 마이크로바이옴 건강 테스트<br>보고서 결과를 사용하여 반려동물을 위한 맞춤형<br>계획을 세웁니다.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="section_padding box_width">
				<p class="sc_tit">마이크로바이옴 연구협업</p>
				<ul class="member_card">
					<li>
						<img src="/assets/images/member_choseongbeom.png">
						<div class="info">
							<em>서울대학교 수의통합의학연구센터</em>
							<div class="name">
								<p>조성범 교수</p>
								<span>마이크로바이옴 및 장내 미생물 연구실</span>
							</div>
							<div class="list">
								<p>- 서울대학교 수의과대학 교수</p>
								<p>- 수의공중보건학(역학/식품위생)</p>
								<p>- 미국 미네소타대학 수의학박사</p>
								<p>- 전. 미국 USDA-ARS 연구원</p>
								<p>- 전. 미국 미시건주립대 식품안전독성센터 조교수</p>
								<p>- 서울대학교 수의통합의학 연구센터장</p>
								<p>- 국가 마우스표현형 분석사업단 겸임교수</p>
								<p>- 비교의학 질환 선도연구센터</p>
								<p>- 장내미생물학/마이크로바이옴 권위자</p>
							</div>
						</div>
					</li>
					<li>
						<img src="/assets/images/member_baekseungjun.png">
						<div class="info">
							<em>서울대학교 수의통합의학연구센터</em>
							<div class="name">
								<p>백승준 교수</p>
								<span>수의분자세포생물학 연구실</span>
							</div>
							<div class="list">
								<p>- 서울대학교 수의과대학 교수</p>
								<p>- 수의분자세포생물학</p>
								<p>- 미국 메릴랜드 주립대학 의과대학 유전학 박사</p>
								<p>- 전. 미국 NIH/NIEHS 연구원</p>
								<p>- 전. 미국 테네시주립대학 수의과대학 조교수/부교수</p>
								<p>- 서울대 수의통합의학 연구센터</p>
								<p>- 건강기능식품/영양제 작용기전 연구 분자세포생물학/유전학 권위자</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="box_width research_list_group">
				<p class="sc_tit">주요 연구분야<span>조성범 교수</span></p>
				<ul>
					<li data-aos="fade-up">
						<span>01</span>
						<p>Microbiome & Metagenomics: 대사/면역 질환과 관련된 장내 미생물; 숙주-미생물 상호작용; 무균 마우스 모델; 생물 정보학</p>
					</li>
					<li data-aos="fade-up">
						<span>02</span>
						<p>통합 및 비교 의학: 질병에 대한 유용한 프로바이오틱스 균주의 발견 및 치료 효과</p>
					</li>
					<li data-aos="fade-up">
						<span>03</span>
						<p>항균제 내성 및 독성 진화: 병원성 E. coli, Campylobacter, Salmonella</p>
					</li>
					<li data-aos="fade-up">
						<span>04</span>
						<p>분자진단 및 분자역학: 식인성 세균성 병원체</p>
					</li>
					<li data-aos="fade-up">
						<span>05</span>
						<p>역학: 인수공통전염병의 시공간 역학 및 위험인자 분석</p>
					</li>
				</ul>
			</div>
			<div class="section_padding box_width research_list_group">
				<p class="sc_tit">최근 주요 발표논문<span>조성범 교수</span></p>
				<ul class="dark_main">
					<li data-aos="fade-up">
						<span>01</span>
						<p>Song H, Yi S, Kim WH, Guk JH, Ha M, Kwak I, Han J, Yeon SC, Cho S. Environmental Perturbations during the Rehabilitation of Wild Migratory Birds Induce Gut Microbiome Alteration and Antibiotic Resistance Acquisition. Microbiol Spectr. 2022 Jun 22:e0116322.</p>
					</li>
					<li data-aos="fade-up">
						<span>02</span>
						<p>Woo J, Guk JH, Yi S, Lee J, Song H, Kim WH, Cho S. Effect of biofilm formation by antimicrobial-resistant gram-negative bacteria in cold storage on survival in dairy processing lines. Int J Food Microbiol. 2022 Nov 19;386:110019. doi: 10.1016/j.ijfoodmicro.2022.110019.</p>
					</li>
					<li data-aos="fade-up">
						<span>03</span>
						<p>Lee S, An JU, Woo J, Song H, Yi S, Kim WH, Lee JH, Ryu S, Cho S. Prevalence, Characteristics, and Clonal Distribution of Escherichia coli Carrying Mobilized Colistin Resistance Gene mcr-1.1 in Swine Farms and Their Differences According to Swine Production Stages. Front Microbiol. 2022 May 6;13:873856.</p>
					</li>
					<li data-aos="fade-up">
						<span>04</span>
						<p>Guk JH, Song H , Yi S, An JU, Lee S, Kim WH, Cho S. Hyper-aerotolerant Campylobacter coli from Swine may Pose a Potential Threat to Public Health based on its Quinolone Resistance, Virulence Potential, and Genetic Relatedness. Front Microbiol. 2021 Jul 16;12:703993</p>
					</li>
					<li data-aos="fade-up">
						<span>05</span>
						<p>Song H, Kim J, Guk JH, Kim WH, Nam H, Suh JG, Seong JK, Cho S. Metagenomic Analysis of the Gut Microbiota of Wild Mice, a Newly Identified Reservoir of Campylobacter. Front Cell Infect Microbiol. 2021 Feb 2;10:596149</p>
					</li>
					<li data-aos="fade-up">
						<span>06</span>
						<p>Kim WH, Bae SH, Cho S. Spatiotemporal Dynamics of Highly Pathogenic Avian Influenza Subtype H5N8 in Poultry Farms, South Korea. Viruses. 2021 Feb 10;13(2):274</p>
					</li>
					<li data-aos="fade-up">
						<span>07</span>
						<p>Kim J, Guk JH, Mun SH, An JU, Kim W, Lee S, Song H, Seong JK, Suh JG, Cho S. The Wild Mouse (Micromys minutus): Reservoir of a Novel Campylobacter jejuni Strain. Front Microbiol. 2020 Jan 14;10:306</p>
					</li>
					<li data-aos="fade-up">
						<span>08</span>
						<p>Kim J, Guk JH, Mun SH, An JU, Song H, Kim J, Ryu S, Jeon B, Cho S. Metagenomic analysis of isolation methods of a targeted microbe, Campylobacter jejuni, from chicken feces with high microbial contamination. Microbiome. 2019 Apr 25;7(1):67</p>
					</li>
					<li data-aos="fade-up">
						<span>09</span>
						<p>Kim J, Kim W, An JU, Suh JG, Seong JK, Jeon BY, Cho S. Complete Genome Sequencing and Comparative Genomic Analysis of Helicobacter Apodemus Isolated From the Wild Korean Striped Field Mouse (Apodemus agrarius) for Potential Pathogenicity. Front Pharmacol. 2018 Jul 31;9:838</p>
					</li>
				</ul>
			</div>
		</section>
		
	</div>
</div>
<!--E 마크업 끝-->