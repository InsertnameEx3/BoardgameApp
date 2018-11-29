<div class="container-fluid">

    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center text-white mx-auto"
                 style="width:40%; padding-top: 2em; padding-bottom: 2em; background: rgba(0, 0, 0, 0.9);">
                <h1 class="display-3">Welkom</h1>
                <p class="lead">ADSD 2018 2019</p>
            </div>
        </div>
    </div>


    <div class="container">


        <?php
        if ($_SESSION['functie'] == 'admin') {
            echo "<h4>Users</h4>

            <table class=\"table table-hover\"><tbody>";
            foreach ($results as $items) {
                foreach ($items as $item => $value) {
                    if ($item == 'fname') {
                        echo "<tr><td>" . $value . "</td><td>" . $items->lname . "</td><td>" . $items->email .
                            "</td><td><form method=\"post\" action=\"deleteuser\" class=\"form-inline\">
                                    <button type=\"submit\" class=\"btn btn-danger\" aria-label=\"Delete\" name=\"id\" value=\"$items->id\">
                                        <i class=\"fa fa-trash-o fa-fw\" aria-hidden=\"true\"></i>
                                    </button>
                                 </form></td>
                                 
                                <td><form method=\"post\" action=\"finduser\" class=\"form-inline\">
                                <button type=\"submit\" class=\"btn btn-primary\" aria-label=\"Alter\" name=\"id\" value=\"$items->id\">
                                        <i class=\"fa fa-edit fa-fw\" aria-hidden=\"true\"></i>
                                    </button>
                                </form>
                                </td></tr> ";

                    }
                }
            }
            echo "</tbody>
            </table>
        </div>";
        } else {
            echo "
                        <div class='card-columns'>
                            <div class='card'>
                                <div class='card-body text-left'>
                                    <h4 class=\"card-title\"><span class='fa fa-gamepad'></span> Spelen</h4>
                                    <p>Je kan vele spellen spelen, alleen, en met je vrienden. Er komen regelmatig nieuwe spellen bij dus er zal nooit een tekort zijn. Bekijk de beschikbare spellen<a href='games'> hier </a>of speel direct een spel bij <a href='battles'>battles.</a></p>
                                </div>
                            </div>
                            <div class='card'>
                                <div class='card-body text-left'>
                                    <h4 class=\"card-title\"><span class='fa fa-trophy'></span> Leaderboard</h4>
                                    <p>Je kan altijd in het <a href='leaderboard'>Leaderboard</a> kijken om te zien wie het vaakst heeft gewonnen. Naarmate we ons uitbreiden zullen er extra leaderboards komen om te kijken welke speler het meeste heeft gewonnen of om te kijken welke spellen er het meest worden gespeeld</p>
                                </div>
                            </div>
                            <div class='card'>
                                <div class='card-body text-left'>
                                    <h4 class=\"card-title\"><span class='fa fa-lightbulb'></span> Suggereer spellen <span class=\"badge badge-info\">Nieuw!</span></h4>
                                    <p>Naast dat we zelf nieuwe spellen zoeken en toevoegen kunnen gebruikers ook hun eigen spellen suggereren, dit kan heel gemakkelijk bij <a href='games'>Games</a>. Deze spellen worden zo snel mogelijk toegevoegd.</a></p>
                                </div>
                            </div>
                            
                            <div class='card'>
                                <div class='card-body text-left'> 	
                                    <h4 class=\"card-title\"><span class='fa fa-toggle-on'></span> Verander je status</h4>
                                    <p>Zou je graag niet gestoord willen worden om spellen te spelen, verander je status naar offline.</p>
                                </div>
                            </div>
                            
                            <div class='card'>
                                <div class='card-body text-left'> 	
                                    <h4 class=\"card-title\"><span class='fa fa-envelope'></span> Contact</h4>
                                    <p>Wil je een vraag stellen of gewoon contact zoeken, vul ons contact formulier in bij de <a href='contact'>contact</a> pagina.</p>
                                </div>
                            </div>
                            
                            <div class='card'>
                                <div class='card-body text-left'> 	
                                    <h4 class=\"card-title\"><span class='fa fa-user'></span> Account</h4>
                                    <p>Als je je gegevens wilt veranderen of bekijken kan je altijd naar bekijk account gaan die te vinden is onder je gebruikersnaam.<br><br><span> <img src='public/images/account.JPG' class='mx-auto d-block'> <br>Of bekijk je account <a href='account'>hier</a>.</p>
                                </div>
                            </div>
                            
                            
                        </div>
                                
                    
                    ";
        }
        ?>

    </div><!-- End div - user -->


</div><!-- End div - class Player-->
</div>






