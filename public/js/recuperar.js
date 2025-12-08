function recuperar() {
    const control = document.getElementById("control").value.trim();
    const mensaje = document.getElementById("mensaje");

    let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

    const user = usuarios.find(u => u.control === control);

    if (!user) {
        mensaje.style.color = "red";
        mensaje.innerText = "Este número de control no existe";
        return;
    }

    mensaje.style.color = "green";
    mensaje.innerText = "Tu contraseña es: " + user.password;
}
