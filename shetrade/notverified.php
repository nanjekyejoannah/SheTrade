<?php session_start(); require "_con.php"; error_reporting(0); 
if(!isset($_SESSION['Member_ID'])){
	header("location:login.php?member");
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Not Yet Verified | All about Women Owned Businesses and More</title>
<meta name="keywords" content="animal, veterinary, uganda, livestock, agriculture, agribusiness, pet, wildlife, domestic, birds, poultry, commercial, trade, online, market, africa, east africa, private sector, research, minute, zoo, diseases, zoonoses, poverty, small scale, medium, enterprise, products, drugs, eggs, chicks, chicken, dog, cattle, dairy, beef, animal welfare, hygiene, kennel, feeds" />
<meta name="description" content="Animal Minute | All about Animals and More" />
	<link rel="shortcut icon" type="image/ico" href="images/favicon.gif" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="application/javascript">
jQuery(document).ready(function() {
	//clean up the row of the mega menu. add css class to each element on bottom row.
	//only if more than 7 elements. if more than 16, mm-3
	jQuery('#nav li ul').each(function(ulindex, ulele){
		$total = jQuery(this).children('li').size();
		if ($total <= 7) {
			jQuery(this).addClass('mm-1');
		}
		else {
			$cols = Math.floor(($total) / 8) + 1;
			$remainder = $total % $cols;
			jQuery(this).addClass('mm-' + $cols + ' total-' + $total + ' rem-'+$remainder );
			
			jQuery(this).children().each(function(liindex, liele){
				//alert("total: "+$total+", remainder: "+ $mod+", ulindex: "+ulindex+", liindex: "+liindex);	
				if( liindex + $remainder >= $total || $remainder == 0 && liindex + $cols >= $total ){
					//alert("total: "+$total+", remainder: "+ $remainder+", index: "+liindex);
					jQuery(this).addClass('last');
				}
			});
		}
	});	
	
});
</script>
<style type="text/css">

#nav {
	
	
}

/* All Levels */
#nav li { text-align:centre; position:relative; }
#nav li.over { z-index:999; }
#nav li.parent {}
#nav li a { display:block; text-decoration:none; }
#nav li a:hover { text-decoration:none; }


/* 1st Level */
#nav li { float:left; }
#nav li a { float:left; padding:1px 5px; font-weight:normal;}
#nav li a:hover {
	color: #093;
}
#nav li.over a,
#nav li.active a { color:#fff; }

/* 2nd Level */
#nav ul { position:absolute; width:15em;}
#nav ul div.col { float:left; width: 15em; }


#nav ul li.over > a  { font-weight:normal; color:#fff !important; }
#nav ul.mm-1 { width: 15em; }
#nav ul.mm-2 { width: 30em; }
#nav ul.mm-3 { width: 45em; }
#nav ul.mm-4 { width: 40em; }
/* 3rd+ leven */
#nav ul ul { top:-6px; }

/* Show Menu - uses built-in magento menu hovering */
#nav li.over > ul { left:0; }
#nav li.over > ul li.over > ul { left:14em; }
#nav li.over ul ul { left:-10000px; }

/* Show Menu - uses css only, not fully across all browsers but, for the purpose of the demo is fine by me */
#nav li:hover > ul { left:0; z-index: 100; }
#nav li:hover > ul li:hover > ul { left:14em; z-index: 200; }
#nav li:hover ul ul { left:-10000px; }

/********** Navigation > */
/* ======================================================================================= */
</style>


</head>

<body>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="templatemo_wrapper">
<table width="974" border="0" bgcolor="#FFFFFF">
  <tr>
    <td width="188"><div id="templatemo_header">
      <div class="cleaner">
        <table width="954" border="0" align="left">
          <tr>
            <td width="6">&nbsp;</td>
            <td width="915"><div id="site_title">
              <h1><a href="http://www.mediaminute.net/shetrade">She Trade | All about Women owned Businesses and More</a></h1>
            </div></td>
            <td width="915"><table width="439" border="0" align="right">
              <tr>
                <td width="387"><div id="header_right"><a href="home.php">My Home</a>&nbsp;|&nbsp;<a href="account.php">My Account</a>&nbsp;|&nbsp;<?php if(isset($_SESSION['Member_ID'])){echo "<a href=\"login.php?logout\">Log Out</a>";}else{echo "<a href=\"login.php\">Log In</a>";}?></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div id="templatemo_search">
                  <form action="#" method="get">
                    <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                    <input type="submit" name="Search" value=" Search " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                  </form>
                </div></td>
              </tr>
            </table></td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </div>
    </div></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td><div  id="templatemo_menu">
      <div id="top_nav" class="ddsmoothmenu">
          
          <ul >
          <li><a href="index.php">Home</a></li>
           <li><a href="about.php" >About</a></li>
      <?php 
		  $Total_Resources = "SELECT Resource_ID FROM resource";
		  $Total_Resources_Results = mysql_query($Total_Resources);
		  $All_Resources=mysql_num_rows($Total_Resources_Results);
		  if($All_Resources!=0){
			  echo "<li id=\"nav\"> <a href=\"listing.php?resource\">  Resources  </a>";
			  echo "<ul class=\"level0 mm-2 total-8 rem-1\">";
			  echo "<li ><a href=\"listing.php?resource\"><span>All Resources ($All_Resources)</span></a></li>";
			  $Resource_Count_SQL="SELECT `Category`, COUNT(*) as Category_Number FROM `resource` GROUP BY `Category` ORDER BY Category ASC";
			  $Resource_Count_Results = mysql_query($Resource_Count_SQL, $conn);
			  $Resource_Count_Found = mysql_num_rows($Resource_Count_Results);
			  if($Resource_Count_Found!=0){
				while ($Resource_Count_Array = mysql_fetch_array($Resource_Count_Results)) {
					$Menu_Resource = $Resource_Count_Array['Category'];
					$Menu_Resource_Number = $Resource_Count_Array['Category_Number'];
					echo "<li ><a href=\"listing.php?resource=$Menu_Resource\"><span>$Menu_Resource ($Menu_Resource_Number)</span></a></li>";	
				}  
			  }
			  echo "</ul>";
			echo "</li>";
		  }
		   ?>
	  <?php 
      $Total_Animals = "SELECT Animals_ID FROM animal WHERE Verified='Yes'";
      $Total_Animals_Results = mysql_query($Total_Animals);
      $All_Animals=mysql_num_rows($Total_Animals_Results);
      if($All_Animals!=0){
          echo "<li class=\"level0 nav-2 parent\" id=\"nav\"> <a href=\"listing.php?animal\"><span>Animals</span></a>";
          echo "<ul class=\"level0 mm-2 total-8 rem-1\">";
          echo "<li ><a href=\"listing.php?animal\"><span>All Animals ($All_Animals)</span></a></li>";
        
          $Animal_Count_SQL="SELECT `Animal`, COUNT(*) as Animal_Number FROM `animal` WHERE Verified='Yes' GROUP BY `Animal` ORDER BY Animal ASC";
          $Animal_Count_Results = mysql_query($Animal_Count_SQL, $conn);
          $Animal_Count_Found = mysql_num_rows($Animal_Count_Results);
          if($Animal_Count_Found!=0){
            while ($Animal_Count_Array = mysql_fetch_array($Animal_Count_Results)) {
                $Menu_Animal = $Animal_Count_Array['Animal'];
                $Menu_Animal_Number = $Animal_Count_Array['Animal_Number'];
                echo "<li ><a href=\"listing.php?animal=$Menu_Animal\"><span>$Menu_Animal ($Menu_Animal_Number)</span></a></li>";	
            }  
          }
          echo "</ul>";
        echo "</li>";
      }

      $Total_Products = "SELECT Product_ID FROM product WHERE Verified='Yes'";
      $Total_Products_Results = mysql_query($Total_Products);
      $All_Products=mysql_num_rows($Total_Products_Results);
      if($All_Products){
        echo "<li class=\"level0 nav-2 parent\" id=\"nav\"> <a href=\"listing.php?product\"><span>Products</span></a>";
        echo "<ul class=\"level0 mm-2 total-8 rem-1\">"; 
        echo "<li ><a href=\"listing.php?product\"><span>All Products ($All_Products)</span></a></li>";
        
      $Product_Count_SQL="SELECT `Product`, COUNT(*) as Product_Number FROM `product` WHERE Verified='Yes' GROUP BY `Product` ORDER BY Animal ASC";
      $Product_Count_Results = mysql_query($Product_Count_SQL, $conn);
      $Product_Count_Found = mysql_num_rows($Product_Count_Results);
      if($Product_Count_Found!=0){
        while ($Product_Count_Array = mysql_fetch_array($Product_Count_Results)) {
            $Menu_Product = $Product_Count_Array['Product'];
            $Menu_Product_Number = $Product_Count_Array['Product_Number'];
            echo "<li ><a href=\"listing.php?product=$Menu_Product\"><span>$Menu_Product ($Menu_Product_Number)</span></a></li>";	
        }  
      }
        
        echo "</ul>";
        echo "</li>";
      }
		  
	  ?>
     
     <li><a href="booking.php">Make an Order</a>
                </li>
      <!--<li><a href="register.php" >Register</a></li>
      <li><a href="faqs.php" >FAQ</a></li>-->
      <li><a href="contact.php" >Contact</a><br style="clear: left" />
      </li>
          </ul>
      </div>
      <!-- end of ddsmoothmenu --><br />
      <div id="menu_second_bar">
        <div class="cleaner"></div>
      </div>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="723" border="0" align="right" bgcolor="#FFFFFF">
      <tr>
        <td width="722"><div id="content" class="float_r">
        <?php 
		if(isset($_GET['view']) && $_GET['view']=="products"){
			echo "<h1>Not Yet Verified Products</h1>";
			echo "Click Here to <a href=\"notverified.php?view=animals\">View Animals</a> that have not yet been verified";
			echo "<br /><br />";
			
			$max_results = 12;
			if (isset($_GET["page"])) { $page  = abs($_GET["page"]); } else { $page=1; }; 
			$start_from = ($page-1) * $max_results; 
			
			$Total_Products = "SELECT Product_ID FROM product WHERE Verified='No' AND Added_By=$_SESSION[Member_ID]";
			$totalresults = mysql_query($Total_Products);
			$total=mysql_num_rows($totalresults);
			$total_pgs = ceil($total / $max_results);
			
			$This_Page_SQL = "SELECT Product_ID, Animal, Product, Price, Image FROM product WHERE Verified='No' AND Added_By=$_SESSION[Member_ID] ORDER BY Views ASC LIMIT $start_from, $max_results";
			$result = mysql_query($This_Page_SQL, $conn) or die(mysql_error());
			$this_page_total=mysql_num_rows($result);
			$this_page_total_2=mysql_num_rows($result);
			$this_page_total=(($page-1)*$max_results)+$this_page_total;
			
			$posision=getStartPossion($page, $max_results);
			
			$itemstart=$start_from+1;
			if($total!=0){
			if($max_results>$total){
				echo "Showing $itemstart - $total of $total Products<br><br>";
				}
			else{
				echo "Showing $itemstart - $this_page_total of $total Products<br><br>";
				}
			}else{
				echo "Showing 0 - 0 of 0 Products<br><br>";
				}//					
			while ($newArray = mysql_fetch_array($result)) {
						//$id = $newArray['ID'];
						$Product_ID=$newArray['Product_ID'];
						$Animal = $newArray['Animal'];
						$Product = $newArray['Product'];
						$Price = number_format($newArray['Price'], 0);
						$Image = $newArray['Image'];
				
			if ($Product_ID!=""){
				/*
				echo "<div class=\"product_box\"> <a href=\"details.php?product=$Product_ID\"><img src=\"$Image\" alt=\"Image 01\" width=\"200\" height=\"120\"/></a>";
				echo "<h3>$Animal / $Product</h3>";
				echo "<p class=\"product_price\">$ $Price</p>";
				echo "<a href=\"details.php?product=$Product_ID\" class=\"add_to_card\">View Details</a> <a href=\"edit.php?product=$Product_ID\" class=\"detail\">Edit</a> </div>";
				*/
				echo "<p>";
				echo "<table width=\"100%\" border=\"0\">";
				  echo "<tr>";
					echo "<td width=\"120\" rowspan=\"4\" valign=\"top\" align=\"center\"><a href=\"details.php?product=$Product_ID\"><img name=\"\" src=\"$Image\" width=\"120\" height=\"89\" alt=\"\" /></a></td>";
					echo "<td width=\"348\"><a href=\"details.php?product=$Product_ID\"><strong>$Animal / $Product</strong></a> ($$Price)</td>";
					echo "<td width=\"200\">&nbsp;</td>";
				  echo "</tr>";
				  echo "<tr>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
				  echo "</tr>";
				  echo "<tr>";
					echo "<td><a href=\"edit.php?product=$Product_ID\">Edit Product</a></td>";
					echo "<td>&nbsp;</td>";
				  echo "</tr>";
				  echo "<tr>";
					echo "<td><a href=\"delete.php?product=$Product_ID\"><alart>Delete Product</alart></a></td>";
					echo "<td>&nbsp;</td>";
				  echo "</tr>";
				echo "</table>";
				echo "<br /><hr />";
				echo "</p>";
			}
			$posision++;
		
		}
		echo "<div class=\"cleaner\"></div>";
		if($total!=0){
		if ($page==1){
			echo "Prev";
		}
		else{
			$prev=$page-1;
			echo "<a href='notverified.php?view=products&page=$prev'>Prev</a>";
		}
		echo " | ";
		if ($page==$total_pgs){
			echo "Next";
		}
		else{
			$next=$page+1;
			echo "<a href='notverified.php?view=products&page=$next'>Next</a>";	
		}
		echo " | ";
		//echo "Prev | Next | ";
		for ($i=1; $i<=$total_pgs; $i++) { 
			if($page==$i){
				echo "$i ";
			}
			else{
				echo "<a href='notverified.php?view=products&page=".$i."'>".$i."</a> "; 
			}
		}
		}
		}else{
			
			echo "<h1>Not Yet Verified Businesses</h1>";
			echo "Click Here to <a href=\"notverified.php?view=products\">View Products</a> that have not yet been verified";
			echo "<br /><br />";
			
			$max_results = 12;
			if (isset($_GET["page"])) { $page  = abs($_GET["page"]); } else { $page=1; }; 
			$start_from = ($page-1) * $max_results; 
			
			$Total_Animals = "SELECT Animals_ID FROM animal WHERE Verified='No' AND Added_By=$_SESSION[Member_ID]";
			$totalresults = mysql_query($Total_Animals);
			$total=mysql_num_rows($totalresults);
			$total_pgs = ceil($total / $max_results);
			
			$This_Page_SQL = "SELECT Animals_ID, Animal, Breed, Price, Image_1 FROM animal WHERE Verified='No' AND Added_By=$_SESSION[Member_ID] ORDER BY Views ASC LIMIT $start_from, $max_results";
			$result = mysql_query($This_Page_SQL, $conn) or die(mysql_error());
			$this_page_total=mysql_num_rows($result);
			$this_page_total_2=mysql_num_rows($result);
			$this_page_total=(($page-1)*$max_results)+$this_page_total;
			
			$posision=getStartPossion($page, $max_results);
			
			$itemstart=$start_from+1;
			if($total!=0){
			if($max_results>$total){
				echo "Showing $itemstart - $total of $total Animals<br><br>";
				}
			else{
				echo "Showing $itemstart - $this_page_total of $total Animals<br><br>";
				}
			}else{
				echo "Showing 0 - 0 of 0 Businesses<br><br>";
				}//					
			while ($newArray = mysql_fetch_array($result)) {
						//$id = $newArray['ID'];
						$Animals_ID=$newArray['Animals_ID'];
						$Animal = $newArray['Animal'];
						$Breed = $newArray['Breed'];
						$Price = number_format($newArray['Price'], 0);
						$Image_1 = $newArray['Image_1'];
				
			if ($Animals_ID!=""){
				/*
				echo "<div class=\"product_box\"> <a href=\"details.php?animal=$Animals_ID\"><img src=\"$Image_1\" alt=\"Image 01\" width=\"200\" height=\"120\"/></a>";
				echo "<h3>$Animal / $Breed</h3>";
				echo "<p class=\"product_price\">$ $Price</p>";
				echo "<a href=\"details.php?animal=$Animals_ID\" class=\"add_to_card\">View Details</a> <a href=\"edit.php?animal=$Animals_ID\" class=\"detail\">Edit</a> </div>";
				*/
				echo "<p>";
				echo "<table width=\"100%\" border=\"0\">";
				  echo "<tr>";
					echo "<td width=\"120\" rowspan=\"4\" valign=\"top\" align=\"center\"><a href=\"details.php?animal=$Animals_ID\"><img name=\"\" src=\"$Image_1\" width=\"120\" height=\"89\" alt=\"\" /></a></td>";
					echo "<td width=\"348\"><a href=\"details.php?animal=$Animals_ID\"><strong>$Animal / $Breed</strong></a> ($$Price)</td>";
					echo "<td width=\"200\">&nbsp;</td>";
				  echo "</tr>";
				  echo "<tr>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
				  echo "</tr>";
				  echo "<tr>";
					echo "<td><a href=\"edit.php?animal=$Animals_ID\">Edit Business</a></td>";
					echo "<td>&nbsp;</td>";
				  echo "</tr>";
				  echo "<tr>";
					echo "<td><a href=\"delete.php?animal=$Animals_ID\"><alart>Delete Business</alart></a></td>";
					echo "<td>&nbsp;</td>";
				  echo "</tr>";
				echo "</table>";
				echo "<br /><hr />";
				echo "</p>";
			}
			$posision++;
		
		}
		echo "<div class=\"cleaner\"></div>";
		if($total!=0){
		if ($page==1){
			echo "Prev";
		}
		else{
			$prev=$page-1;
			echo "<a href='notverified.php?view=animals&page=$prev'>Prev</a>";
		}
		echo " | ";
		if ($page==$total_pgs){
			echo "Next";
		}
		else{
			$next=$page+1;
			echo "<a href='notverified.php?view=animals&page=$next'>Next</a>";	
		}
		echo " | ";
		//echo "Prev | Next | ";
		for ($i=1; $i<=$total_pgs; $i++) { 
			if($page==$i){
				echo "$i ";
			}
			else{
				echo "<a href='notverified.php?view=animals&page=".$i."'>".$i."</a> "; 
			}
		}
		}
	}
	
	function getStartPossion($x, $max){
	if($x==1){
		return 1;
		}
		else{
			$temp=($x-1)+$max;
			return 	$temp;
		}
	}

		
		?>
        <div class="cleaner"></div>
            <blockquote>Announcment</blockquote>
        </div>
		</td>
      </tr>
    </table>
      <table width="230" border="0" align="left" >
      <tr>
        <td><h3>Member<br />
        </h3></td>
      </tr>
      <tr>
        <td>
        <a href="home.php"><strong>Home</strong></a><br />
        <a href="addbusiness.php"><strong>Add Business</strong></a><br />
        <a href="addproduct.php"><strong>Add Product</strong></a><br />
        <a href="mylisting.php?view=businesses"><strong>Business List</strong></a><br />
        <a href="mylisting.php?view=products"><strong>Product List</strong></a><br />
        <a href="notverified.php?view=businesses"><strong>Not Yet Verified Businesses</strong></a><br />
        <a href="notverified.php?view=products"><strong>Not Yet Verified Products</strong></a><br />
        <br />
        <a href="login.php?logout"><strong><alart>Logout</alart></strong></a>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <?php
      	$Popular_SQL = "SELECT Animals_ID, Animal, Breed, Price, Image_1_Thumb, Views FROM animal WHERE Verified='Yes' ORDER BY Views DESC LIMIT 0, 3";
        $Popular_Result = mysql_query($Popular_SQL, $conn) or die(mysql_error());
        $Popular_3=mysql_num_rows($Popular_Result);
        if($Popular_3>0){
			echo "<tr>";
			echo "<td><h3>Popular Animals</h3></td>";
			echo "</tr>";
            while ($newArray = mysql_fetch_array($Popular_Result)) {
                        //$id = $newArray['ID'];
                        $Animals_ID=$newArray['Animals_ID'];
                        $Animal = $newArray['Animal'];
                        $Breed = $newArray['Breed'];
                        $Price = number_format($newArray['Price'], 0);
                        $Image_1_Thumb = $newArray['Image_1_Thumb'];
                        $Views = $newArray['Views'];
                                            
				if ($Animals_ID!=""){
					echo "<tr>";
					echo "<td>";
					echo "<div class=\"bs_box\"> <a href=\"details.php?animal=$Animals_ID\"><img src=\"$Image_1_Thumb\" width=\"93\" height=\"70\" alt=\"Image\" /></a>";
					echo "Animal:<a href=\"details.php?animal=$Animals_ID\"><strong>$Animal</strong></a><br />";
					echo "Breed: <a href=\"details.php?animal=$Animals_ID\">$Breed</a><br />";
					echo "Views: <a href=\"details.php?animal=$Animals_ID\">$Views</a><br />";
					echo "<div class=\"cleaner\"></div>";
					echo "</div>";
					echo "</td>";
					echo "</tr>";
				}        
            }
        }
        ?>
      <tr>
      <td>
      <div class="fb-like-box" data-href="http://www.facebook.com/animalminute" data-width="230" data-height="335" data-show-faces="true" data-stream="false" data-header="false"></div>
      </td>
      </tr>	
    </table></td>
  </tr>
  <tr>
    <td><div id="templatemo_footer">
      <div id="templatemo_footer2">
        <div class="col one_fourth">
          <h4>Powered By</h4>
          <p><img src="images/greentagcolor.png" alt="Green Tag Africa" width="92" height="72" class="imgage-with-frame" /></p>
        </div>
        <!--
        <div class="col one_fourth">
          <table width="227" border="0" align="left">
            <tr>
              <td width="221">Facebook</td>
              </tr>
            <tr>
              <td><div class="fb-like" data-href="http://www.facebook.com/animalminute" data-send="true" data-width="220" data-show-faces="true"></div></td>
              </tr>
            </table>
          <h4>&nbsp;</h4>
          </div>
          -->
        <div class="col one_fourth">
          <h4>Quick Contact</h4>
          <?php 
            $Contact_Sql = "SELECT Email, Phone FROM contacts WHERE Contacts_ID=1";
            $result = mysql_query($Contact_Sql, $conn) or die(mysql_error());
            $newArray = mysql_fetch_array($result);
            $Phone = $newArray['Phone'];
            $Email = $newArray['Email'];
            
            ?>
          <div class="toolfree_area">
            <div class="call_free"><span class="callus">Call Us: </span> <span class="callno"><?php echo $Phone; ?></span></div>
            <div class="bookmark">Email Us: <a href="mailto: <?php echo $Email; ?>"><?php echo $Email; ?></a></div>
            <div class="facing"></div>
          </div>
        </div>
        <div class="col one_fourth no_margin_right">
          <h4>Follow Us</h4>
          <div class="footer_social_button"> <a href="http://www.facebook.com/animalminute"><img src="images/facebook.png" title="facebook" alt="Facebook" /></a> <a href="#"><img src="images/flickr.png" title="flickr" alt="flickr" /></a> <a href="#"><img src="images/twitter.png" title="twitter" alt="Twitter" /></a> <a href="#"><img src="images/youtube.png" title="youtube" alt="Youtube" /></a></div>
        </div>
        <div class="cleaner"></div>
      </div>
      <p>&nbsp; </p>
      <p><a href="index.php">Home</a> | <a href="listing.php">Listing</a> | <a href="about.php">About</a> | <a href="terms.php">Terms of Use</a> | <a href="privacy.php">Privacy Policy</a> | <a href="contact.php">Contact</a></p>
      Copyright © 2015 <a href="#">SHE Trade</a></div></td>
  </tr>
</table><!-- END of templatemo_header --><!-- END of templatemo_menu --><!-- END of templatemo_middle -->
    
<div id="templatemo_main">
  <div class="cleaner"></div>
  </div> 
    
    <!-- END of templatemo_main --><!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->

</body>
</html>