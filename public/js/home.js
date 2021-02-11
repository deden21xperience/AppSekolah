// let nama = document.getElementById('nama')
// nama.addEventListener('focusout', function () {
//   let username = document.getElementById('username')
//   username.value = nama.value.replace(/\s/g, '');
//   username.value = username.value.toString().toLowerCase()
// })

// let btnProses = document.getElementById('proses')
// let frmPendaftaran = document.getElementById('form-pendaftaran')
// btnProses.addEventListener('click', function () {
//   frmPendaftaran.submit();
// })

// /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
// let prevScrollpos = window.pageYOffset;
// window.onscroll = function () {
//   let currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("panel").style.bottom = "0";
//   } else {
//     document.getElementById("panel").style.bottom = "50px";
//   }
//   prevScrollpos = currentScrollPos;
// }