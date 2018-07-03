<!DOCTYPE html>
<html >
<head>
<meta content="text/html; charset=utf-8">
<title>MonthlyBudget</title>
<link type="text/css" href="style.css" rel="stylesheet" />
<script type="text/javascript" src="validated.js"></script>
 <?php require('connect.php');?>
</head>
<body>
    <div class="content">
     	
       <h3 >Add New Bill</h3>
       <div class="form">
       		<form id="bill" method="post" onsubmit="return CheckForm();" >
              <div class="row">                
                <span>Account</span>
                <input type="text" name="account" value="" placeholder="132000"> ($) 
              </div>
              
              <div class="row">                
                 <span>Bill ID</span>
                 <input type="text" name="billID" value="" style="width:50px;">
                 <span class="hide_error" id="id-error" style="width: 300px;"></span>
              </div>
               
              <div class="row">                
                <span>Bill name</span>
                <input type="text" name="billname" value="" style="width: 200px">
                <span class="hide_error" id="name-error" style="width: 300px; display: none;"></span>                  
              </div>
              
              <div class="row">               
                <span>Amount</span>
                <input type="text" name="amount" value="" style="width: 200px"> ($) 
                <span class="hide_error" id="amount-error" style="width: 300px; display: none"></span> 
              </div>
              
               <div class="row">               
                   <span>Bill on</span>
                   <select name="billon">
                      <option>--Select a Category--</option>
                      <?php 
                            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
                                echo "<option>" .$row['cat_name']."</option>";
                            }
                      ?>
                    </select>
                    <span class="hide_error" id="billon-error" style="width: 200px; display: none"></span>

              </div>  

              <div class="row">
              		<input type="checkbox" name="isPaid" value=""> Is Paid?
              </div>

              <div class = "row">
                    <input style="margin: 0px auto 20px 105px" type="submit" value="Add new bill" />
                    <input type="button" value="Reset" onClick="resetForm()">
                    
              </div>
                
       		</form>
       </div>
       <h3>Bill list</h3>
       <div class="form1">
       		 <form action="">
       		 	<table>
                   <tr style="background-color: #FFFF99">
                       <td>ID</td>
                       <td>Name</td>
                       <td>Amount</td>
                       <td>Category</td>
                       <td>Complete</td>
                   </tr>
                   
                   <tr> 
                        <td></td>
                        <td style="text-decoration: line-through; "></td>
                        <td></td>
                        <td></td>
                        <td><input type="checkbox">
                            <span class="checkmark"></span></td>
                   </tr>
                   
                   <tr>
                        <td></td>
                        <td style="text-decoration: line-through;"></td>
                        <td></td>
                        <td></td>
                        <td><input type="checkbox">
                            <span class="checkmark"></span></td>
                   	</tr>
                   	
                   	<tr>
                        <td colspan="2">Total</td>
                        <td>$1500</td>
                        <td colspan="2"></td>
                  	</tr>
                   
                   <tr>
                        <td colspan="2">Remain</td>
                        <td></td>
                        <td colspan="2"></td>
                  	</tr>
                   
                </table>
       		 </form>
       </div>
       <input type="submit" value="Update" />
    </div>
</body>
</html>
