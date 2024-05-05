<?php



namespace Solenoid\Base64U;



class Base64U
{
    public string $value;



    # Returns [self]
    public function __construct (string $value)
    {
        // (Getting the value)
        $this->value = $value;
    }

    # Returns [Base64U]
    public static function select (string $value)
    {
        // Returning the value
        return new Base64U( $value );
    }



    # Returns [Base64U]
    public function encode ()
    {
        // Returning the value
        return Base64U::select( str_replace( [ '+', '/', '=' ], [ '-', '_', '~' ], base64_encode( $this->value ) ) );
    }

    # Returns [Base64U]
    public function decode ()
    {
        // Returning the value
        return Base64U::select( base64_decode( str_replace( [ '-', '_', '~' ], [ '+', '/', '=' ], $this->value ) ) );
    }



    # Returns [string]
    public function __toString ()
    {
        // Returning the value
        return $this->value;
    }
}



?>