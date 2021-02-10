let nama = document.getElementById('nama')
nama.addEventListener('focusout', function () {
  let username = document.getElementById('username')
  username.value = nama.value.replace(/\s/g, '');
  username.value = username.value.toString().toLowerCase()
})

let btnProses = document.getElementById('proses')
let frmPendaftaran = document.getElementById('form-pendaftaran')
btnProses.addEventListener('click', function () {
  frmPendaftaran.submit();
})

console.log(window.innerWidth)