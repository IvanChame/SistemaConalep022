function registrar() {
    const control = document.getElementById("control").value.trim();
    const nombre = document.getElementById("nombre").value.trim();
    const carrera = document.getElementById("carrera").value.trim();
    const password = document.getElementById("password").value.trim();
    const mensaje = document.getElementById("mensaje");

    if (!control || !nombre || !carrera || !password) {
        mensaje.style.color = "red";
        mensaje.innerText = "Todos los campos son obligatorios";
        return;
    }

    // Revisar si ya existe el usuario
    let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

    if (usuarios.some(u => u.control === control)) {
        mensaje.style.color = "red";
        mensaje.innerText = "Este número de control ya está registrado";
        return;
    }

    // Crear nuevo usuario
    usuarios.push({
        control,
        nombre,
        carrera,
        password
    });

    localStorage.setItem("usuarios", JSON.stringify(usuarios));

    mensaje.style.color = "green";
    mensaje.innerText = "Cuenta creada correctamente";

    setTimeout(() => {
        window.location.href = "login.html";
    }, 1500);
}
