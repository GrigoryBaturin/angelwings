const showButton = document.querySelector('.showButton');
const hide_other_reports = document.querySelector('.hide_other_reports');
const show_reports = document.querySelector('.show_reports');
const lastReport = document.getElementById('lastReport');

showButton.addEventListener('click', () => {
    hide_other_reports.classList.remove('hideActive');
    show_reports.style.display = 'none';
    lastReport.style.display = 'none';
})