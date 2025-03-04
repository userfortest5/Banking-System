<?php ob_start() ?>

<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="css/customer_reg_form.css"/>
    
	<?php include'header.php';  ?>
    </head>
    <body>
    <div class="container_regfrm_container_parent">
	<h3>Online Account Opening Form</h3>
	<div class="container_regfrm_container_parent_child">
		<form method="post">
				 <input type="text" name="name" placeholder="Name" required />
				 <select name ="gender" required >
					  <option class="default" value="" disabled selected>Gender</option>
					  <option value="Male" required >Male</option>
					  <option value="Female">Female</option>
					  <option value="Others">Others</option>
				</select>
				 <input type="text" name="mobile" placeholder="Mobile no" required />
				 <input type="text" name="email" placeholder="Email id" required/>
				 <input type="text" name="landline" placeholder="Landline no" />
				 <input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" required />
				 <input type="text" name="pan_no" placeholder="PAN Number"  />
				 <input type="text" name="citizenship" placeholder="Citizenship Number" required />
				 <input class="address" type="text" name="homeaddrs" placeholder="Home Address" required  />
				 <input class="address" type="text" name="officeaddrs" placeholder="Office Address" />
				 <input type="text" name="country" placeholder="NEP" value="NEP" readonly="readonly" />



				 <select name ="state" required >
					  <option class="default" value="" disabled selected>State</option>
					  
					  <option value="Karnali">Karnali</option>
					  <option value="Sudurpachhim">Sudurpachhim</option>
					  <option value="Gandaki">Gandaki</option>
					  <option value="Lumbini">Lumbini</option>
					  <option value="Province No. 1">Province No. 1</option>
					  <option value="Province No. 2">Province No. 2</option>
					  <option value="Bagmati">Bagmati</option>
					  
				</select>



				<select name="city" required>
                <option class="default" value="" disabled selected>Select District</option>
            <option value="Achham">Achham</option>
            <option value="Arghakhanchi">Arghakhanchi</option>
            <option value="Baglung">Baglung</option>
            <option value="Baitadi">Baitadi</option>
            <option value="Bajhang">Bajhang</option>
            <option value="Bajura">Bajura</option>
            <option value="Banke">Banke</option>
            <option value="Bara">Bara</option>
            <option value="Bardiya">Bardiya</option>
            <option value="Bhaktapur">Bhaktapur</option>
            <option value="Bhojpur">Bhojpur</option>
            <option value="Chitwan">Chitwan</option>
            <option value="Dadeldhura">Dadeldhura</option>
            <option value="Dailekh">Dailekh</option>
            <option value="Dang">Dang</option>
            <option value="Darchula">Darchula</option>
            <option value="Dhading">Dhading</option>
            <option value="Dhankuta">Dhankuta</option>
            <option value="Dhanusha">Dhanusha</option>
            <option value="Dolakha">Dolakha</option>
            <option value="Dolpa">Dolpa</option>
            <option value="Doti">Doti</option>
            <option value="Gorkha">Gorkha</option>
            <option value="Gulmi">Gulmi</option>
            <option value="Humla">Humla</option>
            <option value="Ilam">Ilam</option>
            <option value="Jajarkot">Jajarkot</option>
            <option value="Jhapa">Jhapa</option>
            <option value="Jumla">Jumla</option>
            <option value="Kailali">Kailali</option>
            <option value="Kalikot">Kalikot</option>
            <option value="Kanchanpur">Kanchanpur</option>
            <option value="Kapilvastu">Kapilvastu</option>
            <option value="Kaski">Kaski</option>
            <option value="Kathmandu">Kathmandu</option>
            <option value="Kavrepalanchok">Kavrepalanchok</option>
            <option value="Khotang">Khotang</option>
            <option value="Lalitpur">Lalitpur</option>
            <option value="Lamjung">Lamjung</option>
            <option value="Mahottari">Mahottari</option>
            <option value="Makwanpur">Makwanpur</option>
            <option value="Manang">Manang</option>
            <option value="Morang">Morang</option>
            <option value="Mugu">Mugu</option>
            <option value="Mustang">Mustang</option>
            <option value="Myagdi">Myagdi</option>
            <option value="Nawalpur">Nawalpur</option>
            <option value="Nuwakot">Nuwakot</option>
            <option value="Okhaldhunga">Okhaldhunga</option>
            <option value="Palpa">Palpa</option>
            <option value="Panchthar">Panchthar</option>
            <option value="Parasi">Parasi</option>
            <option value="Parbat">Parbat</option>
            <option value="Parsa">Parsa</option>
            <option value="Pyuthan">Pyuthan</option>
            <option value="Ramechhap">Ramechhap</option>
            <option value="Rasuwa">Rasuwa</option>
            <option value="Rautahat">Rautahat</option>
            <option value="Rolpa">Rolpa</option>
            <option value="Rukum East">Rukum East</option>
            <option value="Rukum West">Rukum West</option>
            <option value="Rupandehi">Rupandehi</option>
            <option value="Salyan">Salyan</option>
            <option value="Sankhuwasabha">Sankhuwasabha</option>
            <option value="Saptari">Saptari</option>
            <option value="Sarlahi">Sarlahi</option>
            <option value="Sindhuli">Sindhuli</option>
            <option value="Sindhupalchok">Sindhupalchok</option>
            <option value="Siraha">Siraha</option>
            <option value="Solukhumbu">Solukhumbu</option>
            <option value="Sunsari">Sunsari</option>
            <option value="Surkhet">Surkhet</option>
            <option value="Syangja">Syangja</option>
            <option value="Tanahun">Tanahun</option>
            <option value="Taplejung">Taplejung</option>
            <option value="Terhathum">Terhathum</option>
            <option value="Udayapur">Udayapur</option>
</select>




				 
				 <input type="text" name="pin" placeholder="Pin Code" required />
				 <input type="text" name="arealoc" placeholder="Area/Locality" required />
				 <input type="text" name="nominee_name" placeholder="Nominee Name (If any)" />
				 <input type="text" name="nominee_ac_no" placeholder="Nominee Account no"  />
				 
				 <select name ="acctype" required >
					  <option class="default" value="" disabled selected>Account Type</option>
					  <option value="Saving">Saving</option>
					  <option value="Current">Current</option>
				</select>
				<input type="submit" name="submit" value="Submit">
				</form>
         </div>
		 </div>
		 
<?php include'footer.php';?>
    
</body>
</html>


<?php 

if(isset($_POST['submit'])){

	session_start();
	$_SESSION['$cust_acopening'] = TRUE;
	$_SESSION['cust_name']=$_POST['name'];
	$_SESSION['cust_gender']=$_POST['gender'];
	$_SESSION['cust_mobile']=$_POST['mobile'];
	$_SESSION['cust_email']=$_POST['email'];
	$_SESSION['cust_landline']=$_POST['landline'];
	$_SESSION['cust_dob']=$_POST['dob'];
	$_SESSION['cust_pan=']=$_POST['pan_no'];
	$_SESSION['cust_citizenship']=$_POST['citizenship'];
	$_SESSION['cust_homeaddrs']=$_POST['homeaddrs'];
	$_SESSION['cust_officeaddrs']=$_POST['officeaddrs'];
	$_SESSION['cust_country']=$_POST['country'];
	$_SESSION['cust_state']=$_POST['state'];
	$_SESSION['cust_city']=$_POST['city'];
	$_SESSION['cust_pin']=$_POST['pin'];
	$_SESSION['arealoc']=$_POST['arealoc'];
	$_SESSION['nominee_name']=$_POST['nominee_name'];
	$_SESSION['nominee_ac_no']=$_POST['nominee_ac_no'];
	$_SESSION['cust_acctype']=$_POST['acctype'];
	
	header('location:cust_regfrm_confirm.php');
	
	
}

?>