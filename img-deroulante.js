var imgs=[
  'https://images8.alphacoders.com/932/thumb-1920-932618.jpg',
  'https://wallpapers.justgeek.fr/web/wallpapers/le-trone-de-fer-game-of-thrones-155992551327/1920x1080.jpg',
  'https://i0.wp.com/wallur.com/wp-content/uploads/2016/12/song-ice-background-11.jpg?fit=1920%2C1080',
  'https://www.booska-p.com/up/images/news/game-of-thrones-white-walkers-wallpaper.jpg'
];


var nbImgs=imgs.length;
var position=0;
var time=4000;

function changeImg(){
    document.getElementById("imgSlide").src=imgs[position];
    if(position<nbImgs-1){
      position++;
    }
    else{
      position=0;
    }
    
  }
setInterval('changeImg()',time);

function slide (x){


    if (x=="avant")
        position++
    else
        position--

    if (position<0){
        position=nbImgs-1;
    }
    else if(position==nbImgs){
        position=0;
    }
    document.getElementById('imgSlide').src = imgs[position];

 
}

function go(){
  let valueSelect = document.getElementById('select').value;
  console.log(valueSelect);
   if (valueSelect==""){
       alert("Veuillez choisir une déstination");
   }
   else if (valueSelect=="1"){
     document.location.href="port_real.php";
   }
   else if (valueSelect=="0"){
     document.location.href="winterfell.php";
   }
 }

function drop() {
  document.getElementsByClassName('dropdown')[0].classList.toggle('down');
  
    setTimeout(function() {
      document.getElementsByClassName('dropdown')[0].style.overflow = ('hidden')
    }, 500)
} 
  
function changePrix(){
  var Destination = document.getElementById('destination').value;
  var nbPersonnes = document.getElementById('voyageur').value;
  var prix = document.getElementById('spanPO');
  if (Destination=="port_real"){
    prix.innerHTML = nbPersonnes*249;
  }
  else if(Destination=="winterfell"){
    prix.innerHTML = nbPersonnes*299;
  }
  else{
    prix.innerHTML = 0;
  }
}

//snippet

function copyToClipboard(event) {
  // cancel default behaviour
  event.preventDefault()

  // get data from element sending the event
  const data = event.target.getAttribute('data-to-copy')

  // create a temporary textarea to interact with
  const tmpTextarea = document.createElement('textarea')
  tmpTextarea.value = data

  // add it to the document
  document.body.appendChild(tmpTextarea)

  // make the copy
  tmpTextarea.select()
  document.execCommand('copy')

  // clean the document
  document.body.removeChild(tmpTextarea)
}

//document.querySelector('.copyable').addEventListener('click', copyToClipboard)

function pasteFromClipboard(event) {
  const email = document.querySelector('#email')
  email.focus()

  // TODO: make the "paste" button working
}

//document.querySelector('.paster').addEventListener('click', pasteFromClipboard)

// snippet changement de couleur de fond


function switchTheme() {
  let valueSelect = document.getElementById('select').value;
  if (valueSelect == '0') {
      document.documentElement.setAttribute('class', 'winterfell');
  }
  else if(valueSelect == '1'){
    document.documentElement.setAttribute('class', 'portReal');
  }
  else {
      document.documentElement.setAttribute('class', '');
  }    
}

//Ajustement hauteur du conteneur acceuil

 function getTheStyle(){
  let image = document.getElementById("imgSlide");
  let HeigthImg = window.getComputedStyle(image,null).getPropertyValue("height");
  let headAcc = document.getElementById("headAcc");
  headAcc.style.setProperty('height', HeigthImg);
  setTimeout
 }

 setInterval('getTheStyle()',50);
 




