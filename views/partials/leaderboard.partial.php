<div class="container">

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Leaderboard</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">

                    <td>#</td>
                    <td>Name</td>
                    <td>Wins</td>

                </thead>
                <tbody>

        <?php
        foreach ($results as $items) {
            foreach ($items as $item => $value) {


                if ($item == 'nickname') {
                    echo "<tr><td>" . $value . "</td></tr> ";

                }
            }
        }

        ?>

                </tbody>
            </table>
        </div>
        <div class="card-footer"></div>
    </div>
</div>