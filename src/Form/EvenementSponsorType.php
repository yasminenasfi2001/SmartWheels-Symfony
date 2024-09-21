<?php

namespace App\Form;

use App\Entity\EvenementSponsor;
use App\Entity\Evenement;
use App\Entity\Sponsor;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementSponsorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('ID_event',EntityType::class,
            ['class'=>Evenement::class,
                'choice_label'=>'nomEvent',
                'label'=>'Evenment'
            ])
            ->add('ID_sponsor',EntityType::class,
            ['class'=>Sponsor::class,
                'choice_label'=>'idSponsor',
                'label'=>'Sponsor'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EvenementSponsor::class,
        ]);
    }
}
