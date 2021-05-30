<?php
session_start();

function run_query($qry)
{
	$con = Connect();
	
	$rs = mysqli_query($con,$qry);
	
	$data = array();
	
	while($row = mysqli_fetch_assoc($rs))
	{
		$data[] = $row;
	}
	
	return $data;
}

function run_query_only($qry)
{
	$con = Connect();
	
	$rs = mysqli_query($con,$qry);
	
	return $rs;
}

/*----------------------------------  MENUS -----------------------------*/

function get_active_menus()
{
	$query = "SELECT * FROM tblmenus WHERE mStatus=1";
	
	$records = run_query($query);
	
	return $records;
}

function get_menus()
{
	$query = "SELECT * FROM tblmenus";
	
	$records = run_query($query);
	
	return $records;
}

function get_a_menus($mid)
{
	$query = "SELECT * FROM tblmenus where mId=".$mid;
	
	$records = run_query($query);
	
	return $records;
	
}


function updateMenus($mid,$mname,$mlink,$mstatus)
{
	$query = "update tblmenus set mName='$mname',mLink='$mlink'
			,mStatus=$mstatus where mId=".$mid;

		$rs = run_query_only($query);
	
	return $rs;	

}

function add_menu($mname,$mlink,$mstate)
{
	$query = "insert into tblmenus (mName,mLink,mStatus) 
	          values('$mname','$mlink',$mstate)";

    $rs = run_query_only($query);
	
	return $rs;

}

function delete_menus($mid)
{
	$query = "delete from tblmenus where mId=".$mid;

    $rs = run_query_only($query);
	
	return $rs;

}


/*----------------------------------  Category-----------------------------*/

function get_a_category($Cat_id)
{
	$query = "SELECT * FROM category WHERE category_id=".$Cat_id;
	
	$records = run_query($query);
	
	return $records;
}

function get_category()
{
	$query = "SELECT * FROM category";
	
	$records = run_query($query);
	
	return $records;
}

function update_category_withoutimg($cid,$name)
{
	$query = "update category set category_name='$name' where category_id=".$cid;

		$rs = run_query_only($query);
	
	return $rs;	
}

function update_category($cid,$name,$cpath)
{
	$query = "update category set category_name='$name', category_image='$cpath' where category_id=".$cid;

		$rs = run_query_only($query);
	
	return $rs;	
}

function delete_category($cid)
{
	$query = "delete from category where category_id=".$cid;

    $rs = run_query_only($query);
	
	return $rs;

}

function add_category($cname,$image)
{
	$query = "insert into category (category_name,category_image) 
	          values('$cname','$image')";

    $rs = run_query_only($query);
	
	return $rs;

}

function add_categories($cn)
{
	$query = "insert into category (category_name) 
	          values('$cn')";

    $rs = run_query_only($query);
	
	return $rs;

}



/*----------------------------------  Products -----------------------------*/

function get_products($category)
{
	$query = "SELECT * FROM products where category_id=".$category;
	
	$records = run_query($query);
	
	return $records;
	
}


function get_a_product($neck)
{
	$query = "SELECT * FROM products where 	product_id=".$neck;
	
	$records = run_query($query);
	
	return $records;
	
}


function get_all_products()
{
	$query = "SELECT products.product_id, products.product_name , products.image, products.price, 
	          products.category_id, products.active, category.category_name 
	          FROM products , category where products.category_id=category.category_id and active='Y'";
	
	$records = run_query($query);
	
	return $records;
	
}

function get_product()
{
	$query = "SELECT * FROM products, category where  products.category_id=category.category_id order by product_id ASC";
	
	$records = run_query($query);
	
	return $records;
	
}

function update_product_withoutimg($prodid,$name,$price,$active)
{
	$query = "update products set product_name='$name', price='$price', active='$active' where product_id=".$prodid;

		$rs = run_query_only($query);
	
	return $rs;	
}

function update_products($prodid,$name,$price,$imgp,$active)
{
	$query = "update products set product_name='$name', price='$price' , image='$imgp' , active='$active' 
	          where product_id=".$prodid;

		$rs = run_query_only($query);
	
	return $rs;	
}


function deleteNews($pid)
{
	$query = "DELETE FROM products WHERE product_id=".$pid;

		$rs = run_query_only($query);
	
	return $rs;	
}

function add_product($pn,$pp,$pci,$isact)
{
	$query = "insert into products (product_name,price,category_id,active) 
	          values('$pn',$pp,$pci,'$isact')";

    $rs = run_query_only($query);
	
	return $rs;

}

function add_products($pn,$pimg,$pp,$pci,$isact)
{
	$query = "insert into products (product_name,image,price,category_id,active) 
	          values('$pn','$pimg',$pp,$pci,'$isact')";

    $rs = run_query_only($query);
	
	return $rs;

}



/*----------------------------------  Search items  -----------------------------*/

function searchName($name)
{
	$query = "SELECT * FROM products where product_name like '%".$name."%'";
	
	$records = run_query($query);
	
	return $records;
}

function searchPrice($price)
{
	$query = "SELECT * FROM products where price like '%".$price."%'";
	
	$records = run_query($query);
	
	return $records;
}




/*-------------------------------------------------  Customer-----------------------------*/


function check_user($li,$pas)
{
	$query = "SELECT * FROM customer WHERE customer_loginid='$li' and customer_pass='$pas'";
	
	$rs = run_query_only($query);
	if(mysqli_num_rows($rs)==0)
	{
		$ans = false;
		}
		else
		{
			$ans = true;
			}
			
	return $ans;
	}
	

function find_user($lid,$pas)
{
	$query ="select * from customer where customer_loginid='$lid' and customer_pass='$pas'";
	
	$record = run_query($query);
	
	return $record;
}
	
	
function add_user($fn,$sn,$em,$li,$mb,$pas,$addrs)
{
	$query = "insert into customer(
	    customer_firstname,
	    customer_lastname,
		customer_email,
		customer_loginid,
		customer_mobile,
		customer_pass,
		customer_Address) 
		             
		values('$fn','$sn','$em','$li','$mb','$pas','$addrs')";
			  
	if(run_query_only($query))
	{
        $message="New User Rgistered successfully";
		}
	else
	{
		$message="Registration Failed";
		
	}
	return $message;
	
}

function get_customer()
{
	$query ="select * from customer";
	
	$record = run_query($query);
	
	return $record;
}

function get_a_customer($customer)
{
	$query ="select * from customer where customer_id=".$customer;
	
	$record = run_query($query);
	
	return $record;
}

function update_customer($cid,$fname,$lname,$mail,$lid,$mob,$pass,$adr)
{
	$query = "update customer set 
	customer_firstname='$fname', customer_lastname='$lname', customer_email='$mail',
	customer_loginid='$lid', customer_mobile='$mob', customer_pass='$pass', customer_Address='$adr'
	where customer_id=".$cid;
	$rs = run_query_only($query);
	return $rs;	
}


function edit_cutomer($cid,$mail,$lid,$mob,$pass,$adr)
{
	$query = "update customer set customer_email='$mail',
	customer_loginid='$lid', customer_mobile='$mob', customer_pass='$pass', customer_Address='$adr'
	where customer_id=".$cid;
	$rs = run_query_only($query);
	return $rs;	
}

function delete_customer($custid)
{
	$query = "DELETE FROM customer WHERE customer_id=".$custid;

		$rs = run_query_only($query);
	
	return $rs;	
}


/*------------------------------------------------- admin Verfication process-----------------------------*/



function check_admin($loId,$Passwrd)
{
	$query = "SELECT * FROM admin WHERE admin_loginid ='$loId' and admin_pass ='$Passwrd'";

	$rs = run_query_only($query);
	if(mysqli_num_rows($rs)==0)
	{
		$ans = false;
		}
		else
		{
			$ans = true;
			}
			
	return $ans;
	}

	function find_admin($lid,$pas)
{
	$query = "SELECT * FROM admin WHERE admin_loginid ='$lid' and admin_pass ='$pas'";
	
	$record = run_query($query);
	
	return $record;
}

function get_admin()
{
	$query ="select * from admin";
	
	$record = run_query($query);
	
	return $record;
}

function get_a_admin($admid)
{
	$query ="select * from admin where admin_id=".$admid;
	
	$record = run_query($query);
	
	return $record;
}

function updateAdmin($aid,$logid,$pas)
{
	$query = "update admin set admin_loginid='$logid', admin_pass='$pas' where admin_id=".$aid;

		$rs = run_query_only($query);
	
	return $rs;	

}

function add_Admin($adlid,$adpass)
{
	$query = "insert into admin (admin_loginid,admin_pass) 
	          values('$adlid','$adpass')";

    $rs = run_query_only($query);
	
	return $rs;

}


function deleteAdmin($aid)
{
	$query = "DELETE FROM admin WHERE admin_id=".$aid;

		$rs = run_query_only($query);
	
	return $rs;	
}

/*------------------------------------------------- Advertisment----------------------------*/

function get_advertisement()
{
	$query ="select * from advertise ORDER BY ID DESC";
	
	$record = run_query($query);
	
	return $record;

}

function get_advertisements()
{
	$query ="select * from advertise where IsActive='Y' ORDER BY ID DESC";
	
	$record = run_query($query);
	
	return $record;

}

function add_advertise($link,$st)
{
	$query = "insert into advertise (Link,IsActive) 
	          values('$link','$st')";

    $rs = run_query_only($query);
	
	return $rs;
}

function add_advertisment($link,$img,$st)
{
	$query = "insert into advertise (Link,Image,IsActive) 
	          values('$link','$img','$st')";

    $rs = run_query_only($query);
	
	return $rs;

}

function get_a_advs($ids)
{
	$query ="select * from advertise where ID=".$ids;
	
	$record = run_query($query);
	
	return $record;

}


function update_advs($adid,$adlink,$active)
{
	$query = "update advertise set Link='$adlink', IsActive='$active' where ID=".$adid;

		$rs = run_query_only($query);
	
	return $rs;	

}

function update_Advertisment($adid,$adlink,$adimg,$active)
{
	$query = "update advertise set Link='$adlink', Image='$adimg', IsActive='$active' where ID=".$adid;

		$rs = run_query_only($query);
	
	return $rs;	

}


function delete_advertisment($aid)
{
	$query = "DELETE FROM advertise WHERE ID=".$aid;

		$rs = run_query_only($query);
	
	return $rs;	
}

 function custID(){
	     $query = "Select customer_id from customer";
	 return run_query($query);
    }


function addToCart($id){
	$con = Connect();
	
	$qry = mysqli_query($con, "SELECT * From tempOrder Where ProductId = '$id'");
	$c = mysqli_fetch_array($qry);
	if($c){
	
	echo $c['id'];
	$query = "update tempOrder set `Qty` =`Qty`+1 Where ProductId = '$id' "; 
	
	$rs = run_query_only($query);
	}
	else{
		$slc = mysqli_query($con, "SELECT * From products Where product_id = '$id'");
	
		while($p = mysqli_fetch_array($slc)){
			$id= $p['product_id'];
			echo $name= $p['product_name'];
			echo $price= $p['price'];
			
			$ins =  "INSERT INTO `tempOrder` (`ProductId`, `ProductName`, `Price`,`Qty`) VALUES('$id', '$name', '$price', '1')";
			$insert = mysqli_query($con, $ins);
				if(!$insert){
					echo mysqli_error($con);
			}
		}
	}
	
  }
  
  function removeItem($id){
	 $query = "Delete From tempOrder where ProductId = '$id' ";
	 run_query_only($query);
  }

    function getTotalAmount(){
	 $query = "Select Sum(`price`) as 'p' from tempOrder ";
	 return run_query($query);
  }

function postOrder($cusId){
	$con = Connect();
		$totalPrice1 = getTotalAmount();
		$totalPrice = $totalPrice1[0]['p']; 
		$userID = $_SESSION['user'];
		$ins =  "INSERT INTO `orders` (`user_id`, `total_amount`) VALUES('$userID', '$totalPrice')";
		$insert = mysqli_query($con, $ins);
			if(!$insert){
				echo mysqli_error($con);
		    }
		$oid = mysqli_insert_id($con);
		$slc = mysqli_query($con, "SELECT * From tempOrder ");
		
		while($p = mysqli_fetch_array($slc))
		{ 
			$Proid= $p['ProductId'];
			$price= $p['Price'];
			$qty= $p['Qty'];
		
			$ins1 =  "INSERT INTO `order_detail` (`oid`, `product_id`, `qty`) VALUES('$oid', '$Proid', '$qty')";
			$insert1 = mysqli_query($con, $ins1);

			if(!$insert1)
			{
				echo mysqli_error($con);
			}

			else {
				$d = mysqli_query($con, "DELETE FROM `tempOrder` WHERE 1 ");
				}
			}
		
	
}
    function get_all_orders()
	{
	$query = "SELECT 
	          id,
	          order_detail.oid, 
	          customer.customer_firstname, 
			  customer.customer_Address, 
			  customer.customer_mobile, 
	          products.product_name, 
			  products.image, 
			  order_detail.qty, 
			  orders.total_amount
	          FROM order_detail,orders,customer,products
			  where order_detail.oid=orders.ord_id
			  and customer.customer_id=orders.user_id
			  and order_detail.product_id=products.product_id";
	$records = run_query($query);
	
	return $records;
	
  }


function delete_ord($mid)
{
	$query = "delete from order_detail where id=".$mid;

    $rs = run_query_only($query);
	
	return $rs;

}

?>