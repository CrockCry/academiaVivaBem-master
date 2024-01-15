/*--------------------------------------------------
    BMI Calculator
---------------------------------------------------*/
function calculateBMI(){
    var weight = document.bmiCalc.weight.value
    var height = document.bmiCalc.height.value

    if(weight > 0 && height > 0){
        var finalBmi = (weight/(height*height))*10000;
        document.bmiCalc.bmi.value = new Number(finalBmi).toFixed(1)

        if(finalBmi < 18.5){
            document.bmiCalc.meaning.value = "Abaixo de peso IMC"
        }

        if(finalBmi > 18.5 && finalBmi < 25){
            document.bmiCalc.meaning.value = "Peso ideal IMC"
        }

        if(finalBmi > 25 && finalBmi < 30){
            document.bmiCalc.meaning.value = "Acima do peso IMC"
        }

        if(finalBmi > 30 && finalBmi < 35){
            document.bmiCalc.meaning.value = "Obeso IMC"
        }

        if(finalBmi > 35){
            document.bmiCalc.meaning.value = "Extremamente obeso IMC"
        }

    }else{
        alert ("Por favor preencha todos.")
    }
}
