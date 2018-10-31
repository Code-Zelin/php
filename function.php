<?php
    // class Animal {
    //     public $attribute;
    //     function __construct($param) {
    //         echo "I'm a $param";
    //         $this->attribute = $param;
    //     }

    //     function call() {
    //         if($this->attribute === 'dog'){
    //             echo "旺旺旺";
    //         } else {
    //             echo "喵喵喵";
    //         }
    //     }

    //     function __destruct() {
    //         echo 'end!';
    //     }
    // }

    // $cat = new Animal('cat');
    // $cat->call();
    // echo '<br/>';
    // $dog = new Animal('dog');
    // $dog->call();
    

    class A {
        private function tell() {
            echo "I'm private";
        }
        protected function tell_2() {
            echo "I'm protected";
        }
        function tell_1() {
            $this->tell();
        }
        public function tell_3()
        {
            echo "I'm public";
        }
    }

    class B extends A {
        function tell_4() {
            echo "I'm child";
        }
        function tell_5() {
            $this->tell_2();
        }
    }

    $a = new B();
    // $a->tell();
    // $a->tell_2();
    $a->tell_1();
    echo '<br/>';
    $a->tell_3();
    echo '<br/>';
    $a->tell_4();
    echo '<br/>';
    $a->tell_5();

?>