<div class="forminfo">
    <p>모두 동일한 담배를 피우고 있기는 하지만 담배를 피워서 얻고자 하는 효과는 흡연자마다 다릅니다.<br>지금 당신이 담배를 피우고 있는 이유는 무엇일까요? 나도 모르고 있는 나의 흡연습관을 다음의 평가를 통해서 알려드립니다.<br>다음 질문에 답한 후 A~G의 그룹별로 점수를 합산합니다.<br>각 항목 중 총점이 10점 이상인 그룹이 내가 해당하는 흡연유형이므로 어떤 습관과 유형을 가지는지 알아봅시다.</p>
</div>

<form action="sub1_list2_result.php" method="post" name="autofrm2" id="autofrm2">
    <p class="autosign_">* 전체 질문에 답변을 체크해주셔야 결과를 확인하실 수 있습니다.</p>

    <table class="autotable autotable2_">
        <caption style="overflow:hidden; width:0px; height:0px; font-size:0px;">
            <strong>자가진단 테이블</strong>
            <p>자가진단 평가 질문에 대한 응답선택을 할 수 있습니다.</p>
        </caption>
        <colgroup>
            <col style="width:8%;">
            <col class="subjectt_">
            <col style="width:10%;">
            <col style="width:10%;">
            <col style="width:10%;">
            <col style="width:10%;">
            <col style="width:10%;">
        </colgroup>
        <thead>
            <tr>
                <th scope="col" rowspan="2">흡연유형</th>
                <th scope="col" rowspan="2">질문</th>
                <th scope="col">매우<br>그렇지<br>않다</th>
                <th scope="col">그렇지<br>않다</th>
                <th scope="col">보통이다</th>
                <th scope="col">그렇다</th>
                <th scope="col">매우<br>그렇다</th>
            </tr>
            <tr>
                <th scope="col">1점</th>
                <th scope="col">2점</th>
                <th scope="col">3점</th>
                <th scope="col">4점</th>
                <th scope="col">5점</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <th rowspan="3">A</th>
                <td class="left">마음이 조급할 때 여유를 가지기 위해 피운다.</td>
                <td><input type="radio" name="smoke_style_1" id="smoke_style_1_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_1" id="smoke_style_1_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_1" id="smoke_style_1_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_1" id="smoke_style_1_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_1" id="smoke_style_1_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">능률을 높이기 위해 피운다.</td>
                <td><input type="radio" name="smoke_style_2" id="smoke_style_2_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_2" id="smoke_style_2_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_2" id="smoke_style_2_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_2" id="smoke_style_2_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_2" id="smoke_style_2_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">기분전환을 하려고 피운다.</td>
                <td><input type="radio" name="smoke_style_3" id="smoke_style_3_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_3" id="smoke_style_3_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_3" id="smoke_style_3_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_3" id="smoke_style_3_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_3" id="smoke_style_3_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>

            <tr>
                <th rowspan="3">B</th>
                <td class="left">담배, 라이터, 성냥 등을 만지작거리는 버릇이 있다.</td>
                <td><input type="radio" name="smoke_style_4" id="smoke_style_4_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_4" id="smoke_style_4_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_4" id="smoke_style_4_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_4" id="smoke_style_4_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_4" id="smoke_style_4_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">담배를 꺼내 불을 붙이고 연기를 들여마셨다가 내뿜고 재떨이에 비벼 끄는 과정 자체가 좋다.</td>
                <td><input type="radio" name="smoke_style_5" id="smoke_style_5_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_5" id="smoke_style_5_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_5" id="smoke_style_5_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_5" id="smoke_style_5_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_5" id="smoke_style_5_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">담배 연기로 모양을 만드는 것을 좋아한다.</td>
                <td><input type="radio" name="smoke_style_6" id="smoke_style_6_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_6" id="smoke_style_6_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_6" id="smoke_style_6_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_6" id="smoke_style_6_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_6" id="smoke_style_6_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <th rowspan="3">C</th>
                <td class="left">담배를 피우면 마음이 가라앉는다.</td>
                <td><input type="radio" name="smoke_style_7" id="smoke_style_7_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_7" id="smoke_style_7_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_7" id="smoke_style_7_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_7" id="smoke_style_7_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_7" id="smoke_style_7_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">담배 연기를 내뿜으면 나른한 행복감을 느낄 수 있다.</td>
                <td><input type="radio" name="smoke_style_8" id="smoke_style_8_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_8" id="smoke_style_8_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_8" id="smoke_style_8_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_8" id="smoke_style_8_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_8" id="smoke_style_8_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">마음이 편안할 때면 담배 생각이 더 난다.</td>
                <td><input type="radio" name="smoke_style_9" id="smoke_style_9_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_9" id="smoke_style_9_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_9" id="smoke_style_9_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_9" id="smoke_style_9_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_9" id="smoke_style_9_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <th rowspan="3">D</th>
                <td class="left">흥분하거나 화가 났을 때 담배를 찾게 된다.</td>
                <td><input type="radio" name="smoke_style_10" id="smoke_style_10_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_10" id="smoke_style_10_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_10" id="smoke_style_10_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_10" id="smoke_style_10_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_10" id="smoke_style_10_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">불안하고 긴장되면 담배를 피우게 된다.</td>
                <td><input type="radio" name="smoke_style_11" id="smoke_style_11_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_11" id="smoke_style_11_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_11" id="smoke_style_11_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_11" id="smoke_style_11_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_11" id="smoke_style_11_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">마음이 울적하거나 걱정거리가 있을 때 담배를 피운다.</td>
                <td><input type="radio" name="smoke_style_12" id="smoke_style_12_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_12" id="smoke_style_12_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_12" id="smoke_style_12_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_12" id="smoke_style_12_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_12" id="smoke_style_12_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <th rowspan="3">E</th>
                <td class="left">담배가 떨어지면 안절부절못한다.</td>
                <td><input type="radio" name="smoke_style_13" id="smoke_style_13_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_13" id="smoke_style_13_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_13" id="smoke_style_13_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_13" id="smoke_style_13_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_13" id="smoke_style_13_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">아무리 바빠도 담배를 거르면 마음 한구석에 담배 생각이 난다.</td>
                <td><input type="radio" name="smoke_style_14" id="smoke_style_14_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_14" id="smoke_style_14_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_14" id="smoke_style_14_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_14" id="smoke_style_14_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_14" id="smoke_style_14_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">오랫동안 안 피우다가 한 대 피우면 그 순간 불안했던 마음이 사라진다.</td>
                <td><input type="radio" name="smoke_style_15" id="smoke_style_15_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_15" id="smoke_style_15_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_15" id="smoke_style_15_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_15" id="smoke_style_15_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_15" id="smoke_style_15_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <th rowspan="3">F</th>
                <td class="left">자신도 모르는 사이에 담배를 물고 있는 것을 발견하곤 한다.</td>
                <td><input type="radio" name="smoke_style_16" id="smoke_style_16_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_16" id="smoke_style_16_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_16" id="smoke_style_16_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_16" id="smoke_style_16_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_16" id="smoke_style_16_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">특정한 장소(화장실 등)에서는 담배가 당기지 않는데도 흡연하게 된다.</td>
                <td><input type="radio" name="smoke_style_17" id="smoke_style_17_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_17" id="smoke_style_17_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_17" id="smoke_style_17_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_17" id="smoke_style_17_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_17" id="smoke_style_17_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">특정한 상황(식사 후 등)에서는 담배가 당기지 않는데도 흡연하게 된다.</td>
                <td><input type="radio" name="smoke_style_18" id="smoke_style_18_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_18" id="smoke_style_18_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_18" id="smoke_style_18_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_18" id="smoke_style_18_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_18" id="smoke_style_18_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <th rowspan="3">G</th>
                <td class="left">주위 사람들이 흡연하면 나도 담배를 피운다.</td>
                <td><input type="radio" name="smoke_style_19" id="smoke_style_19_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_19" id="smoke_style_19_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_19" id="smoke_style_19_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_19" id="smoke_style_19_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_19" id="smoke_style_19_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">동료/친구들과 함께 흥겨운 시간을 보낼때 흡연하게 된다.</td>
                <td><input type="radio" name="smoke_style_20" id="smoke_style_20_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_20" id="smoke_style_20_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_20" id="smoke_style_20_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_20" id="smoke_style_20_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_20" id="smoke_style_20_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
            <tr>
                <td class="left">나는 친구들과 회식이나 모임을 할 때 항상 흡연한다.</td>
                <td><input type="radio" name="smoke_style_21" id="smoke_style_21_1" value="1" title="매우 그렇지 않다(1점)"></td>
                <td><input type="radio" name="smoke_style_21" id="smoke_style_21_2" value="2" title="그렇지 않다(2점)"></td>
                <td><input type="radio" name="smoke_style_21" id="smoke_style_21_3" value="3" title="보통이다(3점)"></td>
                <td><input type="radio" name="smoke_style_21" id="smoke_style_21_4" value="4" title="그렇다(4점)"></td>
                <td><input type="radio" name="smoke_style_21" id="smoke_style_21_5" value="5" title="매우 그렇다(5점)"></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="auto_4btn">
    <a href="javascript:rq_submit2()" name="btnResult" id="btnResult" class="btnResult">제출하기</a>
</div>

<script type="text/javascript">
    function rq_submit2() {

        var cnt = $("input[name*=smoke_style]:checked").length;

        if (cnt == 21) {
            $("#autofrm2").submit();
        } else {

            var smoke_style_num = 0;

            for (var i = 1; i < 22; i++) {
                if (!$("input[name=smoke_style_" + i + "]").is(":checked")) {
                    smoke_style_num = i;
                    break;
                }
            }

            alert(smoke_style_num + "번 문항에 대한 답변을 선택해 주세요");
            return false;
        }
    }

</script>