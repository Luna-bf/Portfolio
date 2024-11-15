const dropdown = document.querySelectorAll('.dropdown');
        
//Boucle for pour la boîte de changement de langue
for(let i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener('click', function(e) {
        for(let h = 0; h < dropdown.length; h++) {
          dropdown[h].querySelector('.dropdown-content').classList.add('hide');
        }
        e.currentTarget.querySelector('.dropdown-content').classList.toggle('hide');
    });
}
