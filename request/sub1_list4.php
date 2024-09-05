                            <div class="forminfo">
                                <p>흡연으로 인한 나의 경제적 손실은 얼마나 될까요?<br>1년간 경비와 총 비용을 계산해 드립니다.</p>
                            </div>
                            
                            <form action="sub1_list4.php" method="post" name="autofrm4" id="autofrm4">
                                <table class="autotable autotable4_">
                                    <colgroup>
                                        <col style="width:33%">
                                        <col>
                                        <col style="width:33%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th scope="col"><label for="smokeCnt1">하루에 피우는 담배 갯수</label></th>
                                            <th scope="col"><label for="smokeMoney1">피우는 담배 가격(1갑당)</label></th>
                                            <th scope="col"><label for="smokeYear1">현재까지 흡연한 년수</label></th>
                                        </tr>
                                    </thead>
                                    <tbody id="test_line">
                                        <tr>
                                            <td class="center"><input type="text" id="smokeCnt1" class="smokeCnt" name="smokeCnt" value=""> 개비</td>
                                            <td class="center"><input type="text" id="smokeMoney1" class="smokeMoney" name="smokeMoney" value=""> 원</td>
                                            <td class="center"><input type="text" id="smokeYear1" class="smokeYear" name="smokeYear" value=""> 년</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>

                            <div class="auto_4btn">
                                <a href="javascript:frmcheck()" name="btnResult" id="btnResult" class="btnResult">계산하기</a>
                            </div>

                            <div class="answer" id="answer">
                                <div class="answerbox_">
                                    <div class="resultimgbox">
                                        <div>
                                            <img src="<?=lbh?>/img/request/req1.png" alt="흡연에 따른 1년간 경비">
                                            <p>흡연에 따른 1년간 경비
                                                <span>
                                                    <strong class="loss"></strong>&nbsp;원
                                                </span>
                                            </p>
                                        </div>
                                        <div>
                                            <img src="<?=lbh?>/img/request/req2.png" alt="현재까지의 경비 합계">
                                            <p>현재까지의 경비 합계
                                                <span>
                                                    <strong class="tot"></strong>&nbsp;원
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="answertxt1">
                                        <strong>당신 현재까지 피운 담배의 금액입니다.</strong>이 금액은 단순히 담뱃 값만 나온것이므로 계산에 포함되어 있지 않은 금액은 따로 있습니다.
                                    </p>

                                    <h3 class="answerh3">계산에 포함되어 있지 않은 금액 리스트</h3>
                                    <ul class="answertxt2">
                                        <li>1. 담배와 관련된 병으로 인해 하지 못한 일들</li>
                                        <li>2. 담배로 인한 치과 치료, 약값, 병원비</li>
                                        <li>3. 내가 피었던 담배 냄새로 인한 세탁비</li>
                                        <li>4. 라이터와 흡연 비품에 대한 비용</li>
                                        <li>5. 담배를 사러 나가는 비용</li>
                                        <li>6. 나로 인한 주변 사람들의 피해 비용</li>
                                        <li>7. 의류와 가구, 장판, 벽지, 카펫 등을 태운 비용</li>
                                    </ul>
                                </div>
                            </div>


                            <script type="text/javascript">
                                function frmcheck() {
                                    if ($("input[name=smokeCnt]").val() == "") {
                                        alert("하루에 피우는 담배 갯수를 입력하세요.");
                                        $("input[name=smokeCnt]").focus();
                                        return;
                                    }
                                    if ($("input[name=smokeMoney]").val() == "") {
                                        alert("피우는 담배 가격(1갑당)를 입력하세요.");
                                        $("input[name=smokeMoney]").focus();
                                        return;
                                    }
                                    if ($("input[name=smokeYear]").val() == "") {
                                        alert("현재까지 흡연한 년수를 입력하세요.");
                                        $("input[name=smokeYear]").focus();
                                        return;
                                    }
                                    
                                    function Commas(num) { 
                                          var parts = num.toString().split("."); 
                                          return parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (parts[1] ? "." + parts[1] : ""); 
                                    }
                                                                        
                                    var count = $("input[name=smokeCnt]").val();
                                    var money = $("input[name=smokeMoney]").val();
                                    var year = $("input[name=smokeYear]").val();
                                    var loss = count * (money/20) * 365 ;
                                    var tot = loss * year ;
                                    
                                    var tmpNum = Commas(loss);
                                    var tmpNum2 = Commas(tot);
                                    
                                    
                                    $('.loss').text(tmpNum);
                                    $('.tot').text(tmpNum2);
                                    return false;
                                    
                                }

                            </script>
