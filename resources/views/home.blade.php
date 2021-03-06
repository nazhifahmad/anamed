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
              <a class="navbar-brand" href="#">App Review Summarization</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="jumbotron">
                <h1 style="text-align: center;">Application Review Summarization</h1>
                @if ($response)
                <?php $counter = 0; ?>
                    @foreach(array_chunk($response, 4) as $chunk)
                        <div class="row" style="text-align: center; margin-top: 5%">
                            @foreach($chunk as $add)
                                <?php $counter++; ?>
                                <div class="col-md-3">
                                    <img src="{{ $add['image'] }}" style="width: auto; max-width: 150px">
                                    <br>
                                    <h4>{{ $add['id_aplikasi'] }}</h4>
                                    <a class="btn btn-primary" href="{{'review/'.$add['id_aplikasi']}}">Lihat Review Aplikasi</a>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </body>
</html>