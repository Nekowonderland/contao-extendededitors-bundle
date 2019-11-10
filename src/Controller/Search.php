<?php

namespace Nekowonderland\ExtendedEditorsBundle\Controller;

use Contao\BackendTemplate;

/**
 * Class Search
 *
 * @package Nekowonderland\ExtendedEditorsBundle\Controller
 */
class Search
{
    private function getSearchAreas()
    {
        return [
            'tl_page',
            'tl_article',
            'tl_content'
        ];
    }

    public function runAction()
    {
        $template = new BackendTemplate('eeb_backend');
        $template->setData([
            'areas' => $this->getSearchAreas()
        ]);

        return $template->getResponse();
    }
}