<!DOCTYPE html><html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nerd Facts</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="inside/insideStyle.css">
    </head>
    <body>
      <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <a href="{{ URL::to('nerds') }}" class="navbar-brand">Nerd alert</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
            <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
          </ul>
        </div>
      </nav>
      <h1>All the nerds</h1>
      @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message'); }}</div>
      @endif
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Nerd Level</td>
            <td>Actions</td>
          </tr>
        </thead>
        <tbody>
          @foreach ($nerds as $key => $value)
            <tr>
              <td> {{ $value->id }}</td>
              <td> {{ $value->name }}</td>
              <td> {{ $value->email }}</td>
              <td> {{ $value->nerd_level }}</td>
              <td>
              <a href="{{ URL::to('nerds/' . $value->id ) }}" class="btn btn-small btn-success">Show this nerd</a>
              <a href="{{ URL::to('nerds/' . $value->id . '/edit') }}" class="btn btn-small btn-info">Edit this nerd</a>
            </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </body>
</html>
