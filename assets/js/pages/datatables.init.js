$(document).ready(function(){$("#basic-datatable").DataTable();var a=$("#datatable-buttons").DataTable({lengthChange:!1,buttons:[{extend:"copy",className:"btn-light"},{extend:"excel",className:"btn-light"},{extend:"pdf",className:"btn-light"}]});$("#selection-datatable").DataTable({select:{style:"multi"}}),$("#responsive-datatable").DataTable(),$("#key-datatable").DataTable({keys:!0}),a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")});