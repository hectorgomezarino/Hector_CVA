/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    $("#play").click(function(){
        var humanSelected = $("#choiceSelect").val();
        var machineSelected = Math.floor(Math.random() * 5); 

        console.log(humanSelected);
        console.log(machineSelected);
    });

});