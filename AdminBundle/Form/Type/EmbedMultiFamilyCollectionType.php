<?php

namespace CleverAge\EAVManager\AdminBundle\Form\Type;

use Sidus\EAVBootstrapBundle\Form\Type\BootstrapCollectionType;
use Sidus\EAVModelBundle\Model\AttributeInterface;
use Sidus\EAVModelBundle\Model\FamilyInterface;
use Sidus\EAVModelBundle\Registry\FamilyRegistry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Very similar to the behavior of an embed type but allowing multi-families
 */
class EmbedMultiFamilyCollectionType extends AbstractType
{
    /**
     * @param FormView      $view
     * @param FormInterface $form
     * @param array         $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
//        $view->vars['allow_add'] = true;
        $view->vars['allow_delete'] = false;
    }

    /**
     * @param OptionsResolver $resolver
     *
     * @throws \Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException
     * @throws \Symfony\Component\OptionsResolver\Exception\AccessException
     * @throws \Sidus\EAVModelBundle\Exception\MissingFamilyException
     */
    public function configureOptions(OptionsResolver $resolver)
    {
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return BootstrapCollectionType::class;
    }
}
