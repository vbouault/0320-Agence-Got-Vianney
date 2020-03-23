let price = 0;
function changePrix(){
    var Destination = document.getElementById('destination').value;
    var nbPersonnes = document.getElementById('voyageur').value;
    var prix = document.getElementById('spanPO');
    if (Destination=="port_real"){
      price = nbPersonnes*249;
      prix.innerHTML = price;
    }
    else if(Destination=="winterfell"){
      price = nbPersonnes*299;
      prix.innerHTML = price;
    }
    else{
      price = 0;
      prix.innerHTML = price;
      
    }
  }

  class Modal {
    constructor(idForm,idModal){
      this._idForm = idForm;
      this._idModal = idModal;
      this._valueIdForm = document.getElementById(this._idForm).value;
    }
    getValue(){
      if (this._valueIdForm[4]==='-' && this._valueIdForm[7]==='-'){
        this._valueIdForm = this._valueIdForm.split('-');
        this._valueIdForm = `${this._valueIdForm[2]}/${this._valueIdForm[1]}/${this._valueIdForm[0]}`;
        document.getElementById(this._idModal).innerHTML = this._valueIdForm;
      }
      else{
        document.getElementById(this._idModal).innerHTML = this._valueIdForm;
      }
      
    }
  }
  

  const boutonResa = document.getElementById('boutonResa');
  boutonResa.addEventListener("click", changeTxtModal);
  
  function changeTxtModal(){
    new Modal('resaNom','modalName').getValue();
    new Modal('destination','modalLieu').getValue();
    new Modal('start','modalDepart').getValue();
    new Modal('return','modalRetour').getValue();
    new Modal('voyageur','modalVoyageurs').getValue();
    document.getElementById('modalPrix').innerHTML = price;
  }




