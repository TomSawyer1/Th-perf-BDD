var navigation = document.getElementById('nav1');
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
  }
});

deroulant.addEventListener('click', function() {
  isSubMenuVisible = !isSubMenuVisible;
  subMenu.style.display = isSubMenuVisible ? 'block' : 'none';

  if (isSubMenuVisible) {
    navigation.style.backgroundColor = 'black';
  } else if (!isSubMenuVisible && !isSubMenuVisible2) {
    navigation.style.backgroundColor = 'transparent';
  }
});

deroulant2.addEventListener('click', function() {
  isSubMenuVisible2 = !isSubMenuVisible2;
  subMenu2.style.display = isSubMenuVisible2 ? 'block' : 'none';

  if (isSubMenuVisible2) {
    navigation.style.backgroundColor = 'black';
  } else if (!isSubMenuVisible && !isSubMenuVisible2) {
    navigation.style.backgroundColor = 'transparent';
  }
});

 
// document.querySelector('.outil').addEventListener('mousover',function(){
//   document.querySelector('.deroulant').style.display = 'block';
//   console.log('test')
// })
// document.querySelector('.test').addEventListener('mouseover', () => {
//   console.log('hello');
// });