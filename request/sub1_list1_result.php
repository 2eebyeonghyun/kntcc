<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<? 
    $sum = $_POST['auto_1'] + $_POST['auto_2'] + $_POST['auto_3'] + $_POST['auto_4'] + $_POST['auto_5'] +$_POST['auto_6'];
?>
<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>

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

            <div class="resultbox_">
            <? if($sum>=0 && $sum<4){ ?>
                <div class="Reqresult_ lowresult">
                    <h3 class="adj_h"><span>평가결과</span></h3>
                    <table class="resultT_ lowresultT_">
                        <tbody>
                            <tr>
                                <td class="Thead">낮은 의존도</td>
                            </tr>
                            <tr>
                                <td class="Tbody">
                                    <p>
                                        현재 니코틴 의존도가 아주 낮은 수준입니다.<br>
                                        니코틴 의존도는 흡연량이 많아지거나 흡연한 시간이 길면 길수록 더 높아지게 되어 있습니다.<br>
                                        ‘지금은 좀 피우고 나중에 완전 끊어야지’, ‘나는 하루에 얼마 피지 않으니깐 괜찮아’라고 생각할 수 있는데,<br>
                                        이렇게 지속적으로 늘리다보면 나중에 완전 금연하는 것이 지금보다 훨씬 더 힘들 것입니다.<br>
                                        그래서 가장 쉽게 금연할 수 있는 때가 바로 지금입니다.<br>
                                        점점 니코틴 의존도가 늘어가기 전에 지금 바로 완전 금연하세요!
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <? } else if($sum>=4 && $sum<7){ ?>
                <div class="Reqresult_ midresult">
                    <h3 class="adj_h"><span>평가결과</span></h3>
                    <table class="resultT_ midresultT_">
                        <tbody>
                            <tr>
                                <td class="Thead">중간 의존도</td>
                            </tr>
                            <tr>
                                <td class="Tbody">
                                    <p>
                                        현재 니코틴 중독으로 인한 구체적인 증상은 나타나지 않습니다.<br>
                                        아직은 큰 고통 없이 담배를 끊을 수 있으리라 생각됩니다.<br>
                                        대신 쉽게 다시 담배를 피우게 되어 결국 금연에 실패하는 경우도 많겠습니다.<br>
                                        장기간 담배를 피우다 보면 누구라도 심리적, 신체적 의존을 일으키게 됩니다. 일단 의존에 빠지게 되면 자신을 조절하기 힘들어지므로 담배를 끊는 것은 쉽지 않은 일이 되어 버립니다.<br>
                                        잠재적인 중독의 위험성과 건강에 해가 된다는 점을 생각하면 지금이 바로 금연을 시작해야 할 시기인 것입니다.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <? } else { ?>
                <div class="Reqresult_ highresult">
                    <h3 class="adj_h"><span>평가결과</span></h3>
                    <table class="resultT_ highresultT_">
                        <tbody>
                            <tr>
                                <td class="Thead">높은 의존도</td>
                            </tr>
                            <tr>
                                <td class="Tbody">
                                    <p>
                                        정도의 차이는 있겠으나 심리적, 신체적으로 니코틴에 대한 의존이 생긴 상태입니다.<br>
                                        니코틴은 뇌에 흡수되어 여러 가지 약리 작용을 일으키는 물질입니다.<br>
                                        하지만, 신경에 작용하는 약물 중에는 중독을 일으키기 쉬운 것들이 있으며,<br>
                                        니코틴도 예외는 아닙니다. 니코틴이 몸에서 빠져나가 혈중 농도가 떨어지면 금단증상을 경험하게 됩니다.<br>
                                        ‘한 대만 피웠으면…’ 하는 조바심도 금단 증상의 한 모습일 뿐입니다.<br>
                                        담배를 끊기 어려운 이유는 이처럼 금단증상과 내 마음이 뒤섞여 버려 생활의 일부가 되어버리기 때문입니다.<br>
                                        갑자기 담배를 중단하면, 금단증상으로 금연을 지속하기 어려워질 수 있으므로,<br>
                                        니코틴 패치 등을 적절히 사용하는 것이 도움이 됩니다.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <? } ?>


            <div class="_btnarea" style="margin:30px 0;">
                <div class="_btn">
                    <a href="javascript:history.back();" class="_btn3">목록</a>
                </div>
            </div>
        </div>
    </div>
    
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

</html>
