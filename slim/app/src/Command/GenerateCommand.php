<?php

namespace App\Command;

use Faker\Factory;
use Faker\ORM\Doctrine\Populator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends Command
{
    protected $em;
    protected function configure()
    {
        $this
            ->setName('faker:generate')
            ->addOption(
                'Entity',
                'e',
                InputOption::VALUE_REQUIRED,
                'The entity type.'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $insertedPKs = array_merge($this->generateOrganisationsAndUsers());

        return $output->write(print_r($insertedPKs, 1));
    }

    protected function generateOrganisationsAndUsers()
    {
        $generator = Factory::create('en_GB');
        $populator = new Populator($generator, $this->getEntityManager());
        $populator->addEntity('App\Entity\Address', 10, [
            'county' => function() use ($generator) { return $generator->county(); },
        ]);
        $populator->addEntity('App\Entity\Organisation', 5, [
            'name' => function() use ($generator) { return $generator->company(); },
        ]);
        $populator->addEntity('App\Entity\User', 5, [
            'name' => function() use ($generator) { return $generator->name(); },
            'employeeId' => function() use ($generator) { return $generator->bothify('???####'); },
            'inProbation' => function() use ($generator) { return $generator->boolean(); }
        ]);
        return $populator->execute();
    }

    private function getEntityManager()
    {
        if (isset($this->em)) {
            return $this->em;
        } else {
            $settings = include 'app/settings.php';
            $settings = $settings['settings']['doctrine'];
            $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
                $settings['meta']['entity_path'],
                $settings['meta']['auto_generate_proxies'],
                $settings['meta']['proxy_dir'],
                $settings['meta']['cache'],
                false
            );
            $this->em = \Doctrine\ORM\EntityManager::create($settings['connection'], $config);
            return $this->em;
        }
    }
}
