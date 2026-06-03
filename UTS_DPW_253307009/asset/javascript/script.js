function showToast(message) {
  const toast = document.getElementById("toast");
  toast.textContent = message;
  toast.className = "show";

  setTimeout(() => {
    toast.className = toast.className.replace("show", "");
  }, 3000);
}

function kirimForm() {
  const nama = document.getElementById("nama").value.trim();
  const nik = document.getElementById("nik").value.trim();
  const jalur = document.getElementById("jalur").value;
  const form = document.getElementById("ppdbForm");

  if (nama === "" || nik === "" || jalur === "") {
    showToast("Semua field wajib diisi!");
    return;
  }

  if (nik.length !== 16) {
    showToast("NIK harus tepat 16 digit!");
    return;
  }

  showToast("Pendaftaran berhasil dikirim!");
  form.reset();
}