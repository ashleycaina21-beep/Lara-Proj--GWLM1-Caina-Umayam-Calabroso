// NOIR CAFE - Contact Page
// Member 3: Client-side form validation

document.addEventListener('DOMContentLoaded', () => {

    const form = document.getElementById('noir-demo-contact');

    if (!form) return;

    const feedback = document.getElementById('noir-form-feedback');

    const fields = [
        { id: 'noir-fullname', errorId: 'noir-fullname-error', label: 'Full name' },
        { id: 'noir-email', errorId: 'noir-email-error', label: 'Email address' },
        { id: 'noir-subject', errorId: 'noir-subject-error', label: 'Subject' },
        { id: 'noir-message', errorId: 'noir-message-error', label: 'Message' }
    ];

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    function validateField(field) {

        const input = document.getElementById(field.id);
        const errorEl = document.getElementById(field.errorId);

        if (!input || !errorEl) return false;

        const value = input.value.trim();
        let message = '';

        if (!value) {
            message = `${field.label} is required.`;
        } else if (field.id === 'noir-email' && !emailPattern.test(value)) {
            message = 'Enter a valid email address.';
        }

        errorEl.textContent = message;
        input.setAttribute('aria-invalid', String(Boolean(message)));

        return !message;
    }

    // Validate fields while the user is typing.
    fields.forEach(field => {

        const input = document.getElementById(field.id);

        if (!input) return;

        input.addEventListener('input', () => {
            validateField(field);

            if (feedback) {
                feedback.textContent = '';
            }
        });
    });

    // Validate the entire form when submitted.
    form.addEventListener('submit', event => {

        event.preventDefault();

        let isValid = true;

        fields.forEach(field => {
            if (!validateField(field)) {
                isValid = false;
            }
        });

        if (!isValid) {
            if (feedback) {
                feedback.textContent = 'Please fix the highlighted fields.';
            }

            return;
        }

        if (feedback) {
            feedback.textContent =
                'Form validated successfully! (Demo only — no message was sent.)';
        }

        form.reset();

        fields.forEach(field => {

            const input = document.getElementById(field.id);
            const errorEl = document.getElementById(field.errorId);

            if (input) {
                input.removeAttribute('aria-invalid');
            }

            if (errorEl) {
                errorEl.textContent = '';
            }
        });
    });

});
