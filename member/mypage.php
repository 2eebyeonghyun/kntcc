<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>

    <div id="svis">
        <div class="inner">
            <h2>마이페이지</h2>

            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="fas fa-angle-right"></i>
                </em>
                <span>마이페이지</span>
            </div>
        </div>
    </div>

    <div class="container" id="container">
        <div class="inner">
            <div class="page_title">
                <strong>마이페이지</strong>
                <p>My page</p>
            </div>

            <div class="detail_box3">
                <div class="tabs" style="justify-content: space-around;">
                    <a href="#" class="active">내정보수정</a>
                    <a href="#" class="">신청내역</a>
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
                            <form action="" method="post" name="mypfrm" id="mypfrm" onsubmit="return subibtn();">
                                <table class="__tbl-write">
                                    <tbody>
                                        <tr>
                                            <th scope="row">성명</th>
                                            <td>
                                                <span>이병현</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">성별</th>
                                            <td>
                                                <span>남자</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">생년월일</td>
                                            <td>
                                                <span>1994.07.06</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">휴대폰</th>
                                            <td>
                                                <input type="tel" name="m_tel" id="m_tel" class="__form1 m_tel bbx_off" style="width:300px;" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" placeholder="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">E-mail</th>
                                            <td>
								                <input type="text" class="__form1" name="m_email" id="m_email" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
							                </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">흡연여부</th>
                                            <td>
                                                <label><input type="radio" name="smoke" value="Y">흡연</label>
                                                <label><input type="radio" name="n_smoke" value="N">비흡연</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">금연서비스<br class="br2_">신청여부</th>
                                            <td>
                                                <label><input type="radio" name="agree" value="Y">신청</label>
                                                <label><input type="radio" name="n_agree" value="N">비신청</label>
                                                <span class="dib fs_11" id="commentSmokeagree">* 신청자에게는 금연서비스 등록을 위해 연락 예정입니다.</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">뉴스레터<br class="br2_">신청여부</th>
                                            <td>
                                                <label><input type="radio" name="news_agree" value="Y">신청</label>
                                                <label><input type="radio" name="news_n_agree" value="N">비신청</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="_btnarea" style="margin-bottom:30px;">
                                    <div class="_btn">
                                        <button type="submit" style="cursor:pointer; background:#21666a; border:#21666a; vertical-align:top;" class="_btn4">변경</button>
                                        <button type="submit" style="cursor:pointer;" class="_btn4">회원탈퇴</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="cont" style="display: none;">
                            <form action="" method="post" name="mypfrm2" id="mypfrm2">
                                <table class="board-list-table">
                                    <colgroup>
                                        <col class="category">
                                        <col class="subject">
                                        <col class="date">
                                        <col class="registration">
                                        <col class="delete">
                                    </colgroup>

                                    <thead>
                                        <tr>
                                            <th scope="col">유형</th>
                                            <th scope="col">제목</th>
                                            <th scope="col">작성일자</th>
                                            <th scope="col">승인여부</th>
                                            <th scope="col">신청변경</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="category">[금연후기 게시판]</td>
                                            <td class="subject">
                                                <a href="sub2_view.php">테스트용 게시글입니다.</a>
                                            </td>
                                            <td class="date">2022-01-13</td>
<!--                                            <td class="registration">승인</td>-->
                                            <td class="registration registration_n">심사 중</td>
                                            <td class="delete">
                                                <a href="#none" class="_Nybtn">삭제하기</a>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="category">[금연캠프 신청]</td>
                                            <td class="subject">
                                                <a href="sub2_view.php">4박 5일 금연캠프 신청</a>
                                            </td>
                                            <td class="date">2022-01-13</td>
                                            <td class="registration">승인</td>
                                            <td class="delete">
                                                <a href="#none" class="_Nybtn">삭제하기</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <?php include '../inc/pagenation.php'; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>
</html>
