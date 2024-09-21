<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomEvent')
            ->add('dateDebut',DateType::class, [
                'widget' => 'single_text'
                 ])
            ->add('dateFin',DateType::class, [
                'widget' => 'single_text'
            
            ])
            ->add('lieuEvent')
            ->add('nbPlaces')
            ->add('typeEvent')
           /* ->add('nbVues')*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
