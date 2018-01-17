
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/nemecio/css/mdb.css" rel="stylesheet">
    <link href="css/nemecio/css/style.css" rel="stylesheet">

</head>
<body style ="background-color:#48476E;">

  <style>

  .form-dark .font-small {
  font-size: 1.8rem; }

  .form-dark [type="radio"] + label,
  .form-dark [type="checkbox"] + label {
  font-size: 0.8rem; }

  .form-dark [type="checkbox"] + label:before {
  top: 2px;
  width: 15px;
  height: 15px; }

  .form-dark .md-form label {
  color: #ffffff; }

  .form-dark input[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #00C851;
  -webkit-box-shadow: 0 1px 0 0 #00C851;
  box-shadow: 0 1px 0 0 #00C851; }

  .form-dark input[type=text]:focus:not([readonly]) + label {
  color: #ffffff; }

  .form-dark input[type=password]:focus:not([readonly]) {
  border-bottom: 1px solid #00C851;
  -webkit-box-shadow: 0 1px 0 0 #00C851;
  box-shadow: 0 1px 0 0 #00C851; }

  .form-dark input[type=password]:focus:not([readonly]) + label {
  color: #ffffff; }

  .form-dark input[type="checkbox"] + label:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 17px;
  height: 17px;
  z-index: 0;
  border: 1.5px solid #fff;
  border-radius: 1px;
  margin-top: 2px;
  -webkit-transition: 0.2s;
  transition: 0.2s; }

  .form-dark input[type="checkbox"]:checked + label:before {
  top: -4px;
  left: -3px;
  width: 12px;
  height: 22px;
  border-style: solid;
  border-width: 2px;
  border-color: transparent #00c851 #00c851 transparent;
  -webkit-transform: rotate(40deg);
  -ms-transform: rotate(40deg);
  transform: rotate(40deg);
  -webkit-backface-visibility: hidden;
  -webkit-transform-origin: 100% 100%;
  -ms-transform-origin: 100% 100%;
  transform-origin: 100% 100%; }
  </style>
<div  class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div style="margin-top:200px;" class="panel panel-default">
                <div  class="panel-body">
<!--Section: Live preview-->
                      <section  class="form-dark">
<!--Form without header-->
        <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table7.jpg');">
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
   <!--Header-->
                              <div class="text-center">
                                <img src="css/bcie.png" width="68" height="68" alt="User" />
                              <h3 class="white-text mb-5 mt-4 font-bold"><strong>BIENVENIDOS AL BANCO CENTROAMERICANO DE INTEGRACION ECONOMICA</strong></h3>
                              </div>

                        <form >
                        {{ csrf_field() }}
                          <div class="row d-flex align-items-center mb-4">
                          <div class="text-center mb-3 col-md-12">
                          <a href="{{ route('login') }}" class="green-text ml-1 font-bold"> <button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">ENTRAR</button></a>
                          </div>

                            </div>
                          </form>
        </section>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.js"></script>
<script src="css/nemecio/js/popper.min.js"></script>
<script src="css/nemecio/js/mdb.js"></script>
<script src="css/nemecio/js/jquery-3.2.1.min.js">  </script>
<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="js/admin.js"></script>

</body>
</html>
