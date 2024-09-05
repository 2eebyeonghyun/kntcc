<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>

    <div id="svis">
        <div class="inner">
            <h2>로그인</h2>

            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="fas fa-angle-right"></i>
                </em>
                <span>로그인</span>
            </div>
        </div>
    </div>

    <div class="container" id="container">
        <div class="inner">
            <div class="page_title">
                <strong>로그인</strong>
                <p>login</p>
            </div>

            <div class="loginform_">
                <div class="inner">
                    <div class="loginbox_">
                        <form name="loginform" id="loginfrm" method="post" onsubmit="return subibtn();">
                            <h3>로그인</h3>
                            <div class="loginInput">
                                <div class="login_ cusEmail">
                                    <input type="text" id="cusEmail" name="cusEmail" class="inp flex" placeholder="이메일" maxlength="20">
                                </div>
                                <div class="login_ cusTel">
                                    <input type="password" id="cusTel" name="cusTel" class="inp flex" placeholder="전화번호" maxlength="11" onkeypress="return checkNumber(event)">
                                    <script>
                                        function checkNumber(event) {
                                            if(event.key === '.' 
                                               || event.key === '-'
                                               || event.key >= 0 && event.key <= 9) {
                                                return true;
                                            }
                                            return false;
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="input_bottom">
                                <div class="checkbox_ui type1">
                                    <input type="checkbox" id="idSave">
                                    <label for="idSave">이메일 저장</label>
                                </div>
                            </div>
                            <div class="_btnarea" style="margin:0px;">
                                <div class="_btn">
                                    <button type="submit" style="cursor:pointer; border:0px; color:#fff; font-size:17px; font-weight:400;" class="btn_login">로그인</button>
                                </div>
                            </div>
<!--                            <a href="#" class="btn_login"><span>로그인</span></a>-->
                        </form>
                        
                        <div class="join_area">
                            <p><em>뉴스레터</em>와 <em>금연캠프</em>를 신청하세요 !</p>
                            <a href="<?=lbh?>/member/join.php"><span>회원가입</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function subibtn() {
                    var f = document.loginform;

                    if ($("input[name=cusEmail]").val() == "") {
                        alert("이메일을 입력해주세요.");
                        $("input[name=cusEmail]").focus();
                        return false;
                    }
                    if ($("input[name=cusTel]").val() == "") {
                        alert("전화번호를 입력해주세요.");
                        $("input[name=cusTel]").focus();
                        return false;
                    }
                }
            </script>
        </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

</html>
