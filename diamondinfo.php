<?php  include('header.php');  ?>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>

<br><br><br><br><br><br>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js" ></script>

<div class="container" >
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Dealer Name</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>VINOD JEWELLERS</td>
			<td>Nirmal Plaza, 1st Floor, #159, Mint Street,
	CHENNAI - 600079</td>
			<td>044 25390602</td>
			<td>bharathdiamnond@gmail.com</td>
		</tr>
		<tr>
			<td>Mr. MOHAN KUMAR SONI, Mr. MOHIT VERMA</td>
			<td>JAI KRISHNA JEWELLERS CO.PVT.LTD.,26, Adi Banstolla Lane,First Floor, KOLKATA - 700007</td>
			<td>9830975996</td>
			<td>jkjcl@yahoo.co.in</td>
		</tr>
		<tr>
			<td>Mr.BHARAT GEMS</td>
			<td>15/1, C.M.H Road, Opp Metro Pillar No:100,
	Lakshmi Puram, Halasuru,
	BENGALURU - 560008,</td>
			<td>9986009099</td>
			<td>admin@bharatgems.com</td>
		</tr>
		<tr>
			<td>VAIBHAV BHURAT</td>
			<td>Heera Panna Complex, Nagarathpet.,
	BENGALURU</td>
			<td>9448360203</td>
			<td>vaibhavbhurat@gmail.com</td>
		</tr>
		<tr>
			<td> Mr. KAILASH NATH AGARWAL</td>
			<td> KANPUR </td>
			<td>9448360203</td>
			<td>vaibhavbhurat@gmail.com</td>
		</tr>
	
	</tbody>
</table>
</div>


<style type="text/css">
	.paginate_button {
    cursor: pointer;
}

.paginate_button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.paginate_button {
    background-color: #e0e0e0!important;
    color: #000;
}
.paginate_button {
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    font-size: .81rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    margin: .375rem;
    border: 0;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: inherit;
}
.paginate_button {
    position: relative;
    cursor: pointer;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
}
.paginate_button {
    color: #777;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.paginate_button {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.current{
    z-index: 3;
    color: #fff;
    cursor: default;
    border-color: #337ab7;
        background-color: #0b51c5!important;

}
.current:hover{
	color: #fff !important;
}

[type=search] {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;

}

[name=example_length]{
    display: inline-block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem 1.75rem .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e) no-repeat right .75rem center/8px 10px;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

</style>


<script type="text/javascript">
	$(document).ready(function() {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	// document.title='DataTable Excel';
	// DataTable initialisation
	$('#example').DataTable(
		{
			"dom": '<"dt-buttons"Bf><"clear">lirtp',
			"paging": true,
			"autoWidth": true,
			"buttons": [
					{
            extend: 'excelHtml5',
            text: 'Excel',
            customize: function( xlsx ) {
              //Add sheet2 to [Content_Types].xml => <Types>
              //============================================
              var source = xlsx['[Content_Types].xml'].getElementsByTagName('Override')[1];
              var clone = source.cloneNode(true);
              clone.setAttribute('PartName','/xl/worksheets/sheet2.xml');
              xlsx['[Content_Types].xml'].getElementsByTagName('Types')[0].appendChild(clone);
              
              //Add sheet relationship to xl/_rels/workbook.xml.rels => Relationships
              //=====================================================================
              var source = xlsx.xl._rels['workbook.xml.rels'].getElementsByTagName('Relationship')[0];
              var clone = source.cloneNode(true);
              clone.setAttribute('Id','rId3');
              clone.setAttribute('Target','worksheets/sheet2.xml');
              xlsx.xl._rels['workbook.xml.rels'].getElementsByTagName('Relationships')[0].appendChild(clone);
              
              //Add second sheet to xl/workbook.xml => <workbook><sheets>
              //=========================================================
              var source = xlsx.xl['workbook.xml'].getElementsByTagName('sheet')[0];
              var clone = source.cloneNode(true);
              clone.setAttribute('name','Info');
              clone.setAttribute('sheetId','2');
              clone.setAttribute('r:id','rId3');
              xlsx.xl['workbook.xml'].getElementsByTagName('sheets')[0].appendChild(clone);
              
              //Add sheet2.xml to xl/worksheets
              //===============================
              var today = new Date();
              var cMonth = today.getMonth()+1;
              var cDay = today.getDate();
              var dateNow = ((cMonth<10)?'0'+cMonth:cMonth)+'-'+((cDay<10)?'0'+cDay:cDay)+'-'+today.getFullYear();
              var newSheet = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'+
                '<worksheet xmlns="http://schemas.openxmlformats.org/spreadsheetml/2006/main" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:x14ac="http://schemas.microsoft.com/office/spreadsheetml/2009/9/ac" mc:Ignorable="x14ac">'+
                '<cols >'+
                  '<col min="1" max="1" width="24.7" customWidth="1"/>'+
                  '<col min="2" max="2" width="37.7" customWidth="1"/>'+
                '</cols>'+
                '<sheetData>'+
                  '<row  r="1">'+
                    '<c t="inlineStr" r="A1" s="7">'+
                      '<is>'+
                        '<t>Information sheet</t>'+
                      '</is>'+
                    '</c>'+
                  '</row>'+
                  '<row  r="2">'+
                    '<c t="inlineStr" r="A2" s="2">'+
                      '<is>'+
                        '<t>Created by</t>'+
                      '</is>'+
                    '</c>'+
                    '<c t="inlineStr" r="B2" s="3">'+
                      '<is>'+
                        '<t>F12Magic</t>'+
                      '</is>'+
                    '</c>'+
                  '</row>'+
                  '<row  r="3">'+
                    '<c t="inlineStr" r="A3" s="2">'+
                      '<is>'+
                        '<t>Date</t>'+
                      '</is>'+
                    '</c>'+
                    '<c t="inlineStr" r="B3" s="3">'+
                      '<is>'+
                        '<t>'+dateNow+'</t>'+
                      '</is>'+
                    '</c>'+
                  '</row>'+
                '</sheetData>'+
                '<mergeCells count="1">'+
                  '<mergeCell  ref="A1:B1"/>'+
                '</mergeCells>'+
              '</worksheet>';
              xlsx.xl.worksheets['sheet2.xml'] = $.parseXML(newSheet);
						}
					}
			]
		}
	);
});
</script>

<title>Emerald Jewel Industry India Pvt Limited</title>