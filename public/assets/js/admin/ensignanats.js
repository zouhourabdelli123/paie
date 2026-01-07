        document.addEventListener('DOMContentLoaded', function() {
            const btnNouveau = document.getElementById('btnNouveau');
            const btnCloseModal = document.getElementById('btnCloseModal');
            const btnCancel = document.getElementById('btnCancel');
            const btnSubmit = document.getElementById('btnSubmit');
            const modalBackdrop = document.getElementById('modalBackdrop');
            const modalNouveau = document.getElementById('modalNouveau');
            const formNouveau = document.getElementById('formNouveau');

            btnNouveau.addEventListener('click', function() {
                modalBackdrop.classList.add('show');
                modalNouveau.classList.add('show');
                document.body.style.overflow = 'hidden';
            });

            function closeModal() {
                modalBackdrop.classList.remove('show');
                modalNouveau.classList.remove('show');
                document.body.style.overflow = 'auto';
            }

            btnCloseModal.addEventListener('click', closeModal);
            btnCancel.addEventListener('click', closeModal);

            // Fermer en cliquant sur le backdrop
            modalBackdrop.addEventListener('click', closeModal);

            btnSubmit.addEventListener('click', function() {
                if (formNouveau.checkValidity()) {
                    console.log('Formulaire soumis');
                    closeModal();
                    formNouveau.reset();

                    alert('Projet créé avec succès!');
                } else {
                    formNouveau.reportValidity();
                }
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modalNouveau.classList.contains('show')) {
                    closeModal();
                }
            });
        });
