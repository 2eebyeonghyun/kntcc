<?php
$_dep = array(5,4,3);
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
                                        <div class="faq-box__question"><span>Q. 경상국립대학교병원 입원 중에 금연 서비스를 받고 싶은데 어떻게 해야 하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>해당 병동 간호사에게 말씀하시면 금연 상담사가 병실로 찾아갑니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 입원 중 금연 상담을 재신청하려면 어떻게 해야 하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>첫 상담 시에 상담사의 연락처를 제공합니다.<br>
                                                    또는 해당 병동 간호사에게 요청하면 상담사가 병실로 재방문하여 상담을 할 수 있습니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 퇴원 후 상담사를 만나기 위해 병원에 가기가 쉽지 않습니다. 어떻게 해야하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>일부러 만나러 오실 필요는 없습니다.<br>외래 진료일에 맞춰 상담사와 만날 수 있고, 그 외에는 정기적으로 전화 상담을 할 수 있습니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 퇴원 후 금연과 관련해서 궁금증이 생기면 어디로 연락을 해야하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>퇴원 시 상담사의 연락처를 제공하기도 하고 인터넷 검색창에 ‘경남금연’으로 검색하면 경남금연지원센터가 안내됩니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 퇴원하면서 받은 보조제를 모두 사용했습니다. 또 받고 싶은데 어떻게 해야 하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>병원으로 오셔도 되고, 경남금연지원센터를 찾아가셔도 됩니다.<br>관내 지역이 아닌 경우, 가까운 보건소로 연계해 드리기도 합니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 경상국립대학교병원 외래 진료를 위해 방문했을 때 금연 상담을 받고 싶은데 어떻게 하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>원무과 직원이나 외래 직원에게 문의하면 금연 상담사에게 연결이 됩니다.<br>병원 곳곳에 리플릿이 비치되어 있으며 금연 상담사의 연락처도 안내되어 있습니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 집 가까운 곳에 보건소가 있어서 보건소와 병원 두 곳에서 이용 가능하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>보건소와 병원(지역센터) 둘 중 한 곳을 정해서 이용할 수 있습니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 집 근처의 보건소를 이용하고 싶어요
                                                어떻게 해야 하나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>가까운 보건소를 얘기해주시면 해당 보건소로 연락드리고 지속적인 서비스를 받으실 수 있도록 도와드립니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 경상국립대학교병원이 아닌 다른 병원에 입원 중, 금연 서비스를 받을 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    입원환자 대상 금연 서비스는 경상국립대학교병원에서만 이루어집니다.<br>경남금연지원센터를 이용하실 수 있습니다.
                                                </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 지난번 입원할 때 한 번 이용한 적이 있습니다. 또 이용할 수 있을까요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                    언제든 재등록하여 이용 가능합니다.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>




                            <li id="mu2">
                                <ul>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 지난번 이용할 때 보조제를 사용했는데 또 보조제를 사용할 수 있을까요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>1인당 제공할 수 있는 보조제 수량이 정해져 있습니다.<br>대상자에게 제공 가능한 수량이 남아있다면 사용할 수 있습니다. </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 서비스 이용에 금전적인 부분은 얼마나 드나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>해당 서비스는 무료로 제공해 드립니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 입원 중 보조제 약물도 처방이 되나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>패치,껌,사탕은 저희 센터에서 무료로 제공이 됩니다.<br>
그 외 약물을 이용하고 싶으면 해당 병동의 간호사에게 얘기하여 호흡기 내과를 통해 처방받을 수 있습니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 혼자서 여러 번 금연을 시도해 봤는데 너무 힘들었어요 다른 방법은 없을까요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>혼자서 금연을 하는 것이 어렵다면 금연 캠프를 이용할 수 있습니다.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 입원 중에도 금연 캠프를 이용할 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>퇴원 후 이용할 수 있습니다.<br>
입원환자 담당의 상담사에게 요청을 하면 금연 캠프에 연결해드릴 수 있습니다.</p>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 심근경색증 진단을 받고 금연을 해야 하는데 너무 힘들어서 많이 줄였습니다. 줄이는 것도 금연에 도움이 될까요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>담배를 줄이는 것은 효과가 없습니다.<br>
완전한 금연 만이 질병의 악화를 막아줍니다.<br>외래 진료 시 대기시간 동안 금연 상담을 받을 수 있으니 이용하시기 바랍니다.</p>


                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 심근경색증으로 약을 먹고 있는데 니코틴 보조제를 사용할 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>
                                                   약물 사용에 따라 달라지므로 주치의에게 확인 후 제공 가능합니다.
                                                </p>   

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 뇌경색으로 약을 먹고 있는데 니코틴 보조제를 사용할 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>약물 사용에 따라 달라지므로 주치의에게 확인 후 제공 가능합니다.</p>


                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 혈전으로 시술을 받고 금연을 하고자 하는데 니코틴 보조제를 사용할 수 있나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>약물 사용에 따라 달라지므로 주치의에게 확인 후 제공 가능합니다.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="faq-box__question"><span>Q. 금연 센터를 이용하고 실패를 했던 것들이 의료 기록에 남나요?</span></div>
                                        <div class="faq-box__answer">
                                            <div>
                                                <p>금연 상담은 의료 기록에 남지 않습니다.
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
