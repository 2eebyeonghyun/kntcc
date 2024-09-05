<?php 
include_once '../inc/pub_config.php';
include '../inc/common.php'; 

unset($db);
$db = new MySQL;
?>

<body>
    <?php include '../inc/head.php'; ?>

    <div class="main_visual">
        <img class="" src="<?=lbh?>/img/main/main_txt.png" alt="">
    </div>

    <div class="fixed-bg"></div>
    <div class="container" id="container">
        <div class="cont1">
            <div class="inner">
                <div class="topicon_">
                    <div class="location_">
                        <strong>경남<span>금연지원센터</span><br class="mainbr_">오시는 길</strong>
                        <p>경남 진주시 진주대로 816번길20,<br class="mainbr_">이상약국 2층</p>
                        <a href="<?=lbh?>/center/sub3.php" class="main_btn">
                            <img src="<?=lbh?>/img/main/click_btn.png" alt="메인 버튼">
                        </a>
                    </div>
                    <div class="iconbox_">
                        <h1 class="m_tit"><span>경남</span>금연지원센터 서비스</h1>
                        <ul class="icon_">
                            <li>
                                <a href="<?=lbh?>/center/test_sub1.php">
                                    <span class="iconimg_"></span>
                                    센터소개
                                </a>
                            </li>
                            <li>
                                <a href="<?=lbh?>/service/sub2.php">
                                    <span class="iconimg_"></span>
                                    찾아가는<br>금연서비스
                                </a>
                            </li>
                            <li>
                                <a href="<?=lbh?>/request/sub1.php">
                                    <span class="iconimg_"></span>
                                    자가진단
                                </a>
                            </li>
                            <li>
                                <a href="<?=lbh?>/newsroom/sub1.php">
                                    <span class="iconimg_"></span>
                                    금연준비하기
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont2">
            <div class="inner">
                <div class="noticebox_">
                    <div class="main_box">
                        <div class="tit">
                            <h3>공지사항</h3>
                            <a href="<?=lbh?>/community/sub1.php" class="btn">
                                <img src="<?=lbh?>/img/main/click_btn_w.png" alt="클릭버튼">
                            </a>
                        </div>
                        <?php
                        $Board['board_id'] = "notice";
                        $Board['table_board'] = "G_Notice";
                        $Where = null;
                        $WHERE[] = " Status = 'Y' ";
                        $WHERE[] = " BoardID = '".$Board['board_id']."' ";
                        $WhereQuery   = (is_array($WHERE))? " and (".implode(" and ", $WHERE).")" : "";
                        $OrderbyQuery = " Order by idx desc ";
                        $LimitQuery   = " Limit 1";
                        // $SelectField = "idx, Subject, Content, cast(RegDate as date) as RegDate, Hit, BoardID, UserName, Category ";
                        $SelectField = " * ";
                        // $Notice   = $db -> SelectList("Select ".$SelectField." From ".$Board['table_board']." Where Notice = 'Y' ".$WhereQuery.$OrderbyQuery." Limit 1");
                        $List   = $db -> SelectList("Select ".$SelectField." From ".$Board['table_board']." Where Notice = 'N' ".$WhereQuery.$OrderbyQuery.$LimitQuery);

                        if($List){
                            foreach($List as $key => $Value){
                        ?>
                        <div class="txt">
                            <a href="/community/sub1.php?at=view&idx=<?=$Value['idx']?>">
                                <h3 class="head"><?=highlight($req['st'],strCut($Value['Subject'],70,"..."))?></h3>
                                <p class="sub"><?=strCut(strip_tags($Value['Content']),140,"...")?></p>
                                <p class="date"><?=str_replace("-",".",substr($Value['RegDate'],0,10))?></p>
                            </a>
                        </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="reviewbox_">
                    <div class="main_box">
                        <div class="tit">
                            <h3>금연캠프 후기</h3>
                            <a href="<?=lbh?>/community/sub2.php" class="btn">
                                <img src="<?=lbh?>/img/main/click_btn_w.png" alt="클릭버튼">
                            </a>
                        </div>
                        <?php
                        $Board['board_id'] = "review";
                        $Board['table_board'] = "G_Notice";
                        $Where = null;
                        $WHERE[] = " Status = 'Y' ";
                        $WHERE[] = " BoardID = '".$Board['board_id']."' ";
                        $WhereQuery   = (is_array($WHERE))? " and (".implode(" and ", $WHERE).")" : "";
                        $OrderbyQuery = " Order by idx desc ";
                        $LimitQuery   = " Limit 1";
                        // $SelectField = "idx, Subject, Content, cast(RegDate as date) as RegDate, Hit, BoardID, UserName, Category ";
                        $SelectField = " * ";
                        // $Notice   = $db -> SelectList("Select ".$SelectField." From ".$Board['table_board']." Where Notice = 'Y' ".$WhereQuery.$OrderbyQuery." Limit 1");
                        $List   = $db -> SelectList("Select ".$SelectField." From ".$Board['table_board']." Where Notice = 'N' ".$WhereQuery.$OrderbyQuery.$LimitQuery);

                        if($List){
                            foreach($List as $key => $Value){
                        ?>
                        <div class="txt">
                            <a href="/community/sub2.php?at=view&idx=<?=$Value['idx']?>">
                                <h3 class="head"><?=highlight($req['st'],strCut($Value['Subject'],70,"..."))?></h3>
                                <p class="sub"><?=strCut(strip_tags($Value['Content']),140,"...")?></p>
                                <p class="date"><?=str_replace("-",".",substr($Value['RegDate'],0,10))?></p>
                            </a>
                        </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="formbox_">
                    <h1 class="m_tit"><span>금연</span>캠프 서비스신청</h1>
                    <!--<ul class="formlist_">
                        <li class="card camp1">
                            <a href="<?=lbh?>/request/sub3.php" class="imgDiv">
                                <img src="<?=lbh?>/img/main/main_camp1.png" alt="금연캠프 신청">
                            </a>
                            
                            <div class="m_information">
                                <h3>4박 5일 금연캠프 신청</h3>
                                <p>혼자서 금연이 힘드신 분에게 전문적인 금연 프로그램을 제공합니다.</p>
                            </div>
                        </li>
                        <li class="card camp2">
                            <a href="<?=lbh?>/request/sub2.php" class="imgDiv">
                                <img src="<?=lbh?>/img/main/main_camp2.png" alt="찾아가는 금연지원서비스 신청">
                            </a>
                            
                            <div class="m_information">
                                <h3>찾아가는 금연지원서비스 신청</h3>
                                <p>금연프로그램을 찾아오기 힘드신 분에게 직접 찾아갑니다.</p>
                            </div>
                        </li>
                    </ul>-->
                    
                    <ul class="formlist_">
                        <li class="card camp1">
                            <div class="item">
                                <a class="all_img" href="<?=lbh?>/request/sub3.php">
                                    <img src="<?=lbh?>/img/main/main_camp1.png" alt="4박 5일 금연캠프 신청">
                                </a>

                                <a class="all_img_h" href="<?=lbh?>/request/sub3.php">
                                    <img src="<?=lbh?>/img/main/main_camp1_hover.png" alt="4박 5일 금연캠프 신청 호버">
                                </a>
                            
                                <div class="m_information">
                                    <h3>4박 5일 금연캠프 신청</h3>
                                    <p>혼자서 금연이 힘드신 분에게 전문적인 금연 프로그램을 제공합니다.</p>
                                </div>
                            </div>
                        </li>
                        <li class="card camp2">
                            <div class="item">
                                <a class="all_img" href="<?=lbh?>/request/sub2.php">
                                    <img src="<?=lbh?>/img/main/main_camp2.png" alt="찾아가는 금연지원서비스 신청">
                                </a>

                                <a class="all_img_h" href="<?=lbh?>/request/sub2.php">
                                    <img src="<?=lbh?>/img/main/main_camp2_hover.png" alt="찾아가는 금연지원서비스 신청 호버">
                                </a>
                            
                                <div class="m_information">
                                    <h3>찾아가는 금연지원서비스 신청</h3>
                                    <p>금연프로그램을 찾아오기 힘드신 분에게 직접 찾아갑니다.</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <ul class="m_formlist_">
                        <li class="card camp1">
                            <a href="<?=lbh?>/request/sub3.php" style="background-image: url(../img/main/m_camp1.png)">
                                <div class="content">
                                    <h1>4박 5일 금연캠프 신청하기</h1>
                                    <p>혼자서 금연이 힘든 분에게 전문적인 금연 프로그램을 제공합니다.</p>
                                </div>
                            </a>
                        </li>
                        <li class="card camp2" style="background-image: url(../img/main/m_camp2.png)">
                            <a href="<?=lbh?>/request/sub2.php">
                                <div class="content">
                                    <h1>찾아가는 금연지원서비스 신청하기</h1>
                                    <p>금연프로그램에 찾아오기 힘드신분에게 직접 찾아갑니다.</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="campaignbox_">
                    <h1 class="m_tit"><span>경남</span>금연지원센터 캠페인</h1>
                    <div class="video-container">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/uTD9qCSGFwE?&mute=1&loop=1&playlist=uTD9qCSGFwE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="m_btnBox">
                        <a href="#none" class="m_btn">자세히보기</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont3">
            <div class="main_inner">
               <div class="middlebanner_">
                   <dl>
                       <dt>
                           <i data-aos="fade-up" data-aos-duration="1500"><em>경남</em></i>
                           <i data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><em>금연지원센터</em></i>
                           <!--<i><em>System</em></i>-->
                       </dt>
                       <dd>
                           <p>
                               <i>나에게 필요한 금연정보 알아보기</i>
                           </p>
                           <a href="<?=lbh?>/newsroom/sub1.php" class="go-link">금연준비 바로보기</a>
                           <p class="line"></p>
                       </dd>
                   </dl>
               </div>
            </div>
        </div>
        <div class="cont4">
            <div class="inner">
                <div class="newsroom_">
                    <div class="txtBox_">
                        <h3 class="newsTxt">뉴스룸</h3>
                        <a href="<?=lbh?>/newsroom/sub4.php" class="btn">
                            <img src="<?=lbh?>/img/main/click_btn.png" alt="클릭버튼">
                        </a>
                    </div>

                    <div class="swiper newsroomSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="<?=lbh?>/newsroom/newsroom_view.php">
                                    <div class="img">
                                        <img src="<?=lbh?>/img/main/test.png" alt="테스트 사진">
                                    </div>
                                    <div class="txt">
                                        <h3 class="head">새해에 반드시 '금연'해야하는 또 하나의 이유</h3>
                                        <p class="body">새해에는 금연을 결심하는 사람들이 많다.<br>금연은 자신은 물론 주변 사람의 건강을 위해서 필수이다. 금연은 자신은 물론 주변 사람의 건강을</p>
                                        <p class="date">2022.01.10</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?=lbh?>/newsroom/newsroom_view.php">
                                    <div class="img">
                                        <img src="<?=lbh?>/img/main/test.png" alt="테스트 사진">
                                    </div>
                                    <div class="txt">
                                        <h3 class="head">새해에 반드시 '금연'해야하는 또 하나의 이유</h3>
                                        <p class="body">새해에는 금연을 결심하는 사람들이 많다.<br>금연은 자신은 물론 주변 사람의 건강을 위해서 필수이다. 금연은 자신은 물론 주변 사람의 건강을</p>
                                        <p class="date">2022.01.10</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?=lbh?>/newsroom/newsroom_view.php">
                                    <div class="img">
                                        <img src="<?=lbh?>/img/main/test.png" alt="테스트 사진">
                                    </div>
                                    <div class="txt">
                                        <h3 class="head">새해에 반드시 '금연'해야하는 또 하나의 이유</h3>
                                        <p class="body">새해에는 금연을 결심하는 사람들이 많다.<br>금연은 자신은 물론 주변 사람의 건강을 위해서 필수이다. 금연은 자신은 물론 주변 사람의 건강을</p>
                                        <p class="date">2022.01.10</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?=lbh?>/newsroom/newsroom_view.php">
                                    <div class="img">
                                        <img src="<?=lbh?>/img/main/test.png" alt="테스트 사진">
                                    </div>
                                    <div class="txt">
                                        <h3 class="head">새해에 반드시 '금연'해야하는 또 하나의 이유</h3>
                                        <p class="body">새해에는 금연을 결심하는 사람들이 많다.<br>금연은 자신은 물론 주변 사람의 건강을 위해서 필수이다. 금연은 자신은 물론 주변 사람의 건강을</p>
                                        <p class="date">2022.01.10</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="m_btnBox">
                        <a href="#none" class="m_btn">자세히보기</a>
                    </div>

                    <script>
                        var swiper = new Swiper(".newsroomSwiper", {
                            slidesPerView: 2,
                            spaceBetween: 25,
                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: false,
                            },
                            pagination: {
                                el: ".swiper-pagination",
                                clickable: true,
                            },
                            breakpointsInverse: true,
                            breakpoints: {
                                320: {
                                    slidesPerView: 2,
                                    spaceBetween: 15
                                },
                                520: {
                                    slidesPerView: 2,
                                    spaceBetween: 15
                                },
                                768: {
                                    slidesPerView: 2,
                                    spaceBetween: 15
                                },
                                1080: {
                                    slidesPerView: 2,
                                }
                            },
                        });

                    </script>
                </div>
                <div class="main_infomation_">
                    <div class="txtBox_">
                        <h3 class="infoTxt">금연정보</h3>
                        <a href="" class="btn">
                            <img src="<?=lbh?>/img/main/click_btn.png" alt="클릭버튼">
                        </a>
                    </div>

                    <div class="imgBox_">
                        <a href="#none">
                            <div class="img">
                               <img src="<?=lbh?>/img/newroom/information/pic01.png" alt="금연정보">
                            </div>
                            <div class="txt">
                                <h3 class="head">어린이 식생활안전관리 특별법</h3>
                                <p class="body">이 법은 어린이들이 올바른 식생활 습관을 갖도록 하기 위하여 안전하고 영양을 고루 갖춘 식품을 제공하는데 필요한 사항을 규정함으로써 어린이 건강증진에 기여</p>
                                <p class="date">2021.09.30</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="m_location">
                    <h1 class="m_tit"><span>경남</span>금연지원센터 위치</h1>
                    <div id="daumRoughmapContainer1641949816037" class="root_daum_roughmap root_daum_roughmap_landing osineungil_map"></div>
                    <div class="location_infomation">
                        <p>위치 : 경남 진주시 진주대로 816번길 20, 이상약국 2층</p>
                    </div>
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
        <form name="notice_form">
            <div id="divpop1" class="divpop">
                <div class="title_area" style="background:url(../img/main/popup20220121.png);">
                    <div class="inner">
                        <img src="<?=lbh?>/img/main/popup20220121_inner.png" alt="팝업 텍스트">
                        <div class="btn">
                            <a href="<?=lbh?>/member/join.php">회원가입</a>
                        </div>
                    </div>
                </div>
                <div class="button_area">
                    <input type='checkbox' name='chkbox' id='todaycloseyn' value='Y'>오늘 하루 이 창을 열지 않음
                    <a href='#' onclick="javascript:closeWin(1);"><B>[닫기]</B></a>
                </div>
            </div>
        </form>
        <script>
            //쿠키설정	
            function setCookie(name, value, expiredays) {
                var todayDate = new Date();
                todayDate.setDate(todayDate.getDate() + expiredays);
                document.cookie = name + '=' + escape(value) + '; path=/; expires=' + todayDate.toGMTString() + ';'
            }

            //쿠키 불러오기
            function getCookie(name) {
                var obj = name + "=";
                var x = 0;
                while (x <= document.cookie.length) {
                    var y = (x + obj.length);
                    if (document.cookie.substring(x, y) == obj) {
                        if ((endOfCookie = document.cookie.indexOf(";", y)) == -1)
                            endOfCookie = document.cookie.length;
                        return unescape(document.cookie.substring(y, endOfCookie));
                    }
                    x = document.cookie.indexOf(" ", x) + 1;
                    if (x == 0)
                        break;
                }
                return "";
            }

            //닫기 버튼 클릭시
            function closeWin(key) {
                if ($("#todaycloseyn").prop("checked")) {
                    setCookie('divpop' + key, 'Y', 1);
                }
                $("#divpop" + key + "").hide();
            }

            $(function() {

                if (getCookie("divpop1") != "Y") {
                    $("#divpop1").show();
                }

            });

        </script>
        <div id="kakao_chat">
            <a href="http://pf.kakao.com/_xnSDLb/chat" target="_black">
                <img src="<?=lbh?>/img/main/channel.png">
            </a>
        </div>
    </div>
    <?php include '../inc/footer.php'; ?>
</body>

</html>
