<?php
    $title = "Edit Profile";
    include('./common.php');
?>

<div class="container-fluid">

    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form class="form-horizontal">
                        <fieldset>
                        <legend>Edit Profile</legend>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Account Type</label>
                            <div class="controls">
                            <p class="help-block">Administrator</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Username</label>
                            <div class="controls">
                            <p class="help-block">epetitbo</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="select01">Enabled/Disabled Account</label>
                            <div class="controls">
                            <select id="select01" class="chzn-select">
                                <option>Enabled</option>
                                <option>Disabled</option>
                            </select>
                            </div>
                        </div>
                        <br>
                        <legend>Change Password</legend>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Old Password</label>
                            <div class="controls">
                            <input type="text" class="span3">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">New Password</label>
                            <div class="controls">
                            <input type="text" class="span3">
                            </div>
                        </div>
                        <br>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
        <!-- /block -->
    </div>

</div>


<?php include('./includes/footer.php'); ?>
