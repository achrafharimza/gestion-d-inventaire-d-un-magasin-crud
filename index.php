
<?php 

	include("connection.php");
  
	include("read.php");
    include("add.php");

    

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sass.css">
    <title>Document</title>
</head>

<body>
    <div id="notBlured">
        <div class="zone1">
            <div class="sec">
                <img class="image" src="js/pic.png" alt="pic">
                <div class="underimage">
                    <div id="ProfilUsername"> USER NAME</div>
                    <div class="div2">my profile</div>

                </div>
            </div>
            <div class="zone12">
                <hr>

                <div> Menu</div>
                <ul>
                    <li>
                        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 27">
                                <path id="Icon_material-dashboard" data-name="Icon material-dashboard"
                                    d="M4.5,19.5h12V4.5H4.5Zm0,12h12v-9H4.5Zm15,0h12v-15h-12Zm0-27v9h12v-9Z"
                                    transform="translate(-4.5 -4.5)" />
                            </svg>
                            Dashboard</a>
                    </li>


                    <li><a class="active" href="My Product.html"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 21 21">
                                <path id="Icon_awesome-product-hunt" data-name="Icon awesome-product-hunt"
                                    d="M13.366,9.031a1.5,1.5,0,0,1-1.5,1.5H9.031v-3h2.835A1.5,1.5,0,0,1,13.366,9.031Zm7.165,1.5a10,10,0,1,1-10-10A10,10,0,0,1,20.531,10.531Zm-5.165-1.5a3.5,3.5,0,0,0-3.5-3.5H7.031v10h2v-3h2.835A3.5,3.5,0,0,0,15.366,9.031Z"
                                    transform="translate(-0.031 -0.031)" stroke="#000" stroke-width="1" />
                            </svg>

                            My Product</a></li>
                    <li><a href="MY SALES.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path id="Icon_material-local-grocery-store"
                                    data-name="Icon material-local-grocery-store"
                                    d="M8.4,21.4a2.3,2.3,0,1,0,2.3,2.3A2.3,2.3,0,0,0,8.4,21.4ZM1.5,3V5.3H3.8l4.14,8.729L6.388,16.846a2.223,2.223,0,0,0-.288,1.1,2.307,2.307,0,0,0,2.3,2.3H22.2v-2.3H8.883a.285.285,0,0,1-.287-.288l.035-.138L9.665,15.65h8.568a2.289,2.289,0,0,0,2.012-1.184L24.362,7A1.124,1.124,0,0,0,24.5,6.45,1.153,1.153,0,0,0,23.35,5.3H6.342L5.261,3ZM19.9,21.4a2.3,2.3,0,1,0,2.3,2.3A2.3,2.3,0,0,0,19.9,21.4Z"
                                    transform="translate(-1 -2.5)" stroke="#000" stroke-width="1" />
                            </svg>

                            My Sales</a></li>
                    <li><a href="Store Sales.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.048 22">
                                <path id="Icon_awesome-store-alt" data-name="Icon awesome-store-alt"
                                    d="M15,15.75H6V9.188H3v10.5A1.414,1.414,0,0,0,4.5,21h12A1.414,1.414,0,0,0,18,19.688V9.188H15ZM29.751,5.832l-4-5.25A1.577,1.577,0,0,0,24.5,0H5.5A1.561,1.561,0,0,0,4.258.582l-4,5.25A1.314,1.314,0,0,0,1.506,7.875h27A1.316,1.316,0,0,0,29.751,5.832ZM24,20.344a.71.71,0,0,0,.75.656h1.5a.71.71,0,0,0,.75-.656V9.188H24Z"
                                    transform="translate(0.52 0.5)" stroke="#000" stroke-width="1" />
                            </svg>
                            Store sales</a></li>
                    <li><a href="SETTINGS.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.176 20.177">
                                <path id="Icon_ionic-ios-settings" data-name="Icon ionic-ios-settings"
                                    d="M21.682,13.748a2.444,2.444,0,0,1,1.568-2.28,9.687,9.687,0,0,0-1.173-2.825,2.478,2.478,0,0,1-.995.213,2.439,2.439,0,0,1-2.232-3.433,9.663,9.663,0,0,0-2.82-1.172,2.443,2.443,0,0,1-4.562,0A9.693,9.693,0,0,0,8.644,5.422,2.439,2.439,0,0,1,6.412,8.855a2.4,2.4,0,0,1-.995-.213A9.9,9.9,0,0,0,4.25,11.472a2.443,2.443,0,0,1,0,4.561,9.687,9.687,0,0,0,1.173,2.825,2.44,2.44,0,0,1,3.221,3.22,9.749,9.749,0,0,0,2.825,1.172,2.439,2.439,0,0,1,4.552,0,9.693,9.693,0,0,0,2.825-1.172,2.443,2.443,0,0,1,3.221-3.22,9.744,9.744,0,0,0,1.173-2.825A2.456,2.456,0,0,1,21.682,13.748ZM13.795,17.7a3.957,3.957,0,1,1,3.958-3.957A3.957,3.957,0,0,1,13.795,17.7Z"
                                    transform="translate(-3.662 -3.661)" stroke="#000" stroke-width="1" />
                            </svg>
                            settings</a></li>
                </ul>
            </div>
            <div>
                <a href="#"><button>log out</button></a>
            </div>





        </div>
        <div class="myproduct">

            <table>
                <thead>
                    <th>Products</th>
                    <th>Name </th>
                    <th>Price</th>
                    <th>expiration date </th>
                    <th>Brand</th>
                    <th>category</th>
                    <th>Stock</th>
                    <th></th>
                    <th></th>

                </thead>
                <?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
            <td><?php  echo  $row['id'];?></td>
   <td><?php  echo  $row['namep'];?></td>
   <td><?php  echo $row['price'];?></td>
   <td><?php  echo $row['expirationd'];?></td>
   <td><?php  echo $row['brand'];?></td>
   <td><?php  echo $row['category'];?></td>
   <td><?php  echo $row['stock'];?></td>
				<td>
				<a  href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="connection.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
	<?php } ?>
            </table>
            <div>
                <button onclick="openForm()">Add Product</button>
            </div>



        </div>
    </div>
    <div class="form-popup" id="myForm">
        <section class="popContainer">
        
<form action="add.php" method="POST" >
            <div id="popop">
                <span class="btn cancel" onclick="closeForm()">X</span>
                <section >
                    
                    <h1>New product</h1>
<input type="hidden" name="id" value="<?php echo $id; ?>">

                    <input type="text" placeholder="Enter name" name="namea" value="<?php echo $name; ?>">
                    <small id="name">please check the name</small>

                    <input type="text" placeholder="Enter price" name="price" value="<?php echo $price; ?>">
                    <small id="price">please check the price</small>

                    <input type="date" placeholder="Enter expiration Date" name="expiration_Date" value="<?php echo $expiration_Date; ?>">
                    <small id="expiration">please check the date</small>

                    <input type="text" placeholder="Enter Brand" name="brand"value="<?php echo $brand; ?>" >
                    <small id="Brand">please check the Brand</small>

                    <input type="text" placeholder="Enter category" name="category" value="<?php echo $category; ?>">
                    <small id="category">please check the category</small>

                    <input type="text" placeholder="Enter stock" name="stock" value="<?php echo $stock; ?>">
                    <small id="stock">please check the stock</small>


                </section>
                <section style="
    display: none;
">
                    
                </section>

            </div>
            <?php if ($edit == true): ?>
	<button class="btn"  name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
            <button id="formProfuctButton"  class="btn" name="add">add product</button>
            <?php endif ?>
</form>
        </section>
    </div>
    <div class="deleteConfiramtion">
        <div class="divox">
            <svg xmlns="http://www.w3.org/2000/svg" width="277.628" height="244.526" viewBox="0 0 277.628 244.526">
                <g id="Icon_feather-alert-triangle" data-name="Icon feather-alert-triangle" transform="translate(15 15)"
                    opacity="0.7">
                    <path id="Tracé_55" data-name="Tracé 55"
                        d="M126.829,54.868,26.456,222.434A23.7,23.7,0,0,0,46.72,257.985H247.467a23.7,23.7,0,0,0,20.264-35.551L167.358,54.868a23.7,23.7,0,0,0-40.529,0Z"
                        transform="translate(-23.28 -43.459)" fill="none" stroke="#f60b0b" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="30" />
                    <path id="Tracé_56" data-name="Tracé 56" d="M180,135v47.4" transform="translate(-56.186 -62.68)"
                        fill="none" stroke="#f60b0b" stroke-linecap="round" stroke-linejoin="round" stroke-width="30" />
                    <path id="Tracé_57" data-name="Tracé 57" d="M180,255h0" transform="translate(-56.186 -87.876)"
                        fill="none" stroke="#f60b0b" stroke-linecap="round" stroke-linejoin="round" stroke-width="30" />
                </g>
            </svg>
            <span>You Are About to Delete This Product</span>
            <small>Are You Sure ?</small>
            <div id="buttons">
                <button onclick="verifyEdit(true)">Yes</button>
                <button onclick="verifyEdit(false)">No</button>
            </div>
        </div>
    </div>
    
</body>


<script src="js/seller/sellerProduct.js"></script>
<script  src="redirecter.js"></script>
<script src="js/main.js"></script>
</html>
