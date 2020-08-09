<?php include 'inc/header.php';  ?>
<?php
// jodi login kora thake tahole order page a nea jabe
   $login = session::get("cuslogin");       // take from classes->customer.php line 90
   if($login == true){
	   header("location:order.php");
   }
?>
<?php	
	// to take all data from input for login		
	if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
        $customerlogin = $cmr->customerLogin($_POST); 
	}
?>

<div class="main">
    <div class="content">
    	<div class="login_panel">

		    <?php
               // for show messege
               if(isset($customerlogin)){         
                    echo $customerlogin;
               }
			?>

        	<h3>Existing Customers</h3>
        	<form action="" method="post">

                <input name="email" type="text" placeholder = "Enter your email">
				<input name="password" type="password" placeholder="Enter your password">
				<div class="buttons"><div><button class="grey" name="login">Sign In</button></div></div>

            </form>
		</div>

			<?php	
			    // to take all data from input for signup
			    if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
    			$customerReg = $cmr->customerRegistration($_POST); 
			    }
			?>

    	<div class="register_account">

		    <?php
               // for show messege
               if(isset($customerReg)){         
                echo $customerReg;
               }
			?>

    		<h3>Register New Account</h3>
    		<form action="" method="post">
		   		<table>
		   		    <tbody>
						<tr>
						<td>
							<div>
							  <input type="text" name="name" placeholder="Name"/>
							</div>
							
							<div>
							   <input type="text" name="city" placeholder="City"/>
							</div>
							
							<div>
								<input type="text" name="zip" placeholder="Zip-code"/>
							</div>
							<div>
								<input type="text" name="email" placeholder="Email"/>
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address" placeholder="Address"/>
						</div>
		    		<div>
					   <input type="text" name="country" placeholder="Country"/>
                    </div>		        
	
		           <div>
				      <input type="text" name="phone" placeholder="Phone"/>
		           </div>
				  
				  <div>
				      <input type="text" name="password" placeholder="Password"/>
				  </div>

		    	  </td>
		          </tr> 
		        </tbody></table> 
                <div class="search"><div><button class="grey" name="register">Create Account</button></div></div>
		       <div class="clear"></div>
		    </form>
    	</div>  	
        <div class="clear"></div>
        </div>
    </div>
</div>

<?php include 'inc/footer.php';  ?>
