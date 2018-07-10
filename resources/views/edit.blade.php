<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bae Edit</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
  </head>
  <body>
    <div class="container" style="padding-top:50px;">
      <h2 style="text-align:center;">Edit Record</h2>
       <hr>
        <form method="post" action="{{action('UserController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="{{$user->email}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password" value="{{$user->password}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-default" style="margin-left:-132px">Cancel</button>
          </div>
        </div>
      </form>
    </div>
    
  <script src="{{ URL::asset('js/bootstrap.min.js') }}" charset="utf-8"></script>
  </body>
</html>