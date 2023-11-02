

<script src="hangman.js"></script>
<script>
    hangman(<?php echo $_SESSION["lives"] ?>);
</script>


<script src="jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
    $(function() {
        $("[data-toggle='tooltip']").tooltip()
    })
</script>
<script>
    $(".alphabetButton").click(function(){
        var id = $(this).attr("id");
        // alert(id);
        $.ajax({
            method: "POST",
            url: "functions.php",
            data: {
                guess: id
            }
        })
        .done(function(data){
            // alert(data);
            location.reload();
        });
    });
</script>
</body>

</html>