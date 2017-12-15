<?php

/**
 * Created By Alfonso Fernandez-Ocampo
 */

class FormEdit extends Form implements FormInstanceInterface
{
    public function __construct()
    {
        parent::__construct();
        parent::prepareFormBuilder();
        $this->prepareFormBuilder();
        $this->SetFormAttributes();
    }

    public function prepareFormBuilder(): void
    {
        $this->removeField('description');
    }


}