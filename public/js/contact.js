document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contact-form');
  const status = document.getElementById('form-status');
  const fields = ['name', 'email', 'subject', 'message'];
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    status.textContent = '';
    let valid = true;
    for (const id of fields) {
      const input = document.getElementById(id);
      const error = document.getElementById(`${id}-error`);
      const value = input.value.trim();
      let message = !value ? 'This field is required.' : '';
      if (id === 'email' && value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) message = 'Enter a valid email address.';
      error.textContent = message;
      input.setAttribute('aria-invalid', String(Boolean(message)));
      if (message) valid = false;
    }
    if (valid) {
      status.textContent = 'Form validated successfully! (Demo only — no message was sent.)';
      form.reset();
      fields.forEach(id => document.getElementById(id).setAttribute('aria-invalid', 'false'));
    }
  });
});
