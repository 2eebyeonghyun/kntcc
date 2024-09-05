<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>

    <div id="svis">
        <div class="inner">
            <h2>센터소개</h2>
            <ul class="snb">
                <li class=""><a href="<?=lbh?>/center/test_sub1.php">센터소개</a></li>
                <li class=""><a href="<?=lbh?>/center/sub2.php">조직도</a></li>
                <li class="active"><a href="<?=lbh?>/center/sub3.php">오시는 길</a></li>
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
                <span>오시는 길</span>
            </div>
        </div>
    </div>

    <div class="container" id="container">
        <div class="inner">
            <div class="page_title">
                <strong>오시는 길</strong>
                <p>Directions</p>
            </div>

            <div class="clearfix">
                <table class="loca-section loca-section6">
                    <thead>
                        <tr>
                            <th colspan="3">센터 주소</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4>위치</h4>
                                <p>경남 진주시 진주대로 816번길 20, 이상약국 2층</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="loca-section loca-section7">
                    <thead>
                        <tr>
                            <th colspan="3">센터 전화번호</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4>센터 번호</h4>
                                <p><a href="tel:055-759-9030">055)759-9030</a>(* 누르면 통화가 연결됩니다.)</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="loca-section loca-section8">
                    <thead>
                        <tr>
                            <th colspan="3">센터 팩스번호</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4>팩스 번호</h4>
                                <p>070)8994-9030</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="clearfix">
                <table class="loca-section loca-section9">
                    <thead>
                        <tr>
                            <th colspan="3">방문객 주차</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4>주차 위치</h4>
                                <p>경상국립대학교병원(주차권 지급)</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="osineungil" data-aos="fade-up" data-aos-duration="1000">
                <p class="it_">경남금연지원센터<br><strong><span style="color:#c75d6d;">오시는</span>&nbsp;길</strong></p>
                <div id="daumRoughmapContainer1641949816037" class="root_daum_roughmap root_daum_roughmap_landing osineungil_map"></div>

                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp": "1641949816037",
                        "key": "28rvw",
                        "mapWidth": "640",
                        "mapHeight": "360"
                    }).render();

                </script>
            </div>
        </div>
    </div>
    
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

</html>
