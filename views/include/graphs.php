<article class="d-flex justify-content-between gap-4 mt-5 animate__animated animate__fadeIn">
    <div class="card w-100">
        <div class="card-body">
            <h5 class="card-title">Total Income this month:</h5>
            <h1 class="card-text">
                <?php
                $Tincome = floatval($Tincome['SUM(total_amount)']);
                if ($Tincome > 0) {
                    echo "<span class='text-success'>$ $Tincome <i class='fas fa-arrow-up'></i></span> ";
                } else {
                    echo "<span class='text-danger'>$ $Tincome <i class='fas fa-arrow-down'></i></span>";
                } ?>
            </h1>
        </div>
    </div>

    <div class="card w-100">
        <div class="card-body">
            <h5 class="card-title">Total Sales this month:</h5>
            <h1 class="card-text"><?= $Tsales['COUNT(total_amount)'] ?></h1>
        </div>
    </div>



    <div class="card w-100">
        <div class="card-body">
            <h5 class="card-title">New clients sign-ups:</h5>
            <h1 class="card-text"><?= $TnewClients['COUNT(id)'] ?></h1>
        </div>
    </div>
</article>

<article>
    <canvas id="sales" style="transform: scale(0.7)"></canvas>

</article>



<script>
    const ctx = document.getElementById('sales');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Oct', 'Sep', 'Nov', 'Dec'],
            datasets: 
            [{
                label: '# of Traffic',
                data: <?php echo json_encode($arrayTraffic); ?>,
                borderWidth: 3,
                borderColor: 'blue',
            }, {
                type: 'line',
                label: '# of Sales',
                data: <?php echo json_encode($arraySales); ?>,
                borderWidth: 3,
                borderColor: 'green',
            }, 
            ]

        }

    });
</script>