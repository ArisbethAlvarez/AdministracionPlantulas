<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Notas de pedido</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="contenedor-pagina">
      <header>
        <div class="encabezado">
          <a class="navbar-brand" href="#">
            <img
              src="/css/logoplantulas.png"
              alt="Logo"
              width="130"
              height="124"
              class="d-inline-block align-text-center"
            />
          </a>
          <div>
            <h2>Notas de pedido</h2>
            <p>Registra las notas de las ventas de pedido</p>
          </div>
        </div>

        <div class="barra-navegacion">
          <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <div class="Opciones-barra">
                <button
                  onclick="window.location.href='dashboard_clientesVentas.php'"
                >
                  Regresar inicio
                </button>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <main>
        <div class="container">
          <form id="notaPedidoForm">
            <h2>Registrar Nota de Pedido</h2>
            <label for="cliente">Cliente</label>
            <input
              type="text"
              id="cliente"
              placeholder="Nombre del cliente"
              required
            />

            <label for="producto">Producto</label>
            <input
              type="text"
              id="producto"
              placeholder="Producto solicitado"
              required
            />

            <label for="cantidad">Cantidad</label>
            <input
              type="number"
              id="cantidad"
              placeholder="Cantidad"
              min="1"
              required
            />

            <label for="fechaPedido">Fecha del Pedido</label>
            <input type="date" id="fechaPedido" required />

            <label for="notas">Notas adicionales</label>
            <textarea
              id="notas"
              rows="4"
              placeholder="Comentarios o instrucciones especiales"
            ></textarea>

            <button type="submit">Guardar Nota</button>
          </form>
        </div>

        <script>
          document
            .getElementById("notaPedidoForm")
            .addEventListener("submit", function (e) {
              e.preventDefault();
              const notaPedido = {
                cliente: document.getElementById("cliente").value,
                producto: document.getElementById("producto").value,
                cantidad: parseInt(document.getElementById("cantidad").value),
                fechaPedido: document.getElementById("fechaPedido").value,
                notas: document.getElementById("notas").value,
              };
              console.log("Nota de pedido guardada:", notaPedido);
              alert("Nota de pedido registrada exitosamente");
              this.reset();
            });
        </script>
      </main>

      <footer>
        <p>&copy; 2025 PLANTAS AGRODEX. Todos los derechos reservados.</p>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
