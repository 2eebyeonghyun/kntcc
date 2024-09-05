<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<body>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>

    <div id="svis" style="background:url(../img/community/svis.png)no-repeat center/cover;">
        <div class="inner">
            <h2>검색</h2>
        </div>
    </div>

    <div class="container" id="container">
        <div class="inner">
            <div class="page_title">
                <strong>검색</strong>
                <p>Search</p>
            </div>

            <form action="" method="post" name="Searchfrm" id="Searchfrm">
                <div class="search_boxx">
                    <div class="search_box">
                        <div class="top">
                            "<span class="point_txt"></span>"에 관련된 정보의 결과가 "<span class="point_txt"></span>"개 검색되었습니다.
                        </div>
                        <div class="bot">
                            <table class="search_table">
                                <tbody>
                                    <tr>
                                        <th width="8%" scope="col">No</td>
                                        <th scope="col">Title</td>
                                        <th width="12%" scope="col">Writer</td>
                                        <th width="12%" scope="col">Date</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td class="left">
                                            <span>[뉴스룸]</span>
                                            <a href="../newsroom/newsroom_view.php"><span>새해는 반드시 '금연'해야하는 또 하나의 이유</span></a>
                                        </td>
                                        <td></td>
                                        <td>2022-01-10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="pagination">
                            <a class="first" href="#"><i class="fas fa-angle-double-left"></i><span>첫 페이지</span></a>
                            <a class="prev" href="#"><i class="fas fa-angle-left"></i><span>이전 페이지</span></a>
                            <ol>
                                <li class="on"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ol>
                            <a class="next" href="#"><i class="fas fa-angle-right"></i></i><span>다음 페이지</span></a>
                            <a class="last" href="#"><i class="fas fa-angle-double-right"></i><span>마지막 페이지</span></a>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

</html>
