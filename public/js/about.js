document.addEventListener('DOMContentLoaded', () => {
  const button = document.getElementById('read-more');
  const extra = document.getElementById('extra-story');
  button.addEventListener('click', () => {
    extra.hidden = !extra.hidden;
    button.textContent = extra.hidden ? 'READ MORE' : 'READ LESS';
    button.setAttribute('aria-expanded', String(!extra.hidden));
  });
});
