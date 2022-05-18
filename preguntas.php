<?php include("includes/header.php") ?>

    <main class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-8 d-flex justify-content-center align-items-center">
                
                        <form action="final.php" class="p-3 caja-preguntas text-center" >
                            
                            <div class="mb-3">
                                <h4 class="titulo-preguntas">¿Hay veces que tienes la boca reseca?</h4>
                                <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="boca" id="si" value="si">
                                    <label class="form-check-label" for="si">Si</label>
                                  </div>
                                  <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="boca" id="no" value="no">
                                    <label class="form-check-label" for="no">No</label>
                                  </div>
                            </div>
                            
                            <div class="mb-3">
                                <h4 class="titulo-preguntas">¿Hay veces que te sientes agotado?</h4>
                                <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="agotado" id="si" value="si">
                                    <label class="form-check-label" for="si">Si</label>
                                  </div>
                                  <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="agotado" id="no" value="no">
                                    <label class="form-check-label" for="no">No</label>
                                  </div>
                            </div>
                            
                            <div class="mb-3">
                                <h4 class="titulo-preguntas">¿Hay veces que te duele la cabeza?</h4>
                                <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="cabeza" id="si" value="si">
                                    <label class="form-check-label" for="si">Si</label>
                                  </div>
                                  <div class="form-check form-check-inline input-grande">
                                    <input class="form-check-input" type="radio" name="cabeza" id="no" value="no">
                                    <label class="form-check-label" for="no">No</label>
                                  </div>
                            </div>
                            <div class="mb-3">
                                <a href="final.php">
                                    <button class="btn btn-primary btn-lg">Enviar</button>
                                </a>
                            </div>
                        </form>
                    
                    
                </div>
                <div class="col-4">
                    <img src="image/botella-verde.png" alt="Suerox Mora-Azul" class="img-fluid">
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