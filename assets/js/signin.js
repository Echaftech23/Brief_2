const showOption = document.querySelector('#hiddenOptionToggle');

showOption.addEventListener('click', function(){
    document.querySelector('#hiddenItemOptionContainer').classList.remove('d-none');
    showOption.classList.add('d-none');
});