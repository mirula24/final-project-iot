
// Navbar-fixed
window.onscroll=function(){
    const header = document.querySelector('header');
    const fixNav = header.offsetTop;
    if (window.pageYOffset > fixNav){
        header.classList.add('nav-fixed');
    }else{
        header.classList.remove('nav-fixed');
    }
}

// Humberger

const humberger =document.querySelector('#humberger');
const navMenu = document.querySelector('#nav-menu');

humberger.addEventListener('click', function(){
    humberger.classList.toggle('humberger-active')
    navMenu.classList.toggle('hidden')

});


// document.addEventListener('DOMContentLoaded', function() {
//     function fetchData() {
//         fetch('update.php')
//             .then(response => response.json())
//             .then(data => {
//                 const dataContainer = document.getElementById('data-container');
//                 dataContainer.innerHTML = '';

//                 data.forEach(item => {
//                     const div = document.createElement('div');
//                     div.className = 'data-item';
//                     div.textContent = `ID: ${item.id}, Name: ${item.name}`; // Sesuaikan dengan struktur data Anda
//                     dataContainer.appendChild(div);
//                 });
//             })
//             .catch(error => console.error('Error fetching data:', error));
//     }

//     // Panggil fetchData setiap beberapa detik
//     setInterval(fetchData, 5000);

//     // Panggil fetchData pertama kali saat halaman dimuat
//     fetchData();
// });