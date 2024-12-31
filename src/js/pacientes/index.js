import Swal from 'sweetalert2';

import { lenguaje } from "../lenguaje";
import { validarFormulario, Toast } from "../funciones";
import Datatable from "datatables.net-bs5";
const formulario = document.querySelector('form');
const btnModificar = document.getElementById('btnModificar');
const btnCancelar = document.getElementById('btnCancelar');
const btnBuscar = document.getElementById('btnBuscar');
const btnGuardar = document.getElementById('btnGuardar');
const tablaPacienteContainer = document.getElementById('tablaPacienteContainer');


let contenedor = 1;

//Ya Está
//!DataTable
const datatable = new Datatable('#tablaPaciente', {
    language: lenguaje,
    data: null,
    columns: [
        {
            title: 'NO',
            render: () => contenedor++
        },
        {
            title: 'NOMBRE DEL PACIENTE',
            data: 'nombre'
        },
        {
            title: 'DIRECCIÓN',
            data: 'pac_direccion',
            render: (data, type, row) => {
                if (type === 'display' && (data === null || data === '')) {
                    return '<span style="color: red;">Sin Direccion</span>';
                }
                return data;
            },
        },
        {
            title: 'TELEFONO',
            data: 'pac_tel1',
        },
        {
            title: 'VER DATOS COMPLETOS',
            data: 'pac_id',
            searchable: false,
            orderable: false,
            render: (data, type, row, meta) => `<button class="btn btn-info" data-id='${data}' data-nombre='${row["mis_nombre"]}' data-latitud='${row["mis_latitud"]}' data-longitud='${row["mis_longitud"]}'>Ver Datos</button>`
        },
        {
            title: 'MODIFICAR DATOS',
            data: 'pac_id',
            searchable: false,
            orderable: false,
            render: (data, type, row, meta) => `<button class="btn btn-warning bi bi-pen" data-id='${data}'  
            data-nom1='${row["pac_nom1"]}'
            data-nom2='${row["pac_nom2"]}'
            data-ape1='${row["pac_ape1"]}'
            data-ape2='${row["pac_ape2"]}' data-direccion='${row["pac_direccion"]}'data-genero='${row["pac_genero"]}' data-telefono1='${row["pac_tel1"]}' data-telefono2='${row["pac_tel2"]}' data-edad='${row["pac_edad"]}' data-ant_per='${row["pac_ant_per"]}' data-ant_fam='${row["pac_ant_fam"]}'   data-medicamento_consu='${row["pac_consu_medica"]}'  >Modificar Datos</button>`
        },
        {
            title: 'ELIMINAR',
            data: 'pac_id',
            searchable: false,
            orderable: false,
            render: (data, type, row, meta) => `<button class="btn btn-danger bi bi-trash" data-id='${data}'>Eliminar</button>`
        }
    ]
})






//Ya Está
//!!BUSCAR
const buscar = async () => {


    contenedor = 1;

    const url = `/Clinica_Dental/API/pacientes/buscar`;
    const config = {
        method: 'GET'
    }

    try {
        const respuesta = await fetch(url, config)
        const data = await respuesta.json();

        console.log(data);
        datatable.clear().draw()
        if (data) {
            datatable.rows.add(data).draw();
        } else {
            Toast.fire({
                title: 'No se encontraron registros',
                icon: 'info'
            })
        }

    } catch (error) {
        // console.log(error);
    }
}

// Ya Está


//!!GUARDAR
const guardar = async (evento) => {
    evento.preventDefault();

    if (!validarFormulario(formulario, ['pac_id','pac_nom2','pac_ape2','pac_direccion','pac_tel2','pac_ant_per','pac_ant_fam','pac_consu_medica','pac_situacion'])) {
        Toast.fire({
            icon: 'info',
            text: 'Debe llenar todos los datos'
        });
        return;
    }

    const body = new FormData(formulario);
    body.delete('pac_id'); // Elimina datos que no necesitas

    const url = '/Clinica_Dental/API/pacientes/guardar';
    const config = {
        method: 'POST',
        body,
    };

    try {
        const respuesta = await fetch(url, config);
            const data = await respuesta.json();
            // console.log(data);
            const { codigo, mensaje, detalle } = data;

        switch (codigo) {
            case 1:
                formulario.reset();
                Swal.fire({
                    icon: 'success',
                    title: 'paciente Registrado',
                    text: mensaje,
                    // confirmButtonText: 'OK'
                });
                buscar();
                break;
                case 0:
                    console.log(detalle);
                    break;
                default:
                    break;
            }

    } catch (error) {
        console.error('Error en la solicitud:', error);
    }
};



// Ya Está
//!ELIMINAR
const eliminar = async (e) => {
    const result = await Swal.fire({
        icon: 'question',
        title: 'Eliminar Paciente',
        text: '¿Desea eliminar este Paciente?',
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    });

    if (result.isConfirmed) {
        const button = e.target;
        const id = button.dataset.id;
        const body = new FormData()
        body.append('pac_id', id)
        const url = 'API/pacientes/eliminar';
        const headers = new Headers();
        headers.append("X-Requested-With","fetch");
        const config = {
            method: 'POST',
            body
        }

        try {
            const respuesta = await fetch(url, config);
            const data = await respuesta.json();
            console.log(data);
            const { codigo, mensaje, detalle } = data;

            switch (codigo) {
                case 1:
                    // Recargar la tabla después de eliminar
                    datatable.clear().draw();
                    Swal.fire({
                        icon: 'success',
                        title: 'Eliminado Exitosamente',
                        text: mensaje,
                        confirmButtonText: 'OK'
                    });
                    buscar();
                    break;
                case 0:
                    console.log(detalle);
                    break;
                default:
                    break;
            }

        } catch (error) {
            console.log(error);
        }
    }
};


//!!TRAER DATOS
const traeDatos = (e) => {

    const button = e.target;
    const id = button.dataset.id
    const nom1 = button.dataset.nom1
    const nom2 = button.dataset.nom2
    const ape1 = button.dataset.ape1
    const ape2 = button.dataset.ape2
    const genero = button.dataset.genero
    const edad = button.dataset.edad
    const direccion = button.dataset.direccion
    const telefono1 = button.dataset.telefono1
    const telefono2 = button.dataset.telefono2
    const ant_per = button.dataset.ant_per
    const ant_fam = button.dataset.ant_fam
    const medicamento_consu = button.dataset.medicamento_consu

    const dataset = {
        id,
        nom1,
        nom2,
        ape1,
        ape2,
        genero,
        direccion,
        edad,
        telefono1,
        telefono2,
        ant_per,
        ant_fam,
        medicamento_consu,
    };
    // console.log({dataset});
    // return;

    //! Llenar el formulario con los datos obtenidos
    formulario.pac_id.value = dataset.id;
    formulario.pac_nom1.value = dataset.nom1;
    formulario.pac_nom2.value = dataset.nom2;
    formulario.pac_ape1.value = dataset.ape1;
    formulario.pac_ape2.value = dataset.ape2;
    formulario.pac_genero.value = dataset.genero;
    formulario.pac_direccion.value = dataset.direccion;
    formulario.pac_edad.value = dataset.edad;
    formulario.pac_tel1.value = dataset.telefono1;
    formulario.pac_tel2.value = dataset.telefono2;
    formulario.pac_ant_per.value = dataset.ant_per;
    formulario.pac_ant_fam.value = dataset.ant_fam;
    formulario.pac_consu_medica.value = dataset.medicamento_consu;


    window.scrollTo(0, 125);

    btnGuardar.style.display = 'none';
    btnModificar.style.display = 'block';
    btnCancelar.style.display = 'block';  
};



//!MODIFICAR
const modificar = async () => {
    if (!validarFormulario(formulario, ['pac_id','pac_nom2','pac_ape2','pac_direccion','pac_tel2','pac_ant_per','pac_ant_fam','pac_consu_medica','pac_situacion'])) {
        Toast.fire({
            icon: 'info',
            text: 'Debe llenar todos los datos'
        });
        return;
    }

    const body = new FormData(formulario)
    const url = `/Clinica_Dental/API/pacientes/modificar`;
    const config = {
        method: 'POST',
        body
    }

    try {
        const respuesta = await fetch(url, config)
        const data = await respuesta.json();

        const { codigo, mensaje, detalle } = data;
        let icon = 'success'
        switch (codigo) {
            case 1:
                formulario.reset();
                btnModificar.style.display = 'none';
                btnCancelar.style.display = 'none';
                // Mostrar el botón btnGuardar
                btnGuardar.style.display = 'block';
                icon = 'success';
                buscar();
                break;

            case 0:
                icon = 'error'
                console.log(detalle)
                break;

            default:
                break;
        }

        Toast.fire({
            icon,
            text: mensaje
        })

    } catch (error) {
        console.log(error);
    }
}

btnCancelar.addEventListener('click', (evento) => {
    evento.preventDefault();
    // Ocultar los botones btnModificar y btnCancelar
    btnModificar.style.display = 'none';
    btnCancelar.style.display = 'none';
    // Mostrar el botón btnGuardar
    btnGuardar.style.display = 'block';
    formulario.reset();
});

btnGuardar.addEventListener('click', guardar)

btnModificar.addEventListener('click', async (evento) => {
    // Prevenir el comportamiento predeterminado del botón
    evento.preventDefault();

    // Deshabilitar el botón para prevenir múltiples clics
    btnModificar.disabled = true;

    // Llamar a la función modificar
    await modificar();

    // Volver a habilitar el botón después de que la operación haya finalizado
    btnModificar.disabled = false;
});

datatable.on('click','.btn-warning', traeDatos )
 datatable.on('click','.btn-danger', eliminar )

 buscar();

 