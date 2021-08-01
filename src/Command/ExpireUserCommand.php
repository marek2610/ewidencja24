<?php

namespace App\Command;

use App\Entity\User;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ExpireUserCommand extends Command
{
  private $container;

  public function __construct(ContainerInterface $container)
  {
    $this->container = $container;
    parent::__construct();
  }

  protected function configure()
  {
    $this
      ->setName('app:expire_user')
      ->setDescription('Komenda do wygaszania Userów');
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $entityManager = $this->container->get('doctrine.orm.entity_manager');
    $users = $entityManager->getRepository(User::class)->findExpireUser();

    $output->writeln(sprintf('Znaleziono <info>%d</info> użytkowników do wygaszenia.', count($users)));

    
    foreach ($users as $user){
      $user->setStatus(User::STATUS_DELETE);
      $user->setRoles(null);
      $entityManager->persist($user);
    }
    
    $entityManager->flush();
    
    $output->writeln('Zaktualizowano status użytkowników.');
    
    #pokazuje komentarze bez błędów
    return is_int($output) ? $output : 0;
  }
}