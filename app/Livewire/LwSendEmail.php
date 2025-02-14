<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use App\Services\ContactData;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LwSendEmail extends Component
{
    #[Validate('required', message: 'Campo requerido*')]
    #[Validate('min:3', message: 'Debe contener al menos 3 caracteres*')]
    public string $nombre = '';

    #[Validate('required', message: 'Campo requerido*')]
    #[Validate('min:3', message: 'Debe contener al menos 3 caracteres*')]
    public string $apellido = '';

    #[Validate('required', message: 'Campo requerido*')]
    #[Validate('digits:10', message: 'Deben ser 10 dígitos*')]
    public string $whatsapp = '';

    #[Validate('required', message: 'Campo requerido*')]
    #[Validate('min:8', message: 'Correo muy pequeño*')]
    #[Validate('email', message: 'Correo no válido*')]
    public string $email = '';

    #[Validate('required', message: 'Completar reCAPTCHA')]
    public $recaptchaToken;


    // 🔥
    public function sendEmail()
    {
        $this->validate();

         $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $this->recaptchaToken,
        ]);

        if (!$response->json('success'))
            return session()->flash('error', 'reCaptcha falló verificación. Intenta nuevamente.');

        $data = new ContactData();
        $data->setName(trim($this->nombre));
        $data->setLastname(trim($this->apellido));
        $data->setWhatsapp(trim($this->whatsapp));
        $data->setEmail(trim($this->email));

        Mail::to(trim($this->email))->send(new ContactMail($data));

        sleep(2);
        $this->reset();
        session()->flash('mail-sent', '✅ Correo enviado correctamente!');
        $this->dispatch('close-alert');
    }

    public function render()
    {
        return view('livewire.lw-send-email');
    }
}
