<?php
	namespace Zeta\ProjectBundle\Admin;

	use Sonata\AdminBundle\Admin\Admin;
	use Sonata\AdminBundle\Datagrid\ListMapper;
	use Sonata\AdminBundle\Datagrid\DatagridMapper;
	use Sonata\AdminBundle\Validator\ErrorElement;
	use Sonata\AdminBundle\Form\FormMapper;

	class ImageAdmin extends Admin
	{

			// Fields to be shown on create/edit forms
			protected function configureFormFields(FormMapper $formMapper)
				{
					// get the current Image instance
					$image = $this->getSubject();

					// use $fileFieldOptions so we can add other options to the field
					$fileFieldOptions = array( 'required' => false ,  'data_class' => null);
					$webPath = '';

					if ($image) {
							// get the container so the full path to the image can be set
							$container = $this->getConfigurationPool()->getContainer();
							$fullPath = $container->get('request')->getBasePath().'/'.$webPath;

							// add a 'help' option containing the preview's img tag
							$fileFieldOptions['help'] = '<img src="'.$fullPath.'" class="admin-preview" />';
					}


					$formMapper
					->add('file')
					->add('title', 'text', array('label' => 'Image Title'))
					;
			}

			// Fields to be shown on filter forms
			protected function configureDatagridFilters(DatagridMapper $datagridMapper)
			{
					$datagridMapper
					->add('file')
					->add('title')
					;
			}

			// Fields to be shown on lists
			protected function configureListFields(ListMapper $listMapper)
			{
					$listMapper
					->add('id')
					->add('project.title')
					->addIdentifier('file')
					->add('title')
					->add('_action', 'actions', array(
						'actions' => array(
							'show' => array(),
							'edit' => array(),
						)
					))
					;
			}

			public function getProjects ()
			{

					$projects = array();

					return $projects;

			}

			public function prePersist($image) {
					$this->manageFileUpload($image);
			}

			public function preUpdate($image) {
					$this->manageFileUpload($image);
			}

			private function manageFileUpload($image) {
					if ($image->getFile()) {
							$image->refreshUpdated();
					}
			}

			public function setEnabledLocales($locales){
					$this->enabedLocales = $locales;
			}

	}
