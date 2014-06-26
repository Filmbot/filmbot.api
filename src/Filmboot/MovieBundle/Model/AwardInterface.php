<?php
/**
 * (c) benatespina <benatespina@gmail.com>
 *
 * This file belongs to Filmboot.
 * The source code of application includes a LICENSE file
 * with all information about license.
 */

namespace Filmboot\MovieBundle\Model;

/**
 * Interface AwardInterface.
 *
 * @package Filmboot\MovieBundle\Model
 */
interface AwardInterface
{
    /**
     * Gets id.
     *
     * @return string
     */
    public function getId();

    /**
     * Gets name.
     *
     * @return string
     */
    public function getName();

    /**
     * Sets name.
     *
     * @param string $name The name
     *
     * @return \Filmboot\MovieBundle\Model\AwardInterface
     */
    public function setName($name);

    /**
     * Gets year.
     *
     * @return int
     */
    public function getYear();

    /**
     * Sets year.
     *
     * @param int $year The year
     *
     * @return \Filmboot\MovieBundle\Model\AwardInterface
     */
    public function setYear($year);

    /**
     * Gets category.
     *
     * @return string
     */
    public function getCategory();

    /**
     * Sets category.
     *
     * @param string $category The category
     *
     * @return \Filmboot\MovieBundle\Model\AwardInterface
     */
    public function setCategory($category);
}
