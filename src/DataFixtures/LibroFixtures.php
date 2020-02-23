<?php

namespace App\DataFixtures;

use App\Entity\Autor;
use App\Entity\Libro;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LibroFixtures extends Fixture
{
    public const LIBRO_REFERENCE='Libro';

    public function load(ObjectManager $manager)
    {
        $Libro = new Libro();
        $Libro->setTitulo('Quijote');
        $Libro->setIsbn(11111110);
        $Libro->setBestseller(true);
        $Libro->setGenero("Fantasía");
        $Libro->setFecha(\DateTime::createFromFormat('Y/m/d', '1605/01/16'));
        $manager->persist($Libro);
        $this->addReference(self::LIBRO_REFERENCE, $Libro);

        $Libro1 = new Libro();
        $Libro1->setTitulo('El señor de los anillos');
        $Libro1->setIsbn(11111111);
        $Libro1->setBestseller(true);
        $Libro1->setGenero("Fantasía");
        $Libro1->setFecha(\DateTime::createFromFormat('Y/m/d',  '1954/05/16'));
        $manager->persist($Libro1);
        $this->addReference("Libro1", $Libro1);

        $Libro2 = new Libro();
        $Libro2->setTitulo('Harry Potter y la Piedra Filosofal');
        $Libro2->setIsbn(11111112);
        $Libro2->setBestseller(false);
        $Libro2->setGenero("Fantasía");
        $Libro2->setFecha( \DateTime::createFromFormat('Y/m/d', '1997/06/30'));
        $manager->persist($Libro2);
        $this->addReference("Libro2", $Libro2);

        $Libro3 = new Libro();
        $Libro3->setTitulo('Cien años de soledad');
        $Libro3->setIsbn(11111113);
        $Libro3->setBestseller(true);
        $Libro3->setGenero("Histórico");
        $Libro3->setFecha( \DateTime::createFromFormat('Y/m/d', '1967/10/30'));
        $manager->persist($Libro3);
        $this->addReference("Libro3", $Libro3);

        $Libro4 = new Libro();
        $Libro4->setTitulo('El código da vinci');
        $Libro4->setIsbn(11111114);
        $Libro4->setBestseller(true);
        $Libro4->setGenero("Aventuras");
        $Libro4->setFecha(\DateTime::createFromFormat('Y/m/d',  '2003/02/05'));
        $manager->persist($Libro4);
        $this->addReference("Libro4", $Libro4);

        $Autor=new Autor();
        $Autor->setNombre("Miguel");
        $Autor->setApellidos("Cervantes");
        $Autor->setFechaNacimiento(\DateTime::createFromFormat('Y/m/d', '1547/09/29'));
        $Autor->setLibro($Libro);
        $manager->persist($Autor);

        $Autor1=new Autor();
        $Autor1->setNombre("John Ronald");
        $Autor1->setApellidos("Reuel Tolkien");
        $Autor1->setFechaNacimiento(\DateTime::createFromFormat('Y/m/d', '1892/01/03'));
        $Autor1->setLibro($Libro1);
        $manager->persist($Autor1);

        $Autor2=new Autor();
        $Autor2->setNombre("Joanne");
        $Autor2->setApellidos("Rowling");
        $Autor2->setFechaNacimiento(\DateTime::createFromFormat('Y/m/d', '1965/07/31'));
        $Autor2->setLibro($Libro2);
        $manager->persist($Autor2);

        $Autor3=new Autor();
        $Autor3->setNombre("Gabriel");
        $Autor3->setApellidos("García Márquez");
        $Autor3->setFechaNacimiento(\DateTime::createFromFormat('Y/m/d', '1927/03/06'));
        $Autor3->setLibro($Libro3);
        $manager->persist($Autor3);

        $Autor4=new Autor();
        $Autor4->setNombre("Dan");
        $Autor4->setApellidos("Brown");
        $Autor4->setFechaNacimiento(\DateTime::createFromFormat('Y/m/d', '1964/06/22'));
        $Autor4->setLibro($Libro4);
        $manager->persist($Autor4);

        $manager->flush();

    }
}
