<?php

/**
 * Created By Alfonso Fernandez-Ocampo
 */

class Form extends FormBase implements FormInstanceInterface
{
    public function __construct()
    {
        $this->prepareFormBuilder();
        $this->setFormAttributes();
    }

    public function prepareFormBuilder(): void
    {
        $this->addField('email','email','Email')
            ->addField('username','text','Username')
            ->addField('password','password','Password')
            ->addField('description','textarea','Description')
            ->addField('submit','button','Submit');
    }
}

