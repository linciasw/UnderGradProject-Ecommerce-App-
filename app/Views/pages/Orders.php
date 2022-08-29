
<style>
 
	.container {
        margin-top: 130px;
    } 

</style>






<div class="container">
    <h2>Hover Row</h2>
    <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Order #</th>
                <th>Date</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>


        <?php foreach ($orders as $data) : ?>
            <tr>
                <td><?php echo $data["order_id"]; ?></td>
                <td><?php echo $data["order_created"]; ?></td>
                <td><?php echo $data["total"]; ?></td>
                <td><a href="orders/details/<?php echo $data["order_id"]; ?>"><i class="fa fa-eye"></i> Details</a></td>

            </tr>
        <?php endforeach; ?>


            </tbody>
        </table>
</div>