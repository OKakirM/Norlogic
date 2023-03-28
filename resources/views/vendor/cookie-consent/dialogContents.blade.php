<div class="js-cookie-consent position-fixed bottom-0 start-50 translate-middle-x w-75 mb-3 z-3" id="cookies-popup">
    <div class="py-3 px-4 rounded-2 shadow bg-w1">
        <div class="d-lg-flex justify-content-center align-items-center gap-3">
            <div class="">
                <p class="roboto color-cinzaNor text-lg-start text-center m-0 cookie-consent__message"><?php print_r($data["Cookies"]["texto"]);?>
            </div>
            </p>
            <div class="col-auto d-flex justify-content-center align-items-center m-lg-0 m-auto gap-3">
                <a class="js-cookie-consent-desagree text-decoration-none roboto rounded-1 color-redNor" style="font-size: .8rem; cursor:pointer"><?php print_r($data["Cookies"]["negar"]);?></a>
                <button class="js-cookie-consent-agree bg-redNor color-w1 px-4 py-2 roboto fw-bold rounded-1 border-0"><?php print_r($data["Cookies"]["aceitar"]);?></button>
            </div>
        </div>
    </div>
</div>
