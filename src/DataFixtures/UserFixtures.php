<?php

namespace App\DataFixtures;


use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('info@ticarte.com');
        $user->setRoles(["IS_AUTHENTICATED_FULLY"]);
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'ticarte.com'
        ));
        $manager->persist($user);

        $user1 = new User();
        $user1->setEmail('jloveraulecia@gmail.com');
        $user1->setRoles(["IS_AUTHENTICATED_FULLY"]);
        $user1->setPassword($this->passwordEncoder->encodePassword(
            $user1,
            '123456'
        ));
        $manager->persist($user1);

        $user2 = new User();
        $user2->setEmail('admin@admin.com');
        $user2->setPassword($this->passwordEncoder->encodePassword(
            $user2,
            '123456'
        ));
        $manager->persist($user2);

        $user3 = new User();
        $user3->setEmail('ventas@ventas.com');
        $user3->setPassword($this->passwordEncoder->encodePassword(
            $user3,
            '123456'
        ));
        $manager->persist($user3);

        $user4 = new User();
        $user4->setEmail('almacen@almacen.com');
        $user4->setPassword($this->passwordEncoder->encodePassword(
            $user4,
            '123456'
        ));
        $manager->persist($user4);

        $manager->flush();
    }
}