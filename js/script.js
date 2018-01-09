/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * 
 * @param {int} player1
 * @param {int} player2
 * @returns {Number}, -1 win player 1, tie 0, 1 win player2
 */
function checkWinner (player1, player2){
    //TO DO: validar rango de valores correcto, entre 0 y 4.
    var result = 0;
    if (player1===player2) {
        $("#resultMachine").html("<b>Copión.</b>");
        result = 0;
    } else if(player1===0) { //Rock
        $("#resultMachine").html("<b>Piedra.</b>");
        // Rock beats scissors
        if (player2 === 2){
            result = -1;
        // Rock beats lizard.
        } else if( player2 === 3){
            result = -1;
        // rock loses to paper.
        }else if( player2 === 1) {
            result = 1;
        // rock loses to spock.
        }else if( player2 === 4) {
            result = 1;
        }
    } else if(player1===1) { //Paper
        $("#resultMachine").html("<b>Papel.</b>");
        // paper beats rock.	
        if( player2 === 0){
            result = -1;
        // paper beats spock.	
        }else if(player2 === 4){
            result = -1;
        // paper loses to scissors.
        }else if(player2 === 2){
            result = 1;
        // paper loses to lizard.
        }else if(player2 === 3){
            result = 1;
        }
    } else if(player1===2) { //scissors
        $("#resultMachine").html("<b>Tijera.</b>");
        // scissors beats paper.	
        if( player2 === 1){
            result = -1;
        // scissors beats lizard.
        }else if(player2 === 3){
            result = -1;
        // scissors loses to rock.
        }else if(player2 === 0){
            result = 1;
        // scissors loses to spock.
        }else if(player2 === 4){
            result = 1;
        }
    } else if(player1===3) { //lizard
        $("#resultMachine").html("<b>Lagarto.</b>");
        // lizard beats paper.	
        if( player2 === 2){
            result = -1;
        // lizard beats spock.
        }else if(player2 === 4){
            result = -1;
        // lizard loses to rock.
        }else if(player2 === 0){
            result = 1;
        // lizard loses to scissors.
        }else if(player2 === 2){
            result = 1;
        }
    } else if(player1===4) { //spock
        $("#resultMachine").html("<b>Spock.</b>");
        // spock beats rock.	
        if( player2 === 0){
            result = -1;
        // spock beats scissors.
        }else if(player2 === 2){
            result = -1;
        // spock loses to lizard.
        }else if(player2 === 3){
            result = 1;
        // spock loses to paper.
        }else if(player2 === 1){
            result = 1;
        }
    }
    return result;
}

$(document).ready(function(){
    $("#play").click(function(){
        var humanSelected = Math.floor($("#choiceSelect").val());
        var player2 = Math.floor($("#choiceSelect2").val());
        /*$("#resultMachine").html("");
        $("#resultBox").html("");*/
        if (player2===-1) {
            player2 = Math.floor(Math.random() * 5);
        }

        var result = checkWinner(player2, humanSelected);
        if (result===0) {
            $("#resultBox").html("<b>Empate.</b>");
        } else if (result===1) {
            $("#resultBox").html("<b>Gana Jugador 1.</b>");
        } else if (result===-1) {
            $("#resultBox").html("<b>Gana la Máquina/Jugador2.</b>");
        }
    });

});