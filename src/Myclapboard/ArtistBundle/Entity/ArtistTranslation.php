<?php

/**
 * This file belongs to myClapboard.
 * The source code of application includes a LICENSE file
 * with all information about license.
 *
 * @author benatespina <benatespina@gmail.com>
 * @author gorkalaucirica <gorka.lauzirika@gmail.com>
 */

namespace Myclapboard\ArtistBundle\Entity;

use Gedmo\Translatable\Entity\MappedSuperclass\AbstractPersonalTranslation;

/**
 * Class ArtistTranslation.
 *
 * @package Myclapboard\ArtistBundle\Entity
 */
class ArtistTranslation extends AbstractPersonalTranslation
{
    /**
     * Constructor.
     *
     * @param string $locale  The locale
     * @param string $field   The name of field
     * @param string $content The content of field
     */
    public function __construct($locale, $field, $content)
    {
        $this->setLocale($locale);
        $this->setField($field);
        $this->setContent($content);
    }

    protected $object;
}
