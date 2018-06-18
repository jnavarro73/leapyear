<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
<script src=" {{ asset('js/extraDateFunctions.js') }}"></script>
<h1>Test Hoy-voy </h1>

<p>¿Pertenece a año bisiesto esta fecha?:</p>{{testLeapController::FECHA}}
<input type='hidden' id='datesent' value='{{testLeapController::FECHA}}'>
----<br>
{{$now}}
<div id="content" name="content">
    
</div>
