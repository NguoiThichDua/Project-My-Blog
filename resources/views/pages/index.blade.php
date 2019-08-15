@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-5">
			<div class="bd-example">
				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner rounded-lg">
						<div class="carousel-item active">
							<img src="{{ asset('img/code.jpg') }}" class="d-block w-100" alt="..." height="250px">
						</div>
						<div class="carousel-item">
							<img src="{{ asset('img/6kpdVYW.jpg') }}" class="d-block w-100" alt="..." height="250px">
						</div>
						<div class="carousel-item">
							<img src="{{ asset('img/7HHe8xr.jpg') }}" class="d-block w-100" alt="..." height="250px">
						</div>
						<div class="carousel-item">
								<img src="{{ asset('img/forum2.jpg') }}" class="d-block w-100" alt="..." height="250px">
							</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-7">
			<div class="card border border-primary">
				<div class="card-header bg-primary text-light">
					Hôm nay có gì mới...?
				</div>
				<div class="card-body">
					<h5 class="card-title">Trang tin tức</h5>
					<p class="card-text">
						Là nơi cập nhật thường xuyên và liên tục về các tin tức mới nhất về công nghệ thông tin.
						Bạn sẽ có được những thông tin bổ ích, có thể làm tài liệu học tập cũng như nắm bắt tình hình chung một cách tổng quan nhất về Công Nghệ
					</p>
					<a href="#" class="btn btn-primary">Tới trang tin tức</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card text-center mt-3 border border-danger">
				<div class="card-header bg-danger text-light">
				<span>< / Learn ></span>
				</div>
				<div class="card-body">
					<h5 class="card-title">Code - Function - Methods....</h5>
					<p class="card-text">
						<div class="row">
							<div class="col-md-6">
								<p>Và đây rồi, trang thông tin dành cho coder... :)) <br>
									Không cần giới thiệu các bạn chắc cũng có thể đoán ra được, trang coding mang đến những thông tin dồi dào về những vấn đề liên quan đến lập trình.
									Bạn có thể tìm các khóa học như C#, Javascript, Ruby,.... cũng như những framework như VueJS, Bootrap, Laravel,... hoàn toàn miễn phí.
									Chưa hết bạn cũng có thể tìm thấy những thủ thuật máy tính hoặc những kinh nghiệm liên quan đến lập trình tại đây.</p>
								<a href="#" class="btn btn-danger">Tới trang Coding</a>
							</div>
							<div class="col-md-6">
								<img src="{{ asset('img/code2.jpg') }}" class="d-block w-100" height="250px">
							</div>
						</div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row mt-3">
				<div class="col-sm-6">
					<div class="card bg-success text-light border border-success">
						<div class="card-body">
							<h5 class="card-title">Bạn chưa có tài khoản</h5>
							
							<p class="card-text">Hãy đăng kí tài khoản tại Blog để có những trãi nghiệm tốt nhất tại đây</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card border border-light">
						<div class="card-body">
							<h5 class="card-title">Bạn muốn phản hồi khi sử dụng</h5>
							<p class="card-text">Mọi ý kiến, đóng góp hoặc thắc mắc của bạn đều có thể thực hiện tại About->Contact</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card mt-3 border border-secondary">
				<img src="{{ asset('img/forum.jpg') }}" class="card-img-top" alt="..." height="450px">
				<div class="card-body">
					<h5 class="card-title">Trang Forum có gì...?</h5>
					<p class="card-text">
						Bạn đang gặp rắc rối trong việc code...? Bạn đang "Bí" ý tưởng khi bắt đầu một dự án...? Hay bạn muốn chia sẽ những tài liệu, những thông tin hot...? vân vân và mây mây...!
						<br>
						Tất cả những thứ vừa kể phía trên, bạn đều có thể làm được tại trang forum.
						<br>
						Tại trang forum, bạn có thể đăng những bài viết với nội dung của mình, là nơi để cho bạn và những người dùng khác có thể trao đổi, thảo luận và tán gẫu với nhau, ahihi.
					</p>
					<a href="#" class="btn btn-primary">Tới trang Forum</a>
				</div>
			</div>
		</div>
	</div>
@endsection