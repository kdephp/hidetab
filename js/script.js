/*HTML has been fully loaded*/
window.addEventListener('DOMContentLoaded', function (){

    'use strict';

    let tab = document.querySelectorAll('.info-header-tab'),
        info = document.querySelector('.info-header'),
        tabContent = document.querySelectorAll('.info-tabcontent');

    // Hide tab
    function hideTabContent(a) {
        for (let i = a; i <tabContent.length; i++){
            tabContent[i].classList.remove('show');
            tabContent[i].classList.add('hide');
        }
    }
    // Call hide tab function
    hideTabContent(1);

    // Show tab
    function showTabContent(b){
        if (tabContent[b].classList.contains('hide')){
            tabContent[b].classList.remove('hide');
            tabContent[b].classList.add('show');
        }
    }

    // Menu click tracking
    info.addEventListener('click', function (event){
        // Click recording
        let target = event.target;
        if (target && target.classList.contains('info-header-tab')) {
            // Listing all tabs
            for(let i = 0; i < tab.length; i++){
                // Checking for matches with a click
                if (target == tab[i]){
                    hideTabContent(0);
                    showTabContent(i);
                    break;
                }
            }
        }
    });
});