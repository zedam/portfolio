<?php
namespace Zeta\ProjectBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Zeta\ProjectBundle\Entity\Category;

class LoadGroupData extends AbstractFixture implements OrderedFixtureInterface
{
		/**
		 * {@inheritDoc}
		 */
		public function load(ObjectManager $manager)
		{
				$category_1 = new Category();
				$category_1->setName('Frontend');

				$manager->persist($category_1);
				$manager->flush();

				$this->addReference('Frontend', $category_1);
		}

		/**
		 * {@inheritDoc}
		 */
		public function getOrder()
		{
				return 1; // the order in which fixtures will be loaded
		}
}