let price = 0;
function changePrix(){
    var Destination = document.getElementById('destination').value;
    var nbPersonnes = document.getElementById('voyageur').value;
    var prix = document.getElementById('spanPO');
    if (Destination=="Port Real"){
      price = nbPersonnes*249;
      prix.innerHTML = price;
    }
    else if(Destination=="Winterfell"){
      price = nbPersonnes*299;
      prix.innerHTML = price;
    }
    else{
      price = 0;
      prix.innerHTML = price;
      
    }
  }

  const boutonResa = document.getElementById('boutonResa');
  

  class Modal {
    constructor(idForm,idModal,idError,msgError){
      this._idForm = idForm;
      this._idModal = idModal;
      this._idError = idError;
      this._msgError = msgError;
      this._elemForm = document.getElementById(this._idForm);
      this._elemError = document.getElementById(this._idError);
      //this._valueIdForm = document.getElementById(this._idForm).value;
    }
    getValue(){
      if (document.getElementById(this._idForm).value === ""){
      this._elemError.innerHTML=this._msgError;
      this._elemForm.style.border='1px solid red';
      }
      else{
        document.getElementById(this._idModal).innerHTML = document.getElementById(this._idForm).value;
        this._elemForm.style.border='1px solid gray';
      }
    }
    getValueDate(){
      if (document.getElementById(this._idForm).value === ""){
        this._elemError.innerHTML=this._msgError;
        this._elemForm.style.border='1px solid red';
      }
      else{
        let date = document.getElementById(this._idForm).value;
        date = date.split('-');
        date = `${date[2]}/${date[1]}/${date[0]}`;
        document.getElementById(this._idModal).innerHTML = date;
        this._elemForm.style.border='1px solid gray';
      }
      
      
    }
  }
  
    const modalName = new Modal('resaNom','modalName','errorName','');
    const modalLieu = new Modal('destination','modalLieu','errorDestination','');
    const modalDepart = new Modal('start','modalDepart','errorDepart','');
    const modalRetour = new Modal('return','modalRetour','errorRetour','');
    const modalVoyageurs = new Modal('voyageur','modalVoyageurs','errorVoyageur','');

  boutonResa.addEventListener("click", changeTxtModal);
 
    
  function changeTxtModal(){
    if (modalName._elemForm.value === "" || modalLieu._elemForm.value === "" || modalDepart._elemForm.value === "" || modalRetour._elemForm.value === "" || modalVoyageurs._elemForm.value === ""){
      boutonResa.setAttribute('data-target','');
    }
    else{
      boutonResa.setAttribute('data-target','#exampleModalCenter');
    }
    modalName.getValue();
    modalLieu.getValue();
    modalDepart.getValueDate();
    modalRetour.getValueDate();
    modalVoyageurs.getValue();
    document.getElementById('modalPrix').innerHTML = price;
    
  }
  
  const validResa = document.getElementById('validResa');
  validResa.addEventListener("click", redirectionResa);
  function redirectionResa(){
    modalLieu._elemForm.value === "Port Real" ? document.location.href="port_real.php" : document.location.href="winterfell.php";
  } 


