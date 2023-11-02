<?php include_once(__DIR__ . "/view/include/header.php"); ?>

<div class="row mt-3 justify-content-center">
    <div class="col-3">
        <div class="card text-center">
            <img class="card-image-top mx-auto" src="<?= URL_BASE ?>/img/card_alunos.png" style="max-width: 200px; height: auto;" />
            <div class="card-body">
                <h5 class="card-title">Alunos</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="<?= LISTAGEM_ALUNOS ?>" class="card-link">
                        Listagem de Alunos</a>
                </li>
            </ul>
        </div>
    </div>
</div>


<?php include_once(__DIR__ . "/view/include/footer.php"); ?>