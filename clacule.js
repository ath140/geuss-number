"use strict";

document.querySelector('.again').addEventListener('click',function(){
    const num = Math.trunc(Math.random()*3)+1;
    document.querySelector('.egge').addEventListener('click',function(){
        const egg = document.querySelector('.number').value;
        if(egg==num)
        {
        document.querySelector('body').style.backgroundColor='green';
        document.querySelector('.correct').textContent='🎉 YOU WIN';
        document.querySelector('.NUMS').textContent='10';

            }else{
            document.querySelector('body').style.backgroundColor='yellow';
            document.querySelector('.correct').textContent='😁 TRY AGAIN';
        }
    })
    
    });