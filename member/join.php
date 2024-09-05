<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<script type="text/javascript">
    // 아이디 중복 체크
	function checkId(arg){

var f = document.signupform;

    if(!checkCode(arg)){

        $('#commentId').html("* 한글 및 특수문자, 공백은 넣을 수 없습니다.");
        f.m_id.value = "";
        f.m_id.focus();
        f.idDuplicateYn.value = "N";
        return false;

    } else if(arg.length < 6 || arg.length > 12){

        $('#commentId').html("* 아이디는 <em class='hColor1'>6자 이상, 12자 이하로 작성</em>해주세요.");
        f.m_id.focus();
        f.idDuplicateYn.value = "N";
        return false;

    } else{

        $.ajax({
            cache:false,
            async:false,
            type: "POST",
            data: "m_id=" + arg,
            url: "/_core/act/?at=checkid",
            success: function(data) {
                if(data != null) {

                    if(data != "true"){
                        $('#commentId').html("* <em class='hColor1'>이미 사용중인 아이디</em>입니다.");
                        f.idDuplicateYn.value = "N";
                    } else{
                        $('#commentId').html("* <font color='blue'>사용 가능한 아이디</font>입니다.");
                        f.idDuplicateYn.value = "Y";
                    }

                } // end if
            }// success
        });

    } // end if

}

// 이메일 중복 체크
function checkEmail(arg){

var f = document.signupform;

        var regex=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;   
        if(regex.test(arg) === false) {

            $('#commentEmail').html("* 이메일 주소를 정확히 입력해주세요.");
            f.m_email.focus();
            f.emailDuplicateYn.value = "N";
            return false;

        } else{

        $.ajax({
            cache:false,
            async:false,
            type: "POST",
            data: "m_email=" + arg,
            url: "/_core/act/?at=checkemail",
            success: function(data) {
                if(data != null) {

                    if(data != "true"){
                        $('#commentEmail').html("* <em class='hColor1'>이미 사용중인 이메일 주소</em>입니다.");
                        f.emailDuplicateYn.value = "N";
                    } else{
                        $('#commentEmail').html("* <font color='blue'>사용 가능한 이메일 주소</font>입니다.");
                        f.emailDuplicateYn.value = "Y";
                    }

                } // end if
            }// success
        });

    } // end if

}

// 가입확인 및 인증번호받기
function regCheckEmail02(){

var val = jQuery.trim($("input[name=m_email]").val());
if(!isValidEmail(val)){
//		chkmessage(obj, false, "<font color='red'>이메일이 잘못된 형식입니다.</font>");
    message("이메일이 잘못된 형식입니다.");
    $("input[name=m_email]").focus();
    return false;
}

if(jQuery.trim($("input[name=m_email]").val())==""){
    message("이메일 주소를 입력 하세요.");
    $("input[name=m_email]").focus();
    return false;
}

result = "";
$.ajax({
    cache:false,
    async:false,
    type: "POST",
            dataType : "json",
    data: {"val":val, "rt":"json"},
    url: "<?=_CORE_?>/act/?at=checkemail02",
        success: function(msg) {
            result = msg;

            if(result==true){
                $("input[name=m_email_chk]").val('2');
                $("input[name=m_email_chk02]").val('0');
                $("input[name=m_email]").attr("readonly",true);
                $("input[name=email_chk]").attr("readonly",false);
                alert("입력하신 이메일주소로 인증번호가 발송되었습니다.");
            } else{
                alert("사용중인 이메일 입니다. \n다른 이메일주소를 입력하세요.");
            }
        }
    });
}
// 이메일인증확인
function regCheckEmail03(){

if( $("input[name=m_email_chk02]").val() == "2"  ){
    alert("이메일인증이 이미 완료되었습니다.");
    return false;
}

var val = jQuery.trim($("input[name=m_email]").val());
if(!isValidEmail(val)){
//		chkmessage(obj, false, "<font color='red'>이메일이 잘못된 형식입니다.</font>");
    message("이메일이 잘못된 형식입니다.");
    $("input[name=m_email]").focus();
    return false;
}
var num = jQuery.trim($("input[name=email_chk]").val());
if(num == ""){
        message("인증번호를 입력해주세요.");
        $("input[name=email_chk]").focus();
        return false;		
}

result = "";
$.ajax({
    cache:false,
    async:false,
    type: "POST",
            dataType : "json",
    data: {"val":val,"num":num, "rt":"json"},
    url: "<?=_CORE_?>/act/?at=checkemail03",
        success: function(msg) {
            result = msg;

            if(result==true){
                $("input[name=m_email_chk02]").val('2');
                $("input[name=email_chk]").attr("readonly",true);
                alert("이메일인증이 완료되었습니다.");
            } else{
                $("input[name=m_email_chk02]").val('0');
                alert("인증번호를 확인하세요.");
            }
        }
    });
}
// 이메일인증번호 - 재전송
function regCheckEmail04(){

if( $("input[name=m_email_chk02]").val() != "2"  ){
    alert("먼저 이메일인증 [인증확인] 버튼을 클릭하세요.");
    return false;
}

var val = jQuery.trim($("input[name=m_email]").val());
if(!isValidEmail(val)){
//		chkmessage(obj, false, "<font color='red'>이메일이 잘못된 형식입니다.</font>");
    message("이메일이 잘못된 형식입니다.");
    $("input[name=m_email]").focus();
    return false;
}

result = "";
$.ajax({
    cache:false,
    async:false,
    type: "POST",
            dataType : "json",
    data: {"val":val, "rt":"json"},
    url: "<?=_CORE_?>/act/?at=checkemail04",
        success: function(msg) {
            result = msg;

            if(result==true){
                alert("인증번호가 재전송되었습니다.");
            } else{
                alert("관리자에게 문의하세요.");
            }
        }
    });
}
function isValidEmail(mail){
return true;
/* fix.
var t = escape(mail);
if(t.match(/^(\w+)@(\w+)[.](\w+)$/ig) == null && t.match(/^(\w+)@(\w+)[.](\w+)[.](\w+)$/ig) == null){
return false;
} else {
return true;
}
*/
}
function message(msg){
//	$('.popup_style').hide();
//	$('.popup,.st18').fadeIn('fast').find("#popup_msg").html(msg);
alert(msg);
return false;
}

// 영문+숫자 only
function checkCode(arg){

for(var i = 0; i < arg.length; i++){

var k = arg.charCodeAt(i);
if(!(k > 96 && k < 123 || k > 64 && k < 91 || k > 47 && k < 58)){
 return false;}
}
return true;
}

// number only
function checkNumber(){
var objEv = event.srcElement;
var numPattern = /([^0-9])/;
numPattern = objEv.value.match(numPattern);
if(numPattern != null){
    alert("숫자만 입력해 주세요 ! ");
    objEv.value="";
    objEv.focus();
    return false;
}
}

// 영문 대/소문자 숫자 특수문자 체크
function isInputCheckText(text){
var s = (isCase(text));
var s_1  = s.split("/");
if(s_1[0]>0)s_1[0] = 1;
if(s_1[1]>0)s_1[1] = 1;
if(s_1[2]>0)s_1[2] = 1;
if(s_1[3]>0)s_1[3] = 1;
if(  (    parseInt(s_1[0]) + parseInt(s_1[1]) + parseInt(s_1[2]) + parseInt(s_1[3])   )  < 3){
return true;
}else{
return false;
}
}

// 영문자검사  대문자/ 소문자/ 숫자
function isCase(input){
var chars1 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var chars2 = "abcdefghijklmnopqrstuvwxyz";
var chars3 = "0123456789";
var chars4 = "'`!@#$%^&*()-=~_+\|,./<>?;:\"[]{}";
return containsChar(input, chars1,chars2,chars3,chars4);
}

function containsChar(input,chars1,chars2,chars3,chars4){
var cnt1 = 0;
var cnt2 = 0;
var cnt3 = 0;
var cnt4 = 0;
for(var inx=0; inx < input.length;inx++){
 if(chars1.indexOf(input.charAt(inx))!= -1){
    cnt1++;
 }
 if(chars2.indexOf(input.charAt(inx))!= -1){
    cnt2++;
 }
 if(chars3.indexOf(input.charAt(inx))!= -1){
    cnt3++;
 }
 if(chars4.indexOf(input.charAt(inx))!= -1){
    cnt4++;
 }
}
return (cnt1+"/"+cnt2+"/"+cnt3+"/"+cnt4);
}

</script>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>

    <div id="svis">
        <div class="inner">
            <h2>회원가입</h2>

            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="fas fa-angle-right"></i>
                </em>
                <span>회원가입</span>
            </div>
        </div>
    </div>

    <div class="container" id="container">
        <div class="inner">
            <div class="page_title">
                <strong>회원가입</strong>
                <p>Join</p>
            </div>
            
            <form action="" method="post" name="joinfrm" id="joinfrm" onsubmit="return subibtn();">
                <input type="hidden" name="_referer_" value="<?=$req['ref']?>">
                <input type="hidden" name="return_url" value="<?=_THIS_URI_?>/login.php">
                <input type="hidden" name="am" value="newData">
                <input type="hidden" name="m_indivi" value="<?=$req['m_indivi']?>">

                <input type="hidden" name="idDuplicateYn" id="idDuplicateYn" value="N">
                <input type="hidden" name="emailDuplicateYn" id="emailDuplicateYn" value="N">
                <input type="hidden" name="m_id_chk" value="">
                <input type="hidden" name="m_email_chk" value="">
                <input type="hidden" name="m_email_chk02" value="">

            <div class="join-step-con">
                <h3 class="join-tit">개인정보처리방침</h3>
                <div class="join-step-inner-con">
                    <div class="join-agreement-con editor">
                        <div><span style="font-size: 13.3333px;">경남금연지원센터이 취급하는 모든 개인정보는 관련법령에 근거하거나 정보주체의 동의에 의하여 수집·보유처리되고 있습니다.</span></div>
                        <div><span style="font-size: 13.3333px;">경남금연지원센터 개인정보처리방침은 [개인정보보호법]에 근거를 두고 있으며, 이러한 법령의 규정에 따라 정보주체의 개인정보를 보호하고 이와 관련한 고충을 신속하고 원활하게 처리할 수 있도록 하기 위하여 다음과 같이 개인정보처리방치을 수립</span><span style="font-size: 13.3333px;">·공개합니다.</span></div>
                        <div><span style="font-size: 13.3333px;">이 개인정보처리방침은 시행일로부터 적용되며, 법령 및 내부 방침에 따른 변경내용의 추가, 삭제 및 정정이 있는 경우에는 변경사항을 이용자가 확인하기 용이하도록 홈페이지를 통하여 고지할 것입니다.</span></div>
                        <div>
                            <p style="font-size: 13.3333px;"><br><br></p>
                            <p style="font-size: 13.3333px;">제1조(개인정보의 처리목적)<br></p>
                            <p style="font-size: 13.3333px;">1. 경남금연지원센터은 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 경우에는 개인정보 보호법 제18조에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다.<br></p>
                            <p style="font-size: 13.3333px;">&nbsp; ① 홈페이지 회원 가입 및 관리<br></p>
                            <p style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp; - 회원 가입의사 확인, 회원제 서비스 제공에 따른 본인 인증, 회원자격 유지<span style="font-size: 13.3333px;">·관리, 제한적 본인확인제 시행에 따른 본인확인, 서비스 부정이용 방지, 각종 고지</span><span style="font-size: 13.3333px;">·통지, 고충처리 등을 목적으로 개인정보를 처리합니다.</span><br></p>
                            <p style="font-size: 13.3333px;">&nbsp; ② 민원사무 처리<br></p>
                            <p style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp; - 민원인의 신원 확인, 민원사항 확인, 사실조사를 위한 연락<span style="font-size: 13.3333px;">·통지, 처리결과 통보 등의 목적으로 개인정보를 처리합니다.</span><br></p>
                            <p style="font-size: 13.3333px;">2. 이 약관에서 사용하는 용어의 정의는 제1항에서 정하는 것을 제외하고는 관계법령 및 서비스별 안내에서 정하는 바에 의합니다.<br></p>
                            <p style="font-size: 13.3333px;"><br><br></p>
                            <p style="font-size: 13.3333px;">제2조(개인정보의 처리 및 보유기간)<br></p>
                            <p style="font-size: 13.3333px;">1. 경남금연지원센터은 법령에 따른 개인정보 보유<span style="font-size: 13.3333px;">·이용기간 또는 정보주체로부터 개인정보를 수집 시에 동의 받은 개인정보 보유</span><span style="font-size: 13.3333px;">·이용기간 내에서 개인정보를 처리</span><span style="font-size: 13.3333px;">·보유합니다.</span><br></p>
                            <p style="font-size: 13.3333px;"><span style="font-size: 13.3333px;">2. 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; ① 홈페이지 회원 가입 및 관리 : 홈페이지 탈퇴 시까지</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp; - 다만, 관계법령 위반에 따른 수사</span><span style="font-size: 13.3333px;">·조사 등이 진행 중인 경우에는 해당 수사</span><span style="font-size: 13.3333px;">·조사 종료 시까지</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; ② 민원사무 처리 : 민원처리 종료 후 3년</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;"><br></span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">제3조(개인정보의 제3자 제공)</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">1. 경남금연지원센터은 정보주체의 개인정보를 제1조(개인정보의 처리 목적)에서 명시한 범위 내에서만 처리하며, 정보주체의 동의, 법률의 특별한 규정 등 개인정보 보호법 제17조에 해당하는 경우에만 개인정보를 제3자에게 제공합니다.</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">2. 경남금연지원센터은 다음과 같이 개인정보를 제3자에게 제공하고 있습니다.</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; - 개인정보를 제공받는 자 : 나이스평가정보(주)</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; - 제공받는 자의 개인정보 이용목적 : 홈페이지 가입 시 본인인증</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; - 제공하는 개인정보 항목 : 성명, 휴대전화번호, 통신사, 생년월일, 성별, 내/외국인</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; - 제공받는 자의 보유</span><span style="font-size: 13.3333px;">·이용기간 : 본인인증 완료시까지</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;"><br></span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">제4조(개인정보 처리 위탁</span><span style="font-size: 13.3333px;">)</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">1. 경남금연지원센터은 원활한 개인정보 업무처리를 위하여 다음과 같이 개인정보 처리업무를 위탁하고 있습니다.</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; ① 위탁받는 자(수탁자) 위탁</span><span style="font-size: 13.3333px;">하는 업무의 내용 : 홈페이지 구축 및 운영</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp; - 업체명 : (주)한커뮤니케이션</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp; - 대표 : 김용진</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp; - 주소 : 서울특별시 구로구 디지털로26길 123, 지플러스코오롱디지털타워 1510호</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp; &nbsp;- 전화번호 : 02-2025-0200</span><br></p>
                            <p style="">&nbsp;&nbsp;② 원사업을 위한&nbsp;센터로부터 임명된 자 : 현장조사, 상담, 컨설팅 등<br></p>
                            <p style="">2. 경남금연지원센터은 위탁 체결 시 개인정보 보호법 제25조에 따라 위탁업무 수행목적 외 개인정보 처리금지, 기술적·관리적 보호조치, 재위탁 제한, 수탁자에 대한 관리·감독, 손해배상 등 책임에 관한 사항을 문서에 명시하고, 수탁자가 개인정보를 안전하게 처리하는지를 감독하고 있습니다.<br></p>
                            <p style="">3. 위탁업무의 내용이나 수탁자가 변경될 경우에는 지체없이 본 개인정보 처리방침을 통하여 공개하도록 하겠습니다.<br></p>
                            <p style=""><br><br></p>
                            <p style="">제5조(정보주체의 권리·의무 및 행사방법)<br></p>
                            <p style="">1. 정보주체는 경남금연지원센터에 대해 언제든지 다음 각 호의 개인정보 보호 관련 권리를 행사할 수 있습니다.<br></p>
                            <p style="">&nbsp;&nbsp;<span style="font-size: 10pt;">① 개인정보 열람요구</span><br></p>
                            <p style=""><span style="font-size: 10pt;">&nbsp; ② 오류 등이 잇을 경우 정정 요구</span><br></p>
                            <p style=""><span style="font-size: 10pt;">&nbsp; ③ 삭제요구</span><br></p>
                            <p style=""><span style="font-size: 10pt;">&nbsp; ④처리정지 요구</span><br></p>
                            <p style=""><span style="font-size: 10pt;">2. 제1항에 따른 권리 행사는 경남금연지원센터에 대해 서면, 전화, 전자우편, 모사전송(FAX)등을 통하여 하실 수 있으며 경남금연지원센터은 이에 대해 지체없이 조치하겠습니다.</span><br></p>
                            <p style="">3. 정보주체가 개인정보의 오류 등에 대한 정정 또는 삭제를 요구한 경우에는 경남금연지원센터은 정정 또는 삭제를 완료할 때까지 당해 개인정보를 이용하거나 제공하지 않습니다.<br></p>
                            <p style="">4. 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.<br></p>
                            <p style="">5. 정보주체는 개인정보 보호법 등 관계법령을 위반하여 경남금연지원센터에서 처리하고 있는 정보주체 본인이나 타인의 개인정보 및 사생활을 침해하여서는 아니됩니다.<br></p>
                            <p style=""><br><br></p>
                            <p style="">제6조(처리하는 개인정보 항목)<br></p>
                            <p style="">1. 경남금연지원센터은 다음의 개인정보 항목을 처리하고 있습니다.<br></p>
                            <p style="">&nbsp; ① 홈페이지 회원 가입 및 관리<br></p>
                            <p style="">&nbsp; &nbsp; &nbsp;- 필수항목 : 성명, 생년월일, 성별, 아이디, 비밀번호, 휴대전화번호, 거주지 주소<br></p>
                            <p style="">&nbsp; &nbsp; &nbsp;- 선택항목 : 전화번호, 이메일주소<br></p>
                            <p style="">&nbsp; ② 민원사무 처리<br></p>
                            <p style="">&nbsp; &nbsp; &nbsp;- 필수항목 : 성명, 전화번호, 주소<br></p>
                            <p style="">&nbsp; &nbsp; &nbsp;- 선택항목 : 이메일주소<br></p>
                            <p style="">&nbsp; ③ 인터넷 서비스 이용과정에서 아래 개인정보 항목이 자동으로 생성되어 수집될 수 있습니다.<br></p>
                            <p style="">&nbsp; &nbsp; &nbsp;- IP주소, 쿠키, MAC주소, 서비스 이용기록, 방문기록, 불량 이용기록 등<br></p>
                            <p style=""><br><br></p>
                            <p style="">제7조(개인정보의 파기)<br></p>
                            <p style="">1. 경남금연지원센터은 개인정보 보유기간의 경과, 처리목적 달성 등 개인정보가 불필요하게 되었을 때에는 지체 없이 해당 개인정보를 파기합니다.<br></p>
                            <p style="">2. 정보주체로부터 동의 받은 개인정보 보유기간이 경과하거나 처리목적이 달성되었음에도 불구하고 다른 법령에 따라 개인정보를 꼐속 보존하여야 하는 경우에는, 해당 개인정보(또는 개인정보파일)을 별도의 데이터베이스(DB)로 옮기거나 보관장소를 달리하여 보존합니다.<br></p>
                            <p style="">3. 개인정보 파기의 절차 및 방법은 다음과 같습니다.<br></p>
                            <p style="">&nbsp;&nbsp;① 파기절차<br></p>
                            <p style="">&nbsp; &nbsp; &nbsp;- 경남금연지원센터은 파기하여야 하는 개인정보(또는 개인정보파일)에 대해 개인정보 파기계획을 수립하여 파기합니다. 경남금연지원센터은 파기 사유가 발생한 개인정보(또는 개인정보파일)을 선정하고, 경남금연지원센터은 개인정보 보호책임자의 승인을 받아 개인정보(또는 개인정보파일)을 파기합니다.<br></p>
                            <p style="">&nbsp; ② 파기방법<br></p>
                            <p style="">&nbsp; &nbsp; &nbsp;- 경남금연지원센터은 저자적 파일 형태로 기록, 저장된 개인정보는 기록을 재생할 수 없도록 로우레밸포멧(Low Level Format)등의 방법을 이요하여 파기하며, 종이 문서에 기록·저장된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.<br></p>
                            <p style=""><br><br></p>
                            <p style="">제8조(개인정보의 안전성 확보조치)<br></p>
                            <p style="">1. 경남금연지원센터은 개인정보의 안전성 확보를 위해 다음과 같은 조치를 취하고있습니다.<br></p>
                            <p style="">&nbsp; ① 관리적 조치<br></p>
                            <p style="">&nbsp; &nbsp; &nbsp;- 내부관리계획 수립·시행, 정기적 직원 교육 등<br></p>
                            <p style="">&nbsp; ② 기술적 조치<br></p>
                            <p style="">&nbsp; &nbsp; &nbsp;- 개인정보처리시스템 등의 접근권한 관리, 접근통제시스템 설치, 보안프로그램 설치<br></p>
                            <p style="">&nbsp; ③ 물리적 조치<br></p>
                            <p style="">&nbsp; &nbsp; &nbsp;- 자료보관실 등의 접근통제<br></p>
                            <p style=""><br><br></p>
                            <p style="">제9조(개인정보 보호책임자)<br></p>
                            <p style="">1. 경남금연지원센터은 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만허리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다<br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; 개인정보 보호책임자 및 담당부서</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp;- 부서명 : 문화도시사무국&nbsp; &nbsp;&nbsp;</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp;- 성명 :&nbsp;</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp;- 직책 :&nbsp;</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp;- 연락처 :&nbsp;</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp;- 이메일 :&nbsp;</span><br></p>
                            <p style=""><span style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp;- 팩스번호 :</span><br></p>
                            <p style="font-size: 13.3333px;"><span style="font-size: 13.3333px;">2. 정보주체께서는 경남금연지원센터 지원센터의 서비스(또는 사업)을 이요하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. 경남금연지원센터은 정보주체의 문의에 대해 지체없이 답변 및 처리해드릴 것입니다.</span><br></p>
                            <p style="font-size: 13.3333px;"><span style="font-size: 13.3333px;"><br></span><br></p>
                            <p style="font-size: 13.3333px;"><span style="font-size: 13.3333px;">제10조(권익침해 구제방법)</span><br></p>
                            <p style="font-size: 13.3333px;"><span style="font-size: 13.3333px;">1. 정보주체는 아래의 기관에 대해 개인정보 침해에 대한 피해구제, 상담 등을 문의하실 수 있습니다. 아래의 기관은 경남금연지원센터과는 별개의 기관으로서, 경남금연지원센터의 자체적인 개인정보 불만처리, 피해구제 결과에 만족하지 못하시거나 보다 자세한 도움이 필요하시면 문의하여 주시기 바랍니다.</span><br></p>
                            <p style="font-size: 13.3333px;"><br>&nbsp; ① 개인정보 침해신고센터 (한국인터넷진흥원 운영)<br></p>
                            <p style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp;- 소관업무 : 개인정보 침해사실 신고, 상담 신청<br></p>
                            <p style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp;- 홈페이지 : privacy.kisa.or.kr<br></p>
                            <p style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp;- 전화 : (국번없이) 118<br></p>
                            <p style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp;- 주소 : (05717) 서울특별시 송파구 중대로 135 한국인터넷진흥원 개인정보침해신고센터<br></p>
                            <p style="font-size: 13.3333px;">&nbsp; ② 개인정보 분쟁조정위원회 (한국인터넷진흥원 운영)<br></p>
                            <p style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp;- 소관업무 : 개인정보 분쟁조정신청, 집단분쟁조정 (민사적 해결)<br></p>
                            <p style="font-size: 13.3333px;">&nbsp; &nbsp; &nbsp;- 홈페이지, 전화, 주소 : 위와 동일<br></p>
                            <p style="font-size: 13.3333px;">&nbsp; ③ 대검찰청 사이버범죄수사단 : 02-3480-3573 (www.spo.go.kr)&nbsp;<br></p>
                            <p style="font-size: 13.3333px;">&nbsp; ④ 경찰청 사이버테러대응센터 : 1566-0112 (www.netan.go.kr)<br></p>
                            <p style="font-size: 13.3333px;"><br><br></p>
                            <p style="font-size: 13.3333px;">제12조(개인정보 처리방침 변경)<br></p>
                            <p style="font-size: 13.3333px;">이 개인정보 처리방침은 2020년 12월부터 적용됩니다.<br></p>
                        </div><br><br>
                    </div>
                    <p class="agree-txt">
                        <span class="custom-check-item">
                            <input type="checkbox" id="agree1" name="agree1">
                            <label for="agree1"><strong>개인정보 수집 및 활용에 동의합니다.</strong></label>
                        </span>
                    </p>
                </div>
            </div>

            
                <h3 class="join-tit">회원정보입력</h3>
                <table class="__tbl-write">
                    <tbody>
                        <tr>
                            <th scope="row">성명</th>
                            <td>
                                <input type="text" class="__form1" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" name="m_name" id="m_name" maxlength="20" placeholder="성함을 입력해주세요.">
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
                                <input type="date" name="m_birth" id="m_birth" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" class="__form1 m_birth">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">휴대폰</th>
                            <td>
                                <input type="tel" name="m_tel" id="m_tel" class="__form1 m_tel" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)" placeholder="전화번호를 입력해주세요." maxlength="11" onkeypress="return checkNumber(event)">
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
                            <th scope="row">E-mail</th>
<!--
                            <td>
                                <div class="email-bu">
                                    <input type="email" title="이메일 아이디 입력" id="cusEmail" name="cusEmail" maxlength="80" class="inp flex" placeholder="이메일">
                                    <select name="cusEmail2" id="cusEmail2" class="cusEmail2 flex" title="이메일 도메인 선택">
                                        <option value>선택</option>
                                        <option value="01">@naver.com</option>
                                        <option value="02">@daum.net</option>
                                        <option value="03">@hanmail.net</option>
                                        <option value="04">@gmail.com</option>
                                        <option value="05">@nate.com</option>
                                    </select>
                                </div>
                            </td>
-->
                            <td>
                            <input type="text" class="__form1" style="width:300px;" name="m_email" id="m_email" onkeyup="checkEmail(this.value);">
								<button type="button" class="__btn1 green" onclick="javascript:regCheckEmail02();">인증번호 받기</button>
								<span class="dib fs_11" id="commentEmail">* 아이디/패스워드찾기 등에 필요한 정보이니 정확하게 기입해 주세요.</span>
							</td>
                        </tr>
                        <tr>
							<th scope="row"><span class="impor">E-mail 인증</span></th>
							<td>
								<input type="text" class="__form1" name="email_chk" id="m_emailchk" onfocus="clOn2(this)" onblur="if(this.value != '') this.className='bbx_w'; else clOff2(this)">
								<button type="button" class="__btn1 gray">인증확인</button>
							</td>
						</tr>
                        <tr>
                            <th scope="row">흡연여부</th>
                            <td>
                                <label><input type="radio" name="smoke" value="Y" checked="checked">흡연</label>
                                <label><input type="radio" name="smoke" value="N">비흡연</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">금연서비스<br class="br2_">신청여부</th>
                            <td>
                                <label><input type="radio" name="agree" value="Y">신청</label>
                                <label><input type="radio" name="agree" value="N" checked="checked">비신청</label>
                                <span class="dib fs_11" id="commentSmokeagree">* 신청자에게는 금연서비스 등록을 위해 연락 예정입니다.</span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">뉴스레터<br class="br2_">신청여부</th>
                            <td>
                                <label><input type="radio" name="news_agree" value="Y">신청</label>
                                <label><input type="radio" name="news_agree" value="N" checked="checked">비신청</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="_btnarea">
                    <div class="_btn">
                        <button type="submit" style="cursor:pointer;" class="_btn4">회원가입</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

<script type="text/javascript">
    function subibtn() {
        var f = document.joinfrm;
        
        if(!f.agree1.checked){
            alert('개인정보 수집 및 활용에 동의하셔야 합니다.');
            return false;
        }
        if ($("input[name=m_name]").val() == "") {
            alert("성함을 입력해주세요.");
            $("input[name=m_name]").focus();
            return false;
        }
        if ($("input[name=m_birth]").val() == "") {
            alert("생년월일을 선택해주세요.");
            $("input[name=m_birth]").focus();
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
        if ($("input[name=m_email]").val() == "") {
            alert("이메일을 입력해주세요.");
            $("input[name=m_email]").focus();
            return false;
        }
        // if ($("input[name=email_chk]").val() == "") {
        //     alert("이메일을 인증을해주세요.");
        //     $("input[name=email_chk]").focus();
        //     return false;
        // }
        if( $.trim($("#emailDuplicateYn").val()) != 'Y' ){
			alert("이메일 중복확인이 되지 않았습니다.");
			$("#m_email").select();
			return false;
		}

        if( $("input[name=m_email_chk]").val() != "2"  ){
			alert("이메일 [가입확인 및 인증번호받기] 버튼을 클릭하세요.");
			return false;
		}
		if( $("input[name=m_email_chk02]").val() != "2"  ){
			alert("이메일인증 [인증확인] 버튼을 클릭하세요.");
			return false;
		}
		  return true;
    }
    

</script>

</html>
