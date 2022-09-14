

<div class="container">
<form>
  <div class="row">
    <div class="col-3">
      <input type="text" class="form-control" placeholder="Month">
    </div>
    <div class="col-3">
      <input type="text" class="form-control" placeholder="Year">
    </div>
    <div class="col-3">
      <input type="text" class="form-control" placeholder="Pay number">
    </div>
    
  </div>
  <button type="submit" class="btn btn-primary mb-4 px-3 py-1">submit</button>
</form>
</div>

 <!-- Club info end -->

<div class="container">





	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div class="table-responsive">
				<table class="table user-list">
                    <h1>Member Payroll</h1>

                  
<div class="row">

<div class="form-group col-md-3">
      <label for="inputState">Select month</label>
      <!-- <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select> -->
    <select id="inputState" class="form-control" name="month">
    <option>month</option>
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>
</div>


<div class="form-group col-md-3">
 <label for="year">Select Year</label>

 
 <select id="year" class="form-control" name="year">
    <option>year</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
  </select>
  </div>



</div>

<div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary mb-4 px-3 py-1">Show</button>
    </div>
  </div>



                    <?php

include './config.php';

$sql = "SELECT generalmember.name,pay.payment_ammount,pay.transiction_number,pay.payment_status,pay.userpayment_no
FROM generalmember
INNER JOIN pay ON pay.user_id=generalmember.id"; 

if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0)
  {

?>

					<thead>
						<tr>
							<th><span>Name</span></th>
							<th><span>Gmail</span></th>
							<th><span>Payment Amount</span></th>
              <th><span>Transaction number</span></th>
              <th><span>Payment Status</span></th>
              <th><span>User Payment number</span></th>

							
						</tr>
					</thead>
					<tbody>
          <?php
              while($row = mysqli_fetch_array($result))
              {
              ?>
						<tr>
							<td>
								<!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""> -->
								<!-- <a href="#" class="user-link">Mila Kunis</a> -->
                
                <h4><?php echo $row['name'] ?></h4>  
                <p>Software engineering</p> 
                 

							</td>
							<td>
							     <p>sourav@gmail.com </p>
							</td>
						
							<td class="text-center">
								<p><?php echo $row['payment_ammount'] ?></p>
							</td>
                 <td class="text-center">
								  <p><?php echo $row['transiction_number'] ?></p>
							</td>
							<td class="text-center">
								  <!-- <a href="">Checked</a> -->
                  <button class="btn btn-secondary p-2">
                    <?echo $row['payment_status']?>
                  </button>
						
							</td>
              <td class="text-center">
								<p><?php echo $row['userpayment_no'] ?></p>
							</td>

						</tr>
            <?php } ?>
					</tbody>
          <?php } ?>
  <?php }?>
				</table>
			</div>

		</div>
	</div>
</div>
</div>