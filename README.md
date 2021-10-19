# aa48-check-company
<p align="center">
<img src="https://gedlynk.com/wp-content/uploads/2015/11/Infusionsoft-Logo-EPS-vector-image-2.png" style="width:35%;"/>
</p>

<h3>For more info about the infusionsoft syntax Click <a href="https://developer.infusionsoft.com/docs/xml-rpc/#contact">here</a></h3>
<h4>Current URL: https://scaleupmarketing.asia/httpscripts/aa478/note/removetags.php</h4>
<p>Script Description: 
  When HTTP POST REQUEST is triggered through an infusionsoft sequence<br>
  carrying the variables contact_id
  
  The script will use the "contact_id" variable to get the current info of the contact.<br>
  It will look for the "Company Name" info in it.<br>
  After getting the "Company Name" info from the contact, we will store it on a variable "company".<br>
  We will use the variable "company" to get the "company id" of that company.<br>
  <strong>IF THE VARIABLE IS EMPTY:</strong><BR>
  It will create the company using the data from the "company" variable and assign the current contact to the newly created company.<br>
  <strong>Else:</strong>
  It will update the "company id" on the current contact, to make sure that the info is accurate.
</p>
