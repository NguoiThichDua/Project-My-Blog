<div class="card mt-3 border border-secondary">
    <div class="card-body">
        <h3>Your Coding Posts</h3>
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
                @foreach ($code as $c)
                <tr>
                <th scope="row"><img src="/MyBlog/public/storage/images_post_coding/background/{{$c->image_1}}" alt="" width="150px" height="95px"></th>
                <td>{{$c->title}}</td>
                <td><a target="_top" href="/MyBlog/public/coding/{{$c->id}}" class="btn btn-primary">Go</a></td>
                </tr>
                @endforeach  
            </tbody>
        </table>
        <hr>
        <div class="d-flex justify-content-end">
            {{-- Phân trang --}}
            {{$code->links()}}
        </div>
    </div>
</div>