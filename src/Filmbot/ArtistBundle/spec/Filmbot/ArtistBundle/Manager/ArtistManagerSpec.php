<?php

/**
 * (c) benatespina <benatespina@gmail.com>
 *
 * This file belongs to Filmbot.
 * The source code of application includes a LICENSE file
 * with all information about license.
 */

namespace spec\Filmbot\ArtistBundle\Manager;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Filmbot\ArtistBundle\Model\ArtistInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class ArtistManagerSpec.
 *
 * @package spec\Filmbot\ArtistBundle\Manager
 */
class ArtistManagerSpec extends ObjectBehavior
{
    function let(EntityManager $manager, EntityRepository $repository, ClassMetadata $metadata)
    {
        $manager->getRepository('Filmbot\ArtistBundle\Entity\Artist')
            ->shouldBeCalled()->willReturn($repository);
        $manager->getClassMetadata('Filmbot\ArtistBundle\Entity\Artist')
            ->shouldBeCalled()->willReturn($metadata);
        $metadata->name = 'Filmbot\ArtistBundle\Entity\Artist';
        $this->beConstructedWith($manager, 'Filmbot\ArtistBundle\Entity\Artist');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Filmbot\ArtistBundle\Manager\ArtistManager');
    }

    function it_creates_knowledge()
    {
        $this->create()->shouldReturnAnInstanceOf('Filmbot\ArtistBundle\Entity\Artist');
    }

    function it_finds_one_by_full_name(EntityRepository $repository, ArtistInterface $artist)
    {
        $repository->findOneBy(array('firstName' => 'Quentin', 'lastName' => 'Tarantino'))
            ->shouldBeCalled()->willReturn($artist);

        $this->findOneByFullName('Quentin', 'Tarantino');
    }
}