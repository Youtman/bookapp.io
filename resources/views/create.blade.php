<html>
<head>
    <meta charset="UTF-8">
    <title>Bae</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
</head>
<body> 
<div class="container" style="padding-top:50px;">    
    <div class="row">
        <div class="col-md-6">
           <h3>Sign Up</h3>
            <form action="{{ url('users') }}" method="post" enctype="multipart/form-data">
               @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div> 
<script src="{{ URL::asset('js/bootstrap.min.js') }}" charset="utf-8"></script>
</body>
</html>