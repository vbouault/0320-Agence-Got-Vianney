let price = 0;
function changePrix(){
    var Destination = document.getElementById('destination').value;
    var nbPersonnes = document.getElementById('voyageur').value;
    var prix = document.getElementById('spanPO');
    if (Destination=="port_real"){
      prix.innerHTML = nbPersonnes*249;
      price = nbPersonnes*249;
    }
    else if(Destination=="winterfell"){
      prix.innerHTML = nbPersonnes*299;
      price = nbPersonnes*299;
    }
    else{
      prix.innerHTML = 0;
    }
  }


  const boutonResa = document.getElementById('boutonResa');
  boutonResa.addEventListener("click", changeTxtModal);

  function changeTxtModal(){
    const name = document.getElementById('resaNom').value;
    const lieu = document.getElementById('destination').value;
    const modalName = document.getElementById('modalName');
    const modalLieu = document.getElementById('modalLieu');
    const modalPrix = document.getElementById('modalPrix');

    modalName.innerHTML = name;
    modalLieu.innerHTML = lieu;
    modalPrix.innerHTML = price;
  }
