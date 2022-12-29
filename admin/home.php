<h1 style="margin-top:98px">Welcome back <b><?php echo $_SESSION['adminusername']; ?></b>!</h1>

<br>


<div class="row">
<div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                Categories
            <?php
                include 'partials/_dbconnect.php';
                $dash_category_query = "SELECT * from categories";
                $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                
                if($category_total = mysqli_num_rows($dash_category_query_run))
                {
                    echo '<h4 class="mb-0 text-center">'.$category_total.'</h4>';
                }
                else
                {
                    echo '<h4 class="mb-0 text-center">0</h4>';
                }
            ?>
                  
            </div>
              <h4 class="mb-0 text-center"></h4>
            <div class="card-footer d-flex align-items-center justify-content-between mb-3">
            </div>
        
        </div>
    
    </div>

<div class="col-xl-3 col-md-6">
        <div class="card bg-secondary text-white mb-4">
            <div class="card-body">
                FoodItem
            <?php
                include 'partials/_dbconnect.php';
                $dash_fooditem_query = "SELECT * from food";
                $dash_fooditem_query_run = mysqli_query($conn, $dash_fooditem_query);
                
                if($food_total = mysqli_num_rows($dash_fooditem_query_run))
                {
                    echo '<h4 class="mb-0 text-center">'.$food_total.'</h4>';
                }
                else
                {
                    echo '<h4 class="mb-0 text-center">0</h4>';
                }
            ?>
            </div>
              <h4 class="mb-0 text-center"></h4>
            <div class="card-footer d-flex align-items-center justify-content-between mb-3">
            </div>
        
        </div>
    
    </div>

<div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">
                Orders
            <?php
                include 'partials/_dbconnect.php';
                $dash_order_query = "SELECT * from orders";
                $dash_order_query_run = mysqli_query($conn, $dash_order_query);
                
                if($orders_total = mysqli_num_rows($dash_order_query_run))
                {
                    echo '<h4 class="mb-0 text-center">'.$orders_total.'</h4>';
                }
                else
                {
                    echo '<h4 class="mb-0 text-center">0</h4>';
                }
            ?>
            </div>
              <h4 class="mb-0 text-center"></h4>
            <div class="card-footer d-flex align-items-center justify-content-between mb-3">
            </div>
        
        </div>
    
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">
                Users
            <?php
                include 'partials/_dbconnect.php';
                $dash_users_query = "SELECT * from users";
                $dash_users_query_run = mysqli_query($conn, $dash_users_query);
                
                if($users_total = mysqli_num_rows($dash_users_query_run))
                {
                    echo '<h4 class="mb-0 text-center">'.$users_total.'</h4>';
                }
                else
                {
                    echo '<h4 class="mb-0">0</h4>';
                }
            ?>
            </div>
              <h4 class="mb-0 text-center"></h4>
            <div class="card-footer d-flex align-items-center justify-content-between mb-3">
            </div>
        
        </div>
    
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-light text-black mb-4">
            <div class="card-body">
                Messages
            <?php
                include 'partials/_dbconnect.php';
                $dash_message_query = "SELECT * from contact";
                $dash_message_query_run = mysqli_query($conn, $dash_message_query);
                
                if($message_total = mysqli_num_rows($dash_message_query_run))
                {
                    echo '<h4 class="mb-0 text-center">'.$message_total.'</h4>';
                }
                else
                {
                    echo '<h4 class="mb-0 text-center">0</h4>';
                }
            ?>
            </div>
              <h4 class="mb-0 text-center"></h4>
            <div class="card-footer d-flex align-items-center justify-content-between mb-3">
            </div>
        
        </div>
            <div class="card bg-light text-black mb-4">
            <div class="card-body">
               Total  Sales
            <?php
                include 'partials/_dbconnect.php';
                $dash_amount_query = "SELECT SUM(amount) total FROM orders";
                $dash_amount_query_run = mysqli_query($conn, $dash_amount_query);
                
                if($amount_total = mysqli_fetch_array($dash_amount_query_run))
                {
                    echo '<h4 class="mb-0 text-center">'.$amount_total['total'].'</h4>';
                }
                else
                {
                    echo '<h4 class="mb-0 text-center">0</h4>';
                }
            ?>
            </div>
              <h4 class="mb-0 text-center"></h4>
            <div class="card-footer d-flex align-items-center justify-content-between mb-3">
            </div>
</div>
    
    </div>
    
</div>

