<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/common.php"; ?>

<body>
	<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/head.php"; ?>

	<div id="svis" style="background:url(../img/community/svis.png)no-repeat center/cover;">
		<div class="inner">
			<h2>커뮤니티</h2>
			<ul class="snb">
				<li class=""><a href="../community/sub1.php">공지사항</a></li>
				<li class=""><a href="../community/sub2.php">금연후기 게시판</a></li>
				<li class="active"><a href="../community/sub3.php">센터 동영상</a></li>
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
				<span>센터 동영상</span>
			</div>
		</div>
	</div>

	<div class="container" id="container">
		<div class="inner">
			<div class="page_title">
				<strong>센터 동영상</strong>
				<p>Video</p>
			</div>

			<div class="writer_wrap">
				<div class="board-view-head">
					<div class="board-view-title">
						<h4 class="vtitle">테스트용 게시글입니다.</h4>
						<div class="vtitle-winfo">
							<span class="txt name">홍길동</span>
							<span class="txt">2022-01-13</span>
							<span class="txt hit"><em>조회수 : </em>10,502</span>
						</div>
					</div>

					<div class="board-view-winfo"></div>
				</div>

				<div class="board-view-cont">
					<div class="board-view-contents">
						<div id="boardContents">
							<div class="infocontents">
								<iframe width="100%" height="600" src="https://www.youtube.com/embed/uTD9qCSGFwE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="_btnarea" style="margin:30px 0;">
				<div class="_btn">
					<a href="#none" class="_btn4" style="background:#21666a; border:#21666a;">수정</a>
					<a href="#none" class="_btn4" style="background:#d91d4d; border:#d91d4d;">삭제</a>
					<a href="javascript:history.back();" class="_btn4">목록</a>
				</div>
			</div>

		</div>
	</div>

	<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

</html>
