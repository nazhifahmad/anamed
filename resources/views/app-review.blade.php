<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            $('.collapse').collapse();
        </script>
        

        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">KELOMPOK 2</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">HOME <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="/app-review">App Review</a></li>
                <li><a href="#">Survey</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="jumbotron">
                <h1 class="gallery-title" style="text-align: center;">App Review</h1>
                @if ($response)
                <?php $counter = 0; ?>
                    @foreach(array_chunk($response, 3) as $chunk)
                        <div class="row" style="text-align: center; margin-top: 5%">
                            @foreach($chunk as $add)
                                <?php $counter++; ?>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#{{ 'demo'.$counter }}">Summary {{ $add['id'] }}</button>
                                    <div id="{{ 'demo'.$counter }}" class="collapse">
                                        <h3><b>Summary 1</b></h3>
                                        <p>{{ $add['summary1'] }}</p>
                                        <h3><b>Summary 2</b></h3>
                                        <p>{{ $add['summary2'] }}</p>      
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif
            </div>
            
        </div>
    </body>
</html>