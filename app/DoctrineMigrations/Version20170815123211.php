<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170815123211 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        //$this->addSql('ALTER TABLE mytable ENGINE=INNODB');
        $password = '$2y$13$sZ3cXW/eP/VsDCqHoLd0TOT3ed3kWhcnqc6wQwXskuVB.HsO7c0..'; //1234
        $this->addSql("INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`,
                                               `password`, `roles`)
						VALUES
						    (NULL, 'ammar1', 'ammar1', 'amar1.mhamdi@esprit.tn', 'amar1.mhamdi@esprit.tn', 1, '".$password."', 'a:0:{}'); ");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
