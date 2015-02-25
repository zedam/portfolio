<?php
	namespace Zeta\ProjectBundle\Admin;

	use Sonata\AdminBundle\Admin\Admin;
	use Sonata\AdminBundle\Datagrid\ListMapper;
	use Sonata\AdminBundle\Datagrid\DatagridMapper;
	use Sonata\AdminBundle\Form\FormMapper;

	class ProjectAdmin extends Admin
	{
		// Fields to be shown on create/edit forms
		protected function configureFormFields(FormMapper $formMapper)
		{
			$formMapper
			->add('title', 'text', array('label' => 'Project Title'))
			->add('description', 'text', array('label' => 'Description'))
			->add('url') //if no type is specified, SonataAdminBundle tries to guess it
			->add('location') //if no type is specified, SonataAdminBundle tries to guess it
			->add('intro') //if no type is specified, SonataAdminBundle tries to guess it
			->add('labels') //if no type is specified, SonataAdminBundle tries to guess it
			->add('isMobile') //if no type is specified, SonataAdminBundle tries to guess it
			->add('isTablet') //if no type is specified, SonataAdminBundle tries to guess it
			->add('isDesktop') //if no type is specified, SonataAdminBundle tries to guess it
			->add('isRetina') //if no type is specified, SonataAdminBundle tries to guess it
			->add('size') //if no type is specified, SonataAdminBundle tries to guess it
			->add('category_id') //if no type is specified, SonataAdminBundle tries to guess it
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