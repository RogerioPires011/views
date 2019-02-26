<!DOCTYPE html>
<html>
<head>
	<link href="{{URL::to('css/app.css')}}" rel="stylesheet">
</head>
<body>

   @if(isset($produto))

   @if(count($produto) == 0)
      <h1>Nenhum produto</h1>
  
   @elseif (count($produto) === 1)
      <h1>Um produto</h1>
   
   @else
      <h1>Temos vários produto</h1>
   @endif

   @else
      <h2>Variável produtos não foi passada como parâmetro.</h2>
   @endif
   

   <script src="{{URL::to('js/app.js')}}" type="text/javascript"></script>

</body>
</html>