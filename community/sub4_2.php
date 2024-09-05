<?php
$_dep = array(5,4,2);
$_tit = array('커뮤니티','Q&A','금연캠프');
include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>


<body>
    <?php include '../inc/head.php'; ?>

    <div id="svis" style="background:url(../img/community/svis.png)no-repeat center/cover;">
        <div class="inner">
            <h2>커뮤니티</h2>
            <ul class="snb">
                <li class=""><a href="../community/sub1.php">공지사항</a></li>
                <li class=""><a href="../community/sub2.php">금연후기 게시판</a></li>
                <li class=""><a href="../community/sub3.php">센터 동영상</a></li>
                <li class="active"><a href="../community/sub4.php">Q&A</a></li>
            </ul>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="fas fa-angle-right"></i>
                </em>
                <span>커뮤니티</span>
                <em>
                    <i class="fas fa-angle-right"></i>
                </em>
                <span>Q&A</span>
            </div>
        </div>
    </div>
    <div class="container" id="container">
        <div class="inner" style="position:relative;">
            <div class="page_title">
                <strong>자주하는 질문</strong>
                <p>Q&amp;A</p>
            </div>
            
            <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/snb_5_4.php"; ?>

            <section class="section-faq" style="height:auto !important;">
                <div class="mx-auto">
                    <div class="faq-box page_01">
                        <ul class="tab_con tab_con_01">
                            <li id="mu1">
                                <ul>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 경남 외 다른 지역에 거주하는데 경남금연지원센터 금연캠프에 참여할 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>주민등록상 지역주민이 아니시더라도 접근성과 편의를 고려해 인근 금연지원센터 캠프 접수가 가능합니다.<br>금연캠프 일정에 따라 가능한 일정에 신청 접수해주시면 됩니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연캠프 신청 방법이 궁금합니다.</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>① 경남금연지원센터에 전화 또는 방문하여 신청<br>
                                                    문의 : 055-759-9030<br>
                                                    주소 : 경상남도 진주시 진주대로 816번길 20, 2층(주약동 이상약국 2층)<br><br>

                                                    ② 금연두드림을 통한 온라인 신청<br>
                                                    금연두드림-금연서비스-금연캠프-치료형 신청/예약하기<br>
                                                    사이트 주소 : nsk.khealth.or.kr</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 4박5일 전문치료형 금연캠프는 참가 비용이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>① 1인당 10만원(감면 대상은 2만원)</p>
                                                <p>② 입소 5일 전까지 본인 명의로 참가비 입금</p>
                                                <p>③ 감면 대상 : 만 65세 이상 노인, 장애인, 의료급여 수급권자, 차상위계층, 군의경 등 병역 의무자 등은 증빙자료 제출</p>
                                                <p>④ 수료 환급 : 정상 수료 후 2주 내 전액 계좌 환급</p>
                                                <p>⑤ 환급 불가한 경우 : 입소일 이후 참가 취소 시, 무단이탈 등 입소자의 귀책으로 중도 퇴소 시 등</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 4박5일 전문치료형 금연캠프 참가 대상은 누구인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>① 흡연 관련 질병력(악성 종양, 만성 폐질환, 심뇌혈관질환 등)이 있는 현재 흡연자</p>
                                                <p>② 20년 이상 담배를 피우고 2회 이상 금연실패 경험이 있는 흡연자</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 경남금연지원센터 금연캠프의 장점은 무엇인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>① 60% 이상의 금연 성공률!</p>
                                                <p>② 흡연 관련 건강검진 무료 제공</p>
                                                <p>③ 4박 5일간 숙식 제공</p>
                                                <p>④ 심리평가 서비스 제공</p>
                                                <p>⑤ 상담 서비스 제공</p>
                                                <p>⑥ 6개월간 집중관리</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 4박5일 전문치료형 금연캠프 서비스 내용은 무엇인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>4박 5일간 지역금연지원센터, 병원 등에서 의료인이 제공하는 전문 금연프로그램(금연교육, 폐CT 포함 건강검진, 개인/집단상담, 운동치료, 문화탐방, 건강검진 결과 상담 등) 및 6개월간 사후관리가 진행됩니다.</p>


                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 4박 5일 전문치료형 금연캠프에 등록했다가 실패했는데, 재등록이 가능한가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>금연캠프는 평생 총 3회까지 이용 가능합니다.<br>마지막 캠프 퇴소일로부터 12개월간 재등록이 불가하며 건강검진은 2년에 1번씩만 제공됩니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연캠프와 다른 금연지원서비스를 중복으로 받을 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>다른 국가 금연지원서비스를 이미 이용하고 있는 경우 중복 등록이 불가하여 기존 서비스 이용 종결 후 금연캠프 등록이 가능합니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연캠프는 언제 진행되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>월 1~2회 상시 운영됩니다. 자세한 일정 및 접수는 경남금연지원센터로 문의주세요.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연캠프 수료 후에는 어떤 사후관리가 이루어지나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>금연캠프 수료 후 6개월 간 전화 및 내소 상담,<br>4주/12주/24주 사후 모임이 진행되고 니코틴 보조제(니코틴패치, 니코틴껌, 니코틴사탕)도 제공됩니다.<br>6개월 성공 시 기념품을 증정합니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                </ul>


                            </li>
                            <li id="mu2">
                                <ul>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연캠프 이후 타 금연서비스 이용이 가능한가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>캠프 시작일 기준 총 6개월 간 금연지원서비스가 제공됩니다.<br>필요 시 캠프 서비스 종결 후 타 금연지원서비스 연계가 가능합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연치료제를 복용중인데 금연캠프 중 니코틴 보조제를 받을 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>보건소 또는 병의원에서 금연치료약제를 처방받은 경우, 니코틴 보조제 제공이 제한됩니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연캠프 금연 성공 평가 기준은 어떻게 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>[자가 보고]<br>
                                                    4주 금연 성공 : 금연 시작 후 4주 경과 시까지 담배를 한 개비도 피우지 않은 경우<br>
                                                    6개월 금연 성공 : 금연 시작 후 6개월 경과 시까지 담배를 3개비 이상 피우지 않은 경우<br><br>
                                                    [일산화탄소 측정]<br>
                                                    성인 : 10ppm 이하<br><br>
                                                    [코티닌 측정]<br>
                                                    코티닌 검출 음성(Negative) 판정</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연캠프 주의사항이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>캠프 기간 동안 외출, 외박, 음주, 흡연, 면회가 일절 금지됩니다. 이를 어길 시 강제 퇴소 조치되며 참가비 환급은 불가합니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연캠프 입소 시 준비물이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>- 마스크(Kf94)</p>
                                                <p>- 복용 중인 약</p>
                                                <p>- 면도기</p>
                                                <p>- 단추 및 지퍼 없는 면티(종합검진 시 착용)</p>
                                                <p>- 속옷</p>
                                                <p>- 편안한 일상복</p>
                                                <p>- 운동화</p>
                                                <p>- 슬리퍼</p>
                                                <p>- 귀마개(코골이 & 잠자리 예민하신 분)</p>
                                                <p>- 휴대폰 충전기</p>
                                                <p>- 돋보기(서류 작성 시 필요)</p>
                                                <p>- 기타(책, 노트북, 게임기 등)</p>
                                                <p>- 우천 시 사용할 휴대용 우산</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연캠프는 어디에서 진행되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>경상남도 내에서 진행되며 2022년 현재는 진주 관내 호텔에서 진행되고 있습니다.<br>캠프 장소 변경 시 사전 안내드립니다.</p>


                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연캠프 신청 시 어떤 서류가 필요한가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    <공통>
                                                       <br>
                                                        - 본인 명의 통장사본
                                                        </p>
                                                        <p>
                                                        <참가비 감면 대상>
                                                           <br>
                                                            - 만 65세 이상 : 신분증 사본
                                                            <br>
                                                            - 장애인, 차상위 계층, 기초생활수급자 : 증빙서류 제출
                                                </p>


                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 참가비는 왜 다른가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>만 65세 이상 노인, 기초생활수급자, 차상위계층, 장애인은 증빙서류 제출 시 참가비 80% 감면 혜택을 드립니다.</p>


                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 신용불량자도 참여 가능한가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>- 본인명의 통장을 사용할 수 있으면 참여 가능합니다. (가족 및 대리인 통장 사용 불가)</p>
                                                <p>- 본인 명의 통장이 없는 경우 신규 발급이 필요합니다.</p>


                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 부부가 함께 입소 가능한가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>함께 입소하여 참여 가능합니다.<br>
                                                   하지만 원만한 단체 활동 분위기 조성을 위하여 숙소는 동성 참여자끼리 배정합니다.
                                                   <br>
                                                   자세한 사항은 전화 문의바랍니다.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연캠프에 참여하고 금연에 성공한 사례가 많은가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>- 금연은 스스로 의지만으로는 성공하기 어렵지만, 올바른 정보제공, 금연상담, 금연 치료제 등을 병행하면 금연 성공률이 6배까지 증가합니다.</p>
                                                 <p style="margin-top:20px"> * 미국 임상 진료 지침 금연지원서비스 금연 성공 효과(2008년), 세계보건기구(WHO) 세계적 담배 유행 현황에 대한 보고(2019년) :<br> 스스로 의지만으로 금연 성공률(4%), 정보제공·상담·금연 치료제 병행 시 금연 성공률 최소 3.3배 ∼ 최대 6.3배 증가</p>
                                                    <p style="margin-top:20px">스스로 의지만으로 금연에 성공하기 어려운 중증·고도흡연자, 반복 재흡연자, 금연이 시급한 급·만성질환자 등을 대상으로 운영되는<br>집중 치료형 프로그램인 금연캠프의 4주 성공률*은 70~80%에 이름</p>
                                                   <p style="margin-top:20px"> * 금연캠프 참여자의 4주 금연 성공률 : ’17년 62.5% → ’19년 75.0% → ’21년 78.3%</p>
                                            </div>
                                        </div>
                                    </li>


                                </ul>


                            </li>

                        </ul>




                    </div>
                </div>
            </section>
        </div>
    </div>
    <ul class="tab">
        <li><a href="#mu1" class="selected top_scroll">1</a></li>
        <li><a href="#mu2" class="top_scroll">2</a></li>
    </ul>
    
	<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>
<script type="text/JavaScript">
	$(function(){
		$("ul.tab_con > li:not("+$(".tab li a.selected").attr("href")+")").hide();  
		$(".tab li a").click(function(){
			
			$(".tab li a").removeClass("selected");
			$(this).addClass("selected");                 
			$(".tab_con > li").hide();
			$($(this).attr("href")).fadeIn();
			
			return false;
		});
		$(".top_scroll").click(function() { window.scrollTo(0, 300); return false; });
	});
</script>
<script>
	$(".faq-box > ul > li >ul>li").click(function() {
		let $this = $(this);

		$this.siblings(".hover").find(" > .faq-box__answer").stop().slideUp(300);
		$this.siblings(".hover").removeClass("hover");

		if ($this.hasClass("hover")) {
			$this.find(" > .faq-box__answer").stop().slideUp(300);
			$this.removeClass("hover");
		} else {
			$this.find(" > .faq-box__answer").stop().slideDown(300);
			$this.addClass("hover");
		}
	});

	$(".faq-box__answer").click(function() {
		return false;
	});

</script>
</html>
