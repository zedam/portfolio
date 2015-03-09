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

			$formMapper
            ->add('file', 'file', array('data_class' => 'Symfony\Component\HttpFoundation\File\File'
            ,'property_path' => 'file'
            ))
			->add('title', 'text', array('label' => 'Image Title'))
            ->add('product_id', 'choice',
                    array(
                        'multiple' => true,
                        'delimiter' => ' | ',
                        'choices' => array('r'=>'red', 'g'=>'green', 'b'=>'blue'))
                )

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
            ->add('product_id')
			->addIdentifier('file')
            ->add('title')
			;
		}

        public function getProjects ()
        {

            $projects = array();

            return $projects;

        }

	}
