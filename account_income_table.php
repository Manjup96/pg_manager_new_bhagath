
<!DOCTYPE html>
<html lang="en" class="h-90">
<head>
<body style="background-color:#D6DBDF;">
  <title>Income</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Bed form</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">


        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

       <?php
            include "./adminHeader.php";
            include "./sidebar.php";
           
          
        ?>


</head>
<style>
p.two {
  border-style: solid;
  border-width: 5px;
  border-radius:10px;
}

h1 {
  color: #154360;
}
.wrapper{
            width: 800px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 100px;
        } .btn {
  background-color:  #117A65;
  border: none;
  color: white;
  padding: 13px 25px;
  padding:0rem 1rem 1rem 1rem;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: #DC7633;
}

.form-group div
    {
      color: red;
      size: 80%
    }
    .hidden
    {
      display:none;
    }

</style>
		
    <body class="h-0">
    
<?php

// echo "Hello " . $_SESSION["username"] . ".<br>";
?>

<div id="show_edit_form">
<div class="container h-80 ">
            <div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;
				border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #76D7C4;">
  <form id="enquiry_edit">
     <input type="hidden"  id="id_value">
  <h1><center><div class="p-3 mb-2 bg- text-black" ><p class="two">Income form</p></div></center></h1>
  <div class="form-group">
                			<label for="date"> Date :</label>
                			<input type="date" onload="getDate()"class="form-control date" id="date" placeholder="" name="date">
                		</div>
                        <div class="form-group">
							<label for="floor number">Income Type</label>
							<input type="text" class="form-control type" id="type" disabled value="Monthly Rent" name="income_type">
						</div>
                        <div class="form-group">
							<label for="room number">Month</label>
							<input type="text" class="form-control room number" id="month"  name="month">
						</div>
                              <div class="form-group">
							<label for="bednumber">Year</label>
							<input type="text" class="form-control " id="year"  name="year">
						</div>
                        <div class="form-group">
                			<label for="amount">Amount:</label>
                			<input type="" class="form-control amount" id="amount"  name="totalAmount">
                		</div>
                        <div class="form-group">
                			<label for="pay_amount">Paid Amount:</label>
                			<input type="" class="form-control amount" id="pay_amount" placeholder="" name="pay_amount">
                		</div>
                        
						<center>
              <button type="submit" class="btn btn-success btn-customized">Save

              </button>
                             </center>
						

           </form>

           </form>
           </div>
          </div>
        </div>
</div>



    

         
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <!-- Income details header starts -->
   <div class="wrapper" style="margin-right:700px" id="show_table">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12 lead">
                    <div class="mt-2 mb-6 clearfix">
                    <div style="margin-left:50px;width:1020px">
                    <center><div class="p-3 mb-2 bg-dark text-white">Monthly wise Income Details</div></center>
                    
                    <div class="search-container">
                     <input type="text" placeholder="Search with Name.." name="search"
                      id="searchInput" onkeyup="searchTable()">
                     <button type="submit"><i class="fa fa-search"></i></button>
                        <a href="account_new.php" class="btn btn-success pull-right" 
                        style="margin:10px";><i class="fa fa-plus"></i>&nbsp;Add Income</a>
                        <button type="submit" class="btn btn-success " style="margin:10px"; 
                        onclick="Export()"><i class="fa fa-download"></i>&nbsp; Download</button>

                    </div>
                    </div>
</br> 
</div>
          </div>
        </div>
      </div>
      </div>

<div style="margin-left:50px" id="show_table">
                    <table id="account_income" border="1"></table>
</div>

  <!-- tde Modal -->
  <div id="view-income-monthly-report-modal" class="modal fade" tabindex="-1" role="dialog" 
  aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
             <div class="modal-dialog"> 
                  <div class="modal-content"> 
                  
                       <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <h4 class="modal-title">
                            	<i class="glyphicon glyphicon-user"></i> User Profile
                            </h4> 
                       </div> 
                       <div class="modal-body"> 
                       
                       	                           
                           <!-- content will be load here -->                          
                           <div id="dynamic-content"></div>                             
                        </div> 
                        <div class="modal-footer"> 
                              <button type="button" class="btn btn-default" 
                              data-dismiss="modal">Close</button>  
                        </div> 
                        
                 </div> 
              </div>
       </div>
       <!-- /.modal  End -->    
    
          

             
           <script>
                      // to show pop up 
                      document.getElementById("show_edit_form").style.display="none";
                      document.getElementById("show_table").style.display="block";
                      


    const url ="https://iqbetspro.com/pg-management/monthly-wise-total-income-report-GET-API.php";
     async function getapi(url) {
         console.log('inside function..');

             let result = await fetch(url);
         
             let response = await result.json();
             console.log('data',response);
             show(response);
             //document.getElementById("demo").innerHTML = response;

         }
         
         getapi(url);

         function show(data) {
             let tab =
                 `<tr>
                 <th>S.No</th>
                 <th>Month</th>
                 <th>Year</th>
                 <th>Total income</th>
                 <th>Action</th>
                 </tr>`;
             let i=1;
             // Loop to access all rows
             for (let r of data) {
               //console.log(typeof(r.Id));
                 tab += `<tr>
             <td>${i} </td>
             
             <td><p id="month1">${r.Month} </p></td>
             <td><p id="year1">${r.Year}</p></td>
             <td>${r.Income}</td>	
             <td> <div style=" display: flex;justify-content: space-around;">
          
             <button data-toggle="modal" data-target="#view-income-monthly-report-modal" 
			data-id="${r.Month}-${r.Year}" 
            id="get_Month_Year" class="btn btn-sm btn-info "><i class="glyphicon glyphicon-eye-open"></i> View</button>
                        </div>        
                </div>
            </td>
                 </tr>`;
             i=i+1;
             }  
          
             document.getElementById("account_income").innerHTML = tab;
             }
</script>
<script>


  function result(){
    var month = document.getElementById('month1').textContent;
    switch (month) {
  case "January":
    month= "01";
    break;
  case "February":
    month= "02";
    break;
  case "March":
    month= "03";
    break;
  case "April":
    month= "04";
    break;
  case  "May":
    month= "05";
    break;
  case  "June":
    month= "06";
    break;

  case    "July":
    month= "07";
  case "August":
    month= "08";
    break;
  case "September":
    month= "09";
    break;
  case "October":
    month= "10";
    break;
  case  "November":
    month= "11";
  case    "December":
    month= "12";

}


     var year = document.getElementById('year1').textContent;
   // alert(month+year);        
  }
</script>
 
<script>
$(document).ready(function(){
	
	$(document).on('click', '#get_Month_Year', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id');   // it will get id of clicked row
	//	alert(uid);
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		//alert(uid);
		$.ajax({
			url: 'get-monthly-income-report.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
     // alert(uid);
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();	
     // alert(uid);	  // hide ajax loader	
		})
		.fail(function(){
			$('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
			$('#modal-loader').hide();
     // alert(uid);
		});
		
	});
	
});

</script>

    </body >

</html>