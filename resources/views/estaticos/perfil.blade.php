<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="POST" action="{{ route('perfil') }}" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('subi tu posteo') }}</label>
            <div class="form-group">
              <input class="form-control" type="file" name="imagen" value=""><span><?php //isset($mensaje_error["contrasenia"]) ? print $mensaje_error["imagen"] : "";?></span>
            </div>

            <div class="col-md-6">
              <input class="form-control" type="text" name="posteo" value="">
            </div>
        </div>
    </form>
  </body>
</html>
