<?php
$id=$_POST['id'];
require('../dbconnect.php');

$qry="select * from users where user_id='$id'";


$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_array($rs);

$title=$row['title'];
$first_name=$row['firstname'];
$last_name=$row['lastname'];

$name=$title.".".$first_name." ".$last_name;

$company=$row['company'];
$passportno=$row['passportno'];
$issue_date=$row['issue_date'];
$exp_date=$row['exp_date'];
$lead_source=$row['lead_source'];
$industries=$row['industries'];
$address=$row['address'];
$city=$row['city'];
$zip=$row['zip'];
$state=$row['state'];
$country=$row['country'];
$income=$row['income'];
$phone=$row['phone'];
$mobile=$row['mobile'].",".$row['mobile2'];
$fax=$row['fax'];
$email=$row['email'];
$website=$row['website'];
$desc=$row['desc'];
$agent_id=$row['agent_id'];





echo 
"<div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <h4 class='modal-title' style='color:#909'>Customer Info</h4>
      </div>
      <div class='modal-body'>
            
            <table>
            <tr>
            <td width='50%'><strong>Name</strong></td>
            <td width='50%'>$name</td>
            </tr>
            <tr>
            <td width='50%'><strong>company</strong></td>
            <td width='50%'>$company</td>
            </tr>
            <tr>
            <td width='50%'><strong>passportno</strong></td>
            <td width='50%'>$passportno</td>
            </tr>
            <tr>
            <td width='50%'><strong>issue_date</strong></td>
            <td width='50%'>$issue_date</td>
            </tr>
            <tr>
            <td width='50%'><strong>exp_date</strong></td>
            <td width='50%'>$exp_date</td>
            </tr>
            <tr>
            <td width='50%'><strong>lead_source</strong></td>
            <td width='50%'>$lead_source</td>
            </tr>
            <tr>
            <td width='50%'><strong>industries</strong></td>
            <td width='50%'>$industries</td>
            </tr>
            <tr>
            <td width='50%'><strong>address</strong></td>
            <td width='50%'>$address</td>
            </tr>
            <tr>
            <td width='50%'><strong>city</strong></td>
            <td width='50%'>$city</td>
            </tr>
            <tr>
            <td width='50%'><strong>zip</strong></td>
            <td width='50%'>$zip</td>
            </tr>
            <tr>
            <td width='50%'><strong>state</strong></td>
            <td width='50%'>$state</td>
            </tr>
            <tr>
            <td width='50%'><strong>country</strong></td>
            <td width='50%'>$country</td>
            </tr>
            <tr>
            <td width='50%'><strong>income</strong></td>
            <td width='50%'>$income</td>
            </tr>
            <tr>
            <td width='50%'><strong>phone</strong></td>
            <td width='50%'>$phone</td>
            </tr>
            <tr>
            <td width='50%'><strong>mobile</strong></td>
            <td width='50%'>$mobile</td>
            </tr>
            <tr>
            <td width='50%'><strong>fax</strong></td>
            <td width='50%'>$fax</td>
            </tr>
            <tr>
            <td width='50%'><strong>email</strong></td>
            <td width='50%'>$email</td>
            </tr>
            <tr>
            <td width='50%'><strong>website</strong></td>
            <td width='50%'>$website</td>
            </tr>
            <tr>
            <td width='50%'><strong>desc</strong></td>
            <td width='50%'>$desc</td>
            </tr>
            <tr>
            <td width='50%'><strong>agent_id</strong></td>
            <td width='50%'>$agent_id</td>
            </tr>
            </table>
            
        
      </div>
      <div class='modal-footer'>

        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>        
      </div>
    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->";