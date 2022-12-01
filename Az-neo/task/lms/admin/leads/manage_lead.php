<style>
.option{
    display: inline-block; 
 }
</style>

<?php
if(isset($_GET['id'])){
    $qry = $conn->query("SELECT * FROM `lead_list` where id = '{$_GET['id']}'");
    if($qry->num_rows > 0){
        $res = $qry->fetch_array();
        foreach($res as $k => $v){
            if(!is_numeric($k))
            $$k = $v;
        }
    }
    if(isset($id)){
    $client_qry = $conn->query("SELECT * FROM `client_list` where lead_id = '{$id}' ");
    if($client_qry->num_rows > 0){
        $res = $client_qry->fetch_array();
        unset($res['id']);
        unset($res['date_created']);
        unset($res['date_updated']);
        foreach($res as $k => $v){
            if(!is_numeric($k))
            $$k = $v;
        }
    }
    }
}

?>
<div class="content py-3">
    <div class="card card-outline card-navy shadow rounded-0">
        <div class="card-header">
            <div class="card-title">
                <h5 class="card-title"><?= !isset($id) ? "Add New Lead" : "Update Lead's Information - ".$code ?></h5>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <form action="" id="lead-form">
                    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <fieldset>
                                <legend class="text-muted h4">Lead Information</legend>
                                <div class="callout rounded-0 shadow">
                                    <div class="form-group">
                                        <label for="firstname" class="control-label">Customer Name</label>
                                        <input type="text" name="firstname" id="firstname" autofocus class="form-control form-control-sm form-control-border" value ="<?php echo isset($firstname) ? $firstname : '' ?>" required>
                                    </div> 
                                    <div class="form-group">
                                        <label for="organization" class="control-label">Organization</label>
                                        <input type="text" name="organization" id="organization" class="form-control form-control-sm form-control-border" value ="<?php echo isset($organization) ? $organization : '' ?>" required>
                                    </div>                                                     
                                    <div class="form-group">
                                        <label for="email" class="control-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control form-control-sm form-control-border" value ="<?php echo isset($email) ? $email : '' ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact" class="control-label">Mobile</label>
                                        <input type="text" name="contact" id="contact" class="form-control form-control-sm form-control-border" value ="<?php echo isset($contact) ? $contact : '' ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="other_info" class="control-label">Possibility</label><br>
                                        <input type="radio" name="posibility" <?php if (isset($posibility) && $posibility=="High") echo "checked";?>value="high">High
                                        <input type="radio" name="posibility" <?php if (isset($posibility) && $posibility=="Medium") echo "checked";?>value="medium"> Medium
                                        <input type="radio" name="posibility" <?php if (isset($posibility) && $posibility=="Low") echo "checked";?> value="low"> Low	
                                    </div>
                                    <div class="form-group">
                                        <label for="tag" class="control-label">Tag</label>
                                        <input type="text" name="tag" id="tag" class="form-control form-control-sm form-control-border" value ="<?php echo isset($tag) ? $tag : '' ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="schedule" class="control-label">Schedule-Activity:</label><br>
                                        <form action="/form/submit" method="post">
                                        <input type="date" name="date" value="2022-01-01" min="2021-01-01" max="2023-01-01">
                                        <input type="time" name="time" value="22:00" />                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="note" class="control-label">Note</label>
                                        <input type="text" name="note" id="note" class="form-control form-control-sm form-control-border" value ="<?php echo isset($tag) ? $tag : '' ?>" required>
                                    </div>
                                </div> 
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <fieldset>
                                <legend class="text-muted h4">Contact Person's Information</legend>
                                <div class="callout rounded-0 shadow">
                                    <div class="form-group">
                                        <label for="contact_name" class="control-label">Contact Name</label>
                                        <input type="text" name="contact_name" id="contact_name" class="form-control form-control-sm form-control-border" value ="<?php echo isset($contact_name) ? $contact_name : '' ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label">Job Position</label>
                                        <input type="text" name="job_position" id="job_position" class="form-control form-control-sm form-control-border" value ="<?php echo isset($job_position) ? $job_position : '' ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="control-label">Address</label>
                                        <textarea name="address" rows="3" id="address" class="form-control form-control-sm rounded-0" required><?php echo isset($address) ? $address : '' ?></textarea>
                                    </div>
                                    <select class="countries">          
                                        </select>
                                        <div class="option">
                                        <select class="Africa">

                                        </select>
                                        <select class="Antarctica">
                                        </select>
                                        <select class="Asia">

                                        </select>
                                        <select class="Europe">

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="control-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control form-control-sm form-control-border" value ="<?php echo isset($email) ? $email : '' ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact" class="control-label">Mobile</label>
                                        <input type="text" name="contact" id="contact" class="form-control form-control-sm form-control-border" value ="<?php echo isset($contact) ? $contact : '' ?>" required>
                                    </div>                           
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <fieldset>
                                <legend class="text-muted h4">Sales Person's Information</legend>
                                <div class="callout rounded-0 shadow">
                                    <div class="form-group">
                                        <label for="salesperson" class="control-label">Salesperson: </label>
                                        <select name="salesperson" id="salesperson" class="form-control form-control-sm form-control-border select2" >
                                            <option value="" disabled <?= !isset($assigned_to) ? 'selected' : '' ?>></option>
                                            <option value="" <?= isset($salesperson) && $user_id == null ? 'selected' : '' ?>>Unset</option>
                                            <?php 
                                            $user = $conn->query("SELECT *,CONCAT(lastname, ', ', firstname, ' ', COALESCE(middlename,'')) as fullname FROM `users` order by CONCAT(lastname, ', ', firstname, ' ', COALESCE(middlename,'')) asc ");
                                            while($row = $user->fetch_assoc()):
                                            ?>
                                            <option value="<?= $row['id'] ?>" <?= isset($salesperson) && $salesperson == $row['id'] ? 'selected' : '' ?>><?= $row['fullname'] ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact" class="control-label">Referred by: </label>
                                        <input type="text" name="contact" id="contact" class="form-control form-control-sm form-control-border" value ="<?php echo isset($contact) ? $contact : '' ?>" required>
                                    </div>                           
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-footer py-2 text-right">
                <button class="btn btn-primary btn-flat" type="submit" form="lead-form">Save Lead Information</button>
                <a class="btn btn-light border btn-flat" href="./?page=leads" form="lead-form">Cancel</a>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('.select2').select2({
            placeholder:'Please Select Here',
            width:'100%'
        })
        $('#lead-form').submit(function(e){
            e.preventDefault();
            var _this = $(this)
            if(_this[0].checkValidity() == false){
                _this[0].reportValidity();
                return false;
            }
            $('.pop-msg').remove()
            var el = $('<div>')
                el.addClass("pop-msg alert")
                el.hide()
            start_loader();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=save_lead",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
                success:function(resp){
                    if(resp.status == 'success'){
                        location.href = "./?page=leads";
                    }else if(!!resp.msg){
                        el.addClass("alert-danger")
                        el.text(resp.msg)
                        _this.prepend(el)
                    }else{
                        el.addClass("alert-danger")
                        el.text("An error occurred due to unknown reason.")
                        _this.prepend(el)
                    }
                    el.show('slow')
                    $('html,body,.modal').animate({scrollTop:0},'fast')
                    end_loader();
                }
            })
        })
    })
    $(function () {
   
        'use strict';
        
        var CountSelect = $('.countries'),
        
            myCountries = ['Africa', 'Antarctica', 'Asia', 'Europe'],
            
            Africa = ['Algeria', 'Angola', 'Benin', 'Botswana', 'Burundi'],
            
            Antarctica = ['Amundsen-Scott'],
            
            Asia = ['Bangladesh', 'Bhutan', 'Brunei', 'Cambodia', 'China', 'East Timor', 'India'],
            
            Europe = ['Albania', 'Andorra', 'Austria', 'Belarus', 'Belgium', 'Bosnia-Herzegovina', 'Bulgaria'];
            
        // Function Create Option    
        
        function CreateOption(valriable, elementToAppend) {
            
            var i;
            
            for (i = 0; i < valriable.length; i += 1) {
        
                $('<option>', {value: valriable[i], text: valriable[i], id: valriable[i]})
                    .appendTo(elementToAppend);
            }
        }
        
        
        // Create Option myCountries
        CreateOption(myCountries, $('.countries'));
        
        // Create Option Africa
        CreateOption(Africa, $('.Africa'));
        
        // Create Option Africa
        CreateOption(Antarctica, $('.Antarctica'));
        
        // Create Option Africa
        CreateOption(Asia, $('.Asia'));
        
        // Create Option Africa
        CreateOption(Europe, $('.Europe'));
        
        // Hide All Select
        $('.option select').hide();
        
        // Show First Selected
        $('.Africa').show().css('display', 'inline-block');
        
        
        
        // Show List Option City Whene user Chosse Countries
        
        CountSelect.on('change', function () {
            
            // get Id option 
            var myId = $(this).find(':selected').attr('id');
            console.log($(this).val());
            // Show Select Has class = Id And Hide Siblings
            $('.option select').filter('.' + myId).fadeIn(400).siblings('select').hide();
            
        });
   
});

</script>