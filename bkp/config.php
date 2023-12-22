<?php  
//error_reporting(0);
if(isset($_REQUEST['type']) && $_REQUEST['type'] =='alumniForm'){
    $honeypot = $_POST['firstname'];    
    	//check if the honeypot field is filled out. If not, send a mail.
	if( ! empty( $honeypot ) ){
		return; //you may add code here to echo an error etc.
	}
    else{
    $_POST['created'] = date('d-m-Y h:i');
    $file_open = fopen("", "a");
    $no_row = count(file(""));
    if($no_row > 1){
        $no_row =($no_row - 1) + 1;
    } 
    fputcsv($file_open, $_POST);
    $html = '<html>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="f6f6f6" style="font-family:Open Sans, Arial, Helvetica, sans-serif; font-size: 13px; line-height:1.5; height:auto; color:#777777;">
  <tbody>
    <tr>    
      <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="26" style="outline: none; margin: 0; padding: 0; border: none;display:block;"></td>
    </tr>
    <tr align="center" valign="middle">
      <td><table width="650" border="0" align="center" cellpadding="0" cellspacing="0" style="margin: 0; padding: 0;">
          <tbody>
            <tr align="center" valign="middle">
              <td></td>
            </tr>
            <tr align="center" valign="middle">
              <td><table width="650" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="ffffff" style="font-family:Open Sans, Arial, Helvetica, sans-serif; font-size: 13px; line-height:1.5; height:auto; color:#777777; margin: 0; padding: 0;">
                  <tbody>
                    <tr>
                      <td colspan="5"><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="650" height="15" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                    </tr>
                    <tr align="center" valign="middle">
                      <td width="12"><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="10" height="1" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                      <td width="500" align="left"><a href="https://kiitis.ac.in/" style="text-decoration: none; color: #DE522C; outline: none;" target="_blank"><img src="https://kiitis.ac.in/admissions/edm/kiitis-group-logo.jpg" width="500" alt="KiiTIS - Affiliated to CBSE Secondary &amp; Senior Secondary | University of Cambridge | IB World School" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></a></td>
                      <td width="228"><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="228" height="1" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                      <td width="224">
                         
					  </td>
                      <td width="11"><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="10" height="1" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                    </tr>
                    <tr>
                      <td colspan="5"><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="650" height="17" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
			  <tr align="center" valign="middle" bgcolor="#2A2A2A" height="1">
              <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="1" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
            </tr>
            <tr align="center" valign="middle" bgcolor="ffffff">
              <td><table width="600" border="0" cellspacing="0" cellpadding="0" bgcolor="ffffff" style="font-family:Open Sans, Arial, Helvetica, sans-serif; line-height:1.5; height:auto; color:#777777; margin: 0; padding: 0; font-size: 13px;">
                  <tbody>
                    <tr>
                      <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="25" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                    </tr>
                    <tr>
                      <td style="font-size: 20px;"><h3 style="margin: 0; padding: 0; color:#484848;">Hello Team,</h3></td>
                    </tr>
                    <tr>
                      <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="17" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                    </tr>
                    <tr>
                       <td style="font-size: 20px;"><h5 style="margin: 0; padding: 0; color:#484848; font-weight: normal;">
                    <strong>'. $_POST['name'] .'</strong> tried to get in touch with us.</h5></td>
                    </tr>
                    <tr>
                      <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="35" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                    </tr>
                    <tr>
                      <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="17" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                    </tr>
                    <tr>
                      <td>
                      	<table width="530" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff">
                        <tbody>
                          <tr>
                            <td width="141" align="left" style="border-bottom: 1px solid #777777;"><strong>Full Name</strong></td>
                            <td width="389" align="left" style="border-bottom: 1px solid #777777;">'. $_POST['name'] .'</td>
                          </tr>
                            <tr>
                                <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="17" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                            </tr>
                          <tr>
                            <td width="141" align="left" style="border-bottom: 1px solid #777777;"><strong>Graduation Year</strong></td>
                            <td width="389" align="left" style="border-bottom: 1px solid #777777;">'. $_POST['gyear'] .'</td>
                          </tr>
                            <tr>
                                <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="17" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                            </tr>
                          <tr>
                            <td width="141" align="left" style="border-bottom: 1px solid #777777;"><strong>Email</strong></td>
                            <td width="389" align="left" style="border-bottom: 1px solid #777777;">'. $_POST['email'] .'</td>
                          </tr>
                            <tr>
                                <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="17" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                            </tr>
                          <tr>
                            <td width="141" align="left" style="border-bottom: 1px solid #777777;"><strong>Mobile Number</strong></td>
                            <td width="389" align="left" style="border-bottom: 1px solid #777777;">'. $_POST['phone'] .'</td>
                          </tr>
                          <tr>
                            <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="17" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                          </tr>
                          <tr>
                            <td width="141" align="left" style="border-bottom: 1px solid #777777;"><strong>Current Location</strong></td>
                            <td width="389" align="left" style="border-bottom: 1px solid #777777;">'. $_POST['clocation'] .'</td>
                          </tr>
                          <tr>
                            <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="17" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                          </tr>
                               <tr>
                            <td width="141" align="left" style="border-bottom: 1px solid #777777;"><strong>Current Status</strong></td>
                            <td width="389" align="left" style="border-bottom: 1px solid #777777;">'. $_POST['status'] .'</td>
                          </tr>
                          <tr>
                            <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="17" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                          </tr>


                                      <tr>
                            <td width="141" align="left" style="border-bottom: 1px solid #777777;"><strong>Institution/Company</strong></td>
                            <td width="389" align="left" style="border-bottom: 1px solid #777777;">'. $_POST['icname'] .'</td>
                          </tr>
                          <tr>
                            <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="17" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                          </tr>

                          
                                      <tr>
                            <td width="141" align="left" style="border-bottom: 1px solid #777777;"><strong>Designation if Employed</strong></td>
                            <td width="389" align="left" style="border-bottom: 1px solid #777777;">'. $_POST['designation'] .'</td>
                          </tr>
                          <tr>
                            <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="17" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                          </tr>
                        </tbody>
                      </table>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="17" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                    </tr>
                    <tr>
                      <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="35" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                    </tr>
                    <tr>
                      <td><strong>Regards,</strong></td>
                    </tr>
                    <tr>
                      <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="7" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                    </tr>
                    <tr>
                      <td>KiiT International School</td>
                    </tr>
                    <tr>
                      <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="7" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                    </tr>
                    <tr>
                      <td><a href="https://kiitis.ac.in" style="text-decoration: none; color: #5c5c5c; outline: none;" target="_blank">https://kiitis.ac.in</a></td>
                    </tr>
                    <tr>
                      <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="35" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
                    </tr>
                  </tbody>
                </table></td>
            </tr>
            <tr align="center" valign="middle" bgcolor="#2A2A2A">
              <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="7" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
            </tr>
            <tr align="center" valign="middle" bgcolor="#f6f6f6">
              <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="8" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
            </tr>
           <tr style="text-align: center">
				<td style="font-size: 10px;">
					Copyright &#9426; 2022. All rights reserved
				</td>
			  </tr>

            <tr align="center" valign="middle" bgcolor="#f6f6f6">
              <td><img src="https://kiitis.ac.in/admissions/edm/spacer.gif" width="1" height="25" style="outline: none; margin: 0; padding: 0; border: none; display:block;"></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table> 

</html>';

$date=date("Y/m/d H:i:s");

$to = $_POST['email'];
$subject = 'KiiT ';  
sentMailtoAdmin($to,$subject,$html);
echo "Thanks for the registration!";exit;        
        
        
	}
}

function sentMailtoAdmin($to,$subject, $message = '' ){
    $to = '';
    require 'sendgrid-php-main/sendgrid-php.php';
    $email = new \SendGrid\Mail\Mail(); 
    $email->setfrom("", "");
    $email->setSubject($subject);
    $email->addTo($to);
    $email->addBcc('');
    // $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
    $email->addContent(
        "text/html", $message
    ); 
    $sendgrid = new \SendGrid('');
    try {
        $response = $sendgrid->send($email); 
    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";exit;
    }
}

?>
    
    