$('#tablaArtistas').change(function () {
    $table.bootstrapTable('refreshOptions', {
      sortStable: $('#sortStable').prop('checked')
    }); 
});