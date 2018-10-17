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
                    echo "<tr><td></td><td>" . $value . "</td> <td>$items->wins</td></tr> ";

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

<style>
    table {
        counter-reset: rowNumber;
    }

    table tr {
        counter-increment: rowNumber;
    }

    table tr td:first-child::before {
        content: counter(rowNumber);
        min-width: 1em;
        margin-right: 0.5em;
    }
</style>