<!DOCTYPE html><html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nerd Facts</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/inside/insideStyle.css">
    </head>
    <body>
      <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <a href="{{ URL::to('nerds') }}" class="navbar-brand">Nerd alert</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
            <li><a href="">Create a Nerd</a>
          </ul>
        </div>
      </nav>
      <h1>Create a nerd ª</h1>

      {{ HTML::ul($errors->all()); }}

      {{ Form::open(array('url' => 'nerds')) }}
        <div class="form-group">
          {{ Form::label('name', 'Name') }}
          {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
          {{ Form::label('email', 'Email') }}
          {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
          {{ Form::label('nerd_level', 'Nerd Level') }}
          {{ Form::select('nerd_level', array('10' => 'Sorta cool', '20' => 'Pretty hot', '46' => 'Getting Steamy', '69' => 'Full-fledged Erection', 100), Input::old('nerd_level'), array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Create the nerd!', array('class' => 'btn btn-small btn-primary')) }}
      {{ Form::close() }}
    </body>
</html>
