<?php

namespace Zeta\ProjectBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Zeta\ProjectBundle\Entity\Image;

class LoadImageData extends AbstractFixture implements OrderedFixtureInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function load(ObjectManager $manager)
	{
		$Image1 = new Image();
		$Image1->setFile('amsterdam-dance-event.jpg');
		$Image1->setTitle('Amsterdam dance event');
		$Image1->setProject($this->getReference('ade'));

		$manager->persist($Image1);
		$manager->flush();

		$this->addReference('ade-image', $Image1);

		$Image2 = new Image();
		$Image2->setFile('amsterdam-dance-event2.jpg');
		$Image2->setTitle('Amsterdam dance event 2');
		$Image2->setProject($this->getReference('ade'));

		$manager->persist($Image2);
		$manager->flush();

		$this->addReference('ade-image-2', $Image2);
	}
	/**
	 * {@inheritDoc}
	 */
	public function getOrder()
	{
		return 3; // the order in which fixtures will be loaded
	}
}