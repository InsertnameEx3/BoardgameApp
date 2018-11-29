<div class="container">
    <h1 class="display-4"> contact</h1>
    <form method="post" action="bericht">
        <div class="form-group">
            <label for="formOnderwerp">Onderwerp</label>
            <input class="form-control" type="text" name="onderwerp" id="formOnderwerp">
        </div>
        <div class="form-group">
            <label for="formBericht">Bericht</label>
            <textarea class="form-control" id="formBericht" rows="4" name="bericht" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Verstuur bericht</button>
    </form>
</div>