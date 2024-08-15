import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Biztos, hogy törölni szeretnéd?',
                text: "Ez a művelet visszavonhatatlan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Igen, törlés!',
                cancelButtonText: 'Mégse'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = button.getAttribute('href');
                }
            });
        });
    });
});
