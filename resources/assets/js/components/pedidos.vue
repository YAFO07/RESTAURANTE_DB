<template>
  <div id="app">
    <!-- Orlando David Estrada Linares -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item"><a href="#">Admin</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <i class="fa fa-align-justify"></i>Pedido
          <button
            type="button"
            class="btn btn-secondary"
            data-toggle="modal"
            data-target="#modalNuevo"
          >
            <i class="icon-plus"></i>&nbsp;Nuevo
          </button>
        </div>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-md-6">
              <div class="input-group">
                <select class="form-control col-md-3" id="opcion" name="opcion">
                  <option value="nombre">Nombre</option>
                  <option value="descripcion">Descripción</option>
                </select>
                <input
                  type="text"
                  id="texto"
                  name="texto"
                  class="form-control"
                  placeholder="Texto a buscar"
                />
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-search"></i> Buscar
                </button>
              </div>
            </div>
          </div>
          <table class="table table-bordered table-striped table-sm">
            <thead>
              <tr>
                <th>id_cliente</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="objeto in ArrayDatos" :key="objeto.id">
                <td v-text="objeto.id_cliente"></td>
                <td>
                  <button
                    type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                    <i class="icon-pencil"></i>
                  </button>
                  &nbsp;
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" @click="eliminarCat(objeto)">
                    <i class="icon-trash"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
          <nav>
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#">Ant</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Sig</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- Fin ejemplo de tabla Listado -->
    </div>
    <!-- Inicio del modal agregar/actualizar -->
    <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none" aria-hidden="true">
      <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Crear Nuevo Pedido</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">X</span>
            </button>
          </div>
          <div class="modal-body">
            <form
              action=""
              method="post"
              enctype="multipart/form-data"
              class="form-horizontal"
            >
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input"
                  >id_cliente</label
                >
                <div class="col-md-9">
                  <input
                    type="text"
                    v-model="id_cliente"
                    id="id_cliente"
                    name="id_cliente"
                    class="form-control"
                    placeholder="ingrese el id "
                  />
                  <span class="help-block">(*) Ingrese el nombre del Pedido</span>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-body">
            <form
              action=""
              method="post"
              enctype="multipart/form-data"
              class="form-horizontal"
            >

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cerrar</button>
            <button type="button" @click="regCat" class="btn btn-primary">Guardar</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!--Fin del modal-->
    <!-- Inicio del modal Eliminar -->
    <div
      class="modal fade"
      id="modalEliminar"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      style="display: none"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-danger" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Eliminar pedido</h4>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">X</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Estas seguro de eliminar pedido?</p>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Cerrar
            </button>
            <button type="button" @click="eliminarCat" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      ArrayDatos: [],
      id_cliente: ""
    };
  },
  methods: {
    liscat() {
      let me = this;
      var url = "/plato";
      axios.get(url).then(function (response) {
          var respuesta = response.data;
          me.ArrayDatos = respuesta.plato;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    regCat() {
      let me = this;
      var url = "/pedido/registrar";
      axios.post(url, {
          id_cliente: this.id_cliente
        })
        .then(function (response) {
          me.liscat();
          alert("se guardo correctamente");
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    eliminarCat(data = []) {
      let me = this;
          var url = "/pedido/eliminar";
          axios.post(url, {
              id: data["id"],
            })
            .then(function (response) {
              me.liscat();
            })
            .catch(function (error) {
              console.log(error);
            });
        }
    },
  mounted() {
    console.log("Component mounted.");
    this.liscat();
  },
};
</script>
