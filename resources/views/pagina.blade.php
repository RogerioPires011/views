<!DOCTYPE html>
<html>
<head>
	<!--<link href="{{asset('css/app.css')}}" rel="stylesheet">-->
	<link href="{{URL::to('css/app.css')}}" rel="stylesheet">
</head>
<body>
   
    @alerta(['tipo'=>'danger','titulo'=>'Erro fatal'])
    <strong>Erro:</strong> Sua mensagem de erro.		
     @endcomponent


     @alerta(['tipo'=>'warning','titulo'=>'Erro fatal'])
    <strong>Erro:</strong> Sua mensagem de erro.		
     @endcomponent


     @alerta(['tipo'=>'success','titulo'=>'Erro fatal'])
    <strong>Erro:</strong> Sua mensagem de erro.		
     @endcomponent


     @alerta(['tipo'=>'primary','titulo'=>'Erro fatal'])
    <strong>Erro:</strong> Sua mensagem de erro.		
     @endcomponent


     @alerta(['tipo'=>'secondary','titulo'=>'Erro fatal'])
    <strong>Erro:</strong> Sua mensagem de erro.		
     @endcomponent


     @alerta(['tipo'=>'info','titulo'=>'Erro fatal'])
    <strong>Erro:</strong> Sua mensagem de erro.		
     @endcomponent


     @alerta(['tipo'=>'dark','titulo'=>'Erro fatal'])
    <strong>Erro:</strong> Sua mensagem de erro.		
     @endcomponent

    <script src="{{URL::to('js/app.js')}}" type="text/javascript"></script>
    <!--<script src="{{asset('js/app.js')}}" type="text/javascript"> 
    </script>-->

</body>
</html>