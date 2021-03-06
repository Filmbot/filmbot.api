<?php

/**
 * This file belongs to myClapboard.
 * The source code of application includes a LICENSE file
 * with all information about license.
 *
 * @author benatespina <benatespina@gmail.com>
 * @author gorkalaucirica <gorka.lauzirika@gmail.com>
 */

namespace Myclapboard\AwardBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Myclapboard\CoreBundle\DataFixtures\ORM\DataFixtures;

/**
 * Class AwardsWon.
 *
 * @package Myclapboard\ArtistBundle\DataFixtures\ORM
 */
class AwardsWon extends DataFixtures
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->container->get('myclapboard_award.command_awardsWon')->loadEntity(
            $this->container->get('kernel')->getRootDir().'/../app/Resources/fixtures/awardswon.yml'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 2;
    }
}
