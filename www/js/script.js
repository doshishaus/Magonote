let BaseMagorun = 500;
const BaseMagorunID = document.getElementById("baseMagorun");

function BaseMagorunAdd() {
    const MagorunRow = document.querySelectorAll("#base input[type='checkbox']");
    console.log(MagorunRow);

    let counter = 0;

    MagorunRow.forEach(checkbox => {
        if(checkbox.checked){
            counter++;
        }
    });

    const result = document.getElementById("result");
    BaseMagorun = BaseMagorun + counter*50;
    result.textContent = counter*50 + "マゴルン";
    BaseMagorunID.textContent = BaseMagorun + "マゴルン";
    
}

let activeMagorun = 1000;
const activeMagorunID = document.getElementById("activeMagorun");

function ActiveMagorunAdd() {
    const MagorunRow = document.querySelectorAll("#active input[type='checkbox']");
    console.log(MagorunRow);

    let counter = 0;

    MagorunRow.forEach(checkbox => {
        if(checkbox.checked){
            counter++;
        }
    });

    const result = document.getElementById("result");
    activeMagorun = activeMagorun + counter*50;
    result.textContent = counter*50 + "マゴルン";
    activeMagorunID.textContent = activeMagorun + "マゴルン";
    
}