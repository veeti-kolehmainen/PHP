<div class="text-center">
    <h4>Arvaa sekoitettu sana: </h4>
    <h2><?php echo $sekoitettu_sana; ?></h2>

    <form method="post">
        <input type="hidden" name="arvattava_sana" value="<?php echo $arvattava_sana; ?>">
        <input class="form-control guessInput" type="text" name="arvaus" />
        <input type="submit" value="Tarkista" class="btn btn-primary guessButton"/>
    </form>
</div>