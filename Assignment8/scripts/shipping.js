"use strict";
const $ = selector => document.querySelector(selector);

var total = $("#total");
total.disabled = true;
const calc = () =>{
    let cost = $("#cost").value;
    cost = parseInt(cost);
    if(!isNaN(cost) && cost > 0){
        calcShipping(cost);
    } else {
        alert("Please enter a number value greater than zero");
    }
};
const calcShipping = (costNum) =>{
    if(costNum > 0 && costNum <= 50){
        costNum += costNum * 0.2;
    }else if(costNum > 50 && costNum <= 200){
        costNum += costNum*0.18;
    }else if(costNum > 200 && costNum <= 500){
        costNum += costNum*0.15;
    }else if(costNum > 500 && costNum <= 1000){
        costNum += costNum*0.12;
    }else{
        costNum += costNum*.08;
    }
    $("#total").value = costNum;
};
document.addEventListener("DOMContentLoaded", () => {
    $("#calculate").addEventListener("click", calc);
    
    $("#cost").focus();
});

