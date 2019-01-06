<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Validating Form Arrays</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <div class="col-md-12">

            <form method="POST" action="{{ url('/') }}">

                {{ csrf_field() }}

                <h3>Winners &amp; prizes</h3>
                <p>Choose winners and enter the prizes that they have won.</p>
                <br />

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Generated with Javascript -->
                <div class="winner">
                    <div class="form-group">
                        <label for="winner[1][user_id]">Winner</label>
                        <select class="form-control" name="winner[1][user_id]">
                            @foreach($players as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="winner[1][prize]">Prize</label>
                        <input type="text" class="form-control" name="winner[1][prize]" placeholder="Enter prize">
                    </div>
                    <hr />
                </div>

                <!-- Generated with Javascript -->
                <div class="winner">
                    <div class="form-group">
                        <label for="winner[2][user_id]">Winner</label>
                        <select class="form-control" name="winner[2][user_id]">
                            @foreach($players as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="winner[2][prize]">Prize</label>
                        <input type="text" class="form-control" name="winner[2][prize]" placeholder="Enter prize">
                    </div>
                    <hr />
                </div>

                <a href="javascript: alert('This button adds a new winner to the form using Javascript.');" class="btn btn-link">Add another winner</a>

                <div class="form-group">
                    <br />
                    <button type="submit" class="btn  btn-primary btn-lg">Submit</button>
                </div>
            </form>

        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>