<?php


$editUserInfo = userDerails();
?>

<div class="edit_profile_main mt-5 mb-5 shadow p-4">
    <h3>Can bee edit your profile!</h3>
    <hr>
    <form class="form-group mt-3" action="" method="post">
        <div class="row">
            <div class="col-6">
                <label for="first-name">First name</label>
                <input required class="form-control" type="text" id="first-name"
                       value="<?php echo $editUserInfo['firstname']; ?>">
            </div>
            <div class="col-6">
                <label for="last-name">Last name </label>
                <input required class="form-control" type="text" id="last-name" value="<?php echo $editUserInfo['lastname']; ?>">
            </div>
            <div class="col-6 mt-4">
                <label for="email">Email</label>
                <input required class="form-control" type="email" id="email" value="<?php echo $editUserInfo['email']; ?>">
            </div>
            <div class="col-6 mt-4">
                <label for="birthday">Birthday </label><br>
                <input min="1900" max="2010" class="form-control d-inline-block w-25" type="number" id="birthday" value="" placeholder="year">
                <span>/</span>
                <input min="1" max="12" class="form-control d-inline-block w-25" type="number" id="birthday" value="" placeholder="month">
                <span>/</span>
                <input min="1" max="31" class="form-control d-inline-block w-25" type="number" id="birthday" value="" placeholder="day">
            </div>
            <div class="col-6 mt-4">
                <?php
                $langList = explode(",", $editUserInfo['languages'])
                ?>
                <label for="languages">Languages </label>
                <select class="w-100" type="text" id="languages" multiple='multiple'>
                    <option value="" <?php if (in_array("python", $langList)) echo "selected" ?>>python</option>
                    <option value="" <?php if (in_array("pascal", $langList)) echo "selected" ?>>pascal</option>
                    <option value="" <?php if (in_array("c++", $langList)) echo "selected" ?>>C++</option>
                    <option value="" <?php if (in_array("c", $langList)) echo "selected" ?>>C</option>
                    <option value="" <?php if (in_array("java", $langList)) echo "selected" ?>>java</option>
                    <option value="" <?php if (in_array("php", $langList)) echo "selected" ?>>php</option>
                    <option value="" <?php if (in_array("c#", $langList)) echo "selected" ?>>c#</option>
                    <option value="" <?php if (in_array("perl", $langList)) echo "selected" ?>>perl</option>
                    <option value="" <?php if (in_array("ruby", $langList)) echo "selected" ?>>ruby</option>
                    <option value="" <?php if (in_array("go", $langList)) echo "selected" ?>>go</option>
                    <option value="" <?php if (in_array("R", $langList)) echo "selected" ?>>R</option>
                    <option value="" <?php if (in_array("basic", $langList)) echo "selected" ?>>basic</option>
                    <option value="" <?php if (in_array("fortran", $langList)) echo "selected" ?>>fortran</option>
                    <option value="" <?php if (in_array("sql", $langList)) echo "selected" ?>>sql</option>
                    <option value="" <?php if (in_array("dart", $langList)) echo "selected" ?>>dart</option>
                    <option value="" <?php if (in_array("assembly", $langList)) echo "selected" ?>>assembly</option>
                    <option value="" <?php if (in_array("javascript", $langList)) echo "selected" ?>>javascript</option>
                </select>
            </div>
            <div class="col-6 mt-4">
                <label>Privacy:</label><br>
                <?php
                $No = $userInfo["privacy"];
                ?>
                <label for="last-login">Last login visibility:</label>
                <span>Everyone </span><input type="checkbox" name="last-login" id="last-login"
                                             class="checkbox" <?php if ($No && 1) echo "checked"; ?>>
                <span>Friends </span><input type="checkbox" name="last-login" id="last-login"
                                            class="checkbox" <?php if ($No && 2) echo "checked"; ?>>

                <br>

                <label for="birthday">Birthday visibility:</label>
                <span>Everyone </span><input type="checkbox" name="birthday" id="birthday"
                                             class="checkbox" <?php if ($No && 1) echo "checked"; ?>>
                <span>Friends </span><input type="checkbox" name="birthday" id="birthday"
                                            class="checkbox" <?php if ($No && 2) echo "checked"; ?>>

                <br>

                <label for="photo">Photo visibility:</label>
                <span>Everyone </span><input type="checkbox" name="photo" id="photo"
                                             class="checkbox" <?php if ($No && 1) echo "checked"; ?>>
                <span>Friends </span><input type="checkbox" name="photo" id="photo"
                                            class="checkbox" <?php if ($No && 2) echo "checked"; ?>>

                <br>

                <label for="photo">Email visibility:</label>
                <span>Everyone </span><input type="checkbox" name="email" id="email"
                                             class="checkbox" <?php if ($No && 1) echo "checked"; ?>>
                <span>Friends </span><input type="checkbox" name="email" id="email"
                                            class="checkbox" <?php if ($No && 2) echo "checked"; ?>>

            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i> Save changes</button>
    </form>
</div>

