<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
</head>
<body>
    
 
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All Posts
                        </div>
                        <div class="card-body">

                            @if(Session::has('post-deleted'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('post-deleted') }}
                                </div>
                            @endif

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Post Title</th>
                                        <th>Post Body</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($posts as $post)
                                   <tr>
                                       <td>{{ $post->title }}</td>
                                       <td>{{ $post->body }}</td>
                                       <td>
                                           <a href="/posts/{{ $post->id }}" class="btn btn-success">View</a>
                                           <a href="/edit-post/{{ $post->id }}" class="btn btn-info">Edit</a>
                                           <a href="/delete-post/{{ $post->id }}" class="btn btn-danger">Delete</a>
                                       </td>
                                   </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" ></script>
</body>
</html>