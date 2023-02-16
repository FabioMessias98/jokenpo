
<?php require( 'includes/header.php' ); ?>
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-8">

                <form 
                method="POST" 
                action="jokenpo.php">

                    <div class="row">

                        <div class="col-12 d-flex flex-column mb-3">
                            <label 
                            class="font-weight-bold text-center text-white"
                            for="username">
                                Nome:
                            </label>

                            <input 
                            class="c-input-field py-2 px-3"
                            type="text"
                            name="username"
                            id="username">
                        </div>

                        <div class="col-12">
                            <button class="c-button-pattern py-2">
                                jogar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require( 'includes/footer.php' ); ?>