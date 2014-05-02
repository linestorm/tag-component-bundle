<?php

namespace LineStorm\TagComponentBundle\Component;

use LineStorm\Content\Component\AbstractMetaComponent;
use LineStorm\Content\Component\ComponentInterface;
use LineStorm\PostBundle\Model\Tag;
use LineStorm\Content\Component\View\ComponentView;
use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Tagging support of content
 *
 * Class TagComponent
 *
 * @package LineStorm\TagComponentBundle\Component\Tag
 */
class TagComponent extends AbstractMetaComponent implements ComponentInterface
{
    protected $name = 'Tag';
    protected $id = 'tags';

    /**
     * @inheritdoc
     */
    public function isSupported($entity)
    {
        return ($entity instanceof Tag);
    }

    /**
     * @inheritdoc
     */
    public function getAssets()
    {
        return array(
            '@LineStormPostComponentBundle/Resources/public/js/tag.js'
        );
    }

    /**
     * @inheritdoc
     */
    public function getView($entity)
    {
        return new ComponentView('LineStormTagComponentBundle::view.html.twig');
    }

    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tags', 'tag', array(
                'em' => $this->modelManager->getManager(),
                'tag_class' => $this->modelManager->getEntityClass('tag'),
                'name'  => 'name',
            ))
        ;
    }

    public function getRoutes(Loader $loader)
    {
        return $loader->import('@LineStormTagComponentBundle/Resources/config/routing.yml', 'yaml');
    }
} 
