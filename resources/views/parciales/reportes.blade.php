<script>
  var cAp = 0;
  var cEn = 0;
  var cNu = 0;
  var cNo = 0;
  var cTo = 0;
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
      case "Aprovado":
        filaTabla(tBody, snap);
        cAp++;
        actualizarElementoTd('nAp', cAp);
      break;
      case "No aprovado":
        filaTabla(tBody, snap);
        cNo++;
      break;
      case "En proceso":
        filaTabla(tBody, snap);
        cEn++;
        actualizarElementoTd('nEn', cEn);
      break;
      case "Nuevo":
        filaTabla(tBody, snap);
        cNu++;
        actualizarElementoTd('nNu', cNu);
      break;
    }
    tBody.appendChild(tr);
    cTo = cAp + cNo + cEn + cNu;
    actualizarElementoTd('nTo', cTo);
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
</script>