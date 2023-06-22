var navigation = document.getElementById('nav1');

var navigation2 = document.querySelector('.other');
var deroulant = document.querySelector('.deroulant');
var subMenu = document.querySelector('.sub-menu');
var isSubMenuVisible = false;
var deroulant2 = document.querySelector('.deroulant2');
var subMenu2 = document.querySelector('.sub-menu2');
var isSubMenuVisible2 = false;

navigation.addEventListener('mouseover', function() {
  navigation.style.backgroundColor = 'black';
});

navigation.addEventListener('mouseout', function() {
  if (!isSubMenuVisible && !isSubMenuVisible2) {
    navigation.style.backgroundColor = 'transparent';
    navigation2.style.backgroundColor = 'black';
  }
});

/*navigation2.addEventListener('mouseout', function() {
  if (!isSubMenuVisible && !isSubMenuVisible2) {
    navigation.style.backgroundColor = 'transparent';
  }
});*/


deroulant.addEventListener('click', function() {
  isSubMenuVisible = !isSubMenuVisible;
  subMenu.style.display = isSubMenuVisible ? 'block' : 'none';

  if (isSubMenuVisible) {
    navigation.style.backgroundColor = 'black';
  } else if (!isSubMenuVisible && !isSubMenuVisible2) {
    navigation.style.backgroundColor = 'transparent';
    navigation2.style.backgroundColor = 'black';
  }
});

deroulant2.addEventListener('click', function() {
  isSubMenuVisible2 = !isSubMenuVisible2;
  subMenu2.style.display = isSubMenuVisible2 ? 'block' : 'none';

  if (isSubMenuVisible2) {
    navigation.style.backgroundColor = 'black';
  } else if (!isSubMenuVisible && !isSubMenuVisible2) {
    navigation.style.backgroundColor = 'transparent';
    navigation2.style.backgroundColor = 'black';
  }
});

function effacerLabelmail() {
  var label = document.querySelector("label[for='typeEmailX-2']");
  label.textContent = "";
}

function effacerLabelmdp() {
  var label = document.querySelector("label[for='typePasswordX-2']");
  label.textContent = "";
} 

function effacerLabelnb_door() {
  var label = document.querySelector("label[for='nb_door']");
  label.textContent = "";
  
}

function effacerLabelcreation_year() {
  var label = document.querySelector("label[for='creation_year']");
  label.textContent = "";
  
}
function effacerLabelfuel() {
  var label = document.querySelector("label[for='fuel']");
  label.textContent = "";
  
}
function effacerLabelpower() {
  var label = document.querySelector("label[for='power']");
  label.textContent = "";
  
}
function effacerLabelmiles() {
  var label = document.querySelector("label[for='miles']");
  label.textContent = "";
  
}
function effacerLabelcolor() {
  var label = document.querySelector("label[for='color']");
  label.textContent = "";
  
}
function effacerLabelprice() {
  var label = document.querySelector("label[for='price']");
  label.textContent = "";
  
}
function effacerLabeltransmission() {
  var label = document.querySelector("label[for='transmission']");
  label.textContent = "";
  
}
function effacerLabeltitle() {
  var label = document.querySelector("label[for='title']");
  label.textContent = "";
  
}
function effacerLabeldescription() {
  var label = document.querySelector("label[for='description']");
  label.textContent = "";
  
}

function effacerLabelusr() {
  var label = document.querySelector("label[for='usr']");
  label.textContent = "";
  
}



 
// document.querySelector('.outil').addEventListener('mousover',function(){
//   document.querySelector('.deroulant').style.display = 'block';
//   console.log('test')
// })
// document.querySelector('.test').addEventListener('mouseover', () => {
//   console.log('hello');
// });