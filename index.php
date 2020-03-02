<?php
include "header.php";
?>
    <div class="myForm mt-5">
        <form class="form-group" action="" method="post">
            <label class="form-check-label mb-3" for="myCode">Code: </label>
            <textarea class="codeArea form-control shadow-sm" name="code" id="myCode" cols="30" rows="10">
            </textarea>
            <button type="submit" class="mt-4 btn btn-primary float-right">Submit Code</button>
        </form>
    </div>
<?php
include "footer.php";
?>