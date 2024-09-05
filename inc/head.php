<header id="header" class="header">
    <div class="header-in">
        <h1>
            <a href="<?=lbh?>/main/index.php">
                <img src="<?=lbh?>/img/main/logo.png" alt="로고">
                <img src="<?=lbh?>/img/main/logo_white.png" alt="호버로고">
            </a>
        </h1>
        <nav class="header-menu">
            <ul class="gnb">
                <li class="">
                    <a href="<?=lbh?>/center/test_sub1.php">센터소개<span></span></a>
                    <ul class="header-sub-menu menu01" style="display: none; height: 60px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="">
                            <a href="<?=lbh?>/center/test_sub1.php">센터소개</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/center/sub2.php">조직도</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/center/sub3.php">오시는 길</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a class="english a-tag" href="<?=lbh?>/service/sub1.php">금연지원서비스<span></span></a>
                    <ul class="header-sub-menu menu02" style="display: none; height: 60px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="">
                            <a href="<?=lbh?>/service/sub1.php">금연지원서비스</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/service/sub2.php">찾아가는 금연지원서비스</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/service/sub3.php">전문치료형 금연캠프</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/service/sub4.php">입원환자</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a class="english" href="<?=lbh?>/request/sub1.php">금연상담신청<span></span></a>
                    <ul class="header-sub-menu menu03" style="display: none; height: 60px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="">
                            <a href="<?=lbh?>/request/sub1.php">자가진단</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/request/sub2.php">찾아가는 금연지원서비스 신청</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/request/sub3.php">금연캠프 신청</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/request/sub4.php">전화상담</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="<?=lbh?>/newsroom/sub1.php">금연정보통<span></span></a>
                    <ul class="header-sub-menu menu04" style="display: none; height: 60px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="">
                            <a href="<?=lbh?>/newsroom/sub1.php">금연준비하기</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/newsroom/sub2.php">금연정보</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/newsroom/sub3.php">보조제 및 약물치료</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/newsroom/sub4.php">뉴스룸</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/newsroom/sub5.php">캠페인</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="<?=lbh?>/community/sub1.php">커뮤니티<span></span>
                    </a>
                    <ul class="header-sub-menu menu05" style="display: none; height: 60px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <li class="">
                            <a href="<?=lbh?>/community/sub1.php">공지사항</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/community/sub2.php">금연후기 게시판</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/community/sub3.php">센터 동영상</a>
                        </li>
                        <li class="">
                            <a href="<?=lbh?>/community/sub4.php">Q&A</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="header-sub-menu-bg" style="display: none; height: 60px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;"></div>
        </nav>
        <div class="search-box">
            <button type="button" class="search-btn">
                <img src="<?=lbh?>/img/main/search_bk.png" alt="서치아이콘">
                <img src="<?=lbh?>/img/main/search_wh.png" alt="서치아이콘 호버">
            </button>
        </div>
        <div class="mask-search"></div>
        <div class="window" style="left:50%; top:50%;">
            <div class="Tsearch_">
                <dl class="inputT">
                    <form name="Tsearch" method="get" action="<?=lbh?>/member/search.php" onsubmit="return search(this);">
                        <dd>
                            <input type="text" name="total_T" class="total_T" title="검색어 입력" placeholder="검색어를 입력해주세요." value>
                        </dd>
                        <dt>
                            <input type="image" src="<?=lbh?>/img/main/search_bk.png" border="0" alt="검색">
                        </dt>
                    </form>
                </dl>
            </div>
            <span class="close">
                <img src="<?=lbh?>/img/main/top_close_bk.png" alt="검색 닫기">
            </span>
        </div>
        <script type="text/javascript">
            function wrapWindowByMask() {
                // 화면의 높이와 너비를 변수로 만듭니다.
                var maskHeight = $(document).height();
                var maskWidth = $(window).width();

                // 마스크의 높이와 너비를 화면의 높이와 너비 변수로 설정합니다.
//                $('.mask-search').css({'width':'100%','height':'100%'});

                // fade 애니메이션 : 1초 동안 검게 됐다가 80%의 불투명으로 변합니다.
                $('.mask-search').addClass('visible');
                $('.window').addClass('visible');
                //$('.mask_search').fadeTo("fast",0.9);

                // 레이어 팝업을 가운데로 띄우기 위해 화면의 높이와 너비의 가운데 값과 스크롤 값을 더하여 변수로 만듭니다.
                var left = ($(window).scrollLeft() + ($(window).width() - $('.window').width()) / 2);
                var top = ($(window).scrollTop() + ($(window).height() - $('.window').height()) / 2);

                // css 스타일을 변경합니다.
                $('.window').css({
                    'left': '50%',
                    'top': '15%',
                    'opacity': '1',
                    'visibility': 'visible'
                });
                
                $('.mask-search').css({
                    'opacity': '1',
                    'height': '30%',
                    'visibility': 'visible'
                });

                // 레이어 팝업을 띄웁니다.
                //$('.window').show();
            }

            $(document).ready(function() {
                // showMask를 클릭시 작동하며 검은 마스크 배경과 레이어 팝업을 띄웁니다.
                $('.search-btn').click(function(e) {
                    // preventDefault는 href의 링크 기본 행동을 막는 기능입니다.
                    e.preventDefault();
                    wrapWindowByMask();
                });

                // 닫기(close)를 눌렀을 때 작동합니다.
                $('.window .close').click(function(e) {
                    e.preventDefault();
                    //$('.mask_search, .window').hide();
                    $('.mask-search').removeClass('visible').css('visibility', 'hidden');
                    $('.window').removeClass('visible').css('visibility', 'hidden');
                });

                // 뒤 검은 마스크를 클릭시에도 모두 제거하도록 처리합니다.
                $('.mask-search').click(function() {
                    //$(this).hide();
                    //$('.window').hide();
                    $('.mask-search').removeClass('visible');
                    $('.window').removeClass('visible');
                });
            });

        </script>
        <div class="menu-open-btn-box">
            <button>
                <span class=""></span>
                <span class=""></span>
            </button>
        </div>
    </div>
</header>

<div class="main-menu main-menu-on" style="display:none;">
    <div class="menu-close-btn-box" style="display: block;">
        <button>
            <span></span>
            <span></span>
        </button>
    </div>
    <ul>
        <li class="english">
            <span class="main-menu-title">센터소개</span>
            <span class="main-menu-line"></span>
            <ul style="">
                <li><a href="<?=lbh?>/center/test_sub1.php">센터소개</a></li>
                <li><a href="<?=lbh?>/center/sub2.php">조직도</a></li>
                <li><a href="<?=lbh?>/center/sub3.php">오시는 길</a></li>
            </ul>
        </li>
        <li class="english">
            <span class="main-menu-title">금연지원서비스</span>
            <span class="main-menu-line"></span>
            <ul style="">
                <li><a href="<?=lbh?>/service/sub1.php">금연지원서비스</a></li>
                <li><a href="<?=lbh?>/service/sub2.php">찾아가는 금연지원서비스</a></li>
                <li><a href="<?=lbh?>/service/sub3.php">전문치료형 금연캠프</a></li>
                <li><a href="<?=lbh?>/service/sub4.php">입원환자</a></li>
            </ul>
        </li>
        <li class="english">
            <span class="main-menu-title">금연상담신청</span>
            <span class="main-menu-line"></span>
            <ul style="">
                <li><a href="<?=lbh?>/request/sub1.php">자가진단</a></li>
                <li><a href="<?=lbh?>/request/sub2.php">찾아가는 금연지원서비스 신청</a></li>
                <li><a href="<?=lbh?>/request/sub3.php">금연캠프 신청</a></li>
                <li><a href="<?=lbh?>/request/sub4.php">전화상담</a></li>
            </ul>
        </li>
        <li class="english">
            <span class="main-menu-title">금연정보통</span>
            <span class="main-menu-line"></span>
            <ul style="">
                <li><a href="<?=lbh?>/newsroom/sub1.php">금연준비하기</a></li>
                <li><a href="<?=lbh?>/newsroom/sub2.php">금연정보</a></li>
                <li><a href="<?=lbh?>/newsroom/sub3.php">보조제 및 약물치료</a></li>
                <li><a href="<?=lbh?>/newsroom/sub4.php">뉴스룸</a></li>
                <li><a href="<?=lbh?>/newsroom/sub5.php">캠페인</a></li>
            </ul>
        </li>
        <li class="english">
            <span class="main-menu-title">커뮤니티</span>
            <span class="main-menu-line"></span>
            <ul style="">
                <li><a href="<?=lbh?>/community/sub1.php">공지사항</a></li>
                <li><a href="<?=lbh?>/community/sub2.php">금연후기 게시판</a></li>
                <li><a href="<?=lbh?>/community/sub3.php">센터 동영상</a></li>
            </ul>
        </li>
        <li class="english">
            <span class="main-menu-title">회원정보</span>
            <span class="main-menu-line"></span>
            <ul style="">
                <li><a href="<?=lbh?>/member/login.php">로그인</a></li>
                <!--					<li><a href="#none">로그아웃</a></li>-->
                <li><a href="<?=lbh?>/member/join.php">회원가입</a></li>
                <li><a href="<?=lbh?>/member/mypage.php">마이페이지</a></li>
            </ul>
        </li>
    </ul>
</div>
