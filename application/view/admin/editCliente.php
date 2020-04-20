<div class="container">
<h3 class="blue-text" style="padding-left: 300px">Editar Cliente</h3>  
    <div class="row" style="padding-left: 300px">
    <form method="post" action="<?php echo URL; ?>admin/updateCliente">
    <div class="row">
      <div class="input-field col s6">
        <input title="No se puede modificar" type="text" onkeypress="return justNumbers(event);" readonly  name="id" value="<?php echo htmlspecialchars($Cliente->Id_Cliente, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label >Identificación</label>
      </div>
      <div class="input-field col s4">
        <select title="Seleccione tipo de identificación" required name="tipo_id">
        <option value="" disabled selected>Tipo De Identificación</option>
        <option value="1">C.C</option>
        <option value="2">Nit</option>
        </select>
      </div>
    </div>
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese Nombre" type="text" name="nombre" value="<?php echo htmlspecialchars($Cliente->Nombre, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label for="first_name">Nombre</label>
        </div>
      </div>
            <div class="row">
            <div class="input-field col s4">
           <input title="Ingrese Nombre De Contacto" type="text"required name="nomc" value="<?php echo htmlspecialchars($Cliente->Nombre_contacto, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label >Nombre De Contacto</label>
         </div>
            <div class="input-field col s3">
           <input title="Ingrese Número De Contacto" type="text"required onkeypress="return justNumbers(event);" name="numc" value="<?php echo htmlspecialchars($Cliente->Numero_contacto, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label >Número De Contacto</label>
         </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input title="Ingrese Dirección" type="text" name="direccion" value="<?php echo htmlspecialchars($Cliente->Direccion, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label for="first_name">Dirección</label>
        </div>
      </div>
      <div class="row">
            <div class="input-field col s3">
           <input title="Ingrese Nombre De télefono" type="text" name="tel" required onkeypress="return justNumbers(event);" value="<?php echo htmlspecialchars($Cliente->Tel, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label >Teléfono</label>
         </div>
      </div>
          <div class="row">
            <div class="input-field col s6">
           <input title="Ingrese correo electrónico" type="email" name="email" value="<?php echo htmlspecialchars($Cliente->Correo, ENT_QUOTES, 'UTF-8'); ?>" required>
          <label >Correo</label>
         </div>
      </div>
      <div class="row">
        <button title="Botón para guardar" class="btn waves-effect waves-light" type="submit" name="submit_updateCliente">Guardar
        <i class="material-icons right">send</i>
        </button>
      </div>
   </form>  
</div>
<br><br><br><br><br><br><br>



   <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="<?php echo URL; ?>js/materialize.min.js"></script>

      <script type="text/javascript">
    function justNumbers(e)
            {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
            return true;
             
            return /\d/.test(String.fromCharCode(keynum));
            }
          </script>
</div>
</main>