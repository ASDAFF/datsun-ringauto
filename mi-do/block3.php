<!-- FEATURES BEGIN -->
<section id="innovations1">
    <div class="container">
        <div class="title">
            <h2>DATSUN MI-DO В КРЕДИТ</h2>
            <p>Интересуетесь покупкой автомобиля Датсун Ми До в кредит?</br>
                Воспользуйтесь специальной программой Datsun Finance, одним из главных преимуществ которой является</br>
                <strong>КАСКО от 3,5%</strong>.</p>
        </div>

        <div class="wow bounceInUp">
            <ul class="bxslider-credit">
                <li><img src="/mi-do/images/kr_08.jpg" alt=""></li>
                <li><img src="/mi-do/images/Кредит.jpg" alt=""></li>
            </ul>
        </div>
    </div>
    <div class="container">


        <?$APPLICATION->IncludeComponent(
            "nbrains:main.feedback",
            "model-form-vertical",
            array(
                "EMAIL_TO" => "",
                "EVENT_MESSAGE_ID" => array(
                    0 => "8",
                ),
                "IBLOCK_ID" => "17",
                "IBLOCK_TYPE" => "feedback",
                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                "PROPERTY_CODE" => array(
                    0 => "FIO",
                    1 => "PHONE",
                    2 => "RULE",
                ),
                "USE_CAPTCHA" => "N",
                "COMPONENT_TEMPLATE" => "model-form-vertical"
            ),
            false
        );?>

        <!-- FORM  END-->
    </div>
</section>
<!-- FEATURES END -->