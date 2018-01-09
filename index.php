<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>Piedra Papel Tijera Lagarto Spock.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="icon" type="image/png" href="img/hand_spock.ico" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript" charset="utf-8"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
          <div class="row">
            <div class="col-md-12 thumbnail">
                <h1>Piedra Papel Tijera Lagarto Spock</h1>
                <p>Esta es la página para el juego, en la imagen inferior tienes la img con la lógica. Puedes seleccionar la opción que desees para uno o dos jugadores; si dejas en "Seleccione..." la opción 2 la máquina elegirá tu "contrincante. Finalmente se mostrará el resultado en la casilla a la derecha. Si quieres volver a jugar basta con clicar <b>Play<b> de nuevo.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-1">
                <h4>Elige bien ;-)</h4>
            </div>
            <div class="col-md-2">
                <label for="choiceSelect">Opciones disponibles:</label>
                <select class="form-control selectpicker show-tick show-menu-arrow" id="choiceSelect" data-show-icon="true">
                  <option value="0">Piedra</option>
                  <option value="1">Papel</option>
                  <option value="2">Tijera</option>
                  <option value="3">Lagarto</option>
                  <option value="4">Spock</option><!-- class="fa fa-hand-spock-o" -->
                </select>
            </div>
            <div class="col-md-2">
                <label for="choiceSelect2">Jugador2:</label>
                <select class="form-control selectpicker show-tick show-menu-arrow" id="choiceSelect2" data-show-icon="true">
                    <option value="-1" style="background: #5cb85c; color: #fff;" selected="selected"><b>Seleccione...</b></option>
                  <option value="0">Piedra</option>
                  <option value="1">Papel</option>
                  <option value="2">Tijera</option>
                  <option value="3">Lagarto</option>
                  <option value="4">Spock</option><!-- class="fa fa-hand-spock-o" -->
                </select>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-success" id="play"><b>Play</b></button>
            </div>
            <div class="col-md-2">
                <div class="alert alert-warning" id="resultMachine"><!--.alert-dismissable-->
                </div>
            </div>
            <div class="col-md-4">
                <div class="alert alert-info" id="resultBox"><!--.alert-dismissable-->
                  Aquí aparecerá el resultado.
                </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-6 thumbnail">
                  <img src="img/Rock_Paper_Scissors_Lizard_Spock_es.svg.png" class="img-rounded" alt="game">
              </div>
              <div class="col-md-6 thumbnail">
                  <img src="img/Pierre_ciseaux_feuille_lézard_spock_aligned.svg.png" class="img-rounded" alt="game">
              </div>
          </div>
        </div>
    </body>
</html>
