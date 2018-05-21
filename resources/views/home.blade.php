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
        <div class="container">
            <!-- <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="gallery-title">Gallery</h1>
            </div>
            <div class="row">            
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filte">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>
            </div> -->
            @if ($response)
            <?php $counter = 0; ?>
                @foreach(array_chunk($response['summary'], 3) as $chunk)
                    <div class="row" style="text-align: center; margin-top: 5%">
                        @foreach($chunk as $add)
                            <?php $counter++; ?>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#{{ 'demo'.$counter }}">Summary {{ $add['id'] }}</button>
                                <div id="{{ 'demo'.$counter }}" class="collapse">
                                    {{ $add['summary'] }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            @endif
        </div>
    </body>
</html>