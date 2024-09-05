<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>

    <div id="svis">
        <div class="inner">
            <h2>자료이용안내</h2>
            <div class="navi">
                <span>Home</span>
                <em>
                    <i class="fas fa-angle-right"></i>
                </em>
                <span>이용약관</span>
            </div>
        </div>
    </div>

    <div class="container" id="container">
        <div class="inner">
            <div class="page_title">
                <strong>이용약관</strong>
                <p>Terms of use</p>
            </div>

            <?php include '../member/guide3_view.php'; ?>
        </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

</html>
