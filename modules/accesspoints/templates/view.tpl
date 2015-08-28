
  {{FILE:module_menu.tpl}}
    
  <table class='tab' style='border:1px solid red'>
   <tr>
      <td class="tab-icon">
	<table>
	  <tr>
	    <td>{{LINK:Add}}</td>
	    <td>{{LINK:Edit}}</td>  
	    <td>{{LINK:Remove}}</td>
	  </tr>
	</table>
       </td> 
    </tr>	
   <tr>
    <td style='padding: 5px; vertical-align: top; width: 100%'>
	        
	  <table>
	  <!--
	   <tr>
		<td class='data-title'>{{LANG:ID}}</td>
		<td class='data-record'>{{GET:ID}}</td> 
	   </tr>
	   -->
	   <tr>
		<td class='data-title'>{{LANG:Name}}</td>
		<td class='data-record'><b>{{GET:Name}}</b></td> 
	   </tr>  
	   <tr>
		<td class='data-title'>{{LANG:Node}}</td>
		<td class='data-record'>{{GET:Node}}</td> 
	   </tr> 
	   <tr>
		<td class='data-title'>{{LANG:Path}}</td>
		<td class='data-record'>{{GET:Path}}</td> 
	   </tr>
	   <tr>
		<td class='data-title'>{{LANG:Updated}}</td>
		<td class='data-record'>{{GET:Updated}}</td>
	   </tr>
	    <tr>
		<td class='data-title'>{{LANG:Created}}</td>
		<td class='data-record'>{{GET:Created}}</td>
	   </tr>
	  </table> 
	 </div> 
	 <br>
	   
	   
	 {{LINK:SecurityOptions}}
	  <table class='sub-module'>
	   <tr>
		<td class='data-title'>{{LANG:Groups}}</td>
		<td class='data-record' style='width: 100%'>{{GET:Groups}}</td> 
	   </tr>
	   <tr>
		<td class='data-title'>{{LANG:HTTPAuth}}</td>
		<td class='data-record'>{{GET:HTTPAuth}}</td> 
	   </tr>
	   <tr>
		<td class='data-title'>{{LANG:Filtering}}</td>
		<td class='data-record'>{{GET:Filtering}}</td> 
	   </tr>
	   <tr>
		<td class='data-title'>{{LANG:PwdEncrypt}}</td>
		<td class='data-record'>{{GET:PwdEncrypt}}</td> 
	   </tr>
	   <tr>
		<td class='data-title'>{{LANG:ChangePwd}}</td>
		<td class='data-record'>{{GET:ChangePwd}}</td> 
	   </tr>
	   <tr>
		<td class='data-title'>{{LANG:Registration}}</td>
		<td class='data-record'>{{GET:Registration}}</td> 
	   </tr>
	   <tr>
		<td class='data-title'>{{LANG:RegGroup}}</td>
		<td class='data-record'>{{GET:RegGroup}}</td> 
	   </tr>
	  </table>
	  </div>
	  
	 {{LINK:LayoutOptions}}
	  <table class='sub-module'>
	   <tr>
		<td class='data-title'>{{LANG:Theme}}</td>
		<td class='data-record'>{{GET:Theme}}</td> 
	   </tr>	   	   
	  </table>
	 </div> 
	  
      <br>
       <center>{{BUTTON:Back}}</center>  
	  <br>
      
	</td>
   </tr>
  </table>