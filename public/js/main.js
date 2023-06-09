var navigation = document.getElementById('nav1');
var deroulant = document.querySelector('.deroulant');
var subMenu = document.querySelector('.sub-menu');
var isSubMenuVisible = false;

navigation.addEventListener('mouseover', function() {
  navigation.style.backgroundColor = 'black';
});

navigation.addEventListener('mouseout', function() {
  if (!isSubMenuVisible) {
    navigation.style.backgroundColor = 'transparent';
  }
});

deroulant.addEventListener('click', function() {
  isSubMenuVisible = !isSubMenuVisible;
  subMenu.style.display = isSubMenuVisible ? 'block' : 'none';

  if (isSubMenuVisible) {
    navigation.style.backgroundColor = 'black';
  } else {
    navigation.style.backgroundColor = 'transparent';
  }
});
 
document.querySelector('.outil').addEventListener('mousover',function(){
  document.querySelector('.deroulant').style.display = 'block';
  console.log('test')
})
document.querySelector('.test').addEventListener('mouseover', () => {
  console.log('hello');
});