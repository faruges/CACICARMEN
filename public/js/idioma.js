$(document).ready(function () {
  $('.table').DataTable({   
    "language": {
      "url": url + "assets/global/plugins/datatables/Spanish.json"
    },
    "dom": '<"row"<"col-sm-12 col-md-6"f><"col-sm-12 col-md-6"<"btn btn-md btn-dark topRight"<"fa fa-download"B>>>>rt<"bottom"lip><"clear">',
    buttons: [
      'excel'
    ]
    /* dom: 'Bfrtip',
    buttons: [
      'excel'
    ] */
  });
});