<?php 
    class CardBeneficio
    {
        public $textContent = null;
        public $pathImage = null;

        function __construct($textContent, $pathImage)
        {
            $this->textContent = $textContent;
            $this->pathImage = $pathImage;
        }

        function showContent()
        {
            return  "<div class='card_beneficio card m-3 p-3 d-flex flex-columm justify-content-between'>
                        <div class='text-center pb-3'>
                            <img src='$this->pathImage' style='width:80px; height:80px;'>
                        </div>
                        <h4 class='text-center'>$this->textContent</h4>
                    </div>";
        }
    }

?>