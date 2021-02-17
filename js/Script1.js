function igual(){ 
    var valor = document.calculadora.visor.value;
    document.calculadora.visor.value= eval(valor);
}

function button(x){ 
    document.calculadora.visor.value=document.calculadora.visor.value+x;
}
