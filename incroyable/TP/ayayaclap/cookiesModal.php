<?php if(!isset($_SESSION['cookies']) || empty($_SESSION['cookies'])) { ?>
<div class="modal fade" id="cookieModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="notice d-flex justify-content-between align-items-center">
                    <div class="cookie-text">Ce site utilise des cookies pour vous proposer une meilleure expérience utilisateur.</div>
                    <div class="buttons d-flex flex-column flex-lg-row">
                        <button name="cookies" value="true" class="btn btn-success btn-sm" data-dismiss="modal">J'accepte</button>
                        <button name="cookies" value="false" class="btn btn-secondary btn-sm" data-dismiss="modal">Fuck cookies</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
<?php } ?>


