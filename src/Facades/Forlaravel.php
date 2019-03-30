<?php 
namespace Kidkang\Forlaravel\Facades;
use Illuminate\Support\Facades\Facade;
class Forlaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'forlaravel';
    }
}
 ?>