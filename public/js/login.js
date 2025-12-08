function validarLogin() {
    const control = document.getElementById("control").value.trim();
    const password = document.getElementById("password").value.trim();
    const mensaje = document.getElementById("mensaje");

    let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

    // Buscar usuario por número de control
    const user = usuarios.find(u => u.control === control);

    if (!user) {
        mensaje.style.color = "red";
        mensaje.innerText = "Número de control no registrado";
        return;
    }

    if (user.password !== password) {
        mensaje.style.color = "red";
        mensaje.innerText = "Contraseña incorrecta";
        return;
    }

    // Acceso correcto
    sessionStorage.setItem("logueado", "true");
    sessionStorage.setItem("usuarioActivo", user.control);

    // Mostrar loader si lo tienes
    const loader = document.getElementById("loader");
    if (loader) loader.style.display = "flex";

    setTimeout(() => {
        window.location.href = "index.html";
    }, 1500);
}
