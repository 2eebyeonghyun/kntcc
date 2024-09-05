<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>

    <div id="svis">
        <div class="inner">
            <h2>센터소개</h2>
            <ul class="snb">
                <li class="active"><a href="<?=lbh?>/center/sub1.php">센터소개</a></li>
                <li class=""><a href="<?=lbh?>/center/sub2.php">조직도</a></li>
                <li class=""><a href="<?=lbh?>/center/sub3.php">오시는 길</a></li>
            </ul>
            <div class="navi">
                <span>Home</span>
                <em>
					<i class="fas fa-angle-right"></i>
				</em>
				<span>센터소개</span>
				<em>
					<i class="fas fa-angle-right"></i>
				</em>
				<span>센터소개</span>
            </div>
        </div>
    </div>

    <div class="container" id="container">
        <div class="inner">
            <div class="page_title">
                <strong>센터소개</strong>
                <p>Introduce center</p>
            </div>
            
            <div class="sub1">
                <div class="left_box">
                    <h2>안녕하세요.<br class="ce_br_"><span style="color:#c75d6d;">경남금연지원센터</span>에<br class="ce_br_">방문하신 것을 환영합니다!</h2>
                </div>
                <div class="right_box">
                    <img src="<?=lbh?>/img/center/sub1.jfif" alt="">
                </div>
            </div>
            
            <div class="sub2">
                <p class="it_">보건복지부 지정<br><strong>경남금연지원센터 금연지원서비스 <span style="color:#c75d6d;">비전과 목표</span></strong></p>
                
                <ul class="sub2table_">
                    <li data-aos="fade-up" data-aos-duration="1000">
                        <h3>비전</h3>
                        <p>국민건강증진 및<br> 건강형평성 제고</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="300">
                        <h3>목표</h3>
                        <p>경남도민의 흡연율 감소 및<br> 인구집단 간 흡연율 격차 해소</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="600">
                        <h3>추진 과제</h3>
                        <p>대상자별 맞춤형 금연지원서비스 제공<span>· 중증·고도흡연자대상 금연캠프: 전문치료형 금연캠프, 입원환자<br>· 금연사각지대 대상을 찾아가는 금연지원서비스: 위기청소년, 여성, 장애인, 중소규모사업장 근로자, 저소득층, 지역 내 금연 취약 계층 대상자</span></p>
                        <p>지역사회 금연사원 지원 · 관리<span>· 지역별 주요 건강문제 및 주민 특성을 반영한 금연지원프로그램 개발<br>· 지역별 금연사업 소통·협력체계 마련(유관기관, 단체, 전문가, 시민단체 등)<br>· 지역사회 금연사업 담당인력 역량강화, 사업수행 지원(홍보, 교육 등)</span></p>
                    </li>
                </ul>
            </div>
            
            <div class="sub3">
                <p class="it_">경남금연지원센터<br><strong>사업추진 <span style="color:#5dc783;">체계도</span></strong></p>
                
                <img class="businimg_" src="<?=lbh?>/img/center/busin.png" alt="사업추진 체계도">
            </div>
        </div>
    </div>
    
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

</html>
