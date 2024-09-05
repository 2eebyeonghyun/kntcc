<?php
$_dep = array(5,4,8);
$_tit = array('커뮤니티','Q&A','위기청소년');
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
                                        <div class="faq-box__question"><span>Q. 찾아가는 금연서비스 위기청소년팀의 대상자 선정기준은 어떻게 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>[학교 밖 청소년 지원에 관한 법률] 제2조 또는<br>[청소년복지 지원법] 제2조 제4조에 따르는 만 9-24세 청소년 흡연자가 대상이 됩니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 위기청소년팀의 상담서비스는 어떻게 진행되나요?</span></div>
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
                                                <p>[055-761-2533] 등록 및 상담은 상담사와 통화 후 일정을 조율하여 진행됩니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 청소년 대상 금연교육도 실시하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>네, 실시하고 있으며 전화문의 부탁드립니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연을 위해 제공되는 물품이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    행동강화물품으로 비빌캔디, 에니센스, 유판씨 등이 제공됩니다.<br>※청소년은 니코틴 보조제가 제공되지 않습니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 6개월 금연성공품이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    문화상품권(1만원권*5)이 지급됩니다.
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
                                        <div class="faq-box__question"><span>Q. 청소년기에 담배를 피울 경우 폐나 흐흡기등 건강에 평생토록 더 안 좋은 영향을 미칠까요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    정신적이나 신체적으로 미성숙한 청소년기에 흡연을 시작하는 경우,<br>성인보다 담배에 있는 발암물질과 유해 성분에 취약하기 때문에 건강에 더욱 안 좋은 영향을 미칠 수 있습니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 담배를 피우면 스트레스가 풀리나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    장기적으로 볼 때 흡연은 스트레스 해소에 도움이 되지 않습니다.<br>담배를 피우면 순간적으로 마음이 편안해지고 집중력이나 학습속도가 증가하는 것처럼 느껴지지만,<br>혈중 니코틴 농도가 낮아지면 다시 불안한 마음이 생기고 담배 생각이 나서 집중을 못 하게 됩니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 전자담배는 덜 해로운 가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                   전자담배를 포함해 어떤 형태의 담배든지 건강에 해롭습니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>

                                </ul>


                            </li>
                            
                            
                            
                            
                            
                            <li id="mu2">
                                <ul>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 타지역 주민인데 경남에 있는 학교에 다니고 있어요. 금연 지원 서비스를 받을수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>주민등록상 지역주민이 아닌 경우에도 서비스를 제공받을수 있습니다</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연후 금단 증상은 언제까지 인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>금연 후 72시간 금단증상이 최고조 2주 정도 지나면 금단증상은 줄어들기 시작합니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 아이가 담배를 피우는걸 알게 되었어요. 어떻게 해야할까요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>무조건 혼내기 보다는 솔직한 대화를 주고 받을 수 있는 분위기를 만들어야 합니다.<br>체벌과 강압적인 방법은 아이가 반항 , 거짓말 , 숨기기 몰래하기 등 방법을 사용합니다</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 학교내에서 흡연해도 과태료를 내어야 하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>「국민건강증진법」 제9조에 의해 지정된 금연장소에서 흡연할 경우 : 10만원</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 청소년 흡연예방정책중 가장 효과적인 방법은 무엇인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                   담배값인상. 청소년들의 담배에 대한 접근성을 낮추기 위해 가장 효과적인 방법입니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 청소년에게 담배를 판매하게 되면 어떤 처벌을 받나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                  - 청소년에게는 담배를 판매 할수 없습니다. 이를 위반했을시 청소년 보호법 위반에 따른 형사처반과 행정처분
                                                </p>
                                                <p>- 편의점에서 청소년에게 술이나 담배를 판매한 경우 형사처분 (벌금)/ 2년 이하의 징역 또는 2천만원이하벌금</p>
                                                <p>- 편의점에서 청소년에게 술이나 담배를 판매한 경우 형사처분 (과장금)/ 위반횟수마다 담배판매자 100만원
담배사업법 위반에 따른 행정처분</p>
                                            <p>- 담배소매인 지정을 받는 편의점에서 청소년에게 담배를 판매한 경우: 1차 위반 시 영업정지 2개월/ 2차 위반 시 영업정지 3개월</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 청소년이 흡연으로 인해 암에 걸릴 확률은 얼마인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                   15세에 흡연을 시작한 경우가 25세에 흡연을 시작한 경우보다 60세에 이르러 폐암이 발병할 가능성이 3배 정도 높은 것으로 보고 되었습니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 청소년기 흡연은 키성장에 영향을 주나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                   성장중인 청소년기의 흡연은 성장과 발육에도 영향을 주어 흡연을 하는 학생이 흡연하지 않는 학생에 비해<br>키가 평균 2.54cm 작다는 보고도 있습니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 청소년기 흡연이 건강에 미치는 영향은 무엇인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>- 전두엽 발달에 악영향 , 충동조절 학습기능 등에 문제 발생
                                                </p>
<p>- 성인보다 니코틴 중독 위험이 더 크며 심리적 의존도가 높아져 금연이 더욱 어렵습니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 금연 실천 방법으로 도움되는 방법이 있을까요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>담배를 피우다가 그만두면 시간을 어떻게 보내야 하는지 모릅니다.<br>이때 새로운 생활습관을 만드는 것이 좋습니다.<br>운동하기, 가벼운 산책 등 나쁜 중독을 좋은 중독으로 바꾸는 것입니다.
                                                </p>

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
