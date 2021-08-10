<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php


    class cars
    {

        public $name;
        public $color;



        function myname($name)
        {
            echo $this->myname = $name;
        }

        function mydoc($color)
        {
            return $this->mydoc = $color;
        }
    }

    $volvo = new cars;

    $volvo->myname("lambo");
    echo $volvo->mydoc("golden") . "<br>";



    //2nd example

    class fruit
    {

        public $name;
        public $color;



        function jack($name)
        {
            echo $this->jack = $name;
        }


        function ace($color)
        {
            return $this->ace = $color;
        }
    }

    $goa = new fruit;

    $goa->jack("Grapes");
    echo $goa->ace("Green") . "<br>";



    //3rd example


    class dog
    {

        public $breed;

        public $rank;

        public $name;


        function rob($breed)
        {
            echo $this->rob = $breed;
        }


        function van($rank)
        {
            return $this->van = $rank;
        }


        function dam($name)
        {
            return $this->dam = $name;
        }
    }



    $mac = new dog;

    $mac->rob("husky");
    echo $mac->van(4);
    echo $mac->dam("spike") . "<br>";



    //4th example




    class city
    {
        //properties

        public $name;

        public $population;

        public $rivers;

        public $area;

        //method

        function god($name)
        {
            echo $this->god = $name;
        }

        function of($population)
        {
            return $this->of = $population;
        }

        function war($rivers)
        {
            return $this->war = $rivers;
        }

        function zeus($area)
        {
            return $this->zeus = $area;
        }
    }

    //object

    $state = new city;

    $state->god("sunder nagar ");
    echo $state->of("100k ");
    echo $state->war("satluj bias ");
    echo $state->zeus("mountains") . "<br>";



    //5th example



    class anime
    {

        public $name;

        public $color;

        public $character;



        function foo($name)
        {
            echo $this->foo = $name;
        }


        function boo($color)
        {
            return $this->boo = $color;
        }


        function loo($character)
        {
            return $this->loo = $character;
        }
    }


    $object = new anime;

    $object->foo("MUI ");
    echo $object->boo("Shiny Blue ");
    echo $object->loo("GOKU ") . "<br>";




    //6th example



    class pogo
    {

        public $name;

        public $color;

        public $rank;

        public $channel;


        function fun($name)
        {
            echo $this->fun = $name;
        }

        function mon($color)
        {
            return $this->mon = $color;
        }

        function pop($rank)
        {
            return $this->pop = $rank;
        }


        function war($channel)
        {
            return $this->war = $channel;
        }
    }


    $cars = new pogo;
    $cars->fun("pogo ");
    echo $cars->mon("red green ");
    echo $cars->pop("9 ");
    echo $cars->war("cartoon"). "<br>";



    ?>



</body>

</html>