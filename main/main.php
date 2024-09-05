<?php 
include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>

<body>
    <?php include '../inc/head.php'; ?>

    <div class="main_visual">
        <img class="" src="<?=lbh?>/img/main/main_txt.png" alt="">
    </div>

    <div class="container" id="container">
        <div class="cont0">

        </div>

        <div class="cont1">
            <div class="inner">
                <div class="leftbox_">
                    <div class="info_text">
                        <h3 class="title"><span style="color:#68babd">정보</span>마당<a href="#none" style="color:#68babd">+</a></h3>
                        <p class="text">· 경남금연지원센터에서 다양한 서비스를 통해 금연을 도와드립니다.</p>
                    </div>

                    <div class="swiper cont1Swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="../service/sub1.php">
                                    <div class="img">
                                        <img src="../img/main/cont1_1.png" alt="금연지원서비스">
                                    </div>
                                    <div class="text">
                                        <h3>금연지원서비스</h3>
                                        <p>경남금연지원센터에서 제공해드리는 서비스를 알아보세요.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#none">
                                    <div class="img">
                                        <img src="../img/main/cont1_2.png" alt="자가진단">
                                    </div>
                                    <div class="text">
                                        <h3>자가진단</h3>
                                        <p>홈페이지에서 제공하는 자가진단표로 자신의 흡연상태를 확인해보세요.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#none">
                                    <div class="img">
                                        <img src="../img/main/cont1_3.png" alt="금연준비하기">
                                    </div>
                                    <div class="text">
                                        <h3>금연준비하기</h3>
                                        <p>금연을 준비하는 분들에게 알려드리는 금연준비절차 !</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rightbox_">
                    <div class="info_text">
                        <h3 class="title"><span style="color:#eb8c61">금연</span>서비스 신청<a href="#none" style="color:#eb8c61">+</a></h3>
                        <p class="text">· 경남금연지원센터에서 다양한 금연지원서비스를 신청해보세요.</p>
                    </div>

                    <div class="swiper cont1Swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#none">
                                    <div class="img">
                                        <img src="../img/main/cont1_4.png" alt="금연캠프신청">
                                    </div>
                                    <div class="text">
                                        <h3>4박 5일<br class="br_"> 금연캠프 신청</h3>
                                        <p>혼자서 금연이 힘든 분에게 전문적인 금연 프로그램을 제공합니다.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#none">
                                    <div class="img">
                                        <img src="../img/main/cont1_5.png" alt="찾아가는 금연지원서비스 신청">
                                    </div>
                                    <div class="text">
                                        <h3>찾아가는<br class="br_"> 금연지원서비스 신청</h3>
                                        <p>금연프로그램에 찾아오기 힘드신분에게 직접 찾아갑니다.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="../center/sub3.php">
                                    <div class="img">
                                        <img src="../img/main/cont1_6.png" alt="찾아오시는 길">
                                    </div>
                                    <div class="text">
                                        <h3>오시는 길</h3>
                                        <p>경남금연지원센터 위치를 알려드립니다.<br></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var swiper = new Swiper(".cont1Swiper", {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    pagination: {
                        el: ".swiper-pagination",
                    },
                    breakpointsInverse: true,
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 15
                        },
                        520: {
                            slidesPerView: 2,
                            spaceBetween: 15
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 15
                        },
                        1080: {
                            slidesPerView: 3,
                        }
                    },
                });

            </script>
        </div>

        <div class="cont2">
            <div class="inner">
                <div class="info_text">
                    <h3 class="title"><span style="color:darkorange">정보</span>마당<a href="#none" style="color:darkorange">+</a></h3>
                    <p class="text">· 경남금연지원센터에서 정보들과 금연캠프 경험자들의 후기를 들어보세요.</p>
                </div>
                
                <div class="left_box">
                    <div class="detail_box">
                        <div class="tabs" style="justify-content: space-around;">
                            <a href="#" class="active"><span style="color: #eb8860;">공지</span>사항</a>
                            <a href="#" class=""><span style="color: #8bcfde">금연</span>캠프 후기</a>
                            <script>
                                $(document).ready(function() {
                                    $('a[href="#"]').click(function(ignore) {
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
                                            <a href="#none" class="text">2021년 유아 흡연위해예방교육 우수사례 공모전 개최</a>
                                            <p class="date">2022.01.04</p>
                                        </li>
                                        <li>
                                            <a href="#none" class="text">2021년 유아 흡연위해예방교육 우수사례 공모전 개최</a>
                                            <p class="date">2022.01.04</p>
                                        </li>
                                        <li>
                                            <a href="#none" class="text">2021년 유아 흡연위해예방교육 우수사례 공모전 개최</a>
                                            <p class="date">2022.01.04</p>
                                        </li>
                                        <li>
                                            <a href="#none" class="text">2021년 유아 흡연위해예방교육 우수사례 공모전 개최</a>
                                            <p class="date">2022.01.04</p>
                                        </li>
                                        <li>
                                            <a href="#none" class="text">2021년 유아 흡연위해예방교육 우수사례 공모전 개최</a>
                                            <p class="date">2022.01.04</p>
                                        </li>
                                        <li>
                                            <a href="#none" class="text">2021년 유아 흡연위해예방교육 우수사례 공모전 개최</a>
                                            <p class="date">2022.01.04</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="cont" style="display: none;">
                                    <ul class="board_list">
                                        <li>
                                            <a href="#none" class="text">2021년 유아 흡연위해예방교육 우수사례 공모전 개최2</a>
                                            <p class="date">2022.01.04</p>
                                        </li>
                                        <li>
                                            <a href="#none" class="text">2021년 유아 흡연위해예방교육 우수사례 공모전 개최2</a>
                                            <p class="date">2022.01.04</p>
                                        </li>
                                        <li>
                                            <a href="#none" class="text">2021년 유아 흡연위해예방교육 우수사례 공모전 개최</a>
                                            <p class="date">2022.01.04</p>
                                        </li>
                                        <li>
                                            <a href="#none" class="text">2021년 유아 흡연위해예방교육 우수사례 공모전 개최</a>
                                            <p class="date">2022.01.04</p>
                                        </li>
                                        <li>
                                            <a href="#none" class="text">2021년 유아 흡연위해예방교육 우수사례 공모전 개최</a>
                                            <p class="date">2022.01.04</p>
                                        </li>
                                        <li>
                                            <a href="#none" class="text">2021년 유아 흡연위해예방교육 우수사례 공모전 개최</a>
                                            <p class="date">2022.01.04</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right_box">
                    <div class="top_">
                        <ul>
                            <li>
                                <a href="#none">
                                    <div class="in">
                                        <img src="../img/main/video_icon.png" alt="동영상">
                                        <p>센터 동영상</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#none">
                                    <div class="in">
                                        <img src="../img/main/campain_icon.png" alt="캠페인">
                                        <p>금연 캠페인</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#none">
                                    <div class="in">
                                        <img src="../img/main/privacy_icon.png" alt="개인 상담">
                                        <p>개인 금연 상담</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#none">
                                    <div class="in">
                                        <img src="../img/main/phone_icon.png" alt="전화 상담">
                                        <p>전화 상담</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="bot_">
                        <div class="info_text">
                            <h3 class="title"><span style="color:#d64229">캠페인</span>정보<a href="#none" style="color:#d64229">+</a></h3>
                            <p class="text">· 경남금연지원센터에서 정보들과 금연캠프 경험자들의 후기를 들어보세요.</p>
                        </div>

                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/uTD9qCSGFwE?&mute=1&loop=1&playlist=uTD9qCSGFwE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="cont3">
            <div class="inner">
                <div class="info_text">
                    <h3 class="title"><span style="color:darkblue">뉴스</span>룸<a href="#none" style="color:darkblue">+</a></h3>
                    <p class="text">· 흡연에 관련된 최신 정보와 금연을 하면 좋은 정보들을 알려드립니다.</p>
                </div>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1000">
                            <a href="#none">
                                <img src="../img/main/news1.png" alt="밤낮으로 일하는 가장을 니코틴으로 살해한 '비정한 아내'">
                                <div class="textbox">
                                    <h3 class="title">밤낮으로 일하는 가장을 니코틴으로 살해한 '비정한 아내'</h3>
                                    <p class="text">
                                        화성에서 니코틴을 이용한 살인사건이 발생했다. 과거엔 해외에서 암암리에 들여온 니코틴을 사용했다면 이번 사건은 국내 일반 전자담배 가게에서 손쉽게 얻은 니코틴을 이용했다.
                                        낮엔 직장에 다니고 밤엔 배달 아르바이트를 뛴 가장 A(47)씨 갑작스레 세상을 떠난 건 지난 5월의 일이다. 장례식장을 찾은 조문객 누구도 황망한 이별의 이유를 알지 못했다. A씨 죽음의 비밀이 밝혀진 건 최근 들어서다. 경찰은 A씨가 타인에 의해 계획된 니코틴 액상 복용으로 숨진 걸로 판단했다.
                                    </p>
                                    <p class="date">2021.12.06</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <a href="#none">
                                <img src="../img/main/news2.png" alt="10대 흡연에 눈 감는 어른들">
                                <div class="textbox">
                                    <h3 class="title">10대 흡연에 눈 감는 어른들</h3>
                                    <p class="text">
                                        청주시 흥덕구 봉명동에 사는 중소기업 대표 한모씨(34)는 지난 28일 오후 6시쯤 자신이 거주하는 건물 1층 주차장에서 담배를 태우고 있는 10대 학생 두 명을 보고 훈계하려다 참았다.
                                        최근 대구에서 담배를 피우지 말라며 학생들을 훈계한 식당 주인이 이들로부터 행패를 당한 뉴스가 생각나서다.
                                        한씨는 “집 앞이라 괜히 보복당할까 싶어 자리를 피했다”며 “이런 일이 자주 있는데 그럴 때마다 계도를 해야 할지 고민이 많다”고 말했다.
                                        청소년들의 흡연을 놓고 세대 간 충돌이 종종 벌어지고 있다. 주변 시선은 아랑곳하지 않고 흡연하는가 하면, 훈계하는 어른들에게 공격적인 반응을 보이는 사례가 적지않다. 이 때문에 고등학생은 물론 어린 초·중학생들의 흡연을 보고도 어른들은 침묵하는 게 일상이 됐다.
                                    </p>
                                    <p class="date">2021.12.06</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <a href="#none">
                                <img src="../img/main/news4.png" alt="맨톨에 요구르트까지.. 가향담배, 일반담배보다 나쁜 이유">
                                <div class="textbox">
                                    <h3 class="title">맨톨에 요구르트까지.. 가향담배, 일반담배보다 나쁜 이유</h3>
                                    <p class="text">
                                        가향담배는 담배의 매캐한 연기를 감추기 위해 설탕과 같은 감미료 성분을 추가한 담배다. 우리나라에서는 불티나게 팔리지만, 유럽연합과 캐나다에선 판매를 금지했고 미국 바이든 정부도 가향담배 금지 법안을 가결한 상태다. 선진국들이 가향담배만 규제하는 이유는 뭘까? 가향담배가 일반담배보다 더 나쁜 이유 3가지를 소개한다.
                                    </p>
                                    <p class="date">2021.11.16</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                            <a href="#none">
                                <img src="../img/main/news3.png" alt="2030에게 급격히 증가하는 구강암, 흡연이 주원인">
                                <div class="textbox">
                                    <h3 class="title">2030에게 급격히 증가하는 구강암, 흡연이 주원인</h3>
                                    <p class="text">
                                        장모(36)씨는 최근 구내염이 생겼다. 잦은 야근으로 그러려니 했지만 평소 1주일 이내에 사라지던 구내염이 3주 이상 지속됐다. 하얗게 염증이 올라와 신경이 쓰이고 밥을 먹거나 음료를 마실 때도 불편했다. 병원을 찾았더니 ‘구강암 전 단계’ 진단을 받았다.<br>
                                        구강암은 입안에 생기는 모든 암을 말한다. 발생 부위는 입천장, 잇몸 뼈, 볼 점막, 혀, 혀 아래 바닥, 어금니 뒤 삼각 부위 등 다양하다. 이 중 가장 흔한 것은 혀에 생기는 설암으로 최근 20~30대 젊은 층에서 급격히 증가하고 있다.
                                    </p>
                                    <p class="date">2021.10.07</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <script>
                var swiper = new Swiper(".mySwiper", {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    pagination: {
                        el: ".swiper-pagination",
                    },
                    breakpointsInverse: true,
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 15
                        },
                        520: {
                            slidesPerView: 2,
                            spaceBetween: 15
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 15
                        },
                        1080: {
                            slidesPerView: 4,
                        }
                    },
                });

            </script>

        </div>

        <div class="cont4" id="cont4" style="margin-bottom:0px;">
            <div class="inner">
                <div class="info_text">
                    <h3 class="title"><span style="color: darkred;">오시는</span> 길<a href="#none" style="color: darkred;">+</a></h3>
                    <p class="text">· 주소 : 경남 진주시 진주대로 816번길 20, 이상약국 2층 · 센터전화 : 055)769-9030</p>
                </div>
            </div>
            <div class="map">
                <div id="daumRoughmapContainer1641449733394" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp": "1641449733394",
                        "key": "28ppg",
                        "mapWidth": "640",
                        "mapHeight": "500"
                    }).render();

                </script>
            </div>
        </div>

        <!--<div id="popup_layer">
            <div class="popup_box">
                <div class="popup_cont">
                    <h2>팝업팝업</h2>
                    <p>팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업팝업</p>
                </div>

                <div class="popup_btn">
                    <a href="javascript:closePop();">close</a>
                </div>
            </div>

            <script>
                function setCookie(name, value, expiredays) {
                    var todayDate = new Date();
                    todayDate.setDate(todayDate.getDate() + expiredays);

                    document.cookie = name + "=" + value + "; path=/; expires=" + todayDate.toUTCString() + ";" 
                }

                function closeToday() {
                    setCookie("popToday", "close", 1);
                    $("#popup_layer").css("display", "none");
                    document.getElementById("popup_layer").style.display = "none";
                }

                function closePop() {
                    document.getElementById("popup_layer").style.display = "none";
                }

            </script>-->

        <form name="notice_form">
            <div id="divpop1" class="divpop">
                <div class="title_area" style="background:url(../img/main/popup20220121.png);">
                    <div class="inner">
                        <img src="../img/main/popup20220121_inner.png" alt="팝업 텍스트">
                        <div class="btn">
                            <a href="../member/join.php">회원가입</a>
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
		    <a href="#none" target="_black">
		        <img src="<?=lbh?>/img/main/channel.png">
		      </a>
	    </div>
        
    </div>

    <?php include '../inc/footer.php'; ?>
    </div>
</body>

</html>
