"use strict";
document.querySelector('.egge').addEventListener('click',function(){
    const egg = document.querySelector('.number').value;
    if(!egg)
    {
    document.querySelector('.correct').textContent="⛔no number";
    }else{
        document.querySelector('.correct').textContent="🎉good is un number";
    }
})
document.querySelector('.again').addEventListener('click',function(){
    const num = Math.trunc(Math.random()*20)+1;
    document.querySelector('.highscoore').textContent = num;
    });Math.r