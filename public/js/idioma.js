$(document).ready(function() {
    $('#tableIn').DataTable({
        "language": {
            "url": url + "assets/global/plugins/datatables/Spanish.json"
        },
        "dom": '<"row"<"col-sm-12 col-md-6"f><"col-sm-12 col-md-6"<"btn btn-md btn-dark topRight"<"fa fa-download"B>>>>rt<"bottom m-top"lip><"clear">',
        buttons: [
            'excel'
        ],
        scrollY: "500px",
        scrollX: true,
        scrollCollapse: true,
        fixedColumns: {
            left: 1,
            right: 1
        }
        /* dom: 'Bfrtip',
        buttons: [
          'excel'
        ] */
    });
    $('#tableRegs').DataTable({
        "language": {
            "url": url + "assets/global/plugins/datatables/Spanish.json"
        },
        "dom": '<"row"<"col-sm-12 col-md-6 m-bottom"f><"col-sm-12 col-md-6">>rt<"bottom m-top"lip><"clear">',
        fixedColumns: true
        /* dom: 'Bfrtip', */
        /* buttons: [
          'excel'
        ] */
    });
});