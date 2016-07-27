<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160727001529 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $sql = "insert into model(name) values ('Passive core')";
        $this->connection->executeQuery($sql);

        $sql = "insert into model(name) values ('IVV/NCLEX')";
        $this->connection->executeQuery($sql);

        $sql = "insert into model(name) values ('NCLEX/VANG')";
        $this->connection->executeQuery($sql);

        $sql = "insert into model(name) values ('PRNHX/VANG')";
        $this->connection->executeQuery($sql);

        $sql = "insert into model(name) values ('IVV/PRNHX')";
        $this->connection->executeQuery($sql);

        $sql = "insert into model(name) values ('IVE/IVW')";
        $this->connection->executeQuery($sql);

        $sql = "insert into model(name) values ('RB')";
        $this->connection->executeQuery($sql);

        $sql = "insert into model(name) values ('NCLEX')";
        $this->connection->executeQuery($sql);

        $sql = "insert into model(name) values ('NCLEX under $20k')";
        $this->connection->executeQuery($sql);

        $sql = "insert into model(name) values ('PRNHX')";
        $this->connection->executeQuery($sql);

        $sql = "insert into model(name) values ('PRNHX under $20k')";
        $this->connection->executeQuery($sql);
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
