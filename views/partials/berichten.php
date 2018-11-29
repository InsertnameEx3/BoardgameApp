<div class="container">
    <br>
    <h4>Berichten</h4>


    <table class="table table-hover">
        <thead>
        <tr>
            <th>naam</th>
            <th>onderwerp</th>
            <th>datum</th>
            <th></th>
        </tr>

        </thead>

        <tbody>
        <?php
        foreach ($berichten as $items) {

            echo "<tr><td>" . $items->naam . "</td><td>" . $items->onderwerp . "</td><td>" . $items->datum . "</td><td>
                    <form method='post' action='berichtlezen'>
                        <button class='btn btn-primary' type='submit'>
                            <i class=\"fa fa-chevron-right fa-lg\" aria-hidden=\"true\">
                                <input name='id' value='$items->id' hidden>
                            </i>
                        </button>
                    </form>
                    </td>
                    </tr>";
        }

        ?>


        </tbody>
    </table>
</div>

