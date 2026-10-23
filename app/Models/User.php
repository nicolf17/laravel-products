<?php

namespace App\Models;

// Interfaz opcional para exigir la verificación del correo electrónico.
// use Illuminate\Contracts\Auth\MustVerifyEmail;

// Permite crear usuarios de prueba mediante la fábrica UserFactory.
use Database\Factories\UserFactory;
// Configura qué atributos del usuario se pueden asignar de forma masiva.
use Illuminate\Database\Eloquent\Attributes\Fillable;
// Evita exponer ciertos atributos al convertir el usuario en un arreglo o JSON.
use Illuminate\Database\Eloquent\Attributes\Hidden;
// Añade soporte para fábricas de modelos.
use Illuminate\Database\Eloquent\Factories\HasFactory;
// Proporciona autenticación de Laravel, incluyendo contraseña e inicio de sesión.
use Illuminate\Foundation\Auth\User as Authenticatable;
// Permite que el usuario reciba notificaciones.
use Illuminate\Notifications\Notifiable;

// Solo estos campos pueden asignarse masivamente desde formularios o código.
#[Fillable(['name', 'email', 'password'])]
// Estos datos sensibles se ocultan en serializaciones del modelo.
#[Hidden(['password', 'remember_token'])]
// Modelo que representa a los usuarios y hereda el comportamiento de autenticación.
class User extends Authenticatable
{
    // Habilita las fábricas y las notificaciones para este modelo.
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Define las conversiones automáticas de los atributos del usuario.
     *
     * @return array<string, string> Nombre del atributo y tipo de conversión.
     */
    protected function casts(): array
    {
        return [
            // Convierte la fecha de verificación del correo a un objeto de fecha.
            'email_verified_at' => 'datetime',
            // Hashea automáticamente la contraseña antes de guardarla.
            'password' => 'hashed',
        ];
    }
}
