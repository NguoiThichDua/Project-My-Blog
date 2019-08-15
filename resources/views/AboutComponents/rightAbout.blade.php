<link rel="stylesheet" href="{{asset('css/customScrollbar.css')}}">
<link rel="stylesheet" href="{{asset('css/customJumbotron.css')}}">

{{-- About --}}
<div id="collapseOne" class="collapse show " aria-labelledby="headingOne" data-parent="#accordionExample">
    <div class="card-body">
        <h2>Về tôi</h2>
        <p>Chào các bạn, tôi là <em>Nguyễn Bình Hồng Sơn</em>, tác giả của Blog này.</p>
        <hr>
        {{-- Card --}}
        <div class="card">
            <div class="card-header bg-secondary text-light">
                <h4>Học tập</h4> 
            </div>
            <div class="card-body">
                <h5 class="card-title">Cử nhân Công Nghệ Thông Tin</h5>
                <p class="card-text">Đại học Tây Đô | 2016-2020</p>
                <hr width="150px">
                <h5 class="card-title">Chứng chỉ CCNA</h5>
                <p class="card-text">Đại học Tây Đô | 2016-2020</p>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header bg-secondary text-light">
                <h4>Kinh nghiệm</h4> 
            </div>
            <div class="card-body">
                <h5 class="card-title">Fresher Developer</h5>
                <p class="card-text">
                    Thực hiện dự án với team dùng Laravel framework làm backend.
                    Sử dụng Boostrap framework,
                    Áp dụng Vuejs cho frontend.</p>
                <hr width="150px">
                <h5 class="card-title">Junior Developer</h5>
                <p class="card-text">Thực hiện các dự án Machine Learning, Big data.</p>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header bg-secondary text-light">
                <h4>Kỹ Năng</h4> 
            </div>
            <div class="card-body">
                <h5 class="card-title">Làm việc tốt với</h5>
                <p class="card-text">
                    Laravel Framework -
                    Boostrap framework -
                    Vuejs Framework.
                </p>
            </div>
        </div>   {{-- End Card --}}
   </div>    {{-- End Card-Body --}}
</div>  {{-- End About --}}

 {{-- Blog --}}
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
   <div class="card-body">
       <div class="">
            <h2>My Blog</h2>
            <p>Đây là một blog có nội dụng chủ yếu về nghành <strong>IT</strong> và những thông tin liên quan đến tin học. </p>
            <hr>
            <p>
                Blog được tạo ngày 6/6/2019. Bắt đầu chỉ với 1 người, tôi đã lên ý tưởng cho Blog của mình.
            </p>
            <p>
                Nội dung blog là về kĩ thuật lập trình, những thông tin mới nhất về công nghệ và cả những bài chia sẽ về những chủ đề hay.
                Bên cạnh đó Blog cũng là nơi bạn có thể trao đổi hoặc đặt ra những câu hỏi, những vấn về thắc mắc tại forum.
            </p>
            <p class="d-flex justify-content-center">
                <img src="img/blog.png" alt="" >
            </p>
            <p>
                Tôi viết blog này với mục đích chia sẻ kinh nghiệm và kiến thức cho mọi người. 
                Mọi comment góp ý hay ném đá, miễn là ko mang tính xúc phạm, đều được hoan nghênh.
            </p>
        </div>
   </div>
</div>{{-- End Blog --}}

{{-- Contact --}}
<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
   <div class="card-body">
    <div class="text-center">
        <h2>Liên lạc</h2>
        <p>Mọi thông tin liên lạc, đóng góp ý kiến vui lòng hệ các địa chỉ sau:</p>
        <hr>
            <h5>Phone: </h5>
            <em>0916524328</em>
        <hr width="150px">
            <h5>Gmail: </h5>
            <em>nbhs.it.98@gmail.com</em>
        <hr>
        <h2>Hoặc</h2>
        <hr width="150px">
        @if (!Auth::guest())
            <div class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">Để lại lời nhắn tại đây</div>
        @else
            <div class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">Để lại lời nhắn tại đây</div>
        @endif
    </div>
   </div>
</div> {{-- End Contact --}}

@if (!Auth::guest())
    <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">{{ Auth::user()->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['method' => 'POST', 'action' => 'ContactController@store']) !!}
            <form>
                <div class="form-group">
                    {{Form::label('title', 'Title')}}                                                          
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}    <!--Cái đầu là name - Cái sau là giá trị-->
                </div>
    
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', '', ['class' => 'form-control ckeditor', 'placeholder' => 'Body'])}}
                </div>
                 
                 {{Form::submit('Send', ['class'=>'btn btn-success'])}}
                 {{Form::button('Close', ['class'=>'btn btn-secondary', 'data-dismiss'=>'modal'])}}
            </form> 
        {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@else
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Thông báo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Hãy đăng nhập để để lại lời nhắn trực tiếp
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="/MyBlog/public/login" class="btn btn-primary">Login</a>
          </div>
      </div>
    </div>
  </div>
@endif


  