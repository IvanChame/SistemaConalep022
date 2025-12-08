function mostrarExcel() {
    const input = document.getElementById("archivoExcel");
    const contenedor = document.getElementById("contenedor");
    contenedor.innerHTML = ""; // limpiar

    if (!input.files.length) {
        alert("Selecciona un archivo Excel primero.");
        return;
    }

    const archivo = input.files[0];
    const lector = new FileReader();

    lector.onload = function(e) {
        const data = new Uint8Array(e.target.result);
        const workbook = XLSX.read(data, { type: "array" });

        workbook.SheetNames.forEach(nombreHoja => {
            const hoja = workbook.Sheets[nombreHoja];
            const json = XLSX.utils.sheet_to_json(hoja, { header: 1 });

            // 👉 CREAR EL CONTENEDOR HOJA
            const hojaDiv = document.createElement("div");
            hojaDiv.className = "hoja";

            // Título
            const titulo = document.createElement("div");
            titulo.className = "hoja-titulo";
            titulo.innerText = "Hoja: " + nombreHoja;
            hojaDiv.appendChild(titulo);

            const tabla = document.createElement("table");

            // Rango A8–G47 → filas 7 a 46, columnas 0 a 6
            for (let fila = 7; fila < 47; fila++) {
                if (!json[fila]) continue;

                const tr = document.createElement("tr");

                for (let col = 0; col <= 2; col++) {
                    let valor = json[fila][col];

                    if (col === 2 && typeof valor === "number") {
                        valor = valor / 10;
                        valor = valor.toFixed(1);
                    }

                    const td = document.createElement("td");
                    td.innerText = valor !== undefined ? valor : "";
                    tr.appendChild(td);
                }

                tabla.appendChild(tr);
            }

            // 👉 AGREGA LA TABLA DENTRO DE LA HOJA
            hojaDiv.appendChild(tabla);

            // 👉 AGREGA TODA LA HOJA AL CONTENEDOR
            contenedor.appendChild(hojaDiv);
        });
    };

    lector.readAsArrayBuffer(archivo);
}
