<?php
	namespace Zeta\ProjectBundle\Admin;

	use Sonata\AdminBundle\Admin\Admin;
	use Sonata\AdminBundle\Datagrid\ListMapper;
	use Sonata\AdminBundle\Datagrid\DatagridMapper;
    use Sonata\AdminBundle\Validator\ErrorElement;
	use Sonata\AdminBundle\Form\FormMapper;


	class CategoryAdmin extends Admin
	{
		// Fields to be shown on create/edit forms
		protected function configureFormFields(FormMapper $formMapper)
		{

			$formMapper
            ->with('Category')
			->add('name', 'text', array('label' => 'Project Title'))
            ->end()
        	;
		}

		// Fields to be shown on filter forms
		protected function configureDatagridFilters(DatagridMapper $datagridMapper)
		{
			$datagridMapper
			->add('name')
			;
		}

		// Fields to be shown on lists
		protected function configureListFields(ListMapper $listMapper)
		{
			$listMapper
            ->add('id')
			->addIdentifier('name')
			;
		}
	}