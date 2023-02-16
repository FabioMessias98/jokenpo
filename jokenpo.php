<?php require( 'includes/header.php' ); 

    if( isset( $_POST[ 'username' ] ) )
        $username = $_POST[ 'username' ]; 
?>

    <div class="l-points js-point">

        <p data-value="play 1"></p>

        <p data-value="play 2"></p>
    </div>

    <div class="l-notification js-notification"></div>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-6 mb-5 mb-lg-0">

                        <h3 class="text-center text-white mb-4">
                            <?php echo $username ? $username : 'Play 1'; ?>
                        </h3>

                        <div class="row">

                            <div class="col-4">

                                <div class="c-box-image js-item js-all-items" data-value="papel">
                                    <img
                                    class="img-fluid w-100"
                                    src="/assets/images/papel.png"
                                    alt="Papel">
                                </div>
                            </div>

                            <div class="col-4">

                                <div class="c-box-image js-item js-all-items" data-value="tesoura">
                                    <img
                                    class="img-fluid w-100"
                                    src="/assets/images/tesoura.png"
                                    alt="Tesoura">
                                </div>
                            </div>

                            <div class="col-4">
                                
                                <div class="c-box-image js-item js-all-items" data-value="pedra">
                                    <img
                                    class="img-fluid w-100"
                                    src="/assets/images/pedra.png"
                                    alt="Pedra">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">

                        <h3 class="text-center text-uppercase text-white mb-4">
                            Computador
                        </h3>

                        <div class="row">

                            <div class="col-4">

                                <div class="c-box-image js-play2-item js-all-items" data-player="play2" data-value="papel">
                                    <img
                                    class="img-fluid w-100"
                                    src="/assets/images/papel.png"
                                    alt="Papel">
                                </div>
                            </div>

                            <div class="col-4">

                                <div class="c-box-image js-play2-item js-all-items" data-player="play2" data-value="tesoura">
                                    <img
                                    class="img-fluid w-100"
                                    src="/assets/images/tesoura.png"
                                    alt="Tesoura">
                                </div>
                            </div>

                            <div class="col-4">
                                
                                <div class="c-box-image js-play2-item js-all-items" data-player="play2" data-value="pedra">
                                    <img
                                    class="img-fluid w-100"
                                    src="/assets/images/pedra.png"
                                    alt="Pedra">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5">
                <button class="c-button-pattern js-btn-play mb-3 py-2">
                    Jogar
                </button>

                <button class="c-button-pattern js-btn-disable py-2">
                    Jogar de novo
                </button>
            </div>
        </div>
    </div>
<?php require( 'includes/footer.php' ); ?>