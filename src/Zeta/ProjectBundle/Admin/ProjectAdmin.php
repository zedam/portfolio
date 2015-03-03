<?php
	namespace Zeta\ProjectBundle\Admin;

	use Sonata\AdminBundle\Admin\Admin;
	use Sonata\AdminBundle\Datagrid\ListMapper;
	use Sonata\AdminBundle\Datagrid\DatagridMapper;
    use Sonata\AdminBundle\Validator\ErrorElement;
	use Sonata\AdminBundle\Form\FormMapper;

	class ProjectAdmin extends Admin
	{
		// Fields to be shown on create/edit forms
		protected function configureFormFields(FormMapper $formMapper)
		{

            $categories = array('choices' => null);
			$formMapper
            ->with('Projects')
			->add('title', 'text', array('label' => 'Project Title'))
			->add('description', 'text', array('label' => 'Description'))
			->add('url')
			->add('location')
			->add('intro')
            ->add('labels')
			->add('isMobile')
			->add('isTablet')
			->add('isDesktop')
			->add('isRetina')
			->add('size')
			->add('category_id')
			/*->add('category_id', 'sonata_type_choice_field_mask', array(
                'choices' =>  array('uri' => 'uri', 'route' => 'route'),
                'map' => array(
                    'route' => array('route', 'parameters'),
                    'uri' => array('uri'),
                ),
                'empty_value' => 'Choose an option',
                'required' => false
            ->add('category_id', 'choice', array(
                'choices' => array('asas'),
            ))
            ))*/
            ->end()
        	;
		}

		// Fields to be shown on filter forms
		protected function configureDatagridFilters(DatagridMapper $datagridMapper)
		{
			$datagridMapper
			->add('title')
			->add('url')
			;
		}

		// Fields to be shown on lists
		protected function configureListFields(ListMapper $listMapper)
		{
			$listMapper
			->addIdentifier('title')
			->add('description')
			->add('url')
			;
		}
	}