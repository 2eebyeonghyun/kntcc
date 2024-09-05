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
		<div class="inner" style="position:relative;">
			<div class="page_title">
				<strong>센터 동영상</strong>
				<p>Video</p>
			</div>

			<form id="searchfrm" method="GET" action="">
				<div class="search_">
					<div class="inner">
						<select name="select_search" id="select_search">
							<option value="전체">전체</option>
							<option value="작성자">작성자</option>
							<option value="내용">내용</option>
						</select>

						<input type="text" class="text-search" placeholder="검색어를 입력하세요.">

						<button type="submit" style="cursor:pointer;" class="btn-search"><i class="fas fa-search"></i></button>
					</div>
				</div>
			</form>

			<div id="_sns">
				<form action="" method="post" name="youtubefrm" id="youtubefrm">
					<div class="inner">
						<div class="area">
							<div class="box">
								<a href="<?=lbh?>/community/media_view.php" class="in">
									<div class="img"><span style="background-image:url(https://via.placeholder.com/277x233);"></span></div>
									<div class="info">
										<p class="subject">경남금연지원센터 테스트 유튜브 동영상입니다.</p>
										<p class="date"><i class="far fa-clock"></i><span>2022-01-13</span></p>
									</div>
								</a>
							</div>
							<div class="box">
								<a href="#" class="in">
									<div class="img"><span style="background-image:url(https://via.placeholder.com/277x233);"></span></div>
									<div class="info">
										<p class="subject">경남금연지원센터 테스트 유튜브 동영상입니다.</p>
										<p class="date"><i class="far fa-clock"></i><span>2022-01-13</span></p>
									</div>
								</a>
							</div>
							<div class="box">
								<a href="#" class="in">
									<div class="img"><span style="background-image:url(https://via.placeholder.com/277x233);"></span></div>
									<div class="info">
										<p class="subject">경남금연지원센터 테스트 유튜브 동영상입니다.</p>
										<p class="date"><i class="far fa-clock"></i><span>2022-01-13</span></p>
									</div>
								</a>
							</div>
							<div class="box">
								<a href="#" class="in">
									<div class="img"><span style="background-image:url(https://via.placeholder.com/277x233);"></span></div>
									<div class="info">
										<p class="subject">경남금연지원센터 테스트 유튜브 동영상입니다.</p>
										<p class="date"><i class="far fa-clock"></i><span>2022-01-13</span></p>
									</div>
								</a>
							</div>
							<div class="box">
								<a href="#" class="in">
									<div class="img"><span style="background-image:url(https://via.placeholder.com/277x233);"></span></div>
									<div class="info">
										<p class="subject">경남금연지원센터 테스트 유튜브 동영상입니다.</p>
										<p class="date"><i class="far fa-clock"></i><span>2022-01-13</span></p>
									</div>
								</a>
							</div>
							<div class="box">
								<a href="#" class="in">
									<div class="img"><span style="background-image:url(https://via.placeholder.com/277x233);"></span></div>
									<div class="info">
										<p class="subject">경남금연지원센터 테스트 유튜브 동영상입니다.</p>
										<p class="date"><i class="far fa-clock"></i><span>2022-01-13</span></p>
									</div>
								</a>
							</div>
							<div class="box">
								<a href="#" class="in">
									<div class="img"><span style="background-image:url(https://via.placeholder.com/277x233);"></span></div>
									<div class="info">
										<p class="subject">경남금연지원센터 테스트 유튜브 동영상입니다.</p>
										<p class="date"><i class="far fa-clock"></i><span>2022-01-13</span></p>
									</div>
								</a>
							</div>
							<div class="box">
								<a href="#" class="in">
									<div class="img"><span style="background-image:url(https://via.placeholder.com/277x233);"></span></div>
									<div class="info">
										<p class="subject">경남금연지원센터 테스트 유튜브 동영상입니다.</p>
										<p class="date"><i class="far fa-clock"></i><span>2022-01-13</span></p>
									</div>
								</a>
							</div>
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
	</div>
	
	<? include $_SERVER['DOCUMENT_ROOT']."/nosmoke/inc/footer.php"; ?>
</body>

</html>
