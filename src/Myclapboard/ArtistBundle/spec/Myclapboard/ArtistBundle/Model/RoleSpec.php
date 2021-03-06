<?php

/**
 * This file belongs to myClapboard.
 * The source code of application includes a LICENSE file
 * with all information about license.
 *
 * @author benatespina <benatespina@gmail.com>
 * @author gorkalaucirica <gorka.lauzirika@gmail.com>
 */

namespace spec\Myclapboard\ArtistBundle\Model;

use Myclapboard\ArtistBundle\Model\Interfaces\ArtistInterface;
use Myclapboard\AwardBundle\Model\Interfaces\AwardWonInterface;
use Myclapboard\MovieBundle\Model\Interfaces\MovieInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class RoleSpec.
 *
 * @package spec\Myclapboard\ArtistBundle\Model
 */
class RoleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Myclapboard\ArtistBundle\Model\Role');
    }

    function it_implements_role_interface()
    {
        $this->shouldImplement('Myclapboard\ArtistBundle\Model\Interfaces\RoleInterface');
    }

    function it_should_not_have_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }

    function its_artist_is_mutable(ArtistInterface $artist)
    {
        $this->setArtist($artist)->shouldReturn($this);
        $this->getArtist()->shouldReturn($artist);
    }

    function its_movies_be_mutable(MovieInterface $movie)
    {
        $this->setMovie($movie)->shouldReturn($this);
        $this->getMovie()->shouldReturn($movie);
    }

    function its_awards_be_mutable(AwardWonInterface $award)
    {
        $this->getAwards()->shouldHaveCount(0);

        $this->addAward($award);

        $this->getAwards()->shouldHaveCount(1);

        $this->removeAward($award);

        $this->getAwards()->shouldHaveCount(0);
    }
}
