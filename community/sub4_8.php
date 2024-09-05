<?php
$_dep = array(5,4,9);
$_tit = array('커뮤니티','Q&A','지역자율');
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
                                        <div class="faq-box__question"><span>Q. 찾아가는 금연서비스 지역자율팀의 대상자 선정기준은 어떻게 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                           <p>영세사업자 및 종사자(일용직, 특수형태근로종사자, 프리랜서), 병원의료종사자가 대상이 됩니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 서비스를 이용하는데 비용이 드나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>전액 국비이기때문에 무료로 진행됩니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 보건소와 동시에 이용이 가능한가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>보건소 금연서비스와 중복이용은 불가하며 자신에게 맞는 금연서비스를 이용하시면 됩니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연캠프와 동시에 이용이 가능한가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>찾아가는 금연서비스 등록을 종결한 이후 이용하실 수 있습니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 찾아가는 금연서비스와 동시에 이용할 수 있는 다른 금연서비스가 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>
                                                1544-9030 금연상담전화을 통해 맞춤형 금연상담을 제공받을 수 있습니다.
                                            </p>

                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 지역자율팀의 상담서비스은 어떻게 진행되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>- 서비스 등록후 결심일로부터 6개월간 9회이상의 상담 서비스가 제공됩니다.
                                            </p>
                                            <p>- 상담은 대면상담, 전화상담, 내소상담, 화상상담 등으로 진행됩니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 상담이 가능한 시간대는 언제인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>평일 9시부터 6시까지 가능합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 6개월 이후에는 어떻게 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>금연서비스가 종결됩니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 당해년도에 다시 등록하여 금연서비스를 이용할 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>네. 금연의지만 있으시면 재등록하여 금연서비스를 받을실 수 있습니다.</p>
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
                                   
                                </ul>


                            </li>
                            
                            
                            
                             <li id="mu2">
                                <ul>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 주거지역과 관계없이 이용이 가능한가요? (제가 찾아가야 하나요?/근무특성상 돌아다니는 직업인데도 서비스 이용이 가능할까요?)</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                           <p>찾아가는 금연서비스로 경남지역 내에는 방문서비스가 가능합니다.<br>문의는 금연센터로 전화해주세요.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연을 위해 제공되는 물품이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>행동강화물품으로 비빌캔디, 에니센스, 유판씨 등이 제공됩니다.<br>대상자의 흡연 개비 수, 흡연 기간, 니코틴의존도, 보조제 금기증 등을 고려하여<br>니코틴 보조제  (패치, 껌, 사탕)도 제공됩니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 행동강화물품은 무엇을 말하는건가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>금단증상이나 흡연갈망이 발생하는 경우, 행동상의 대체물로서 흡연욕구를 조절하는데 도움이 되는 물품을 말합니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 보조제를 따로 구매할 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>금연보조제인 패치, 껌, 사탕은 약국에서도 구매가 가능합니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 니코틴 보조제는 계속 지급이 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>
                                               금연상담을 통해 니코틴의존도, 흡연행태 등 흡연력 평가 후 제공되며 금연시작 기준 3개월동안 제공됩니다.
                                            </p>

                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 니코틴 보조제 부작용은 없나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>부작용이 발생할 수 있으며 빈맥, 두근거림, 어지러움, 식은땀, 구역, 구토, 혈압변화, 호흡곤란 등<br>부작용 발생시 사용을 중지하고 상담사 및 의사와의 상담을 권고합니다.
                                            </p>
                                          

                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 6개월 금연성공품이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>온누리 상품권(1만원권*5)이 지급됩니다.<br>단, 금연 6개월 수료 경험이 있을 경우 성공품은 제공되지 않으며 3회이상 대면상담을 받고,<br>co2 또는 니코틴 측정 결과 금연성공을 확인한 후에 제공이 됩니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 성공품을 받지 못하는 상황에는 어떻게 하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>비대면(택배, 드라이브 스루 등)으로 전달 가능합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 금연하고 있음을 어떻게 확인하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>니코틴 키트(타액 또는 소변)를 제공하여 검사 진행합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연 약물을 처방받으면서 금연서비스를 이용할 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>네. 가능합니다. 하지만 니코틴 보조제는 제공되지 않습니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 금연약물을 복용하면 성공할 확률이 높아질까요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>훨씬 높아집니다.<br>금연상담과 더불어 약물치료를 병행하게 될 시에는 4배 이상에 높은 성공률을 보이고 있습니다.</p>
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
                <li><a href="#mu1"  class="selected top_scroll">1</a></li>
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
