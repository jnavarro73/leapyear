<html>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta  http-equiv="expires" content="0" />
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <script src=" {{ asset('js/extraDateFunctions.js') }}"></script>
    <div id='container' class="container">
        <div class=" text-center" class="col-md-12">
            <h1>Test Hoy-voy </h1>
        </div>

        <div class="row">
            <div class="col-md-12">
                ¿Pertenece a año bisiesto esta fecha?:{{testLeapController::FECHA}}
                <input type='hidden' id='datesent' value='{{testLeapController::FECHA}}'>
            </div>
        </div>
        
        <div class="row">            
            <div class="row">
                <div class="alert alert-success collapse" role="alert">
                  
                </div>
                <div class="alert alert-info collapse" role="alert">

                </div>
                <div class="alert alert-warning collapse" role="alert">

                </div>
                <div class="alert alert-danger collapse" role="alert">

                </div>
            </div>
            <div id="content" name="content">

            </div>
        </div>
</html>