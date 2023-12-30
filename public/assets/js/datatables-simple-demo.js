window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
    const datatablesDokter = document.getElementById('datatablesDokter');
    if (datatablesDokter) {
        new simpleDatatables.DataTable(datatablesDokter);
    }
});
