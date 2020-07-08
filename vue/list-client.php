 <link href="./css/style.min.css" rel="stylesheet">

 <!--Grid column-->
        <div class="col-lg-12 col-md-12 mb-4 text-center">

         <div class="container">
			  <input class="form-control mb-4" id="tableSearch" type="text"
			    placeholder="Type something to search list items">

			  <table class="table table-bordered table-striped">
			    <thead>
			      <tr>
			        <th>Firstname</th>
			        <th>Lastname</th>
			        <th>Email</th>
			      </tr>
			    </thead>
			    <tbody id="myTable">
			      <a href=""> 
			      	<tr>
				        <td>John</td>
				        <td>Doe</td>
				        <td>john@example.com</td>
			     	</tr>
			      </a>
			       <a > 
			      	<tr>
				        <td>John</td>
				        <td>Doe</td>
				        <td>john@example.com</td>
			     	</tr>
			      </a>
			      <tr>
			        <td>July</td>
			        <td>Dooley</td>
			        <td>july@greatstuff.com</td>
			      </tr>
			      <tr>
			        <td>Anja</td>
			        <td>Ravendale</td>
			        <td>a_r@test.com</td>
			      </tr>
			    </tbody>
			  </table>
			</div>
         
        </div>

        <script type="text/javascript">
        	// Filter table
			$(document).ready(function(){
			  $("#tableSearch").on("keyup", function() {
			    var value = $(this).val().toLowerCase();
			    $("#myTable tr").filter(function() {
			      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			    });
			  });
			});
        </script>
        <!--Grid column-->