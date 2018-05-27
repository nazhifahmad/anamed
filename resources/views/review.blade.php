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
        
		 <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
		<script src="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
		
		<script type="text/javascript">
           $(document).ready( function () {
				$('#table_id').DataTable();
			} );
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
							<table id="table_id" class="display">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Review</th>
								</tr>
							</thead>
							<tbody>
								@foreach($response as $add)
								<tr>
										<td>
										 @if ($add['username'])
                                            {{$add['username']}}
										 @else
                                            {{"Anonim"}}
                                        @endif
										</td>
									<td>{{$add['text_review']}}</td>
								</tr>
								 @endforeach
							</tbody>
								
                                
							</table>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>