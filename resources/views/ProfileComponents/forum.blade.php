<div class="card border border-secondary">
    <div class="card-body">
        <h3>Your Forum Posts</h3>
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
                @foreach ($forum as $f)
                    <tr>
                        <th scope="row"><img src="/MyBlog/public/storage/cover_images_post/{{$f->image}}" alt="" width="150px" height="95px"></th>
                        <td>{{$f->title}}</td>
                        <td><a target="_top" href="/MyBlog/public/forum/{{$f->id}}" class="btn btn-primary">Go</a></td>
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