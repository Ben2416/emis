<!-- Page -->
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
     data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
        <div class="brand">
            <img class="brand-img" src="<?php echo base_url(); ?>assets/logo.png" alt="...">
        </div>
        <?php $attributes = array('class' => 'email', 'id' => 'myform', 'autocomplete' => 'off'); ?>
        <?php echo form_open_multipart(base_url().'client/register'); ?><!--<form method="post" action="" autocomplete="off">-->

        <div class="form-group form-material floating">
            <input type="text" class="form-control empty" id="inputFirstName" name="firstname" value="<?php echo set_value('firstname')?>" autocomplete="off">
            <label class="floating-label" for="inputFirstName">First Name</label>
            <span class="text-danger"><?php echo form_error('firstname'); ?></span>
        </div>
        <div class="form-group form-material floating">
            <input type="text" class="form-control empty" id="inputLastName" name="lastname" value="<?php echo set_value('lastname')?>" autocomplete="off">
            <label class="floating-label" for="inputLastName">Last Name</label>
            <span class="text-danger"><?php echo form_error('lastname'); ?></span>
        </div>
        <div class="form-group form-material floating">
            <input type="email" class="form-control empty" id="inputEmail" name="email" value="<?php echo set_value('email')?>" autocomplete="off">
            <label class="floating-label" for="inputEmail">Email</label>
            <span class="text-danger"><?php echo form_error('email'); ?></span>
        </div>
        <div class="row">
            <div class="form-group form-material floating col-md-6">
                <input type="text" class="form-control empty" id="inputPhone" name="phone" value="<?php echo set_value('phone');?>" autocomplete="off">
                <label class="floating-label" for="inputPhone" style="margin-left: 15px;">Phone Number</label>
                <span class="text-danger"><?php echo form_error('phone'); ?></span>
            </div>
            <div class="form-group form-material floating col-md-6" style="margin-top: 20px;">
                <select class="form-control" name="sex">
                    <option value="">&nbsp;</option>
                    <option value="Male" <?php echo  set_select('sex', 'Male'); ?>>Male</option>
                    <option value="Female" <?php echo  set_select('sex', 'Female'); ?>>Female</option>
                </select>
                <label class="floating-label" for="inputSex" style="margin-left: 15px;">Sex</label>
                <span class="text-danger"><?php echo form_error('sex'); ?></span>
            </div>
        </div>
        <div class="form-group form-material floating">
            <textarea class="form-control empty" id="inputAddress" rows="3" name="address"><?php echo set_value('address');?></textarea>
            <label class="floating-label" for="inputAddress">Contact Address</label>
        </div>
        <div class="form-group">
            <label>Upload Passport</label>

        </div>
        <div class="form-group form-material floating">
            <input type="hidden" id="passport" name="passport"/>
            <!--cam start-->
            <div class="row">
                <div id="my_camera" class="col-md-3"></div>
                <div id="preview" class="col-md-3" >
                    <img id="photo" src="<?=base_url()?>assets/passports/rocgeorgy.png" width="200" height="200"/>
                </div>
                <script type="text/javascript" src="<?=base_url()?>assets/js/webcam/webcam.js"></script>
                <script language="Javascript">
                    //function startCam(){//alert('start');
                        Webcam.set({
                            width: 320,
                            height: 240,
                            crop_width: 200,
                            crop_height: 200,
                            image_format: 'jpeg',
                            jpeg_quality:90,
                            flip_horiz: true
                        });
                        Webcam.attach('#my_camera');
						Webcam.on( 'error', function(err) {
                           alert('Webcam encountered an error.\nTry using another web browser.');//('error '+err);
                        } );
                    //}
                </script>

            </div>
            <div class="row"><br>
                <div id="pre_take_buttons">
                    <input type=button value="Take Snapshot" onClick="preview_snapshot()" style="background:#6363b7; border:none;">
                </div>
                <div id="post_take_buttons" style="display:none">
                    <input type=button value="&lt; Take Snother" onClick="cancel_preview()" style="background:#6363b7; border:none;">
                    <input type=button value="Save Photo &gt;" onClick="save_photo()" style="font-weight:bold; background:#6363b7; border:none;" data-dismiss="modal" aria-label="Close">
                </div>
            </div>
            <!--cam end-->
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
        <p>Back to <a href="login">Login</a></p>
        <script language="Javascript">
            var shutter = new Audio();
            shutter.autoplay = false;
            shutter.src = navigator.userAgent.match(/Firefox/)?'<?=base_url()?>assets/js/webcam/shutter.ogg' : '<?=base_url()?>assets/js/webcam/shutter.mp3';

            function preview_snapshot(){
                try{ shutter.currentTime = 0;}catch(e){;}
                shutter.play();
                Webcam.freeze();

                document.getElementById('pre_take_buttons').style.display = 'none';
                document.getElementById('post_take_buttons').style.display = '';
            }

            function cancel_preview(){
                Webcam.unfreeze();
                document.getElementById('pre_take_buttons').style.display = '';
                document.getElementById('post_take_buttons').style.display = 'none';
            }

            function save_photo(){
                Webcam.snap(function(data_uri){
                    document.getElementById('preview').innerHTML =
                        '<img src="'+data_uri+'" width="205" height="205"/>';
                    Webcam.reset();//shutdown camera stop capturing
                    //change file upload url
                    var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
                    document.getElementById('passport').value = raw_image_data;
                });
            }
        </script>
        <footer class="page-copyright page-copyright-inverse">
            <p>WEBSITE BY o3interactive Technologies</p>
            <p>© 2018. All RIGHT RESERVED.</p>

        </footer>
    </div>
</div>
<!-- End Page -->
