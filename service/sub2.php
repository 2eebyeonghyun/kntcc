<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>

    <div id="svis" style="background:url(../img/service/svis.png)no-repeat center/cover;">
        <div class="inner">
            <h2>금연지원서비스</h2>
            <ul class="snb">
                <li class=""><a href="../service/sub1.php">금연지원서비스</a></li>
                <li class="active"><a href="../service/sub2.php">찾아가는 금연지원서비스</a></li>
                <li class=""><a href="../service/sub3.php">전문치료형 금연캠프</a></li>
                <li class=""><a href="../service/sub4.php">입원환자</a></li>
            </ul>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="fas fa-angle-right"></i>
                </em>
                <span>금연지원서비스</span>
                <em>
                    <i class="fas fa-angle-right"></i>
                </em>
                <span>찾아가는 금연지원서비스</span>
            </div>
        </div>
    </div>

    <div class="container" id="container">
        <div class="inner">
            <div class="page_title">
                <strong>찾아가는 금연지원서비스</strong>
                <p>Visiting support service</p>
            </div>
            
            <div class="sub1">
                <p class="it_">경남금연지원센터<br><strong><span style="color:#c75d6d;">찾아가는 금연지원서비스 란?</span></strong></p>
                
                <div class="service_info">
                    <p>보건소 등 기존 서비스를 이용하기 어렵거나, 흡연율이 높고 금연하기 어려운 환경에 있는 흡연자가 있는 곳에 찾아가 금연상담(대면, 전화)등 6개월 간 금연프로그램을 제공합니다.</p>
                </div>
            </div>
            
            <div class="sub2 sv1_sub2" style="background:transparent;">
                <div class="inner">
                    <p class="it_" data-aos="fade-up" data-aos-duration="1000">찾아가는 금연지원서비스<br><strong data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"><span style="color:#c75d6d;">유형별 소개</span></strong></p>
                    <div class="detail_box2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="tabs" style="justify-content: space-around;">
                            <a href="#" class="active">위기청소년</a>
                            <a href="#" class="">여성</a>
                            <a href="#" class="">장애인</a>
                            <a href="#" class="">중소규모사업장 근로자</a>
                            <a href="#" class="">저소득층</a>
                            <a href="#" class="">지역자율</a>
                            <script>
                                $(document).ready(function(){
                                    $('a[href="#"]').click(function(ignore){
                                        ignore.preventDefault();
                                    })
                                })
                            </script>
                        </div>

                        <div class="info">
                            <div class="tab-cont">
                                <div class="cont" style="display: block;">
                                    <ul class="board_list">
                                        <li>
                                            <p>·  ｢학교 밖 청소년 지원에 관한 법률｣ 제2조 또는 ｢청소년복지 지원법｣ 제2조 제 4호에 따르는 만 9세 이상 24세 이하의 청소년 흡연자 ∙ 입학 후 3개월 이상 결석하거나 취학의무를 유예한 청소년 ∙ 재적･퇴학 처분을 받거나 자퇴한 청소년 ∙ 상급학교에 진학하지 아니한 청소년 ∙가정 문제가 있거나 학업 수행 또는 사회 적응에 어려움을 겪는 등조화롭고 건강한 성장과 생활에 필요한 여건을 갖추지 못한 청소년</p>
                                            <p style="color:red;">※ 학교장, 교사, 청소년유해환경감시단, 부모 등의 의뢰가 있는 경우 우선 선정</p>
                                        </li>
                                        <li>·  <span>대상</span> : 학교를 다니지 않는 청소년(만 9세 ~ 24세) 단체 및 시설(5인 이상)</li>
                                        <li>·  <span>이용기간</span> : 연중 계속</li>
                                        <li>·  <span>이용금액</span> : 무료</li>
                                        <li>·  <span>신청절차</span> : 온 · 오프라인(방문, 전화 등) 접속</li>
                                    </ul>
                                </div>

                                <div class="cont" style="display: none;">
                                    <ul class="board_list">
                                        <li>
                                            <p>·  만 19세 이상 여성 흡연자</p>
                                        </li>
                                        <li>·  <span>대상</span> : 흡연율이 높은 여성 사업장, 단체 등(5인 ~ 20인)</li>
                                        <li>·  <span>이용기간</span> : 연중 계속</li>
                                        <li>·  <span>이용금액</span> : 무료</li>
                                        <li>·  <span>신청절차</span> : 온 · 오프라인(방문, 전화 등) 접속</li>
                                    </ul>
                                </div>
                                
                                <div class="cont" style="display: none;">
                                    <ul class="board_list">
                                        <li>
                                            <p>·  「장애인복지법」 제3장 제32조에 따른 등록장애인 중 흡연자 ∙ 지역 내 장애인 대상 각종 서비스를 제공하는 기관, 단체 등의 사업과 연계 하여 금연을 포함한 기본적인 건강관리 서비스 지원 가능 ∙ 장애를 가진 국가유공자, 상이군경 장애인 대상으로 포함</p>
                                        </li>
                                        <li>·  <span>대상</span> : 장애인 단체, 기관 등(5인 ~ 20인)</li>
                                        <li>·  <span>이용기간</span> : 연중 계속</li>
                                        <li>·  <span>이용금액</span> : 무료</li>
                                        <li>·  <span>신청절차</span> : 온 · 오프라인(방문, 전화 등) 접속</li>
                                    </ul>
                                </div>
                                
                                <div class="cont" style="display: none;">
                                    <ul class="board_list">
                                        <li>
                                            <p>·  300인 미만 소규모사업장 근로자 중 흡연자</p>
                                            <p style="color:red;">※ 사업장 등록･신고 시 총 근로자 수 기준 300인 미만의 중소규모사업장(일용직, 파견직 등 은 총 인원에서 제외됨)</p>
                                            <p style="color:red;">※ 단, 근로자 건강관리에 취약한 사업장 또는 지역별로 흡연율이 특히 높은 업종(예: 운수업, 제조업, 유통업 등) 종사자들을 우선 발굴</p>
                                        </li>
                                        <li>·  <span>대상</span> : 300인 미만 중소사업장(5인 ~ 20인)</li>
                                        <li>·  <span>이용기간</span> : 연중 계속</li>
                                        <li>·  <span>이용금액</span> : 무료</li>
                                        <li>·  <span>신청절차</span> : 온 · 오프라인(방문, 전화 등) 접속</li>
                                    </ul>
                                </div>
                                
                                <div class="cont" style="display: none;">
                                    <ul class="board_list">
                                        <li>
                                            <p>·  저소득층 관련 법적 기준 적용, 국민기초생활보장법에 따른 수급권자(교 육, 생계, 의료, 주거), 차상위계층(기준 중위소득 100의50이하)</p>
                                        </li>
                                        <li>·  <span>대상</span> : 국민기초생활보장법에 따른 수급권자, 차상위 계층 등</li>
                                        <li>·  <span>이용기간</span> : 연중 계속</li>
                                        <li>·  <span>이용금액</span> : 무료</li>
                                        <li>·  <span>신청절차</span> : 온 · 오프라인(방문, 전화 등) 접속</li>
                                    </ul>
                                </div>
                                
                                <div class="cont" style="display: none;">
                                    <ul class="board_list">
                                        <li>
                                            <p>·  금연지원서비스 사각지대에 놓은 대상자 우선 발굴</p>
                                        </li>
                                        <li>·  <span>대상</span> : </li>
                                        <li>·  <span>이용기간</span> : 연중 계속</li>
                                        <li>·  <span>이용금액</span> : 무료</li>
                                        <li>·  <span>신청절차</span> : 온 · 오프라인(방문, 전화 등) 접속</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sub3">
                <div class="inner">
                    <p class="it_" data-aos="fade-up" data-aos-duration="1000">찾아가는 금연지원서비스<br><strong><span style="color:#c75d6d;">진행절차</span></strong></p>
                    
                    <!--<ul class="step">
                        <li class="step-head"><p>흡연자 방문</p></li>
                        <li class="down"><i class="fas fa-caret-down"></i></li>
                        <li><p>금연 동기부여 교육</p></li>
                        <li class="down"><i class="fas fa-caret-down"></i></li>
                        <li><p>건강상태평가(문진, 흡연력, CO측정, 니코틴 의존도 등)</p></li>
                        <li class="down"><i class="fas fa-caret-down"></i></li>
                        <li><p>금연프로그램 등록 및 목표설정</p></li>
                        <li class="down"><i class="fas fa-caret-down"></i></li>
                        <li><p>금연유지 계획 설정</p></li>
                        <li class="down"><i class="fas fa-caret-down"></i></li>
                        <li><p>다음 상담 예약</p></li>
                        <li class="down"><i class="fas fa-caret-down"></i></li>
                        <li class="step-head"><p>이후 6개월 간 지속 상담</p></li>
                    </ul>-->
                    <div class="step" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <img src="../img/service/step.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

</html>
