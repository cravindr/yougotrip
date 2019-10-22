                        
                    </tbody>
                </table>
		</div>
	</div>
</div>
<script src="jscript/orderlist.js" type="text/javascript"></script>


<!-- modal code for login -->
<div class="modal blue fade span6" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" >
<form action="login_upd.php" method="post">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="color:#909">Payment Option</h4>
      </div>
      <div class="modal-body">
        <p>
        	<div class="span5">
            <label class="checkbox">
            <input type="radio" name="payoption" value="Advance" /><strong> Rs 1000.00</strong> (Advance amount)
            </label>
            <hr />
            <label class="checkbox">
            <input type="radio" name="payoption" value="Advance" /><strong>50% Pay </strong>(Your getting Rs.500.00 Discount)
            </label>
            
            <hr />
            <label class="checkbox">
            <input type="radio" name="payoption" value="Advance" /><strong>100% Pay</strong>(Your getting Rs.1000.00 Discount)
            
            </label>
            
            
            
           </div>
        </p>
      </div>
      <div class="modal-footer">
      	<input type="submit" value="Continue.." class="btn-u "></button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        
      </div>
    </div><!-- /.modal-content -->
    </form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->