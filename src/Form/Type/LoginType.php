<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

final class LoginType extends AbstractType
{
    /**
     * @var AuthenticationUtils
     */
    private $authenticationUtils;

    public function __construct(AuthenticationUtils $authenticationUtils)
    {
        $this->authenticationUtils = $authenticationUtils;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class, ['label' => 'Email'])
            ->add('password', PasswordType::class, ['trim' => true])
            ->add('_remember_me', CheckboxType::class, [
                'label_attr' => ['class' => 'switch-custom'],
                'required' => false
            ])
            ->add('_target_path', HiddenType::class)
            ->add('button-submit', SubmitType::class, ['label' => 'Log In']);

        $authUtils = $this->authenticationUtils;
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($authUtils) {
            $error = $authUtils->getLastAuthenticationError();
            if ($error) {
                $event->getForm()->addError(new FormError($error->getMessage()));
            }
            $event->setData(array_replace((array) $event->getData(), array(
                'email' => $authUtils->getLastUsername(),
            )));
        });
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => true,
            'csrf_field_name' => '_csrf_token',
            'csrf_token_id' => 'authenticate'
        ));
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
