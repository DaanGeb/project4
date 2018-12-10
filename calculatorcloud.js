function calc (pakket){
    if (pakket==="geel"){
        var maand_price =4;
    }
    if (pakket==="oranje"){
        var maand_price =6;
    }
    if (pakket==="groen"){
        var maand_price =10;
    }

    if(confirm("Wilt u de prijs van het "+pakket+" pakket berekenen?")){
        var maanden = prompt("Hoeveel maanden wilt u het "+pakket+" hebben?");
        maanden = Number(maanden.replace(/[^0-9.]/g,""));
        if(confirm("Wilt u de prijs voor het pakket "+pakket+" voor "+maanden+" maanden berekenen?")){
            if(maanden>11) {
                if (maanden > 59) {
                    var korting = 15;
                } else {
                    var korting = 8;
                }
            }else{
                var korting = 0;
            }
            alert("de prijs is €"+((maand_price*maanden)-(maand_price*maanden/100*korting)).toFixed(2)+" voor "+maanden+" maanden.");
        }
    }
}