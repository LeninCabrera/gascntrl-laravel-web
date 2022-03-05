<?php

namespace App\Http\Livewire;

/// ComponentsInterface - Create By Lenin Cabrera
/* 
Esta interface esta pensada en una manera de establecer reglas para los componentes,
cada componente deberá acoplarse a esta interface con el objetivo de utilice las funciones:
- saveModelObject
:función para guardar

- updateModelObjectById
:función para actualizar
:recibe un id del objeto a actualizar

- deleteModelObjectById
:función para borrar un objeto
:recibe un id del objeto a eliminar

NOTA: usted puede agregar una función a futuro si lo desea pero siempre y cuando lo amerite.
*/

interface ComponentContractInterface
{
    /**
     *  Guardar nuevo registro en la base de datos.
     */
    public function saveModelObject();

    /**
     *  Actualizar un registro de la base de datos.
     *  Recibe como parametro un id
     * @param   $objectId
     */

    public function updateModelObjectById($objectId);

    /**
     *  Eliminar un registro de la base de datos.
     *  Recibe como parametro un id
     * @param   $objectId
     */
    public function deleteModelObjectById($objectId);
}