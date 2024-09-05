<?php
$_dep = array(5,4,6);
$_tit = array('커뮤니티','Q&A','여성');
include_once '../inc/pub_config.php';
include '../inc/common.php'; 
?>


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
                                        <div class="faq-box__question"><span>Q. 나이와 상관없이 여성이면 서비스를 다 받을 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                           <p>만 19세 이상의 성인 여성이면 금연 서비스가 가능합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 생리주기와 관련하여 언제 금연을 하면 좋나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>여성의 금연 시작일은 생리가 끝난 직후인 3~4일 이내에 하는 것이 좋습니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 흡연과 생리 전 증후군이 연관이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>흡연 여성이 생리 전 증후군을 더 많이 경험하며, 생리 전 증후군과 금단증상이 유사하여 금연이 더 어렵습니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 흡연하면 조기 폐경이 생기나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>흡연자가 비흡연자 보다 조기 폐경의 위험이 약 26% 높습니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 임산부 흡연이 태아에게 좋지 않나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>미숙아 및 저체중아 출생률을 증가시키며 유아 돌연사 증후군 발생 위험이 50% 증가합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 흡연이 산모에게 어떻게 안 좋나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>자궁외임신 노출의 위험이 4배 증가하며, 임신중독증 발생이 5배 증가합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 모유 수유 중 흡연을 하면 어떤가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>흡연은 모유 생성을 감소시키고, 아이에게 흡연 물질들이 전달될 위험이 증가합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 여성 흡연자에게 제공되는 기본 금연 물품은 무엇이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>니코틴 보조제(패치, 검, 사탕) 및 아로마파이프, 비빌캔디, 애니센스를 제공합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 여성이 금연 유지 시 제공되는 물품은 무엇인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>주 수별로 전동칫솔, 칫솔살균기, 배게형 안마기, 비타민c 영양제를 제공합니다. 상황에 따라 변경 가능합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 여성 흡연자의 금연성공 물품은 무엇인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>온누리 상품권 오만원을 제공합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            
                            <li id="mu2">
                                <ul>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 경구피임약을 복용 중이면 금연을 해야하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                           <p>35세 아상의 여성 흡연자일 경우 꼭 금연을 하셔야합니다.<br>
                                           식품의약안전처에서 35세 이상이며, 흡연자일 경우 사전피임제를 금지하고 있습니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 경구피임약 복용이 흡연과 연관이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>흡연 중인 여성이 경구피임약을 복용하면 뇌졸중의 위험이 5배 증가합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 여성 흡연자는 자궁경부암에 영향을 미치나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>여성 흡연자가 여성 비흡연자에 비하여 자궁경부암에 걸릴 위험이 1.5~2.3배 가량 높습니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 주위에서 흡연 사실을 모르는데 비밀 상담이 가능한가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>비밀 상담 가능합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 센터에 직접 찾아가서 상담을 받을 수 없은데 어떻게 하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>경남지역에 거주하는 여성이면, 직접 찾아가서 상담을 진행합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 여성 흡연자는 자궁경부암에 영향을 미치나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>여성 흡연자가 여성 비흡연자에 비하여 자궁경부암에 걸릴 위험이 1.5~2.3배 가량 높습니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 일정에 맞춰 상담이 힘든데 어떻게 하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>상담 일정을 조율해서 예약 상담이 가능합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 흡연이 아이들에게 어떤 영향을 미치나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>성장 및 학습능력을 저하시키며, 주의력결핍과잉행동장애(ADHD) 질환의 가능성이 증가합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 아이의 천식이 흡연과 연관이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>네. 여성의 흡연은 아이의 천식과 기타 호흡기 질환 발생 가능성을 증가시킵니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 임신 시 흡연을 하면 조산의 위험이 높다는데 사실인가요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>임신 시 흡연을 하면 조산의 위험뿐만 아니라 출산 관련 합병증 경험 가능성이 증가합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="faq-box__question"><span>Q. 모유 수유 중 흡연이 아이의 수면과 연관이 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>담배 내 니코틴이 아이에게 전달 될 위험이 증가하여, 아이의 수면 패턴이 변경됩니다.</p>
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
