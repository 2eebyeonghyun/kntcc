<div class="forminfo">
    <p>담배를 끊기 어려운 이유는 니코틴에 이미 중독되었기 때문입니다.<br>흡연기간과 흡연량에 따라 정도의 차이는 있겠지만, 다음 평가로 니코틴 의존 정도를 점검해 보세요.</p>
</div>

<form action="sub1_list1_result.php" method="post" name="autofrm" id="autofrm">
    <p class="autosign_">* 전체 질문에 답변을 체크해주셔야 결과를 확인하실 수 있습니다.</p>

    <table class="autotable_">
        <caption style="overflow:hidden; width:0px; height:0px; font-size:0px;">
            <strong>자가진단 테이블</strong>
            <p>자가진단 평가 질문에 대한 응답선택을 할 수 있습니다.</p>
        </caption>
        <colgroup>
            <col>
            <col class="col2_">
        </colgroup>
        <thead>
            <th scope="col">질문</th>
            <th scope="col">선택</th>
        </thead>
        <tbody>
            <tr>
                <td class="subj">1. 하루에 보통 몇 개비나 피우십니까?</td>
                <td class="subj">
                    <ul class="align">
                        <li>
                            <input type="radio" name="auto_1" id="auto_1_1" value="0">
                            <label for="auto_1_1">10개비 이하</label>
                        </li>
                        <li>
                            <input type="radio" name="auto_1" id="auto_1_2" value="1">
                            <label for="auto_1_2">11 ~ 20개비</label>
                        </li>
                        <li>
                            <input type="radio" name="auto_1" id="auto_1_3" value="2">
                            <label for="auto_1_3">21 ~ 30개비</label>
                        </li>
                        <li>
                            <input type="radio" name="auto_1" id="auto_1_4" value="3">
                            <label for="auto_1_4">31개비 이상</label>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="subj">2. 아침에 일어나서 얼마 만에 첫 담배를 피우십니까?</td>
                <td class="subj">
                    <ul class="align">
                        <li>
                            <input type="radio" name="auto_2" id="auto_2_1" value="3">
                            <label for="auto_2_1">5분 이내</label>
                        </li>
                        <li>
                            <input type="radio" name="auto_2" id="auto_2_2" value="2">
                            <label for="auto_2_2">6분 ~ 30분 사이</label>
                        </li>
                        <li>
                            <input type="radio" name="auto_2" id="auto_2_3" value="1">
                            <label for="auto_2_3">31분 ~ 1시간 사이</label>
                        </li>
                        <li>
                            <input type="radio" name="auto_2" id="auto_2_4" value="0">
                            <label for="auto_2_4">1시간 이후</label>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="subj">3. 금연구역(도서관, 극장, 병원 등)에서 담배를 참기가 어렵습니까?</td>
                <td class="subj">
                    <ul class="align">
                        <li>
                            <input type="radio" name="auto_3" id="auto_3_1" value="1">
                            <label for="auto_3_1">예</label>
                        </li>
                        <li>
                            <input type="radio" name="auto_3" id="auto_3_2" value="0">
                            <label for="auto_3_2">아니요</label>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="subj">4. 하루 중 담배 맛이 가장 좋을 때는 언제입니까?</td>
                <td class="subj">
                    <ul class="align">
                        <li>
                            <input type="radio" name="auto_4" id="auto_4_1" value="1">
                            <label for="auto_4_1">아침 첫 담배</label>
                        </li>
                        <li>
                            <input type="radio" name="auto_4" id="auto_4_2" value="0">
                            <label for="auto_4_2">그 외의 담배</label>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="subj">5. 오후와 저녁시간보다 오전 중에 담배를 더 자주 피우십니까?</td>
                <td class="subj">
                    <ul class="align">
                        <li>
                            <input type="radio" name="auto_5" id="auto_5_1" value="1">
                            <label for="auto_5_1">예</label>
                        </li>
                        <li>
                            <input type="radio" name="auto_5" id="auto_5_2" value="0">
                            <label for="auto_5_2">아니요</label>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="subj">6. 몸이 아파 하루 종일 누워있을 때에도 담배를 피우십니까?</td>
                <td class="subj">
                    <ul class="align">
                        <li>
                            <input type="radio" name="auto_6" id="auto_6_1" value="1">
                            <label for="auto_6_1">예</label>
                        </li>
                        <li>
                            <input type="radio" name="auto_6" id="auto_6_2" value="0">
                            <label for="auto_6_2">아니요</label>
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</form>

<div class="auto_4btn">
    <a href="javascript:rq_submit()" name="btnResult" id="btnResult" class="btnResult">제출하기</a>
</div>

<script type="text/javascript">
    function rq_submit() {

        var cnt = $("input[name*=auto]:checked").length;

        if (cnt == 6) {
            $("#autofrm").submit();
        } else {

            var auto_num = 0;

            for (var i = 1; i < 7; i++) {
                if (!$("input[name=auto_" + i + "]").is(":checked")) {
                    auto_num = i;
                    break;
                }
            }

            alert(auto_num + "번 문항에 대한 답변을 선택해 주세요");
            return false;
        }
    }

</script>
