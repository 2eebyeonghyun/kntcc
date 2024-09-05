<?php
$_dep = array(5,4,5);
$_tit = array('커뮤니티','Q&A','장애인');
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
                                        <div class="faq-box__question"><span>Q. 장애인 대상자 선정기준은 무엇인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                           <p>「장애인복지법」 제3장 제32조에 따른 등록장애인 중 흡연자는 모두 가능하며,<br>장애를 가진 국가유공자, 상이군경 장애인 대상도 포함됩니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 장애유형은 어떻게 구분되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>장애는 크게 신체적장애, 정신적장애로 분류되고,<br>신체적장애는 외부 신체기능의 장애(지체장애, 뇌병변장애, 시각장애, 청각장애, 언어장애, 안면장애)와<br>내부기관의 장애(신장장애, 심장장애, 간장애, 호흡기장애, 장루,요루장애, 뇌전증장애)로 나뉩니다.<br>정신적장애는 발달장애, 정신장애로 분류됩니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 장애등급제는 어떻게 구분이 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>장애등급제는 폐지가 되어 기존 6등급에서 장애가 중한 장애인과 장애가 경한 장애인의 2분류로 나뉩니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 국내 등록 장애인은 몇 명 정도 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>2020년 말 기준 국내 등록장애인은 263만 3,000명으로 전체 인구대비 5.1%를 차지했습니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 장애인과 비장애인 흡연율은 차이가 나나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>2015년 연구결과 기준 비장애인 흡연율은 22.6%, 장애인 흡연율은 21.2%로<br>장애인 흡연율은 비장애인과 유사하거나 1%~2% 포인트 낮은 수준입니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 장애인에게 흡연은 어떤 점이 위험하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>장애인에게 흡연은 2차 장애(secondary conditions) 발생 위험 요인을 증가시킬 수 있고,<br>이는 1차 장애와 역으로 상호작용 할 수 있어 기존의 장애를 더욱 악화시킬 수 있다.<br>신체적 조건이 취약한 장애인의 경우 흡연, 음주, 비만, 스트레스 등의 위험요인이<br>비장애인에 비하여 장애인의 삶에 결정적인 영향을 미칠 수 있기 때문에 금연을 위한 보다 적극적인 중재가 필수적입니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 금연상담은 몇 개월 지속이 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>서비스 등록 후 결심일로부터 6개월 간 9회 이상 상담서비스를 제공합니다. </p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 금연성공 기준은 무엇인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>4주 금연성공은 금연시작 후 4주 경과 시까지 담배를 한 개비도 피우지 않은 경우이며,<br>6개월 금연성공은 금연시작 후 6개월 경과 시까지 담배를 3개비 이상 피우지 않은 경우입니다.<br>코티닌 측정을 통해 금연유지를 확인할 수 있습니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 니코틴보조제는 사용가능한가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>반드시 현재의 흡연자에 한하여 제공가능하며,<br>최초 등록시 하루 10개비 이상 흡연자 또는 니코틴의존도 검사 결과 4점 이상인 흡연자 중<br>사용을 원하는 흡연자에게 제공 가능합니다.<br>단, 니코틴의존도가 높더라도, 과거 병력이 있거나 금연보조제  부작용이 우려되는 경우<br>의사와의 상담을 거친 후 니코틴보조제를 제공합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 니코틴보조제를 우편이나 택배로 받을 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>아닙니다. 니코틴보조제는 반드시 직접 제공만 가능합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            
                            <li id="mu2">
                                <ul>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 보건소 금연클리닉 또는 지역금연지원센터에서 금연 6개월 성공을 하여 성공물품을 수령한 사람이 본 센터에서 다시 6개월 성공을 하게 되면 성공물품 다시 수령이 가능한가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                           <p>동일 대상자에게 기념품 반복 지급은 불가합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 경남금연지원센터에서 금연지원서비스 등록 후 금연유지 시, 제공받을 수 있는 것은 무엇인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>금연상담 등록 시, 보온보냉텀블러 제공하며, 금연 6개월 유지시,<br>주차별로 전동칫솔,송월타올,아로마핸드워시,아로마섬유향수,고려은단비타민C120정 제공가능하며,<br>6개월까지 금연성공시 문화상품권 5만원 또는 온누리상품권 5만원과 금연성공수료증 받을 수 있습니다.<br>매 회차별 무가당사탕, 녹여먹는 가그린, 비타민제 제공합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 금연상담 신청은 개별적인 신청이 가능한가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>기관이나 근로사업장에서 단체로 신청해도 되지만, 개별적으로 1인 신청도 가능합니다.<br>경남금연지원센터로 내소하거나, 대표번호로 전화주시면 찾아가는 금연지원서비스 상담 진행하겠습니다.</p>
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
