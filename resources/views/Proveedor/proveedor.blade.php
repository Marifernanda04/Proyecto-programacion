<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulario</title>
    <!--DISEÑO-->
    @vite(['resources/css/bootstrap.css', 'resources/js/bootstrap.js'])
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        FASHION_BEAUTY
    </a>
    <!--<a class="btn btn-outline-light" href="#" role="button">INICIO</a>-->
    </nav>
</head>
<center>
  <body>
    <br><br><br>
    <h1>Proveedor</h1>
    <section>
      <form method="post" action="/proveedor">
        @csrf
        <table width='400' cellpadding='6' border='0'>
          <tr>
            <td colspan="2" valign='center' align='center'>
            </td>
          </tr>
          <tr>
            <td width='25%' valign='top' align='right'>
              <label for='proveedor'>Nombre:</label>
            </td>
            <td>
              <input type="text" name="proveedor" placeholder="nombre proveedor..." required value={{ old('proveedor') }} >
              @error('proveedor')
                <i>{{ $message }}</i>
              @enderror
            </td>
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Correo:</label>
            </td>
            <td>
              <input type="email" name="correo" placeholder="correo electronico..." required value={{ old('correo') }}>
              @error('correo')
                <i>{{ $message }}</i>
              @enderror
            </td>
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Telefono:</label>
            </td>
            <td>
              <input type="tel" name="telefono" placeholder="teléfono..." required value={{ old('telefono') }}>
              @error('correo')
                <i>{{ $message }}</i>
              @enderror
            </td>
          </tr>
          <tr>
            <td valign='top' align='right'>
              <label>Direccion:</label>
            </td>
            <td>
              <textarea name="direccion" placeholder="dirección..." required value={{ old('direccion') }}></textarea>
              @error('comentario')
                <i>{{ $message }}</i>
              @enderror
            </td>
          </tr>
        </table>
        <br>
        <div>
          <input type="submit" value="Enviar">
        </div>
      </form>
      <br>
    </section>
  </body>
</center>
</html>
