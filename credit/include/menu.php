<?
$menu = array(
    "datsun-finance" => array("name" => "Datsun Finance", "href" => "credit"),
    "datsun-ew" => array("name" => "Программа DATSUN 3+*", "href" => "credit/datsun-ew"),
    "datsun-insurance" => array("name" => "Datsun страхование, КАСКО", "href" => "credit/datsun-insurance"),
    "buy-back_datsun" => array("name" => "Программа «Вперёд»", "href" => "credit/buy-back_datsun")
);
?>
<div class="c_046 is-sticky-nav">
    <div class="docked-nav-wrapper">
        <div class="docked-nav-outer nav-fixed">
            <div class="grid-row">
                <div class="col-12">
                    <div class="docked-nav-container" role="navigation">
                        <div class="docked-nav-root">

                            <div class="docked-nav-cont">
                                <div class="inner show">
                                    <nav aria-label="main navigation">
                                        <ul class="nav-primary">

                                            <? foreach($menu as $id => $m): ?>
                                            <li class="<?if($arParams["ACTIVE"] == $id):?>active has-divider<?endif;?>">
                                                <a href="/<?=$m['href']?>/">
                                                    <span><?=$m['name']?></span>
                                                </a>
                                            </li>
                                            <? endforeach; ?>

                                        </ul>
                                        <div class="sub-nav">
                                            <button type="button" class="btn-more">
                                                <span></span>
                                            </button>
                                            <ul class="nav-primary"></ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <span class="vehicle-name">Datsun Finance</span>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>