$(document).ready(function () {
    var table = $('#example').DataTable({
        dom: 'Bfrltip',

        lengthChange: true,
        buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
    });

    table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
});
