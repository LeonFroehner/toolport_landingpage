<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./../styles/style.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="./../scripts/validate.js"></script>
    </head>
    <body>
    <?php
        if(isset($_GET['send'])){
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-center confirm_notification">Bestätigungsmail wurde an: <?php echo $_GET["mail"]?> gesendet</div>
                </div>
            </div>   
            <?php
        }
    ?>
        <div class="container back">
            <div class="row pb-4">
                <div class="col-sm-6">
                    <img src="./../assets/tend_main.jpg" class="w-100 zoom">
                    <span class="font-weight-bolder product_name">3x6m Faltpavillion PROFESSIONAL</span>
                    <span class="font-weight-bolder price">799,99€</span>
                </div>
                <div class="col-sm-6">
                    <form action="./../lib/mailer.php" method="GET">
                        <div class="wrapper_form">
                            <div class="form-group col-sm-12 ">
                                <input type="email" name="mail" class="validate form-control" placeholder="*E-mail">
                            </div>
                            <div class="form-group col-sm-12">
                                <input type="name" name="name" class="validate form-control" placeholder="*Name">
                            </div>
                            <div class="form-group col-sm-12">
                                <input type="name" name="phone" class="form-control" placeholder="Telefonnummer(optional)">
                            </div>
                            <div class="col-sm-12 d-flex flex-row form-group">
                                <select name="color" class="validate form-control">
                                    <option selected disabled>*Farbe</option>
                                    <option value="rot">rot</option>
                                    <option value="gelb">gelb</option>
                                    <option value="grün">grün</option>
                                </select>
                            </div>
                            <div class="col-sm-12 d-flex flex-row form-group">
                                <select name="shipping" class="validate form-control">
                                    <option selected disabled>*Versandart</option>
                                    <option value="Standardversand">Standardversand</option>
                                    <option value="Abholung">Abholung</option>
                                </select>
                            </div>
                            <div class="wrapper_checkboxes">
                                <div class="col-sm-12 form-check">
                                    <input type="checkbox" id="check_agb" class="form-check-input">
                                    <label class="">AGB*</label>
                                </div>
                                <div class="col-sm-12 form-check">
                                    <input type="checkbox" id="check_data" class="form-check-input">
                                    <label class="">Datenschutz*</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <input type="button" value="Bestellen" class="col-sm-12 btn btn_self" id="submit_button"  onmouseover="validate()">
                                <label>Bitte alle Pflichtfelder(*) ausfüllen</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-sm-4 pb-2">
                    <img src="./../assets/build.jpg" alt="" class="w-100 zoom">
                </div>
                <div class="col-sm-4 pb-2">
                    <img src="./../assets/transport.jpg" alt="" class="w-100 zoom">
                </div>
                <div class="col-sm-4 pb-2">
                    <img src="./../assets/measurments.jpg" alt="" class="w-100 zoom">
                </div>
            </div>
            <div class="row pb-4 wrapper_advantages">
                    <div class="col-sm-4 d-flex flex-row pb-2">
                        <div class="col-sm-4">
                            <img src="./../assets/build_icon.png" alt="" class="w-100">
                        </div>
                        <div class="col-sm-8">
                            <h2>Aufbau</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list_elements">schnell</li>
                                <li class="list-group-item list_elements">ohne Werkzeug</li>
                                <li class="list-group-item list_elements">1-2 Personen</li>
                                <li class="list-group-item list_elements">selbsterklärend</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex flex-row pb-2">
                        <div class="col-sm-4">
                            <img src="./../assets/transport_icon.png" alt="" class="w-100">
                        </div>
                        <div class="col-sm-8">
                            <h2>Transport</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list_elements">mitgelieferte Transporttasche</li>
                                <li class="list-group-item list_elements">Tragegriffe u. Rollen</li>
                                <li class="list-group-item list_elements">hochwertiges Oxford Material</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex flex-row pb-2">
                        <div class="col-sm-4">
                            <img src="./../assets/warranty_icon.png" alt="" class="w-100">
                        </div>
                        <div class="col-sm-8">
                            <h2>Service</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list_elements">kostenlose Beratung</li>
                                <li class="list-group-item list_elements">Selbstabholung möglich</li>
                                <li class="list-group-item list_elements">schneller Versand</li>
                            </ul>
                        </div>
                    </div>
                
            </div>
        </div>
    </body>
</html>