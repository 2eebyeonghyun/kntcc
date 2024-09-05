<?php
$_dep = array(5,4,4);
$_tit = array('커뮤니티','Q&A','입원환자');
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
                                        <div class="faq-box__question"><span>Q. 저소득층의 해당 기준은 어떻게 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                           <p>국민기초생활보장법에 따른 수급권자(교육,생계,의료,주거), 건강보험 종류가 의료급여(의료보호)인 자,<br>차상위계층(기준 중위소득 100의 50이하)에 해당되는 분입니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 저소득층인데 금연약 처방 받고 싶은데 어떻게 하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                            <p>저소득층에 해당될 시 금연약 처방 시 약제비, 진료비 모두 무료이며,<br>건강보험공단→금연치료 의료기관 찾기→금연약 처방 가능 의료기관→해당 지역 설정 및 검색하여 거주지 근처의 금연약 처방 의료기관 찾은 후,<br>기관 방문하여 의료인과 상담 후 약을 처방받아 드실수 있습니다.</p>

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
           
            
            
            
            
		//$("ul.tab_con > li:not("+$(".tab li a.selected").attr("href")+")").hide();  
		//$(".tab li a").click(function(){
            
			//$(".tab li a").removeClass("selected");
			//$(this).addClass("selected");                 
			//$(".tab_con > li").hide();
			//$($(this).attr("href")).fadeIn();     
            
            
            
            //return false;
            
            
            
		//});
            
            $(".top_scroll").click(function() { window.scrollTo(0, 300); return false; });            
            
            
            
            
	});
       
        
        
     
        
        
        
        
</script>


  <!--<ul class="tab">
                <li><a href="#mu1"  class="selected top_scroll">1</a></li>
                <li><a href="#mu2" class="top_scroll">2</a></li>
                <li><a href="#mu3" class="top_scroll">3</a></li>
                <li><a href="#mu4" class="top_scroll">4</a></li>
                <li><a href="#mu5" class="top_scroll">5</a></li>
            </ul>-->










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
