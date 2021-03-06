<?php

/**
 * This file belongs to myClapboard.
 * The source code of application includes a LICENSE file
 * with all information about license.
 *
 * @author benatespina <benatespina@gmail.com>
 * @author gorkalaucirica <gorka.lauzirika@gmail.com>
 */

namespace Myclapboard\ArtistBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Myclapboard\ArtistBundle\Model\Interfaces\ArtistInterface;
use Myclapboard\ArtistBundle\Model\Interfaces\RoleInterface;
use Myclapboard\AwardBundle\Model\Interfaces\AwardWonInterface;
use Myclapboard\CoreBundle\Model\Abstracts\AbstractBaseModel;
use Myclapboard\MovieBundle\Model\Interfaces\MovieInterface;

/**
 * Class Role model.
 *
 * @package Myclapboard\ArtistBundle\Model
 */
class Role extends AbstractBaseModel implements RoleInterface
{
    /**
     * The artist.
     *
     * @var \Myclapboard\ArtistBundle\Model\Interfaces\ArtistInterface
     */
    protected $artist;

    /**
     * Array that contains awards.
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $awards;

    /**
     * The movie.
     *
     * @var \Myclapboard\MovieBundle\Model\Interfaces\MovieInterface
     */
    protected $movie;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->awards = new ArrayCollection;
    }

    /**
     * {@inheritdoc}
     */
    public function setArtist(ArtistInterface $artist)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * {@inheritdoc}
     */
    public function addAward(AwardWonInterface $award)
    {
        $this->awards[] = $award;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAward(AwardWonInterface $award)
    {
        $this->awards->removeElement($award);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * {@inheritdoc}
     */
    public function setMovie(MovieInterface $movie)
    {
        $this->movie = $movie;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMovie()
    {
        return $this->movie;
    }
}
