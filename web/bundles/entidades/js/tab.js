/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$("#grid_example").dataTable({
    bJQueryUI: true,
    bPaginate: true,
    bLengthChange: false,
    bFilter: true,
    "oLanguage": {
        "sLengthMenu": "Registros Display _MENU_ por página",
        "sZeroRecords": "No he encontrado nada - lo siento",
        "sInfo": "Mostrando _START_ a _END_ de registros _TOTAL_",
        "sInfoEmpty": "Mostrando 0-0 de 0 registros",
        "sInfoFiltered": "(filtrado de los registros totales _MAX_)",
        "sSearch": " Buscar:"





    }


});




$("div.dataTables_length select").combobox();

