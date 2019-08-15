<div class="card mt-3 border border-secondary">
    <div class="card-body">
        <h3>Your News Posts</h3>
        <hr>
        <table class="table table-striped table-secondary">
            <thead>
                {{-- 
                <tr>
                <th scope="col">Title</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
                --}}
            </thead>
            <tbody>
                @foreach ($news as $n)
                <tr>
                <th scope="row"><img src="/MyBlog/public/storage/images_post_news/background/{{$n->image_1}}" alt="" width="150px" height="95px"></th>
                <td>{{$n->title}}</td>
                <td><a target="_top" href="/MyBlog/public/news/{{$n->id}}" class="btn btn-primary">Go</a></td>
                </tr>
                @endforeach  
            </tbody>
        </table>
        <hr>
        <div class="d-flex justify-content-end">
            {{-- Phân trang --}}
            {{$news->links()}}
        </div>
    </div>
</div>