

<!DOCTYPE html>
<html lang="en" class="antialiased">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>DATA TABLES 0123</title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
	  <!--Replace with your tailwind.css once created--> 
	  

	 <!--Regular Datatables CSS-->
	 <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	 <!--Responsive Extension Datatables CSS-->
	 <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
	 
	  <style>
		
		/*Overrides for Tailwind CSS */
		
		.dataTables_wrapper select,
		.dataTables_wrapper .dataTables_filter input {
			color: #4a5568; 			
			padding-left: 1rem; 		
			padding-right: 1rem; 	
			padding-top: .5rem; 		
			padding-bottom: .5rem; 	
			line-height: 1.25; 			
			border-width: 2px; 			
			border-radius: .25rem; 		
			border-color: #edf2f7; 		
			background-color: #edf2f7; 
		}

		
		table.dataTable.hover tbody tr:hover, table.dataTable.display tbody tr:hover {
			background-color: #ebf4ff;	
		}
		
		.dataTables_wrapper .dataTables_paginate .paginate_button		{
			font-weight: 700;				
			border-radius: .25rem;			
			border: 1px solid transparent;	
		}
		
		.dataTables_wrapper .dataTables_paginate .paginate_button.current	{
			color: #fff !important;				
			box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06); 	
			font-weight: 700;					
			border-radius: .25rem;				
			background: #667eea !important;		
			border: 1px solid transparent;		
		}

		/*Pagination Buttons - Hover */
		.dataTables_wrapper .dataTables_paginate .paginate_button:hover		{
			color: #fff !important;			
			box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);	
			font-weight: 700;					
			border-radius: .25rem;				
			background: #667eea !important;		
			border: 1px solid transparent;		
		}
		
		/*Add padding to bottom border */
		table.dataTable.no-footer {
			border-bottom: 1px solid #e2e8f0;	
			margin-top: 0.75em;
			margin-bottom: 0.75em;
		}
		
		/*Change colour of responsive icon*/
		table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
			background-color: #667eea !important; 
		}

		
      </style>
	  
 

   </head>
   <body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
      

      <!--Container-->
      <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2 py-28">

      <html>
<head>
<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
</head>
<body>

</body>
</html> 
			
			<!--Card-->
			 <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
			 
             <a href="{{url('export')}}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                Export
            </a>
            </button>
				
				<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>
						<tr>
							<th data-priority="1" class="border" >Buku</th>
							<th data-priority="2" class="border">Jenis Buku</th>
							<th data-priority="3" class="border">Rak Buku</th>

						</tr>
					</thead>
					<tbody>
                    @foreach($prak4 as $data)
						<tr>
							<td class="border" >{{$data->judul}}</td>
                            <td class="border" >{{$data->tahun_terbit}}</td>
                            <td class="border" >{{$data->jenis}}</td>
						</tr>
					@endforeach
						<!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
						
					</tbody>
					
				</table>
				
				
			</div>
			<!--/Card-->


      </div>
      <!--/container-->
	  
	  



	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		
	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {
			
			var table = $('#example').DataTable( {
					responsive: true
				} )
				.columns.adjust()
				.responsive.recalc();
		} );
	
	</script>

   </body>
</html>

