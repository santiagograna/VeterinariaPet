<?php
include_once "cabecera.php";
?>

<div class="container">
      
      <div class="row">
          <div class="col-md-4"></div>

          <div class="col-md-4 mt-5">

                <h5>
                    Iniciar Sesion
                </h5>

                <form id="formLogin" class="row g-3" novalidate>
                    <div class="col-md-12">
                        <label for="validationCustomUsername" class="form-label">Document</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="txt-documento" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="validationCustomUsername" class="form-label">Password</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" id="txt-password" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a Password.
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
</div>
</div>

<script src="vista/js/cl_usuario.js"></script>
<script src="vista/js/main.js"></script>