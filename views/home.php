<?php
	global $dcheck;
	if(!isset($dcheck)) die("<span style=\"color:red\">Restricted Access !!!!</span>");
	session_checkstart();
	logincheck();
	
	$pagetitle = "Home";
	
	function get_projectid(){
		if(isset($_REQUEST["id"])){
			return $_REQUEST["id"];
		}
	}
?>



<?php

	global $dcheck;
	if(!isset($dcheck)) die("<span style=\"color:red\">Restricted Access !!!!</span>");
	session_checkstart();
	logincheck();
	
	$pagetitle = "Projects";

/*
 * IMPORTANT NOTE: This generated file contains only a subset of huge amount
 * of options that can be used with phpMyEdit. To get information about all
 * features offered by phpMyEdit, check official documentation. It is available
 * online and also for download on phpMyEdit project management page:
 *
 * http://platon.sk/projects/main_page.php?project_id=5
 *
 * This file was generated by:
 *
 *                    phpMyEdit version: unknown
 *       phpMyEdit.class.php core class: 1.204
 *            phpMyEditSetup.php script: 1.50
 *              generating setup script: 1.50
 */

// MySQL host name, user name, password, database, and table
$opts['hn'] = DBHOST; //'localhost';
$opts['un'] = DBUSER; //'root';
$opts['pw'] = DBPASS; //'Abc12345';
$opts['db'] = DBNAME; //'purchord';
$opts['tb'] = 'project';

// Name of field which is the unique key
$opts['key'] = 'id';

//Used to set return page
$opts['page_name'] = 'index.php?route=home';

// Type of key field (int/real/string/date etc.)
$opts['key_type'] = 'int';

// Sorting field(s)
$opts['sort_field'] = array('id');

// Number of records to display on the screen
// Value of -1 lists all records in a table
$opts['inc'] = -1;

// Options you wish to give the users
// A - add,  C - change, P - copy, V - view, D - delete,
// F - filter, I - initial sort suppressed
$opts['options'] = 'ACPVD';

// Number of lines to display on multiple selection filters
$opts['multiple'] = '4';

// Navigation style: B - buttons (default), T - text links, G - graphic links
// Buttons position: U - up, D - down (default)
$opts['navigation'] = 'DG';
$opts['buttons']['L']['up'] = array(/*'<<','<','add','view','change','copy','delete', '>','>>','goto','goto_combo'*/);
$opts['buttons']['L']['down'] = $opts['buttons']['L']['up'];

$opts['buttons']['V']['up'] = array(/*'change','cancel'*/);
$opts['buttons']['V']['down'] = $opts['buttons']['V']['up'];

// Display special page elements
$opts['display'] = array(
	'form'  => true,
	'query' => false,
	'sort'  => false,
	'time'  => false,
	'tabs'  => false
);

// Set default prefixes for variables
$opts['js']['prefix']               = 'PME_js_';
$opts['dhtml']['prefix']            = 'PME_dhtml_';
$opts['cgi']['prefix']['operation'] = 'PME_op_';
$opts['cgi']['prefix']['sys']       = 'PME_sys_';
$opts['cgi']['prefix']['data']      = 'PME_data_';

/* Get the user's default language and use it if possible or you can
   specify particular one you want to use. Refer to official documentation
   for list of available languages. */
$opts['language'] = $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '-UTF8';

/* Table-level filter capability. If set, it is included in the WHERE clause
   of any generated SELECT statement in SQL query. This gives you ability to
   work only with subset of data from table.

$opts['filters'] = "column1 like '%11%' AND column2<17";
$opts['filters'] = "section_id = 9";
$opts['filters'] = "PMEtable0.sessions_count > 200";
*/

/* Field definitions
   
Fields will be displayed left to right on the screen in the order in which they
appear in generated list. Here are some most used field options documented.

['name'] is the title used for column headings, etc.;
['maxlen'] maximum length to display add/edit/search input boxes
['trimlen'] maximum length of string content to display in row listing
['width'] is an optional display width specification for the column
          e.g.  ['width'] = '100px';
['mask'] a string that is used by sprintf() to format field output
['sort'] true or false; means the users may sort the display on this column
['strip_tags'] true or false; whether to strip tags from content
['nowrap'] true or false; whether this field should get a NOWRAP
['select'] T - text, N - numeric, D - drop-down, M - multiple selection
['options'] optional parameter to control whether a field is displayed
  L - list, F - filter, A - add, C - change, P - copy, D - delete, V - view
            Another flags are:
            R - indicates that a field is read only
            W - indicates that a field is a password field
            H - indicates that a field is to be hidden and marked as hidden
['URL'] is used to make a field 'clickable' in the display
        e.g.: 'mailto:$value', 'http://$value' or '$page?stuff';
['URLtarget']  HTML target link specification (for example: _blank)
['textarea']['rows'] and/or ['textarea']['cols']
  specifies a textarea is to be used to give multi-line input
  e.g. ['textarea']['rows'] = 5; ['textarea']['cols'] = 10
['values'] restricts user input to the specified constants,
           e.g. ['values'] = array('A','B','C') or ['values'] = range(1,99)
['values']['table'] and ['values']['column'] restricts user input
  to the values found in the specified column of another table
['values']['description'] = 'desc_column'
  The optional ['values']['description'] field allows the value(s) displayed
  to the user to be different to those in the ['values']['column'] field.
  This is useful for giving more meaning to column values. Multiple
  descriptions fields are also possible. Check documentation for this.
*/

$opts['fdd']['id'] = array(
  'name'     => 'ID',
  'select'   => 'T',
  'options'  => 'AVCPDR', // auto increment
  'maxlen'   => 10,
  'default'  => '0',
  'escape'	 => false,
  'sort'     => true
);
$opts['fdd']['title'] = array(
  'name'     => 'Title',
  'select'   => 'T',
  'URL'		 => 'index.php?route=home&id=$key',
  //'URLdisp'	 => "<img src=\"images/ticket.png\" /> View/Edit Right",
  'css'		 => array('postfix' => ' rights_diag'),
  'maxlen'   => 50,
  'sort'     => true
);
$opts['fdd']['customer_id'] = array(
  'name'     => 'Customer',
  'select'   => 'T',
  'maxlen'   => 10,
  //'URL'		 => 'http://localhost/conproj/index.php?route=customers&PME_sys_operation=PME_op_View&PME_sys_rec=$link',
  //'URLdisp'	 => "<img src=\"images/ticket.png\" /> View/Edit Right",
  //'css'		 => array('postfix' => ' ajax_click'),
  'values'	 => array("table" => "customers","column" => "id", "description" => "name"),
  'sort'     => true
);
$opts['fdd']['description'] = array(
  'name'     => 'Description',
  'select'   => 'T',
  'options'  => 'ACPD',
  'maxlen'   => 65535,
  'textarea' => array(
    'rows' => 5,
    'cols' => 50),
  'sort'     => true
);
$opts['fdd']['location'] = array(
  'name'     => 'Location',
  'select'   => 'T',
  'maxlen'   => 10,
  'values'	 => array("table" => "location","column" => "id", "description" => "title"),
  'sort'     => true
);
$opts['fdd']['project_manager'] = array(
  'name'     => 'Project Manager',
  'select'   => 'T',
  'maxlen'   => 10,
  'values'	 => array("table" => "users","column" => "id", "description" => "username"),
  'sort'     => true
);
$opts['fdd']['site_telephone'] = array(
  'name'     => 'Site Telephone',
  'options'  => 'ACVPD',
  'select'   => 'T',
  'maxlen'   => 16,
  'sort'     => true
);
$opts['fdd']['site_fax'] = array(
  'name'     => 'Site fax',
  'options'  => 'ACVPD',
  'select'   => 'T',
  'maxlen'   => 16,
  'sort'     => true
);
$opts['fdd']['site_email'] = array(
  'name'     => 'Site email',
  'options'  => 'ACVPD',
  'select'   => 'T',
  'maxlen'   => 45,
  'sort'     => true
);


	if(!isset($_REQUEST["id"])){
?>
<div class="box grid_12">
    <div class="box-head">
    	<span class="box-icon-24 fugue-24 card-address"></span><h2><?=(isset($pagetitle)?$pagetitle:"")?></h2>
    </div>
    <div class="box-content no-pad">
          <ul class="table-toolbar">
            <?php if(!mode_addedit()){ ?>
            	<li>
                	<a href="#" title="Create a project" class="ttip-top" id="btn_creareproject"><img src="images/add.png" alt="" />Create Project</a>
                </li>
			<?php } ?>
          </ul>
    <?php
    new phpMyEdit($opts);
    ?>
    </div>
</div>

<div id="dialog_creareproject" title="Create Project">
<script>
    var cf = new Array();
    cf[0]='ptitle:Title|required';
    cf[1]='pcustomer:Customer|required';
	cf[2]='pmanager:Project Manager|required';
	cf[3]='pparish:Parish|required';
	cf[4]='pphone:Site Phone|numeric|Site Phone should be numbers only';
	cf[5]='pfax:Site Fax|numeric|Site Fax should be numbers only';
	cf[6]='pemail:Site Email|email';
</script>
	<div class="ad-notif-info grid_12"><p style="text-shadow:none !important; color:#FFFFFF">This form allows you to create a new project. Enter the details below and click <strong>Create Project</strong>.</p></div>
    <div style="clear:both;"></div>
    <form method="post" name="frm_cp" id="frm_cp" onsubmit="return yav.performCheck('frm_cp', cf, 'classic');">
        <div class="form-row">
            <p class="form-label">Title</p>
            <div class="form-item">
                <input type="text" class="font_10" name="proj[title]" id="ptitle" />
            </div>
        </div>
        <div class="form-row">
            <p class="form-label">Description</p>
            <div class="form-item">
                <textarea class="font_10" name="proj[description]" style="width:100%" rows="3"></textarea>
            </div>
        </div>
        <div class="form-row">
            <p class="form-label">Customer</p>
            <div class="form-item">
                <select class="font_10" name="proj[customer_id]" id="pcustomer">
                    <option value="">Select customer</option>
                    <?=droplist("SELECT id, name FROM customers ORDER BY name", "id", "name")?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <p class="form-label">Project Manager</p>
            <div class="form-item">
                <select class="font_10" name="proj[project_manager]" id="pmanager">
                    <option value="">Select Project Manager</option>
                    <?=droplist("SELECT id, concat(fname,' ',lname) as fullname FROM users ORDER BY fname, lname", "id", "fullname")?>
                </select>
            </div>
        </div>    
        <div class="form-row">
            <p class="form-label">Site Telephone #</p>
            <div class="form-item">
                <input type="text" class="font_10" name="proj[site_telephone]" id="pphone" />
            </div>
        </div>
        <div class="form-row">
            <p class="form-label">Site Fax #</p>
            <div class="form-item">
                <input type="text" class="font_10" name="proj[site_fax]" id="pfax" />
            </div>
        </div>
        <div class="form-row">
            <p class="form-label">Site Email</p>
            <div class="form-item">
                <input type="text" class="font_10" name="proj[site_email]" id="pemail" />
            </div>
        </div>
        <div class="form-row">
            <p class="form-label">Parish</p>
            <div class="form-item">
                <select class="font_10" name="proj[parish_code]" id="pparish">
                    <option value="">Select Parish</option>
                    <?=droplist("SELECT code, parish FROM parish ORDER BY parish", "code", "parish")?>
                </select>
            </div>
        </div>
        <div class="form-row">
        	<input type="hidden" name="action" value="Create Project" />
            <input class="button green" type="submit" value="Create Project" name="submit">
        </div> 
    </form>
    
</div>


 <script>
$(function() {
	$( "#dialog_creareproject" ).dialog({
		autoOpen: false,
		show: {
			effect: "slide",
			duration: 1000
		},
		modal: true
	});
	$( "#btn_creareproject" ).click(function() {
		$( "#dialog_creareproject" ).dialog( "open" );
	});
});
</script>

<?php }else{ 

	//User select a project so now showing project information

	$db->query("SELECT *, 
	(SELECT c.name FROM customers c WHERE c.id = p.customer_id) as customer,
	(SELECT l.title FROM location l WHERE l.id =  p.location) as location_title,
	(SELECT concat(u.fname, ' ', u.lname, ' (', u.username, ')') FROM users u WHERE u.id = p.project_manager) as pmanager
	FROM project p 
	WHERE p.id = ?", array($_REQUEST["id"]));
	$projects = $db->fetch_assoc_all();
	if(count($projects)> 0){
		$nowproj = $projects[0];
	}

?>
    <div class="box grid_4">
        <div class="box-head"><h2>Project Details</h2></div>
        <div class="box-content min_height_65">
        	<p>
                <dl>
                    <dt>Project Title: </dt>
                        <dd><?=$nowproj["title"]?></dd>
                    <dt>Customer: </dt>
                        <dd><?=$nowproj["customer"]?></dd>
                    <dt>Location: </dt>
                        <dd><?=$nowproj["location_title"]?></dd>
                    <dt>Manager: </dt>
                        <dd><?=$nowproj["pmanager"]?></dd>
                </dl>
            </p>
        </div>
    </div>
    
    <div class="box grid_4">
        <div class="box-head"><h2>Project Description</h2></div>
        <div class="box-content min_height_65">
        	<p>
                <dl>
                    <dt>Description: </dt>
                        <dd><?=(isset($nowproj["description"])?$nowproj["description"]:"No description")?></dd>
                </dl>
            </p>
        </div>
    </div>

	<div class="box grid_4">
        <div class="box-head"><h2>Contact Details</h2></div>
        <div class="box-content min_height_65">
        	<p>
                <dl>
                    <dt>Telephone: </dt>
                        <dd><?=(strlen($nowproj["site_telephone"]> 0)?$nowproj["site_telephone"]:"No telephone #")?></dd>
                    <dt>Fax: </dt>
                        <dd><?=(strlen($nowproj["site_fax"]> 0)?$nowproj["site_fax"]:"No fax #")?></dd>
                    <dt>Email: </dt>
                        <dd><?=(strlen($nowproj["site_email"]> 0)?$nowproj["site_email"]:"No email address")?></dd>
                </dl>
            </p>
        </div>
    </div>
	
    <div style="clear:both;"/>
    

	<div class="box grid_4">
        <div class="box-head color_warning"><h2>Requisition(s)</h2></div>
        <div class="box-content min_height_65">
        	
<?php
	$db->query("SELECT id, date(req_date) as rdate FROM requisition WHERE project_id = ? ORDER by req_date DESC", array($_REQUEST["id"]));
	$requisitions = $db->fetch_assoc_all();
	if(count($requisitions)> 0){
		echo "\n".'<div  style="height: 115px; overflow:auto"> ';
		for($r = 0; $r < count($requisitions); $r++){
?>        
		      
        <div class="req_item_list"><a class="link button blue" id="req_i_<?=$requisitions[$r]["id"]?>" onclick="select_req('<?=$requisitions[$r]["id"]?>')" ><?=$requisitions[$r]["id"]." - ".$requisitions[$r]["rdate"]?></a></div>
		
<?php
		}
		echo '</div>
		<div style="margin-top:20px"><a class="open_createreq link button green">Add Another Requisition</a></div>';
	}else{	//if(count($requisitions)> 0){
		
?>
			
			<p>
            	<center>
                    <a class="open_createreq link">
                    	<img src="images/add_128.png" class="ttip-top" title="Click here to add a requisition to this project" />
                    </a>
                </center>
            </p>
<?php			
	}	//if(count($requisitions)> 0){
?>        	
        </div>
    </div>


	<div class="box grid_8">
        <div class="box-head color_warning"><h2 id="req_dheader">Requisition Details</h2></div>
        <div class="box-content min_height_65" id="req_info">
        	
                <center>
                	
                    <p><img src="images/arrowl_128.png" align="middle" />
                        A requisition has not been selected as yet or you can start by creating a <a class="ttip-top open_createreq link button green" title="Click here to add a requisition to this project">new one</a>.
                	</p>
                </center>
                <div style="clear:both;"></div>
            
        </div>
    </div>

<?php } ?>

<div id="dialog_createreq" title="Create Requisition">
<script>
    var cr = new Array();
    cr[0]='rreq_date:Requisition Date|required';
    cr[1]='rdcode:Delivery Code|required';
	cr[2]='pddrequired:Date Delivery Required|required';
	cr[3]='rscode:Status Code|required';
</script>
	<div class="ad-notif-info grid_12"><p style="text-shadow:none !important; color:#FFFFFF">The form below allows you to create a requisition for the selected project.</p></div>
    <div style="clear:both;"></div>
    
    <form method="post" name="frm_cr" id="frm_cr" onsubmit="return yav.performCheck('frm_cr', cr, 'classic');">
    	<input type="hidden" name="req[req_init]" value="<?=$_SESSION["userinfo"]["id"]?>" />
    	<input type="hidden" name="req[project_id]" value="<?=get_projectid()?>" />
        <div class="form-row">
            <p class="form-label">Requisition Date</p>
            <div class="form-item">
                <input type="text" class="font_10 jdate" name="req[req_date]" id="rreq_date" value="<?=mysqlnow("Y-m-d")?>" />
            </div>
        </div>
        
        <div class="form-row">
            <p class="form-label">Delivery Code</p>
            <div class="form-item">
                <select class="font_10" name="req[delivery_code]" id="rdcode">
                    <option value="">Select delivery code</option>
                    <?=droplist("SELECT id, title FROM delivery_code ORDER BY title", "id", "title")?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <p class="form-label">Date Delivery Required</p>
            <div class="form-item">
                <input type="text" class="font_10 jdate" name="req[date_delivery_required]" id="pddrequired" />
            </div>
        </div>
        <div class="form-row">
            <p class="form-label">Status Code</p>
            <div class="form-item">
                <select class="font_10" name="req[status_code]" id="rscode">
                    <option value="">Select status code</option>
                    <?=droplist("SELECT id, title FROM status_code ORDER BY sort", "id", "title")?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <p class="form-label">Requisition Value</p>
            <div class="form-item">
                <input type="text" class="font_10" name="req[req_value]" id="rreq_value" />
            </div>
        </div>
        
        <div class="form-row">
        	<input type="hidden" name="action" value="Create Requisition" />
            <input class="button green" type="submit" value="Create Requisition" name="submit">
        </div> 
    </form>
    
</div>


<div id="dialog_reqitem" title="Requisition Item">
<script>
    var reqi = new Array();
    reqi[0]='iqty:Quantity|required';
    reqi[1]='iqty:Quantity|double';
	reqi[2]='icost:Amount|required';
    reqi[3]='icost:Amount|double';
	reqi[4]='isupplier:Supplier|required';
	reqi[5]='iitem_no:Item|required';
	
</script>
    
    <form method="post" name="frm_iqty" id="frm_iqty" onsubmit="return yav.performCheck('frm_iqty', reqi, 'classic');">
    	<input type="hidden" name="reqi[created_by]" value="<?=$_SESSION["userinfo"]["id"]?>" />
    	<input type="hidden" name="reqi[req_id]" value="" class="ireq_id"/>
        <input type="hidden" name="f_return" value="index.php?route=home&id=<?=$_REQUEST["id"]?>" />
        <div class="form-row">
            <p class="form-label">Quantity</p>
            <div class="form-item">
                <input type="number" class="font_10" name="reqi[qty]" id="iqty" />
            </div>
        </div>
        
        <div class="form-row">
            <p class="form-label">Description</p>
            <div class="form-item">
                <select class="font_10" name="reqi[item_no]" id="iitem_no">
                    <option value="">Select an item</option>
                    <?=droplist("SELECT * FROM items i ORDER BY title", "id", "title")?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <p class="form-label">Amount (Incl GCT)</p>
            <div class="form-item">
                <input type="number" class="font_10" name="reqi[cost]" id="icost" />
            </div>
        </div>
        <div class="form-row">
            <p class="form-label">Supplier</p>
            <div class="form-item">
                <select class="font_10" name="reqi[supplier_id]" id="isupplier">
                    <option value="">Select status code</option>
                    <?=droplist("SELECT id, name FROM supplier ORDER BY name", "id", "name")?>
                </select>
            </div>
        </div>
        
        <div class="form-row">
            <p class="form-label">SKU</p>
            <div class="form-item">
                <input type="text"  class="font_10" name="reqi[sku]" />
            </div>
        </div>
        

        <div class="form-row">
        	<input type="hidden" name="action" value="Save Item" />
            <input class="button green" type="submit" value="Save Item" name="submit"> 
        </div> 
    </form>
    
</div>







<div style="clear:both"></div>

<form method="post" id="frm_confirmidelete">
	<input type="hidden" name="req_id" class="ireq_id" />
    <input type="hidden" name="f_return" value="index.php?route=home&id=<?=$_REQUEST["id"]?>" />
    <input type="hidden" name="action" value="Confirm Deletion" />
	<div id="req_details"></div>

	<div id="dialog_confirmidelete" title="Confirm Deletion">
    	<p>Please confirm that you want to delete the select requisition item(s).<br />
		<strong>Note:</strong> This cannot be undone.</p><br />

        <input type="submit" class="button red" value="Confirm Deletion" onclick='$("#frm_confirmidelete").submit()' />
    </div>
</form>









<div id='uimodal-output' title=""></div>
<script>

$( "#dialog_createreq, #dialog_reqitem, #dialog_confirmidelete" ).dialog({
	autoOpen: false,
	modal: true
});
$( ".open_createreq" ).click(function() {
	$( "#dialog_createreq" ).dialog( "open" );
});



function open_reqitem(){
	$( "#dialog_reqitem" ).dialog( "open" );	
}

$('a.view_img, .ajax_click').bind('click', function() {
   var $this = $(this);
   var outputHolder = $("#uimodal-output");//$("<div id='.uimodal-output'></div>");
   //$("body").append(outputHolder);
   outputHolder.load($this.attr("href")+"&pagetype=ajax&notoken=1", null, function() {
		outputHolder.dialog({
			height: 400,
			modal: true,
			collapsible: true
		});
   });
   return false;
});

function select_req(id){
	$(".req_item_list a").addClass("blue");
	$(".req_item_list a").removeClass("yellow");
	$("#req_i_" + id).removeClass("blue");
	$("#req_i_" + id).addClass("yellow");
	
	$("#req_dheader").html("Requisition Details for " + $("#req_i_" + id).html());
	
	$.ajaxSetup ({  
        cache: false  
    });  
    var ajax_load = "<img src='images/loading.gif' alt='loading...' style='display: block; margin-left: auto; margin-right: auto; width: 150px; height: auto ' />";  
      
	//  load() functions  
    var loadUrl = "index.php?route=req_info&pagetype=ajax&req_id=" + id; 
	var loadUrl2 = "index.php?route=req_details&pagetype=ajax&req_id=" + id;   
    
	$("#req_info").html(ajax_load).load(loadUrl); 
	$("#req_details")
		.html(ajax_load)
		.load(loadUrl2, null, function(responseText){  
			$('#req_details_table').dataTable( {
				"bJQueryUI": true,
				"sPaginationType": "full_numbers"   
			}); /* For the data tables */ 
			$(".ireq_id").val(id);
        });   
}

function deleted_reqi(){
	if($('.reqi_chk input:checked').length > 0)	{
		$( "#dialog_confirmidelete" ).dialog( "open" );	
	}else{
		alert("You have not selected any items to delete.");
		$.sticky('<b>No Items Selected</b><br><br><p>You have not selected any items to delete.</p>')
	}
}

<?php if(isset($_REQUEST["req_id"])){ ?>
	select_req('<?=$_REQUEST["req_id"]?>');		//Selecting requiistion
	//$('#itbl_<?=$_REQUEST["req_id"]?>').gotoAnchor();
	$(document).scrollTop( $("#req_details").offset().top );  
<?php } ?>
</script>

