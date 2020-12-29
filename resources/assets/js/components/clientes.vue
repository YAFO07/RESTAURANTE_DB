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
          <i class="fa fa-align-justify"></i>Cliente
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
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="objeto in ArrayDatos" :key="objeto.id">
                <td v-text="objeto.nombre"></td>
                <td v-text="objeto.direccion"></td>
                <td v-text="objeto.telefono"></td>
                <td v-text="objeto.email"></td>
                <td>
                  <button
                    type="button"
                    class="btn btn-warning btn-sm"
                    data-toggle="modal"
                    data-target="#modalNuevo"
                  >
                    <i class="icon-pencil"></i>
                  </button>
                  &nbsp;
                  <button
                    type="button"
                    class="btn btn-danger btn-sm"
                    data-toggle="modal"
                    data-target="#modalNuevo"
                  >
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
    <!--Inicio del modal agregar/actualizar-->
    <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none" aria-hidden="true">
      <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Agregar cliente</h4>
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
                  >nombre</label
                >
                <div class="col-md-9">
                  <input
                    type="text"
                    v-model="nombre"
                    id="nombre"
                    name="nombre"
                    class="form-control"
                    placeholder="ingrese el nombre "
                  />
                  <span class="help-block">(*) Ingrese el nombre del cliente</span>
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
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input">telefono</label
                >
                <div class="col-md-9">
                  <input type="text" v-model="telefono" id="telefono" name="telefono" class="form-control" placeholder="ingrese el telefono del cliente "/>
                  <span class="help-block">(*) Ingrese telefono del cliente</span>
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
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input"
                  >direccion</label
                >
                <div class="col-md-9">
                  <input type="text" v-model="direccion" id="direccion" name="direccion" class="form-control" placeholder="ingrese la direccion del cliente "/>
                  <span class="help-block">(*) Ingrese direccion del cliente</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 form-control-label" for="text-input"
                  >email</label
                >
                <div class="col-md-9">
                  <input type="text" v-model="email" id="email" name="email" class="form-control" placeholder="ingrese la email del cliente "/>
                  <span class="help-block">(*) Ingrese email del cliente</span>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
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
            <h4 class="modal-title">Eliminar cliente</h4>
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
            <p>Estas seguro de eliminar cliente?</p>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Cerrar
            </button>
            <button type="button" class="btn btn-danger">Eliminar</button>
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
      nombre: "",
      direccion: "",
      telefono: "",
      email: ""
    };
  },
  methods: {
    liscat() {
      let me = this;
      var url = "/cliente";
      axios.get(url).then(function (response) {
          var respuesta = response.data;
          me.ArrayDatos = respuesta.cliente;
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
