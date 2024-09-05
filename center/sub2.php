<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>

    <div id="svis">
        <div class="inner">
            <h2>센터소개</h2>
            <ul class="snb">
                <li class=""><a href="<?=lbh?>/center/test_sub1.php">센터소개</a></li>
                <li class="active"><a href="<?=lbh?>/center/sub2.php">조직도</a></li>
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
				<span>조직도</span>
            </div>
        </div>
    </div>

    <div class="container" id="container">
        <div class="inner">
            <div class="page_title">
                <strong>조직도</strong>
                <p>Organization</p>
            </div>

            <div class="org_text">
                <p class="it_">경남금연지원센터<br><strong><span style="color:#c75d6d;">조직도</span></strong></p>
            </div>
            
            <div class="clearfix">
                <table class="org-section org-section1">
                    <thead>
                        <tr>
                            <th colspan="3">센터장</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4>박기수</h4>
                                <p>경남금연지원센터장</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="org-section org-section2">
                    <thead>
                        <tr>
                            <th colspan="3">부센터장 &amp; 중간관리자</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4>하영미</h4>
                                <p>찾아가는 서비스 중간관리자</p>
                            </td>
                            <td>
                                <h4>장인석</h4>
                                <p>금연캠프 중간관리자</p>
                            </td>
                            <td>
                                <h4>김승진</h4>
                                <p>경남금연지원부센터장</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
<!--
                                <h4>홍길동</h4>
                                <p>운영위원회</p>
-->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="clearfix">
                <table class="org-section org-section3">
                    <thead>
                        <tr>
                            <th colspan="3">운영지원</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <table class="org-section org-section4">
                    <thead>
                        <tr>
                            <th colspan="3">금연캠프</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4>캠프 유형</h4>
                                <div class="org_lv">
                                    <p><a href="tel:055-759-9030">전문치료형 금연캠프</a></p>
                                    <p><a href="tel:010-6725-9030">입원환자</a></p>
                                </div>
                                <p style="color:#d91d4d; font-size:14px; margin-top:5px;">* 해당 서비스 클릭시 전화가 연결됩니다.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="org-section org-section5">
                    <thead>
                        <tr>
                            <th colspan="3">찾아가는 금연지원 서비스</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4>대상</h4>
                                <div class="org_lv">
                                    <p><a href="tel:055-762-2532">1. 여성</a></p>
                                    <p><a href="tel:055-762-2532">2. 장애인</a></p>
                                    <p><a href="tel:055-762-2532">3. 저소득층</a></p>
                                    <p><a href="tel:055-761-2533">4. 위기청소년</a></p>
                                    <p><a href="tel:055-762-2533">5. 중소규모 사업장</a></p>
                                    <p><a href="tel:055-762-2533">6. 지역자율</a></p>
                                </div>
                                <p style="color:#d91d4d; font-size:14px; margin-top:5px;">* 해당 서비스 클릭시 전화가 연결됩니다.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="web_organization">
                <img src="<?=lbh?>/img/center/org.png" alt="웹 조직도">
            </div>
        </div>
    </div>
    
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

</html>
