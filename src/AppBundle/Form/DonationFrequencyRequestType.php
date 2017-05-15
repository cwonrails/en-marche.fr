<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DonationFrequencyRequestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $frequencies = $options['donation_frequency'];
        $builder
            ->add('frequency', ChoiceType::class, [
                'choices' => $frequencies,
                'choice_label' => function ($frequency) {
                    if ('00' === $frequency) {
                        return sprintf('Durée illimitée');
                    }
                    return sprintf('Pendant %s mois', $frequency);
                },
                'expanded' => true,
                'multiple' => false
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Continuer',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired('donation_frequency');
    }

}