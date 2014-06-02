<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register User</title>
</head>

<body>
<div class="center_box_content">
	<table width="600" align="center">
		<tbody>
			<tr>
				<td align="left"><h4 class="center_box_sub_heading"><span>Creating new account</span></h4></td>
				<td align="right">Already have an account? <a href="admin">Login here</a></td>
			</tr>
		</tbody>
	</table>
	<p align="center">Items marked with an asterisk (*) are required</p>
	<div id="infoMessage" align="center"><?php echo $message;?></div>
	<?php echo form_open("register");?>
	<table cellspacing="1" cellpadding="2" width="600" align="center">
		<tbody>
			<tr>
				<td colspan="3"><b>Personal Details</b>
					<hr size="1" noshade="noshade"></td>
			</tr>
			<tr>
				<td align="right">Title</td>
				<td>*</td>
				<td nowrap="nowrap"><?php
			echo form_dropdown('guest_title', $guest_title, set_value('guest_title'));
		?></td>
			</tr>
			<tr>
				<td width="38%" align="right">First Name</td>
				<td><font class="mandatory_star">*</font></td>
				<td nowrap="nowrap"><?php echo form_input($first_name);?></td>
			</tr>
			<tr>
				<td align="right">Last Name</td>
				<td><font class="mandatory_star">*</font></td>
				<td nowrap="nowrap"><?php echo form_input($last_name);?></td>
			</tr>
			<tr>
				<td align="right">Birth Date</td>
				<td>&nbsp;</td>
				<td nowrap="nowrap"><?php
			echo $birth_date_day;
			echo $birth_date_month;
			echo $birth_date_year;
		?></td>
			</tr>
			<tr>
				<td align="right">Company</td>
				<td>&nbsp;</td>
				<td nowrap="nowrap"><?php echo form_input($company);?></td>
			</tr>
			<tr>
				<td align="right">Web Site</td>
				<td>&nbsp;</td>
				<td nowrap="nowrap"><?php echo form_input($url);?></td>
			</tr>
			<tr>
				<td colspan="3"><b><b>Billing Address</b>
					<hr size="1" noshade="noshade">
					</b></td>
			</tr>
			<tr>
				<td align="right">Address</td>
				<td><font class="mandatory_star">*</font></td>
				<td nowrap="nowrap"><?php echo form_input($address);?></td>
			</tr>
			<tr>
				<td align="right">Address (line 2)</td>
				<td>&nbsp;</td>
				<td nowrap="nowrap"><?php echo form_input($address_2);?></td>
			</tr>
			<tr>
				<td align="right">City</td>
				<td><font class="mandatory_star">*</font></td>
				<td nowrap="nowrap"><?php echo form_input($city);?></td>
			</tr>
			<tr>
				<td align="right">State/Province</td>
				<td></td>
				<td nowrap="nowrap"><?php echo form_input($state);?></td>
			</tr>
			<tr>
				<td align="right">Country</td>
				<td><font class="mandatory_star">*</font></td>
				<td nowrap="nowrap"><?php echo $country; ?></td>
			</tr>
			<tr>
				<td align="right">Zip/Postal code</td>
				<td><font class="mandatory_star">*</font></td>
				<td nowrap="nowrap"><?php echo form_input($zipcode);?></td>
			</tr>
			<tr>
				<td height="20" colspan="3"><b>Contact Information</b>
					<hr size="1" noshade="noshade"></td>
			</tr>
			<tr>
				<td align="right">Phone</td>
				<td><font class="mandatory_star">*</font></td>
				<td nowrap="nowrap"><?php echo form_input($phone);?></td>
			</tr>
			<tr>
				<td align="right">E-mail address</td>
				<td><font class="mandatory_star">*</font></td>
				<td nowrap="nowrap"> (Please enter ONLY real email address) <br>
					<?php echo form_input($email);?></td>
			</tr>
			<tr>
				<td colspan="3"><b>Account Details</b>
					<hr size="1" noshade="noshade"></td>
			</tr>
			<tr>
				<td align="right">Username</td>
				<td class="mandatory_star">*</td>
				<td nowrap="nowrap"><?php echo form_input($username);?></td>
			</tr>
			<tr>
				<td align="right">Password</td>
				<td><font class="mandatory_star">*</font></td>
				<td nowrap="nowrap"><?php echo form_input($password);?></td>
			</tr>
			<tr>
				<td align="right">Confirm Password</td>
				<td class="mandatory_star">*</td>
				<td nowrap="nowrap"><?php echo form_input($password_confirm);?></td>
			</tr>
			<tr>
				<td height="20" colspan="3"><hr size="1" noshade="noshade"></td>
			</tr>
			<tr valign="top">
				<td style="padding-left:10px"><!--<input type="text" name="captcha_code" size="10" maxlength="6" />
						  <a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>--></td>
			</tr>
			<tr>
				<td colspan="3" nowrap="" height="7px"></td>
			</tr>
			<tr>
				<td colspan="3" align="left"><input type="checkbox" name="agree" value="checkbox" />
					<a href="index.php?page=booking_details#top" onclick="javascript:appShowTermsAndConditions()">I have read and AGREE with Terms &amp; Conditions</a></td>
			</tr>
			<tr>
				<td colspan="3" align="left"><?php echo form_submit('submit', 'Submit');?> <?php echo form_close();?></td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
		</tbody>
	</table>
</div>
</body>
</html>