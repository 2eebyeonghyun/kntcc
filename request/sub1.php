<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

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

            <div class="detail_box4">
                <div class="ph-line-nav tabs" style="justify-content: space-around;">
                    <a href="#" class="active">니코틴 의존도 진단</a>
                    <a href="#" class="">나의 흡연습관 평가</a>
                    <a href="#" class="">흡연에 대한 나의 상식</a>
                    <a href="#" class="">경제적 손실계산</a>
                    <div class="effect"></div>
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
                            <?php include './sub1_list1.php'; ?>
                        </div>

                        <div class="cont" style="display: none;">
                            <?php include './sub1_list2.php'; ?>
                        </div>

                        <div class="cont" style="display: none;">
                            <?php include './sub1_list3.php'; ?>
                        </div>

                        <div class="cont" style="display: none;">
                            <?php include './sub1_list4.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

</html>
