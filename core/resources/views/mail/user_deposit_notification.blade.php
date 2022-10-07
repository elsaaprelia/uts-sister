<?php
    $st = App\site_settings::find(1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deposit Notification</title>
</head>
<body>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="border:1px solid #CCC; padding:4%; box-shadow:2px 2px 4px 4px #CCC;">
            <div align="">
        		<img src="{{env('APP_URL')}}/img/{{$st->site_logo}}" style="height:100px; width:100px;" align="center">
        	</div>
        	<h3 align="">Deposit Notification</h3>
        	<p>
        	   Hi, <b>{{$md['username']}}</b> your deposit on {{env('APP_URL')}} was successful.
        	   <br>
               Your wallet balance will be updated shortly.
        	   
        	</p>
        	<p>
        		<i class="fa fa-certificate">{{env('APP_NAME')}} Investment.
        	</p>
        </div>
    </div>
	
</body>
</html>