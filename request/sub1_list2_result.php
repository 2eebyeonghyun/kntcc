<?php 
include_once '../inc/pub_config.php';
include '../inc/common.php'; 

    $smoke_style_1 = $_POST['smoke_style_1'];
    $smoke_style_2 = $_POST['smoke_style_2'];
    $smoke_style_3 = $_POST['smoke_style_3'];
    $smoke_style_4 = $_POST['smoke_style_4'];
    $smoke_style_5 = $_POST['smoke_style_5'];
    $smoke_style_6 = $_POST['smoke_style_6'];
    $smoke_style_7 = $_POST['smoke_style_7'];
    $smoke_style_8 = $_POST['smoke_style_8'];
    $smoke_style_9 = $_POST['smoke_style_9'];
    $smoke_style_10 = $_POST['smoke_style_10'];
    $smoke_style_11 = $_POST['smoke_style_11'];
    $smoke_style_12 = $_POST['smoke_style_12'];
    $smoke_style_13 = $_POST['smoke_style_13'];
    $smoke_style_14 = $_POST['smoke_style_14'];
    $smoke_style_15 = $_POST['smoke_style_15'];
    $smoke_style_16 = $_POST['smoke_style_16'];
    $smoke_style_17 = $_POST['smoke_style_17'];
    $smoke_style_18 = $_POST['smoke_style_18'];
    $smoke_style_19 = $_POST['smoke_style_19'];
    $smoke_style_20 = $_POST['smoke_style_20'];
    $smoke_style_21 = $_POST['smoke_style_21'];

    $smokeA = $smoke_style_1 + $smoke_style_2 + $smoke_style_3;
    $smokeB = $smoke_style_4 + $smoke_style_5 + $smoke_style_6;
    $smokeC = $smoke_style_7 + $smoke_style_8 + $smoke_style_9;
    $smokeD = $smoke_style_10 + $smoke_style_11 + $smoke_style_12;
    $smokeE = $smoke_style_13 + $smoke_style_14 + $smoke_style_15;
    $smokeF = $smoke_style_16 + $smoke_style_17 + $smoke_style_18;
    $smokeG = $smoke_style_19 + $smoke_style_20 + $smoke_style_21;
    
?>
<body>
    <?php include '../inc/head.php'; ?>

    <div id="svis" style="background:url(../img/request/svis.png)no-repeat center/cover;">
        <div class="inner">
            <h2>금연상담신청</h2>
            <ul class="snb">
                <li class="active"><a href="../request/sub1.php">자가진단</a></li>
                <li class=""><a href="../request/sub2.php">찾아가는 금연지원서비스 신청</a></li>
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
                <span>자가진단</span>
            </div>
        </div>
    </div>

    <div class="container" id="container">
        <div class="inner">
            <div class="page_title">
                <strong>자가진단</strong>
                <p>Autodiagnosis</p>
            </div>

            <h3 class="adj_h"><span>평가 결과</span></h3>

            <div class="resultbox_">
                <? if($smokeA >= 10){ ?>
                    <div class="Reqresult_ Aresult_">
                        <table class="resultT_ AresultT_">
                            <tbody>
                                <tr>
                                    <td class="Thead">A유형 : 자극 추구형</td>
                                </tr>
                                <tr>
                                    <td class="Tbody">
                                        <p>
                                            니코틴이 중추신경을 자극하는 효과 때문에 담배를 피우는 유형이다. 담배를 정신집중, 창의력, 근무의욕을 높이는 자극제로 이용하는 경우이다.
                                            이렇게 금연하세요!
                                            담배를 얻었던 자극을 대신할 수 있는 활동을 찾는 것이 중요하다. 담배를 피우고 싶을 때 담배를 꺼내 무는 대신 간단한 체조, 운동, 샤워 등으로 정신집중, 기분 전환을 할 수 있다.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <? } ?>
                <? if($smokeB >= 10){ ?>
                    <div class="Reqresult_ Bresult_">
                        <table class="resultT_ BresultT_">
                            <tbody>
                                <tr>
                                    <td class="Thead">B유형 : 담배 없이는 무료한 형</td>
                                </tr>
                                <tr>
                                    <td class="Tbody">
                                        <p>
                                            손에 무엇인가 있어야 만족하는 유형이다. 흡연 역시 지루함을 잊게 해주는 역할을 한다.
                                            이렇게 금연하세요!
                                            담배 대신 작고 귀여운 물건을 손에 들고 다니는 것도 좋은 선택이다. 손이 심심하면 연필이나 볼펜, 작은 돌, 동전, 뜨개질 등도 훌륭한 대역이 될 수 있다. 입이 심심하면 껌, 사탕 등을 적극 활용한다.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <? } ?>
                <? if($smokeC >= 10){ ?>
                    <div class="Reqresult_ Cresult_">
                        <table class="resultT_ CresultT_">
                            <tbody>
                                <tr>
                                    <td class="Thead">C유형 : 편안/즐거움 추구형</td>
                                </tr>
                                <tr>
                                    <td class="Tbody">
                                        <p>
                                            담배를 피우면 마음이 차분해지는 느낌을 받는 유형이다. 차분할 때에도 담배를 피우면 차분함을 더욱 즐길 수 있기 때문에 피우기도 한다.
                                            이렇게 금연하세요!
                                            다른 유형에 비하면 큰 어려움 없이 담배를 끊을 수 있는 편이다. 차분한 마음을 분명히 느끼기 위해서는 오리려 자극을 주는 운동이나 체조를 규칙적으로 하는 것이 효과적이다. 영상이나 심호흡 등 흡연 이외의 방법으로도 차분함을 느낄 수 있음을 경험하는 것이 중요하다.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <? } ?>
                <? if($smokeD >= 10){ ?>
                    <div class="Reqresult_ Dresult_">
                        <table class="resultT_ DresultT_">
                            <tbody>
                                <tr>
                                    <td class="Thead">D유형 : 스트레스 해소형</td>
                                </tr>
                                <tr>
                                    <td class="Tbody">
                                        <p>
                                            담배를 신경안정제로 이용하는 유형, 큰 문제가 없을 때에는 담배를 끊을 수 있지만, 다시 정신적인 스트레스 상황에 노출되면 쉽게 흡연하는 편이다. 그래도 일단 끊는데 성공하면 금연의 고통을 알기 때문에 다시 담배를 피우지 않는 경향이 있다.
                                            이렇게 금연하세요!
                                            이 유형에 속하는 사람들은 모든 문제가 해결되고 큰 문제가 없을 때는 쉽게 담배를 끊게 된다. 그러나 다시 정신적인 스트레스를 받게 되는 경우 쉽게 재발하는 경향이 있다. 이런 사람들은 몸에 유익한 운동이나 다른 사회활동 등으로 스트레스를 줄여나갈 수 있다. 물론 가장 좋은 방법은 스트레스를 피하는 것이나 그럴 수 없을 때에는 이를 긍정적으로 인식하도록 노력하는 것이다.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <? } ?>
                <? if($smokeE >= 10){ ?>
                    <div class="Reqresult_ Eresult_">
                        <table class="resultT_ EresultT_">
                            <tbody>
                                <tr>
                                    <td class="Thead">E유형 : 의존형</td>
                                </tr>
                                <tr>
                                    <td class="Tbody">
                                        <p>
                                            담배 끊기가 제일 어려운 유형이다. 이 사람들은 담배를 다 피우고 막 끊자마자 또 담배를 피우고 싶은 생각이 간절해진다. 대부분 니코틴의 금단 증상을 시하게 겪게 되는 사람이다. 그래도 일단 끊는데 성공하면 금연의 고통을 알기 때문에 다시 담배를 피우지 않는 경향이 있다.
                                            이렇게 금연하세요!
                                            금단증상을 어떻게 견디는가가 가장 중요하다. 신체적인 금단증상 뿐 아니라 심리적인 금단증상에도 대처해야 한다. 금단증상이 심할 때에는 무조건 참지 말고 니코틴 패치 등 금단증상을 줄일 수 있는 방법을 적극적으로 사용하는 것이 바람직하다.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <? } ?>
                <? if($smokeF >= 10){ ?>
                    <div class="Reqresult_ Fresult_">
                        <table class="resultT_ FresultT_">
                            <tbody>
                                <tr>
                                    <td class="Thead">F유형 : 습관형</td>
                                </tr>
                                <tr>
                                    <td class="Tbody">
                                        <p>
                                            단지 늘 담배를 피워왔기 때문에 피우게 되는 유형이다. 이런 유형에 속하는 사람들은 담배로부터 얻는 것은 아무것도 없다고 할 수 있다. 자신이 담배를 피우는지 의식하지 못하는 사이에 버릇처럼 담배를 피우는 셈이다.
                                            이렇게 금연하세요!
                                            이런 유형의 사람들은 하루에 피우는 담배의 양을 줄여 가는 방법으로도 효과를 볼 수 있다. 가장 효과적인 방법은 담배 보관 장소를 바꾸거나(앞주머니에서 뒷주머니)로 흡연일지를 기록하여 흡연 과정을 의식화 시켜 보는 것이다.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <? } ?>
                <? if($smokeG >= 10){ ?>
                    <div class="Reqresult_ Gresult_">
                        <table class="resultT_ GresultT_">
                            <tbody>
                                <tr>
                                    <td class="Thead">G유형 : 사회성 추구형</td>
                                </tr>
                                <tr>
                                    <td class="Tbody">
                                        <p>
                                            타인이 담배를 권하거나 흡연하면 당신도 담배를 피우는 유형이다.
                                            이렇게 금연하세요!
                                            금연한다는 것을 다른 사람들에게 알리는 것이 중요하다. 가급적 흡연을 유혹/자극 하는 모임은 피하는 것이 좋다.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <? } ?>
            </div>

            <div class="_btnarea" style="margin:30px 0;">
                <div class="_btn">
                    <a href="javascript:history.back();" class="_btn3">목록</a>
                </div>
            </div>
        </div>
        <?php include '../inc/footer.php'; ?>
    </div>
</body>

</html>
