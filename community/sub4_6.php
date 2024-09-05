<?php
$_dep = array(5,4,7);
$_tit = array('커뮤니티','Q&A','중소규모');
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
                <p>Q&A</p>
            </div>

            <? include_once '../inc/snb_5_4.php'; ?>


            <section class="section-faq" style="height:auto !important;">
                <div class="mx-auto">


                    <div class="faq-box page_01">

                        <ul class="tab_con">
                            <li id="mu1">
                                <ul>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 찾아가는 금연서비스 중소규모팀의 대상자 선정기준은 어떻게 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>- 300인 미만의 중소규모사업장 근로자 중 흡연자를 대상으로 합니다. 사업장의 일용직, 파견직 등은 총 인원에서 제외 됩니다.</p>
                                                <p>- 근로자의 건강관리에 취약한 사업장 또는 지역별로 흡연율이 특히 높은 업종의 종사자들을 우선 선정합니다.<br>(예: 운수업, 택배업, 제조업, 유통업 등)</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 중소규모팀의 상담서비스는 어떻게 진행되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>서비스 등록후 결심일로부터 6개월간 9회이상의 상담 서비스가 제공됩니다.<br>상담은 대면상담, 전화상담, 내소상담, 화상상담 등으로 진행됩니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 등록 및 상담은 어떻게 시작하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>[055-762-2533] 등록 및 상담은 상담사와 통화 후 일정을 조율하여 진행됩니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연을 위해 제공되는 물품이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>행동강화물품으로 비빌캔디, 에니센스, 유판씨 등이 제공됩니다.<br>대상자의 흡연개비수, 흡연기간, 니코틴의존도, 보조제 금기증등을 고려하여 니코틴 보조제(패치, 껌, 사탕)도 제공됩니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 6개월 금연성공품이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    온누리 상품권(1만원권*5)이 지급됩니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연하고 있음을 어떻게 확인하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    니코틴 키트(타액 또는 소변)를 제공하여 검사 진행합니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연약물도 처방가능한가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    금연약물처방 가능한 병의원을 방문하여 처방 받을 수 있습니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 니코틴 보조제도 제공 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    반드시 현재 흡연자이여야 하며 금연상담을 통해 니코틴의존도, 흡연행태 등 흡연력 평가 후 제공됩니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 니코틴 보조제의 제공에 제한이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>- 대상자가 보건소 또는 병의원에서 금연치료약제를 처방 받는 경우 니코틴 보조제 처방에 제한이 있습니다.</p>
                                                <p>- 성인에 한하여 1인당 연간 12주분 이내, 1회당 최대 3주분 이내 제공 가능합니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 니코틴 보조제 부작용은 없나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>- 부작용이 발생할 수 있습니다.</p>
                                                <p>- 빈맥, 두근거림, 어지러움, 식은땀, 구역, 구토, 혈압변화, 호흡곤란 등 부작용 발생시 사용을 중지하고 상담사 및 의사와의 상담을 권고합니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </li>


                            <li id="mu2">
                                <ul>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 니코틴 보조제를 우편으로 받을 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>니코틴 보조제는 반드시 대면을 통해 제공되며 우편·택배 등 다른 방법으로 전달 불가능합니다.</p>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 니코틴 보조제의 제한대상이 따로 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>협심증, 부정맥, 최근 시작된 심근경색증, 최근 시작된 중풍, 장기적인 피부염, 니코틴 알레르기,<br>임신·수유 중인 여성, 18세 이하 청소년에게는 처방하지 않습니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연서비스 중단을 원할때 어떻게 해야 하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>- 6개월동안 금연유지시 서비스 종결이 됩니다.</p>
                                                <p>- 서비스를 받는 도중 금연에 실패하였거나, 스스로 참가 중단 및 거부의사를 밝히면 금연서비스 중단 할 수 있습니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 개인정보는 얼마동안 보관하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>서비스 참여 신청서 작성 후 3년간 보관하며 이후 적절한 절차에 의해 폐기됩니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연구역 내에서 전자담배를 이용하면 과태료가 부과되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                   전자담배는 담배사업법상 담배에 해당되어 금연구역에서 흡연 시 과태료가 부과됩니다.<br>그러나 의약품 및 의약외품으로 분류된 금연보조제의 경우 과태료가 부과되지 않습니다.<br>단속 과정에서 흡연자 항의가 발생할 경우, 흡연자는 우선 과태료 부과 절차를 따라야 하며 추후 이의제기 및 소명 가능합니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연구역 흡연자 과태료 감면제도는 무엇인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    금연구역 내 흡연자로 과태료부과 대상인 자가 금연교육 또는 금연지원서비스를 이수 할 경우 과태료가 감면됩니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                      <li>
                                        <div class="faq-box__question"><span>Q. 금연구역 흡연자 과태료 감면방법은 무엇인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    온라인금연교육센터 및 지방자치단체(보건소)에서 3시간 금연교육 이수시 과태료 50% 감경됩니다.<br>또 보건소 금연클리닉, 금연치료 건강보험 지원사업, 전문치료형 금연캠프, 금연전화상담을 통해 프로그램 이수시 과태료가 면제됩니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                      <li>
                                        <div class="faq-box__question"><span>Q. 금연구역 흡연자 과태료 감면잘차는 어떻게 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    교육 및 금연지원서비스 신청서를 적발 보건소에 제출 후 금연교육이수 또는 금연지원서비스에 참여합니다.<br>교육 또는 서비스 이수 후 과태료 감면신청서, 이수확인서를 적발 보건소에 제출하면 됩니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                      <li>
                                        <div class="faq-box__question"><span>Q. 금연서비스 신청시 따로 비용이 발생하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                   국고 보조금으로 운영되기에 비용은 발생하지 않습니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                      <li>
                                        <div class="faq-box__question"><span>Q. 금연을 위해 전자담배를 사용하는 것이 도움이 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>- 궐련형 전자담배의 니코틴 함유량은 일반담배와 유사하며 타르함량은 더 높게 검출 되었습니다.<br>또 벤조피렌, 벤젠 등 인체 발암물질이 포함된 것으로 확인되어<br>일반담배와 마찬가지로 각종 질병을 일으킬 수 있습니다.
                                                </p>
                                                <p>- 액상형 전자담배 또한 가열과 산화작용으로 인해 포름알데히드, 아세트알데히드 등 발암물질 및 주요 유해성분 함량이<br>각각 19배, 11배 증가되는 것으로 확인되었습니다.</p>
                                                <p>- 전자담배를 사용하던 흡연자들이 전자담배에 만족감을 느끼지 못하고 일반담배로 돌아가거나<br>병행하여 흡연하는 경우가 많습니다.</p>
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


    <ul class="tab">
        <li><a href="#mu1" class="selected top_scroll">1</a></li>
        <li><a href="#mu2" class="top_scroll">2</a></li>

    </ul>










    </div>
    <?php include '../inc/footer.php'; ?>
    </div>
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









</body>

</html>
