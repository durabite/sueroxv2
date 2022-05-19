<?php include("db.php") ?>
<?php include("includes/header.php") ?>

    <main class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-8">
                        
                        <!-- Formulario -->
                        <form action="datos.php" method="POST"  class="p-3 caja-formulario text-center" >
                            
                        <!-- Nombre -->
                        <div class="mb-3">
                                <h4 class="titulo-formulario">Nombre</h4>
                                <input type="text" name="nombre" class="form-control">
                            </div>

                            <!-- Correo Electronico -->
                            <div class="mb-3">
                                <h4 class="titulo-formulario">Correo</h4>
                                <input type="email" name="correo" class="form-control">
                            </div>

                            <!-- Sexo -->
                            <div class="mb-3">
                                <h4 class="titulo-formulario"><i class="mdi mdi-gender-male-female"></i> Sexo</h4>
                                <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="sexo" id="mujer" value="Mujer">
                                    <label class="form-check-label" for="mujer">Mujer</label>
                                  </div>
                                  <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="sexo" id="hombre" value="Hombre">
                                    <label class="form-check-label" for="hombre">Hombre</label>
                                  </div>
                            </div>

                            <!-- Edades -->
                            <div class="mb-3">
                                <h4 class="titulo-formulario"><i class="mdi mdi-human-male-female"></i> Edad</h4>
                                <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="edad" id="inlineRadio1" value="0-18">
                                    <label class="form-check-label" for="inlineRadio1">0-18</label>
                                  </div>

                                  <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="edad" id="inlineRadio2" value="19-25">
                                    <label class="form-check-label" for="inlineRadio2">19-25</label>
                                  </div>

                                  <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="edad" id="inlineRadio2" value="26-35">
                                    <label class="form-check-label" for="inlineRadio2">26-35</label>
                                  </div>

                                  <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="edad" id="inlineRadio2" value="36-45">
                                    <label class="form-check-label" for="inlineRadio2">36-45</label>
                                  </div>

                                  <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="edad" id="inlineRadio2" value="46 o +">
                                    <label class="form-check-label" for="inlineRadio2">46 o +</label>
                                  </div>
                            </div>

                            <!-- Estados -->
                            <div class="mb-3">
                                <select class="form-select" id="inputGroupSelect01" name="ubicacion">
                                    <option selected>Selecciona un estado</option>
                                    <option value="Aguascalientes">Aguascalientes</option>
                                    <option value="Baja California">Baja California</option>
                                    <option value="Baja California Sur">Baja California Sur</option>
                                    <option value="Campeche">Campeche</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="Ciudad de México">Ciudad de México</option>
                                    <option value="Coahuila">Coahuila</option>
                                    <option value="Colima">Colima</option>
                                    <option value="Durango">Durango</option>
                                    <option value="Estado de México">Estado de México</option>
                                    <option value="Guanajuato">Guanajuato</option>
                                    <option value="Guerrero">Guerrero</option>
                                    <option value="Hidalgo">Hidalgo</option>
                                    <option value="Jalisco">Jalisco</option>
                                    <option value="Michoacán">Michoacán</option>
                                    <option value="Morelos">Morelos</option>
                                    <option value="Nayarit">Nayarit</option>
                                    <option value="Nuevo León">Nuevo León</option>
                                    <option value="Oaxaca">Oaxaca</option>
                                    <option value="Puebla">Puebla</option>
                                    <option value="Querétaro">Querétaro</option>
                                    <option value="Quintana Roo">Quintana Roo</option>
                                    <option value="San Luis Potosí">San Luis Potosí</option>
                                    <option value="Sinaloa">Sinaloa</option>
                                    <option value="Sonora">Sonora</option>
                                    <option value="Tabasco">Tabasco</option>
                                    <option value="Tamaulipas">Tamaulipas</option>
                                    <option value="Tlaxcala">Tlaxcala</option>
                                    <option value="Veracruz">Veracruz</option>
                                    <option value="Yucatán">Yucatán</option>
                                    <option value="Zacatecas">Zacatecas</option>
                                  </select>
                            </div>

                            <!-- Boton enviar -->
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary btn-lg" name="enviar" value="Enviar">
                            </div>
                        </form>
                    
                        
                </div>

                <div class="col-4">
                
                          <img src="image/botella-azul.png" alt="Suerox Mora-Azul" class="img-fluid">
                        
                </div>
                <div class="col-12 text-center mt-4">
                            <p class="texto-mk">HIDRATACIÓN <span>SALUDABLE</span></p>
                            <p class="texto-mk2">QUE SE SIENTE</p>
                        </div>
            </div>
        </div>
        <footer class="fixed-bottom animate__animated animate__fadeOutDown animate__delay-3s">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center pt-3">
                        <p class="text-center">*AYUDA A RECUPERAR AGUA Y ELECTRÓLITOS QUE SE PIERDEN AL SUDAR, ALIMÉNTATE SANAMENTE, AVISO N° 163300202B0007</p>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    
    <? include("includes/footer.php") ?>