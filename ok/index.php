<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ok");
?>
    <div class="header-spacer"></div>
    <style>
        .back-ok {
            position: relative;
            height: 550px;
            background: url('./images/ok_bg.png') center center no-repeat;
            background-size: cover;
            margin-top: -72px;
            margin-bottom: -26px;
        }
        .datsun_block {
            padding: 30px 30px;
            border-radius: 7px;
            background: rgba(0,0,0,0.6);
            margin-top: 115px;
            width: 450px;
            position: absolute;
            right: 3em;
            top: 0;
            overflow: hidden;
            text-align: center;
            line-height: 4em;
        }
        h1 {
            color: #fff;
            font-weight: bold;
            font-size: 3.6em;
            margin: 0;
            padding: 0;
            text-transform: uppercase;
            text-align: center;
        }
        .datsun_block span {
            font-size: 1.8em;
            color: #fff;
            display: block;
            text-transform: uppercase;
            margin-bottom: 15px;
            text-align: center;
        }
        strong {
            font-size: 1.5em;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            display: block;
            width: 390px;
            margin: 0 auto;
            text-align: center;
        }
    </style>
    <div class="back-ok">
        <div class="datsun_block">
            <h1>Спасибо!</h1>
            <span>Ваша заявка принята</span>
            <img src="./images/ok_ok.png"  />
            <strong>Будь первым с Datsun!</strong>
        </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>