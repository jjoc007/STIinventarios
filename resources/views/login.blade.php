<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Inventarios</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @include('includes.styles')
        <?php echo HTML::style('css/login.css'); ?>
	     </head>    
         <body>
            @include('alerts.errors')
        <div id="container">
            <div id="logo">
                <img src="{{asset('img/logo.png')}}" alt="">
            </div>
            <div id="loginbox">            
                <form action="login" method="post" >
    				<p>Introduzca usuario y contraseña para continuar.</p>
                    <div class="input-group input-sm">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span><input class="form-control" name ="username" id="username" placeholder="Usuario" type="text">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span><input class="form-control" name ="password" id="password" placeholder="Contraseña" type="password">
                    </div>
                    <div class="form-actions clearfix">                      
 <input class="btn btn-block btn-primary btn-default" value="Acceder" type="submit">
                    </div>
                   
                   <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>
                </div>
                <span style="color:#FFF">@include('includes.footer')</span>
        </div>
        
        <?php echo HTML::script('js/jquery.js'); ?>
        <?php echo HTML::script('js/jquery-ui.js'); ?>
        <?php echo HTML::script('js/login.js'); ?>
        
</body>
</html>