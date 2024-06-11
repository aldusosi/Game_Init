<link rel="stylesheet" href="./css/comp_css/sobre-conteudo.css">

<section class="cards-sobre-conteudo">

    <div class="container mt-3 p-3 d-flex flex-wrap justify-content-center" >

        <?php require_once 'card_beneficio.php';

            // CARD_1
            $card = new CardBeneficio('Mais de X aulas', './images/make-a-game-logo.png');
            echo $card -> showContent();

            // CARD_2
            $card = new CardBeneficio('Crie mais de X jogos', './images/make-a-game-logo.png');
            echo $card -> showContent();

            // CARD_3
            $card = new CardBeneficio('Mais de X horas', './images/make-a-game-logo.png');
            echo $card -> showContent();

            // CARD_4
            $card = new CardBeneficio('Suporte do preofessor', './images/make-a-game-logo.png');
            echo $card -> showContent();

            // CARD_5
            $card = new CardBeneficio('Acesso vitalício', './images/make-a-game-logo.png');
            echo $card -> showContent();

            // CARD_6
            $card = new CardBeneficio('Do zero ao avançado', './images/make-a-game-logo.png');
            echo $card -> showContent();

            // CARD_7
            $card = new CardBeneficio('Estude quando e onde quiser', './images/make-a-game-logo.png');
            echo $card -> showContent();

            // CARD_8
            $card = new CardBeneficio('Garantia de 30 dias', './images/make-a-game-logo.png');
            echo $card -> showContent();
        ?>

    </div><!--Row-->
</section><!--cards-sobre-conteudo-->