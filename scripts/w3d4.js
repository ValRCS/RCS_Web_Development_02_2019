const para = document.querySelectorAll('p');

para[2].addEventListener('click', updateName);

// Players need new names
/*
  kaķis
*/
function updateName() {
    let name = prompt('Enter a new name');
    para[2].textContent = 'Player 3: ' + name;
}