<?php
@ini_set('display_errors', 0);
global $wpdb;

if(!empty($_POST['fields'])) {

    $data = array('words'  => isset($_POST['fields']['words'])? $_POST['fields']['words']:'');
	$wpdb->update('viavi_dummy_content', $data, array('id' => 1));
}

$result = $wpdb->get_results($wpdb->prepare("SELECT * FROM viavi_dummy_content WHERE id = 1"));
$fields   = (!empty($_POST['fields'])) ? $_POST['fields'] : get_object_vars($result[0]);
?>
<div style="width:50%;float:left; background:#FFF;padding:1%;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; margin-top:30px;">
<h1 style="color:#512828;">Dummy Content Setting</h1>
<p>For very small dummy content use <span style="color:#900;"><strong>[viavi_dummy_content-c100]</strong></span> </p>
<br/>
<p>For small dummy content use <span style="color:#900;"><strong>[viavi_dummy_content-c200]</strong></span> </p>
<br/>
<p>For normal dummy content use <span style="color:#900;"><strong>[viavi_dummy_content-c400]</strong></span></p>
<br/>
<p>For large dummy content use <span style="color:#900;"><strong>[viavi_dummy_content-c800]</strong></span></p>
<br/>
<p>For very large dummy content use <span style="color:#900;"><strong>[viavi_dummy_content-c1600]</strong></span> </p>
<br/><br/>

<b>If you want dummy content of fixed number of characters than you can write the number of characters in the below textbox and use the <span style="color:#900;">[viavi_dummy_content]</span> shortcode without quotes.</b>
<?php if(!empty($_POST['fields'])) : ?>
<p style="color:#286FFF; background-color:#FFF; font-size:20px;">Saved successfully. </p>
<?php endif; ?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']?>">
        <?php wp_nonce_field('update-options'); ?>
        <table>
            <tr>
                <td>
                    <label for="fields[words]">Number of Characters:</label>
                </td>
                <td>
                    <input type="text" name="fields[words]" id='words' value="<?php echo $fileds['words']; ?>"/>
                </td>
            </tr>
        </table>

        <input type="submit" class="button-primary" name="save-fav-icon" value="<?php _e('Save Changes') ?>"/>
        <input type="hidden" name="action" value="update"/>
    </form>
</div>    

<div style="width:38%;float:right; background:#9F9;padding:1%;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; margin-top:30px;margin-right:30px;">
        		 
                <p>
                 <form method="post" action="https://www.paypal.com/cgi-bin/webscr" class="paypal-button" target="_blank" style="opacity: 1;"><input type="hidden" name="button" value="donate"><input type="hidden" name="business" value="viaviwebtech@gmail.com"><input type="hidden" name="item_name" value="Viavi Dummy Content Generator wordpress plugin"><input type="hidden" name="quantity" value=""><input type="hidden" name="amount" value=""><input type="hidden" name="currency_code" value=""><input type="hidden" name="shipping" value=""><input type="hidden" name="tax" value=""><input type="hidden" name="notify_url" value="http://viaviweb.com"><input type="hidden" name="cmd" value="_donations"><input type="hidden" name="bn" value="JavaScriptButton_donate"><input type="hidden" name="env" value="www"><input type="image" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!"></form>
                </p>
                
        </div>
