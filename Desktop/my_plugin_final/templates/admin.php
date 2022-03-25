<?php

$clientID = get_option('id_marchand');;
$clientSecret = get_option('code_marchand');

if ($_POST['updated'] === 'true') {
    handle_form();
}

function handle_form()
{
    if (!isset($_POST['awesome_form']) || !wp_verify_nonce($_POST['awesome_form'], 'awesome_update')) {
?>
        <div class="error">
            <p>Sorry, your nonce was not correct. Please try again.</p>
        </div>
        <?php
        exit;
    } else {

        $marchandId = sanitize_text_field($_POST['marchandId']);
        $marchandCode = sanitize_text_field($_POST['marchandCode']);

        $ch = curl_init("https://engin.effyispayment.com/ecom-sandbox-service/oauth/token?client_id=" . $marchandId . "&client_secret=" . $marchandCode . "&grant_type=client_credentials");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        $response = curl_exec($ch);
        $decodedJS = json_decode($response, true);

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
        ?>
            <div class="error">
                <p>Vos informations sont incorrectes.</p>
            </div>
        <?php
        } else {
            update_option('id_marchand', $marchandId);
            update_option('code_marchand', $marchandCode);
        ?>
            <div class="updated">
                <p>Vos informations ont bien été enregistrées.</p>
            </div>
<?php
        }

        curl_close($ch);
    }
}
?>

<script src="http://localhost/wordpress/wp-content/plugins/my_plugin_final/templates/adminScript.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://localhost/wordpress/wp-content/plugins/my_plugin_final/templates/admin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<div class="wrap">
    <h1 style="margin-bottom: 10px;">EffyisPay Plugin</h1>

    <?php
    // if (isset($_GET['settings-updated'])) {
    //     add_settings_error('effyispay_options_group', 'message', __('Vos informations ont bien été enregistrées.', 'effyispay'), 'updated');
    // }
    // settings_errors('effyispay_options_group'); 
    ?>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-1">Paramètres</a></li>
        <li><a href="#tab-2">Mise à jour</a></li>
        <li><a href="#tab-3">À propos</a></li>
    </ul>

    <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
            <h3 style="font-size: 1.2em">Acceptez EffyisPay, payez en toute sécurité</h3>
            <div class="effyispay-logo-settings">
                <img src="http://localhost/wordpress/wp-content/plugins/my_plugin/assets/images/logo.svg" alt="EffyisPay logo">
            </div>
            <p style="margin-top: 24px;">Afin de vérifier votre compte EffyisPay et activer le plugin, veuillez saisir vos informations !</p>

            <form method="POST">
                <input type="hidden" name="updated" value="true" />
                <?php wp_nonce_field('awesome_update', 'awesome_form'); ?>
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th><label for="marchandId">ID marchand</label></th>
                            <td><input required name="marchandId" id="marchandId" type="text" value="<?php echo get_option('id_marchand'); ?>" class="regular-text" placeholder="ID marchand" /></td>
                        </tr>
                        <tr>
                            <th><label for="marchandCode">Code marchand</label></th>
                            <td><input required name="marchandCode" id="marchandCode" type="text" value="<?php echo get_option('code_marchand'); ?>" class="regular-text" placeholder="Code marchand" /></td>
                        </tr>

                    </tbody>
                </table>
                <div style="margin-top: 15px">
                    <input type="checkbox" disabled="" checked="">
                    Activer EffyisPay avec protection contre la fraude
                </div>
                <div style="margin-top: 15px">
                    <input id="check" name="checkbox" type="checkbox">
                    Accepter tous nos crédits majeurs
                </div>
                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary" value="Enregistrer">
                </p>
            </form>


            <script>
                $('#check').change(function() {
                    $('#submit').prop("disabled", !this.checked);
                }).change()
            </script>

            <!-- <div style="margin-top: 10px">
                <label>
                    <input type="checkbox">
                    Acceptez tous nos crédits majeurs
                </label>
            </div> -->

            <!-- <button class="button button-primary" style="margin-top: 20px" onclick="open_onboarding_page();">Activer EffyisPay</button>
            <button class="button button-secondary" style="margin-top: 20px" onclick="open_sandbox_page();">Test payments with EffyisPay sandbox</button> -->


            <!-- <form method="POST" action="options.php">
                <?php
                // settings_fields('effyispay_options_group');
                // do_settings_sections('effyispay_plugin');
                ?>
                <div style="margin-top: 15px">
                    <input type="checkbox" disabled="" checked="">
                    Activer EffyisPay avec protection contre la fraude
                </div>
                <div style="margin-top: 15px">
                    <input id="check" name="checkbox" type="checkbox">
                    Accepter tous nos crédits majeurs
                </div>
                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary" value="Enregistrer">
                </p>
            </form> -->

        </div>

        <div id="tab-2" class="tab-pane">
            <h3 style="font-size: 1.2em;">Il n'existe aucune mise à jour pour l'instant !</h3>
        </div>

        <div id="tab-3" class="tab-pane">
            <h3 style="font-size: 1.2em;">À propos</h3>
            <p style="margin-bottom: -10px;">En choisissant EffyisPay comme moyen de paiement, vous offrez à vos clients la possibilité de payer par virement bancaire.</p>
            <p style="margin-bottom: -10px;">Notre application porte cette expérience à un niveau supérieur : en quelques clics seulement, les paiements sécurisés</p>
            <p>de vos clients seront effectués en un clin d'œil.</p>
        </div>
    </div>

</div>