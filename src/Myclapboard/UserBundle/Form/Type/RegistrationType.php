<?php

/**
 * This file belongs to myClapboard.
 * The source code of application includes a LICENSE file
 * with all information about license.
 *
 * @author benatespina <benatespina@gmail.com>
 * @author gorkalaucirica <gorka.lauzirika@gmail.com>
 */

namespace Myclapboard\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class RegistrationType.
 *
 * @package Myclapboard\UserBundle\Form\Type
 */
class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->remove('username');
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('csrf_protection' => false));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'fos_user_registration';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'myclapboard_user_registration';
    }
}
