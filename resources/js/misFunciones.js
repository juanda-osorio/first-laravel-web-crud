function alertaBorrar() {
    Swal.fire({
        title: 'Estás seguro?',
        text: "Una vez borrado no hay marcha atrás!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, bórralo!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Borrado!',
                'Ha sido borrado.',
                'success'
            );
        }
    });
}