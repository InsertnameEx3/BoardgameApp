<div class="container">


    <br>

    <h4>Leaderboard</h4>
    <hr>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Leaderboard spelers</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Speler</th>
                    <th scope="col">Wins</th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach ($spelers as $items) {
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

    <br>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Leaderboard spellen</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Spel</th>
                    <th scope="col">Keren gespeeld</th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach ($spellen as $items) {
                    foreach ($items as $item => $value) {


                        if ($item == 'name') {
                            echo "<tr><td></td><td>" . $value . "</td> <td>$items->played</td></tr> ";

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
</div>


<style>
    tbody {
        counter-reset: rowNumber;
    }

    tbody tr {
        counter-increment: rowNumber;
    }

    tbody tr td:first-child::before {
        content: counter(rowNumber);
        min-width: 1em;
        margin-right: 0.5em;
    }
</style>