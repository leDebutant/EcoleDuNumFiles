<?php


interface FormGeneratorInterface
{
    public function add($name,$type,$label);

    public function generate();
}

class FormGenerator
    implements FormGeneratorInterface
{

    public function add($name,$type,$label)
    {
        // TODO: Implement add() method.
    }

    public function generate()
    {
        // TODO: Implement generate() method.
    }
}