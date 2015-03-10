<?php

namespace Zeta\ProjectBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Zeta\ProjectBundle\Entity\Project;

class LoadProjectData extends AbstractFixture implements OrderedFixtureInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function load(ObjectManager $manager)
	{
		$project1 = new Project();
		$project1->setTitle('Amsterdam dance Event');
		$project1->setDescription('Amsddddd');
		$project1->setCategory($this->getReference('Frontend'));

		$manager->persist($project1);
		$manager->flush();

		$this->addReference('ade', $project1);
	}
	/**
	 * {@inheritDoc}
	 */
	public function getOrder()
	{
		return 2; // the order in which fixtures will be loaded
	}
}