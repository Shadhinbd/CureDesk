$(document).ready(function (){
	// datatable export buttons
    if ($('#datatable-export').length && !$.fn.DataTable.isDataTable('#datatable-export')) {
        $('#datatable-export').DataTable( {
		dom: 'Bfrtip',		
		buttons: [
			{
            extend: 'collection',
            text: 'Export Data',
            buttons: [
				{
                    extend: 'pdf',
                    exportOptions: {
                        columns: "thead th:not(.action-btn)"
                    }
                },
				{
                    extend: 'excel',
                    exportOptions: {
                        columns: "thead th:not(.action-btn)"
                    }
                },
				{
                    extend: 'csv',
                    exportOptions: {
                        columns: "thead th:not(.action-btn)"
                    }
                },
				{
                    extend: 'print',
                    exportOptions: {
                        columns: "thead th:not(.action-btn)"
                    }
                }
            ]
        	}
    	]
        });
    }

	
});


