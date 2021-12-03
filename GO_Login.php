<?php
    class GO_Login {
        public function LoginProcess($Sentence) {
            return count(explode(" ",$Sentence));
        }
    }
?>