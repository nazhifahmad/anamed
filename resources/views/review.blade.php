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
              <a class="navbar-brand" href="/">App Review Summarization</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="jumbotron">
                <h2>Review {{ $app }}</h2>
                <img style="max-width: 300px" src="{{$pict[0]['image']}}">
                <div class="row">    
                    <div class="col-md-8">
                        <div class="page-header">
                            <h3><small class="pull-right"><?php echo(sizeof($response) . ' reviews'); ?></small> Reviews </h3>
                            <a href="/summary/{{$app}}" class="btn btn-info">Lihat Summary</a>
                        </div>
                        <div class="comments-list">
                            @foreach($response as $add)
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="http://lorempixel.com/40/40/people/1/">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading user_name"><b>
                                        @if ($add['username'])
                                            {{$add['username']}}
                                        @else
                                            {{"Anonim"}}
                                        @endif
                                        </b></h4>
                                        {{$add['text_review']}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>