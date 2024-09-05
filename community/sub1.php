<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<body>
	<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>
	
	<div id="svis" style="background:url(../img/community/svis.png)no-repeat center/cover;">
		<div class="inner">
			<h2>커뮤니티</h2>
			<ul class="snb">
				<li class="active"><a href="../community/sub1.php">공지사항</a></li>
				<li class=""><a href="../community/sub2.php">금연후기 게시판</a></li>
				<li class=""><a href="../community/sub3.php">센터 동영상</a></li>
				<li class=""><a href="../community/sub4.php">Q&A</a></li>
			</ul>
			<div class="navi">
				<span>Home</span>
				<em>
					<i class="fas fa-angle-right"></i>
				</em>
				<span>커뮤니티</span>
				<em>
					<i class="fas fa-angle-right"></i>
				</em>
				<span>공지사항</span>
			</div>
		</div>
	</div>

	<div class="container" id="container">
		<div class="inner">
			<div class="page_title">
				<strong>공지사항</strong>
				<p>Notice</p>
			</div>

			<form name="searchform" id="searchform" method="post" class="__search">
				<div class="search_">
					<div class="inner">
						<input type="hidden" name="pagenumber" value="">

						<select name="sn" id="select_search">
							<option value>제목+내용</option>
							<option value="s1">제목</option>
							<option value="s2">내용</option>
						</select>
						<input type="text" name="st" value="" class="text-search" placeholder="검색어를 입력하세요.">
						<button type="submit" style="cursor:pointer;" class="btn-search"><i class="fas fa-search"></i></button>
					</div>
				</div>
			</form>

			<form action="" method="post" name="Comu1frm" id="Comu1frm">
				<div id="board-wrap">
					<div class="board-list-wrap">
						<table class="board-list-table">
							<colgroup>
								<col class="num">
								<col class="subject">
								<col class="file">
								<col class="writer">
								<col class="date">
								<col class="cnt">
							</colgroup>

							<thead>
								<tr>
									<th scope="col">번호</th>
									<th scope="col">제목</th>
									<th scope="col">첨부파일</th>
									<th scope="col">작성자</th>
									<th scope="col">작성일자</th>
									<th scope="col">조회수</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="__p">2</td>
									<td class="subject"><a href="<?=lbh?>/community/view.php">테스트용 공지사항입니다.</a></td>
									<td class="__p"><i style='color:#666;' class='far fa-save'></i> </td>
									<td class="__p">관리자</td>
									<td>2022-10-07</td>
									<td class="__p">4</td>
								</tr>
								<tr>
									<td class="__p">1</td>
									<td class="subject"><a href="<?=lbh?>/community/view.php">테스트 공지사항_2번</a></td>
									<td class="__p"></td>
									<td class="__p">관리자</td>
									<td>2022-10-07</td>
									<td class="__p">1</td>
								</tr>
							</tbody>
						</table>
					</div>
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
			</form>
		</div>
	</div>
	
	<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

</html>
