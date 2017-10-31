
<script>

  // Funciones actualizar, eliminar y agregar a la tabla
  function crearElementoTd(tr, id, valor)
  {
    const td = document.createElement("td");
    td.id = id;
    td.innerText = valor;
    tr.appendChild(td);
  }
  // funcion para agregar cualquier elemento html al tr de una tabla
  function crearElemento(elemento, identificador, clase, texto, ruta, valor)
  {
    item = document.createElement(elemento);
    if (ruta !== '__') { item.href = ruta; }
    if (identificador !== ''){ item.id = identificador; }
    if (clase !=='') { item.className = clase; }
    if (texto !=='') { item.innerText = texto; }
    if (valor !== '') { item.appendChild(valor);}
    return item;
  }

  function actualizarElementoTd(id, valor)
  {
    const td = document.getElementById(id);
    td.innerText = valor;
  }

  function elimarElementoTr(id)
  {
    const tr = document.getElementById(id);
    tr.remove();
  }

  function filaTabla(tBody, valor)
  {
    const tr = document.createElement("tr");
    tr.id = valor.key;
    crearElementoTd(tr, ("image" + valor.key), valor.val().image);
    crearElementoTd(tr, ("estado" + valor.key), valor.val().estado);
    crearElementoTd(tr, ("comentario" + valor.key), valor.val().comentario);
    crearElementoTd(tr, ("direccion" + valor.key), valor.val().direccion);
    crearElementoTd(tr, ("fecha" + valor.key), valor.val().fecha);
    crearElementoTd(tr, ("hora" + valor.key), valor.val().hora);
    tBody.appendChild(tr);
  }

  function agregarFilaBotonV(tBody, valor, ruta)
  {
    const tr = document.createElement("tr");
    tr.id = valor.key;
    tr.appendChild(crearElemento("td", ("image" + valor.key), "", valor.val().image, "", ""));
    tr.appendChild(crearElemento("td", ("estado" + valor.key), "", valor.val().estado, "", ""));
    tr.appendChild(crearElemento("td", ("comentario" + valor.key), "", valor.val().comentario, "", ""));
    tr.appendChild(crearElemento("td", ("direccion" + valor.key), "", valor.val().direccion, "", ""));
    tr.appendChild(crearElemento("td", ("fecha" + valor.key), "", valor.val().fecha, "", ""));
    tr.appendChild(crearElemento("td", ("hora" + valor.key), "", valor.val().hora, "", ""));
    // Botones ver, editar, borrar
    tr.appendChild(crearElemento("a", "", "btn btn-primary margeCompletoTitulo-1", "", ruta, crearElemento("i", "", "fa fa-eye", "", "", "")));
    //tr.appendChild(crearElemento("a", "", "btn btn-primary margeCompletoTitulo-1", "", ruta, crearElemento("i", "", "fa fa-check-square-o", "", "", "")));
    //tr.appendChild(crearElemento("a", "", "btn btn-primary margeCompletoTitulo-1", "", ruta, crearElemento("i", "", "fa fa-check-square-o", "", "", "")));
    tBody.appendChild(tr);
  }

  function agregarFilaBotonVE(tBody, valor, rutaVer, rutaEditar)
  {
    const tr = document.createElement("tr");
    tr.id = valor.key;
    tr.appendChild(crearElemento("td", ("image" + valor.key), "", valor.val().image, "", ""));
    tr.appendChild(crearElemento("td", ("estado" + valor.key), "", valor.val().estado, "", ""));
    tr.appendChild(crearElemento("td", ("comentario" + valor.key), "", valor.val().comentario, "", ""));
    tr.appendChild(crearElemento("td", ("direccion" + valor.key), "", valor.val().direccion, "", ""));
    tr.appendChild(crearElemento("td", ("fecha" + valor.key), "", valor.val().fecha, "", ""));
    tr.appendChild(crearElemento("td", ("hora" + valor.key), "", valor.val().hora, "", ""));
    // Botones ver, editar, borrar
    tr.appendChild(crearElemento("a", "", "btn btn-primary margeCompletoTitulo-1", "", rutaVer, crearElemento("i", "", "fa fa-eye", "", "", "")));
    tr.appendChild(crearElemento("a", "", "btn btn-primary", "", rutaEditar, crearElemento("i", "", "fa fa-check-square-o", "", "", "")));
    //tr.appendChild(crearElemento("a", "", "btn btn-primary margeCompletoTitulo-1", "", ruta, crearElemento("i", "", "fa fa-check-square-o", "", "", "")));
    tBody.appendChild(tr);
  }

  function agregarFilaBotonVEE(tBody, valor, rutaVer, rutaEditar, rutaEliminar)
  {
    const tr = document.createElement("tr");
    tr.id = valor.key;
    tr.appendChild(crearElemento("td", ("image" + valor.key), "", valor.val().image, "", ""));
    tr.appendChild(crearElemento("td", ("estado" + valor.key), "", valor.val().estado, "", ""));
    tr.appendChild(crearElemento("td", ("comentario" + valor.key), "", valor.val().comentario, "", ""));
    tr.appendChild(crearElemento("td", ("direccion" + valor.key), "", valor.val().direccion, "", ""));
    tr.appendChild(crearElemento("td", ("fecha" + valor.key), "", valor.val().fecha, "", ""));
    tr.appendChild(crearElemento("td", ("hora" + valor.key), "", valor.val().hora, "", ""));
    // Botones ver, editar, borrar
    tr.appendChild(crearElemento("a", "", "btn btn-primary margeCompletoTitulo-1", "", rutaVer, crearElemento("i", "", "fa fa-eye", "", "", "")));
    tr.appendChild(crearElemento("a", "", "btn btn-primary", "", rutaEditar, crearElemento("i", "", "fa fa-check-square-o", "", "", "")));
    tr.appendChild(crearElemento("a", "", "btn btn-primary margeCompletoTitulo-1", "", rutaEliminar, crearElemento("i", "", "fa fa-check-square-o", "", "", "")));
    tBody.appendChild(tr);
  }

  function tipoTabla(tipo, idTotalTipo)
  {
    var cEn = 0;
    //Extraer elementos del html
    const tBody = document.getElementById('cTabla');

    //Creamoms una referencia 
    const dbRefObject = firebase.database().ref().child('basedatos');
    const dbRefList = dbRefObject.child('reporte');

    dbRefList.on('child_added', snap => {
      const tr = document.createElement("tr");
      tr.id = snap.key;
      switch(snap.val().estado)
      {
        case tipo:
          filaTabla(tBody, snap);
          cEn++;
          actualizarElementoTd(idTotalTipo, cEn);
        break;
      } 
      tBody.appendChild(tr);
    });

    dbRefList.on('child_changed', snap => {
      // Campo imagen tomado como folio
      actualizarElementoTd("image" + snap.key, snap.val().image);
      actualizarElementoTd("estado" + snap.key, snap.val().estado);
      actualizarElementoTd("comentario" + snap.key, snap.val().descripcion);
      actualizarElementoTd("direccion" + snap.key, snap.val().direccion);
      actualizarElementoTd("fecha" + snap.key, snap.val().fecha);
      actualizarElementoTd("hora" + snap.key, snap.val().hora);
    });

    dbRefList.on('child_removed', snap => {
      elimarElementoTr(snap.key);
    }); 
  }

  function tabla(tipo, idTotalTipo)
  {
    var cEn = 0;
    //Extraer elementos del html
    const tBody = document.getElementById('cTabla');

    //Creamoms una referencia 
    const dbRefObject = firebase.database().ref().child('reporte');
    //const dbRefList = dbRefObject.child('reporte');

    dbRefObject.on('child_added', snap => {
      const tr = document.createElement("tr");
      tr.id = snap.key;
      switch(snap.val().estado)
      {
        case tipo:
          agregarFilaBotonV(tBody, snap, "/");
          cEn++;
          actualizarElementoTd(idTotalTipo, cEn);
        break;
      } 
      tBody.appendChild(tr);
    });

    dbRefObject.on('child_changed', snap => {
      // Campo imagen tomado como folio
      actualizarElementoTd("image" + snap.key, snap.val().image);
      actualizarElementoTd("estado" + snap.key, snap.val().estado);
      actualizarElementoTd("comentario" + snap.key, snap.val().descripcion);
      actualizarElementoTd("direccion" + snap.key, snap.val().direccion);
      actualizarElementoTd("fecha" + snap.key, snap.val().fecha);
      actualizarElementoTd("hora" + snap.key, snap.val().hora);
    });

    dbRefObject.on('child_removed', snap => {
      elimarElementoTr(snap.key);
    }); 
  }
</script>