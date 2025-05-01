<?php

include 'includes/book-utilities.inc.php';

$customers = load_customers();
$orders = load_orders();
$books = load_books(); 

// Added error handling for missing data
if (!$customers || !$orders || !$books) {
    die('Error: Unable to load required data.');
}

// Validate customer ID from GET parameter
if (isset($_GET['customer']) && !is_numeric($_GET['customer'])) {
    die('Invalid customer ID.');
}

$selectedCustomer = null;
$selectedCustomerOrders = [];

if (isset($_GET['customer'])) {
    $cid = $_GET['customer'];
    $selectedCustomer = get_customer_by_id($customers, $cid);
    $selectedCustomerOrders = get_orders_by_customer_id($orders, $cid);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chapter 12</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">

    <link rel="stylesheet" href="css/styles.css">
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <script src="js/jquery.sparkline.2.1.2.js"></script>
    
  
</head>

<body>
    
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
            
    <?php include 'includes/header.inc.php'; ?>
    <?php include 'includes/left-nav.inc.php'; ?>
    
    <main class="mdl-layout__content mdl-color--grey-50">
        <section class="page-content">

            <div class="mdl-grid">

              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--7-col card-lesson mdl-card  mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--orange">
                  <h2 class="mdl-card__title-text">Customers</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <table class="mdl-data-table  mdl-shadow--2dp">
                      <thead>
                        <tr>
                          <th class="mdl-data-table__cell--non-numeric">Name</th>
                          <th class="mdl-data-table__cell--non-numeric">University</th>
                          <th class="mdl-data-table__cell--non-numeric">City</th>
                          <th>Sales</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        <?php foreach ($customers as $customer): ?>
                        <tr>
                          <td class="mdl-data-table__cell--non-numeric">
                            <a href="?customer=<?php echo $customer[0]; ?>">
                              <?php echo $customer[1] . ' ' . $customer[2]; ?>
                            </a>
                          </td>
                          <td class="mdl-data-table__cell--non-numeric"><?php echo $customer[3]; ?></td>
                          <td class="mdl-data-table__cell--non-numeric"><?php echo $customer[4]; ?></td>
                          <td class="mdl-data-table__cell--non-numeric">
                          <span class="sparkline"><?php echo $customer[11]; ?></span>

                          </td>
                        </tr>
                        <?php endforeach; ?>  
                                              
                      </tbody>
                    </table>
                </div>
              </div>  <!-- / mdl-cell + mdl-card -->
              
              
            <div class="mdl-grid mdl-cell--5-col">
    

       
                  <!-- mdl-cell + mdl-card -->
                  <div class="mdl-cell mdl-cell--12-col card-lesson mdl-card  mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
                      <h2 class="mdl-card__title-text">Customer Details</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                    <?php if ($selectedCustomer): ?>
                      <h4><?= htmlspecialchars($selectedCustomer[1] . ' ' . $selectedCustomer[2]) ?></h4>
                      <p>
                        <?= htmlspecialchars($selectedCustomer[4]) ?><br>
                        <?= htmlspecialchars($selectedCustomer[5]) ?><br>
                        <?= htmlspecialchars($selectedCustomer[6]) ?><br>
                        <?= htmlspecialchars($selectedCustomer[8]) ?>
                      </p>
                    <?php else: ?>
                      <p>Please select a customer to view details.</p>
                    <?php endif; ?>

     
                                                                                                                                                                           
                    </div>    
                  </div>  <!-- / mdl-cell + mdl-card -->   

                  <!-- mdl-cell + mdl-card -->
                  <div class="mdl-cell mdl-cell--12-col card-lesson mdl-card  mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
                      <h2 class="mdl-card__title-text">Order Details</h2>
                    </div>
                    <div class="mdl-card__supporting-text">       
                               
                                                                      

                               <table class="mdl-data-table  mdl-shadow--2dp">
                              <thead>
                                <tr>
                                  <th class="mdl-data-table__cell--non-numeric">Cover</th>
                                  <th class="mdl-data-table__cell--non-numeric">ISBN</th>
                                  <th class="mdl-data-table__cell--non-numeric">Title</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php if ($selectedCustomer): ?>
                                  <?php if (!empty($selectedCustomerOrders)): ?>
                                    <?php foreach ($selectedCustomerOrders as $order): ?>
                                      <?php
                                      $isbn = trim($order[2]);
                                      $book = get_book_by_isbn($books, $isbn);
                                      $title = $book ? $book[3] : $order[3]; // fallback
                                      ?>
                                      <tr>
                                        <td class="mdl-data-table__cell--non-numeric">
                                        <?php
                                          $imgPath = "images/tinysquare/$isbn.jpg";
                                          $imgExists = file_exists($imgPath);
                                          ?>
                                        <img src="<?= $imgExists ? $imgPath : 'images/tinysquare/default.jpg' ?>" alt="<?= htmlspecialchars($title) ?>" />

                                        </td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= htmlspecialchars($isbn) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= htmlspecialchars($title) ?></td>
                                      </tr>
                                    <?php endforeach; ?>
                                  <?php else: ?>
                                    <tr>
                                      <td colspan="3">No orders for this customer.</td>
                                    </tr>
                                  <?php endif; ?>
                                <?php endif; ?>

                    
                              </tbody>
                            </table>
       

                        </div>    
                   </div>  <!-- / mdl-cell + mdl-card -->             


               </div>   
           
           
            </div>  <!-- / mdl-grid -->    

        </section>
    </main>    
</div>    <!-- / mdl-layout --> 
          

<script src="js/theme-toggle.js"></script>


</body>
</html>