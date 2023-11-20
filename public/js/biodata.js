function validateForm() {
    // Mendapatkan nilai input dari elemen formulir
    var fullname = document.getElementById("fullname").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var nim = document.getElementById("nim").value;
    var email = document.getElementById("email").value;

    // Validasi isi formulir
    if (fullname === "" || username === "" || password === "" || nim === "" || email === "") {
        alert("Semua kolom harus diisi");
        return false;
    }

    // Validasi panjang password
    if (password.length < 8 || password.length > 20) {
        alert("Password harus memiliki panjang antara 8 hingga 20 karakter");
        return false;
    }

    // Validasi agama
    var selectedAgama = document.getElementById("agama").value;
    alert("Agama: " + selectedAgama);

    // Validasi jenis kelamin
    var selectedGender = document.querySelector('input[name="jeniskelamin"]:checked').value;
    alert("Jenis Kelamin: " + selectedGender);

    // Semua validasi berhasil
    return true;
}