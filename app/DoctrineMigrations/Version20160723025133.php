<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160723025133 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $sql = "insert into asset_class(name) values ('small cap growth')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('small cap value')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('large cap blend')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('large cap growth')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('large cap value')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('foreign large cap')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('foreign small cap')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('commodities')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('REITs')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('emerging markets')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('domestic bonds')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('high yield bonds')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('foreign bonds')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('specialty bonds')";
        $this->connection->executeQuery($sql);

        $sql = "insert into asset_class(name) values ('cash')";
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
