<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB CRUD Operation</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
</head>
<body>
<br><br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Post Details
                        </div>
                        <div class="card-body">

                    

                            <form>
                               
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Enter Post Title">
                                </div>
                                <div class="from-group">
                                    <label for="body">Post Description</label>
                                    <textarea class="form-control" name="body"  rows="3">{{ $post->body }}</textarea>
                                </div><br>
                                
                            </form>

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