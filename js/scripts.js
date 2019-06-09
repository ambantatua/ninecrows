/*
	* File Name    : scripts.js
	* Author       : Amber Bantatua, Micki Jury
	* Date Created : 05 July 2013
	* Version      : 1.0
	* Last Modified: 
	* Description  : External javascript actions 
*/
	
	/*contact us*/

	//<![CDATA[
		function checkDataContact(theForm) {
		
			var errMsg="";
		if(theForm.firstName.value=="") {
				errMsg=errMsg + "First name cannot be blank. \n";
				}
			
			if(theForm.surName.value=="") {
				errMsg=errMsg + "Last name cannot be blank. \n";
				}
				
			if(theForm.emailAddress.value=="") {
				errMsg=errMsg + "Please enter your email address. \n"
			}
			
			else {
			
			if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(theForm.emailAddress.value))) {
					errMsg=errMsg + "Invalid email address. \n"
				}
			}
			
			if(theForm.enquires.value=="") {
				errMsg=errMsg + "Please enter your enquiry. \n";
				}
				
	if(errMsg !="") {
				alert(errMsg);
				return false;
				}
				else {
					return true;
				}
		} // end of function
	//]]>
	
//-----------------------------------------------------------------
