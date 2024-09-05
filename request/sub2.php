<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>

    <div id="svis" style="background:url(../img/request/svis.png)no-repeat center/cover;">
        <div class="inner">
            <h2>금연상담신청</h2>
            <ul class="snb">
                <li class=""><a href="../request/sub1.php">자가진단</a></li>
                <li class="active"><a href="../request/sub2.php">찾아가는 금연지원서비스 신청</a></li>
                <li class=""><a href="../request/sub3.php">금연캠프 신청</a></li>
                <li class=""><a href="../request/sub4.php">전화상담</a></li>
            </ul>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="fas fa-angle-right"></i>
                </em>
                <span>금연상담신청</span>
                <em>
                    <i class="fas fa-angle-right"></i>
                </em>
                <span>찾아가는 금연지원서비스 신청</span>
            </div>
        </div>
    </div>

    <div class="container" id="container">
        <div class="inner">
            <div class="page_title">
                <strong>찾아가는 금연지원서비스 신청</strong>
                <p>Application</p>
            </div>

            <form action="" method="post" name="vstfrm" id="vstfrm" onsubmit="return subibtn();">
                <p class="it_">찾아가는<br><strong><span style="color:#c75d6d;">금연지원서비스 신청</span></strong></p>

                <div class="box">
                    <h3>
                        <input type="checkbox" id="agree2" name="agree2_btn" onchange="valueCheck();">
                        <label for="agree2">이용자 약관 전체동의</label>
                        <!-- 이용자 약관 전체동의 -->
                        <span class="note">필수동의</span>
                        <!-- 필수동의 -->
                    </h3>
                    <ul class="agree-list">
                        <li>
                            <span>01</span>
                            <span>개인정보 수집이용 동의</span>
                            <!-- 개인정보 수집이용 동의 -->
                            <a href="#agree-cont1" class="btn-open btn-open1">보기</a>
                            <!-- 보기 -->
                            <div id="agree-cont1" class="agree-cont agree-cont1" style="display: none;">
                                <p>경남금연지원센터 서비스 이용과 관련하여 본인은 동의 내용을 숙지하였으며, 이에 따라 본인의 개인정보를 아래와 같이 수집하는 것에 대해 동의합니다.</p>
                                <ul class="list-style">
                                    <li>- 수집항목 : 이름, 성별, 생년월일, 주소, 연락처, 세부 서비스(선택)</li>
                                    <li>- 수집/이용 목적 : 신청접수, 글 등록 확인/취소에 따른 본인확인 및 서비스 관련 내용 전달을 위한 의사소통 경로 확보</li>
                                    <!--<li>- 보유 및 이용기간 : 전자상거래에서의 계약, 청약철회, 대금결제, 재화 등 공급기록 5년 </li>-->
                                </ul>
                                <p>※ 본 동의는 서비스의 본질적 기능 제공을 위한 개인정보 수집/이용에 대한 동의로서, 동의하지 않으실 경우 서비스 제공이 불가능합니다.</p>
                                <p>※ 법령에 따른 개인정보의 수집/이용, 계약의 이행/편의증진을 위한 개인정보 취급과 관련된 일반 사항은 서비스의 개인정보 취급방침을 따릅니다.</p>

                            </div>
                        </li>
                        <!--<li>
                            <span>02</span>
                            <span>만 14세 이상에 동의</span>
                            <a href="#agree-cont2" class="btn-open btn-open2">보기</a>
                            <div id="agree-cont2" class="agree-cont agree-cont2" style="display: none;">만 14세 이상 동의 전문 (필수동의) 본 서비스는 전자상거래 결제 특성상 만 14세 이상만 이용 가능합니다. 만 14세 이상임을 확인합니다.</div>
                        </li>-->
                    </ul>

                    <script>
                        $('.btn-open').click(function() {
                            $(this).siblings('.agree-cont').slideToggle(450);
                        });

                    </script>
                </div>

                <table class="__tbl-write">
                    <tbody>
                        <tr>
                            <th scope="row">성명</th>
                            <td>
                                <input type="text" class="__form1 bbx_off" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" placeholder="성함을 입력해주세요." name="m_name" id="m_name">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">성별</th>
                            <td>
                                <label><input type="radio" name="m_sex" value="M" checked="checked"> 남</label>
                                <label><input type="radio" name="m_sex" value="F"> 여</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">생년월일</td>
                            <td>
                                <input type="date" name="m_birth" id="m_birth" class="__form1 m_birth bbx_off" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">의뢰자 주소</td>
                            <td>
                                <div class="locationbox">
                                    <input type="text" class="__form1 applicant_loca bbx_off" name="m_zip" id="cube_postcode" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
                                    <a href="javascript:cube_execDaumPostcode();"><button type="button" class="locabtn_">우편번호 검색</button></a>
                                </div>
                                <div class="__mt10">
                                    <ul class="__dtbl" style="max-width:800px;">
                                        <li class="td"><input type="text" class="__form1 applicant_loca bbx_off" name="m_addr1" id="m_addr1" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" style="width:100%;"></li>
                                        <li class="td tac" style="width:5px;"></li>
                                        <li class="td"><input type="text" class="__form1 applicant_loca bbx_off" name="m_addr2" id="m_addr2" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)"></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
                        <script>
                            function cube_execDaumPostcode() {
                                new daum.Postcode({
                                    oncomplete: function(data) {
                                        // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                                        // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                                        // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                                        var fullAddr = ''; // 최종 주소 변수
                                        var extraAddr = ''; // 조합형 주소 변수

                                        // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                                        if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                                            fullAddr = data.roadAddress;

                                        } else { // 사용자가 지번 주소를 선택했을 경우(J)
                                            fullAddr = data.jibunAddress;
                                        }

                                        // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                                        if (data.userSelectedType === 'R') {
                                            //법정동명이 있을 경우 추가한다.
                                            if (data.bname !== '') {
                                                extraAddr += data.bname;
                                            }
                                            // 건물명이 있을 경우 추가한다.
                                            if (data.buildingName !== '') {
                                                extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                                            }
                                            // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                                            fullAddr += (extraAddr !== '' ? ' (' + extraAddr + ')' : '');
                                        }

                                        // 우편번호와 주소 정보를 해당 필드에 넣는다.
                                        document.getElementById('cube_postcode').value = data.zonecode; //5자리 새우편번호 사용
                                        document.getElementById('m_addr1').value = fullAddr;

                                        // 커서를 상세주소 필드로 이동한다.
                                        document.getElementById('m_addr2').focus();
                                    }
                                }).open();
                            }

                        </script>
                        <tr>
                            <th scope="row">연락처</th>
                            <td>
                                <input type="tel" name="m_tel" id="m_tel" class="__form1 m_tel bbx_off" placeholder="전화번호를 입력해주세요." onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" maxlength="11" onkeypress="return checkNumber(event)">
                            </td>
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
                        </tr>
                        <tr>
                            <th scope="row">세부 서비스</th>
                            <td>
                                <label><input type="radio" name="service_type" value="1" checked="checked">청소년</label>
                                <label><input type="radio" name="service_type" value="2">여성</label>
                                <label><input type="radio" name="service_type" value="3">복지카드 소지자(장애인)</label>
                                <label><input type="radio" name="service_type" value="4">300인 미만 중소규모사업장 근로자</label>
                                <label><input type="radio" name="service_type" value="5">문화누리카드 소지자(저소득층)</label>
                                <label><input type="radio" name="service_type" value="6">지역자율(영세소상공인 및 병원종사자)</label>
                                <label><input type="radio" name="service_type" value="7">모르겠다</label>
                                <span class="dib fs_11" id="commentSmokeagree">* 문의사항이 있으시면 055)759.9030으로 전화 주시면 빠른 답변 드리도록 하겠습니다.</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="_btnarea" style="margin-bottom:50px;">
                    <div class="_btn">
                        <button type="submit" style="cursor:pointer;" class="_btn4">신청접수</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

<script type="text/javascript">
    function subibtn() {
        var f = document.vstfrm;

        if (!f.agree2_btn.checked) {
            alert('이용자 약관 전체동의를 체크해주세요.');
            return false;
        }
        if ($("input[name=m_name]").val() == "") {
            alert("성함을 입력해주세요.");
            $("input[name=m_name]").focus();
            return false;
        }
        if ($("input[name=m_birth]").val() == "") {
            alert("생년월일을 입력해주세요.");
            $("input[name=m_birth]").focus();
            return false;
        }
        if ($("input[name=m_zip]").val() == "") {
            alert("주소를 선택해주세요.");
            $("input[name=m_zip]").focus();
            return false;
        }
        if ($("input[name=m_addr1]").val() == "") {
            alert("주소를 선택해주세요.");
            $("input[name=m_addr1]").focus();
            return false;
        }
        if ($("input[name=m_addr2]").val() == "") {
            alert("주소를 선택해주세요.");
            $("input[name=m_addr2]").focus();
            return false;
        }
        if ($("input[name=m_tel]").val() == "") {
            alert("휴대번호를 입력해주세요.");
            $("input[name=m_tel]").focus();
            return false;
        }
        if( $.trim($("#m_tel").val()).length < 10 || $.trim($("#m_tel").val()).length > 11 ){
			alert("휴대번호는 10~11자리 입니다.");
			$("#m_tel").select();
			return false;
		}
        if (f.service_type.checked) {
            alert('세부서비스를 선택해주세요.');
            return false;
        }

    }

</script>

<script>
    $("._btn2").on("click", function() {
        var radio = $("radio[value='Y]");

        for (var i = 0; i < radio.length; i++) {
            var $this = $(radio[i]);
            if (!$this.is(":checked")) {
                alert('반드시 체크해주세요.');
                $this.focus();
                return;
            }
        }
    });

</script>


</html>
