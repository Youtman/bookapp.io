<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <h2>User Records</h2>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($users as $user)
      @php
      $date=date('Y-m-d', $user['date']);
      @endphp
      <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['password']}}</td>
        
        <td><a href="{{action('UserController@edit', $user['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('UserController@destroy', $user['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  
  <script src="{{ URL::asset('js/bootstrap.min.js') }}" charset="utf-8"></script>
  </body>
</html>