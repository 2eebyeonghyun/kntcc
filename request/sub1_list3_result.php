<?php 
include_once '../inc/pub_config.php';
include '../inc/common.php'; ?>

<? 
    $smoke_sense_1 = $_POST['smoke_sense_1'];
    $smoke_sense_2 = $_POST['smoke_sense_2'];
    $smoke_sense_3 = $_POST['smoke_sense_3'];
    $smoke_sense_4 = $_POST['smoke_sense_4'];
    $smoke_sense_5 = $_POST['smoke_sense_5'];
    $smoke_sense_6 = $_POST['smoke_sense_6'];
    $smoke_sense_7 = $_POST['smoke_sense_7'];
    $smoke_sense_8 = $_POST['smoke_sense_8'];
    $smoke_sense_9 = $_POST['smoke_sense_9'];
    $smoke_sense_10 = $_POST['smoke_sense_10'];
    $smoke_sense_11 = $_POST['smoke_sense_11'];
    $smoke_sense_12 = $_POST['smoke_sense_12'];
    $smoke_sense_13 = $_POST['smoke_sense_13'];
    $smoke_sense_14 = $_POST['smoke_sense_14'];
    $smoke_sense_15 = $_POST['smoke_sense_15'];
    $smoke_sense_16 = $_POST['smoke_sense_16'];
    $smoke_sense_17 = $_POST['smoke_sense_17'];
    $smoke_sense_18 = $_POST['smoke_sense_18'];
    $smoke_sense_19 = $_POST['smoke_sense_19'];
    $smoke_sense_20 = $_POST['smoke_sense_20'];
    $smoke_sense_21 = $_POST['smoke_sense_21'];
    $smoke_sense_22 = $_POST['smoke_sense_22'];
    $smoke_sense_23 = $_POST['smoke_sense_23'];
    $smoke_sense_24 = $_POST['smoke_sense_24'];
    $smoke_sense_25 = $_POST['smoke_sense_25'];


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
                <div class="Reqresult_ exsampleT_">
                    <table class="autotable_ autotable5_">
                        <colgroup>
                            <col class="num">
                            <col class="cur">
                            <col>
                        </colgroup>
                        <thead>
                            <tr>
                                <td class="th">No.</td>
                                <td class="th">답안</td>
                                <td class="th">설명</td>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <? if($smoke_sense_1==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">담배에는 니코틴이라는 중독물질이 포함되어 있고 흡연을 시작하게 되면 빠른시간 안에 니코틴 중독증상이 나타나게 됩니다. 이에 흡연을 국제질병분류(ICD-10)기준에 의하면 ‘Tobacco dependence’로 미국 정신의학회의 정신질환 진단 및 통계편람(DSM-Ⅳ) 기준에 의하면 ‘Nicotine dependence’라고 분류되는 약물중독의 일종입니다. 따라서 흡연은 ‘습관’이라기 보다는 ‘질환’으로 보는 것이 타당합니다.</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <? if($smoke_sense_2==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">18세 이전의 청소년기에 흡연을 시작하는 경우, 아직 정신적으로나 신체적으로 미성숙한 상태에서 담배안의 발암물질 및 유해 화학물질에 노출되어, 중독성과 건강 위해의 심각성이 커질 수 있습니다.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <? if($smoke_sense_3==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">흡연은 폐암을 비롯한 위암, 자궁경부암, 후두암, 췌장암 등 다양한 암 발생의 주요 원인입니다.</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <? if($smoke_sense_4==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">흡연으로 인해 발생하는 질환은 대부분 위중도가 높은 만성질환이어서, 국가 전체의 사회 경제적 부담을 가중 시킬 뿐 아니라, 개인 차원에서도 환자 본인과 가족에게 심한 고통과 커다란 경제적 부담을 주게 됩니다.</td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <? if($smoke_sense_5==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">담배와 담배연기에는 담배 중독을 일으키는 니코틴을 포함하여 69종의 발암물질과 4,000종 이상의 화학물질이 포함되어 있는 것으로 알려져 있습니다.</td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <? if($smoke_sense_6==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">담배가 타들어가면서 나오는 연기에는 흡연자가 담배 필터를 통해서 들이 마시는 연기보다 더 많은 유해 화학 물질 및 발암물질이 포함되어 있습니다.</td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <? if($smoke_sense_7==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">금연을 하게되면, 암을 비롯한 다양한 만성질환 발생 위험이 감소하며, 그 밖에도 입과 옷, 머리 등에 밴 나쁜 냄새가 없어지고 치아가 하얗고 건강해집니다.</td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <? if($smoke_sense_8==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">금연한 후 10년이 지나면 폐암 사망률이 흡연자의 절반 수준이 되며, 구강암, 후두암, 식도암, 방광암, 신장암, 췌장암의 발생 위험도 감소합니다.</td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <? if($smoke_sense_9==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">직접흡연을 하지는 않으나 남이 피우는 담배 연기를 본인의 의지와 상관없이 들이 마시게 되는 경우를 간접 흡연이라고 합니다.</td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <? if($smoke_sense_10==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">간접흡연의 경우도 직접 흡연을 하는 경우와 마찬가지로 다양한 종류의 질병을 발생시키고 건강 위해를 일으킬 수 있습니다.</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <? if($smoke_sense_11==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">전자담배 역시 일반담배와 마찬가지로 [담배사업법]에 의거 관리규제되고 있으며 [국민건강증진법]에 따라 니코틴 용량 1밀리리터당 건강증진기금 221원의 건강증진부담금을 부과하고 있습니다. 또한 전자담배 제품에 대한 위해성 여부에 대해서는 아직 많은 연구가 필요한 상황이며 잠재적인 위험성이 있음이 제시되고 있는 실정입니다. 니코틴이 들어있는 전자담배 역시 금연구역에서는 피울 수 없는 담배입니다.</td>
                            </tr>

                            <tr>
                                <td>12</td>
                                <? if($smoke_sense_12==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">술과 담배는 아주 절친한 친구 사이입니다. 평소에는 흡연을 하지 않다가 술자리에서만 흡연을 하는 분들이 있는데요. 이분들 역시 니코틴 중독이 진행된 흡연자로 간주될 수 있습니다. 술과 담배의 뇌의 중독을 일으키는 기전과 위치가 같기 때문에 술자리에서의 흡연욕구로 서로 상승효과를 일으키며 더 큰 쾌락을 느끼게 해줍니다. 그리고 그만큼 술과 담배를 동시하는 것은 신체적 위해 및 질병발생 위험도를 높이게 됩니다.</td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <? if($smoke_sense_13==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">금연이란 담배를 한모금, 한 개비도 피우지 않는 것을 의미합니다. 간헐적 흡연도 흡연에 속하며 신체적 위해와 중독을 일으킬 수 있으며 규칙적인 흡연을 하는 계기를 만들어 줄 수 있어 완전금연의 장애요인이 될 수 있습니다.</td>
                            </tr>

                            <tr>
                                <td>14</td>
                                <? if($smoke_sense_14==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">흡연자들의 경우 흡연이 스트레스를 해소시켜준다고 말합니다. 그러나 실제 스트레스 지수는 흡연을 한다고 하여 낮아지지 않습니다. 반대로 흡연자들의 경우 일정시간 흡연을 하지 않았을 때 나타나는 금단증상이 스트레스 지수를 높이게 하는 원인이 된다고 합니다.</td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <? if($smoke_sense_15==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">금연구역에서 흡연적발시 10만원의 과태료가 부과됩니다.</td>
                            </tr>

                            <tr>
                                <td>16</td>
                                <? if($smoke_sense_16==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">금연 시 맵거나 짠 자극적인 음식을 먹으면 오히려 흡연욕구를 유발시킬 수 있기 때문에 피해주는 것이 좋습니다.</td>
                            </tr>

                            <tr>
                                <td>17</td>
                                <? if($smoke_sense_17==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">금연 후 8시간이 지나면 혈액 소 일탄화탄소 양이 정상으로 떨어지며 혈액 속 산소량이 정상치로 올라갑니다. </td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <? if($smoke_sense_18==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">금연 후 탄산 및 카페인 음료는 흡연욕구를 오히려 유발할 수 있어 되도록 피하는 것이 좋으며 평소보다 물을 많이 마시는 것이 흡연욕구를 완화시키는데 도움이 될 수 있습니다. </td>
                            </tr>

                            <tr>
                                <td>19</td>
                                <? if($smoke_sense_19==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">3차 간접흡연이란 실외에서 담배를 피우거나 본인이 직접 담배를 피우지 않더라도 주변의 담배 연기가 옷에 배일 경우, 혹은 실내에서 담배를 피우고 환기를 시켰다해도 실내표면(벽지, 카페트, 자동차 카시트등)이나 먼지에 담배의 독성물질이 남아있어 가스형태로 재방출되거나 실내 다른 물질과 반응하고 이차 오염물질을 생성하는 것을 의미합니다. </td>
                            </tr>

                            <tr>
                                <td>20</td>
                                <? if($smoke_sense_20==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">흡연하는 부모의 자녀들의 경우 스스로 흡연을 시작할 확률이 흡연을 하지 않은 부모의 자녀들 보다 높으며 부모의 금연은 자녀들에게 좋은 역할 모델이 될 수 있습니다. </td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <? if($smoke_sense_21==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">금연 후 규칙적인 운동은 흡연욕구 완화와 금연유지에 도움이 되며 건강한 생활습관을 기를 수 있습니다. </td>
                            </tr>

                            <tr>
                                <td>22</td>
                                <? if($smoke_sense_22==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">아직 금연에 있어 특효약은 개발되어 있지 않습니다. 니코틴 패치는 니코틴 보조제의 하나로 말그대로 금연 후 나타날 수 있는 금단증상과 흡연욕구를 완화시켜주는 보조제일 뿐입니다. 니코틴 패치를 사용한다고 하여 모두가 금연에 성공하지는 않지만 성공률을 높이는데에는 도움을 받을 수 있습니다.</td>
                            </tr>

                            <tr>
                                <td>23</td>
                                <? if($smoke_sense_23==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">금연방법에는 한 개비 한모금도 피우지 않는 단연법과 흡연량을 서서히 줄여가며 금연을 하는 감연법이 있습니다. 일반적으로 금연시작일을 정하고 한번에 끊는 단연법이 더 효과적인 것으로 알려져 있으나 흡연량이 많거나 니코틴 의존도가 높은 흡연자의 경우 일정기간 흡연량을 줄인 후에 금연시작일을 정하고 금연을 실천하는 것이 더 도움이 될 수 있습니다. </td>
                            </tr>

                            <tr>
                                <td>24</td>
                                <? if($smoke_sense_24==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">흡연자가 스스로 주변에 아무런 도움 없이 의지만으로 금연에 성공할 확률은 3~5%미만입니다. 무조건 참는 것 보다는 다양한 행동요법 및 금연상담, 니코틴 보조제와 약물요법 등의 다양한 금연방법들을 사용하는 것이 좋습니다.</td>
                            </tr>

                            <tr>
                                <td>25</td> 
                                <? if($smoke_sense_25==1){ ?>
                                    <td><span class="correctBlue">정답</span></td>
                                <? } else { ?>
                                    <td><span class="wrongRed">오답</span></td>
                                <? } ?>
                                <td class="left">금연 후 체중증가로 고민하는 분들이 많이 계십니다. 금연 후 미각과 후각이 돌아오면서 음식 본연의 맛과 향을 느끼게 되고 또한 입이 심심하다는 생각에 간식을 많이 섭취하는 경우가 있습니다. </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="_btnarea" style="margin:30px 0;">
                    <div class="_btn">
                        <a href="javascript:history.back();" class="_btn3">목록</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include '../inc/footer.php'; ?>
    </div>
</body>

</html>
