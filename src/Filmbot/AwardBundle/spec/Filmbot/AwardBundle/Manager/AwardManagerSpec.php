<?php

/**
 * (c) benatespina <benatespina@gmail.com>
 *
 * This file belongs to Filmbot.
 * The source code of application includes a LICENSE file
 * with all information about license.
 */

namespace spec\Filmbot\AwardBundle\Manager;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Filmbot\AwardBundle\Model\AwardInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class AwardManagerSpec.
 *
 * @package spec\Filmbot\ArtistBundle\Manager
 */
class AwardManagerSpec extends ObjectBehavior
{
    function let(EntityManager $manager, EntityRepository $repository, ClassMetadata $metadata)
    {
        $manager->getRepository('Filmbot\AwardBundle\Entity\Award')
            ->shouldBeCalled()->willReturn($repository);
        $manager->getClassMetadata('Filmbot\AwardBundle\Entity\Award')
            ->shouldBeCalled()->willReturn($metadata);
        $metadata->name = 'Filmbot\AwardBundle\Entity\Award';
        $this->beConstructedWith($manager, 'Filmbot\AwardBundle\Entity\Award');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Filmbot\AwardBundle\Manager\AwardManager');
    }

    function it_creates_award()
    {
        $this->create()->shouldReturnAnInstanceOf('Filmbot\AwardBundle\Entity\Award');
    }

    function it_finds_one_by_name(EntityRepository $repository, AwardInterface $award)
    {
        $repository->findOneBy(array('name' => 'award-name'))
            ->shouldBeCalled()->willReturn($award);

        $this->findOneByName('award-name');
    }
}